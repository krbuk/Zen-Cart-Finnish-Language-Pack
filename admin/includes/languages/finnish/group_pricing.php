<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                                 |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: group_pricing.php 2770 2006-01-02 07:52:42Z drbyte $
//

define('HEADING_TITLE', 'Asiakasalennusryhmät');

define('TABLE_HEADING_GROUP_ID', 'ID');
define('TABLE_HEADING_GROUP_NAME', 'Ryhmän nimi');
define('TABLE_HEADING_GROUP_AMOUNT', 'Alennus %');
define('TABLE_HEADING_ACTION', 'Toiminto');

define('TEXT_HEADING_NEW_PRICING_GROUP', 'Uusi alennusryhmä');
define('TEXT_HEADING_EDIT_PRICING_GROUP', 'Muokkaa alennusryhmää');
define('TEXT_HEADING_DELETE_PRICING_GROUP', 'Poista alennusryhmä');

define('TEXT_NEW_INTRO', 'Täytä uuden asiakasalennusryhmän tiedot');
define('TEXT_EDIT_INTRO', 'Tee tarvittavat muutokset');
define('TEXT_DELETE_INTRO', 'Haluatko varmasti poistaa tämän ryhmän?');
define('TEXT_DELETE_PRICING_GROUP', 'Poista ryhmä');
define('TEXT_DELETE_WARNING_GROUP_MEMBERS','<b>Varoitus:</b> ryhmään %s kuuluu asiakkaita!');

define('TEXT_GROUP_PRICING_NAME', 'Ryhmän nimi: ');
define('TEXT_GROUP_PRICING_AMOUNT', 'Alennusprosentti: ');
define('TEXT_DATE_ADDED', 'Lisätty:');
define('TEXT_LAST_MODIFIED', 'Muokattu:');
define('TEXT_CUSTOMERS', 'Asiakkaita ryhmässä:');

define('ERROR_GROUP_PRICING_CUSTOMERS_EXIST','VAROITUS: Tässä ryhmässä on asiakaita. Haluatko varmasti poistaa tämän ryhmän ja poistaa kaikki asiakkaat siitä.');
define('ERROR_MODULE_NOT_CONFIGURED','HUOM: Olet määritellyt ryhmiä, mutta et ole aktivoinut asiakasalennusryhmä välisumma modulia.<br />Mene Ylläpito->Modulit->Välisummamodulit->Asiakasalennus (ot_group_pricing), asenna moduli ja tee tarvittavat asetukset.');

?>