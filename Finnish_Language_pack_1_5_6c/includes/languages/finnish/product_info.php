<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: product_info.php 6371 2007-05-25 19:55:59Z ajeh $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
define('TEXT_PRODUCT_NOT_FOUND', 'Tuotetta ei löytynyt.');
define('TEXT_CURRENT_REVIEWS', 'Uusimmat arvostelut:');
define('TEXT_MORE_INFORMATION', 'Lisätietoja saat tuotteen <a href="%s" target="_blank">kotisivuilta</a>.');
define('TEXT_DATE_ADDED', 'Tämä tuote on tullut valikoimiimme %s.');
define('TEXT_DATE_AVAILABLE', 'Tämä tuote tulee valikoimiimme %s.');
define('TEXT_ALSO_PURCHASED_PRODUCTS', 'Muut asiakkaat ostivat myös...');
define('TEXT_PRODUCT_OPTIONS', 'Valitse:');
define('TEXT_PRODUCT_MANUFACTURER', 'Valmistaja: ');
define('TEXT_PRODUCT_WEIGHT', 'Paino: ');
define('TEXT_PRODUCT_QUANTITY', ' Kpl varastossa');
define('TEXT_PRODUCT_MODEL', 'Malli: ');



// previous next product
define('PREV_NEXT_PRODUCT', 'Tuote ');
define('PREV_NEXT_FROM', ' - ');
define('IMAGE_BUTTON_PREVIOUS','Edellinen tuote');
define('IMAGE_BUTTON_NEXT','Seuraava tuote');
define('IMAGE_BUTTON_RETURN_TO_PRODUCT_LIST','Takaisin tuotelistaan');

// missing products
//define('TABLE_HEADING_NEW_PRODUCTS', 'New Products For %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Upcoming Products');
//define('TABLE_HEADING_DATE_EXPECTED', 'Date Expected');

define('TEXT_ATTRIBUTES_PRICE_WAS',' [Ennen: ');
define('TEXT_ATTRIBUTE_IS_FREE',' nyt: Ilmainen]');
define('TEXT_ONETIME_CHARGE_SYMBOL', ' *');
define('TEXT_ONETIME_CHARGE_DESCRIPTION', ' Hintaan saatetaan lisätä kertamaksu');
define('TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK','Määräalennus saatavilla');
define('ATTRIBUTES_QTY_PRICE_SYMBOL', zen_image(DIR_WS_TEMPLATE_ICONS . 'icon_status_green.gif', TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK, 10, 10) . '&nbsp;');

define('ATTRIBUTES_PRICE_DELIMITER_PREFIX', ' ( ');
define('ATTRIBUTES_PRICE_DELIMITER_SUFFIX', ' )');
define('ATTRIBUTES_WEIGHT_DELIMITER_PREFIX', ' (');
define('ATTRIBUTES_WEIGHT_DELIMITER_SUFFIX', ') ');
?>