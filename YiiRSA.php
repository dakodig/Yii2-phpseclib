<?php

namespace dakwahkodingdigital\yii2phpseclib;

require_once(dirname(__FILE__) . '/phpseclib/Crypt/RSA.php');

/**
 * This is just an example.
 */
class YiiRSA extends \Crypt_RSA {

    public function __construct() {
        parent::__construct();
    }

}
