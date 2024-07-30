<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2022 Jan 11 New in v1.5.8-alpha $
 * Finnish translation v2.0.0 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
*/

$define = [
    'HEADING_TITLE' => 'Kaupan hallinta',
    'SUCCESS_PRODUCT_UPDATE_SORT_ALL' => '<strong>Onnistunut</strong> ominaisuuksien lajittelujärjestystä on muutettu.',
    'SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER' => '<strong>Onnistunut</strong> päivittämään tuotteen hinnan lajittelujärjestelijän arvoja',
    'SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED' => '<strong>Onnistunut</strong> Tuotteiden näyttökerrat nollattu',
    'SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED' => '<strong>Onnistunut</strong> Tuotteiden tilausmäärät nollattu',
    'SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID' => '<strong>Onnistunut</strong> Kaikkien linkitettyjen tuotteiden pääkategorialla on asetettu oletukseen',
    'SUCCESS_UPDATE_COUNTER' => '<strong>Onnistunut</strong> Laskuri asetettu arvoon: ',
    'ERROR_CONFIGURATION_KEY_NOT_FOUND' => '<strong>Virhe:</strong> Vastaavia asetusarvoja ei löytynyt ...',
    'ERROR_CONFIGURATION_KEY_NOT_ENTERED' => '<strong>Virhe:</strong> Hakusanoja ei määritelty ... Haku keskeytetty',
    'TEXT_INFO_COUNTER_UPDATE' => '<strong>Päivitä laskuri</strong><br>uuteen arvoon: ',
    'TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE' => '<strong>Päivitä KAIKKI tuotteen hinnan lajittelujärjestelijät</strong><br>jotta voit lajitella näytettävän hinnan mukaan: ',
    'TEXT_INFO_PRODUCTS_VIEWED_UPDATE' => '<strong>Nollaa KAIKKIEN tuotteiden näyttökerrat</strong><br>Palauta katseltujen tuotteiden määrä nollaan: ',
    'TEXT_INFO_PRODUCTS_ORDERED_UPDATE' => '<strong>Nolla KAIKKIEN tuotteiden tilatut määrät</strong><br>Palauta Tuote tilattu määrä nollaan: ',
    'TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE' => '<strong>Palauta KAIKKIEN tuotteiden pääkategorian oletukseksi</strong><br>käytettäväksi linkitetyissä tuotteissa ja hinnoittelussa: ',
    'TEXT_NEW_ORDERS_ID' => 'Uusi tilaus ID',
    'TEXT_INFO_SET_NEXT_ORDER_NUMBER' => '<strong>Aseta seuraava tilausnumero</strong><br>HUOMAUTUS: Et voi asettaa tilausnumeroa pienemmäksi kuin mikä tahansa tietokannassa jo oleva tilaus.',
    'TEXT_MSG_NEXT_ORDER' => 'Seuraava tilausnumero on %s asetettu',
    'TEXT_MSG_NEXT_ORDER_MAX' => 'Nykyisten tilaustietojen vuoksi seuraava tilausnumero on tällä hetkellä: %s',
    'TEXT_MSG_NEXT_ORDER_TOO_LARGE' => 'Tietokannan rajoitusten takia et voi asettaa seuraavaa tilausnumeroa korkeammaksi kuin 2000000000. Valitse pienempi arvo.',
    'TEXT_INFO_DATABASE_OPTIMIZE' => '<strong>Optimoi tietokanta</strong> poistaaksesi turhaa tilaa poistetuista tietueista.<br>Voidaan valinnaisesti ajaa kuukausittain tai viikoittain kiireisessä tietokannassa.<br>(Suositellaan ajettavaksi hiljaisina aikoina.)',
    'TEXT_INFO_OPTIMIZING_DATABASE_TABLES' => 'Tietokantataulukon optimointi käynnissä. Tämä saattaa kestää muutaman minuutin. Odota. Edellinen valikko tulee uudelleen näkyviin, kun olet valmis ... ',
    'SUCCESS_DB_OPTIMIZE' => 'Tietokannan optimointi - Käsitellyt tietokannat: ',
    'TEXT_INFO_PURGE_DEBUG_LOG_FILES' => '<strong>Tyhjennä DEBUG lokitiedostot</strong><br><strong>VAROITUS: </strong>Zen Cart tallentaa PHP-virheilmoitukset virheenkorjaustarkoituksiin, ja monet maksumoduulit voidaan asettaa lokimaan virheenkorjaustiedot viestintäongelmien diagnosoimiseksi. <br>Tämän tyhjennysvaihtoehdon napsauttaminen *pysyvästi* poistaa *KAIKKI* PHP-virheisiin liittyvät virheenkorjauslokit ja maksumoduulit /logs/-kansiosta.',
    'SUCCESS_CLEAN_DEBUG_FILES' => 'Debug lokitiedostot poistettu!',
];

return $define;
