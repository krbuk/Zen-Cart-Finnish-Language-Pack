<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 28 Modified in v1.5.7 $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation Ver. 1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 
define('HEADING_TITLE', 'Tilaukset');
define('HEADING_TITLE_DETAILS', 'Tilauksen tiedot (#%u)');     //-%u is filled in with the actual order-number
define('HEADING_TITLE_SEARCH', 'Tilausnumero:');
define('HEADING_TITLE_STATUS', 'Tila:');
define('HEADING_TITLE_SEARCH_DETAIL_ORDERS_PRODUCTS', 'Etsi tuotteen nimellä tai tuotekoodilla');
define('HEADING_TITLE_SEARCH_ALL','Haku: ');
define('HEADING_TITLE_SEARCH_PRODUCTS','Tuotehaku: ');
define('TEXT_RESET_FILTER', 'Poista hakusuodatin');
define('TABLE_HEADING_PAYMENT_METHOD', 'Maksutapa<br>Toimitustapa');
define('TABLE_HEADING_ORDERS_ID','Numero');

define('TEXT_BILLING_SHIPPING_MISMATCH','Laskutus ja toimitusosoite ovat eri ');

define('TABLE_HEADING_COMMENTS', 'Kommentit');
define('TABLE_HEADING_CUSTOMERS', 'Asiakkaat');
define('TABLE_HEADING_ORDER_TOTAL', 'Tilaus yhteensä');
define('TABLE_HEADING_DATE_PURCHASED', 'Tilauspäivä');
define('TABLE_HEADING_STATUS', 'Tila');
define('TABLE_HEADING_TYPE', 'Tilauksen tyyppi');
define('TABLE_HEADING_ACTION', 'Toiminto');
define('TABLE_HEADING_QUANTITY', 'Määrä');
define('TABLE_HEADING_PRODUCTS', 'Tuotteet');
define('TABLE_HEADING_TAX', 'Vero');
define('TABLE_HEADING_TOTAL', 'Yhteensä');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Hinta (netto)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Hinta (brutto)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Yhteensä (netto)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Yhteensä (brutto)');
define('TABLE_HEADING_PRICE', 'Hinta');
define('TABLE_HEADING_UPDATED_BY', 'Päivitetty');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Ilmoitettu asiakkaalle');
define('TABLE_HEADING_DATE_ADDED', 'Lisätty');

define('ENTRY_CUSTOMER', 'Asiakas:');
define('ENTRY_CUSTOMER_ADDRESS', 'Asiakkaan osoite:<br><i class="fa fa-2x fa-user"></i>');
define('ENTRY_SOLD_TO', 'TILAAJA:');
define('ENTRY_SHIP_TO', 'TOIMITUS:');
define('ENTRY_SHIPPING_ADDRESS', 'Toimitusosoite:<br><i class="fa fa-2x fa-truck"></i>');
define('ENTRY_BILLING_ADDRESS', 'Laskutusosoite:<br><i class="fa fa-2x fa-credit-card"></i>');
define('ENTRY_PAYMENT_METHOD', 'Maksutapa:');
define('ENTRY_CREDIT_CARD_TYPE', 'Luottokortin tyyppi:');
define('ENTRY_CREDIT_CARD_OWNER', 'Luottokortin omistaja:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Luottokortin numero:');
define('ENTRY_CREDIT_CARD_CVV', 'Luottokortin CVV numero:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Luottokortti vanhenee:');
define('ENTRY_SHIPPING', 'Toimitus:');
define('ENTRY_DATE_PURCHASED', 'Tilauspäivä:');
define('ENTRY_STATUS', 'Tila:');
define('ENTRY_NOTIFY_CUSTOMER', 'Ilmoita asiakkaalle:');
define('ENTRY_NOTIFY_COMMENTS', 'Lisää kommentit:');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Poista tilaus');
define('TEXT_INFO_DELETE_INTRO', 'Oletko varma että haluat poistaa tämän tilauksen?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Palauta tuotteet varastosaldolle');
define('TEXT_DATE_ORDER_CREATED', 'Luotu:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Muokattu:');
define('TEXT_INFO_PAYMENT_METHOD', 'Maksutapa:');

define('TEXT_ALL_ORDERS', 'Kaikki tilaukset');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Tilauksen tilan muutos');
define('EMAIL_TEXT_ORDER_NUMBER', 'Tilausnumero:');
define('EMAIL_TEXT_INVOICE_URL', 'Laskun tarkemmat tiedot:');
define('EMAIL_TEXT_DATE_ORDERED', 'Tilauspäivä:');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<em>Tilaukseen liittyvät huomautukset: </em>');
define('EMAIL_TEXT_STATUS_UPDATED', 'Tilauksen tila on vaihtunut:' . "\n");
define('EMAIL_TEXT_STATUS_LABEL', '<strong>Uusi tila:</strong> %s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Ota yhteyttä kauppaamme mikäli sinulla on kysyttävää.' . "\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Virhe: Tilausta ei ole olemassa.');
define('SUCCESS_ORDER_UPDATED', 'Tilaus on päivitetty onnistuneesti.');
define('WARNING_ORDER_NOT_UPDATED', 'Varoitus: Ei muutettavaa. Tilausta ei päivitetty.');;

define('ENTRY_ORDER_ID','Tilausnumero. ');
define('TEXT_INFO_ATTRIBUTE_FREE', '&nbsp;-&nbsp;<span class="alert">ILMAINEN</span>');

define('TEXT_DOWNLOAD','Lataa'); 
define('TEXT_DOWNLOAD_TITLE', 'Tilauksen latauksen tila');
define('TEXT_DOWNLOAD_STATUS', 'Tila');
define('TEXT_DOWNLOAD_FILENAME', 'Tiedostonimi');
define('TEXT_DOWNLOAD_MAX_DAYS', 'Päivää');
define('TEXT_DOWNLOAD_MAX_COUNT', 'Latauskertoja');

define('TEXT_DOWNLOAD_AVAILABLE', 'Saatavilla');
define('TEXT_DOWNLOAD_EXPIRED', 'Vanhentunut');
define('TEXT_DOWNLOAD_MISSING', 'Ei palvelimella');

define('TEXT_EXTENSION_NOT_UNDERSTOOD', 'Tiedostotunniste ei tueta %s '); 
define('TEXT_FILE_NOT_FOUND', 'Tiedostoa ei löytynyt'); 
define('IMAGE_ICON_STATUS_CURRENT', 'Tila - Saatavilla');
define('IMAGE_ICON_STATUS_EXPIRED', 'Tila - Vanhentunut');
define('IMAGE_ICON_STATUS_MISSING', 'Tila - Puuttuu');

define('SUCCESS_ORDER_UPDATED_DOWNLOAD_ON', 'Lataus on otettu käyttöön');
define('SUCCESS_ORDER_UPDATED_DOWNLOAD_OFF', 'Lataus on poistettu käytöstä');
define('TEXT_MORE', '... lisää');

define('TEXT_INFO_IP_ADDRESS', 'IP Osoite: ');
define('TEXT_DELETE_CVV_FROM_DATABASE','Poista CVV tietokannasta');
define('TEXT_DELETE_CVV_REPLACEMENT','Poistettu');
define('TEXT_MASK_CC_NUMBER','Peitä tämä numero');

define('TEXT_INFO_EXPIRED_DATE', 'Vanhentumispäivä:<br>');
define('TEXT_INFO_EXPIRED_COUNT', 'Vanhentumismäärä:<br>');

define('TABLE_HEADING_CUSTOMER_COMMENTS', 'Asiakkaan<br />kommentit');
define('TEXT_COMMENTS_YES', 'Asiakkaan kommentit - KYLLÄ');
define('TEXT_COMMENTS_NO', 'Asiakkaan kommentit - EI');

define('TEXT_CUSTOMER_LOOKUP', '<i class="fa fa-search"></i> Hakuasiakas');

define('TEXT_INVALID_ORDER_STATUS', '<span class="alert">(Virheellinen tilauksen tila)</span>');

define('BUTTON_TO_LIST', 'Tilauslista');
define('SELECT_ORDER_LIST', 'Siirry tilaukseen:');

define('TEXT_MAP_CUSTOMER_ADDRESS', 'Kartta asiakkaan osoite');
define('TEXT_MAP_SHIPPING_ADDRESS', 'Kartta toimitus osoite');
define('TEXT_MAP_BILLING_ADDRESS', 'Kartta laskutus osoite');

define('TEXT_EMAIL_LANGUAGE', 'Tilaa kieli: %s');
define('SUCCESS_EMAIL_SENT', '%s asiakkaalle lähetetyt sähköpostit');
