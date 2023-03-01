<?php

namespace App\Generator;

use App\Contracts\Formatter;
use App\Contracts\Orderer;
use App\Formatters\DefaultFormatter;

class PoemGenerator
{
    public function __construct(
        public ?Formatter $formatter = null,
        public ?Orderer $orderer = null
    ){
        $this->formatter ??= new DefaultFormatter();
        $this->orderer ??= new SequentialOrderer();
    }

    protected function data(): array
    {
        return $this->orderer->order([
            'the horse and the hound and the horn that belonged to',
            'the farmer sowing his corn that kept',
            'the rooster that crowed in the morn that woke',
            'the priest all shaven and shorn that married',
            'the man all tattered and torn that kissed',
            'the maiden all forlorn that milked',
            'the cow with the crumpled horn that tossed',
            'the dog that worried',
            'the cat that killed',
            'the rat that ate',
            'the malt that lay in',
            'the house that Jack built',
        ]);
    }

    public function generate(int $number): string
    {
        return "This is {$this->pharse($number)}.";
    }

    public function pharse(int $number): string
    {
        $parts = $this->parts($number);

        return $this->formatter->format($parts);
    }

    protected function parts(int $number): array
    {
        return array_slice($this->data(), -$number, $number);
    }
}