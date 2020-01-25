<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: moneyorder.php 1969 2005-09-13 06:57:21Z drbyte Modified in v1.5.6 $
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.6 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Käteistilaus');
define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Ole hyvä ja tee sekin tai maksumääräys maksettavaksi:<br><br>' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '<br>') .  '<br /><br />L&auml;het&auml; maksu:<br />' . nl2br(STORE_NAME_ADDRESS) . '<br /><br />' . 'Tilauksesi ei vahvistetan kunnes saamme maksun.');
if (defined('MODULE_PAYMENT_MONEYORDER_STATUS')) {
    define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Ole hyv&auml; ja tee sekin tai maksum&auml;&auml;r&auml;yksen maksettava:" . "\n\n" . MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\nL&auml;het&auml; maksu:\n" . STORE_NAME_ADDRESS . "\n\n" . 'Tilauksesi ei vahvistetan kunnes saamme maksun.');
}
