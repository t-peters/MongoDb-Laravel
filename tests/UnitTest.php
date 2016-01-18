<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;



require 'C:\wamp\www\MongoTest\resources\views\phpTest.php';

class UnitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
   public function setUp() {
   		$this->test = new Test;
   }

   public function testStoresListOfAssets() 
   {
   	$this->assertClassHasStaticAttribute('paths','Test');
   	$this->assertArrayHasKey('jquery', Test::$paths);
   }


   /**
   * @expectedException InvalidArgumentException
   */

   public function testThrowsExceptionIfNoAssestIsProvided()
   {
   	$this->test->run();
   }


}
