<?php

namespace Drupal\my_text\Access;

use Drupal\Core\Routing\Access\AccessInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Class FilterPermissions
 *
 * @package Drupal\my_text\Access
 */
class FilterPermissions implements AccessInterface {

  /**
   * @param \Drupal\Core\Session\AccountInterface $account
   *
   * @return \Drupal\Core\Access\AccessResultAllowed|\Drupal\Core\Access\AccessResultForbidden
   */
  public function access(AccountInterface $account) {
    if (!in_array('authenticated', $account->getRoles())) {
      return AccessResult::forbidden();
    }
    return AccessResult::allowed();
  }

}
