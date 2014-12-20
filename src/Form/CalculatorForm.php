<?php

/**
 * @file
 * Contains Drupal\calculator\Form\CalculatorForm.
 */

namespace Drupal\calculator\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\FormInterface;

class CalculatorForm implements FormInterface
{

  /**
   * {@inheritdoc}
   */
  public function getFormID() {
    return 'calculator_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['#attached']['js'] = array(
      drupal_get_path('module', 'calculator').'/js/calculator.js',
    );

    $form['#attached']['css'] = array(
      drupal_get_path('module', 'calculator').'/css/calculator.css' 
    );

    $form['display'] = [
      '#type' => 'textfield',
      '#title' => '',
      '#description' => '',
      '#default_value' => "",
      '#disabled' =>  TRUE,
    ];
    
    $form['7'] = [
      '#type' => 'button',
      '#value' => '7',
      '#title' => t('7'),
      '#description' => '',
      '#attributes' => array(
        'id' => 'edit-'.'7',
      ),
      '#default_value' => '7',
      '#prefix' => '<div class = "numeros"><div class = "789">',
    ];
    
    $form['8'] = [
      '#type' => 'button',
      '#value' => '8',
      '#title' => t('8'),
      '#description' => '',
      '#attributes' => array(
        'id' => 'edit-'.'8',
      ),
      '#default_value' => '8',
    ];
    
    $form['9'] = [
      '#type' => 'button',
      '#value' => '9',
      '#title' => t('9'),
      '#description' => '',
      '#attributes' => array(
        'id' => 'edit-'.'9',
      ),
      '#default_value' => '9',
      '#suffix' => '</div>',
    ];
    
    $form['4'] = [
      '#type' => 'button',
      '#value' => '4',
      '#title' => t('4'),
      '#description' => '',
      '#attributes' => array(
        'id' => 'edit-'.'4',
      ),
      '#default_value' => '4',
      '#prefix' => '<div class = "456">',
    ];
      
    $form['5'] = [
      '#type' => 'button',
      '#value' => '5',
      '#title' => t('5'),
      '#description' => '',
      '#attributes' => array(
        'id' => 'edit-'.'5',
      ),
      '#default_value' => '5',
    ];
    
    $form['6'] = [
      '#type' => 'button',
      '#value' => '6',
      '#title' => t('6'),
      '#description' => '',
      '#attributes' => array(
        'id' => 'edit-'.'6',
      ),
      '#default_value' => '6',
      '#suffix' => '</div>',
      ];
      
    $form['1'] = [
      '#type' => 'button',
      '#value' => '1',
      '#title' => t('1'),
      '#description' => '',
      '#attributes' => array(
        'id' => 'edit-'.'1',
      ),
      '#default_value' => '1',
      '#prefix' => '<div class = "123">',
    ];
    
    $form['2'] = [
      '#type' => 'button',
      '#value' => '2',
      '#title' => t('2'),
      '#description' => '',
      '#attributes' => array(
        'id' => 'edit-'.'2',
      ),
      '#default_value' => '2',
    ];
    
    $form['3'] = [
      '#type' => 'button',
      '#value' => '3',
      '#title' => t('3'),
      '#description' => '',
      '#attributes' => array(
        'id' => 'edit-'.'3',
      ),
      '#default_value' => '3',
      '#suffix' => '</div>',
    ];

    $form['0'] = [
      '#type' => 'button',
      '#value' => '0',
      '#title' => t('0'),
      '#description' => '',
      '#attributes' => array(
        'id' => 'edit-'.'0',
      ),
      '#default_value' => '0',
      '#prefix' => '<div class = "cero-pto">',
    ];

    $form['pto'] = [
      '#type' => 'button',
      '#value' => '.',
      '#title' => t('pto'),
      '#description' => '',
      '#attributes' => array(
        'id' => 'op-'.'pto',
      ),
      '#default_value' => 'pto',
      '#suffix' => '</div></div>',
    ];

    $form['+'] = [
      '#type' => 'button',
      '#value' => '+',
      '#title' => t('+'),
      '#description' => '',
      '#attributes' => array(
        'id' => 'op-plus',
      ),
      '#default_value' => '+',
      '#prefix' => '<div class = "oper"><div class = "+-">',
    ];

    $form['-'] = [
      '#type' => 'button',
      '#value' => '-',
      '#title' => t('-'),
      '#description' => '',
      '#attributes' => array(
        'id' => 'op-minus',
      ),
      '#default_value' => '+',
      '#suffix' => '</div>',
    ];

    $form['*'] = [
      '#type' => 'button',
      '#value' => '*',
      '#title' => t('*'),
      '#description' => '',
      '#attributes' => array(
        'id' => 'op-mul',
      ),
      '#default_value' => '*',
      '#prefix' => '<div class = "*/">',
    ];

    $form['/'] = [
      '#type' => 'button',
      '#value' => '/',
      '#title' => t('/'),
      '#description' => '',
      '#attributes' => array(
        'id' => 'op-div',
      ),
      '#default_value' => '/',
      '#suffix' => '</div>',
    ];
      
    $form['='] = [
      '#type' => 'button',
      '#value' => '=',
      '#title' => t('='),
      '#description' => '',
      '#attributes' => array(
        'id' => 'op-equ',
      ),
      '#default_value' => '=',
      '#prefix' => '<div class = "=">',
      '#suffix' => '</div>',
    ];
      
    $form['AC'] = [
      '#type' => 'button',
      '#value' => 'AC',
      '#title' => t('AC'),
      '#description' => '',
      '#attributes' => array(
        'id' => 'op-'.'AC',
      ),
      '#default_value' => 'AC',
      '#prefix' => '<div class = "AC-Clr">',
    ];

    $form['Clr'] = [
      '#type' => 'button',
      '#value' => 'Clr',
      '#title' => t('Clr'),
      '#description' => '',
      '#attributes' => array(
        'id' => 'op-'.'Clr',
      ),
      '#default_value' => 'Clr',
        '#suffix' => '</div></div>',
    ];        
    
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    return parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);
  }
}
