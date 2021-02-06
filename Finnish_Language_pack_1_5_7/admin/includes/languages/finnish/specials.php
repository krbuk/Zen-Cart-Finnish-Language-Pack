<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2020 Mar 08 Modified in v1.5.7 $
 */
// Finnish translation Ver. 1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 

define('HEADING_TITLE', 'Tarjoukset');

define('TABLE_HEADING_PRODUCTS', 'Tuotteet');
define('TABLE_HEADING_STOCK', 'Varasto');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Tuotteen Hinta/Tarjous/Alennus');
define('TABLE_HEADING_AVAILABLE_DATE', 'Alkaen');
define('TABLE_HEADING_EXPIRES_DATE','Päättyy');
define('TABLE_HEADING_STATUS', 'Tila');
define('TABLE_HEADING_ACTION', 'Toiminto');
define('TEXT_ADD_SPECIAL_SELECT', 'Lisäätä tarjouksia valinnalla');
define('TEXT_ADD_SPECIAL_PID', 'Lisäätä tarjouksia tuotekoodilla');
define('TEXT_SEARCH_SPECIALS', 'Hae nykyisiä tarjouksia');
define('TEXT_SPECIAL_ACTIVE', 'Erikoishinta aktiivinen');
define('TEXT_SPECIAL_INACTIVE', 'Erikoishinta ei aktiivinen');
define('TEXT_SPECIAL_STATUS_BY_DATE', 'Tila on asetettu päivämäärillä');

define('TEXT_SPECIALS_PRODUCT', 'Tuote:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Tarjoushinta:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Alkaen:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Päättyy:');

define('TEXT_INFO_DATE_ADDED', 'Lisätty:');
define('TEXT_INFO_LAST_MODIFIED', 'Muokattu:');
define('TEXT_INFO_NEW_PRICE', 'Uusi hinta:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Alkuperäinen hinta:');
define('TEXT_INFO_DISPLAY_PRICE', 'Näytettävä hinta:');
define('TEXT_INFO_STATUS_CHANGED', 'Tilan muutos:');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Poista tarjous');
define('TEXT_INFO_DELETE_INTRO', 'Haluatko varmasti poistaa tuotteen tarjouksen?');

define('WARNING_SPECIALS_PRE_ADD_PID_EMPTY', 'Varoitus: Tuotetunnusta ei määritetty.');
define('WARNING_SPECIALS_PRE_ADD_PID_DUPLICATE', 'Varoitus: Tuote ID#%u tarjouksessa.');
define('WARNING_SPECIALS_PRE_ADD_PID_NO_EXIST', 'Varoitus: Tuote ID#%u ei ole olemassa.');
if (!defined('TEXT_GV_NAME')) {
    require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php';
}
define('WARNING_SPECIALS_PRE_ADD_PID_GIFT', 'Varoitus: tuotekoodi on #%u ' . TEXT_GV_NAME . '.');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Lisää erikoishinta tuotekoodi mukaan');
define('TEXT_INFO_PRE_ADD_INTRO', 'Voit lisätä erikoishinnan tuotekoodiin mukaan. Tämä menetelmä voi olla sopiva kaupoille, joissa on paljon tuotteita, jos valintasivun hahmottaminen kestää liian kauan tai tuotteen valitseminen avattavasta valikosta on hankala.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Anna tuotekoodi: ');

define('TEXT_SPECIALS_PRICE_NOTES', '<b>Muistio:</b><ul><li>Erikoishinta voi olla hinta (ilman veroja). Desimaalierottimen on oltava "." (desimaalipiste), esm: <b>49.99</b>. Laskettu prosentuaalinen alennus näkyy tuotteen uuden hinnan vieressä luettelossa.</li><li>Erikoishinta voi olla prosentuaalinen alennus, esm: <b>20%</b>.</li><li>Aloitus- ja lopetuspäivät eivät ole pakollisia. Voit jättää viimeisen käyttöpäivän tyhjäksi ilman vanhentumista.</li><li>Kun päivämäärät on asetettu, Erikoishinnan tila otetaan automaattisesti käyttöön/pois käytöstä.</li><li>' . TEXT_INFO_PRE_ADD_INTRO . '</li></ul>');
