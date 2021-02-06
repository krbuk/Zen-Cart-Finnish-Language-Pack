<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */
// Finnish translation Ver. 1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
define('HEADING_TITLE', 'Mainosten hallinta');

define('TABLE_HEADING_BANNERS', 'Mainokset');
define('TABLE_HEADING_GROUPS', 'Ryhmät');
define('TABLE_HEADING_STATISTICS', 'Näyttöä / Klikkausta');
define('TABLE_HEADING_STATUS', 'Tila');
define('TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS','Uusi ikkuna');
define('TABLE_HEADING_BANNER_ON_SSL', 'Näytä SSL tilassa');
define('TABLE_HEADING_ACTION', 'Toiminto');
define('TABLE_HEADING_BANNER_SORT_ORDER', 'Lajittelujärjestys');

define('TEXT_BANNERS_TITLE', 'Mainoksen otsikko:');
define('TEXT_BANNERS_URL', 'Mainoksen URL:');
define('TEXT_BANNERS_GROUP', 'Mainosryhmä:');
define('TEXT_BANNERS_NEW_GROUP', ', tai kirjoita uuden ryhmän nimi alle');
define('TEXT_BANNERS_IMAGE', 'Kuva:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', tai kirjoita paikallisen tiedoston nimi alle');
define('TEXT_BANNERS_IMAGE_TARGET', 'Tallennuskohde:');
define('TEXT_BANNER_IMAGE_TARGET_INFO', '<strong>Suositeltu tallennuskohde kuvalle:</strong> ' . DIR_FS_CATALOG_IMAGES . 'banners/');
define('TEXT_BANNERS_HTML_TEXT_INFO', '<strong>HUOM: HTML mainokset eivät rekisteröi klikkauksia</strong>');
define('TEXT_BANNERS_HTML_TEXT', 'HTML Teksti:');
define('TEXT_BANNERS_ALL_SORT_ORDER', 'Lajittelujärjestys - banner_box_all');
define('TEXT_BANNERS_ALL_SORT_ORDER_INFO', '<strong>HUOM: banners_box_all sivulaatikko näyttää mainokset määritellyssä järjestyksessä</strong>');
define('TEXT_BANNERS_EXPIRES_ON', 'Vanhenee:');
define('TEXT_BANNERS_OR_AT', ', tai');
define('TEXT_BANNERS_IMPRESSIONS', 'näyttökerralla.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Ajastettu näytettäväksi:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Mainokseen liittyvät huomautukset:</b><ul><li>Käytä HTML tekstiä tai kuvaa mainokseen, älä molempia.</li><li>HTML tekstillä on etusija kuvaan nähden</li><li>HTML teksti ei rekisteröi klikkauksia, ainoastaan näyttökerrat rekisteröidään</li><li>Kuva mainokset joissa käytetään täydellistä URL osoitetta ei tulisi näyttää SSL-suojatuilla sivuilla.</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Kuvaan liittyvät huomautukset:</b><ul><li>Kohdehakemistolla tulee olla tarvittava kirjoitus oikeus!</li><li>Älä täytä tallennus kohde kenttää jos et ole lataamassa kuvaa palvelimelle (eli aijot käyttää palvelimella jo olevaa kuvaa).</li><li>Kohde kansio tulee olla olemassa oleva kansio ja se tulee lopettaa kenoviivaan (esim, banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Vanhenemiseen liittyvät huomautukset:</b><ul><li>Vain yksi kenttä tulee täyttää</li><li>Jos et halua että mainokset vanhenevat automaattisesti, jätä kentät tyhjiksi</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Ajoitukseen liittyvät huomautukset:</b><ul><li>Kos ajoitus on määritelty, mainos aktivoituu kentän osoittamana päivänä.</li><li>Kaikki ajoitetut mainokset ovat passiivisessa tilassa kunnes ajastettu päivämäärä on saavutettu, jonka jälkeen ne merkataan aktiivisiksi.</li></ul>');
define('TEXT_BANNERS_STATUS', 'Mainoksen tila:');
define('TEXT_BANNERS_ACTIVE', 'Aktiivinen');
define('TEXT_BANNERS_NOT_ACTIVE', 'Passiivinen');
define('TEXT_INFO_BANNER_STATUS', '<strong>HUOM:</strong> Mainoksen tilaa päivitetään ajoituksen/näyttökertojen mukaan');
define('TEXT_BANNERS_OPEN_NEW_WINDOWS', 'Avaa mainos uuteen ikkunaan');
define('TEXT_INFO_BANNER_OPEN_NEW_WINDOWS', '<strong>>HUOM:</strong> Mainos avautuu uuteen ikkunaan');
define('TEXT_BANNERS_ON_SSL', 'Näytä mainos SSL-suojatussa tilassa');
define('TEXT_INFO_BANNER_ON_SSL', '<strong>HUOM:</strong> Mainos voidaan näyttää SSL-suojatussa tilassa ilman virheitä');

define('TEXT_BANNERS_DATE_ADDED', 'Lisäyspäivä:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Ajoitettu näytettäväksi: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Vanhenee: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Vanhenee: <b>%s</b> näyttökerralla');
define('TEXT_BANNERS_STATUS_CHANGE', 'Tilan muutos: %s');

define('TEXT_BANNERS_LAST_3_DAYS', 'Viimeiset 3 päivää');
define('TEXT_BANNERS_BANNER_VIEWS', 'Mainoksen näyttökerrat');
define('TEXT_BANNERS_BANNER_CLICKS', 'Mainoksen klikkaukset');

define('TEXT_INFO_DELETE_INTRO', 'Oletko varma että haluat poistaa tämän mainoksen?');
define('TEXT_INFO_DELETE_IMAGE', 'Poista mainoksen kuva');

define('SUCCESS_BANNER_INSERTED', 'Mainos on lisätty onnistuneesti.');
define('SUCCESS_BANNER_UPDATED', 'Mainos on päivitetty.');
define('SUCCESS_BANNER_REMOVED', 'Mainos on poistettu onnistuneesti.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Mainoksen tilaa on muutettu onnistuneesti.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Virhe: Mainoksen otsikko täytyy määrittää.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Virhe: Maiosryhmä täytyy määrittää.');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Virhe: Kuvaa ei olemassa.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Virhe: Kuvaa ei voida poistaa.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Virhe: Virheellinen tila.');
define('ERROR_BANNER_IMAGE_REQUIRED', 'Virhe: Mainoksen kuva tarvitaan.');

define('TEXT_LEGEND_BANNER_ON_SSL', 'Näytä SSL-tilassa');
define('TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS', 'Avaa uusi ikkuna');

// Tooltip Text for images in Banner Manager
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON','Mainos avaa uuden ikkunan');
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF','Mainos ei avaa uutta ikkunaa');
define('IMAGE_ICON_BANNER_ON_SSL_ON','Mainos näytetään SSL-suojatuilla sivuilla');
define('IMAGE_ICON_BANNER_ON_SSL_OFF','Mainosta ei näytetä SSL-suojatuilla sivuilla');

define('SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED', 'Onnistui: Mainoksen uuden ikkunan avaus tilaa on vaihdettu.');
define('SUCCESS_BANNER_ON_SSL_UPDATED', 'Onnistui: Mainoksen SSL-suojatussa tilassa näyttämistä on vaihdettu.');
?>