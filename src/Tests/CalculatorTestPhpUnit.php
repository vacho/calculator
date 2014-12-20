<?php

/**
 * @file
 * Test cases for Calculator Module.
 */

namespace Drupal\calculator\Tests;

use Drupal\Tests\UnitTestCase;
// /tests/src/MyClassTest.php

/**
 * @ingroup MyExample
 * @group MyExample
 */
class CalculatorTestPhpUnit extends UnitTestCase {
 
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => 'MyClass Unit Test',
      'description' => 'Show some simple unit tests',
      'group' => 'MyExample',
    );
  }
 
  public function setUp() {
    parent::setUp();
  }
 
  public function testMyClass() {
    $sut = new MyClass();
    $this->assertEquals($sut->myMethod() , TRUE);
  }
 
}

class MyClass {
 
  function myMethod() {
    return TRUE;
  }
 
}
