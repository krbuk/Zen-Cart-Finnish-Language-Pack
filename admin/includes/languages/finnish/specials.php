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
//  $Id: specials.php 4533 2006-09-17 17:21:10Z ajeh $
//
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>

define('HEADING_TITLE', 'Tarjoukset');

define('TABLE_HEADING_PRODUCTS', 'Tuotteet');
define('TABLE_HEADING_PRODUCTS_MODEL','Malli');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Tuotteen Hinta/Tarjous/Alennus');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Prosenttia');
define('TABLE_HEADING_AVAILABLE_DATE', 'Alkaen');
define('TABLE_HEADING_EXPIRES_DATE','Päättyy');
define('TABLE_HEADING_STATUS', 'Tila');
define('TABLE_HEADING_ACTION', 'Toiminto');

define('TEXT_SPECIALS_PRODUCT', 'Tuote:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Tarjoushinta:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Päättyy:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Alkaen:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Tarjouksien huomautukset:</b><ul><li>Voit ilmoittaa vähennettävän prosenttimäärän tarjoushinta kentässä, esimerkiksi: <b>20%</b></li><li>Jos ilmoitat uuden hinnan, desimaali erotin täytyy olla \'.\' (piste), esimerkiksi: <b>49.99</b></li><li>Jätä vanhenemis kenttä tyhjäksi jos et halua että tarjous päättyy automaattisesti</li></ul>');

define('TEXT_INFO_DATE_ADDED', 'Lisätty:');
define('TEXT_INFO_LAST_MODIFIED', 'Muokattu:');
define('TEXT_INFO_NEW_PRICE', 'Uusi hinta:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Alkuperäinen hinta:');
define('TEXT_INFO_DISPLAY_PRICE', 'Näytettävä hinta:<br />');
define('TEXT_INFO_AVAILABLE_DATE', 'Alkaen:');
define('TEXT_INFO_EXPIRES_DATE', 'Vanhenee:');
define('TEXT_INFO_STATUS_CHANGE', 'Tilan muutos:');
define('TEXT_IMAGE_NONEXISTENT', 'Ei kuvaa');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Poista tarjous');
define('TEXT_INFO_DELETE_INTRO', 'Haluatko varmasti poistaa tuotteen tarjouksen?');

define('SUCCESS_SPECIALS_PRE_ADD', 'Tarjouksen ennakkolisäys onnistui ... tarkasta hinta ja päivämäärät ...');
define('WARNING_SPECIALS_PRE_ADD_EMPTY', 'Varoitus: Tuote ID puuttuu ... mitään ei lisätty ...');
define('WARNING_SPECIALS_PRE_ADD_DUPLICATE', 'Varoitus: Tuotteelle on jo määritelty tarjous ... mitään ei lisätty ...');
define('WARNING_SPECIALS_PRE_ADD_BAD_PRODUCTS_ID', 'Varoitus: Virheellinen tuote ID ... mitään ei lisätty ...');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Lisää uusi tarjous manuaalisesti tuotenumeron perusteella');
define('TEXT_INFO_PRE_ADD_INTRO', 'Kun tietokannan koko on suuri, voit käsin lisätä tuotteita tarjoukseen tuote ID:n perusteella<br /><br />Tämä on paras tapa lisätä tuotteita kun sivun latausaika on liian pitkä tai kun alasvetovalikossa on paljon tuotteita joista valita.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Kirjoita ennakkoon lisättävän tuotteen ID: ');
define('TEXT_INFO_MANUAL', 'Tarjouksen lisääminen tuote ID numerolla');
?>