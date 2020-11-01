<?php

namespace Tests;

use  PHPUnit\Framework\TestCase;
use App\FizzBuzz;



class FizzBuzzTest extends TestCase {

	public function test_returns__Fizz_if_number_multiple_of_3(

	) {
		$fizzbuzz = new FizzBuzz ();
		$result = $fizzbuzz->transform(3); 
		$this->assertEquals("Fizz", $result);
	}
	public function test_returns__Buzz_if_number_multiple_of_5(

	) {
		$fizzbuzz = new FizzBuzz ();
		$result = $fizzbuzz->transform(5); 
		$this->assertEquals("Buzz", $result);
	}
	public function test_returns__FizzBuzz_if_number_multiple_of_3_and_5(

	) {
		$fizzbuzz = new FizzBuzz ();
		$result = $fizzbuzz->transform(15); 
		$this->assertEquals("FizzBuzz", $result);
	}
	public function test_returns_same_number_if_is_not_multiple_of_3_and_5(

	) {
		$fizzbuzz = new FizzBuzz ();
		$result = $fizzbuzz->transform(8); 
		$this->assertEquals(8, $result);
	}
}


