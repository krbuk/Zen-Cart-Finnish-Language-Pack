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
//  $Id: options_name_manager.php 2181 2005-10-20 18:37:16Z ajeh $
//
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.5 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>

define('HEADING_TITLE_OPT', 'Tuotteen ominaisuudet');
define('HEADING_TITLE_VAL', 'Ominaisuuden arvot');
define('HEADING_TITLE_ATRIB', 'Tuotteen ominaisuudet');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Tuotteen nimi');
define('TABLE_HEADING_OPT_NAME', 'Ominaisuuden nimi');
define('TABLE_HEADING_OPT_VALUE', 'Ominaisuuden arvo');
define('TABLE_HEADING_OPT_PRICE', 'Hinta');
define('TABLE_HEADING_OPT_PRICE_PREFIX', '+/-');
define('TABLE_HEADING_ACTION', 'Toiminto');
define('TABLE_HEADING_DOWNLOAD', 'Ladattavat tuotteet:');
define('TABLE_TEXT_FILENAME', 'Tiedostonimi:');
define('TABLE_TEXT_MAX_DAYS', 'Päiviä vanhenemiseen:');
define('TABLE_TEXT_MAX_COUNT', 'Latauksia enintään:');

define('TEXT_WARNING_OF_DELETE', 'Tähän ominaisuuteen on yhdistetty tuotteita ja arvoja - sitä ei ole turvallista poistaa.');
define('TEXT_OK_TO_DELETE', 'Tähän ominaisuuteen ei ole yhdistetty tuotteita - se voidaan poistaa turvallisesti.<br />Varoitus: Myös kaikki ominaisuuden arvot poistetaan!');
define('TEXT_OPTION_ID', 'Ominaisuuden ID');
define('TEXT_OPTION_NAME', 'Ominaisuuden nimi');
define('TABLE_HEADING_OPT_DISCOUNTED','Alennettu'); // ?!?!?!

define('ATTRIBUTE_WARNING_DUPLICATE','Ominaisuus on jo olemassa - Ominaisuutta ei lisätty'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Ominaisuus on jo olemassa - Ominaisuutta ei muutettu'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','Ominaisuuden nimi ja arvo eivät täsmää - Ominaisuutta ei lisätty'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Ominaisuuden nimi ja arvo eivät täsmää - Ominaisuutta ei muutettu'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Mahdollisesti olemassa oleva ominaisuuden nimi lisätty'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Mahdollisesti olemassa oleva ominaisuuden arvo lisätty'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','MUOKATAAN'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','POISTETAAN'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','LISÄTÄÄN UUSI OMINAISUUS'); // title
define('TEXT_DOWNLOADS_DISABLED','HUOM: Tiedostolataukset eivät ole käytössä');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Päivää:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Enintään:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Lajittelujärjestys');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Oletusjärjestys');
  define('TEXT_SORT',' Järjestys: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','+/-');
  define('TABLE_HEADING_OPT_WEIGHT','Paino');
  define('TABLE_HEADING_OPT_SORT_ORDER','Lajittelujärjestys');
  define('TABLE_HEADING_OPT_DEFAULT','Oletus');

  define('TABLE_HEADING_YES','Kyllä');
  define('TABLE_HEADING_NO','Ei');

  define('TABLE_HEADING_OPT_TYPE', 'Ominaisuuden tyyppi'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Koko');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Enintään');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Rivejä');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Kommentit');

  define('TEXT_OPTION_VALUE_COMMENTS','Kommentit: ');
  define('TEXT_OPTION_VALUE_ROWS', 'Rivejä: ');
  define('TEXT_OPTION_VALUE_SIZE','Näyettävä pituus: ');
  define('TEXT_OPTION_VALUE_MAX','Pituus enintään: ');

  define('TEXT_ATTRIBUTES_IMAGE','Ominaisuuden kuva:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Ominaisuuden kuvan hakemisto:');

  define('TEXT_ATTRIBUTES_FLAGS','Ominaisuuden<br />asetukset:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Käytetään<br />vain näyteeksi:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Ominaisuus on ilmainen<br />kun tuote on ilmainen:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Oletus ominaisuus<br />joka on merkattu valituksi:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Käytä samoja alennuksia<br />kuin tuotteella:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Lisää pohjahintaan<br />kun tuote on hinnoiteltu ominaisuuksilla');

  define('TEXT_PRODUCT_OPTIONS_INFO','<strong>HUOM: Muokkaa tuotteen ominaisuuksien nimiä tehdäksesi muita asetuksia</strong>');

// updates
define('ERROR_PRODUCTS_OPTIONS_VALUES', 'VAROITUS: Tuotteita ei löytnyt ... mitään ei päivitetty');

define('TEXT_SELECT_PRODUCT', ' Valitse tuote');
define('TEXT_SELECT_CATEGORY', ' Valitse ryhmä');
define('TEXT_SELECT_OPTION', 'Valitse ominaisuuden nimi');

// add
define('TEXT_OPTION_VALUE_ADD_ALL', '<br /><strong>Lisää KAIKKI ominaisuuksien arvot KAIKILLE tuotteille joille on määritelty ominaisuuden nimi</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Päivitä KAIKKI olemassa olevat tuotteet joilla on ainakin YKSI ominaisuuden arvo ja lisää KAIKKI ominaisuuden arvot joita määritellyllä ominaisuuden nimellä on');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Ominaisuuksia päivitetty ');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', '<br /><strong>Lisää KAIKKI ominaisuuksien arvot YHDEN tuotteen ominaisuuteen nimellä</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Päivitä YHTÄ tuotetta jolle on määritelty ainakin YKSI ominaisuuden arvo ja lisää KAIKKI ominaisuuden arvot joita määritellyllä ominaisuuden nimellä on');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', '<br /><strong>Add ALL Option Values to ONE Category of products for Option Name</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Update ONE Category of products, when the product has at least ONE Option Value and Add ALL Option Values in an Option Name');

define('TEXT_COMMENT_OPTION_VALUE_ADD_ALL', '<strong>NOTE:</strong> Sort order will be set to the default Option Value Sort Order for these products');

// delete
define('TEXT_OPTION_VALUE_DELETE_ALL', '<br /><strong>Delete ALL Option Values to ALL products for Option Name</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Update ALL existing products that have at least ONE Option Value and Delete ALL Option Values in an Option Name');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', '<br /><strong>Delete ALL Option Values to ONE products for Option Name</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Update ONE product that has at least ONE Option Value and Delete ALL Option Values in an Option Name');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', '<br /><strong>Delete ALL Option Values to ONE Category of products for Option Name</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Update ONE Category of products, when the product has at least ONE Option Value and Delete ALL Option Values in an Option Name');

define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>HUOM:</strong> Kaikki ominaisuuden nimen arvot poistetaan valituilta tuotteilta. Ominaisuuden arvon asetuksia ei poisteta.');

define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Kopioi KAIKKI ominaisuuden arvot toiseen ominaisuuden nimeen</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Kaikki ominaisuuden arvot kopioidaan ominaisuudesta toiseen');
define('TEXT_SELECT_OPTION_FROM', 'Kopioi ominaisuudesta: ');
define('TEXT_SELECT_OPTION_TO', 'Kopioi kaikki ominaisuuden arvot ominaisuuteen nimeltä: ');
define('SUCCESS_OPTION_VALUES_COPIED', 'Kopiointi onnistui! ');
define('ERROR_OPTION_VALUES_COPIED', 'Virhe - Ominaisuuden arvoa ei voi kopioida samaan ominaisuuteen! ');
define('ERROR_OPTION_VALUES_NONE', 'Virhe - Ominaisuudella ei ole yhtään arvoa määritelty. Kopiointia ei suoritettu! ');
define('TEXT_WARNING_BACKUP', 'Varoitus: Ota aina tietokannasta varmuuskopio ennenkuin teet laajoja muutoksia');

define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Ominaisuuden kuvia per rivi: ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'Ominaisuuden valintaruudun tyyli: ');
define('TEXT_OPTION_ATTIBUTE_MAX_LENGTH', '<strong>HUOM: Rivit, Näytettävä pituus ja enimmäispituus koskee vain teksti ominaisuuksia:</strong><br />');
define('TEXT_OPTION_IMAGE_STYLE', '<strong>Tyylit:</strong>');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0= Kuvat ominaisuuksien nimien alla');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1= Valintaruutu, Kuva ja ominaisuuden arvo');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2= Valintaruutu, ominaisuuden nimi ja kuva alapuolella');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3= Ominaisuuden arvo kuvan ja valintaruudun alla');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4= Kuva yllä, ominaisuuden arvo keskellä ja valintaruutu alla');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5= Valintaruutu yllä, kuva keskellä ja ominaisuuden arvo alla');
?>