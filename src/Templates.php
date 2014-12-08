<?php

namespace Openclerk;

class Templates {

  /**
   * TODO more complex template options
   * TODO escape template arguments to prevent recursion
   */
  static function replace($source, $arguments = array()) {
    foreach ($arguments as $key => $value) {
      $source = str_replace('{$' . $key . '}', $value, $source);
    }

    return $source;
  }

}
