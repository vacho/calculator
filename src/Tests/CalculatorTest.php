<?php

/**
 * @file
 * Test cases for Calculator Module.
 */

namespace Drupal\calculator\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Tests the basic functions of the Calculator module.
 *
 * @package Drupal\calculator\Tests
 *
 * @ingroup calculator
 *
 * @group calculator
 */
class CalculatorTest extends WebTestBase {

  /**
   * Basic tests for Calculator.
   */
  public function testCalculator() {
    // to do
  }

  /**
   * Test all paths exposed by the module, by permission.
   */
  public function testPaths() {
    $this->drupalGet('calculator/settings/CalculatorForm');  
  }  

}
