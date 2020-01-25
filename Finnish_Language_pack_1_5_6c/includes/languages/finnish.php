<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2019 May 26 Modified in v1.5.6b $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.6b by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 

// FOLLOWING WERE moved to meta_tags.php
//define('TITLE', 'Zen Cart!');
//define('SITE_TAGLINE', 'The Art of E-commerce');
//define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, online shopping');
// END: moved to meta_tags.php

  define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');

// look in your $PATH_LOCALE/locale directory for available locales..
  $locales = array('fi_FI', 'fi_FI.utf8', 'fi');
  @setlocale(LC_TIME, $locales);
  define('DATE_FORMAT_SHORT', '%d.%m.%Y');  // this is used for strftime()
  define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
  define('DATE_FORMAT', 'd.m.Y'); // this is used for date()
  define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
  if (!function_exists('zen_date_raw')) {
    function zen_date_raw($date, $reverse = false) {
      if ($reverse) {
        return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
      } else {
        return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
      }
    }
  }

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
  define('LANGUAGE_CURRENCY', 'EUR');

// Global entries for the <html> tag
  define('HTML_PARAMS','dir="ltr" lang="fi"');

// charset for web pages and emails
  define('CHARSET', 'utf-8');

// footer text in includes/footer.php
  define('FOOTER_TEXT_REQUESTS_SINCE', 'latausta sitten');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Lahjakortti');
  define('TEXT_GV_NAMES','Lahjakortit');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','Lunastuskoodi');

// used for redeem code sidebox
  define('BOX_HEADING_GV_REDEEM', TEXT_GV_NAME);
  define('BOX_GV_REDEEM_INFO', 'Lunastuskoodi: ');

// text for gender
  define('MALE', 'Mies');
  define('FEMALE', 'Nainen');
  define('MALE_ADDRESS', 'Herra ');
  define('FEMALE_ADDRESS', 'Rouva ');

// text for date of birth example
  define('DOB_FORMAT_STRING', 'pp.kk.vvvv');

//text for sidebox heading links
  define('BOX_HEADING_LINKS', '...');

// categories box text in sideboxes/categories.php
  define('BOX_HEADING_CATEGORIES', 'Ryhmät');

// manufacturers box text in sideboxes/manufacturers.php
  define('BOX_HEADING_MANUFACTURERS', 'Valmistajat');

// whats_new box text in sideboxes/whats_new.php
  define('BOX_HEADING_WHATS_NEW', 'Uutuudet');
  define('CATEGORIES_BOX_HEADING_WHATS_NEW', 'Uutuudet ...');

  define('BOX_HEADING_FEATURED_PRODUCTS', 'Esittelyssä');
  define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', 'Esittelyssä olevat tuotteet ...');
  define('TEXT_NO_FEATURED_PRODUCTS', 'Lisää tuotteita lisätään esiteltäväksi myöhemmin.');

  define('TEXT_NO_ALL_PRODUCTS', 'Lisää tuotteita lisätään esiteltäväksi myöhemmin.');
  define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'Kaikki tuotteet ...');

// quick_find box text in sideboxes/quick_find.php
  define('BOX_HEADING_SEARCH', 'Etsi');
  define('BOX_SEARCH_ADVANCED_SEARCH', 'Tarkennettu haku');

// specials box text in sideboxes/specials.php
  define('BOX_HEADING_SPECIALS', 'Tarjoukset');
  define('CATEGORIES_BOX_HEADING_SPECIALS','Tarjoukset ...');

// reviews box text in sideboxes/reviews.php
  define('BOX_HEADING_REVIEWS', 'Mitä mieltä tuotteista?');
  define('BOX_REVIEWS_WRITE_REVIEW', 'Kerro meille mitä mieltä olet tästä tuotteesta.');
  define('BOX_REVIEWS_NO_REVIEWS', 'Kommentteja ei saatavilla.');
  define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s / 5 tähteä!');

// shopping_cart box text in sideboxes/shopping_cart.php
  define('BOX_HEADING_SHOPPING_CART', 'Ostoskori');
  define('BOX_SHOPPING_CART_EMPTY', ' on tyhjä');
  define('BOX_SHOPPING_CART_DIVIDER', ' x &nbsp;');

// order_history box text in sideboxes/order_history.php
  define('BOX_HEADING_CUSTOMER_ORDERS', 'Nopea uudelleen tilaus');

// best_sellers box text in sideboxes/best_sellers.php
  define('BOX_HEADING_BESTSELLERS', 'Myydyimmät');
  define('BOX_HEADING_BESTSELLERS_IN', 'Myydyimmät Ryhmässä<br />&nbsp;&nbsp;');

// notifications box text in sideboxes/products_notifications.php
  define('BOX_HEADING_NOTIFICATIONS', 'Tuoteseuranta');
  define('BOX_NOTIFICATIONS_NOTIFY', 'Ilmoita minulle tuotteen <strong>%s</strong> muutoksista');
  define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Älä ilmoita minulle tuotteen <strong>%s</strong> muutoksista');

// manufacturer box text
  define('BOX_HEADING_MANUFACTURER_INFO', 'Valmistajan tiedot');
  define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s kotisivu');
  define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Muut tuotteet');

// languages box text in sideboxes/languages.php
  define('BOX_HEADING_LANGUAGES', 'Kielet');

// currencies box text in sideboxes/currencies.php
  define('BOX_HEADING_CURRENCIES', 'Valuutat');

// information box text in sideboxes/information.php
  define('BOX_HEADING_INFORMATION', 'Tietoja');
  define('BOX_INFORMATION_PRIVACY', 'Yksityisyyssuoja');
  define('BOX_INFORMATION_CONDITIONS', 'Käyttöehdot');
  define('BOX_INFORMATION_SHIPPING', 'Toimitusehdot');
  define('BOX_INFORMATION_CONTACT', 'Yhteystiedot');
  define('BOX_INFORMATION_UNSUBSCRIBE', 'Peru uutiskirjeen tilaus');

  define('BOX_INFORMATION_SITE_MAP', 'Sivukartta');

// information box text in sideboxes/more_information.php - were TUTORIAL_
  define('BOX_HEADING_MORE_INFORMATION', 'Lisätietoja');
  define('BOX_INFORMATION_PAGE_2', 'Sivu 2');
  define('BOX_INFORMATION_PAGE_3', 'Sivu 3');
  define('BOX_INFORMATION_PAGE_4', 'Sivu 4');

//New billing address text
  define('SET_AS_PRIMARY' , 'Aseta oletusosoitteeksi');
  define('NEW_ADDRESS_TITLE', 'Laskutusosoite');

// javascript messages
  define('JS_ERROR', 'Lomakettasi käsiteltäessä tapahtui virhe.\n\nTee seuraavat korjaukset:\n\n');

  define('JS_REVIEW_TEXT', 'Kommentin tulee olla vähintään ' . REVIEW_TEXT_MIN_LENGTH . ' merkkiä pitkä');
  define('JS_REVIEW_RATING', 'Sinun on annettava pisteet tuotteelle');

  define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Valitse maksutapa.');

  define('JS_ERROR_SUBMITTED', 'Tämä lomake on jo lähetetty. Paina OK ja odota että sen käsittely loppuu..');

  define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Valitse maksutapa.');
  define('ERROR_CONDITIONS_NOT_ACCEPTED', 'Hyväksy tilauksen ehdot laittamalla rasti alla olevaan ruutuun.');
  define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', 'Hyväksy yksityisyyssuoja tiedot valitsemalla alla oleva laatikko.');

  define('CATEGORY_COMPANY', 'Yrityksen tiedot');
  define('CATEGORY_PERSONAL', 'Henkilökohtaiset tietosi');
  define('CATEGORY_ADDRESS', 'Osoitteesi');
  define('CATEGORY_CONTACT', 'Yhteystietosi');
  define('CATEGORY_OPTIONS', 'Valinnat');
  define('CATEGORY_PASSWORD', 'Salasanasi');
  define('CATEGORY_LOGIN', 'Kirjaudu');
  define('PULL_DOWN_DEFAULT', 'Valitse');
  define('PLEASE_SELECT', 'Valitse ...');
  define('TYPE_BELOW', 'Kirjoita valintasi alle ...');

  define('ENTRY_COMPANY', 'Yrityksen nimi:');
  define('ENTRY_COMPANY_ERROR', 'Kirjoita yrityksen nimi');
  define('ENTRY_COMPANY_TEXT', '');
  define('ENTRY_GENDER', 'Sukupuoli:');
  define('ENTRY_GENDER_ERROR', 'Valitse sukupuoli.');
  define('ENTRY_GENDER_TEXT', '*');
  define('ENTRY_FIRST_NAME', 'Etunimi:');
  define('ENTRY_FIRST_NAME_ERROR', 'Etunimesi tulee olla vähintään ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' merkkiä.');
  define('ENTRY_FIRST_NAME_TEXT', '*');
  define('ENTRY_LAST_NAME', 'Sukunimi:');
  define('ENTRY_LAST_NAME_ERROR', 'Sukunimesi tulee olla vähintään ' . ENTRY_LAST_NAME_MIN_LENGTH . ' merkkiä.');
  define('ENTRY_LAST_NAME_TEXT', '*');
  define('ENTRY_DATE_OF_BIRTH', 'Syntymäaika:');
  define('ENTRY_DATE_OF_BIRTH_ERROR', 'Syntymäaikasi tulee olla muodossa: PP.KK.VVVV (esim. 30.01.1972)');
  define('ENTRY_DATE_OF_BIRTH_TEXT', '* (esim. 30.01.1972)');
  define('ENTRY_EMAIL_ADDRESS', 'Sähköpostiosoite:');
  define('ENTRY_EMAIL_ADDRESS_ERROR', 'Sähköpostiosoitteesi tulee olla vähintään ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' merkkiä.');
  define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Sähköposti osoitteesi on virheellinen. Ole hyvä ja tee tarpeeliset korjaukset.');
  define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Sähköpostiosoitteesi on jo rekisteröity. Ole hyvä ja kirjaudu sisään tai luo uusi tunnus eri osoitteella.');
  define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
  define('ENTRY_NICK', 'Foorumin käyttäjänimi:');
  define('ENTRY_NICK_TEXT', '*'); // note to display beside nickname input field
  define('ENTRY_NICK_DUPLICATE_ERROR', 'Käyttäjänimi jonka annoit on jo käytössä. Yritä uudelleen.');
  define('ENTRY_NICK_LENGTH_ERROR', 'Yritä uudelleen. Käyttäjänimesi tulee sisältää vähintään ' . ENTRY_NICK_MIN_LENGTH . ' merkkiä.');
  define('ENTRY_STREET_ADDRESS', 'Lähiosoite:');
  define('ENTRY_STREET_ADDRESS_ERROR', 'Lähiosoitteesi tulee olla vähintään ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' merkkiä.');
  define('ENTRY_STREET_ADDRESS_TEXT', '*');
  define('ENTRY_SUBURB', 'Lähiosoiteen lisärivi:');
  define('ENTRY_SUBURB_ERROR', '');
  define('ENTRY_SUBURB_TEXT', '');
  define('ENTRY_POST_CODE', 'Postinumero:');
  define('ENTRY_POST_CODE_ERROR', 'Postinumerosi tulee olla vähintään ' . ENTRY_POSTCODE_MIN_LENGTH . ' merkkiä.');
  define('ENTRY_POST_CODE_TEXT', '*');
  define('ENTRY_CITY', 'Kaupunki tai seura :');
  define('ENTRY_CUSTOMERS_REFERRAL', 'Suosituskoodi:');

  define('ENTRY_CITY_ERROR', 'Paikkakunnan nimen tulee olla vähintään ' . ENTRY_CITY_MIN_LENGTH . ' merkkiä.');
  define('ENTRY_CITY_TEXT', '*');
  define('ENTRY_STATE', 'Lääni:');
  define('ENTRY_STATE_ERROR', 'Alueen nimen tulee olla vähintään ' . ENTRY_STATE_MIN_LENGTH . ' merkkiä.');
  define('ENTRY_STATE_ERROR_SELECT', 'Ole hyvä ja valitse alue \'Alue\' valikosta.');
  define('ENTRY_STATE_TEXT', '*');
  define('JS_STATE_SELECT', '-- Valitse --');
  define('ENTRY_COUNTRY', 'Valtio:');
  define('ENTRY_COUNTRY_ERROR', 'Sinun on valittava valtio \'Valtiot\' valikosta.');
  define('ENTRY_COUNTRY_TEXT', '*');
  define('ENTRY_TELEPHONE_NUMBER', 'Puhelinnumero:');
  define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Puhelinnumerosi tulee olla vähintään ' . ENTRY_TELEPHONE_MIN_LENGTH . ' merkkiä.');
  define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
  define('ENTRY_FAX_NUMBER', 'Faksinumero:');
  define('ENTRY_FAX_NUMBER_ERROR', '');
  define('ENTRY_FAX_NUMBER_TEXT', '');
  define('ENTRY_NEWSLETTER', 'Tilaan uutiskirjeen:');
  define('ENTRY_NEWSLETTER_TEXT', '');
  define('ENTRY_NEWSLETTER_YES', 'Tilattu');
  define('ENTRY_NEWSLETTER_NO', 'Ei tilattu');
  define('ENTRY_NEWSLETTER_ERROR', '');
  define('ENTRY_PASSWORD', 'Salasana:');
  define('ENTRY_PASSWORD_ERROR', 'Salasanasi tulee olla vähintään ' . ENTRY_PASSWORD_MIN_LENGTH . ' merkkiä.');
  define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Salasanan vahvistuksen tulee täsmätä salsanasi kanssa.');
  define('ENTRY_PASSWORD_TEXT', '* (vähintään ' . ENTRY_PASSWORD_MIN_LENGTH . ' merkkiä)');
  define('ENTRY_PASSWORD_CONFIRMATION', 'Vahvista salasana:');
  define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT', 'Nykyinen salasana:');
  define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT_ERROR', 'Salsanasi tulee olla vähintään ' . ENTRY_PASSWORD_MIN_LENGTH . ' merkkiä.');
  define('ENTRY_PASSWORD_NEW', 'Uusi salasana:');
  define('ENTRY_PASSWORD_NEW_TEXT', '*');
  define('ENTRY_PASSWORD_NEW_ERROR', 'Uuden salsanan tulee olla vähintään ' . ENTRY_PASSWORD_MIN_LENGTH . ' merkkiä.');
  define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Salasanan vahvistuksen tulee olla sama kuin uuden salasanasi.');
  define('PASSWORD_HIDDEN', '--PIILOTETTU--');

  define('FORM_REQUIRED_INFORMATION', '* Tarvittava tieto');
  define('ENTRY_REQUIRED_SYMBOL', '*');

  // constants for use in zen_prev_next_display function
  define('TEXT_RESULT_PAGE', '');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Listattuna <strong>%d</strong> - <strong>%d</strong> (<strong>%d</strong> tuotteesta)');
  define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Listattuna <strong>%d</strong> - <strong>%d</strong> (<strong>%d</strong> tilauksesta)');
  define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Listattuna <strong>%d</strong> - <strong>%d</strong> (<strong>%d</strong> kommentista)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Listattuna <strong>%d</strong> - <strong>%d</strong> (<strong>%d</strong> uutuudesta)');
  define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Listattuna <strong>%d</strong> - <strong>%d</strong> (<strong>%d</strong> tarjouksesta)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', 'Listattuna <strong>%d</strong> - <strong>%d</strong> (<strong>%d</strong> tuote-esittelystä)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', 'Listattuna <strong>%d</strong> - <strong>%d</strong> (<strong>%d</strong> tuotteesta)');

  define('PREVNEXT_TITLE_FIRST_PAGE', 'Ensimmäinen');
  define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Edellinen');
  define('PREVNEXT_TITLE_NEXT_PAGE', 'Seuraava');
  define('PREVNEXT_TITLE_LAST_PAGE', 'Viimeinen');
  define('PREVNEXT_TITLE_PAGE_NO', 'Sivu %d');
  define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Edelliset %d Sivua');
  define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Seuraavat %d Sivua');
  define('PREVNEXT_BUTTON_FIRST', '&laquo;ENSIMMÄINEN');
  define('PREVNEXT_BUTTON_PREV', '[&laquo;&nbsp; ]');
  define('PREVNEXT_BUTTON_NEXT', '[&nbsp;&raquo;]');
  define('PREVNEXT_BUTTON_LAST', 'VIIMEINEN&raquo;');

  define('TEXT_BASE_PRICE','Alkaen: ');

  define('TEXT_CLICK_TO_ENLARGE', 'suurempi kuva');

  define('TEXT_SORT_PRODUCTS', 'Järjestä ');
  define('TEXT_DESCENDINGLY', 'laskevasti');
  define('TEXT_ASCENDINGLY', 'nousevasti');
  define('TEXT_BY', ':');

  define('TEXT_REVIEW_BY', 'Kirjoittaja: %s');
  define('TEXT_REVIEW_WORD_COUNT', '%s sanaa');
  define('TEXT_REVIEW_RATING', 'Pisteet: %s [%s]');
  define('TEXT_REVIEW_DATE_ADDED', 'Lisäyspäivä: %s');
  define('TEXT_NO_REVIEWS', 'Kommentteja ei ole saatavilla.');

  define('TEXT_NO_NEW_PRODUCTS', 'Lisää uusia tuotteita tulossa. Ole hyvä ja tarkasta myöhemmin.');

  define('TEXT_UNKNOWN_TAX_RATE', 'Myyntivero');

  define('TEXT_REQUIRED', '<span class="errorText">Pakollinen</span>');

  define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Varoitus: Asennus hakemisto havaittu: %s. Ole hyvä ja poista se turvallisuus syistä.');
  define('WARNING_CONFIG_FILE_WRITEABLE', 'Varoitus: Pystyn kirjoittamaan asetus tiedostoon: %s. Tämä saattaa olla mahdollinen turvallisuus riski - Ole hyvä ja aseta tiukemmat oikeudet tälle tiedostolle.');
  define('ERROR_FILE_NOT_REMOVEABLE', 'Virhe: Määriteltyä tiedostoa ei voitu poistaa. Poista tiedosto käsin esimerkiksi FTP ohjelmalla.');
  define('WARNING_SESSION_AUTO_START', 'Varoitus: session.auto_start on päällä - ole hyvä ja poista tämä toiminto käytöstä php.ini tiedostossa ja käynnistä palvelin uudelleen.');
  define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Varoitus: Ladattavien tuotteiden hakemisto ' . DIR_FS_DOWNLOAD . ' puuttuu. Tuotteiden lataus ei toimi ennenkuin tämä hakemisto luodaan.');
  define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'Varoitus: SQL cache hakemisto ' . DIR_FS_SQL_CACHE . ' puuttuu. SQL cache ei toimi ennenkuin tämä hakemisto luodaan.');
  define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'Varoitus: En pysty kirjoittamaan SQL cache hakemistoon: ' . DIR_FS_SQL_CACHE . '. SQL cache ei toimi ennenkuin tälle hakemistolle asetetaan tarpeeliset oikeudet.');
  define('WARNING_DATABASE_VERSION_OUT_OF_DATE', 'Käyttämäsi tietokanta on liian vanha. Katso Admin->Tools->Server Information tarkistaaksesi SQL-palvelimen version.');
  define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'VAROITUS: Kielitiedostoa ei löytnyt: ');

  define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Luottokortin vanhentumis päivämäärä on virheellinen. Ole hyvä ja tarkasta päivämäärä ja yritä uudelleen.');
  define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Luottokorttisi numero on virheellinen. Ole hyvä ja tarkista numero ja yritä uudelleen.');
  define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Neljä ensimmäistä numeroa olivat: %s. Jos numero on oikein, me emme hyväksy kyseistä luottokorttia. Jos numero on väärä, korjaa se ja yritä uudelleen.');

  define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Alennuskupongit');
  define('BOX_INFORMATION_GV', 'Tietoja ' . TEXT_GV_NAMES . 'eista');
  define('VOUCHER_BALANCE', TEXT_GV_NAME . 'tilin arvo ');
  define('BOX_HEADING_GIFT_VOUCHER', TEXT_GV_NAME . 'tili');
  define('GV_FAQ', 'Useinkysyttyä ' . TEXT_GV_NAMES . 'eista');
  define('ERROR_REDEEMED_AMOUNT', 'Onneksi olkoon, olet lunastanut ' . TEXT_GV_NAMES . 'in jonka arvo on ');
  define('ERROR_NO_REDEEM_CODE', 'Et antanut ' . TEXT_GV_REDEEM . 'a.');
  define('ERROR_NO_INVALID_REDEEM_GV', 'Virheellinen ' . TEXT_GV_NAMES . 'in ' . TEXT_GV_REDEEM);
  define('TABLE_HEADING_CREDIT', 'Credits Available');
  define('GV_HAS_VOUCHERA', 'Sinun ' . TEXT_GV_NAME . 'tilillä on rahaa.<br /> 
                           Voit halutessasi lähettää niitä <a class="pageResults" href="');
  
  define('GV_HAS_VOUCHERB', '"><strong>sähköpostilla</strong></a> kenelle tahansa.');
  define('ENTRY_AMOUNT_CHECK_ERROR', 'Sinulla ei ole tarpeeksi rahaa lähettää valittua summaa.');
  define('BOX_SEND_TO_FRIEND', 'Lähetä ' . TEXT_GV_NAME . ' ');

  define('VOUCHER_REDEEMED',  TEXT_GV_NAME . ' lunastettu');
  define('CART_COUPON', 'Kuponki: ');
  define('CART_COUPON_INFO', 'lisätietoja');
  define('TEXT_SEND_OR_SPEND','Sinun ' . TEXT_GV_NAME . 'tilillä on rahaa. Voit käyttää ne omiin ostoksiisi tai lähettää niitä eteenpäin sähköpostilla.');
  define('TEXT_BALANCE_IS', TEXT_GV_NAME . 'tilisi arvo on: ');
  define('TEXT_AVAILABLE_BALANCE', TEXT_GV_NAME . 'tilisi');

// payment method is GV/Discount
  define('PAYMENT_METHOD_GV', 'Lahjakortti/Alennuskuponki');
  define('PAYMENT_MODULE_GV', 'LK/AK');

  define('TABLE_HEADING_CREDIT_PAYMENT', 'Rahaa käytettävissä');

  define('TEXT_INVALID_REDEEM_COUPON', 'Virheellinen kupongin koodi');
  define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'Sinun täytyy käyttää vähintään %s lunastaaksesi tämän kupongin');
  define('TEXT_INVALID_STARTDATE_COUPON', 'Tämä kuponki ei ole saatavilla vielä');
  define('TEXT_INVALID_FINISHDATE_COUPON', 'Tämä kuponki on vanhentunut');
  define('EXT_INVALID_USES_COUPON', 'Tätä kuponkia pystyi käyttämään vain ');
  define('TIMES', ' kertaa.');
  define('TIME', ' kerran.');
  define('TEXT_INVALID_USES_USER_COUPON', 'Olet käyttänyt kaikki kupongin käyttökerrat jotka on sallittu yhtä asiakasta kohden.');
  define('REDEEMED_COUPON', 'kupongin arvoinen ');
  define('REDEEMED_MIN_ORDER', 'tilaukset jotka ylittävät ');
  define('REDEEMED_RESTRICTIONS', ' [Tuote-Ryhmä rajoitukset voimassa]');
  define('TEXT_ERROR', 'Tapahtui virhe!');
  define('TEXT_INVALID_COUPON_PRODUCT', 'Tätä kuponkia ei voi käyttää minkään korissasi olevan tuotteen kanssa.');
  define('TEXT_VALID_COUPON', 'Olet onnistuneesti lunastanut alennuskupongin');
  define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'Antamaasi kupongin koodi ei ole voimassa valitsemassasi osoitteessa.');

// more info in place of buy now
  define('MORE_INFO_TEXT','Tilaa tästä');

// IP Address
  define('TEXT_YOUR_IP_ADDRESS','IP osoitteesi: ');

//Generic Address Heading
  define('HEADING_ADDRESS_INFORMATION','Osoitetiedot');

// cart contents
  define('PRODUCTS_ORDER_QTY_TEXT_IN_CART','Korissa: ');
  define('PRODUCTS_ORDER_QTY_TEXT','Lisää koriin: ');

// success messages for added to cart when display cart is off
// set to blank for no messages
// for all pages except where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCT', 'Tuote on lisätty koriin ...');
// only for where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCTS', 'Valitsemasi tuotteet ovat lisätty koriin ...');

  define('TEXT_PRODUCT_WEIGHT_UNIT','kg');

// Shipping
  define('TEXT_SHIPPING_WEIGHT','Kg');
  define('TEXT_SHIPPING_BOXES', 'Laatikoita');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Säästä:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','%');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;pois');

// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Alennettu hinta:&nbsp;');

//universal symbols
  define('TEXT_NUMBER_SYMBOL', '# ');

// banner_box
  define('BOX_HEADING_BANNER_BOX','Sponsorit');
  define('TEXT_BANNER_BOX','Vieraile sponsoriemme sivuilla ...');

// banner box 2
  define('BOX_HEADING_BANNER_BOX2','Oletko nähnyt ...');
  define('TEXT_BANNER_BOX2','Tarkastele tätä tänään!');

// banner_box - all
  define('BOX_HEADING_BANNER_BOX_ALL','Sponsorit');
  define('TEXT_BANNER_BOX_ALL','Vieraile sponsoriemme sivuilla ...');

// boxes defines
  define('PULL_DOWN_ALL','Valitse');
  define('PULL_DOWN_MANUFACTURERS','Kaikki valmistajat');
// shipping estimator
  define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', 'Valitse');

// general Sort By
  define('TEXT_INFO_SORT_BY','Järjestä: ');

// close window image popups
  define('TEXT_CLOSE_WINDOW',' - Sulje napsauttamalla kuva');
// close popups
  define('TEXT_CURRENT_CLOSE_WINDOW','[ Sulje ikkuna ]');

// iii 031104 added:  File upload error strings
  define('ERROR_FILETYPE_NOT_ALLOWED', 'Virhe: Tiedoston tyyppi ei sallittu.');
  define('WARNING_NO_FILE_UPLOADED', 'Varoitus: tiedostoa ei ladattu.');
  define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Onnistui:  tiedosto tallennettiin onnistuneesti.');
  define('ERROR_FILE_NOT_SAVED', 'Virhe:  Tiedostoa ei tallennettu.');
  define('ERROR_DESTINATION_NOT_WRITEABLE', 'Virhe:  Kohde on kirjoitussuojattu.');
  define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Virhe: kohdetta ei löydetty.');
  define('ERROR_FILE_TOO_BIG', 'Varoitus: Tiedosto on liian suuri ladattavaksi palvelimelle!<br />Ota yhteyttä kauppamme henkilökuntaan saadaksesi tiedoston ladattua!');
// End iii added

  define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'HUOMAUTUS: Huoltokato odotettavissa (PP.KK.VV) (TT-MM): ');
  define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'HUOMAUTUS: Suoritamme sivulle huoltoa parhaillaan');

  define('PRODUCTS_PRICE_IS_FREE_TEXT','Ilmaiseksi!');
  define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT','Kysy hintaa!');
  define('TEXT_CALL_FOR_PRICE','Kysy hintaa');

  define('TEXT_INVALID_SELECTION_LABELED',' Valitsit virheellisen valinnan: ');
  define('TEXT_ERROR_OPTION_FOR',' Valinnalle: ');
  define('TEXT_INVALID_USER_INPUT', ' käyttäjän toimia vaaditaan<br />');

// product_listing
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Minimitilauserä:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Myyntierä:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','Korissa:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Lisää:');

  define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','Enimmäistilauserä:');

  define('TEXT_PRODUCTS_MIX_OFF','*Sekoitus pois päältä');
  define('TEXT_PRODUCTS_MIX_ON','*Sekoitus päällä');

  define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','<br />*Et voi sekoittaa ominaisuuksia saadaksesi vähittäistilausmäärää.*<br />');
  define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','*Minimi määrä ominaisuuksien sekoitetuilla arvoilla sallittuja');

  define('ERROR_MAXIMUM_QTY','Huom: Tuotteelle on asetettu enimmäistilausrajoitus. Suurin mahdollinen määrä on lisätty koriisi. Tuotteen tiedot: ');
  define('ERROR_CORRECTIONS_HEADING','Korjaa seuraava: <br />');
  define('ERROR_QUANTITY_ADJUSTED', 'Koriin lisättyä määrää on muutettu. Valitsemaasi tuotetta ei ole saatavilla ilmoittamallasi kappale määrällä. Tuotteen ');
  define('ERROR_QUANTITY_CHANGED_FROM', ' määrää muutettiin ');
  define('ERROR_QUANTITY_CHANGED_TO', ' -&gt; ');

// Downloads Controller
  define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG','HUOM: Tiedostojen lataukset eivät toimi ennenkuin maksu on varmistettu');
  define('TEXT_FILESIZE_BYTES', ' bytes');
  define('TEXT_FILESIZE_KBS', ' KB');
  define('TEXT_FILESIZE_MEGS', ' MB');
  define('TEXT_FILESIZE_UNKNOWN', 'tuntematon');

// shopping cart errors
  define('ERROR_PRODUCT','Tuote: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br />Tämä tuote on poistettu valikoimistamme tällä hetkellä.<br />Tuote on poistettu ostoskoristanne.');
  define('ERROR_PRODUCT_ATTRIBUTES','<br />Tuote: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART_ATTRIBUTES','<br />Tuotteen ominaisuudet ovat muuttuneet ja valitsemaasi tuotetta ei ole saatavilla tällä hetkellä.<br />Tuote on poistettu ostoskoristasi.');
  define('ERROR_PRODUCT_QUANTITY_MIN',' ... Vähimmäismäärä virhe: ');
  define('ERROR_PRODUCT_QUANTITY_UNITS',' ... Määrä virhe: ');
  define('ERROR_PRODUCT_OPTION_SELECTION','<br /> ... Virheellinen ominaisuus valittu ');
  define('ERROR_PRODUCT_QUANTITY_ORDERED','<br />Korissa yhteensä: ');
  define('ERROR_PRODUCT_QUANTITY_MAX',' ... Enimmäismäärä virhe: ');
  define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART',' ... Vähimmäismäärä virhe: ');
  define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART',' ... Määrä virhe: ');
  define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART',' ... Enimmäismäärä virhe: ');

  define('WARNING_SHOPPING_CART_COMBINED', 'HUOM: Tuotteet jotka lisäsit koriin viimeksi kun olit kirjautuneena sisään ovat edelleen korissa. Tarkasta ostoskorin sisältö ennen tilausta.');
  define('WARNING_PRODUCT_QUANTITY_ADJUSTED', 'Määrä on oikaistu varastoon. ');
  define('OUT_OF_STOCK_CANT_CHECKOUT', 'Merkityt tuotteet ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' ovat loppuneet varastosta tai varastossa ei ole tarpeeksi varastossa. <br />Muuta merkityt tuotteet (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '). Kiitos');
  define('OUT_OF_STOCK_CAN_CHECKOUT', 'Merkityt tuotteet ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' ovat loppu varastosta.<br />Tuotteet, joita ei ole varastossa, asetetaan jälkikäteen.');

// error on checkout when $_SESSION['customers_id' does not  exist in customers table
  define('ERROR_CUSTOMERS_ID_INVALID', 'Asiakastietoja ei voitu varmistaa!<br />Kirjaudu sisään uudelleen tai luo uusi tunnus ...');

  define('TABLE_HEADING_FEATURED_PRODUCTS','Ajankohtaisia tuotteita...');

  define('TABLE_HEADING_NEW_PRODUCTS', '%s uutuudet');
  define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Tulossa');
  define('TABLE_HEADING_DATE_EXPECTED', 'Odotettu saapumispäivä');
  define('TABLE_HEADING_SPECIALS_INDEX', '%s tarjoukset');

  define('CAPTION_UPCOMING_PRODUCTS','Nämä tuotteet ovat tulossa varastoon pian');
  define('SUMMARY_TABLE_UPCOMING_PRODUCTS','lista sisältää tiedot tuotteista jotka ovat tulossa valikoimiin pian ja arvioidun saapumispäivämäärän.');

// meta tags special defines
  define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT','Ilmainen!');

// customer login
  define('TEXT_SHOWCASE_ONLY','Ota yhteyttä');
// set for login for prices
  define('TEXT_LOGIN_FOR_PRICE_PRICE','Hintaa ei saatavilla');
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE','Kirjaudu sisään nähdäksesi hinta');
// set for show room only
  define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); // blank for prices or enter your own text
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM','Tuoteluettelo');

// authorization pending
  define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Hintaa ei saatavilla');
  define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'ASIAKASTUNNUKSESI ODOTTAA AKTIVOINTIA');
  define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE','Kirjaudu sisään');
  define('TEXT_AUTHORIZATION_PENDING_CHECKOUT', 'Kassalle Ei saatavilla - odottaa hyväksyntää');

// text pricing
  define('TEXT_CHARGES_WORD','Laske hinta:');
  define('TEXT_PER_WORD','<br />Hinta per sana: ');
  define('TEXT_WORDS_FREE',' Sanaa ilmaiseksi ');
  define('TEXT_CHARGES_LETTERS','Laskettu hinta:');
  define('TEXT_PER_LETTER','<br />Hinta per kirjain: ');
  define('TEXT_LETTERS_FREE',' Kirjainta ilmaiseksi ');
  define('TEXT_ONETIME_CHARGES','*kertamaksu = ');
  define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*kertamaksu = ');
  define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Valinnan määräalennus');
  define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','MÄÄRÄ');
  define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','HINTA');
  define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Valinnan määräalennuksen kertamaksu');

// textarea attribute input fields
  define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' kirjainta sallittu enintään');
  define('TEXT_REMAINING','jäljellä');

// Shipping Estimator
  define('CART_SHIPPING_OPTIONS', 'Toimituskulu arvio');
  define('CART_SHIPPING_OPTIONS_LOGIN', '<a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">Kirjaudu sisään</span></a> nähdäksesi toimituskulut.');
  define('CART_SHIPPING_METHOD_TEXT', 'Toimitustapa');
  define('CART_SHIPPING_METHOD_RATES', 'Hinta');
  define('CART_SHIPPING_METHOD_TO','Toimitusosoite: ');
  define('CART_SHIPPING_METHOD_TO_NOLOGIN', 'Toimitusosoite: <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">Kirjaudu sisään</span></a>');
  define('CART_SHIPPING_METHOD_FREE_TEXT','Toimistuskulut');
  define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- Lataukset');
  define('CART_SHIPPING_METHOD_RECALCULATE','Uudelleen laske');
  define('CART_SHIPPING_METHOD_ZIP_REQUIRED','true');
  define('CART_SHIPPING_METHOD_ADDRESS','Osoite:');
  define('CART_OT','Arvioitu kokonaishinta:');
  define('CART_OT_SHOW','true'); // set to false if you don't want order totals
  define('CART_ITEMS','Tuotteita korissa: ');
  define('CART_SELECT','Valitse');
  define('ERROR_CART_UPDATE', '<strong>Ole hyvä ja päivitä tilauksesi ...</strong>');
  define('IMAGE_BUTTON_UPDATE_CART', 'Päivitä');
  define('EMPTY_CART_TEXT_NO_QUOTE', 'Istuntosi on vanhentunut ... Sinun täytyy päivittää ostoskorisi arvion saamiseksi ...');
  define('CART_SHIPPING_QUOTE_CRITERIA', 'Toimituskulut lasketaan valitsemasi toimitusosoitteen mukaan:');

// multiple product add to cart
  define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'Lisää: ');
  define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'Lisää: ');
  define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'Lisää: ');
  define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'Lisää: ');
  //moved SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART to button_names.php as BUTTON_ADD_PRODUCTS_TO_CART_ALT

// discount qty table
  define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Määräalennus');
  define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Määräalennus');
  define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Määräalennus');
  define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Alennus saattaa vaihdella valintojen mukaan');
  define('TEXT_HEADER_DISCOUNTS_OFF', 'Määräalennus ei saatavilla ...');

// sort order titles for dropdowns
  define('PULL_DOWN_ALL_RESET','- RESET - ');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Tuotteen nimi');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Tuotteen nimi - Isommasta pienempään');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Hinta - Pienemmästä isompaan');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Hinta - Isommasta pienempään');
  define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Malli');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Saapumispäivämäärä - Uusimmat ensin');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Saapumispäivämäärä - Vanhimmat ensin');
  define('TEXT_INFO_SORT_BY_PRODUCTS_SORT_ORDER', 'Oletusnäkymä');

// downloads module defines
  define('TABLE_HEADING_DOWNLOAD_DATE', 'Linkki vanhenee');
  define('TABLE_HEADING_DOWNLOAD_COUNT', 'Jäljellä');
  define('HEADING_DOWNLOAD', 'Ladataksesi tiedostosi paina lataus painiketta ja valitse "Tallenna levylle" avautuvasta valikosta.');
  define('TABLE_HEADING_DOWNLOAD_FILENAME','Tiedostonimi');
  define('TABLE_HEADING_PRODUCT_NAME','Tuotteen nimi');
  define('TABLE_HEADING_BYTE_SIZE','Tiedostokoko');
  define('TEXT_DOWNLOADS_UNLIMITED', 'Rajoittamaton');
  define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
  define('COLON_SPACER', ':&nbsp;&nbsp;');
  define('PAYMENT_JAVASCRIPT_DISABLED', 'Emme voineet jatkaa kassalla kuin Javascript on poistettu käytöstä. Sinun täytyy hyväksyä se jatkaa');

// table headings for cart display and upcoming products
  define('TABLE_HEADING_QUANTITY', 'Määrä');
  define('TABLE_HEADING_PRODUCTS', 'Tuotteen nimi');
  define('TABLE_HEADING_TOTAL', 'Yhteensä');

// create account - login shared
  define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Yksityisyyssuoja');
  define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Hyväksy yksityisyyssuoja tiedotteemme rastittamalla seuraava ruutu. Lue <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">yksityisyyssuojatiedotteemme</span></a>.');
  define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'Olen lukenut ja hyväksyn yksityisyyssuojatiedotteen.');
  define('TABLE_HEADING_ADDRESS_DETAILS', 'Osoitteen yksityiskohdat');
  define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Yhteystietojen lisätiedot');
  define('TABLE_HEADING_DATE_OF_BIRTH', 'Varmista ikäsi');
  define('TABLE_HEADING_LOGIN_DETAILS', 'Kirjautumistiedot');
  define('TABLE_HEADING_REFERRAL_DETAILS', 'Suositteliko joku kauppaamme sinulle?');

  define('ERROR_TEXT_COUNTRY_DISABLED_PLEASE_CHANGE', 'Anteeksi, mutta emme enää hyväksy laskutus- tai toimitusosoitteita osoitteessa "%s".  Päivitä tämä osoite jatkaaksesi.');

  define('ENTRY_EMAIL_PREFERENCE','Uutiskirjeen ja sähköpostin tiedot');
  define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
  define('ENTRY_EMAIL_TEXT_DISPLAY','Pelkkä teksti');
  define('EMAIL_SEND_FAILED','Virhe lähettäessä sähköpostia osoitteeseen "%s" <%s> otsikolla: "%s"');

  define('DB_ERROR_NOT_CONNECTED', 'Virhe - Tietokantaan ei voitu luoda yhteyttä');
  define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">ERROR 0071: There appears to be a problem with the database. Maintenance is required.</a>');

  // EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'VAROITUS: EZ-PAGES HEADER - Näytetään vain ylläpitäjän IP-osoitteelle');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'VAROITUS: EZ-PAGES FOOTER - Näytetään vain ylläpitäjän IP-osoitteelle');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'VAROITUS: EZ-PAGES SIDEBOX - Näytetään vain ylläpitäjän IP-osoitteelle');

// extra product listing sorter
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', 'Tuotteet jotka alkavat kirjaimella ...');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET', '-- Reset --');

///////////////////////////////////////////////////////////

  $file_list = array(FILENAME_EMAIL_EXTRAS, FILENAME_HEADER, FILENAME_BUTTON_NAMES, FILENAME_ICON_NAMES, FILENAME_OTHER_IMAGES_NAMES, FILENAME_CREDIT_CARDS, FILENAME_WHOS_ONLINE, FILENAME_META_TAGS); 
  foreach ($file_list as $file) { 
    $file = str_replace(".php","",$file); 
    require_once(zen_get_file_directory(DIR_FS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/', $file . '.php', 'false'));
  }

// END OF EXTERNAL LANGUAGE LINKS
