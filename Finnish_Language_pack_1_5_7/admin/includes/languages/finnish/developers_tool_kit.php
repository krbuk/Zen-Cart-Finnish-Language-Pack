<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Mon Oct 19 01:39:59 2015 -0400 Modified in v1.5.5 $
 */
// Finnish translation Ver. 1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 
define('HEADING_TITLE', 'Kehittäjän työkalut');
define('TABLE_CONFIGURATION_TABLE', 'Etsi VAKIO määrityksistä');

define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>Valmis</strong> Tuotteiden hintojen lajittelujärjestys päivitetty.');

define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Virhe:</strong> Vastaavia asetusarvoja ei löytynyt...');
define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Virhe:</strong> Hakusanoja ei määritelty. Haku keskeytetty!');

define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Päivitä tuotteiden hintojen lajittelujärjestys:</strong>');

define('TEXT_CONFIGURATION_CONSTANT', '<strong>Etsi VAKIO tai kielitiedostosta</strong>');
define('TEXT_CONFIGURATION_KEY', 'Avain tai nimi:');
define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>Huom:</strong> VAKIOT kirjoitetaan isolla.<br /> Valitse alasvetovalikosta haluatko laajentaa hakua jos hakutuloksia ei löydy tietokannasta. Tällöin hakua laajennetaan kielitiedostoihin, funktioihin, luokkiin ja muuhun lähdekoodiin.');

define('TABLE_TITLE_KEY', '<strong>Avain:</strong>');
define('TABLE_TITLE_TITLE', '<strong>Nimi:</strong>');
define('TABLE_TITLE_DESCRIPTION', '<strong>Kuvaus:</strong>');
define('TABLE_TITLE_GROUP', '<strong>Ryhmä:</strong>');
define('TABLE_TITLE_VALUE', '<strong>Arvo:</strong>');

define('TEXT_LOOKUP_NONE', 'Ei mitään');
define('TEXT_INFO_SEARCHING', 'Etsittiin ');
define('TEXT_INFO_FILES_FOR', ' tiedostoa hakusanalla: ');
define('TEXT_INFO_MATCHES_FOUND', 'Hakutuloksia löytyi: ');
define('TEXT_INFO_FILENAME', 'Tiedostonimi: ');


define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Kauppa - Pääkielitiedostot (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'finnish.php /espanol.php etc.)');
define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Kauppa - Kaikki valitun kielen kielitedostot - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Ylläpito - Kaikki pääkielitiedostot (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'finnish.php /espanol.php etc.)');
define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Ylläpito - Kaikki valitun kielen kielitedostot (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Kaikki valitun kielen kielitiedostot - Kauppa/Ylläpitosivut');

define('TEXT_FUNCTION_CONSTANT', '<strong>Etsi funktioista</strong>');
define('TEXT_FUNCTION_LOOKUPS', 'Funktiotiedostojen haku:');
define('TEXT_FUNCTION_LOOKUP_CURRENT', 'Kaikki funktiotiedostot');
define('TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG', 'Kauppa - Kaikki funktiotiedostot');
define('TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN', 'Ylläpito - Kaikki funktiotiedostot');

define('TEXT_CLASS_CONSTANT', '<strong>Etsi luokkatiedostoista</strong>');
define('TEXT_CLASS_LOOKUPS', 'Luokkien haku:');
define('TEXT_CLASS_LOOKUP_CURRENT', 'Kaikki luokkatiedostot');
define('TEXT_CLASS_LOOKUP_CURRENT_CATALOG', 'Kauppa - Luokkatiedostot');
define('TEXT_CLASS_LOOKUP_CURRENT_ADMIN', 'Ylläpito - Luokkatiedostot');

define('TEXT_TEMPLATE_CONSTANT', '<strong>Etsi asioita ulkoasuista</strong>');
define('TEXT_TEMPLATE_LOOKUPS', 'Ulkoasutiedostojen haku:');
define('TEXT_TEMPLATE_LOOKUP_CURRENT', 'Kaikki ulkoasutiedostot');
define('TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES', 'Templates hakemistosta- /templates');
define('TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES', 'Sideboxes hakemistosta - /sideboxes');
define('TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES', 'Pages hakemistosta- /pages');

define('TEXT_ALL_FILES_CONSTANT', '<strong>Etsi kaikista tiedostoista</strong>');
define('TEXT_ALL_FILES_LOOKUPS', 'Kaikkien tiedostojen haku:');
define('TEXT_ALL_FILES_LOOKUP_CURRENT', 'Kaikki tiedostot');
define('TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG', 'Kauppa');
define('TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN', 'Ylläpito');

define('TEXT_INFO_NO_EDIT_AVAILABLE','Muokkausta ei saatavilla');
define('TEXT_INFO_CONFIGURATION_HIDDEN', ' tai, PIILOTETTU');

define('TEXT_SEARCH_ALL_FILES', 'Etsi kaikista tiedostoista: ');
define('TEXT_SEARCH_DATABASE_TABLES', 'Etsi asetuksia tietokannasta: ');

define('TEXT_ALL_FILESTYPE_LOOKUPS', 'Tiedoston tyyppi');
define('TEXT_ALL_FILES_LOOKUP_PHP', '.php');
define('TEXT_ALL_FILES_LOOKUP_PHPCSS', '.php ja .css');
define('TEXT_ALL_FILES_LOOKUP_CSS', '.css');
define('TEXT_ALL_FILES_LOOKUP_HTMLTXT', '.html ja .txt');
define('TEXT_ALL_FILES_LOOKUP_JS', '.js');

define('TEXT_ALL_FILES_LOOKUP_ALL_TYPES', 'Kaikki');
define('TEXT_CASE_SENSITIVE', 'Huomioi kirjainkoko?');

// v1.5.5
define('TEXT_CONTEXT_LINES', 'Konteksti linjat: ');
define('TEXT_SEARCH_LOOKUP_PLACEHOLDER', 'Anna hakulauseke tai malli');
define('TEXT_SEARCH_KEY_PLACEHOLDER', 'Anna etsimäsi avaimen nimi tai sanaa');
define('TEXT_SEARCH_PHRASE_PLACEHOLDER', 'Anna hakulauseke');
define('TEXT_BUTTON_SEARCH', 'Haku');
define('TEXT_BUTTON_SEARCH_ALT', 'Suorita haku');
define('TEXT_BUTTON_REGEX_SEARCH', 'Grep');
define('TEXT_BUTTON_REGEX_SEARCH_ALT', 'Hae käyttämällä Regex-mallia');
define('TEXT_ERROR_REGEX_FAIL', 'VAROITUS: Haun aikana tapahtui virhe. Jos teit regex / grep-hakua, tarkista regex-mallisi syntaksivirheiden varalta.');

//Search Configuration Keys
define('SEARCH_CFG_KEYS_HEADING_TITLE','<strong>Hae kokoonpanoasetuksista / näppäimistä</strong>');
define('SEARCH_CFG_KEYS_SEARCH_BOX_TEXT', '<strong>Sanonta etsiä:</strong> (Tämä hakee määritysasetusten nimiä ja kuvauksia sekä määritysavaimia, jos ne vastaavat tarkasti)');
define('SEARCH_CFG_KEYS_TABLE_SECTION', 'Osasto');
define('SEARCH_CFG_KEYS_TABLE_GROUP','Ryhmä');
define('SEARCH_CFG_KEYS_TABLE_TITLE', 'Otsikko');
define('SEARCH_CFG_KEYS_TABLE_DESCRIPTION','Kuvaus');
define('SEARCH_CFG_KEYS_TABLE_VALUE','Arvo');
define('SEARCH_CFG_KEYS_TABLE_KEY_NAME', 'Avaimen nimi');
define('SEARCH_CFG_KEYS_TABLE_EDIT','Muokka');
define('SEARCH_CFG_KEYS_NOT_FOUND_KEYS', 'Konfigurointiavaimia ei löytynyt.');
define('SEARCH_CFG_KEYS_FOUND_KEYS', 'kokoonpanoavain löydetty.');
define('SEARCH_CFG_KEYS_FORM_PLACEHOLDER', 'Kirjoita etsittävät sanat kokoonpanoasetuksista');
define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_GROUP', 'Hae');
define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_KEY', 'Haku (lajiteltu avaimen mukaan)');
define('SEARCH_CFG_KEYS_FORM_BUTTON_VIEW_ALL', 'Näytä kaikki (kaikki asetukset)');
define('SEARCH_CFG_KEYS_FORM_BUTTON_RESET', 'Tyhjätä');
define('TEXT_RESET_BUTTON_ALT', 'Tyhjennä kaikki hakukentät aloittaaksesi alusta.');
?>