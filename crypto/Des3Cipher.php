<?php
/**
 * Part of GrandMasterX project.
 *
 * @copyright  Copyright (C) 2018 GrandMasterX. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace grandmasterx\encryptdectypt\crypto;

use grandmasterx\encryptdectypt\abstracts\AbstractOpensslCipher;

/**
 * The Cipher3DES class.
 */
class Des3Cipher extends AbstractOpensslCipher
{
    /**
     * @var    integer  The openssl cipher method.
     * @see    http://php.net/manual/en/function.openssl-get-cipher-methods.php
     * @since  3.0
     */
    protected $method = 'des-ede3';

    /**
     * Property mode.
     *
     * @var  string
     */
    protected $mode = 'cbc';
}
