<?php

namespace App\Container;

class Container
{
    private array $definitions = [];
    private array $instances = [];

    public function make(string $name): ?object
    {
        $definition = $this->destinations[$name] ?? $this->autowire($name);

        return $definition($this);
    }

    public function register(string $name, Closure $definition): self
    {
        $this->definitions[$name] = $definition;

        return $this;
    }

    public function singleton(string $name, Closure $definition): self
    {
        $this->register($name, function () use ($name, $definition) {
            if(array_key_exists($name, $this->instances)) {
                return $this->instances[$name];
            }

            $this->instances[$name] = ($definition)($this);

            return $this->instances[$name];
        });

        return $this;
    }

    private function autowire(string $name): Closure
    {
        return function () use ($name) {
          $class = new \ReflectionClass($name);

          $constructorArguments = $class
              ->getConstructor()
              ->getParameters();

          $dependencies = array_map(
              fn (\ReflectionParameter $parameter) =>
                    $this->make($parameter->getType()),
              $constructorArguments
          );

          return new $name(...$dependencies);
        };
    }
}