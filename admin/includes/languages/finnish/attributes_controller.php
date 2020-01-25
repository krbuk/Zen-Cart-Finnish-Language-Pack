<?php
/**
 * @package admin
 * @copyright Copyright 2003-2010 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2019 Jan 24 Modified in v1.5.6b $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.6b by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>

define('HEADING_TITLE', 'KATAGORIA: ');

define('HEADING_TITLE_OPT', 'Tuotteen ominaisuudet');
define('HEADING_TITLE_VAL', 'Ominaisuuden arvot');
define('HEADING_TITLE_ATRIB', 'Ominaisuuksien hallinta');
define('HEADING_TITLE_ATRIB_SELECT','Valitse tuote jonka ominaisuuksia haluat katsoa ...');

define('TEXT_PRICES_AND_WEIGHTS', 'Hinnat ja painot');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR', 'Hintakerroin: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET', 'Erotus: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_ONETIME', 'Kertamaksu:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_ONETIME', 'Kertamaksun erotus: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET_ONETIME', 'Erotus: ');

define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES', 'Ominaisuuden määräalennus:');
define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES_ONETIME', 'Ominaisuuden kertamaksun määräalennus:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS', 'Hinta per sana:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS_FREE', '- Ilmaista sanaa:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS', 'Hinta per kirjain:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS_FREE', '- Ilmaista kirjainta:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Tuotteen nimi');
define('TABLE_HEADING_OPT_NAME', 'Ominaisuuden nimi');
define('TABLE_HEADING_OPT_VALUE', 'Ominaisuuden arvo');
define('TABLE_HEADING_OPT_PRICE', 'Hinta');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Etuliite');
define('TABLE_HEADING_ACTION', 'Toiminto');
define('TABLE_HEADING_DOWNLOAD', 'Ladattavat tuotteet:');
define('TABLE_TEXT_FILENAME', 'Tiedostonimi:');
define('TABLE_TEXT_MAX_DAYS', 'Päivää voimassa:');
define('TABLE_TEXT_MAX_COUNT', 'Latauksia enintään:');
define('TABLE_HEADING_OPT_DISCOUNTED','Alennus');
define('TABLE_HEADING_PRICE_BASE_INCLUDED','Pohja');
define('TABLE_HEADING_PRICE_TOTAL','Yhteensä|Disc: Onetime:');
define('TEXT_WARNING_OF_DELETE', 'Tähän ominaisuuteen on liitetty tuotteita ja arvoja - sen poistaminen ei ole turvallista.');
define('TEXT_OK_TO_DELETE', 'Tähän ominaisuuteen ei ole liitetty tuotteita tai arvoja - se voidaan poistaa turvallisesti.');
define('TEXT_OPTION_ID', 'Ominaisuuden ID');
define('TEXT_OPTION_NAME', 'Ominaisuuden nimi');

define('ATTRIBUTE_WARNING_DUPLICATE','Ominaisuus on jo olemassa - Ominaisuutta ei lisätty'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Ominaisuus on jo olemassa - Ominaisuutta ei muutettu'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','Ominaisuuden vaihtoehdon tyyppi ja ominaisuuden arvo eivät täsmää - Omianisuutta ei lisätty'); // miss matched value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Ominaisuuden vaihtoehdon tyyppi ja ominaisuuden arvo eivät täsmää - Ominaisuutta ei muutettu'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Ominaisuuden nimi lisätty mahdollisesti kahteen kertaan'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Ominaisuuden arvo lisätty mahdollisesti kahteen kertaan'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','MUOKKA'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','POISTAA'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','LISÄÄ OMINAISUUDEN'); // title
define('TEXT_DOWNLOADS_DISABLED','HUOM: Lataukset on poistettu käytöstä');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Päivää:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Enintään:');

define('TABLE_HEADING_OPTION_SORT_ORDER','Lajittelujärjestys');
define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Oletusjärjestys');
define('TEXT_SORT',' Järjestys: ');

define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Etuliite');
define('TABLE_HEADING_OPT_WEIGHT','Paino');
define('TABLE_HEADING_OPT_SORT_ORDER','Järjestys');
define('TABLE_HEADING_OPT_DEFAULT','Oletus');

define('TABLE_HEADING_OPT_TYPE', 'Ominaisuuden tyyppi'); //CLR 031203 add option type column
define('TABLE_HEADING_OPTION_VALUE_SIZE','Koko');
define('TABLE_HEADING_OPTION_VALUE_MAX','Enintään');
define('TABLE_HEADING_OPTION_VALUE_ROWS','Riviä');
define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Kommentit');

define('TEXT_OPTION_VALUE_COMMENTS','Kommentit: ');
define('TEXT_OPTION_VALUE_SIZE','Näyttökoko: ');
define('TEXT_OPTION_VALUE_MAX','Maksimipituus: ');

define('TEXT_ATTRIBUTES_IMAGE','Ominaisuuden kuva:');
define('TEXT_ATTRIBUTES_IMAGE_DIR','Ominaisuuden kuvan hakemisto:');

define('TEXT_ATTRIBUTES_FLAGS','Ominaisuuden<br />asetukset:');
define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Käytetään vain<br />Näytön tarkoituksiin:');
define('TEXT_ATTRIBUTES_IS_FREE', 'Ominaisuus on ilmainen<br />kun tuote on ilmainen:');
define('TEXT_ATTRIBUTES_DEFAULT', 'Oletusominaisuus<br />joka merkataan valituksi:');
define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Tuotteen alennus koskee<br />myös ominaisuutta:');
define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Sisällytä perushinnassa kun<br />tuote hinnoitellaan ominaisuuksilla');
define('TEXT_ATTRIBUTES_REQUIRED','Ominaisuutta tarvitaan<br />tekstiä varten:');

define('LEGEND_BOX','Selitteet:');
define('LEGEND_KEYS','POIS/PÄÄLLÄ');
define('LEGEND_ATTRIBUTES_DISPLAY_ONLY', 'Vain näyttöä varten');
define('LEGEND_ATTRIBUTES_IS_FREE', 'Ilmainen');
define('LEGEND_ATTRIBUTES_DEFAULT', 'Oletus');
define('LEGEND_ATTRIBUTE_IS_DISCOUNTED', 'Alennettu');
define('LEGEND_ATTRIBUTE_PRICE_BASE_INCLUDED','Pohjahinta');
define('LEGEND_ATTRIBUTES_REQUIRED','Pakollinen');
define('LEGEND_ATTRIBUTES_IMAGES','Kuva');
define('LEGEND_ATTRIBUTES_DOWNLOAD','Hyväksytty/ei hyväksytty<br />tiedostonimi');

define('TEXT_ATTRIBUTES_UPDATE_SORT_ORDER','JÄRJESTELYT');
define('TEXT_PRODUCTS_LISTING','Tiedot tuotteelle: ');
define('TEXT_NO_PRODUCTS_SELECTED','Yhtään tuotetta ei ole valittu');
define('TEXT_NO_ATTRIBUTES_DEFINED','Yhtään ominaisuutta ei ole määritelty tuotteelle ID#');

define('TEXT_PRODUCTS_ID','Tuotteen ID#');
define('TEXT_ATTRIBUTES_DELETE','POISTA KAIKKI');
define('TEXT_ATTRIBUTES_COPY_PRODUCTS','Kopioi tuotteeseen');
define('TEXT_ATTRIBUTES_COPY_CATEGORY','Kopioi ryhmään');

define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Ominaisuuden muutokset tuotteelle ID# ');
define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Poista <strong>KAIKKI</strong> ominaisuudet tuotteelta:<br />');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Kopioi ominaisuudet toiseen tuotteeseen tai kokonaiseen ryhmään tuotteesta:<br />');

define('TEXT_ATTRIBUTES_COPY_TO_PRODUCTS','TUOTE');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Kopioi ominaisuudet toiseen <strong>tuotteeseen</strong> tuotteesta ID#');
define('TEXT_INFO_ATTRIBUTES_FEATURE_COPY_TO','Valitse tuote johon haluat kopioida kaikki ominaisuudet:');

define('TEXT_ATTRIBUTES_COPY_TO_CATEGORY','KATEGORIA');
define('TEXT_INFO_ATTRIBUTES_FEATURE_CATEGORIES_COPY_TO','Valitse ryhmä johon haluat kopioida kaikki ominaisuudet:');
define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Kopioi kaikki ominaisuudet <strong>ryhmän</strong> tuotteisiin tuotteesta ID#');

define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Mitä olemassaoleville omianisuuksille tulisi tehdä?</strong>');
define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Poista</strong> vanhat ja kopioi uudet ominaisuudet');
define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Päivitä</strong> vanhojen asetukset ja hinnat ja lisää sitten uudet');
define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Lisää</strong> vain uudet ominaisuudet');

define('SUCCESS_PRODUCT_UPDATE_SORT','Lajittelujärjestystä on muutettu onnistuneesti tuotteelle ID# ');
define('SUCCESS_PRODUCT_UPDATE_SORT_NONE','Ei ominaisuuksia joiden lajittelujärjestystä muuttaa tuotteelle ID# ');
define('SUCCESS_ATTRIBUTES_DELETED','Ominaisuudet on poistettu');
define('SUCCESS_ATTRIBUTES_UPDATE','Ominaisuudet on päivitetty');

define('WARNING_PRODUCT_COPY_TO_CATEGORY_NONE','Ryhmää ei ole määritelty kopiointia varten');
define('TEXT_PRODUCT_IN_CATEGORY_NAME',' - ryhmässä: ');

define('TEXT_DELETE_ALL_ATTRIBUTES','Oletko varma että haluat poistaa kaikki ominaisuudet tuotteelta ID# ');

define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Ohitetaan uusi ominaisuus </strong>');
define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Lisätään uusia ominaisuuksia kohteesta </strong>');
define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Päivitetään ominaisuudesta </strong>');

// preview
define('TEXT_ATTRIBUTES_PREVIEW','ESIKATSELU OMINAISUUKSIA');
define('TEXT_ATTRIBUTES_PREVIEW_DISPLAY','ESIKATSELU OMINAISUUKSIA NÖYTÖSSÄ ID#');
define('TEXT_PRODUCT_OPTIONS', '<strong>Valitse:</strong>');

define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>Määritä ominaisuuden asetukset ja paina Lisää</strong>');
define('TEXT_PRICED_BY_ATTRIBUTES', 'Hinnoiteltu ominaisuuksien mukaan');
define('TEXT_PRODUCTS_PRICE', 'Tuotteen hinta: ');
define('TEXT_SPECIAL_PRICE', 'Tarjoushinta: ');
define('TEXT_SALE_PRICE', 'Alennushinta: ');
define('TEXT_FREE', 'ILMAINEN');
define('TEXT_CALL_FOR_PRICE', 'Kysy hintaa');
define('TEXT_SAVE_CHANGES','PÄIVITYS JA TALLENNA MUUTOKSET:');

define('TEXT_INFO_ID', 'ID#');
define('TEXT_INFO_ALLOW_ADD_TO_CART_NO', 'Ei lisää koriin');

define('TEXT_DELETE_ATTRIBUTES_OPTION_NAME_VALUES', 'Vahvista kaikkien vaihtoehtonimikkeiden tuotevaihtoehtojen arvojen poistaminen ...');
define('TEXT_INFO_PRODUCT_NAME', '<strong>Tuotteen nimi: </strong>');
define('TEXT_INFO_PRODUCTS_OPTION_NAME', '<strong>Tuotteiden valinta nimi: </strong>');
define('TEXT_INFO_PRODUCTS_OPTION_ID', '<strong>ID#</strong>');
define('SUCCESS_ATTRIBUTES_DELETED_OPTION_NAME_VALUES', 'Poisto onnistui kaikilla tuotteiden valinnan nimi: ');

define('BUTTON_ADDITITONAL_ACTIONS', 'Lisätoiminnot');
define('TEXT_UPDATE_DEFAULTE_SORT_ORDER', 'Päivitä lajittelujärjestys oletusarvoksi');
define('TEXT_DELETE_ALL_OPTIONS_FROM_PRODUCT', 'Poista kaikki vaihtoehdot tuotteesta');
define('TEXT_COPY_ALL_OPTIONS_TO_PRODUCT', 'Kopioi asetukset toiseen tuotteeseen');
define('TEXT_COPY_ALL_OPTIONS_TO_CATEGORY', 'Kopioi asetukset koko luokkaan.Tarvitset tuotetunnuksen, ennen kuin voit lisätä määritteitä');
define('TEXT_SAVE_PRODUCT_FIRST', 'Tallenna uusi tuote ensin. You need a product_id before you can add attributes');
?>