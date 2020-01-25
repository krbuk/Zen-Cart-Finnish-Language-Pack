<?php
/**
 * @package admin
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Zen4All Wed Jan 17 12:01:19 2018 +0100 Modified in v1.5.6 $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.6 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
define('HEADING_TITLE','Tuoteiden ryhmälinkkien hallinta');
define('HEADING_TITLE2','Ryhmät / Tuotteet');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_AVAILABLE', 'Ryhmät joissa on tuotteita ja joita voidaan linkittää...');

define('TABLE_HEADING_PRODUCTS_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Nimi');
define('TABLE_HEADING_MODEL', 'Malli');
define('TABLE_HEADING_ACTION', 'Toiminto');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_TO_CATEGORIES', 'MUOKATAAN TUOTTEEN TUOTERYHMÄLINKITYSTÄ');
define('TEXT_PRODUCTS_ID', 'Tuotteen ID# ');
define('TEXT_PRODUCTS_NAME', 'Nimi: ');
define('TEXT_PRODUCTS_MODEL', 'Malli: ');
define('TEXT_PRODUCTS_PRICE', 'Hinta: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', 'Päivitä ryhmien linkit');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'Valitse linkitettävä tuote');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', 'Set Product to Categories Links for: ');
define('TEXT_INFO_LINKED_TO_COUNT', '&nbsp;&nbsp;Linkitysten lukumäärä: ');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO',
'Tällä työkalulla saat linkitettyä tuotteita nopeasti useisiin ryhmiin.<br />Voit myös linkittää kaikki ryhmän tuotteet toiseen ryhmään tai poistaa tuotteet ryhmästä jotka ovat linkitetty toiseen ryhmään.');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER',
'Hinnoittelusyistä, jokaisella tuotteella on oltava määriteltynä päätuoteryhmä. Päätuoteryhmä voidaan vaihtaa "päätuoteryhmä" alasvetovalikosta.<br />
Valittu tuote on linkitetty niihin ryhmiin jotka ovat valittuna alla. Lisätäksesi tuotteen ryhmään, laita ruksi ryhmän nimen vieressä olevaan ruutuun tai poista ruksi jos haluat poistaa tuotteen kyseisestä ryhmästä.<br />
Kun olet tehnyt haluamasi muutokset, paina ' . BUTTON_UPDATE_CATEGORY_LINKS . ' nappia.<br />'
);

define('HEADER_CATEGORIES_GLOBAL_CHANGES', 'Tuoteryhmien tai päätuoteryhmien massamuokkaus työkalu');

define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>VAROITUS:</strong> Päätuoteryhmän ID on annettava, ennenkuin tuotelinkitysten muuttamista.');

// copy category to category linked
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Linkitä KAIKKI tuoteryhmän tuotteet toiseen ryhmään.</strong>');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Lähde tuoteryhmän ID: ');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Kohde tuoteryhmän ID: ');
define('BUTTON_COPY_CATEGORY_LINKED', 'Linkitä');

define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', 'VAROITUS: Tuote on nollattu, eikä kuulu enää ryhmään...');
define('WARNING_COPY_LINKED', 'VAROITUS: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Lähde tuoteryhmän ID ei kelpaa: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Kohde tuoteryhmän ID ei kelpaa: ');
define('WARNING_NO_CATEGORIES_ID', 'Varoitus: Ryhmiä ei valittu! Muutoksia ei tehty.');
define('SUCCESS_COPY_LINKED', 'Tuotteet linkitetty onnistuneesti...');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Lähde tuoteryhmä OK: ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Kohde tuoteryhmä OK: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED_MISSING', 'VAROITUS: Copy completed to Invalid Category to Link: '); /* PRR: No tässä ei ole mitään järkeä! */

define('WARNING_COPY_FROM_IN_TO_LINKED', '<strong>VAROITUS: Muutoksia ei tehty, tuotelinkit on jo olemassa... </strong>');

// remove category to category linked
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Poista kaikki linkitetyt tuotteet tuoteryhmästä...</strong><br />Esim: Antamalla arvot 8 ja 22 poistuu kaikki ryhmän 8 linkitetyt tuotteet ryhmästä 22');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Lähde tuoteryhmän ID: ');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Poista linkit tästä ryhmästä (ID): ');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'Poista linkit');

define('WARNING_REMOVE_LINKED', 'VAROITUS: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Lähde tuoteryhmän ID ei kelpaa: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Kohde tuoteryhmän ID ei kelpaa: ');
define('SUCCESS_REMOVE_LINKED', 'Tuotelinkit poistettu...');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Lähde tuoteryhmä OK: ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Kohde tuoteryhmä OK: ');

define('WARNING_REMOVE_FROM_IN_TO_LINKED', '<strong>VAROITUS: Tuotelinkkejä ei poistettu...</strong>');

define('WARNING_MASTER_CATEGORIES_ID_CONFLICT', '<strong>VAROITUS: PÄÄTUOTERYHMÄN ID RISTIRIITA!</strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_CONFLICT', '<strong>Päätuoteryhmän ID: </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_PURPOSE', 'Huom.: Päätuoteryhmää käytetään hinnoittelussa, kun taas tuoteryhmää käytetään linkitettyjen tuotteiden hinnoittelussa, esim. alennuksissa<br />');
define('WARNING_MASTER_CATEGORIES_ID_CONFLICT_FIX', 'Virheen korjaamiseksi sinut on ohjattu ensimmäisen tuotteeseen jossa ristiriita havaittiin. Valitse tuotteelle toinen päätuoteryhmä ja yritä uudelleen. Muutokset saadaan tehtyä vasta kun kaikki ristiriidat on selvitetty.');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_FROM', ' Ristiriitainen lähde tuoteryhmä: ');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_TO', ' Ristiriitainen kohde tuoteryhmä: ');
define('SUCCESS_MASTER_CATEGORIES_ID', 'Tuotelinkitykset päivitetty...');
define('WARNING_MASTER_CATEGORIES_ID', 'VAROITUS: Päätuoteryhmää ei ole valittu!');

define('TEXT_PRODUCTS_ID_INVALID', 'VAROITUS: Virheellinen tuote ID tai tuotetta ei ole valittu');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', 'Huom: Tuotetta ei tarvitse olla valittuna, mutta sen valitseminen näyttää kaikki käytettävissä olevat ryhmät, sekä niiden ID numerot.');

// reset all products to new master_categories_id
// copy category to category linked
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', '<strong>Uudelleen aseta KAIKKIEN valitun tuoteryhmän tuotteiden päätuoteryhmä ID:t kyseiseen tuoteryhmään</strong>');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Tuoteryhmän ID: ');
define('BUTTON_RESET_CATEGORY_MASTER', 'Muuta päätuoteryhmiä');

define('WARNING_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Varoitus: Virheellinen tuoteryhmä valittu...');
define('SUCCESS_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Kaikki tuoteryhmän tuotteiden päätuoteryhmät on vaihdettu: ');

define('TEXT_CATEGORIES_NAME', 'Ryhmän nimi');
?>