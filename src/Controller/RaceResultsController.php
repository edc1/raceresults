<?php

/**
 * @file
 * Contains \Drupal\raceresults\Controller\RaceResultsController.
 */

namespace Drupal\raceresults\Controller;

use Drupal\Core\Controller\ControllerBase;

class RaceResultsController extends ControllerBase {
  /**
   * @return array
   */
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => $this->t('Hello, Race Results!!!'),
    );
  }
}
