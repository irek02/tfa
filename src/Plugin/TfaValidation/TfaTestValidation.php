<?php
/**
 * @file class for TFA Test Validation.
 * @todo remove me!
 */

namespace Drupal\tfa\Plugin\TfaValidation;

use Drupal\tfa\Plugin\TfaBasePlugin;
use Drupal\tfa\Plugin\TfaValidationInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * @TfaValidation(
 *   id = "tfa_test_validation",
 *   label = @Translation("TFA Basic Help"),
 *   description = @Translation("TFA Basic Help Plugin")
 * )
 */
class TfaTestValidation extends TfaBasePlugin implements TfaValidationInterface {

  /**
   * @copydoc TfaBasePlugin::getForm()
   */
  public function getForm(array $form, FormStateInterface &$form_state) {
    $form['help'] = array(
      '#type' => 'markup',
      '#markup' => t('Contact support to reset your access'),
    );
    // Disallow login plugins from applying to this step.
    $form['#tfa_no_login'] = TRUE;
    return $form;
  }

  /**
   * @copydoc TfaValidationPluginInterface::validateForm()
   */
  public function validateForm(array $form, FormStateInterface &$form_state) {
    // Unused.
  }

}