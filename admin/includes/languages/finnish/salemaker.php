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
//  $Id: salemaker.php 6369 2007-05-25 03:03:42Z ajeh $
//
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>

define('HEADING_TITLE', 'Alennuksen rakentaja');
define('TABLE_HEADING_SALE_NAME', 'Alennuksen nimi');
define('TABLE_HEADING_SALE_DEDUCTION', 'Vähennys');
define('TABLE_HEADING_SALE_DATE_START', 'Aloituspäivä');
define('TABLE_HEADING_SALE_DATE_END', 'Vanhenee');
define('TABLE_HEADING_STATUS', 'Tila');
define('TABLE_HEADING_ACTION', 'Toiminto');
define('TEXT_SALEMAKER_NAME', 'Alennuksen nimi:');
define('TEXT_SALEMAKER_DEDUCTION', 'Vähennys:');
define('TEXT_SALEMAKER_DEDUCTION_TYPE', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type:&nbsp;&nbsp;');
define('TEXT_SALEMAKER_PRICERANGE_FROM', 'Hintarajaus:');
define('TEXT_SALEMAKER_PRICERANGE_TO', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
define('TEXT_SALEMAKER_SPECIALS_CONDITION', 'Jos tuote on tarjouksessa:');
define('TEXT_SALEMAKER_DATE_START', 'Voimassa alkaen:');
define('TEXT_SALEMAKER_DATE_END', 'Alennus loppuu:');
define('TEXT_SALEMAKER_CATEGORIES', '<b>Tai</b> valitse ryhmät joihin haluat alennuksien vaikuttavan:');
define('TEXT_SALEMAKER_POPUP', '<a href="javascript:session_win();"><span class="errorText"><b>Paina tästä nähdäksesi käyttö vinkkejä.</b></span></a>');
define('TEXT_SALEMAKER_POPUP1', '<a href="javascript:session_win1();"><span class="errorText"><b>(Lisätietoja)</b></span></a>');
define('TEXT_SALEMAKER_IMMEDIATELY', 'Välittömästi');
define('TEXT_SALEMAKER_NEVER', 'Ei ikinä');
define('TEXT_SALEMAKER_ENTIRE_CATALOG', 'Valitse tämä laatikko mikäli haluat alennuksen koskevan <b>kaikkia</b> tuotteita:');
define('TEXT_SALEMAKER_TOP', 'Kaikki tuotteet');
define('TEXT_INFO_DATE_ADDED', 'Lisätty:');
define('TEXT_INFO_DATE_MODIFIED', 'Muokattu:');
define('TEXT_INFO_DATE_STATUS_CHANGE', 'Viimeisin tilan muutos:');
define('TEXT_INFO_SPECIALS_CONDITION', 'Erikoisehdot:');
define('TEXT_INFO_DEDUCTION', 'Vähennys:');
define('TEXT_INFO_PRICERANGE_FROM', 'Hintarajaus:');
define('TEXT_INFO_PRICERANGE_TO', ' - ');
define('TEXT_INFO_DATE_START', 'Alkaen:');
define('TEXT_INFO_DATE_END', 'Vanhenee:');
define('SPECIALS_CONDITION_DROPDOWN_0', 'Ohita tarjoushinta - Laske alennus tuotteen oikeasta hinnasta');
define('SPECIALS_CONDITION_DROPDOWN_1', 'Ohita alennus - Älä aseta alennusta jos tuote on jo tarjouksessa');
define('SPECIALS_CONDITION_DROPDOWN_2', 'Laske alennus tarjoushinnasta jos sellainen on asetettu');
// moved to english.php
/*
define('DEDUCTION_TYPE_DROPDOWN_0', 'Deduct amount');
define('DEDUCTION_TYPE_DROPDOWN_1', 'Percent');
define('DEDUCTION_TYPE_DROPDOWN_2', 'New Price');
*/
define('TEXT_INFO_HEADING_COPY_SALE', 'Kopioi alennus');
define('TEXT_INFO_COPY_INTRO', 'Kirjoita uusi nimi kopioitavalle alennukselle<br>Nykyinen nimi: %s');
define('TEXT_INFO_HEADING_DELETE_SALE', 'Poista alennus');
define('TEXT_INFO_DELETE_INTRO', 'Haluatko varmasti poistaa alennuksen?');
define('TEXT_MORE_INFO', '(Lisätietoja)');

define('TEXT_WARNING_SALEMAKER_PREVIOUS_CATEGORIES','&nbsp;Varoitus: %s alennusta on jo määriteltyä tälle ryhmälle');

?>