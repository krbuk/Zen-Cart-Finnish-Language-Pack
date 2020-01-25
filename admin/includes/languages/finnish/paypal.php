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
// |                                                                      |
// |   DevosC, Developing open source Code                                |
// |   Copyright (c) 2004 DevosC.com                                      |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: paypal.php 3016 2006-02-12 05:26:46Z ajeh $
//
// Finnish translation v1.5.5 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
  // sort orders
  define('TEXT_PAYPAL_IPN_SORT_ORDER_INFO', 'Tilauksen tiedot : ');
  define('TEXT_SORT_PAYPAL_ID_DESC', 'PayPal-tilaus vastaanotettu (uusi - vanha)');
  define('TEXT_SORT_PAYPAL_ID', 'PayPal-tilaus vastaanotettu (vanha - uusi)');
  define('TEXT_SORT_ZEN_ORDER_ID_DESC', 'Tilaustunnuksen (korkea - matala), PayPal-tilaus vastaanotettu');
  define('TEXT_SORT_ZEN_ORDER_ID', 'Tilaustunnuksen (matala - korkea), PayPal-tilaus vastaanotettu');
  define('TEXT_PAYMENT_AMOUNT_DESC', 'Tilauksen summa (korkea - matala)');
  define('TEXT_PAYMENT_AMOUNT', 'Tilauksen summa (matala - korkea)');

  //begin ADMIN text
  define('HEADING_ADMIN_TITLE', 'PayPal maksuilmoitus');
  define('HEADING_PAYMENT_STATUS', 'Maksun tilanne');
  define('TEXT_ALL_IPNS', 'Kaikki');

  define('TABLE_HEADING_ORDER_NUMBER', 'Tilaus #');
  define('TABLE_HEADING_PAYPAL_ID', 'PayPal #');
  define('TABLE_HEADING_TXN_TYPE', 'Maksutavan tyyppi');
  define('TABLE_HEADING_PAYMENT_STATUS', 'Maksun tilanne');
  define('TABLE_HEADING_PAYMENT_AMOUNT', 'Summa');
  define('TABLE_HEADING_ACTION', 'Toiminta');
  define('TABLE_HEADING_DATE_ADDED', 'Lisätty');
  define('TABLE_HEADING_NUM_HISTORY_ENTRIES', 'Tilahistorian merkintöjen määrä');
  define('TABLE_HEADING_ENTRY_NUM', 'Entry Number');
  define('TABLE_HEADING_TRANS_ID', 'Trans. ID');



  define('TEXT_INFO_PAYPAL_IPN_HEADING', 'PayPal IPN');
  define('TEXT_DISPLAY_NUMBER_OF_TRANSACTIONS', 'Näyttäminen <strong>%d</strong> - <strong>%d</strong> ( <strong>%d</strong> IPN\'s)');

  //Details section
  define('HEADING_DEATILS_CUSTOMER_REGISTRATION_TITLE', 'PayPal Asiakasrekisteröinnin tiedot');
  define('HEADING_DETAILS_REGISTRATION_TITLE', 'PayPal maksuilmoitus');
  define('TEXT_INFO_ENTRY_ADDRESS', 'Osoite');
  define('TEXT_INFO_ORDER_NUMBER', 'Tilausnumero');
  define('TEXT_INFO_TXN_TYPE', 'Maksutavan tyyppi');
  define('TEXT_INFO_PAYMENT_STATUS', 'Maksun tilanne');
  define('TEXT_INFO_PAYMENT_AMOUNT', 'Summa');
  define('ENTRY_FIRST_NAME', 'Etunimi');
  define('ENTRY_LAST_NAME', 'Sukunimi');
  define('ENTRY_BUSINESS_NAME', 'Yrityksen nimi');
  define('ENTRY_ADDRESS', 'Osoite');
  //EMAIL ALREADY DEFINED IN ORDERS
  define('ENTRY_PAYER_ID', 'Payer ID');
  define('ENTRY_PAYER_STATUS', 'Payer Status');
  define('ENTRY_ADDRESS_STATUS', 'Osoite tilanne');
  define('ENTRY_PAYMENT_TYPE', 'Maksutapa');
  define('TABLE_HEADING_ENTRY_PAYMENT_STATUS', 'Maksun tilanne');
  define('TABLE_HEADING_PENDING_REASON', 'Odottava syy');
  define('TABLE_HEADING_IPN_DATE', 'IPN päivä');
  define('ENTRY_INVOICE', 'Lasku');
  define('ENTRY_PAYPAL_IPN_TXN', 'Tapahtuma ID');
  define('ENTRY_PAYMENT_DATE', 'Maksupäivä');
  define('ENTRY_PAYMENT_LAST_MODIFIED', 'Viimeksi muokattu');
  define('ENTRY_MC_CURRENCY', 'MC valuutta');
  define('ENTRY_MC_GROSS', 'MC brutto');
  define('ENTRY_MC_FEE', 'MC palkkio');
  define('ENTRY_PAYMENT_GROSS', 'Maksu brutto');
  define('ENTRY_PAYMENT_FEE', 'Maksu palkkio');
  define('ENTRY_SETTLE_AMOUNT', 'Asettua määrä');
  define('ENTRY_SETTLE_CURRENCY', 'Asettua valuutta');
  define('ENTRY_EXCHANGE_RATE', 'Vaihtokurssi');
  define('ENTRY_CART_ITEMS', 'Ei ostoskärryjä');
  define('ENTRY_CUSTOMER_COMMENTS', 'Asiakkaan kommentit');
  define('TEXT_NO_IPN_HISTORY', 'IPN-historiaa ei ole saatavilla');
  define('TEXT_TXN_SIGNATURE', 'Tapahtuman allekirjoitus');
  //end ADMIN text
?>
