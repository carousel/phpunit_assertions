<?php 
require("Calculator.php");
    
class BasicTest extends PHPUnit_Framework_TestCase {

    protected $calc;
    public function setUp()
    {
        $this->calc = new Calculator;
    }
    public function testArrayHasKey()
    {
        $arr = ["hello"=>"miro"];
        $this->assertArrayHasKey("hello",$arr);
    }
    public function testClassHasAttribute()
    {
        $this->assertClassHasAttribute("attr","Calculator");
    }
    public function testClassHasStaticAttribute()
    {
        $this->assertClassHasStaticAttribute("age","Calculator");
    }
    public function testArrayContains()
    {
        $arr = ["hello"=>"miro","attr"=>4];
        $this->assertContains(4,$arr);
    }
    public function testArrayContainsOnly()
    {
        $arr = ["attr"=>"miro"];
        $this->assertContainsOnly("string",$arr);
    }
    public function testArrayContainsInstanceOfGivenClass()
    {
        $arr = [new Calculator];
        $this->assertContainsOnlyInstancesOf("Calculator",$arr);
    }
    public function testArrayCount()
    {
        $arr = [new Calculator];
        $this->assertCount(1,$arr);
    }
    public function testIfArrayIsEmpty()
    {
        $arr = [];
        $this->assertEmpty($arr);
    }
    public function testEquality()
    {
        $this->assertEquals(10,10);
    }
    public function testIsFalse()
    {
        $this->assertFalse(false);
    }
    public function testIsTrue()
    {
        $this->assertFalse(false);
    }
    public function testFileIsEquals()
    {
        $this->assertFileEquals("data.json","data.json");
    }
    public function testFileExists()
    {
        $this->assertFileExists("data.json");
    }
    public function testGreaterThan()
    {
        $this->assertGreaterThan(10,100);
    }
    public function testGreatedThanOrEqual()
    {
        $this->assertGreaterThanOrEqual(99,99);
    }
    public function testIsInstanceOf()
    {
        $this->assertInstanceOf("Calculator",$this->calc);    
    }
    public function testInternalType()
    {
        $this->assertInternalType("integer",123);
    }
    public function testJsonFileEqualsJsonFile()
    {
        $arr = ["hello"=>"json"];
        $this->assertJsonStringEqualsJsonString(json_encode($arr),json_encode($arr));
    }
    public function testLessThan()
    {
        $this->assertLessThan(1,0);
    }
    public function testAssertLessThanOrEquals()
    {
        $this->assertLessThanOrEqual(20,20);
    }
    public function testIsNull()
    {
        $foo = null;
        $this->assertNull($foo);
    }
    public function testObjectHasAttribute()
    {
        $this->assertObjectHasAttribute("attr",$this->calc);
    }
    public function testRegExp()
    {
        $this->assertRegExp("/hey/","hey");
    }
    public function testStringMatchesFormat()
    {
        $this->assertStringMatchesFormat("%s","hello");
    }
    public function testSame()
    { 
        $this->assertSame($this->calc,$this->calc);
    }
    public function testStringEndsWith()
    {
        $this->assertStringEndsWith("o","hello");
    }


}





















