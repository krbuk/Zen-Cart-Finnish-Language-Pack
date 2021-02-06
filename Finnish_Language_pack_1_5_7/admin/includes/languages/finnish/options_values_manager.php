<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 07 Modified in v1.5.7 $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation Ver. 1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 
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

define('TEXT_WARNING_OF_DELETE', '<span class="alert">Tähän ominaisuuteen on yhdistetty tuotteita ja arvoja - sitä ei ole turvallista poistaa</span>');
define('TEXT_OK_TO_DELETE', 'Tähän ominaisuuteen ei ole yhdistetty tuotteita - se voidaan poistaa turvallisesti.<br />Varoitus: Myös kaikki ominaisuuden arvot poistetaan!');
define('TEXT_OPTION_ID', 'Ominaisuuden ID');
define('TEXT_OPTION_NAME', 'Ominaisuuden nimi');

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

  define('TABLE_HEADING_OPT_TYPE', 'Ominaisuuden tyyppi'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Koko');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Enintään');

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
  define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Kopioi KAIKKIIN tuotteisiin, joissa vaihtoehdon nimi ja arvo ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Valitse vaihtoehdon nimi ja arvo, joka on olemassa tuotteesta tai tuotteista, jotka haluat kopioida sitten toisen vaihtoehdon nimen ja arvon kaikille tuotteille, joilla on tämä nykyinen vaihtoehdon nimi ja arvo');
  define('TEXT_SELECT_OPTION_FROM', 'Vastaavan vaihtoehdon nimi:');
  define('TEXT_SELECT_OPTION_VALUES_FROM', 'Optioarvo vastaa:');
  define('TEXT_SELECT_OPTION_TO', 'Lisättävän vaihtoehdon nimi:');
  define('TEXT_SELECT_OPTION_VALUES_TO', 'Lisättävän lisäysarvo:');
  define('TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID', 'Jätä tyhjäksi KAIKKI tuotteet tai<br />kirjoita päivitettävien tuotteiden ID');

// Option Name/Value to Option Name for Category with Product defaults
  define('TEXT_OPTION_VALUE_COPY_OPTIONS_TO', '<strong>Kopioi vaihtoehdon nimi / arvo tuotteisiin, joissa on nykyinen vaihtoehdon nimi ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO', 'Valitse tuotteelle tai tuotteille olemassa oleva vaihtoehdon nimi ja arvo lisätäksesi kaikkiin tuotteisiin tai vain valitun luokan tuotteisiin, joilla on valittu vaihtoehdon nimi.
                                                   <br /><strong>Esimerkki:</strong> Lisää vaihtoehdon nimi: Värivaihtoehdon arvo: Punainen kaikille tuotteille, joilla on vaihtoehdon nimi: Koko
                                                   <br /><strong>Esimerkki:</strong> Lisää vaihtoehdon nimi: Värivaihtoehdon arvo: Vihreä tuotteiden oletusarvoilla ID: 34 kaikille tuotteille, joilla on Optio-nimi: Koko
                                                   <br /><strong>Esimerkki:</strong> Lisää vaihtoehdon nimi: Värivaihtoehdon arvo: Vihreä tuotteiden oletusarvoilla ID: 34 kaikille tuotteille, joilla on Optio-nimi: Ryhmän koko ID: 65
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
  define('ERROR_OPTION_VALUES_COPIED', 'Virhe: Kopioi vaihtoehdon nimi ja vaihtoehdon arvo');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH', 'Virhe: Sovimaton vaihtoehdon nimi ja vaihtoehdon arvo valittu');
  define('ERROR_OPTION_VALUES_NONE', 'Virhe: Kopiotavaa ei löytnyt');
  define('SUCCESS_OPTION_VALUES_COPIED', 'Kopiointi onnistui! ');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID', 'Virhe: Puuttuu vaihtoehdon nimi / arvo tuotteille ID#');

  define('TEXT_OPTION_VALUE_DELETE_ALL', '<strong>Poista vastaava ominaisuus kaikista tuotteista, joissa vaihtoehdon nimi ja arvo ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Valitse vaihtoehdon nimi ja arvo, joka on olemassa tuotteesta tai tuotteista, jotka haluat poistaa kaikista tuotteista tai kaikista yhden ryhmän tuotteista');
  define('TEXT_SELECT_DELETE_OPTION_FROM', 'Vastaava ominaisuuden nimi:');
  define('TEXT_SELECT_DELETE_OPTION_VALUES_FROM', 'Ominaisuuden vastaava arvo:');

  define('ERROR_OPTION_VALUES_DELETE_MISMATCH', 'Virhe: Yhteensopimaton nimi/arvo pari valittu');

  define('SUCCESS_OPTION_VALUES_DELETE', 'Poistettu onnistuneesti: ');
  define('LABEL_FILTER', 'Valitse suodatettava ominaisuuden-arvo');
  define('TEXT_DISPLAY_NUMBER_OF_OPTION_VALUES', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> Ominaisuuden arvo)');
  define('TEXT_SHOW_ALL', 'Näytä kaikki');
