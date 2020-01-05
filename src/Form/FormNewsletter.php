<?php

namespace Drupal\my_text\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class FormNewsletter.
 *
 * @package Drupal\my_text\Form
 */
class FormNewsletter extends FormBase {

  /**
   * @inheritDoc
   */
  public function getFormId() {
    return "form_newsletter";
  }

  /**
   * @inheritDoc
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['name'] = [
      '#type' => 'textfield',
      '#size' => 45,
      '#maxlength' => 35,
      '#title' => $this->t('Name'),
      '#required' => TRUE,
    ];
    $form['email'] = [
      '#type' => 'email',
      '#size' => 45,
      '#maxlength' => 40,
      '#title' => $this->t('Email'),
      '#required' => TRUE,
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];
    return $form;
  }

  /**
   * @inheritDoc
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $name = $form_state->getValue('name');
    $text = $this->t('you are subscribed our news!');
    \Drupal::messenger()->addMessage($name . ' ' . $text);
  }

}
