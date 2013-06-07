<?php

require_once "PHPUnit/Autoload.php";
require_once 'FizzBuzz.php';

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
	/*public function testPhpUnitConfigurato()
	{
		$this->assertTrue(false);
	}*/

	public function test1Risponde1()
	{
		$fizzbuzz = new FizzBuzz();
		$this->assertEquals(1, $fizzbuzz->rispondi(1));
	}

	public function test2Risponde2()
	{
		$fizzbuzz = new FizzBuzz();
		$this->assertEquals(2, $fizzbuzz->rispondi(2));
	}

	public function test3RispondeFizz()
	{
		$fizzbuzz = new FizzBuzz();
		$this->assertEquals('Fizz', $fizzbuzz->rispondi(3));
	}

	public function test5RispondeBuzz()
	{
		$fizzbuzz = new FizzBuzz();
		$this->assertEquals('Buzz', $fizzbuzz->rispondi(5));
	}

	public function test6RispondeBuzz()
	{
		$fizzbuzz = new FizzBuzz();
		$this->assertEquals('Fizz', $fizzbuzz->rispondi(6));
	}

	public function test10RispondeBuzz() {
		$fizzbuzz = new FizzBuzz();
		$this->assertEquals('Buzz', $fizzbuzz->rispondi(10));
	}

	public function test15RispondeFizzBuzz() {
		$fizzbuzz = new FizzBuzz();
		$this->assertEquals('FizzBuzz', $fizzbuzz->rispondi(15));
	}

	/**
     * @dataProvider provider
     */
	public function testNumeriNaturali($numero, $risposta)
	{
		$fizzbuzz = new FizzBuzz();
		$this->assertEquals($risposta, $fizzbuzz->rispondi($numero), "A $numero ha risposto $risposta.");
	}

	public function provider()
	{
		return array(
			array(1, 1),
			array(2, 2),
			array(3, 'Fizz'),
			array(5, 'Buzz'),
			array(15, 'FizzBuzz'),
			array(255, 'FizzBuzz'),
			array(823, 823),
		);
	}

}
