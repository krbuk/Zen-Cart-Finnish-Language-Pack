<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: index.php 19537 2011-09-20 17:14:44Z drbyte $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.5 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 
define('TEXT_MAIN','Tämä on vakio teksti etusivulle, jos mitään pohjaa ei ole määritelty. Tämä teksti sijaitsee tiedostossa: <strong>/includes/languages/finnish/index.php</strong>');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', 'Tervetuloa <span class="greetUser">vierailija!</span> Haluaisitko <a href="%s">kirjautua sisään</a>?');
} else {
  define('TEXT_GREETING_GUEST', 'Tervetuloa, toivottavasti pidät online tuotekuvastostamme.');
}

define('TEXT_GREETING_PERSONAL', 'Hei <span class="greetUser">%s</span>! Haluaisitko nähdä uudet <a href="%s">tuotteemme</a>?');

define('TEXT_INFORMATION', 'Määrittele tähän pääsivusi.');


//moved to english -> and thus not translated here (Pasi)
//define('TABLE_HEADING_FEATURED_PRODUCTS','Featured Products');

//define('TABLE_HEADING_NEW_PRODUCTS', 'New Products For %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Upcoming Products');
//define('TABLE_HEADING_DATE_EXPECTED', 'Date Expected');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // This section deals with product-listing page contents
  define('HEADING_TITLE', 'Saatavilla olevat tuotteet');
  define('TABLE_HEADING_IMAGE', 'Tuotteen kuva');
  define('TABLE_HEADING_MODEL', 'Malli');
  define('TABLE_HEADING_PRODUCTS', 'Tuotteen nimi');
  define('TABLE_HEADING_MANUFACTURER', 'Valmistaja');
  define('TABLE_HEADING_QUANTITY', 'Määrä');
  define('TABLE_HEADING_PRICE', 'Hinta');
  define('TABLE_HEADING_WEIGHT', 'Paino');
  define('TABLE_HEADING_BUY_NOW', 'Osta heti');
  define('TEXT_NO_PRODUCTS', 'Tämä ryhmä ei sisällä yhtään tuotetta.');
  define('TEXT_NO_PRODUCTS2', 'Tältä valmistajalta ei löydy tuotteita.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Tuotteiden määrä: ');
  define('TEXT_SHOW', 'Suodata tulokset: ');
  define('TEXT_BUY', 'Osta 1 \'');
  define('TEXT_NOW', '\' heti');
  define('TEXT_ALL_CATEGORIES', 'Kaikki ryhmät');
  define('TEXT_ALL_MANUFACTURERS', 'Kaikki Valmistajat');
} elseif ($category_depth == 'top') {
  // This section deals with the "home" page at the top level with no options/products selected
  /*Replace this text with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Onnittelut! Olet onnistuneesti asentanut Zen Cart verkkokauppaohjelmiston.');
} elseif ($category_depth == 'nested') {
  // This section deals with displaying a subcategory
  /*Replace this line with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Onnittelut! Olet onnistuneesti asentanut Zen Cart verkkokauppaohjelmiston.');
}
?>