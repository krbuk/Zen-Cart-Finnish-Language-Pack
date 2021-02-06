<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 Jun 07 Modified in v1.5.7 $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
if (!defined('IS_ADMIN_FLAG'))
{
  die('Illegal Access');
}

define('CONNECTION_TYPE_UNKNOWN', '\'%s\' ei ole kelvollinen yhteystyyppi generoimiseksi URLs' . PHP_EOL . '%s' . PHP_EOL);

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Admin Powered by Zen Cart :: The Art of E-Commerce');
define('HEADER_LOGO_WIDTH', '192');
define('HEADER_LOGO_HEIGHT', '68');
define('HEADER_LOGO_IMAGE', 'logo.gif');

// look in your $PATH_LOCALE/locale directory for available locales..
$locales = ['fi_FI', 'fi_FI.utf8', 'fi'];
@setlocale(LC_TIME, $locales);
define('DATE_FORMAT_SHORT', '%d.%m.%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd.m.Y'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('PHP_DATE_TIME_FORMAT', 'm/d/Y H:i:s'); // this is used for date() calls in some plugins

// for now both defines are needed until Spiffy is completely removed.
define('DATE_FORMAT_SPIFFYCAL', 'dd/MM/yyyy');  //Use only 'dd', 'MM' and 'yyyy' here in any order
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
define('TEXT_ADMIN_TAB_PREFIX', 'Ylläpito');
// if you have multiple stores and want the Store Name to be part of the admin title (ie: for browser tabs), swap this line with the one above
//define('TEXT_ADMIN_TAB_PREFIX', 'Admin ' . STORE_NAME);

// meta tags
define('TEXT_LEGEND_META_TAGS', 'Meta tietoja määritelty:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>NOTE:</strong> Tämä sivun/Tagline on määrittelemäsi määritelmä sivustossasi meta_tags.php tiedosta.');

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
define('BOX_CONFIGURATION_GV_COUPONS', 'Lahjakortit');
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
define('BOX_MODULES_PLUGINS', 'Laajennus hallinta');

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
define('BOX_TOOLS_BANNER_MANAGER', 'Mainosten asetukset');
define('BOX_TOOLS_MAIL', 'Lähetä sähköpostia');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Uutiskirjeiden ja tuoteseurannan asetukset');
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','Define Pages muokkain');
define('BOX_TOOLS_SERVER_INFO', 'Palvelin/Versio tiedot');
define('BOX_TOOLS_WHOS_ONLINE', 'Tämänhetkiset käyttäjät');
define('BOX_TOOLS_STORE_MANAGER', 'Kaupan asetukset');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Kehittäjän työkalut');
define('BOX_TOOLS_SQLPATCH','Asenna SQL päivityksiä');
define('BOX_TOOLS_EZPAGES','EZ-Pages');

define('BOX_HEADING_EXTRAS', 'Extras');

define('BOX_TOOLS_DEFINE_CONDITIONS','Conditions of Use');

// localization box text
define('BOX_HEADING_LOCALIZATION', 'Lokalisaatio');
define('BOX_LOCALIZATION_CURRENCIES', 'Valuutat');
define('BOX_LOCALIZATION_LANGUAGES', 'Kielet');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Tilauksien tilat');

// gift vouchers box text
define('BOX_HEADING_GV_ADMIN', 'Kupongit');
define('BOX_GV_ADMIN_QUEUE',  TEXT_GV_NAMES . ' jono');
define('BOX_GV_ADMIN_MAIL', 'Lähetä ' . TEXT_GV_NAME);
define('BOX_GV_ADMIN_SENT','Lähetetyt ' . TEXT_GV_NAMES . 'it');
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

define('JS_GENDER', '* Sukupuoli täytyy valita.\n');
define('JS_FIRST_NAME', '* Etunimen tulee olla vähintään ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' merkkiä.\n');
define('JS_LAST_NAME', '* Sukunimen tulee olla vähintään ' . ENTRY_LAST_NAME_MIN_LENGTH . ' merkkiä.\n');
define('JS_DOB', '* Syntymäpäivän tulee olla muodossa: xx/xx/xxxx (päivä/kuukausi/vuosi).\n');
define('JS_EMAIL_ADDRESS', '* Sähköpostiosoitteen tulee olla vähintään ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' merkkiä.\n');
define('JS_ADDRESS', '* Kotiosoitteen tulee olla vähintään ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' merkkiä.\n');
define('JS_POST_CODE', '* Postinumeron tulee olla vähintään ' . ENTRY_POSTCODE_MIN_LENGTH . ' merkkiä.\n');
define('JS_CITY', '* Kaupungin nimen tulee olla vähintään ' . ENTRY_CITY_MIN_LENGTH . ' merkkiä.\n');
define('JS_STATE', '* Alue täytyy valita.\n');
define('JS_STATE_SELECT', '-- Valitse yltä --');
define('JS_COUNTRY', '* Valtio pitää valita.\n');
define('JS_TELEPHONE', '* Puhelinnumerossa tulee olla vähintään ' . ENTRY_TELEPHONE_MIN_LENGTH . ' merkkiä.\n');

define('JS_ERROR_SUBMITTED', 'Tämä lomake on jo lähetetty. Paina OK ja odota, että kesittäly on valmis.');

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
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(eg. 25.07.1970)</span>');
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
define('ENTRY_NEWSLETTER', 'Uutiskirje:');
define('ENTRY_NEWSLETTER_YES', 'Tilattu');
define('ENTRY_NEWSLETTER_NO', 'Ei tilattu');

define('ERROR_PASSWORDS_NOT_MATCHING', 'Salasanan ja salasanan vahvistuksen täytyy täsmätä');
define('ENTRY_PASSWORD_CHANGE_ERROR', '<strong>Uusi salasana hylätty.</strong><br>');
define('ERROR_PASSWORD_RULES', 'Salasanan on sisällettävä kirjaimia sekä numeroita, ja sen on oltava vähintään %s merkkiä pitkä. Salasana ei saa myöskään olla sama jota olet käyttänyt aikaisemmin (4 edellistä salasanaa). Salasana vanhenee 90 päivässä.');
define('ERROR_TOKEN_EXPIRED_PLEASE_RESUBMIT', 'VIRHE: Tietojen käsittelyssä tapahtui virhe. Lähetä tiedot uudelleen.');

// images
//define('IMAGE_ANI_SEND_EMAIL', 'Sending E-Mail');
define('IMAGE_BACK', 'Takaisin');
define('IMAGE_CANCEL', 'Peruuta');
define('IMAGE_CONFIRM', 'Hyväksy');
define('IMAGE_COPY', 'Kopioi');
define('IMAGE_COPY_TO', 'Kopioi kohteeseen');
define('IMAGE_DETAILS', 'Yksityiskohdat');
define('IMAGE_DELETE', 'Poista');
define('IMAGE_EDIT', 'Muokkaa');
define('IMAGE_EMAIL', 'Sähköposti');
define('IMAGE_GO', 'jatka');
define('IMAGE_ICON_STATUS_GREEN', 'Aktivoi');
define('IMAGE_ICON_STATUS_RED', 'Passiivinen');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Aseta passiiviseksi');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'Virhe -- liian monta URL/content types määritelty');
define('IMAGE_ICON_INFO', 'Info');
define('IMAGE_INSERT', 'Lisää');
define('IMAGE_MODULE_INSTALL', 'Asenna moduuli');
define('IMAGE_MODULE_REMOVE', 'Poista moduuli');
define('IMAGE_MOVE', 'Siirrä');
define('IMAGE_NEW_BANNER', 'Uusi mainos');
define('IMAGE_NEW_CATEGORY', 'Uusi ryhmä');
define('IMAGE_NEW_COUNTRY', 'Uusi valtio');
define('IMAGE_NEW_CURRENCY', 'Uusi valuutta');
define('IMAGE_NEW_LANGUAGE', 'Uusi kieli');
define('IMAGE_NEW_NEWSLETTER', 'Uusi uutiskirje');
define('IMAGE_NEW_PRODUCT', 'Uusi tuote');
define('IMAGE_NEW_SALE', 'Uusi alennus');
define('IMAGE_NEW_TAX_CLASS', 'Uusi verokanta');
define('IMAGE_NEW_TAX_RATE', 'Uusi veroarvo');
define('IMAGE_NEW_ZONE', 'Uusi alue');
define('IMAGE_OPTION_NAMES', 'Ominaisuuksien nimien hallinta');
define('IMAGE_OPTION_VALUES', 'Ominaisuuksien arvojen hallinta');
define('IMAGE_ORDERS', 'Tilaukset');
define('IMAGE_ORDERS_INVOICE', 'Lasku');
define('IMAGE_ORDERS_PACKINGSLIP', 'Tilausvahvistus');
define('IMAGE_PREVIEW', 'Esikatsele');
define('IMAGE_RESET', 'Tyhjennä');
define('IMAGE_RESET_PWD', 'Vaihda salasana');
define('IMAGE_SAVE', 'Tallenna');
define('IMAGE_SELECT', 'Valitse');
define('IMAGE_SEND', 'Lähetä');
define('IMAGE_SEND_EMAIL', 'Lähetä sähköposti');
define('IMAGE_SUBMIT', 'Lähetä');
define('IMAGE_UPDATE', 'Päivitä');
define('IMAGE_UPDATE_CURRENCIES', 'Päivitä vaihtokurssit');
define('IMAGE_UPLOAD', 'Lataa palvelimelle');
define('IMAGE_TAX_RATES','Veroarvot');
define('IMAGE_DEFINE_ZONES','Määritä alueet');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Tuotehintojen hallinta');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Päivitä hinnanmuutokset');
define('IMAGE_ADD_BLANK_DISCOUNTS','Lisää ' . DISCOUNT_QTY_ADD . ' tyhjä alennusmäärä');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Usean ryhmän linkkien hallinta');

define('IMAGE_ICON_STATUS_ON', 'Tila - päällä');
define('IMAGE_ICON_STATUS_OFF', 'Tila - poispäältä');
define('IMAGE_ICON_LINKED', 'Tuote on linkitetty');

define('IMAGE_REMOVE_SPECIAL','Poista tarjoushintatiedot');
define('IMAGE_REMOVE_FEATURED','Poista esittelyssä olevan tuotteen tiedot');
define('IMAGE_INSTALL_SPECIAL', 'Lisää tarjoushintatieto');
define('IMAGE_INSTALL_FEATURED', 'Lisää esittelyssä olevan tuotteen tiedot');

define('TEXT_VERSION_CHECK_BUTTON', 'Tarkista uusi versio');
define('TEXT_BUTTON_RESET_ACTIVITY_LOG', 'Näytä toimintaloki');

define('ICON_COPY_TO', 'Kopioi kohteeseen');
define('ICON_CROSS', 'Epätosi');
define('ICON_DELETE', 'Poista');
define('ICON_EDIT', 'Muokkaa');
define('ICON_EDIT_METATAGS', 'Muokkaa Meta Tunnisteet');
define('ICON_ERROR', 'Virhe');
define('ICON_FOLDER', 'Hakemisto');
define('ICON_MOVE', 'Siirrä');
define('ICON_PREVIEW', 'Esikatsele');
define('ICON_STATISTICS', 'Tilastot');
define('ICON_SUCCESS', 'Onnistui');
define('ICON_TICK', 'Tosi');
//define('ICON_UNLOCKED', 'Unlocked');
define('ICON_WARNING', 'Varoitus');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'Sivu %s / %d');
define('TEXT_DISPLAY_NUMBER_OF_GENERIC', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> sisäänkäyntystä)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> mainoksesta)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> ryhmästä)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> valtiosta)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> asiakkaasta)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> valuutasta)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> esiteltävästä tuotteesta)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> kielestä)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> valmistajasta)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> uutiskirjeestä)');
define('TEXT_DISPLAY_NUMBER_OF_OPTIONS', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> Vaihtoehtojen nimestä)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> tilauksesta)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> tilauksen tilasta)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> hinnoitteluryhmästä)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> tuotteesta)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> tuote tyypistä)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> odotetuista tuotteista)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> tuotearvostelusta)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> alennuksesta)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> tarjoustuotteesta)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> verokannasta)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> ulkoasujen yhteydestä)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> veroalueesta)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> veroarvosta)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Näytetään <b>%d</b> - <b>%d</b> (/ <b>%d</b> alueesta)');

define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Edellinen sivu');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Seuraava sivu');
define('PREVNEXT_TITLE_PAGE_NO', 'Sivu %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Edelliset sivu %d');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Seuraavat sivu %d');
define('PREVNEXT_BUTTON_PREV', '[&laquo;&nbsp;]');
define('PREVNEXT_BUTTON_NEXT', '[&nbsp;&raquo;]');

define('TEXT_DEFAULT', 'oletus');
define('TEXT_SET_DEFAULT', 'Aseta oletukseksi');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">*</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Virhe: Oletusvaluuttaa ei ole määritetty. Määritä oletusvaluutta menemällä: Ylläpidon työkalut->Lokalisointi->Valuutat');

define('TEXT_NONE', '--none--');
define('TEXT_TOP', 'Ylös');
define('PLEASE_SELECT', 'Valitse ...');
define('TEXT_CUSTOMER','Asiakas');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Virhe: Kohdetta ei ole olemassa %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Virhe: Kohteeseen ei pystytty kirjoittamaan %s');
define('ERROR_FILE_NOT_SAVED', 'Virhe: Palvelimelle ladattua tiedostoa ei pystytty tallentamaan.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Virhe: Tiedoston tyyppiä ei hyväksytty (%s). Katso &quot;maksimiarvot&quot; asetukset.');
define('ERROR_FILE_TOO_BIG', 'Varoitus: Tiedosto on suurempi kuin sallitut koot. Katso Kuvan &quot;maksimiarvot&quot; asetukset.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Onnistui: Palvelimelle ladattu tiedosto tallennettu %s');
define('WARNING_NO_FILE_UPLOADED', 'Varoitus: Tiedostoa ei ladattu palvelimelle.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Virhe: Tiedostojen lataus palvelimelle on estetty php.ini tiedostossa.');
define('ERROR_ADMIN_SECURITY_WARNING', 'Varoitus: Ylläpitotunnuksesi ei ole turvallinen ... Joko sinulla on yhä oletus asetukset ylläpitäjän tunnukselle: Admin admin tai et ole poistanut tai muuttanut esittelyasetusta: demo demoonly<br>Kirjautumistunnus (tunnukset) muuttaa välittömästi turvallisuussyistä verkkokaupan turvallisuuden kannalta.');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','Tietokanta näyttää tarvitsevan korjausta korkeammalle tasolle. Katso kohdasta Työkalut-> ' . BOX_TOOLS_SERVER_INFO . ' jos haluat tarkistaa korjaustason.');
define('WARN_DATABASE_VERSION_PROBLEM','true'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>Varoitus:</strong> ivusto on asetettu "Huoltokatkos" -tilaan ...<br />HUOM: Et voi testata maksu- ja toimitusmoduuleja sivun ollessa huoltokatkos -tilassa');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'TURVALLISUUSVAROITUS: Asennushakemisto on olemassa osoitteessa: %s. Poista tämä kansio turvallisuussyistä.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Varoitus: Sivun asetustiedosto: %s on luku/kirjoitus tilassa. tämä on turvallisuusriski! - Aseta tiedosto vain-luku tilaan (read-only, CHMOD 644 tai 444 yleensä). Sinun on ehkä käytettävä verkkopalvelimen ohjauspaneelia / tiedostojen hallintaa, jotta käyttöoikeuksia muutetaan tehokkaasti. Ota yhteyttä verkkopalveluun. <a href="https://docs.zen-cart.com/user/miscellaneous/configure/" rel="noopener" target="_blank">Lue lisää aiheesta</a>');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', 'VAROITUS: Kielitiedostoa ei löytynyt: ');
define('ERROR_MODULE_REMOVAL_PROHIBITED', 'VIRHE: Modulin poisto kielletty: ');
define('WARNING_REVIEW_ROGUE_ACTIVITY', 'HUOMIO: Tarkastele mahdollisen XSS aktiviteetin varalta:');

define('ERROR_FILE_NOT_REMOVEABLE', 'Virhe: Määritettyä tiedostoa ei voitu poistaa. Voit joutua käyttämään FTP-tiedostoa tiedostojen poistamiseen palvelimen käyttöoikeuksien määritysrajoituksen vuoksi.');
define('ERROR_DIRECTORY_NOT_REMOVEABLE', 'Virhe: Määritettyä hakemistoa ei voitu poistaa. Voit joutua käyttämään FTP-hakemiston poistamiseen palvelimen käyttöoikeuksien määritysrajoituksen vuoksi.');
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
define('_JUNE', 'Kesäkuu'); 
define('_JULY', 'Heinäkuu');
define('_AUGUST', 'Elokuu');
define('_SEPTEMBER', 'Syyskuu');
define('_OCTOBER', 'Lokakuu');
define('_NOVEMBER', 'Marraskuu');
define('_DECEMBER', 'Joulukuu');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> lahjakortista)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Näytetään <b>%d</b> - <b>%d</b> (<b>%d</b> kupongista)');

define('TEXT_VALID_CATEGORIES_ID', 'Tuoteryhmän ID');

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
  define('TEXT_PRODUCTS_MODEL', 'Tuotemalli:');
  define('TABLE_HEADING_PRODUCTS_MODEL','Malli');
  define('TABLE_HEADING_MODEL', 'Malli');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER','Sivulaatikoiden hallinta');

// check GV release queue and alert store owner
  define('TEXT_SHOW_GV_QUEUE','%s odottaa hyväksymistä ');
  define('IMAGE_GIFT_QUEUE', TEXT_GV_NAME . ' Jono');
  define('IMAGE_ORDER','Tilaus');

  define('IMAGE_DISPLAY','Näytä');
  define('IMAGE_EDIT_PRODUCT','Muokkaa tuotetta');
  define('IMAGE_EDIT_ATTRIBUTES','Muokkaa ominaisuuksia');
  define('TEXT_NEW_PRODUCT', 'Tuote on ryhmässä: %s');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', 'Vähennä määrä');
  define('DEDUCTION_TYPE_DROPDOWN_1', 'Prosentti');
  define('DEDUCTION_TYPE_DROPDOWN_2', 'Uusi hinta');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Vähintään:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Yksikköä:');

  define('TEXT_PRODUCTS_MIX_OFF','*Sekoitus pois päältä');
  define('TEXT_PRODUCTS_MIX_ON','*Sekoitus päällä');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','Haun suodatin: ');
  define('HEADING_TITLE_SEARCH_DETAIL','Haku: ');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Etsi tuotteita - Erittele pilkulla');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Hae tuotteita nimellä/mallilla');

  define('PREV_NEXT_PRODUCT', 'Tuotteet: ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*Category is Disabled</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*Product is Disabled</span>');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER','<span class="alertVersionNew">New Version Available:</span> v');
  define('TEXT_VERSION_CHECK_NEW_PATCH','<span class="alertVersionNew">New PATCH Available:</span> v');
  define('TEXT_VERSION_CHECK_PATCH','patch');
  define('TEXT_VERSION_CHECK_DOWNLOAD','Download Here');
  define('TEXT_VERSION_CHECK_CURRENT','Your version of Zen Cart&reg; appears to be current.');
  define('ERROR_CONTACTING_PROJECT_VERSION_SERVER','Error: Could not contact Project Version Server');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Näytetään <b>%d</b> to <b>%d</b> (of <b>%d</b> Downloads)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Downloads Manager');

define('BOX_CATALOG_FEATURED','Featured Products');

define('ERROR_NOTHING_SELECTED', 'Nothing was selected ... No changes have been made');
define('TEXT_STATUS_WARNING','<strong>NOTE:</strong> status is auto enabled/disabled when dates are set');

define('TEXT_LEGEND_LINKED', 'Linked Product');
define('TEXT_MASTER_CATEGORIES_ID','Product Master Category:');
define('TEXT_LEGEND', 'LEGEND: ');
define('TEXT_LEGEND_STATUS_OFF', 'Status OFF ');
define('TEXT_LEGEND_STATUS_ON', 'Status ON ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>NOTE: Master Category is used for pricing purposes where the product category affects the pricing on linked products, example: Sales</strong>');
define('TEXT_YES', 'Yes');
define('TEXT_NO', 'No');
define('TEXT_CANCEL', 'Cancel');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>Shipping Configuration errors!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>Warning:</strong> Store Zip Code is not defined. See Configuration | Shipping/Packaging to set it.');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>Warning:</strong> 0 weight is configured for Free Shipping and Free Shipping Module is not enabled');
define('ERROR_USPS_STATUS', '<strong>Warning:</strong> USPS shipping module is either missing the username, or it is set to TEST rather than PRODUCTION and will not work.<br>If you cannot retrieve USPS Shipping Quotes, contact USPS to activate your Web Tools account on their production server. 1-800-344-7779 or icustomercare@usps.com');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'NOTE: You have no shipping modules activated. Please go to Modules->Shipping to configure.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'NOTE: You have no payment modules activated. Please go to Modules->Payment to configure.');

// text pricing
define('TEXT_CHARGES_WORD','Calculated Charge:');
define('TEXT_PER_WORD','<br>Price per word: ');
define('TEXT_WORDS_FREE',' Word(s) free ');
define('TEXT_CHARGES_LETTERS','Calculated Charge:');
define('TEXT_PER_LETTER','<br>Price per letter: ');
define('TEXT_LETTERS_FREE',' Letter(s) free ');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','QTY');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRICE');
define('TEXT_CATEGORIES_PRODUCTS', 'Select a Category with products (indicated by an asterisk) / move between the products');
define('TEXT_PRODUCT_TO_VIEW', 'Select a Product to View and Press Display ...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'Invalid Master Category ID');
define('TEXT_INFO_ID', ' ID# ');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Product is Call for Price');
define('PRODUCTS_PRICE_IS_FREE_TEXT','Product is Free');

define('TEXT_PRODUCT_WEIGHT_UNIT','lbs');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'Max:');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Save:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% off');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;off');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Sale:&nbsp;');

define('TEXT_PRICED_BY_ATTRIBUTES', 'Priced by Attributes');

// Rich Text / HTML resources
define('TEXT_WARNING_HTML_DISABLED','<span class = "main">Note: You are using TEXT only email. If you would like to send HTML you need to enable "Enable HTML Emails" under Email Options</span>');
define('ENTRY_EMAIL_PREFERENCE','Email Format Pref:');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','TEXT-Only');
define('ENTRY_NOTHING_TO_SEND','You haven\'t entered any content for your message');
define('EMAIL_SEND_FAILED','ERROR: Failed sending email to: "%s" <%s> with subject: "%s"');
define('EMAIL_SALUTATION', 'Dear');

  define('EDITOR_NONE', 'Plain Text');
  define('TEXT_EDITOR_INFO', 'Text Editor');
  define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'You have an HTML editor selected in \'My Store\' but the \'/editors/\' folder cannot be located. Please disable your selection or move your editor files into the \''.DIR_WS_CATALOG.'editors/\' folder');

define('TEXT_PRODUCT_POPUP_BUTTON', '<i class="fa fa-commenting"></i>');
define('TEXT_PRODUCT_POPUP_TITLE', 'Products Ordered');

  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Categories/Product Display Order: ');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Products Sort Order, Products Name');
  define('TEXT_SORT_PRODUCTS_NAME', 'Products Name');
  define('TEXT_SORT_PRODUCTS_MODEL', 'Products Model');
  define('TEXT_SORT_PRODUCTS_QUANTITY', 'Products Qty+, Products Name');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', 'Products Qty-, Products Name');
  define('TEXT_SORT_PRODUCTS_PRICE', 'Products Price+, Products Name');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', 'Products Price-, Products Name');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', 'Categories Sort Order, Categories Name');
  define('TEXT_SORT_CATEGORIES_NAME', 'Categories Name');

  define('TABLE_HEADING_YES','Yes');
  define('TABLE_HEADING_NO','No');
  define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br><strong>Or, use an existing image file from server, filename:</strong>');
  define('TEXT_IMAGES_OVERWRITE', '<br><strong>Overwrite Existing Image on Server?</strong>');
  define('TEXT_IMAGE_OVERWRITE_WARNING','WARNING: FILENAME was updated but not overwritten ');
  define('TEXT_IMAGES_DELETE', '<strong>Remove Image?</strong> Note: Removes image from product (image is NOT deleted/removed from server):');
  define('TEXT_IMAGE_CURRENT', 'Image Name: ');
  define('TEXT_IMAGE_NONEXISTENT', 'IMAGE FILE IS MISSING');

  define('ERROR_DEFINE_OPTION_NAMES', 'Warning: No Option Names have been defined');
  define('ERROR_DEFINE_OPTION_VALUES', 'Warning: No Option Values have been defined');
  define('ERROR_DEFINE_PRODUCTS', 'Warning: No Products have been defined');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', 'Warning: No Master Category ID has been set for this Product');

  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON','Add include SubCategories');
  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF','Add without SubCategories');

  define('BUTTON_PREVIOUS_ALT','Previous Product');
  define('BUTTON_NEXT_ALT','Next Product');

  define('BUTTON_PRODUCTS_TO_CATEGORIES', 'Multiple Categories Link Manager');

  define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', 'All Global Copy, Add and Delete Features Status is currently OFF');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', 'Display Global Features - ON');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', 'Display Global Features - OFF');
// moved from categories and all product type language files
  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Error: a linked product cannot be created in the same category.');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: Catalog images directory is not writeable: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: Catalog images directory does not exist: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Error: Category cannot be moved into a child category.');
  define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', 'Error: Cannot move product to the same category or into a category where it already exists.');
  define('ERROR_CATEGORY_HAS_PRODUCTS', 'Error: Category has Products!<br><br>While this can be done temporarily to build your Categories ... Categories hold either Products or Categories but never both!');
  define('SUCCESS_CATEGORY_MOVED', 'Success! Category has successfully been moved ...');
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', 'Error: Cannot move Category to the same Category! ID#');

// messages for function zen_copy_products_attributes
  define('WARNING_ATTRIBUTE_COPY_SAME_ID','Warning: Attribute Copy aborted. Cannot copy from Product ID#%u to Product ID#%u (same ID).');
  define('WARNING_ATTRIBUTE_COPY_NO_ATTRIBUTES','Warning: Attribute Copy aborted. No Attributes found for source Product ID#%u, "%s".');
  define('WARNING_ATTRIBUTE_COPY_INVALID_ID','Warning: Attribute Copy to Product ID#%u aborted. Invalid ID');
  define('TEXT_ATTRIBUTE_COPY_SKIPPING','Skipping Attribute ID#%u for Product ID#%u');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','Attribute ID#%u copied from Product ID#%u to Product ID#%u');
  define('TEXT_ATTRIBUTE_COPY_UPDATING', 'Attribute ID#%u updated for Product ID#%u');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'WARNING: EZ-PAGES HEADER - On for Admin IP Only');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'WARNING: EZ-PAGES FOOTER - On for Admin IP Only');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'WARNING: EZ-PAGES SIDEBOX - On for Admin IP Only');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW','Warning: This product is marked - Free Shipping and Skips Shipping Address<br>No shipping will be requested when all products in the order are Virtual Products');
  define('TEXT_VIRTUAL_EDIT','Warning: This product is marked - Free Shipping and Skips Shipping Address<br>No shipping will be requested when all products in the order are Virtual Products');
  define('TEXT_FREE_SHIPPING_PREVIEW','Warning: This product is marked - Free Shipping, Shipping Address Required<br>Free Shipping Module is required when all products in the order are Always Free Shipping Products');
  define('TEXT_FREE_SHIPPING_EDIT','Warning: Yes makes the product - Free Shipping, Shipping Address Required<br>Free Shipping Module is required when all products in the order are Always Free Shipping Products');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'WARNING: The Admin Activity Log table has records over 2 months old and should be archived to conserve space ... ');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'WARNING: The Admin Activity Log table has over 50,000 records and should be archived to conserve space ... ');
  define('RESET_ADMIN_ACTIVITY_LOG', 'You can view and archive Admin Activity details via the Admin Access Management menu, if you have appropriate permissions.');
  define('TEXT_ACTIVITY_LOG_ACCESSED', 'Admin Activity Log accessed. Output format: %s. Filter: %s. %s');
  define('TEXT_ERROR_FAILED_ADMIN_LOGIN_FOR_USER', 'Failed admin login attempt: ');
  define('TEXT_ERROR_ATTEMPTED_TO_LOG_IN_TO_LOCKED_ACCOUNT', 'Attempted to log into locked account:');
  define('TEXT_ERROR_ATTEMPTED_ADMIN_LOGIN_WITHOUT_CSRF_TOKEN', 'Attempted login without CSRF token.');
  define('TEXT_ERROR_ATTEMPTED_ADMIN_LOGIN_WITHOUT_USERNAME', 'Attempted login without username.');
  define('TEXT_ERROR_INCORRECT_PASSWORD_DURING_RESET_FOR_USER', 'Incorrect password while attempting a password reset for: ');


  define('CATEGORY_HAS_SUBCATEGORIES', 'NOTE: Category has SubCategories<br>Products cannot be added');

  define('WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN', 'WARNING! Welcome Email Discount Coupon expires in %s days');

define('WARNING_EMAIL_SYSTEM_DISABLED', 'WARNING: The email subsystem is disabled. No emails will be sent until it is re-enabled in Admin->Configuration->Email Options.');
define('WARNING_EMAIL_SYSTEM_DEVELOPER_OVERRIDE', 'WARNING: The sending of emails has been disabled as developer switch "DEVELOPER_OVERRIDE_EMAIL_STATUS" is set to "false".');
define('WARNING_EMAIL_SYSTEM_DEVELOPER_EMAIL', 'WARNING: ALL emails will be sent to %s (as defined in "DEVELOPER_OVERRIDE_EMAIL_ADDRESS").');
define('TEXT_CURRENT_VER_IS', 'You are presently using: ');
define('ERROR_NO_DATA_TO_SAVE', 'ERROR: The data you submitted was found to be empty. YOUR CHANGES HAVE *NOT* BEEN SAVED. You may have a problem with your browser or your internet connection.');
define('TEXT_HIDDEN', 'Hidden');
define('TEXT_VISIBLE', 'Visible');
define('TEXT_HIDE', 'Hide');
define('TEXT_EMAIL', 'Email');
define('TEXT_NOEMAIL', 'No Email');

define('BOX_HEADING_PRODUCT_TYPES', 'Product Types');

define('ERROR_DATABASE_MAINTENANCE_NEEDED', '<a href="https://docs.zen-cart.com/user/troubleshooting/error_71_maintenance_required/" rel="noopener" target="_blank">ERROR 0071 There appears to be a problem with the database. Maintenance is required.</a>');

// moved from currencies file:
define('TEXT_INFO_CURRENCY_UPDATED', 'The exchange rate for %s (%s) was updated successfully to %s via %s.');
define('ERROR_CURRENCY_INVALID', 'Error: The exchange rate for %s (%s) was not updated via %s. Is it a valid currency code?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Warning: The primary exchange rate server (%s) failed for %s (%s) - trying the secondary exchange rate server.');

// Set to empty string if alpha sorting not desired
define('MENU_CATEGORIES_TO_SORT_BY_NAME','reports,tools'); 

// Plugins
define('PLUGIN_INSTALL_SQL_FAILURE', 'one or more database errors occured');

// ARIA Stuff

define('ARIA_PAGINATION_ROLE_LABEL_GENERAL','Pagination');
define('ARIA_PAGINATION_ROLE_LABEL_FOR','%s Pagination'); // eg: "Search results Pagination"
define('ARIA_PAGINATION_PREVIOUS_PAGE','Go to Previous Page');
define('ARIA_PAGINATION_NEXT_PAGE','Go to Next Page');
define('ARIA_PAGINATION_CURRENT_PAGE','Current Page');
define('ARIA_PAGINATION_CURRENTLY_ON',', now on page %s');
define('ARIA_PAGINATION_GOTO','Go to ');
define('ARIA_PAGINATION_PAGE_NUM','Page %s');
define('ARIA_PAGINATION_ELLIPSIS_PREVIOUS','Get previous group of pages');
define('ARIA_PAGINATION_ELLIPSIS_NEXT','Get next group of pages');
define('ARIA_PAGINATION_','');

///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . "/" . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES));
