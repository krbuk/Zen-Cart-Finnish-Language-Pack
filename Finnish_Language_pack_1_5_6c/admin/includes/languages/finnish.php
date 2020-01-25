<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2019 Jan 21 Modified in v1.5.6b $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.6b by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 
if (!defined('IS_ADMIN_FLAG'))
{
  die('Illegal Access');
}

define('CONNECTION_TYPE_UNKNOWN', '\'%s\' ei ole kelvollinen yhteystyyppi generoimiseksi URLs' . PHP_EOL . '%s' . PHP_EOL);

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Admin Powered by Zen Cart :: The Art of E-Commerce');
define('HEADER_LOGO_WIDTH', '200px');
define('HEADER_LOGO_HEIGHT', '70px');
define('HEADER_LOGO_IMAGE', 'logo.gif');

// look in your $PATH_LOCALE/locale directory for available locales..
$locales = array('fi_FI', 'fi_FI.utf8', 'fi');
@setlocale(LC_TIME, $locales);
define('DATE_FORMAT_SHORT', '%d.%m.%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd.m.Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd.m.Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
// for now both defines are needed until Spiffy is completely removed.
define('DATE_FORMAT_SPIFFYCAL', 'dd.MM.yyyy');  //Use only 'dd', 'MM' and 'yyyy' here in any order
define('DATE_FORMAT_DATE_PICKER', 'dd-mm-yy');  //Use only 'dd', 'mm' and 'yy' here in any order
define('ADMIN_NAV_DATE_TIME_FORMAT', '%A %d %b %Y %X'); // this is used for strftime()
////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function zen_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

// // include template specific meta tags defines
//   if (file_exists(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
//     $template_dir_select = $template_dir . '/';
//   } else {
//     $template_dir_select = '';
//   }
//   require(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// used for prefix to browser tabs in admin pages
define('TEXT_ADMIN_TAB_PREFIX', 'Ylläpito ');
// if you have multiple stores and want the Store Name to be part of the admin title (ie: for browser tabs), swap this line with the one above
//define('TEXT_ADMIN_TAB_PREFIX', 'Admin ' . STORE_NAME);

// meta tags
define('ICON_METATAGS_ON', 'Meta tietoja määritelty');
define('ICON_METATAGS_OFF', 'Meta tietoja ei nääritelty');
define('TEXT_LEGEND_META_TAGS', 'Määritellyt meta tiedot:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>HUOM:</strong> Tämä sivun/Tagline on määrittelemäsi määritelmä sivustossasi meta_tags.php file.');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="fi"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Ylläpidon etusivu');
define('HEADER_TITLE_SUPPORT_SITE', 'Tukisivu');
define('HEADER_TITLE_ONLINE_CATALOG', 'Verkkokauppa');
define('HEADER_TITLE_VERSION', 'Versio');
define('HEADER_TITLE_ACCOUNT', 'Ylläpitäjät');
define('HEADER_TITLE_LOGOFF', 'Kirjaudu ulos');
//define('HEADER_TITLE_ADMINISTRATION', 'Administration');

// TEXT_GV_NAME, TEXT_GV_NAMES moved to gv_name.php
if (!defined('TEXT_GV_NAME')) {
  require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php'; 
}
  define('TEXT_DISCOUNT_COUPON', 'Alennuskuponki');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','Lunastuskoodi');

// text for gender
define('MALE', 'Mies');
define('FEMALE', 'Nainen');

define('TEXT_CHECK_ALL', 'Tarkista kaikki');
define('TEXT_UNCHECK_ALL', 'Poista kaikki');
define('NONE', 'None');

define('TEXT_UNKNOWN', 'Tuntematon');

// configuration box text
define('BOX_HEADING_CONFIGURATION', 'Asetukset');
define('BOX_CONFIGURATION_MY_STORE', 'Kaupan tiedot');
define('BOX_CONFIGURATION_MINIMUM_VALUES', 'Alaraja arvot');
define('BOX_CONFIGURATION_MAXIMUM_VALUES', 'Yläraja arvot');
define('BOX_CONFIGURATION_IMAGES', 'Kuvat');
define('BOX_CONFIGURATION_CUSTOMER_DETAILS', 'Asiakkaan tiedot');
define('BOX_CONFIGURATION_SHIPPING_PACKAGING', 'Lähetys ja pakkaus');
define('BOX_CONFIGURATION_PRODUCT_LISTING', 'Tuotelistaus');
define('BOX_CONFIGURATION_STOCK', 'Varasto');
define('BOX_CONFIGURATION_LOGGING', 'Loki');
define('BOX_CONFIGURATION_EMAIL_OPTIONS', 'Sähköpostiasetukset');
define('BOX_CONFIGURATION_ATTRIBUTE_OPTIONS', 'Ominaisuuksien asetukset');
define('BOX_CONFIGURATION_GZIP_COMPRESSION', 'GZip pakkaus');
define('BOX_CONFIGURATION_SESSIONS', 'Istuntoasetukset');
define('BOX_CONFIGURATION_REGULATIONS', 'Säädökset');
define('BOX_CONFIGURATION_GV_COUPONS', 'Lahjakortit ja kupongit');
define('BOX_CONFIGURATION_CREDIT_CARDS', 'Luottokortit');
define('BOX_CONFIGURATION_PRODUCT_INFO', 'Tuotetiedot');
define('BOX_CONFIGURATION_LAYOUT_SETTINGS', 'Ulkoasun asetukset');
define('BOX_CONFIGURATION_WEBSITE_MAINTENANCE', 'Huoltotila');
define('BOX_CONFIGURATION_NEW_LISTING', 'Uusien tuotteiden listaus');
define('BOX_CONFIGURATION_FEATURED_LISTING', 'Tuote-esittely listaus');
define('BOX_CONFIGURATION_ALL_LISTING', 'Kaikkien tuotteiden listaus');
define('BOX_CONFIGURATION_INDEX_LISTING', 'Etusivun tuoteet');
define('BOX_CONFIGURATION_DEFINE_PAGE_STATUS', 'Define Page asetukset');
define('BOX_CONFIGURATION_EZPAGES_SETTINGS', 'EZ-Pages asetukset');

// modules box text
define('BOX_HEADING_MODULES', 'Modulit');
define('BOX_MODULES_PAYMENT', 'Maksumodulit');
define('BOX_MODULES_SHIPPING', 'Toimitusmodulit');
define('BOX_MODULES_ORDER_TOTAL', 'Välisummamodulit');
define('BOX_MODULES_PRODUCT_TYPES', 'Tuotetyypit');

// categories box text
define('BOX_HEADING_CATALOG', 'Kauppa');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Ryhmät/Tuotteet');
define('BOX_CATALOG_PRODUCT_TYPES', 'Tuotetyypit');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'Ominaisuuksien nimien hallinta');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'Ominaisuuksien arvojen hallinta');
define('BOX_CATALOG_MANUFACTURERS', 'Valmistajat');
define('BOX_CATALOG_REVIEWS', 'Arvostelut');
define('BOX_CATALOG_SPECIALS', 'Tarjoukset');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Saapuvat tuotteet');
define('BOX_CATALOG_SALEMAKER', 'Alennuksen rakentaja');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', 'Hintojen hallinta');
define('BOX_CATALOG_PRODUCT', 'Tuote');
define('BOX_CATALOG_PRODUCTS_TO_CATEGORIES', 'Tuotteet ryhmiin');
define('BOX_CATALOG_CATEGORY', 'Ryhmät');

// customers box text
define('BOX_HEADING_CUSTOMERS', 'Asiakkaat');
define('BOX_CUSTOMERS_CUSTOMERS', 'Asiakkaat');
define('BOX_CUSTOMERS_ORDERS', 'Tilaukset');
define('BOX_CUSTOMERS_GROUP_PRICING', 'Hinnoitteluryhmät');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');
define('BOX_CUSTOMERS_INVOICE', 'Lasku');
define('BOX_CUSTOMERS_PACKING_SLIP', 'Pakkauslista');

// taxes box text
define('BOX_HEADING_LOCATION_AND_TAXES', 'Alueet / Verot');
define('BOX_TAXES_COUNTRIES', 'Valtiot');
define('BOX_TAXES_ZONES', 'Alueet');
define('BOX_TAXES_GEO_ZONES', 'Aluemäärittelyt');
define('BOX_TAXES_TAX_CLASSES', 'Verokannat');
define('BOX_TAXES_TAX_RATES', 'Veroarvot');

// reports box text
define('BOX_HEADING_REPORTS', 'Raportit');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Katsotut tuotteet');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Ostetut tuotteet');
define('BOX_REPORTS_ORDERS_TOTAL', 'Asiakkaiden ostot yhteensä');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', 'Tuotesaldot');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', 'Asiakkaiden suositukset');

// tools text
define('BOX_HEADING_TOOLS', 'Työkalut');
define('BOX_TOOLS_TEMPLATE_SELECT', 'Ulkoasun valitsin');
define('BOX_TOOLS_BACKUP', 'Tietokannan varmuuskopiointi');
define('BOX_TOOLS_BANNER_MANAGER', 'Mainosten asetukset');
define('BOX_TOOLS_CACHE', 'Välimuistin asetukset');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Määritä kieliä');
define('BOX_TOOLS_FILE_MANAGER', 'Tiedostonhallinta');
define('BOX_TOOLS_MAIL', 'Lähetä sähköpostia');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Uutiskirjeiden ja tuoteseurannan asetukset');
define('BOX_TOOLS_SERVER_INFO', 'Palvelin/Versio tiedot');
define('BOX_TOOLS_WHOS_ONLINE', 'Tämänhetkiset käyttäjät');
define('BOX_TOOLS_STORE_MANAGER', 'Kaupan asetukset');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Kehittäjän työkalut');
define('BOX_TOOLS_SQLPATCH','Asenna SQL päivityksiä');
define('BOX_TOOLS_EZPAGES','EZ-Pages');

define('BOX_HEADING_EXTRAS', 'Extrat');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','Define Pages muokkain');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', 'Pääsivu');
define('BOX_TOOLS_DEFINE_CONTACT_US','Ota yhteyttä meihin');
define('BOX_TOOLS_DEFINE_PRIVACY','Yksityisyysturvatiedote');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO','Toimitusehdot');
define('BOX_TOOLS_DEFINE_CONDITIONS','Käyttöehdot');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS','Tilaus hyväksytty');
define('BOX_TOOLS_DEFINE_PAGE_2','Sivu 2');
define('BOX_TOOLS_DEFINE_PAGE_3','Sivu 3');
define('BOX_TOOLS_DEFINE_PAGE_4','Sivu 4');

// localization box text
define('BOX_HEADING_LOCALIZATION', 'Lokalisaatio');
define('BOX_LOCALIZATION_CURRENCIES', 'Valuutat');
define('BOX_LOCALIZATION_LANGUAGES', 'Kielet');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Tilauksien tilat');

// gift vouchers box text
define('BOX_HEADING_GV_ADMIN', 'Kupongit');
define('BOX_GV_ADMIN_QUEUE',  TEXT_GV_NAME . 'jono');
define('BOX_GV_ADMIN_MAIL', 'Lähetä ' . TEXT_GV_NAME);
define('BOX_GV_ADMIN_SENT', 'Lähetetyt ' . TEXT_GV_NAMES . 'it');
define('BOX_COUPON_ADMIN','Kuponkien ylläpito');
define('BOX_COUPON_RESTRICT','Kuponkien rajoitukset');

// admin access box text
define('BOX_HEADING_ADMIN_ACCESS', 'Ylläpito');
define('BOX_ADMIN_ACCESS_USERS',  'Ylläpidon käyttäjät');
define('BOX_ADMIN_ACCESS_PROFILES', 'Ylläpidon profiilit');
define('BOX_ADMIN_ACCESS_PAGE_REGISTRATION', 'Ylläpitosivujen rekisteröinti');
define('BOX_ADMIN_ACCESS_LOGS', 'Ylläpidon seurantaloki');

define('IMAGE_RELEASE', 'Lunasta ' . TEXT_GV_NAME);

// javascript messages
define('JS_ERROR', 'Lomakkeen käsittelyssä tapahtui virheitä!\nTee seuraavat korjaukset:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* Uudelle ominaisuudelle tarvitsee määrittää hinta\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Uudelle ominaisuudelle tulee määrittää hinnan etuliite\n');

define('JS_PRODUCTS_NAME', '* Uusi tuote tarvitsee nimen\n');
define('JS_PRODUCTS_DESCRIPTION', '* Uusi tuote tarvitsee kuvauksen\n');
define('JS_PRODUCTS_PRICE', '* Uusi tuote tarvitsee hinnan arvon\n');
define('JS_PRODUCTS_WEIGHT', '* Uusi tuote tarvitsee painon arvon\n');
define('JS_PRODUCTS_QUANTITY', '* Uusi tuote tarvitsee määrä arvon\n');
define('JS_PRODUCTS_MODEL', '* Uusi tuote tarvitsee mallin arvon\n');
define('JS_PRODUCTS_IMAGE', '* Uusi tuote tarvitsee kuvan\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Tälle tuotteelle pitää asettaa uusi hinta\n');

define('JS_GENDER', '* Sukupuoli täytyy valita.\n');
define('JS_FIRST_NAME', '* Etunimen tulee olla vähintään ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' merkkiä.\n');
define('JS_LAST_NAME', '* Sukunimen tulee olla vähintään ' . ENTRY_LAST_NAME_MIN_LENGTH . ' merkkiä.\n');
define('JS_DOB', '* Syntymäpäivän tulee olla muodossa: xx/xx/xxxx (päivä/kuukausi/vuosi).\n');
define('JS_EMAIL_ADDRESS', '* Sähköpostiosoitteen tulee olla vähintään ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' merkkiä.\n');
define('JS_ADDRESS', '* Kotiosoitteen tulee olla vähintään ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' merkkiä.\n');
define('JS_POST_CODE', '* Postinumeron tulee olla vähintään ' . ENTRY_POSTCODE_MIN_LENGTH . ' merkkiä.\n');
define('JS_CITY', '* Kaupungin nimen tulee olla vähintään' . ENTRY_CITY_MIN_LENGTH . ' merkkiä.\n');
define('JS_STATE', '* Alue täytyy valita.\n');
define('JS_STATE_SELECT', '-- Valitse yltä --');
define('JS_ZONE', '* Tälle valtiolle täytyy valita alue.');
define('JS_COUNTRY', '* Valtio pitää valita.\n');
define('JS_TELEPHONE', '* Puhelinnumerossa tulee olla vähintään ' . ENTRY_TELEPHONE_MIN_LENGTH . ' merkkiä.\n');

define('JS_ERROR_SUBMITTED', 'Tämä lomake on jo lähetetty. Paina OK ja odota, että kesittäly on valmis.');

define('JS_ORDER_DOES_NOT_EXIST', 'Tilausta numerolla %s ei löytynyt!');
define('TEXT_NO_ORDER_HISTORY', 'Ei tilaushistoria saatavilla');

define('CATEGORY_PERSONAL', 'Henkilökohtainen');
define('CATEGORY_ADDRESS', 'Osoite');
define('CATEGORY_CONTACT', 'Yhteystiedot');
define('CATEGORY_COMPANY', 'Yritys');
define('CATEGORY_OPTIONS', 'Vaihtoehdot');

define('ENTRY_GENDER', 'Sukupuoli:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">pakollinen</span>');
define('ENTRY_FIRST_NAME', 'Etunimi:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">vähintään ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' merkkiä</span>');
define('ENTRY_LAST_NAME', 'Sukunimi:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">vähintään ' . ENTRY_LAST_NAME_MIN_LENGTH . ' merkkiä</span>');
define('ENTRY_DATE_OF_BIRTH', 'Syntymäpäivä:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(esim. 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Sähköpostiosoite:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">vähintään ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' merkkiä</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">Sähköpostiosoite on väärin!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Sähköpostiosoite on jo käytössä!</span>');
define('ENTRY_COMPANY', 'Yrityksen nimi:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Alennuksen hinnoitteluryhmä');
define('ENTRY_STREET_ADDRESS', 'Katuosoite:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">vähintään ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' merkkiä</span>');
define('ENTRY_SUBURB', 'Osoitteen lisätieto:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'Postinumero:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">vähintään ' . ENTRY_POSTCODE_MIN_LENGTH . ' merkkiä</span>');
define('ENTRY_CITY', 'Kaupunki:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">vähintään ' . ENTRY_CITY_MIN_LENGTH . ' merkkiä</span>');
define('ENTRY_STATE', 'Alue:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">pakollinen</span>');
define('ENTRY_COUNTRY', 'Valtio:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Puhelinnumero:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">vähintään ' . ENTRY_TELEPHONE_MIN_LENGTH . ' merkkiä</span>');
define('ENTRY_FAX_NUMBER', 'Faksinumero:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Uutiskirje:');
define('ENTRY_NEWSLETTER_YES', 'Tilattu');
define('ENTRY_NEWSLETTER_NO', 'Ei tilattu');
define('ENTRY_NEWSLETTER_ERROR', '');

define('ERROR_PASSWORDS_NOT_MATCHING', 'Salasanan ja salasanan vahvistuksen täytyy täsmätä');
define('ENTRY_PASSWORD_CHANGE_ERROR', '<strong>Uusi salasana hylätty.</strong><br />');
define('ERROR_PASSWORD_RULES', 'Salasanan on sisällettävä kirjaimia sekä numeroita, ja sen on oltava vähintään %s merkkiä pitkä. Salasana ei saa myöskään olla sama jota olet käyttänyt aikaisemmin (4 edellistä salasanaa). Salasana vanhenee 90 päivässä.');
define('ERROR_TOKEN_EXPIRED_PLEASE_RESUBMIT', 'VIRHE: Tietojen käsittelyssä tapahtui virhe. Lähetä tiedot uudelleen.');

// images
//define('IMAGE_ANI_SEND_EMAIL', 'Sending E-Mail');
define('IMAGE_BACK', 'Takaisin');
define('IMAGE_BACKUP', 'Varmuuskopio');
define('IMAGE_CANCEL', 'Peruuta');
define('IMAGE_CONFIRM', 'Hyväksy');
define('IMAGE_COPY', 'Kopioi');
define('IMAGE_COPY_TO', 'Kopioi kohteeseen');
define('IMAGE_DETAILS', 'Tiedot');
define('IMAGE_DELETE', 'Poista');
define('IMAGE_EDIT', 'Muokkaa');
define('IMAGE_EMAIL', 'Sähköposti');
define('IMAGE_GO', 'Mene');
define('IMAGE_FILE_MANAGER', 'Tiedostohallinta');
define('IMAGE_ICON_STATUS_GREEN', 'Aktivoi');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Aseta aktiiviseksi');
define('IMAGE_ICON_STATUS_RED', 'Ei aktiivinen');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Aseta ei aktiiviseksi');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'Virhe -- liian monta URL/content types määritelty');
define('IMAGE_ICON_STATUS_RED_ERROR', 'Virhe');
define('IMAGE_ICON_INFO', 'Info');
define('IMAGE_INSERT', 'Lisää');
define('IMAGE_LOCK', 'Lukitse');
define('IMAGE_MODULE_INSTALL', 'Asenna moduli');
define('IMAGE_MODULE_REMOVE', 'Poista moduli');
define('IMAGE_MOVE', 'Siirrä');
define('IMAGE_NEW_BANNER', 'Uusi mainos');
define('IMAGE_NEW_CATEGORY', 'Uusi ryhmä');
define('IMAGE_NEW_COUNTRY', 'Uusi valtio');
define('IMAGE_NEW_CURRENCY', 'Uusi valuutta');
define('IMAGE_NEW_FILE', 'Uusi tiedosto');
define('IMAGE_NEW_FOLDER', 'Uusi hakemisto');
define('IMAGE_NEW_LANGUAGE', 'Uusi kieli');
define('IMAGE_NEW_NEWSLETTER', 'Uusi uutiskirje');
define('IMAGE_NEW_PRODUCT', 'Uusi tuote');
define('IMAGE_NEW_SALE', 'Uusi alennus');
define('IMAGE_NEW_TAX_CLASS', 'Uusi verokanta');
define('IMAGE_NEW_TAX_RATE', 'Uusi veroarvo');
define('IMAGE_NEW_TAX_ZONE', 'Uusi veroalue');
define('IMAGE_NEW_ZONE', 'Uusi alue');
define('IMAGE_OPTION_NAMES', 'Ominaisuuksien nimien hallinta');
define('IMAGE_OPTION_VALUES', 'Ominaisuuksien arvojen hallinta');
define('IMAGE_ORDERS', 'Tilaukset');
define('IMAGE_ORDERS_INVOICE', 'Lasku');
define('IMAGE_ORDERS_PACKINGSLIP', 'Lähete');
define('IMAGE_PERMISSIONS', 'Muokkaa käyttöoikeuksia');
define('IMAGE_PREVIEW', 'Esikatsele');
define('IMAGE_RESTORE', 'Palauta');
define('IMAGE_RESET', 'Reset');
define('IMAGE_RESET_PWD', 'Vaihda salasana');
define('IMAGE_SAVE', 'Tallenna');
define('IMAGE_SEARCH', 'Etsi');
define('IMAGE_SELECT', 'Valitse');
define('IMAGE_SEND', 'Lähetä');
define('IMAGE_SEND_EMAIL', 'Lähetä sähköposti');
define('IMAGE_SUBMIT', 'Lähetä');
define('IMAGE_UNLOCK', 'Poista lukitus');
define('IMAGE_UPDATE', 'Päivitä');
define('IMAGE_UPDATE_CURRENCIES', 'Päivitä vaihtokurssit');
define('IMAGE_UPLOAD', 'Lataa palvelimelle');
define('IMAGE_TAX_RATES','Veroarvo');
define('IMAGE_DEFINE_ZONES','Määritä alueet');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Tuotehintojen hallinta');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Päivitä hinnanmuutokset');
define('IMAGE_ADD_BLANK_DISCOUNTS','Lisää ' . DISCOUNT_QTY_ADD . ' tyhjä alennusmäärä');
define('IMAGE_CHECK_VERSION', 'Tarkista päivitykset');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Usean ryhmän linkkien hallinta');;

define('IMAGE_ICON_STATUS_ON', 'Tila - päällä');
define('IMAGE_ICON_STATUS_OFF', 'Tila - poispäältä');
define('IMAGE_ICON_LINKED', 'Tuote on linkitetty');

define('IMAGE_REMOVE_SPECIAL','Poista tarjoushintatiedot');
define('IMAGE_REMOVE_FEATURED','Poista esittelyssä olevan tuotteen tiedot');
define('IMAGE_INSTALL_SPECIAL', 'Lisää tarjoushintatieto');
define('IMAGE_INSTALL_FEATURED', 'Lisää esittelyssä olevan tuotteen tiedot');

define('TEXT_VERSION_CHECK_BUTTON', 'Check for New Version');
define('TEXT_BUTTON_RESET_ACTIVITY_LOG', 'View Activity Log');

define('ICON_PRODUCTS_PRICE_MANAGER','Tuotehintojen hallinta');
define('ICON_COPY_TO', 'Kopioi kohteeseen');
define('ICON_CROSS', 'Epätosi');
define('ICON_CURRENT_FOLDER', 'Nykyinen hakemisto');
define('ICON_DELETE', 'Poista');
define('ICON_EDIT', 'Muokkaa');
define('ICON_ERROR', 'Virhe');
define('ICON_FILE', 'Tiedosto');
define('ICON_FILE_DOWNLOAD', 'Lataa');
define('ICON_FOLDER', 'Hakemisto');
//define('ICON_LOCKED', 'Locked');
define('ICON_MOVE', 'Siirrä');
define('ICON_PERMISSIONS', 'Käyttöoikeudet');
define('ICON_PREVIOUS_LEVEL', 'Edellinen taso');
define('ICON_PREVIEW', 'Esikatsele');
define('ICON_RESET', 'Reset');
define('ICON_STATISTICS', 'Tilastot');
define('ICON_SUCCESS', 'Onnistui');
define('ICON_TICK', 'Tosi');
//define('ICON_UNLOCKED', 'Unlocked');
define('ICON_WARNING', 'Varoitus');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'Sivu %s / %d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> ylläpitäjästä)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> mainoksesta)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> ryhmästä)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> valtiosta)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> asiakkaasta)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> valuutasta)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> esiteltävästä tuotteesta)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> kielestä)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> valmistajasta)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> uutiskirjeestä)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> tilauksesta)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> tilauksen tilasta)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> hintaryhmästä)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> tuotteesta)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> tuote tyypistä)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> odotetuista tuotteista)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> tuotearvostelusta)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> alennuksesta)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> tarjoustuotteesta)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> verokannasta)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> ulkoasujen yhteydestä)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> veroalueesta)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> veroarvosta)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> alueesta)');

define('PREVNEXT_TITLE_FIRST_PAGE', 'Ensimmäinen sivu');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Edellinen sivu');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Seuraava sivu');
define('PREVNEXT_TITLE_LAST_PAGE', 'Viimeinen sivu');
define('PREVNEXT_TITLE_PAGE_NO', 'Sivu %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Edelliset sivu %d');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Seuraavat sivu %d');
define('PREVNEXT_BUTTON_FIRST', '&laquo;ENSI');
define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');
define('PREVNEXT_BUTTON_LAST', 'VIIME&raquo;');

define('TEXT_DEFAULT', 'oletus');
define('TEXT_SET_DEFAULT', 'Aseta oletukseksi');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Pakollinen</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Virhe: Oletusvaluuttaa ei ole määritetty. Määritä oletusvaluutta menemällä: Ylläpidon työkalut->Lokalisointi->Valuutat');

define('TEXT_NONE', '--none--');
define('TEXT_TOP', 'Juuri');
define('PLEASE_SELECT', 'Valitse ...');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Virhe: Kohdetta ei ole olemassa: %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Virhe: Kohteeseen ei pystytty kirjoittamaan: %s');
define('ERROR_FILE_NOT_SAVED', 'Virhe: Palvelimelle ladattua tiedostoa ei pystytty tallentamaan.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Virhe: Tiedoston tyyppiä ei hyväksytty: %s');
define('ERROR_FILE_TOO_BIG', 'Varoitus: Tiedosto on suurempi kuin sallitut koot. Katso Kuvan kokoonpanoasetukset.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Onnistui: Palvelimelle ladattu tiedosto tallennettu: %s');
define('WARNING_NO_FILE_UPLOADED', 'Varoitus: Tiedostoa ei ladattu palvelimelle.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Virhe: Tiedostojen lataus palvelimelle on estetty php.ini tiedostossa.');
define('ERROR_ADMIN_SECURITY_WARNING', 'Varoitus: Ylläpitotunnuksesi ei ole turvallinen ... Joko sinulla on yhä oletus asetukset ylläpitäjän tunnukselle: Admin admin tai et ole poistanut tai muuttanut esittelyasetusta: demo demoonly<br />Tunnukset pitäisi muuttaa välittömästi turvallisuussyistä<br />Mene Työkalut->Ylläpitäjän asetukset ja muuta tunnuksen ID:tä ja salasanaa.<br />Ylläpitosivuston turvallisuuden parantamisesta saat lisätietoja kansiosta /docs');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','Tietokanta näyttää tarvitsevan korjausta korkeammalle tasolle. Katso kohdasta Työkalut-> Palvelintiedot, jos haluat tarkistaa korjaustason.');
define('WARN_DATABASE_VERSION_PROBLEM','true'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>Varoitus:</strong> Sivusto on asetettu "Huoltokatkos" -tilaan ...<br />HUOM: Et voi testata maksu- ja toimitusmoduuleja sivun ollessa huoltokatkos -tilassa');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', 'Varoitus: Nämä tiedostot tulisi poistaa turvallisuussyistä: ');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Varoitus: Asennushakemisto on olemassa osoitteessa: ' . DIR_FS_CATALOG . 'zc_install. Poista tämä kansio turvallisuussyistä.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Varoitus: Sivun asetustiedosto: %sincludes/configure.php on luku/kirjoitus tilassa, tämä on turvallisuusriski! - Aseta tiedosto vain-luku tilaan (read-only, CHMOD 644 tai 444 yleensä). <a href="http://tutorials.zen-cart.com/index.php?article=90" target="_blank">Lue lisää aiheesta</a>.');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'VAROITUS: Kielitiedostoa ei löytynyt: ');
define('ERROR_MODULE_REMOVAL_PROHIBITED', 'VIRHE: Modulin poisto kielletty: ');
define('WARNING_REVIEW_ROGUE_ACTIVITY', 'HUOMIO: Tarkastele mahdollisen XSS aktiviteetin varalta:');

define('ERROR_FILE_NOT_REMOVEABLE', 'Virhe: Määritettyä tiedostoa ei voitu poistaa. Voit joutua käyttämään FTP-tiedostoa tiedostojen poistamiseen palvelimen käyttöoikeuksien määritysrajoituksen vuoksi.');
define('WARNING_SESSION_AUTO_START', 'Varoitus: session.auto_start on käytössä - poista php.ini-PHP-ominaisuus käytöstä (Web-palvelimen uudelleenkäynnistys saattaa olla tarpeen aktivoida muutos).');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Varoitus: Ladattavien tuotteiden hakemistoa ei ole olemassa:' . DIR_FS_DOWNLOAD . '. Ladatut tuotteet eivät toimi, ennen kuin hakemisto on kelvollinen.');
define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'Varoitus: SQL-välimuistihakemistoa ei ole olemassa: ' . DIR_FS_SQL_CACHE . '. SQL-välimuisti ei toimi, ennen kuin hakemisto luodaan.');
define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'Varoitus: En pysty kirjoittamaan SQL-välimuistihakemistoon: ' . DIR_FS_SQL_CACHE . '. SQL-välimuisti ei toimi, kunnes oikeat käyttöoikeudet asetetaan.');
define('ERROR_UNABLE_TO_DISPLAY_SERVER_INFORMATION', 'Anteeksi, PHP: n asetukset ei voida näyttää, koska webhotelli on määritellyt, että [phpinfo] tulisi poistaa käytöstä osana [disable_functions] php.ini asetuksessa.');

define('_JANUARY', 'Tammikuu');
define('_FEBRUARY', 'Helmikuu');
define('_MARCH', 'Maaliskuu');
define('_APRIL', 'Huhtikuu');
define('_MAY', 'Toukokuu'); 
define('_JUNE', 'Kes&auml;kuu');   // ä = &auml;
define('_JULY', 'Hein&auml;kuu');  // ä = &auml;
define('_AUGUST', 'Elokuu');
define('_SEPTEMBER', 'Syyskuu');
define('_OCTOBER', 'Lokakuu');
define('_NOVEMBER', 'Marraskuu');
define('_DECEMBER', 'Joulukuu');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> lahjakortista)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> kupongista)');

define('TEXT_VALID_PRODUCTS_LIST', 'Tuotelista');
define('TEXT_VALID_PRODUCTS_ID', 'Tuotteen ID');
define('TEXT_VALID_PRODUCTS_NAME', 'Tuotteen nimi');
define('TEXT_VALID_PRODUCTS_MODEL', 'Tuotteen malli');

define('TEXT_VALID_CATEGORIES_LIST', 'Tuoteryhmälista');
define('TEXT_VALID_CATEGORIES_ID', 'Tuoteryhmän ID');
define('TEXT_VALID_CATEGORIES_NAME', 'Tuoteryhmän nimi');

define('DEFINE_LANGUAGE','Aseta kieli:');

define('BOX_ENTRY_COUNTER_DATE','Kävijälaskuri käynnistetty:');
define('BOX_ENTRY_COUNTER','Kävijälaskuri:');

// not installed
define('NOT_INSTALLED_TEXT','Ei asennettu');

// Product Options Values Sort Order - option_values.php
define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','Ominaisuuksien arvojen järjestelijä ');

define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>Muuta ominaisuuksien järjestystä oletusjärjestyksestä</strong> ');
define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>Päivitä kaikien tuotteiden ominaisuuksien järjestystä</strong><br />vastaamaan ominaisuuksien oletusjärjestystä:<br />');

// Product Options Name Sort Order - option_values.php
define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','Ominaisuuksien nimien järjestelijä');

// Attributes only
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','Ominaisuuksien hallinta');

// generic model
define('TEXT_MODEL','Malli:');

// column controller
define('BOX_TOOLS_LAYOUT_CONTROLLER','Sivulaatikoiden hallinta');

// check GV release queue and alert store owner
define('SHOW_GV_QUEUE',true);
define('TEXT_SHOW_GV_QUEUE','%s odottaa hyväksymistä ');
define('IMAGE_GIFT_QUEUE', TEXT_GV_NAME . ' Jono');
define('IMAGE_ORDER','Järjestys');

define('IMAGE_DISPLAY','Näytä');
define('IMAGE_UPDATE_SORT','Päivitä lajittelujärjestystä');
define('IMAGE_EDIT_PRODUCT','Muokkaa tuotetta');
define('IMAGE_EDIT_ATTRIBUTES','Muokkaa ominaisuuksia');
define('TEXT_NEW_PRODUCT', 'Tuote on ryhmässä: &quot;%s&quot;');
define('IMAGE_OPTIONS_VALUES','Ominaisuuksien nimet ja arvot');
define('TEXT_PRODUCTS_PRICE_MANAGER','TUOTTEIDEN HINTOJEN HALLINTA');
define('TEXT_PRODUCT_EDIT','MUOKKAA TUOTETTA');
define('TEXT_ATTRIBUTE_EDIT','MUOKKAA OMINAISUUKSIA');
define('TEXT_PRODUCT_DETAILS','NÄYTÄ YKSITYISKOHDAT');

// sale maker
define('DEDUCTION_TYPE_DROPDOWN_0', 'Vähennä määrä');
define('DEDUCTION_TYPE_DROPDOWN_1', 'Prosentti');
define('DEDUCTION_TYPE_DROPDOWN_2', 'Uusi hinta');

// Min and Units
define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Vähintään:');
define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Yksikköä:');
define('PRODUCTS_QUANTITY_IN_CART_LISTING','Korissa:');
define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Lisää:');

define('TEXT_PRODUCTS_MIX_OFF','*Sekoitus pois päältä');
define('TEXT_PRODUCTS_MIX_ON','*Sekoitus päällä');

// search filters
define('TEXT_INFO_SEARCH_DETAIL_FILTER','Haun suodatin: ');
define('HEADING_TITLE_SEARCH_DETAIL','Haku: ');
define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Etsi tuotteita - Erittele pilkulla');
define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Hae tuotteita nimellä/mallilla');

define('PREV_NEXT_PRODUCT', 'Tuotteet: ');
define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*Ryhmä ei ole käytössä</span>');
define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*Tuote ei ole käytössä</span>');

// admin demo
define('ADMIN_DEMO_ACTIVE','Ylläpidon esittelytila on käytössä. Jotkin asetukset eivät ole käytössä');
define('ADMIN_DEMO_ACTIVE_EXCLUSION','Ylläpidon esittelytila on käytössä. Jotkin asetukset eivät ole käytössä - <strong>HUOM: Ylläpidon ohitus päällä</strong>');
define('ERROR_ADMIN_DEMO','Ylläpidon esittelytila on käytössä ... jotkin valitsemistasi toiminnoista ovat poissa käytöstä');

// Version Check notices
define('TEXT_VERSION_CHECK_NEW_VER','Uusi versio saatavilla v');
define('TEXT_VERSION_CHECK_NEW_PATCH','Uusi päivitys saatavilla: v');
define('TEXT_VERSION_CHECK_PATCH','päivitys');
define('TEXT_VERSION_CHECK_DOWNLOAD','Lataa täältä');
define('TEXT_VERSION_CHECK_CURRENT','Asennettu Zen Cart&trade; näyttää olevan ajantasalla.');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Näytetään <b>%d</b> to <b>%d</b> (<b>%d</b> downloads)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Latausten hallinta');

define('BOX_CATALOG_FEATURED','Tuotteet esittelyssä');

define('ERROR_NOTHING_SELECTED', 'Et valinnut mitään ... Muutoksia ei tehty');
define('TEXT_STATUS_WARNING','<strong>HUOM:</strong> tila asetetaan automaattisesti päällä/pois kun päivämääriä on asetettu');

define('TEXT_LEGEND_LINKED', 'Linkitetty tuote');
define('TEXT_MASTER_CATEGORIES_ID','Tuotteen todellinen ryhmä:');
define('TEXT_LEGEND', 'LEGEND: ');
define('TEXT_LEGEND_STATUS_OFF', 'Tila: Pois päältä ');
define('TEXT_LEGEND_STATUS_ON', 'Tila: Päällä ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>HUOM: Tuotteen todellinen ryhmä määrittää tuotteen hinnan mikäli tuoteryhmähinnoittelu on käytössä</strong>');
define('TEXT_YES', 'Kyllä');
define('TEXT_NO', 'Ei');
define('TEXT_CANCEL', 'Peruuttaa');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>Toimitusasetuksissa on virheitä!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>Varoitus:</strong> Kaupan postinumeroa ei ole määritelty. Mene Asetukset->Toimitukset/pakkaus ja määritä postinumero.');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>Varoitus:</strong> Ilmaistoimituksen painorajaksi on määritelty 0 ja Ilmaistoimitusmodulia ei ole aktivoitu');
define('ERROR_USPS_STATUS', '<strong>Varoitus:</strong> USPS toimitusmodulista puuttuu joko käyttäjänimi tai se on asetettu TEST -tilaan eikä PRODUCTION -tilaan, eikä se tämän vuoksi toimi<br />Jos et voi noutaa USPS toimituskulu hintoja, ota yhteyttä USPS:n aktivoidaksesi Web Tools tilin tuotantoympäristöpalvelimelta. 1-800-344-7779 tai icustomercare@usps.com');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'HUOM: Et ole ottanut käyttöön yhtään toimitusmodulia. Voit aktivoida toimitusmoduleita menemällä Modulit->Toimitusmodulit.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'HUOM: Et ole ottanut käyttöön yhtään maksumodulia. Voit aktivoida maksumoduleita menemällä Modulit->Maksumodulit.');

// text pricing
define('TEXT_CHARGES_WORD','Laske veloitus:');
define('TEXT_PER_WORD','<br />Hinta per sana: ');
define('TEXT_WORDS_FREE',' Ilmaista sanaa ');
define('TEXT_CHARGES_LETTERS','Laskettu veloitus:');
define('TEXT_PER_LETTER','<br />Hinta per kirjain: ');
define('TEXT_LETTERS_FREE',' Ilmaista kirjainta ');
define('TEXT_ONETIME_CHARGES','*Kertamaksut = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*Kertamaksut = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Ominaisuuksien määräalennus');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','MÃÃRÃ');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','HINTA');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Ominaisuuksien määräalennuksien kertamaksut');
define('TEXT_CATEGORIES_PRODUCTS', 'Valitse ryhmä jossa on tuotteita ... Tai liiku tuotteiden välillä');
define('TEXT_PRODUCT_TO_VIEW', 'Valitse tuote ja paina näytä ...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'Epäkelpo isäntäryhymän ID');
define('TEXT_INFO_ID', ' ID# ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>Varoitus:</strong> Tämä tuote on linkitetty useaan ryhmään mutta sille ei ole asetettu isäntäryhmää!');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Tuote on Kysy hintaa');
define('PRODUCTS_PRICE_IS_FREE_TEXT','Tuote on ilmainen');

define('TEXT_PRODUCT_WEIGHT_UNIT','kg');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'Enintään:');

// Discount Savings
define('PRODUCT_PRICE_DISCOUNT_PREFIX','Säästä:&nbsp;');
define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% pois');
define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;pois');
// Sale Maker Sale Price
define('PRODUCT_PRICE_SALE','Alennus:&nbsp;');

define('TEXT_PRICED_BY_ATTRIBUTES', 'Hinnoiteltu määritteet');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED','Jos käytössä ei ole HTML editoria tai jos JavaScript on poistettu käytöstä, voit syöttää kenttään HTML-koodia suoraan.');
define('TEXT_WARNING_HTML_DISABLED','<span class = "main">Huom: Käytössä on muotoilemattoman (text-only) sähköpostin tuki. Jos haluat lähettää HTML-muotoiltua sähköpostia sinun täytyy asettaa "käytä MIME HTML" päälle sähköpostinasetuksissa</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML','<span class = "main">Huom: Käytössä on muotoilemattoman (text-only) sähköpostin tuki. Jos haluat lähettää HTML-muotoiltua sähköpostia sinun täytyy asettaa "käytä MIME HTML" päälle sähköpostinasetuksissa</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML',"Näet tämän tekstin koska lähetimme sinulle sähköpostin HTML muodossa, mutta sähköpostiohjelmasi ei pysty näyttämään HTML muotoisia sähköposteja.");
define('ENTRY_EMAIL_PREFERENCE','Sähköpostin toimitusmuoto:');
define('ENTRY_EMAIL_FORMAT_COMMENTS','Valinnat "ei koskaan" tai "optout" poistavat KAIKKI sähköpostinlähetykset pois käytöstä, mukaanlukien tilausvahvistuksen.');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','TEXT-Only');
define('ENTRY_EMAIL_NONE_DISPLAY','Ei koskaan');
define('ENTRY_EMAIL_OPTOUT_DISPLAY','Ei uutiskirjettä valinneille');
define('ENTRY_NOTHING_TO_SEND','Viesti ei sisällä yhtään tekstiä');
define('EMAIL_SEND_FAILED','VIRHE: Epäonnistuttiin viestin lähettämisessä osoitteeseen: "%s" <%s> aiheella: "%s"');

define('EDITOR_NONE', 'Pelkkä teksti');
define('TEXT_EDITOR_INFO', 'Tekstinmuokkain');
define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'Olet valinnut HTML-muokkaimen \'Kaupan asetukset\' valikoosa mutta \'/editors/\' hakemistoa ei löydetty. Poista HTML-muokkain käytöstä tai siirrä muokkaimen tiedostot \''.DIR_WS_CATALOG.'editors/\' hakemistoon!');
define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Ryhmien/tuotteiden järjestys: ');
define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Tuotteiden lajittelujärjestys, Tuotteen nimi');
define('TEXT_SORT_PRODUCTS_NAME', 'Tuotteen nimi');
define('TEXT_SORT_PRODUCTS_MODEL', 'Tuotteen malli');
define('TEXT_SORT_PRODUCTS_QUANTITY', 'Tuotteen määrä+, Tuotteen nimi');
define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', 'Tuotteen määrä-, Tuotteen nimi');
define('TEXT_SORT_PRODUCTS_PRICE', 'Tuotteen hinta+, Tuotteen nimi');
define('TEXT_SORT_PRODUCTS_PRICE_DESC', 'Tuotteen hinta-, Tuotteen nimi');
define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', 'Ryhmien lajittelujärjestys, Ryhmän nimi');
define('TEXT_SORT_CATEGORIES_NAME', 'Ryhmän nimi');

define('TEXT_SELECT_MAIN_DIRECTORY', 'Pääkuvahakemisto');

define('TABLE_HEADING_YES','Kyllä');
define('TABLE_HEADING_NO','Ei');
define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br /><strong>Tai kirjoita palvelimella olevan kuvan tiedostonimi:</strong>');
define('TEXT_IMAGES_OVERWRITE', '<br /><strong>Korvaa palvelimella oleva kuva?</strong>');
define('TEXT_IMAGE_OVERWRITE_WARNING','Varoitus: Tiedoston nimi on päivitetty, mutta tiedostoa ei korvattu ');
define('TEXT_IMAGES_DELETE', '<strong>Poista kuva?</strong> HUOM: Poistaa kuvan tuotteelta, mutta ei poista kuvatiedostoa palvelimelta:');
define('TEXT_IMAGE_CURRENT', 'Kuvan nimi: ');

define('ERROR_DEFINE_OPTION_NAMES', 'Varoitus: Yhtään ominaisuuden nimeä ei ole määritelty');
define('ERROR_DEFINE_OPTION_VALUES', 'Varoitus: Yhtään ominaisuuden arvoa ei ole määritelty');
define('ERROR_DEFINE_PRODUCTS', 'Varoitus: Yhtään tuotetta ei ole määritelty');
define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', 'Varoitus: Tälle tuotteelle ei ole asetettu isäntäryhmää');

define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON','Lisää alakansio'); // EI
define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF','Lisää ilman alakansio '); // EI

define('BUTTON_PREVIOUS_ALT','Edellinen tuote');
define('BUTTON_NEXT_ALT','Seuraava tuote');

define('BUTTON_PRODUCTS_TO_CATEGORIES', 'Tuotelinkityksen hallinta');
define('BUTTON_PRODUCTS_TO_CATEGORIES_ALT', 'Kopioi tuote useaan eri ryhmään');

define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', 'Kaikki globaalit kopiointi,lisäys ja poisto -toiminnot ovat poissa käytöstä');
define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', 'Näytä globaalit ominaisuudet');
define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', 'Piilota globaalit ominaisuudet');

// moved from categories and all product type language files
define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Virhe: Tuotetta ei pystytä linkittämään samaan ryhmään.');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Virhe: Kuvahakemistoon ei pysty kirjoittamaan: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Virhe: Kuvahakemistoa ei ole olemassa: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Virhe: Ryhmää ei voi siirtää sen omaan ala-ryhmään.');
define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', 'Virhe: Tuotetta ei voi siirtää uudestaan ryhmään jossa se on tai jossa on kopio siitä.');
define('ERROR_CATEGORY_HAS_PRODUCTS', 'Virhe: Ryhmässä on tuotteita!<br /><br />Vaikka näin voidaan tehdä väliaikaisesti rakentaessa ryhmiä, niin ryhmissä voi olla joko tuotteita tai ryhmiä, mutta ei molempia!');
define('SUCCESS_CATEGORY_MOVED', 'Onnistui! Ryhmä on siirretty ...');
define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', 'Virhe: Tuotetta ei voi siirtää samaan ryhmään! ID#');

// EZ-PAGES Alerts
define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'VAROITUS: EZ-PAGES HEADER - Näytetään vain ylläpitäjän IP-osoitteelle');
define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'VAROITUS: EZ-PAGES FOOTER - Näytetään vain ylläpitäjän IP-osoitteelle');
define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'VAROITUS: EZ-PAGES SIDEBOX - Näytetään vain ylläpitäjän IP-osoitteelle');

// moved from product types
// warnings on Virtual and Always Free Shipping
define('TEXT_VIRTUAL_PREVIEW','Varoitus: Tämä tuote on asetettu tilaan: Ilmainen toimitus ja ohita toimitusosoitteen valinta<br />Toimitustietoja ei kysytä kun kaikki tilatut tuotteet ovat merkattu virtuaalisiksi');
define('TEXT_VIRTUAL_EDIT','Varoitus: Tämä tuote on asetettu tilaan: Ilmainen toimitus ja ohita toimitusosoitteen valinta<br />Toimitustietoja ei kysytä kun kaikki tilatut tuotteet ovat merkattu virtuaalisiksi');
define('TEXT_FREE_SHIPPING_PREVIEW','Varoitus: Tämä tuote on asetettu tilaan: Ilmainen toimitus, toimitusosoite tarvitaan<br />Ilmaistoimitus modulia tarvitaan kun kaikki tilauksen tuotteet ovat asetettu tilaan: Aina ilmainen toimitus');
define('TEXT_FREE_SHIPPING_EDIT','Varoitus: Tämä tuote on asetettu tilaan: Ilmainen toimitus, toimitusosoite tarvitaan<br />Ilmaistoimitus modulia tarvitaan kun kaikki tilauksen tuotteet ovat asetettu tilaan: Aina ilmainen toimitus');

// admin activity log warnings
define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'VAROITUS: Ylläpitäjien seuranta loki tiedostossa on yli kaksi kuukautta vanhoja merkintöjä. Loki tulisi siistiä... ');
define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'VAROITUS: Ylläpitäjien seuranta lokitiedostossa on yli 50000 merkintää. Loki tulisi siistiä... ');
define('RESET_ADMIN_ACTIVITY_LOG', 'Mene Työkalut->Kaupan asetukset ja valitse Tyhjennä ylläpidon seurantaloki');
define('TEXT_ACTIVITY_LOG_ACCESSED', 'Ylläpitäjien loki näytetty. Tulostusmuoto: %s. Suodatin: %s. %s');
define('TEXT_ERROR_FAILED_ADMIN_LOGIN_FOR_USER', 'Epäonnistunut adminin kirjautumisyritys: ');
define('TEXT_ERROR_ATTEMPTED_TO_LOG_IN_TO_LOCKED_ACCOUNT', 'Yrittänyt kirjautua lukittu tilille:');
define('TEXT_ERROR_ATTEMPTED_ADMIN_LOGIN_WITHOUT_CSRF_TOKEN', 'Yritetty kirjautuminen ilman CSRF token.');
define('TEXT_ERROR_ATTEMPTED_ADMIN_LOGIN_WITHOUT_USERNAME', 'Yritä kirjautua sisään ilman käyttäjänimeä.');
define('TEXT_ERROR_INCORRECT_PASSWORD_DURING_RESET_FOR_USER', 'Virheellinen salasana yrittäessäsi salasanan uudelleen: ');


define('CATEGORY_HAS_SUBCATEGORIES', 'HUOM: Ryhmässä on ala-ryhmiä<br />Tuotteita ei voi lisätä');

define('WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN', 'VAROITUS! Tervetuliais sähköpostin alennuskuponki vanhenee %s päivän päästä');

define('WARNING_ADMIN_FOLDERNAME_VULNERABLE', 'VAROITUS: <a href="http://tutorials.zen-cart.com/index.php?article=33" target="_blank">Ylläpitosivun kansio tulisi nimetä joksikin muuksia.</a>');
define('WARNING_EMAIL_SYSTEM_DISABLED', 'VAROITUS: Sähköpostien lähetys on pois päältä.');
define('TEXT_CURRENT_VER_IS', 'Nykyinen versio: ');
define('ERROR_NO_DATA_TO_SAVE', 'VIRHE: Vastaanotettu data oli tyhjää. MUUTOKSIA EI OLE TALLENNETTU! Selaimessasi tai internetyhteydessäsi saattaa olla ongelmia.');
define('TEXT_HIDDEN', 'Piilotettu');
define('TEXT_VISIBLE', 'Näkyvissä');
define('TEXT_HIDE', 'Piillota');
define('TEXT_EMAIL', 'Sähköposti');
define('TEXT_NOEMAIL', 'Ei sähköpostia');

define('BOX_HEADING_PRODUCT_TYPES', 'Tuotetyyppejä');

define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="http://www.zen-cart.com/content.php?334-ERROR-0071-There-appears-to-be-a-problem-with-the-database-Maintenance-is-required" target="_blank">ERROR 0071: Tietokannasta on ongelma. Huoltoa tarvitaan.</a>');

// moved from currencies file:
define('TEXT_INFO_CURRENCY_UPDATED', 'Valuuttakurssi %s (%s) päivitettiin onnistuneesti %s kautta %s.');
define('ERROR_CURRENCY_INVALID', 'Virhe: Valuuttakurssi %s (%s) Ei päivitetty  %s kautta. Onko se voimassa oleva valuuttatunnus?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Varoitus: Ensisijainen valuuttapalvelin (%s) epäonnistui %s (%s) - kokeile toissijaisen valuuttakurssin palvelinta.');


///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'false'));

