<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */
// Finnish translation Ver. 1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 
  define('HEADING_TITLE', 'Kaupan hallinta');
  define('TABLE_CONFIGURATION_TABLE', 'Etsi VAKIO määrityksiä');

  define('SUCCESS_PRODUCT_UPDATE_SORT_ALL', 'Ominaisuuksien lajittelujärjestystä on muutettu onnistuneesti');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>Onnistuttiin</strong> päivittämään tuotteen hinnan lajittelujärjestelijän arvoja');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', '<strong>Onnistui:</strong> Tuotteiden näyttökerrat nollattu');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', '<strong>Onnistui:</strong> Tuotteiden tilausmäärät nollattu');
  define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', '<strong>Onnistui:</strong> Kaikkien linkitettyjen tuotteiden pää-ryhmät on asetettu oletukseen');
  define('SUCCESS_UPDATE_COUNTER', '<strong>Onnistui:</strong> Laskuri asetettu arvoon: ');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Virhe:</strong> Vastaavia asetusarvoja ei löytynyt ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Virhe:</strong> Hakusanoja ei määritelty ... Haku keskeytetty');

  define('TEXT_INFO_COUNTER_UPDATE', '<strong>Päivitä laskuri</strong><br />uuteen arvoon: ');
  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Päivitä KAIKKI tuotteen hinnan lajittelujärjestelijät</strong><br />jotta voit lajitella näytettävän hinnan mukaan: ');
  define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>Nollaa KAIKKIEN tuotteiden näyttökerrat</strong>: ');
  define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>Nolla KAIKKIEN tuotteiden tilatut määrät</strong>: ');
  define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>Palauta KAIKKIEN tuotteiden pää-ryhmät oletukseksi</strong><br />(koskee linkitettyjä tuotteita): ');

  define('TEXT_NEW_ORDERS_ID', 'Uusi tilaus ID');
  define('TEXT_INFO_SET_NEXT_ORDER_NUMBER', '<strong>Aseta seuraava tilausnumero</strong><br />HUOMAUTUS: Et voi asettaa tilausnumeroa pienemmäksi kuin mikä tahansa tietokannassa jo oleva tilaus.');
  define('TEXT_MSG_NEXT_ORDER', 'Seuraava tilausnumero on %s asetettu ');
  define('TEXT_MSG_NEXT_ORDER_MAX', 'Nykyisten tilaustietojen vuoksi seuraava tilausnumero on tällä hetkellä: %s');
  define('TEXT_MSG_NEXT_ORDER_TOO_LARGE', 'Tietokannan rajoitusten takia et voi asettaa seuraavaa tilausnumeroa korkeammaksi kuin 2000000000. Valitse pienempi arvo.');

  define('TEXT_CONFIGURATION_CONSTANT_FILES', '<strong>Etsi kielitiedostoista</strong>');
  define('TEXT_CONFIGURATION_KEY_FILES', 'Etsi tekstiä:');
  define('TEXT_INFO_CONFIGURATION_UPDATE_FILES', '<strong>Huom:</strong> Kielitiedostohaku voi olla kirjoitettu isolla tai pienellä');

  define('TABLE_TITLE_KEY', '<strong>Avain:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Nimi:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Kuvaus:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Ryhmä:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Arvo:</strong>');

  define('TEXT_LANGUAGE_LOOKUPS', 'Kielitiedostoista haku:');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Kaikki kielitiedostot ' . strtoupper($_SESSION['language']) . ' - Kauppa/Ylläpito');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Kaikki pääkielitiedostot - Kauppa (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /finnish.php ym.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Kaikki nykyisen kielen tiedostot Kauppa - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Kaikki ylläpidon pääkielitiedostot - Ylläpito (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /finnish.php ym.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Kaikki nykyisen kielen tiedostot - Ylläpito (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Kaikki nykyisen kielen tiedostot - Kauppa/Ylläpito');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Muokkausta ei saatavilla');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' tai, PIILOTETTU');

  define('TEXT_INFO_DATABASE_OPTIMIZE', 'Optimoi tietokanta poistaaksesi turhat tiedot jotka vievät tilaa.<br />Voidaan vapaaehtoisesti ajaa kuukausittain tai viikoittain jos tietokanta kasvaa suureksi.<br />(Suositellaan ajettavaksi hiljaisina aikoina.)');
  define('TEXT_INFO_OPTIMIZING_DATABASE_TABLES', 'Tietokannan optimointi käynnissä. Tämä voi kestää muutamia minuutteja.');
  define('SUCCESS_DB_OPTIMIZE', 'Tietokannan optimointi - Käsitellyt tietokannat: ');

  define('TEXT_INFO_PURGE_DEBUG_LOG_FILES', '<strong>Tyhjennä DEBUG lokitiedostot</strong><br /><strong>VAROITUS: </strong>Zen Cart tallentaa PHP-virheilmoitukset virheenkorjausta varten, ja monet maksumoduulit voidaan asettaa kirjaamaan virheenkorjaustiedot diagnosoimaan viestintäongelmat. <br />Tämän tyhjennysvaihtoehdon napsauttaminen * poistaa * kaikki * PHP-virheisiin ja maksumoduuleihin liittyvät virheenkorjauslokit / logs / kansiosta.');
  define('SUCCESS_CLEAN_DEBUG_FILES', 'Debug lokitiedostot poistettu!');
