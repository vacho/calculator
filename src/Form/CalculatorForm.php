<?php

/**
 * @file
 * Contains Drupal\calculator\Form\CalculatorForm.
 */

namespace Drupal\calculator\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class CalculatorForm extends ConfigFormBase
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
         drupal_get_path('module', 'calculator').'/js/styles.js' 
     );
     $form['#attached']['css'] = array(
         drupal_get_path('module', 'calculator').'/css/dojo.css' 
     );

     $config = $this->config('calculator.calculator_form_config');
    $form['display'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Display'),
      '#description' => $this->t(''),
      '#default_value' => $config->get('display'),
      '#disabled' =>  TRUE,
    ];
    

    $form['7'] = [
        '#type' => 'button',
        '#value' => '7',
        '#title' => $this->t('7'),
        '#description' => $this->t(''),
        '#attributes' => array(
            'id' => 'edit-'.'7',
        ),
        '#default_value' => $config->get('7'),
        '#prefix' => '<div class = "numeros"><div class = "789">',
      ];
      $form['8'] = [
        '#type' => 'button',
        '#value' => '8',
        '#title' => $this->t('8'),
        '#description' => $this->t(''),
        '#attributes' => array(
            'id' => 'edit-'.'8',
        ),
        '#default_value' => $config->get('8'),
        
      ];
      $form['9'] = [
        '#type' => 'button',
        '#value' => '9',
        '#title' => $this->t('9'),
        '#description' => $this->t(''),
        '#attributes' => array(
            'id' => 'edit-'.'9',
        ),
        '#default_value' => $config->get('9'),
        '#suffix' => '</div>',
      ];
      $form['4'] = [
        '#type' => 'button',
        '#value' => '4',
        '#title' => $this->t('4'),
        '#description' => $this->t(''),
        '#attributes' => array(
            'id' => 'edit-'.'4',
        ),
        '#default_value' => $config->get('4'),
        '#prefix' => '<div class = "456">',
      ];
      $form['5'] = [
        '#type' => 'button',
        '#value' => '5',
        '#title' => $this->t('5'),
        '#description' => $this->t(''),
        '#attributes' => array(
            'id' => 'edit-'.'5',
        ),
        '#default_value' => $config->get('5'),
      ];
      $form['6'] = [
        '#type' => 'button',
        '#value' => '6',
        '#title' => $this->t('6'),
        '#description' => $this->t(''),
        '#attributes' => array(
            'id' => 'edit-'.'6',
        ),
        '#default_value' => $config->get('6'),
        '#suffix' => '</div>',
      ];
      $form['1'] = [
        '#type' => 'button',
        '#value' => '1',
        '#title' => $this->t('1'),
        '#description' => $this->t(''),
        '#attributes' => array(
            'id' => 'edit-'.'1',
        ),
        '#default_value' => $config->get('1'),
        '#prefix' => '<div class = "123">',
      ];
      $form['2'] = [
        '#type' => 'button',
        '#value' => '2',
        '#title' => $this->t('2'),
        '#description' => $this->t(''),
        '#attributes' => array(
            'id' => 'edit-'.'2',
        ),
        '#default_value' => $config->get('2'),
      ];
      $form['3'] = [
        '#type' => 'button',
        '#value' => '3',
        '#title' => $this->t('3'),
        '#description' => $this->t(''),
        '#attributes' => array(
            'id' => 'edit-'.'3',
        ),
        '#default_value' => $config->get('3'),
        '#suffix' => '</div>',
      ];

    $form['0'] = [
        '#type' => 'button',
        '#value' => '0',
        '#title' => $this->t('0'),
        '#description' => $this->t(''),
        '#attributes' => array(
            'id' => 'edit-'.'0',
        ),
        '#default_value' => $config->get('0'),
        '#prefix' => '<div class = "cero-pto">',
      ];

      $form['pto'] = [
        '#type' => 'button',
        '#value' => '.',
        '#title' => $this->t('pto'),
        '#description' => $this->t(''),
        '#attributes' => array(
            'id' => 'op-'.'pto',
        ),
        '#default_value' => $config->get('pto'),
        '#suffix' => '</div></div>',
      ];

    $form['+'] = [
        '#type' => 'button',
        '#value' => '+',
        '#title' => $this->t('+'),
        '#description' => $this->t(''),
        '#attributes' => array(
            'id' => 'op-plus',
        ),
        '#default_value' => $config->get('+'),
        '#prefix' => '<div class = "oper"><div class = "+-">',
      ];

    $form['-'] = [
        '#type' => 'button',
        '#value' => '-',
        '#title' => $this->t('-'),
        '#description' => $this->t(''),
        '#attributes' => array(
            'id' => 'op-minus',
        ),
        '#default_value' => $config->get('+'),
        '#suffix' => '</div>',
      ];

    $form['*'] = [
        '#type' => 'button',
        '#value' => '*',
        '#title' => $this->t('*'),
        '#description' => $this->t(''),
        '#attributes' => array(
            'id' => 'op-mul',
        ),
        '#default_value' => $config->get('*'),
        '#prefix' => '<div class = "*/">',
      ];

    $form['/'] = [
        '#type' => 'button',
        '#value' => '/',
        '#title' => $this->t('/'),
        '#description' => $this->t(''),
        '#attributes' => array(
            'id' => 'op-div',
        ),
        '#default_value' => $config->get('/'),
        '#suffix' => '</div>',
      ];
      
    $form['='] = [
        '#type' => 'button',
        '#value' => '=',
        '#title' => $this->t('='),
        '#description' => $this->t(''),
        '#attributes' => array(
            'id' => 'op-equ',
        ),
        '#default_value' => $config->get('='),
        '#prefix' => '<div class = "=">',
        '#suffix' => '</div>',
      ];
      
      $form['AC'] = [
        '#type' => 'button',
        '#value' => 'AC',
        '#title' => $this->t('AC'),
        '#description' => $this->t(''),
        '#attributes' => array(
            'id' => 'op-'.'AC',
        ),
        '#default_value' => $config->get('AC'),
        '#prefix' => '<div class = "AC-Clr">',
      ];

    $form['Clr'] = [
        '#type' => 'button',
        '#value' => 'Clr',
        '#title' => $this->t('Clr'),
        '#description' => $this->t(''),
        '#attributes' => array(
            'id' => 'op-'.'Clr',
        ),
        '#default_value' => $config->get('Clr'),
        '#suffix' => '</div></div>',
      ];        
    
    return parent::buildForm($form, $form_state);
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

    $this->config('calculator.calculator_form_config')
          ->set('display', $form_state->getValue('display'))
          ->set('1', $form_state->getValue('1'))
        ->save();
  }
}
