<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: options_values_manager.php 15883 2010-04-11 16:41:26Z wilt $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.5 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>

define('HEADING_TITLE_OPT', 'Tuotteen ominaisuudet');
define('HEADING_TITLE_VAL', 'Ominaisuuksien arvot');
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

  define('TEXT_PRODUCT_OPTIONS_INFO','Muokkaa tuotteen ominaisuuksia tehdäksesi muita asetuksia');

// Option Names/Values copier from one to another
  define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Copy to ALL Products where Option Name and Value ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Select an Option Name and Value that currently exists on a product or products that you then want to copy another Option Name and Value to for all products with this existing Option Name and Value');
  define('TEXT_SELECT_OPTION_FROM', 'Option Name to match:');
  define('TEXT_SELECT_OPTION_VALUES_FROM', 'Option Value to match:');
  define('TEXT_SELECT_OPTION_TO', 'Option Name to add:');
  define('TEXT_SELECT_OPTION_VALUES_TO', 'Option Value to add:');
  define('TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID', 'Leave blank for ALL Products or<br />enter a Category ID for Products to update');

// Option Name/Value to Option Name for Category with Product defaults
  define('TEXT_OPTION_VALUE_COPY_OPTIONS_TO', '<strong>Copy Option Name/Value to Products with existing Option Name ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO', 'Select an Option Name and Value that currently exists on a product or products to add to all products or to only the products in the selected category that have the selected Option Name.
                                                   <br /><strong>Example:</strong> Add Option Name: Color Option Value: Red to all Products with Option Name: Size
                                                   <br /><strong>Example:</strong> Add Option Name: Color Option Value: Green with default values from Products ID: 34 to all Products with Option Name: Size
                                                   <br /><strong>Example:</strong> Add Option Name: Color Option Value: Green with default values from Products ID: 34 to all Products with Option Name: Size for Categories ID: 65
        ');
  define('TEXT_SELECT_OPTION_TO_ADD_TO', 'Ominaisuuden nimi johon lisätään:');
  define('TEXT_SELECT_OPTION_FROM_ADD', 'Lisättävän ominaisuuden nimi:');
  define('TEXT_SELECT_OPTION_VALUES_FROM_ADD', 'Lisättävän ominaisuuden arvo:');
  define('TEXT_SELECT_OPTION_FROM_PRODUCTS_ID', 'Default New Attribute Values from Product ID# or leave blank for no default values:');
  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Mitä olemassaoleville ominaisuuksille pitäisi tehdä?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Poista</strong> ensin, ja kopioi sitten uudet ominaisuudet');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Päivitä</strong> olemassaolevien hinnat/asetukset');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Ohita</strong> olemassaolevat ja kopioi vain uudet');

  define('TEXT_INFO_FROM', ' Lähde: ');
  define('TEXT_INFO_TO', ' kohde: ');
  define('ERROR_OPTION_VALUES_COPIED', 'Error: Duplicate Option Name and Option Value');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH', 'Error: Mismatched Option Name and Option Value selected');
  define('ERROR_OPTION_VALUES_NONE', 'Virhe: Kopiotavaa ei löytnyt');
  define('SUCCESS_OPTION_VALUES_COPIED', 'Kopiointi onnistui! ');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID', 'Error: Missing Option Name/Value for Products ID#');

  define('TEXT_OPTION_VALUE_DELETE_ALL', '<strong>Delete Matching Attribute from ALL Products where Option Name and Value ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Select an Option Name and Value that currently exists on a product or products that you want deleted from ALL Products or from ALL Products within one Category');
  define('TEXT_SELECT_DELETE_OPTION_FROM', 'Option Name to match:');
  define('TEXT_SELECT_DELETE_OPTION_VALUES_FROM', 'Option Value to match:');

  define('ERROR_OPTION_VALUES_DELETE_MISMATCH', 'Virhe: Yhteensopimaton nimi/arvo pari valittu');

  define('SUCCESS_OPTION_VALUES_DELETE', 'Poistettu onnistuneesti: ');

