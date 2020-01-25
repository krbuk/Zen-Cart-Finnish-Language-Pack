<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2019 Jul 16 Modified in v1.5.6c $
 */
// Finnish translation v1.5.6 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
define('HEADING_TITLE', 'Ryhmät / Tuotteet');
define('HEADING_TITLE_GOTO', 'Siirry:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Ryhmät / Tuotteet');
define('TABLE_HEADING_MODEL', 'Malli');

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
define('TEXT_MOVE', 'Siirrä <b>%s</b> ryhmään:');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Poista tuote');
define('TEXT_DELETE_PRODUCT_INTRO', 'Oletko varma että haluat poistaa tämän tuotteen lopullisesti?<br /><br /><strong>Varoitus:</strong> Linkitettyjen tuotteiden kohdalla<br />1 - Varmista että isäntä-ryhmä on muutettu jos olet poistamassa tuotetta isäntä-ryhmästä<br />2 - Valitse alta ryhmä(t) josta olet tuotetta poistamassa');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Siirrä tuote');
define('TEXT_MOVE_PRODUCTS_INTRO', 'Valitse missä ryhmässä haluat <b>%s</b> sijaitsevan');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Tämänhetkiset ryhmät: ');
define('TEXT_INFO_HEADING_COPY_TO', 'Kopioi kohteeseen');
define('TEXT_INFO_COPY_TO_INTRO', 'Valitse uusi ryhmä johon haluat kopioida tuotteen');
define('TEXT_INFO_CURRENT_PRODUCT', 'Tämänhetkiset ryhmät: ');
define('TEXT_HOW_TO_COPY', 'Kopiointitapa:');
define('TEXT_COPY_AS_LINK', 'Linkitä tuote');
define('TEXT_COPY_AS_DUPLICATE', 'Monista tuote');
define('TEXT_COPY_METATAGS','Kopioi metatunnisteet kahtena kappaleena?');
define('TEXT_COPY_LINKED_CATEGORIES','Kopioi linkitetyt luokat kahtena?');


define('TEXT_COPY_AS_DUPLICATE_METATAGS', 'Metan tunnisteet kielelle ID#%u kopioitu tuotteesta ID#%u kopioida Tuote ID#%u');
define('TEXT_COPY_AS_DUPLICATE_CATEGORIES', 'Linkitetty luokka ID#%u kopioitu tuotteesta ID#%u kopioida Tuote ID#%u');
define('TEXT_COPY_AS_DUPLICATE_DISCOUNTS', 'Tuotteesta kopioidut alennukset ID#%u kopioida Tuote ID#%u');

define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES', 'Omianisuuksien muutokset tuotteelle ID# ');
define('TEXT_PRODUCTS_ATTRIBUTES_INFO', 'Ominaisuudet tuotteelle:');
define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS', 'Lataukset: ');
define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE', 'Poista <strong>KAIKKI</strong> ominaisuudet tuotteelta:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT', 'Kopioi ominaisuudet <strong>tuotteeseen</strong> tuotteesta:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY', 'Kopioi ominaisuudet <strong>ryhmään</strong> tuotteesta:<br />');
define('TEXT_COPY_ATTRIBUTES_CONDITIONS', '<strong>Miten nykyisiä tuotemääritteitä tulisi käsitellä?</strong>');
define('TEXT_COPY_ATTRIBUTES_DELETE', '<strong>Poista</strong> ensin ja kopioi sitten uudet ominaisuudet');
define('TEXT_COPY_ATTRIBUTES_UPDATE', '<strong>Päivittää</strong> uusia asetuksia / hintoja ja lisää uusia');
define('TEXT_COPY_ATTRIBUTES_IGNORE', '<strong>Jättää huomiotta</strong> ja lisää vain uusia ominaisuuksia');
define('TEXT_ATTRIBUTE_COPY_INSERTING', '<strong>Uuden attribuutin lisääminen </strong>');
define('ICON_ATTRIBUTES', 'Ominaisuudet');

// Products and Attribute Copy Options
define('TEXT_COPY_ATTRIBUTES_ONLY', 'Käytetään vain Monista Tuotteet ...');
define('TEXT_COPY_ATTRIBUTES', 'Kopioi tuotemääritteet kahteen kertaan?');
define('TEXT_COPY_ATTRIBUTES_YES', 'Kyllä');
define('TEXT_COPY_ATTRIBUTES_NO', 'Ei');

// Products and Discount Copy Options
define('TEXT_COPY_DISCOUNTS_ONLY', 'Käytetään vain Monista Tuotteita paljousalennusten ...');
define('TEXT_COPY_DISCOUNTS', 'Kopioi tuotemäärän alennukset kahteen kertaan?');
define('TEXT_COPY_DISCOUNTS_YES', 'Kyllä');
define('TEXT_COPY_DISCOUNTS_NO', 'Ei');

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