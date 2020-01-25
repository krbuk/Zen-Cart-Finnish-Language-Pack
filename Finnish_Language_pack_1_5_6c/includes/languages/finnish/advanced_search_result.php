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
// $Id: advanced_search_result.php 1969 2005-09-13 06:57:21Z drbyte $
//
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.5 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>

define('NAVBAR_TITLE_1', 'Tarkennettu haku');
define('NAVBAR_TITLE_2', 'Haun tulokset');

//define('HEADING_TITLE_1', 'Tarkennettu haku');
define('HEADING_TITLE', 'Tarkennettu haku');

define('HEADING_SEARCH_CRITERIA', 'Haku termit');

define('TEXT_SEARCH_IN_DESCRIPTION', 'Hae tuotteen kuvauksesta');
define('ENTRY_CATEGORIES', 'Ryhmät:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Sisällytä hakuun myös ala-ryhmät');
define('ENTRY_MANUFACTURERS', 'Valmistajat:');
define('ENTRY_PRICE_FROM', 'Hinnan alaraja:');
define('ENTRY_PRICE_TO', 'Hinnan yläraja:');
define('ENTRY_DATE_FROM', 'Päiväys alkaen:');
define('ENTRY_DATE_TO', 'Päiväys loppuen:');

define('TEXT_SEARCH_HELP_LINK', 'Haun Ohje [?]');

define('TEXT_ALL_CATEGORIES', 'Kaikki ryhmät');
define('TEXT_ALL_MANUFACTURERS', 'Kaikki valmistajat');

define('HEADING_SEARCH_HELP', 'Haun ohje');
define('TEXT_SEARCH_HELP', 'Hakusanat voidaan erotella \'AND\' ja/tai \'OR\' ehdoilla haun tarkentamiseksi.<br /><br />Esimerkiksi, \'Nokia AND matkapuhelin\' tuottaa tuloksen joka sisältää molemmat sanat. Mutta, \'matkapuhelin OR saapas\' lauseella saadaan tulos joka sisältää molemmat tai vain toisen sanan.<br /><br />Täsmällisiä lauseita voidaan hakea sulkemalla lause lainausmerkkeihin (").<br /><br />Esimerkiksi, "matkapuhelimen akku" tuottaa tuloksen joka sisältää koko määritellyn hakulauseen.<br /><br />Sulkeita voidaan käyttää monimutkaisiin hakuihin.<br /><br />Esimerkiksi, \'Nokia AND (matkapuhelin OR saapas OR "matkapuhelin laturi").');
define('TEXT_CLOSE_WINDOW', 'Sulje Ikkuna [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Malli');
define('TABLE_HEADING_PRODUCTS', 'Tuotteen nimi');
define('TABLE_HEADING_MANUFACTURER', 'Valmistaja');
define('TABLE_HEADING_QUANTITY', 'Määrä');
define('TABLE_HEADING_PRICE', 'Hinta');
define('TABLE_HEADING_WEIGHT', 'Paino');
define('TABLE_HEADING_BUY_NOW', 'Osta nyt');

define('TEXT_NO_PRODUCTS', 'Haullasi ei löytynyt yhtään tuotetta.');

define('ERROR_AT_LEAST_ONE_INPUT', 'Tarvitaan vähintään yksi hakuehto.');
define('ERROR_INVALID_FROM_DATE', 'Virheelinen alkupäivämäärä.');
define('ERROR_INVALID_TO_DATE', 'Virheelinen loppupäivämäärä.');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', 'alkupäivämäärän tulee olla suurempi tai yhtäsuuri kuin loppupäivämäärän.');
define('ERROR_PRICE_FROM_MUST_BE_NUM', 'Hinna alarajan tulee olla numero.');
define('ERROR_PRICE_TO_MUST_BE_NUM', 'Hinnan ylärajan tulee olla numero.');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', 'Hinnan ylärajan pitää olla suurempi tai yhtäsuuri kuin hinnan alarajan.');
define('ERROR_INVALID_KEYWORDS', 'Virheellinen hakutermi.');
?>
