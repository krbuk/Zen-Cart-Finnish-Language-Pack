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
//  $Id: gv_sent.php 2388 2005-11-18 00:18:35Z ajeh $
//
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.5 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
require 'gv_name.php';
define('HEADING_TITLE', 'Lähetetyt lahjakortit');

define('TABLE_HEADING_SENDERS_NAME', 'Lähettäjän nimi');
define('TABLE_HEADING_VOUCHER_VALUE', TEXT_GV_NAMES . 'in arvo');
define('TABLE_HEADING_VOUCHER_CODE', TEXT_GV_REDEEM);
define('TABLE_HEADING_DATE_SENT', 'Lähetyspäivä');
define('TEXT_HEADING_DATE_REDEEMED', 'Lunastuspäivä');
define('TABLE_HEADING_ACTION', 'Toiminto');

define('TEXT_INFO_SENDERS_ID', 'Lähettäjän ID:');
define('TEXT_INFO_AMOUNT_SENT', 'Lähetetty summa:');
define('TEXT_INFO_DATE_SENT', 'Lähetyspäivä:');
define('TEXT_INFO_VOUCHER_CODE', TEXT_GV_REDEEM . ':');
define('TEXT_INFO_EMAIL_ADDRESS', 'Sähköpostiosoite:');
define('TEXT_INFO_DATE_REDEEMED', 'Lunastuspäivä:');
define('TEXT_INFO_IP_ADDRESS', 'IP Osoite:');
define('TEXT_INFO_CUSTOMERS_ID', 'Asiakasnumero:');
define('TEXT_INFO_NOT_REDEEMED', 'Ei lunastettu');
?>