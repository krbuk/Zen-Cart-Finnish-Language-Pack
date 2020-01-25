<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 *  $Id: featured.php 18695 2011-05-04 05:24:19Z drbyte $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.5 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>

define('HEADING_TITLE', 'Esiteltävät tuotteet');

define('TABLE_HEADING_PRODUCTS', 'Tuoteet');
define('TABLE_HEADING_PRODUCTS_MODEL','Malli');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Hinta');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Prosentti');
define('TABLE_HEADING_AVAILABLE_DATE', 'Alkaen');
define('TABLE_HEADING_EXPIRES_DATE','Vanhenee');
define('TABLE_HEADING_STATUS', 'Tila');
define('TABLE_HEADING_ACTION', 'Toiminto');

define('TEXT_FEATURED_PRODUCT', 'Product:');
define('TEXT_FEATURED_EXPIRES_DATE', 'Expiry Date:');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Available Date:');

define('TEXT_INFO_DATE_ADDED', 'Lisätty:');
define('TEXT_INFO_LAST_MODIFIED', 'Muokattu:');
define('TEXT_INFO_NEW_PRICE', 'Uusi hinta:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Alkuperäinen hinta:');
define('TEXT_INFO_PERCENTAGE', 'Prosentti:');
define('TEXT_INFO_AVAILABLE_DATE', 'Alkaen:');
define('TEXT_INFO_EXPIRES_DATE', 'Vanhenee:');
define('TEXT_INFO_STATUS_CHANGE', 'Tilan muutos:');
define('TEXT_IMAGE_NONEXISTENT', 'Ei kuvaa');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Poista esittely');
define('TEXT_INFO_DELETE_INTRO', 'Haluatko varmasti poistaa esittelyn?');

define('SUCCESS_FEATURED_PRE_ADD', 'Onnistui: Esittely lisätty. Muista asettaa päivämäärät.');
define('WARNING_FEATURED_PRE_ADD_EMPTY', 'Varoitus: Esittelyä ei lisätty. Tuotetta ei ole määritelty.');
define('WARNING_FEATURED_PRE_ADD_DUPLICATE', 'Varoitus: Esittelyä ei lisätty. Tuote on jo lisätty.');
define('TEXT_INFO_HEADING_PRE_ADD_FEATURED', 'Lisää uusi esittely tuoteen ID numeron perusteella');
define('WARNING_FEATURED_PRE_ADD_BAD_PRODUCTS_ID', 'Varoitus: Esittelyä ei lisätty. Tuoteen ID numero väärin.');
define('TEXT_INFO_PRE_ADD_INTRO', 'Kun tietokannan koko on suuri, voit lisätä tuotteita esittelyyn tuoteen ID numeron perusteella<br /><br />Tämä on paras tapa lisätä tuotteita kun sivun latausaika on liian pitkä tai kun alasvetovalikossa on paljon tuotteita joista valita.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Lisättävän tuotteen ID: ');
define('TEXT_INFO_MANUAL', 'Tuotteen lisääminen esittelyyn ID numerolla');
?>