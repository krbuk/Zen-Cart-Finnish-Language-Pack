<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */
// Finnish translation Ver. 1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 
define('HEADING_TITLE', 'Asiakkaat');

define('TABLE_HEADING_ID', 'ID#');
define('TABLE_HEADING_FIRSTNAME', 'Etunimi');
define('TABLE_HEADING_LASTNAME', 'Sukunimi');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Tili luotu');
define('TABLE_HEADING_LOGIN', 'Viimeksi kirjautunut');
define('TABLE_HEADING_ACTION', 'Toiminta');
define('TABLE_HEADING_PRICING_GROUP', 'Hinnoitteluryhmä');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Valtuutettu');
define('TABLE_HEADING_GV_AMOUNT', 'Asiakastili');

define('TEXT_DATE_ACCOUNT_CREATED', 'Tunnus luotu:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Muokattu:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Kirjautunut sisään viimeksi:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Sisäänkirjautumiskertoja:');
define('TEXT_INFO_COUNTRY', 'Valtio:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Arvosteluja:');
define('TEXT_DELETE_INTRO', 'Oletko varma että haluat poistaa asiakkaan?');
define('TEXT_DELETE_REVIEWS', 'Poista asiakkaan %s arvostelut');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Poista asiakas');
define('TYPE_BELOW', 'Kirjoita alle');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'Tilauksien määrä:');
define('TEXT_INFO_LIFETIME_VALUE', 'Kaikki tilauksien määrä:');
define('TEXT_INFO_LAST_ORDER','Viimeksi tilannut:');
define('TEXT_INFO_ORDERS_TOTAL', 'Yhteensä:');
define('CUSTOMERS_REFERRAL', 'Asiakkaan suositukset<br />ensimmäinen alennuskuponki');
define('TEXT_INFO_GV_AMOUNT', 'Asiakastili');

define('ENTRY_NONE', 'Ei yhtään');

define('TABLE_HEADING_COMPANY','Yritys');

define('TEXT_INFO_HEADING_RESET_CUSTOMER_PASSWORD', 'Asiakkaan salasana vaihto');
define('TEXT_PWDRESET_INTRO', 'Nollata salasanan tälle asiakkaalle, kirjoita uusi salasana ja vahvista se alla. Uuden salasanan on vastattava asiakkaille asetettuja salasana.');
define('TEXT_CUST_NEW_PASSWORD', 'Uusi salasana:');
define('TEXT_CUST_CONFIRM_PASSWORD', 'Vahvista salasana:');
define('ERROR_PWD_TOO_SHORT', 'Virhe: Salasana on lyhyempi kuin tässä tallennuksessa määritettyjen merkkien määrä.');
define('SUCCESS_PASSWORD_UPDATED', 'Salasana päivitetty.');

define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE', 'Salasanasi on muuttanut tallentaa järjestelmänvalvoja. Uusi salasana on: ');
define('EMAIL_CUSTOMER_PWD_CHANGE_SUBJECT', 'Asiakkaan salasana vaihto');
define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE_FOR_ADMIN', 'Olet vaihtanut asiakkaan salasanan: ' . "\n" . '%s' . "\n\n" . 'Järjestelmänvalvoja ID: %s');

define('CUSTOMERS_AUTHORIZATION', 'Asiakkaan tunnuksen hyväksymisen tila');
define('CUSTOMERS_AUTHORIZATION_0', 'Hyväksytty');
define('CUSTOMERS_AUTHORIZATION_1', 'Odottaa - Ei voi selata sivuja');
define('CUSTOMERS_AUTHORIZATION_2', 'Odottaa - Voi selata sivuja, mutta ei näe hintoja');
define('CUSTOMERS_AUTHORIZATION_3', 'Odottaa - Voi selata sivuja ja näkee hinnat, mutta ei voi ostaa mitään');
define('CUSTOMERS_AUTHORIZATION_4', 'Estetty - Ei voi kirjautua sisään tai ostaa.');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Varoitus: Kauppasi vaatii asiakkaan hyväksymistä ennenkuin asiakas voi selata sivuja. Asiakas on asetettu tilaan: Odottaa hyväskymistä - Ei voi selata sivuja');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Varoitus: Kauppasi vaatii asiakkaan hyväksymistä ennenkuin asiakas voi nähdä tuotteiden hinnat. Asiakas on asetettu tilaan: Odottaa hyväskymistä - Voi selata sivuja, mutta ei näe hintoja');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Asiakastunnuksesi tila on päivitetty. Kiitos asioinnista kanssamme. ');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Asiakastunnuksen tila on päivitetty');

define('ADDRESS_BOOK_TITLE', 'Osoitekirjan sisältö');
define('PRIMARY_ADDRESS', '(ensisijainen osoite)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>HUOM:</strong></span> Osoitekirjassa voi olla enintään %s osoitetta.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | <a href="%s">%s </a>');
define('TEXT_INFO_ADDRESS_BOOK_COUNT_SINGLE', '');

define('EMP_BUTTON_PLACEORDER_ALT', 'Tee tilaus tälle asiakkaalle');
define('EMP_BUTTON_PLACEORDER', 'Tee tilaus');
