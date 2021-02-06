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
//  $Id: ezpages.php 2827 2006-01-08 19:46:40Z ajeh $
//
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
define('HEADING_TITLE', 'EZ-Pages');
define('TABLE_HEADING_PAGES', 'Sivun otsikko');
define('TABLE_HEADING_ACTION', 'Toiminto');
define('TABLE_HEADING_VSORT_ORDER', 'Sivulaatikoiden lajittelujärjestys');
define('TABLE_HEADING_HSORT_ORDER', 'Footer lajittelujärjestys');
define('TEXT_PAGES_TITLE', 'Sivun otsikko:');
define('TEXT_PAGES_HTML_TEXT', 'HTML sisältö:');
define('TABLE_HEADING_DATE_ADDED', 'Lisäyspäivä:');
define('TEXT_PAGES_STATUS_CHANGE', 'Tilan muutos: %s');
define('TEXT_INFO_DELETE_INTRO', 'Haluatko varmasti poistaa tämän sivun?');
define('SUCCESS_PAGE_INSERTED', 'Sivu on luotu onnistuneesti.');
define('SUCCESS_PAGE_UPDATED', 'Sivu on päivitetty onnistuneesti.');
define('SUCCESS_PAGE_REMOVED', 'Sivu on poistettu onnistuneesti.');
define('SUCCESS_PAGE_STATUS_UPDATED', 'Sivun tilaa on muutettu onnistuneesti.');
define('ERROR_PAGE_TITLE_REQUIRED', 'Virhe: Sivun otsikko tarvitaan.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Virhe: Tuntematon tila.');
define('ERROR_MULTIPLE_HTML_URL', 'Virhe: Olet määritellyt useita asetuksia vaikka vain yksi voidaan määrittää per sivu ...<br />Määritä ainoastaan HTML-sisältö tai Sisäinen linkki tai Ulkoinen linkki');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_STATUS_HEADER', 'Header:');
define('TABLE_HEADING_STATUS_SIDEBOX', 'Sivulaatikko:');
define('TABLE_HEADING_STATUS_FOOTER', 'Footer:');
define('TABLE_HEADING_STATUS_TOC', 'TOC:');
define('TABLE_HEADING_CHAPTER', 'Luku:');
define('TABLE_HEADING_VISIBLE', 'Näkyvä:');

define('TABLE_HEADING_PAGE_OPEN_NEW_WINDOW', 'Avaa uusi ikkuna:');
define('TABLE_HEADING_PAGE_IS_SSL', 'Sivu on SSL-suojattu:');
define('TABLE_HEADING_PAGE_IS_VISIBLE', 'Sivu on näkyvissä:');
define('TABLE_HEADING_PAGE_IS_VISIBLE_EXPLANATION', ' Sivu näytetään, vaikka ei otsikossa, alatunnisteessa tai sivupalkissa<br> (Jos näkyvissä- ja Header-, Footer- ja Sidebox -asetukset ovat pois päältä, kävijät, jotka yrittävät nähdä sivua, saavat vastausta sivu-ei-löydetty.)');


define('TEXT_DISPLAY_NUMBER_OF_PAGES', 'Näytetään <b>%d</b> / <b>%d</b> (<b>%d</b> sivusta)');
define('IMAGE_NEW_PAGE', 'Uusi sivu');
define('TEXT_INFO_PAGE_IMAGE', 'Kuva');
define('TEXT_INFO_CURRENT_IMAGE', 'Nykyinen kuva:');
define('TEXT_INFO_PAGES_ID', 'ID: ');
define('TEXT_INFO_PAGES_ID_SELECT', 'Valitse sivu ...');

define('TEXT_HEADER_SORT_ORDER', 'Järjestys:');
define('TEXT_SIDEBOX_SORT_ORDER', 'Järjestys:');
define('TEXT_FOOTER_SORT_ORDER', 'Järjestys:');
define('TEXT_TOC_SORT_ORDER', 'Järjestys:');
define('TEXT_CHAPTER', 'Edellinen/Seuraava luku:');
define('TABLE_HEADING_CHAPTER_PREV_NEXT', 'Luku:&nbsp;<br />');

define('TEXT_HEADER_SORT_ORDER_EXPLAIN', 'Otsikkolajittelujärjestys, jota käytetään luotaessa sivuja yhdellä rivillä otsikolle; Lajittelujärjestyksen tulisi olla suurempi kuin nolla, jotta tämä sivu otetaan käyttöön rivityyppiluettelossa');
define('TEXT_SIDEBOX_ORDER_EXPLAIN', 'Sivulaatikon lajittelujärjestystä käytetään, kun sivut luetellaan pystysuorassa linkissä; Lajittelujärjestyksen tulee olla suurempi kuin nolla, jotta se pystytään vertikaalisessa luettelossa. Muutoin sitä pidetään HTML-tekstinä erityistarkoituksiin');
define('TEXT_FOOTER_ORDER_EXPLAIN', 'FOoter, jota käytetään sivuja luotaessa yhden rivin alatunnisteella Lajittelujärjestyksen tulisi olla suurempi kuin nolla, jotta tämä sivu otetaan käyttöön rivityyppiluettelossa');
define('TEXT_TOC_SORT_ORDER_EXPLAIN', 'TOC (Sisällysluettelo) Lajittelujärjestys, jota käytetään luotaessa sivuja, jotka on räätälöity joko yhdeksi riviksi (header / footer jne.) Tai pystysuunnassa yksilöllisten tarpeiden perusteella; Lajittelujärjestyksen tulisi olla suurempi kuin nolla, jotta tämä sivu otetaan käyttöön luettelossa');
define('TEXT_CHAPTER_EXPLAIN', 'Lukuja käytetään TOC (TSisällysluettelo) Lajittelujärjestys näytölle Edellinen / Seuraava. TOC-linkit koostuvat sivuista, jotka vastaavat tätä luvun numeroa, ja ne näytetään TOC-lajittelujärjestyksessä');

define('TEXT_ALT_URL', 'Sisäinen linkki:');
define('TEXT_ALT_URL_EXPLAIN', 'Jos määritelty, sivun sisältö ohitetaan ja linkkiin käytetään määriteltyä sisäistä URL osoitetta<br />Esimerkiksi arvostelusivua varten: index.php?main_page=reviews<br />Esimerkki tilinhallintaa varten: index.php?main_page=account ja merkkaa SSL suojatuksi');

define('TEXT_ALT_URL_EXTERNAL', 'Ulkoinen linkki:');
define('TEXT_ALT_URL_EXTERNAL_EXPLAIN', 'Jos määritelty, sivun sisältö ohitetaan ja linkkiin käytetään määriteltyä ulkoista linkkiä<br />Esimerkki ulkoisesta linkistä: http://www.sashbox.net');

define('TEXT_SORT_CHAPTER_TOC_TITLE_INFO', 'Näyttö järjestys: ');
define('TEXT_SORT_CHAPTER_TOC_TITLE', 'Luku/TOC');
define('TEXT_SORT_HEADER_TITLE', 'Header');
define('TEXT_SORT_SIDEBOX_TITLE', 'Sivulaatikko');
define('TEXT_SORT_FOOTER_TITLE', 'Footer');
define('TEXT_SORT_PAGE_TITLE', 'Sivun otsikko');
define('TEXT_SORT_PAGE_ID_TITLE', 'Sivun ID, Otsikko');

define('TEXT_PAGE_TITLE', 'Otsikko:');
define('TEXT_WARNING_MULTIPLE_SETTINGS', '<strong>VAROITUS: Useita linkkejä määritelty</strong>');
?>
