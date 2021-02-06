<?php

/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */
// Finnish translation Ver. 1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
define('HEADING_TITLE', 'Ryhmät / Tuotteet');
define('HEADING_TITLE_GOTO', 'Siirry:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Ryhmät / Tuotteet');

define('TABLE_HEADING_PRICE', 'Hinta/Tarjous/Alennus');
define('TABLE_HEADING_QUANTITY', 'Määrä');
define('TABLE_HEADING_STATUS', 'Tila');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Lajittelu');
define('TABLE_HEADING_ACTION', 'Toiminto');
define('TEXT_PRODUCTS_STATUS_ON_OF', ' passiivisena ');
define('TEXT_PRODUCTS_STATUS_ACTIVE', ' aktiivisena ');
define('TEXT_CATEGORIES', 'Ryhmät:');
define('TEXT_PRODUCTS', 'Tuotteet:');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Poista ryhmä');
define('TEXT_DELETE_CATEGORY_INTRO', 'Oletko varma että haluat poistaa tämän ryhmän?');
define('TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS', '<strong>Varoitus:</strong> Linkitetyt tuotteet joiden isäntä-ryhmät poistetaan saattavat tulla väärin hinnoitelluiksi. Sinun tulisi ennen linkkejä sisältävän ryhmän poistoa muuttaa tuotteiden isäntä-ryhmä ID:t toisiin ryhmiin, ennen ryhmän poistoa');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Siirrä ryhmä');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Valitse missä ryhmässä haluat <b>%s</b> sijaitsevan');
define('TEXT_MOVE_PRODUCT', 'Siirrä tuote<br><strong>ID#%1$u %2$s</strong><br>nykyisestä ryhmästä<br><strong>ID#%3$u %4$s</strong><br>ryhmän:');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Poista tuote / linkit');
define('TEXT_DELETE_PRODUCT_INTRO', 'Oletko varma että haluat poistaa tämän tuotteen lopullisesti?<br />Voit myös helpottaa tuotteiden linkittämistä / linkityksen poistamista useisiin ryhmiin käyttämällä <a href="index.php?cmd=' . FILENAME_PRODUCTS_TO_CATEGORIES . '&amp;products_filter=%u">Useiden ryhmät linkkien hallinta</a>.<br /><br /><strong>Linkitetyt ryhmät</strong> ovat valmiiksi valittuja poistettaviksi. <br /><strong>Pääryhmää</strong> (<span class="text-danger">highlighted</span>) on poistettu käytöstä vahingossa tapahtuvan poistamisen estämiseksi.<br /><br />Jos haluat poistaa tuotteen kokonaan, valitse KAIKKI ryhmät, mukaan lukien pääryhmä.');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Siirrä tuotetta');
define('TEXT_MOVE_PRODUCTS_INTRO', 'Siirrä tämä tuote tästä ryhmästä valittuun ryhmään.<br />Jos tämä nykyinen ryhmä on myös tuotteen pääryhmä, se päivitetään myös valittuun ryhmään.<br />');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Tämänhetkiset ryhmä: ');
define('TEXT_INFO_HEADING_COPY_TO', 'Kopiointitapa');
define('TEXT_INFO_CURRENT_PRODUCT', 'Tämänhetkiset tuote: ');
define('TEXT_HOW_TO_COPY', 'Kopiointitapa:');
define('TEXT_COPY_AS_LINK','Linkitä tuote');
define('TEXT_COPY_AS_DUPLICATE','Monista tuote');
define('TEXT_COPY_METATAGS','Kopioi metatunnisteet kahtena kappaleena?');
define('TEXT_COPY_LINKED_CATEGORIES','Kopioi linkitetyt ryhmät kahtena?');
define('TEXT_COPY_EDIT_DUPLICATE', 'Avaa Kopioi tuote muokkausta varten');

//used in copy_product_confirm
define('TEXT_COPY_AS_DUPLICATE_ATTRIBUTES', 'ID#%u Tuotetunnuksesta kopioidut ominaisuus kopioimaan ID#%u tuotetunnus ');
define('TEXT_COPY_AS_DUPLICATE_METATAGS', 'Meta-tunnisteet kielelle ID#%u kopioitu tuotteesta ID#%u kopioida Tuote ID#%u');
define('TEXT_COPY_AS_DUPLICATE_CATEGORIES', 'Linkitetty ryhmä ID#%u kopioitu tuotteesta ID#%u kopioida Tuote ID#%u');
define('TEXT_COPY_AS_DUPLICATE_DISCOUNTS', 'ID#%u Tuotteesta kopioidut alennukset kopioida Tuote ID#%u');
define('TEXT_DUPLICATE_IDENTIFIER', '[KAHTENA]');

define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES', 'Omianisuuksien muutokset tuotteelle ID# ');
define('TEXT_PRODUCTS_ATTRIBUTES_INFO', 'Ominaisuudet tuotteelle:');
define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS', 'Lataukset: ');
define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE', 'Poista <strong>KAIKKI</strong> ominaisuudet tuotteelta:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT', 'Kopioi ominaisuudet <strong>tuotteeseen</strong> tuotteesta:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY', 'Kopioi ominaisuudet <strong>ryhmään</strong> tuotteesta:<br />');
define('TEXT_COPY_ATTRIBUTES_CONDITIONS', '<strong>How should existing product attributes be handled?</strong>');
define('TEXT_COPY_ATTRIBUTES_DELETE', '<strong>Poista</strong> ensin ja kopioi sitten uudet ominaisuudet');
define('TEXT_COPY_ATTRIBUTES_UPDATE', '<strong>Päivittää</strong> uusia asetuksia / hintoja ja lisää uusia');
define('TEXT_COPY_ATTRIBUTES_IGNORE', '<strong>Jättää huomiotta</strong> ja lisää vain uusia ominaisuuksia');

// Products and Attribute Copy Options
define('TEXT_COPY_ATTRIBUTES', 'Kopioidaanko tuotemääritteet kahteen kertaan?');

// Products and Discount Copy Options
define('TEXT_COPY_DISCOUNTS_ONLY', 'Käytetään vain Monista Tuotteita paljousalennusten ...');
define('TEXT_COPY_DISCOUNTS', 'Kopioi tuotemäärän alennukset kahteen kertaan?');

// From categories.php in 1.5.5
// categories status
define('TEXT_INFO_HEADING_STATUS_CATEGORY', 'Vaihda luokan tila:');
define('TEXT_CATEGORIES_STATUS_INTRO', 'Muuttaa <strong>tämä</strong> rymä\'t tilaa: ');
define('TEXT_CATEGORIES_STATUS_OFF', 'Pois');
define('TEXT_CATEGORIES_STATUS_ON', 'Päällä');
define('TEXT_PRODUCTS_STATUS_INFO', 'Muuta kaikki Tuotteen tila on: ');
define('TEXT_PRODUCTS_STATUS_OFF', 'Pois');
define('TEXT_PRODUCTS_STATUS_ON', 'Päällä');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', 'Ei muutettu');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>VAROITUS ...</strong><br />Huomautus: Kategorian poistaminen käytöstä poistaa kaikki tämän luokan tuotteet käytöstä. Tähän luokkaan sijoitetut linkit, jotka jaetaan muiden luokkien kanssa, poistetaan myös käytöstä.');
define('TEXT_SUBCATEGORIES_STATUS_INFO', 'Muuta kaikki-alaluokat -tilaksi:');
define('TEXT_SUBCATEGORIES_STATUS_OFF', 'Ei Käytössä');
define('TEXT_SUBCATEGORIES_STATUS_ON', 'Käytössä');
define('TEXT_SUBCATEGORIES_STATUS_NOCHANGE', 'Ei muutettu');

define('WARNING_PRODUCTS_IN_TOP_INFO', 'VAROITUS: Sinulla on tuotteita huipputason luokassa. Tämän vuoksi hinnoittelu ei toimi oikein luettelossa. Tuotteita löytyi: ');
define('TEXT_COPY_MEDIA_MANAGER', 'Kopioi media?');
define('SUCCESS_ATTRIBUTES_DELETED','Ominaisuudet poistettu');