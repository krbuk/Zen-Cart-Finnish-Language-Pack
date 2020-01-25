<?php
/**
 * @package admin
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Drbyte Wed Aug 2 14:55:16 2017 -0400 Modified in v1.5.6 $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.6 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>

define('TOP_BAR_TITLE', 'Tilastot');
define('HEADING_TITLE', 'Alennuskupongit');
define('HEADING_TITLE_STATUS', 'Tila: ');
define('TEXT_CUSTOMER', 'Asiakas:');
define('TEXT_COUPON', 'Kupongin nimi:');
define('TEXT_COUPON_ALL', 'Kaikki kupongit');
define('TEXT_COUPON_ACTIVE', 'Aktiiviset kupongit');
define('TEXT_COUPON_INACTIVE', 'Passiiviset kupongit');
define('TEXT_SUBJECT', 'Otsikko:');
define('TEXT_UNLIMITED', 'Rajoittamaton');
define('TEXT_FROM', 'Lähettäjä:');
define('TEXT_FREE_SHIPPING', 'Ilmainen toimitus');
define('TEXT_MESSAGE', 'Viesti:');
define('TEXT_RICH_TEXT_MESSAGE','Muotoilun sisältävä viesti:');
define('TEXT_SELECT_CUSTOMER', 'Valitse asiakas');
define('TEXT_ALL_CUSTOMERS', 'Kaikki asiakkaat');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Kaikille uutiskirjeen tilaajille');
define('TEXT_CONFIRM_DELETE', 'Oletko varma että haluat poistaa tämän kupongin?');
define('TEXT_SEE_RESTRICT', 'Sisältää rajoituksia');

define('TEXT_COUPON_ANNOUNCE','Annamme sinulle alennuskuponki kauppaamme, olkaa hyvä!');

define('TEXT_TO_REDEEM', 'Voit lunastaa alennuskupongin kassalla. Kirjoittakaa koodi sille varattuun kenttään ja painakaa "lunasta" painiketta.');
define('TEXT_IN_CASE', ' jos ongelmia ilmaantuu. ');
define('TEXT_VOUCHER_IS', 'Kupongin koodi on ');
define('TEXT_REMEMBER', 'Älä hävitä kupongin koodia, pidä koodi tallessa jotta voit hyötyä tästä tarjouksesta.');
define('TEXT_VISIT', 'Vieraille kaupassamme osoitteessa %s');
define('TEXT_ENTER_CODE', ' ja ilmoita koodi ');
define('TEXT_COUPON_HELP_DATE', '<p><p>Kuponki on voimassa %s - %s</p></p>');
define('HTML_COUPON_HELP_DATE', '<p><p>Kuponki on voimassa %s - %s</p></p>');

define('TABLE_HEADING_ACTION', 'Toiminto');

define('CUSTOMER_ID', 'Asiakkaan ID');
define('CUSTOMER_NAME', 'Asiakkaan nimi');
define('REDEEM_DATE', 'Lunastuspäivä');
define('IP_ADDRESS', 'IP Osoite');

define('TEXT_REDEMPTIONS', 'Lunastuksia');
define('TEXT_REDEMPTIONS_TOTAL', 'Yhteensä');
define('TEXT_REDEMPTIONS_CUSTOMER', 'Tälle asiakkaalle');
define('TEXT_NO_FREE_SHIPPING', 'Ei ilmaista toimitusta');

define('NOTICE_EMAIL_SENT_TO', 'Huom: Sähköposti lähetetty osoitteeseen: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Virhe: Asiakasta ei ole valittu.');
define('ERROR_NO_SUBJECT', 'Virhe: Aihetta ei ole valittu.');

define('COUPON_NAME', 'Kupongin nimi');
//define('COUPON_VALUE', 'Kupongin arvo');
define('COUPON_AMOUNT', 'Kupongin arvo');

define('TEXT_COUPON_PRODUCT_COUNT_PER_ORDER', 'Per tilaus');
define('TEXT_COUPON_PRODUCT_COUNT_PER_PRODUCT', 'Per tuotetta kohti');
define('COUPON_CODE', 'Kupongin koodi');
define('COUPON_STARTDATE', 'Voimassa alkaen');
define('COUPON_FINISHDATE', 'Vanhenee');
define('COUPON_RESTRICTIONS', 'Rajoituksia');
define('COUPON_FREE_SHIP', 'Ilmainen toimitus');
define('COUPON_DESC', 'Kupongin kuvaus <br />(Näytetään asiakkaalle)');
define('COUPON_MIN_ORDER', 'Tilausmäärä vähintään');

define('COUPON_TOTAL', 'Kuponki minimi lasketaan: ');
define('TEXT_COUPON_TOTAL_PRODUCTS', 'Sallitut tuotteet');
define('TEXT_COUPON_TOTAL_PRODUCTS_BASED', '<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Perustuu sallittujen tuotteiden yhteenlaskettuun kupongin rajoitusten sääntöihin)');
define('TEXT_COUPON_TOTAL_ORDER', 'Kaikki tuotteet');
define('TEXT_COUPON_TOTAL_ORDER_BASED', '<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Perustuu kaikkien tuotteiden kokonaisjärjestykseen, riippumatta kelpoisuuskupongin rajoituksista)');

define('COUPON_USES_COUPON', 'Käyttökerrat kupongille');
define('COUPON_USES_USER', 'Käyttöä per asiakas');
define('COUPON_PRODUCTS', 'Tuotteet joihin kuponkia voi käyttää');
define('COUPON_CATEGORIES', 'Ryhmät joihin kuponkia voi käyttää');
define('VOUCHER_NUMBER_USED', 'Käyttökerrat');
define('DATE_CREATED', 'Luontipäivä');
define('DATE_MODIFIED', 'Muokkauspäivä');
define('TEXT_HEADING_NEW_COUPON', 'Luo uusi kuponki');
define('TEXT_NEW_INTRO', 'Täytä uutta kuponkia koskevat tiedot.<br />');
define('COUPON_ZONE_RESTRICTION', 'Kupongin aluerajoitus: ');
define('TEXT_COUPON_ZONE_RESTRICTION', 'Kupongin aluerajoitus ei ole pakollinen.');
define('COUPON_ORDER_LIMIT', 'Asiakas edellinen tilaukset alle: ');
define('COUPON_ORDER_LIMIT_HELP', 'Asiakkaalla on oltava aikaisemmat tilaukset alle, jätä tyhjäksi rajoittamattomaksi');

define('COUPON_IS_VALID_FOR_SALES', 'Kuponki on voimassa myyntiin:');
define('TEXT_COUPON_IS_VALID_FOR_SALES', 'Kuponki sallitaan myytävien tuotteiden');
define('TEXT_COUPON_IS_VALID_FOR_SALES_EMAIL', 'Kuponki on voimassa myytäville tuotteille');
define('TEXT_NO_COUPON_IS_VALID_FOR_SALES', 'Kuponki EI sallittu myytäville tuotteille');
define('TEXT_NO_COUPON_IS_VALID_FOR_SALES_EMAIL', 'Kuponki ei kelpaa myynnissä oleville tuotteille');


define('ERROR_NO_COUPON_AMOUNT', 'Kupongille ei ole annettu arvoa');
define('ERROR_NO_COUPON_NAME', 'Kupongille ei ole annettu nimeä ');
define('ERROR_COUPON_EXISTS', 'Annettu koodi on jo käytössä');


define('COUPON_NAME_HELP', 'Lyhyt nimi kupongille');
define('COUPON_AMOUNT_HELP', 'Kupongin alennuksen määrä (arvo). Voidaan ilmoittaa joko summana rahassa (esim: 25) tai alennusprosenttina (esim: 25%).');
define('COUPON_CODE_HELP', 'Voit syöttää oman koodin tähän, tai jättää kentän tyhjäksi jolloin koodi luodaan automaattisesti.');
define('COUPON_STARTDATE_HELP', 'Päivämäärä josta alkaen kuponki on voimassa');
define('COUPON_FINISHDATE_HELP', 'Päivämäärä jolloin kuponki vanhenee');
define('COUPON_FREE_SHIP_HELP', 'Kuponki oikeuttaa ilmaiseen kuljetukseen. Huom. Tämä korvaa kupongin arvon mutta kunnioittaa minimi tilausmäärää');
define('COUPON_DESC_HELP', 'Kupongin kuvaus jonka asiakas näkee');
define('COUPON_MIN_ORDER_HELP', 'Tilauksen arvon on oltava vähintään tähän kenttään syötetty summa ennenkuin kuponkia voidaan käyttää');
define('COUPON_TOTAL_HELP', 'Jos määrittelet tämän alennuskuponin kupongin vähimmäistilauksen, haluatko, että vähimmäismäärä perustuu sallittuihin tuotteisiin kupongin rajoitussääntöjen tai täyden tilauksen kokonaismäärän mukaisesti, kun määrität, onko kupongin vähimmäistilaus täytetty?<br />HUOMAUTUS: Täydellinen tilauksen kokonaismäärä tarkoittaa, että vähintään 1 kelpuutetuista rajoitetuista tuotteista on oltava korissa, jossa alennuskuponki toimii.');
define('COUPON_USES_COUPON_HELP', 'Määrä kuinka monta kertaa kuponkia voidaan käyttää yhteensä.');
define('COUPON_USES_USER_HELP', 'Määrä kuinka monta kertaa sama asiakas voi käyttää kuponkia. Jos kenttä on tyhjä, ei käyttökertoja rajoiteta');
define('COUPON_PRODUCTS_HELP', 'Lista tuotteiden numeroista joihin tätä kuponkia voi käyttää, eroteltuna pilkulla.');
define('COUPON_CATEGORIES_HELP', 'Lista tuoteryhmistä joihin kuponkia voi käyttää, eroteltuna pilkulla. ');
define('COUPON_BUTTON_PREVIEW', 'Esikatsele');
define('COUPON_BUTTON_CONFIRM', 'Hyväksy');
define('COUPON_BUTTON_BACK', 'Takaisin');

define('COUPON_ACTIVE', 'Tila');
define('COUPON_START_DATE', 'Voimassa alkaen');
define('COUPON_EXPIRE_DATE', 'Vanhenee');

define('TEXT_INFO_DUPLICATE_MANAGEMENT', '<strong>Useiden alennuskupongien hallinta</strong><br /><br />Voit aloittaa muutokset napsauttamalla alennuskuponkia<br />tai käytä valittua peruskuponkikoodia: <strong>%s</strong>');
define('ERROR_DISCOUNT_COUPON_WELCOME', 'Kuponkia ei voida poistaa käytöstä. Tämä kuponki on uuden asiakkaan tervetuliaisalennuskuponki<br /><br />Vaihda tervetuliaisalennuskuponkia ennen poistamista. Katso Ylläpito->Asetukset->GV Coupons');
define('SUCCESS_COUPON_DISABLED', 'Kuponki on poistettu käytöstä onnistuneesti ...');
define('TEXT_COUPON_NEW', 'käytä UUTTA alennuskupongin koodia:');
define('ERROR_DISCOUNT_COUPON_DUPLICATE', 'VAROITUS! Kuponki on jo olemassa ... Kuponkia ei luotu koodilla: ');
define('TEXT_CONFIRM_COPY', 'Oletko varma että haluat kopioida tämän alennuskupongin toiseen alennuskuponkiin?');
define('SUCCESS_COUPON_DUPLICATE', 'Alennuskuponki on monistettu onnistuneesti ...<br /><br />Varmista kupongin nimi ja päivämäärät ...');
define('WARNING_COUPON_DUPLICATE', 'Varoitus! Alennuskuponkeja ei tehty! luodun alennuskuponkien määrää ei määritetty ... ');

define('TEXT_COUPON_COPY_INFO', 'Kopioi useita kaksoiskappaleita');
define('TEXT_COUPON_COPY_DUPLICATE', 'Luo useita kuponkeja peruskuponkikoodilla: ');
define('TEXT_COUPON_COPY_DUPLICATE_CNT', 'Kuinka monta päällekkäistä alennuskuponkia haluat luoda? ');

define('TEXT_CONFIRM_DELETE_DUPLICATE', 'Poista kaikki löydetyt alennuskupongit perustuu Base kuponkikoodi<br />Esimerkki: <strong>%s</strong> poistaa kaikki alennuskuponkikoodit alkaen: <strong>%s</strong>');
define('TEXT_COUPON_DELETE_DUPLICATE', 'Poista kaikki alennuskuponkeja vastaava peruskoodi: ');

define('TEXT_DISCOUNT_COUPON_EMAIL', 'Sähköpostin alennuskuponki');
define('TEXT_DISCOUNT_COUPON_CONFIRM_DELETE', 'Vahvista alennuskuponki');
define('TEXT_DISCOUNT_COUPON_CONFIRM_RESTORE', 'Vahvista palautuskuponki');

define('TEXT_DISCOUNT_COUPON_EDIT', 'Muokkaa alennuskuponkia');
define('TEXT_DISCOUNT_COUPON_DELETE', 'Poista alennuskuponki');
define('TEXT_DISCOUNT_COUPON_RESTORE', 'Palauta alennuskuponki');
define('TEXT_DISCOUNT_COUPON_RESTRICT', 'Rajoita alennuskuponkia');
define('TEXT_DISCOUNT_COUPON_REPORT', 'Alennuskupongin raportti');
define('TEXT_DISCOUNT_COUPON_COPY', 'Kopioi alennuskuponki');
define('TEXT_DISCOUNT_COUPON_COPY_MULTIPLE', 'Kopioi useita alennuskuponkeja');
define('TEXT_DISCOUNT_COUPON_DELETE_MULTIPLE', 'Poista useita alennuskuponkeja');
define('TEXT_DISCOUNT_COUPON_REPORT_MULTIPLE', 'Useiden alennuskupongien raportti');
define('TEXT_DISCOUNT_COUPON_DOWNLOAD', 'Lataa useita kuponkikoodeja');
define('REDEEM_ORDER_ID', 'Tilaus #');
define('SUCCESS_COUPON_REACTIVATE', 'Onnistunut uudelleenaktivointi');
define('TEXT_CONFIRM_REACTIVATE', 'Haluatko varmasti palauttaa tämän kupongin?<br />HUOMAUTUS: Palauta ei vaikuta aloitus- / vanhentumispäiviin.<br />Palautus ei vaikuta käyttörajoituksia kuponkia / käyttöä kohti asiakkaalle, jos se on jo lunastettu.');

define('SUCCESS_COUPON_FOUND', 'Alennuskuponki löytyi!');
define('ERROR_COUPON_NOT_FOUND', 'Alennuskuponkia ei löytynyt!');
define('ERROR_NO_COUPON_CODE', 'Alennuskuponkikuponkikoodia ei ole syötetty!');