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
    $config = $this->config('calculator.calculator_form_config');
    $form['display'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Display'),
      '#description' => $this->t(''),
      '#default_value' => $config->get('display'),
      '#disabled' =>  TRUE,
    ];
    
    for($i =0 ; $i < 10 ; $i++) {
		$form[$i] = [
		  '#type' => 'button',
		  '#value' => $i ,
		  '#title' => $this->t($i),
		  '#description' => $this->t(''),
		  '#default_value' => $config->get($i),
		];
    }
    
    $funciones = array(
		'+' , '-' , '*' , '/', '=', 'AC', 'Clr' 	
    );
    for($i =0 ; $i < count($funciones) ; $i++) {
		$form[$funciones[$i]] = [
		  '#type' => 'button',
		  '#value' => $funciones[$i],
		  '#title' => $this->t($funciones[$i]),
		  '#description' => $this->t(''),
		  '#default_value' => $config->get($funciones[$i]),
		];
	}
    
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
