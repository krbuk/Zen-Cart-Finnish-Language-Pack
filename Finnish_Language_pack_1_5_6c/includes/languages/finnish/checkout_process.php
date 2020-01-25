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
// $Id: checkout_process.php 1969 2005-09-13 06:57:21Z drbyte $
//
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>

define('EMAIL_TEXT_SUBJECT', 'Tilausvahvistus');
define('EMAIL_TEXT_HEADER', 'Tilausvahvistus');
define('EMAIL_TEXT_FROM',' lähettäjä ');  //added to the EMAIL_TEXT_HEADER, above on text-only emails
define('EMAIL_THANKS_FOR_SHOPPING','Kiitos tilauksestasi!');
define('EMAIL_DETAILS_FOLLOW','Tilauksen yksityiskohdat näet alla.');
define('EMAIL_TEXT_ORDER_NUMBER', 'Tilausnumero:');
define('EMAIL_TEXT_INVOICE_URL', 'Yksityiskohtaisempi lasku: ');
define('EMAIL_TEXT_INVOICE_URL_CLICK', 'Paina tästä nähdäksesi yksityiskohtaisemman laskun');
define('EMAIL_TEXT_DATE_ORDERED', 'Tilauspäivä:');
define('EMAIL_TEXT_PRODUCTS', 'Tuotteet');
define('EMAIL_TEXT_SUBTOTAL', 'Välisumma:');
define('EMAIL_TEXT_TAX', 'Vero:        ');
define('EMAIL_TEXT_SHIPPING', 'Toimitus: ');
define('EMAIL_TEXT_TOTAL', 'Yhteensä:    ');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Toimitusosoite');
define('EMAIL_TEXT_BILLING_ADDRESS', 'Laskutusosoite');
define('EMAIL_TEXT_PAYMENT_METHOD', 'Maksutapa');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('TEXT_EMAIL_VIA', 'kautta');

// suggest not using # vs No as some spam protection block emails with these subjects
define('EMAIL_ORDER_NUMBER_SUBJECT', ' Nro: ');
define('HEADING_ADDRESS_INFORMATION','Osoitteen tiedot');
define('HEADING_SHIPPING_METHOD','Toimitustapa');
?>