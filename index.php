<?php

use App\OpenClosePrinciple\Encoders\JsonEncoder;
use App\OpenClosePrinciple\Factories\EncoderFactory;
use App\OpenClosePrinciple\GenericEncoder;
use App\StaticMethods\Person;

require 'vendor/autoload.php';

// use App\Container\Container;
// use App\Formatters\EchoFormatter;
// use App\Generator\PoemGenerator;
// use App\Generator\RandomOrderer;
//
//
// $generator = new PoemGenerator(
//    formatter: new EchoFormatter(),
//    orderer: new RandomOrderer()
// );
//
// $data = $generator->generate(4);
//
// echo '<pre>';
// var_dump($data);
// echo '</pre>';

/*
 * $container = new Container();.
 *
 * $container->register(
 * Connnection::class,
 * fn () => new Connection(
 * config('db.connection')
 * )
 * );
 *
 * $container->register(
 * QueryBuilder::class,
 * fn (Container $container) => new QueryBuilder(
 * $container->make(Connection::class)
 * )
 * );
 *
 * $queryBuilder = $container->make(QueryBuilder::class);
 */
// $encoderFactory = new EncoderFactory();
//
// $encoderFactory->addEncoderFactory(
//    'json',
//    fn () => new JsonEncoder()
// );
//
// $genericEncoder = new GenericEncoder(
//    encoderFactory: $encoderFactory
// );
//
// $object = new stdClass();
// $object->name = 'John Doe';
//
// $data = $genericEncoder->encodeToFormat($object, 'json');
//
// echo '<pre>';
// var_dump($data);
// echo '</pre>';

// $fizzBuzz = new \App\DependencyInversion\FizzBuzz();
// $fizzBuzz->addRule(new \App\DependencyInversion\FizzBuzzRule());
// $fizzBuzz->addRule(new \App\DependencyInversion\FizzRule());
// $fizzBuzz->addRule(new \App\DependencyInversion\BuzzRule());
//
// $list = $fizzBuzz->generateList(100);
//
// echo '<pre>';
// var_dump($list);
// echo '</pre>';

// $product2 = new \App\Products\CdProduct(
//    title: 'Exile on Coldharbour Lane',
//    firstName: 'The',
//    mainName: 'Alabama 3',
//    price: 10.99,
//    playLength: 60
// );
//
// $product2->setDiscount(5);
//
// echo '<pre>';
// var_dump($product2->getPrice());
// echo '</pre>';
//
// $totalizer3 = new \App\StaticMethods\Totalizer3();
// $processor = new \App\StaticMethods\ProcessSale();
// // $processor->registerCallback([new \App\StaticMethods\Mailer(), 'doMail']);
// $processor->registerCallback($totalizer3->warnAmount(8));
//
// $processor->sale(new \App\StaticMethods\Product('shoes', 6));
// echo "\n";
// $processor->sale(new \App\StaticMethods\Product('coffee', 6));

// $person = new Person();
// $person->output(
//    new class() implements \App\StaticMethods\PersonWriter {
//        public function write(Person $person): void
//        {
//            echo $person->getName().' '.$person->getAge().'\n';
//        }
//    }
// );

// $test = \App\ObjectTools\ParamHandler::getInstance(__DIR__.'/params.xml');
// $test->addParam('key1', 'val1');
// $test->addParam('key2', 'val2');
// $test->addParam('key3', 'val3');
//
// $test->write();
// $test->read();

// $lessons[] = new \App\Principles\Lecture(5, new \App\Principles\FixedCostStrategy());
// $lessons[] = new \App\Principles\Seminar(3, new \App\Principles\TimedCostStrategy());
//
// foreach ($lessons as $lesson) {
//    echo nl2br("lesson charge {$lesson->cost()} ");
//    echo nl2br("Charge type: {$lesson->chargeType()} \n");
// }

// listing 09.04

// $boss = new \App\GeneratingObjects\NastyBoss();
// $boss->addEmployee(new \App\GeneratingObjects\Minion('harry'));
// $boss->addEmployee(new \App\GeneratingObjects\CluedUp('bob'));
// $boss->addEmployee(new \App\GeneratingObjects\Minion('mary'));
// $boss->projectFail();
// $boss->projectFail();
// $boss->projectFail();
//
// $pref = \App\GeneratingObjects\Preferences::getInstance();
// $pref->setProperty('name', 'matt');
//
// unset($pref);
//
// $pref2 = \App\GeneratingObjects\Preferences::getInstance();
// echo nl2br($pref2->getProperty('name'));

$manager = new \App\GeneratingObjects\MegaCommsManager();
echo nl2br($manager->getHeaderText());
echo nl2br($manager->getApptEncoder()->encode());
echo nl2br($manager->getFooterText());
