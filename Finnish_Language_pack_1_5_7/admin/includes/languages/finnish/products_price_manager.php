<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */
// Finnish translation Ver. 1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
define('HEADING_TITLE', 'Hintojen hallinta');
define('HEADING_TITLE_PRODUCT_SELECT','Valitse ryhmä, jonka tuotteiden hintoja haluat muokata...');

define('TABLE_HEADING_PRODUCTS', 'Tuotteet');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Tuotteen hinta/tarjous/alennus');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Prosenttia');
define('TABLE_HEADING_AVAILABLE_DATE', 'Alkaa');
define('TABLE_HEADING_EXPIRES_DATE','Päättyy');
define('TABLE_HEADING_STATUS', 'Tila');
define('TABLE_HEADING_ACTION', 'Toiminto');

define('TEXT_PRODUCT_INFO', 'Tuotteen tiedot:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Tuotteen hintatiedot:');
define('TEXT_PRICE', 'Hinta');
define('TEXT_PRICE_NET', 'Hinta (Netto)');
define('TEXT_PRICE_GROSS', 'Hinta (Brutto)');
define('TEXT_PRODUCT_AVAILABLE_DATE', 'Saatavilla:');
define('TEXT_PRODUCTS_STATUS', 'Tuotteen tila:');
define('TEXT_PRODUCT_AVAILABLE', 'Varastossa');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Loppu');


define('TEXT_PRODUCT_INFO_NONE', 'Valitse tuote yläpuolelta...');
  define('TEXT_PRODUCT_IS_FREE','Tuote on ilmainen:');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','<br />*tuote on merkitty ilmaiseksi');
  define('TEXT_PRODUCT_IS_CALL','Kysy hintaa:');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','<br />*tuote on merkitty "kysy hintaa"');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Hinnoiteltu ominaisuuksilla:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Kyllä');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Ei');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','<br />*Näytettävä hinta sisältää halvimman ominaisuuksien hinnan plus pohjahinnan');
  define('TEXT_PRODUCTS_MIXED','Vähin vaadittu määrä sallittu sekotetuilla ominaisuuksilla:');
  define('TEXT_PRODUCTS_MIXED_DISCOUNT_QUANTITY', 'Määräalennus koskee sekoitettuja ominaisuuksia');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Määrä vähintään:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Määrän yksikkö:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Määrä enintään:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0= Rajoittamaton<br>1= Ei määrä kenttää/Enimmäismäärä');

define('TEXT_FEATURED_PRODUCT_INFO', 'Esittelyssä olevan tuotteen tiedot:');
define('TEXT_FEATURED_PRODUCT', 'Tuote:');
define('TEXT_FEATURED_EXPIRES_DATE', 'Vanhenee:');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Voimassa alkaen:');
define('TEXT_FEATURED_PRODUCTS_STATUS', 'Esittelyn tila:');
define('TEXT_FEATURED_PRODUCT_AVAILABLE', 'Päällä');
define('TEXT_FEATURED_PRODUCT_NOT_AVAILABLE', 'Pois päältä');
define('TEXT_FEATURED_DISABLED', '<strong>HUOM: Esittelyssä olevan tuotteen tiedot ovat joko pois päältä, vanhentuneet tai eivät ole vielä päällä</strong>');
define('TEXT_FEATURED_CONFIRM_DELETE', 'Haluatko varmasti poistaa tämän tuotteen esittelystä?');

define('TEXT_SPECIALS_PRODUCT', 'Tuote:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Tarjoushinta:');
define('TEXT_SPECIALS_SPECIAL_PRICE_NET', 'Tarjoushinta Hinta (Netto)');
define('TEXT_SPECIALS_SPECIAL_PRICE_GROSS', 'Tarjoushinta Hinta (Brutto)');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Vanhenee:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Voimassa alkaen:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Tarjouksien huomautukset:</b><ul><li>Voit ilmoittaa vähennettävän prosenttimäärän tarjoushinta kentässä, esimerkiksi: <b>20%</b></li><li>Jos ilmoitat uuden hinnan, desimaali erotin täytyy olla \'.\' (piste), esimerkiksi: <b>49.99</b></li><li>Jätä vanhenemiskenttä tyhjäksi jos et halua että tarjous päättyy automaattisesti</li></ul>');
define('TEXT_SPECIALS_PRODUCT_INFO', 'Tarjoustuotteen hintatiedot:');
define('TEXT_SPECIALS_PRODUCTS_STATUS', 'Tarjouksen tila:');
define('TEXT_SPECIALS_PRODUCT_AVAILABLE', 'Päällä');
define('TEXT_SPECIALS_PRODUCT_NOT_AVAILABLE', 'Pois päältä');
define('TEXT_SPECIALS_NO_GIFTS','Ei tarjouksia lahjakorteille');
define('TEXT_SPECIAL_DISABLED', '<strong>Huom: Tarjoustuotteen tiedot ovat pois päältä, vanhentuneet tai eivät ole vielä voimassa!</strong>');
define('TEXT_SPECIALS_CONFIRM_DELETE', 'Haluatko varmasti poistaa tuotteen tarjouksen?');

define('TEXT_INFO_DATE_ADDED', 'Lisätty:');
define('TEXT_INFO_LAST_MODIFIED', 'Muokattu:');
define('TEXT_INFO_NEW_PRICE', 'Uusi hinta:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Alkuperäinen hinta:');
define('TEXT_INFO_STATUS_CHANGE', 'Tilan muutos:');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Poista esittely');
define('TEXT_INFO_DELETE_INTRO', 'Haluatko varmasti poistaa tuotteen esittelystä?');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>Määritä ominaisuuden asetukset ja paina "lisää" tallentaaksesi muutokset</strong>');
  define('TEXT_PRODUCTS_PRICE', 'Tuotteen hinta: ');
  define('TEXT_FREE', 'ILMAINEN');
  define('TEXT_CALL_FOR_PRICE', 'Kysy hintaa');

define('TEXT_ADD_ADDITIONAL_DISCOUNT', 'Lisää ' . DISCOUNT_QTY_ADD . ' tyhjää määräalennus kenttää:');
define('TEXT_BLANKS_INFO','Kaikki nolla -kentät poistetaan');
define('TEXT_INFO_NO_DISCOUNTS', 'Määrä alennuksia ei ole määritelty');
define('TEXT_PRODUCTS_DISCOUNT_QTY_TITLE', 'Alennukseen oikeuttavat määrät');
define('TEXT_PRODUCTS_DISCOUNT','Alennus');
define('TEXT_PRODUCTS_DISCOUNT_QTY','Määrä vähintään');
define('TEXT_PRODUCTS_DISCOUNT_PRICE','Alennus');

define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH','KPL hinta');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED','Hinta yhteensä:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH_TAX','KPL hinta<br />Netto / Brutto');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED_TAX','Hinta yhteensä<br />Netto / Brutto');

define('TEXT_DISCOUNT_TYPE_INFO', 'Määräalennukset');
define('TEXT_DISCOUNT_TYPE','Alennustyyppi:');
define('TEXT_DISCOUNT_TYPE_FROM', 'Laske alennus:');

define('DISCOUNT_TYPE_DROPDOWN_0','Ei mitään');
define('DISCOUNT_TYPE_DROPDOWN_1','Prosentti');
define('DISCOUNT_TYPE_DROPDOWN_2','Lopullinen hinta');
define('DISCOUNT_TYPE_DROPDOWN_3','Summa pois');

define('DISCOUNT_TYPE_FROM_DROPDOWN_0','Normaalihinnasta');
define('DISCOUNT_TYPE_FROM_DROPDOWN_1','Tarjouksesta');

define('TEXT_UPDATE_COMMIT','Vahvista muutokset');

define('TEXT_PRODUCTS_TAX_CLASS', 'Verokanta:');

define('TEXT_INFO_MASTER_CATEGORIES_ID_WARNING', '<strong>Varoitus:</strong> Tuotteen todellinen ryhmä ID# %s ei täsmää sen tämänhetkiseen ryhmään ID# %s ja tuotetta ei ole linkitetty!');
define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE_TO_CURRENT', 'Päivitä tuotteen todellisen ryhmän ID# %s vastaamaan nykyistä ryhmää ID# %s');

define('PRODUCT_WARNING_UPDATE', 'Tee tarvittavat muutokset ja paina "päivitä" tallentaaksesi');
define('PRODUCT_UPDATE_SUCCESS', 'Muutokset tuotteisiin on tallennettu!');
define('PRODUCT_WARNING_UPDATE_CANCEL', 'Muutokset hylättiin eikä mitään tallennettu ...');
define('TEXT_INFO_EDIT_CAUTION', '<strong>Paina aloittaaksesi muokkaus ...</strong>');
define('TEXT_INFO_PREVIEW_ONLY', 'Esikatselu ... Tämänhetkiset tiedot ... Esikatselu');
define('TEXT_INFO_UPDATE_REMINDER', '<strong>Muokkaa tuotteen tietoja ja paina "päivitä" tallentaaksesi muutokset</strong>');
define('BUTTON_ADDITIONAL_ACTIONS', 'Lisätoimia');
