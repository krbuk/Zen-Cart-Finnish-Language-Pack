<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */
// Finnish translation Ver. 1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
define('HEADING_TITLE','Tuoteiden ryhmälinkkien hallinta');
define('HEADING_TITLE2','Ryhmät / Tuotteet'); //used by prev_next if HEADING_TITLE not defined...so never used!

//Select Product
define('TEXT_HEADING_PRODUCT_SELECT', 'Valitse tuote');
define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', 'VAROITUS: Tuote on nollattu, eikä kuulu enää ryhmään...');//when category is set, but no product filter set (no product selected)

// Change Master Category
define('TEXT_PRODUCTS_ID_INVALID', 'VAROITUS: Virheellinen tuote ID tai tuotetta ei ole valittu');
define('TEXT_INFO_MASTER_CATEGORY_CHANGE','Tuotteella on pääluokan tunnus (hinnoittelua varten), jota voidaan pitää ryhmään, jossa tuote tosiasiallisesti <i> asuu </i>. Lisäksi tuote voidaan <i> linkittää </i> (kopioida) mihin tahansa määrään muita ryhmiä, joissa hintaa voidaan muuttaa linkitettyjen ryhmiin ehtojen vuoksi. <br> Ryhmän tunnus voidaan muuttaa käyttämällä tämä avattava ryhmän, joka tarjoaa vain <strong> tällä hetkellä linkitetyt </strong> luokat mahdollisina vaihtoehdoina. <br> Jos haluat asettaa ryhmän tunnuksen <strong> toiseen </strong> ryhmään, linkitä se ensin uuteen ryhmään käyttämällä alla olevaa taulukkoa ja päivitä. Määritä sitten ryhmän uudelle luokalle tämän pudotusvalikon avulla.');

// Product InfoBox
define('TEXT_INFOBOX_HEADING_SELECT_PRODUCT', 'Valitse tuoteen ID#');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', 'Näytä tuote ryhmään Linkit tuotteelle: ');
define('TEXT_PRODUCTS_ID', 'Tuotteen ID# ');
define('TEXT_PRODUCTS_NAME', 'Nimi: ');
define('TEXT_PRODUCTS_PRICE', 'Hinta: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', 'Päivitä ryhmien linkit');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'Valitse linkitettävä tuote ID#');
define('BUTTON_CATEGORY_LISTING', 'Ryhmäluettelo');

// Link product to multiple categories
define('TEXT_HEADING_LINKED_CATEGORIES', 'Linkitetyt ryhmät');
define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>VAROITUS:</strong> on määritettävä PÄÄ RYHMÄ ID');
define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO',
'Tällä työkalulla saat linkitettyä tuotteita nopeasti useisiin ryhmiin.<br />Voit myös linkittää kaikki ryhmän tuotteet toiseen ryhmään tai poistaa tuotteet ryhmästä jotka ovat linkitetty toiseen ryhmään.');
define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO', '<p>Tämä tuote on tällä hetkellä linkitetty alla valittuihin ryhmään (voit muuttaa tällä sivulla <a target="_blank" href="configuration.php?&amp;gID=3"> näkyvien sarakkeiden määrää</a>).<br> Lisää/ poista linkkejä valitsemalla / poista valintaruudut tarpeen mukaan ja napsauta sitten ' . BUTTON_UPDATE_CATEGORY_LINKS . ' painiketta.</p><p>Huomaa, että muita tuote/ryhmääntoimintoja on saatavana alla olevien yleisten työkalujen avulla.</p>');
define('TEXT_LABEL_CATEGORY_DISPLAY_ROOT', 'Näytä alaryhmä kohdassa:');
define('BUTTON_SET_DEFAULT_TARGET_CATEGORY', 'Oletusasetuksena');
define('BUTTON_SET_DEFAULT_TARGET_CATEGORY_TITLE', 'Aseta tämä valittu kohderyhmää oletusarvoiseksi näytettäväksi');
define('TEXT_LABEL_SELECT_ALL_OR_NONE', 'Valitse Kaikki tai None');
define('ERROR_CATEGORY_ID_INVALID', 'Linkitetty Ryhmän ID#%u virheellinen (ei lisätty).');
define('SUCCESS_PRODUCT_LINKED_TO_CATEGORIES', 'Tuote linkkejä useita ryhmäät päivitetty: %s');
define('WARNING_PRODUCT_UNLINKED_FROM_CATEGORY', 'Tuote linkitettiin aiemmin valittuun ryhmään "%1$s" ID#%2$u, ja nyt näkyy sen pääryhmällää.');
define('WARNING_MAX_INPUT_VARS_LIMIT', 'VAROITUS: On %1$u tällä sivulla linkitettävissä olevat alaryhmä, joka on suurempi kuin PHP limit "max_input_vars" (tällä hetkellä %2$u). Tämä tarkoittaa, että korkeintaan %2$u ryhmää voidaan linkittää, kunnes tätä PHP rajaa korotetaan webhotellissä.');

// Global Tools
define('HEADER_CATEGORIES_GLOBAL_TOOLS', 'Maailmanlaajuiset tuot/ryhmätyökalut');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', '<p>Huom: Tuotetta ei tarvitse valita näiden työkalujen käyttämiseen. Yllä olevan tuotteen valitseminen näyttää kuitenkin käytettävissä olevat ryhmät (ja niiden ID-numerot hiiren päällä).</p>');

// Copy linked categories from one product to another product
define('TEXT_HEADING_COPY_LINKED_CATEGORIES', 'Kopioi linkitetyt rymät toiseen tuotteeseen');
define('TEXT_INFO_COPY_LINKED_CATEGORIES', 'Kopioi valitun tuotteen linkitetyt ryhmä%stä toinen tuote.<br>Voit <strong>lisätä</strong> tämän tuotteen linkitetyt ryhmät kohdetuotteeseen tai voit <strong>korvata</strong> (poista + lisää) kohdetuotteen linkitetyt ryhmäätt. <br>Huom: Tämä toiminto ei kopioi lähdetuotteen pääryhmää linkitettynä ryhmänä kohderyhmään, vaan vain linkitetyt ryhmäätt');
define('TEXT_LABEL_ENABLE_COPY_LINKS', 'Ota käyttöön tuotevalikoiman valikko (luettelot <bkaikki</b> tuotteet)');
define('TEXT_OPTION_LINKED_CATEGORIES', 'Valitse kohdetuote');
define('BUTTON_COPY_LINKED_CATEGORIES_ADD', 'Kopioi - lisää linkitetyt ryhmät');
define('BUTTON_COPY_LINKED_CATEGORIES_REPLACE', 'Kopioi - korvaa linkitetyt ryhmät');
define('SUCCESS_LINKED_CATEGORIES_COPIED_TO_TARGET_PRODUCT_ADD', 'Linkitetyt ryhmät (%1$u) on lisätty :<br>Vertailutuotestä: %2$s<br> Kohdetuotesään: %3$s');
define('SUCCESS_LINKED_CATEGORIES_COPIED_TO_TARGET_PRODUCT_REPLACE', 'Linkitetyt ryhmäät (%1$u) Vertailutuote: %3$s<br>on ollut <em>vaihdettu</em> linkitetyt Ryhmääntä tuoteryhmät : %2$s');
define('WARNING_COPY_LINKED_CATEGORIES_NO_TARGET', 'A kohdetuotetta ei valittu!');
define('WARNING_COPY_LINKED_CATEGORIES_NO_ADDITIONAL', 'Ei mitään tekemistä!<br>Lähdetuotteella: %1$s<br> ei ole <em>muita tuotteita</em> linkitettyjä ryhmiä, joihin kopioida<br> jotka voidaan kopioida kohdetuotteeseen: %2$s');
define('ERROR_MASTER_CATEGORY_MISSING', 'VIRHE: Taulukosta puuttuu Ryhmään ID "' . TABLE_PRODUCTS_TO_CATEGORIES . '"<br>tuotteelle: %s');

// Copy as linked, all products from category source to category target
define('TEXT_HEADING_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', 'Linkitä (kopio) tuotteita yhdestä ryhmästa toiseen ryhmään');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', 'Esimerkki: kopio lähderyhmän ID: stä nro 8 kohderyhmään ID#22 luo linkitetyt kopiot KAIKISTA kuuluvista ryhmtuotteista 8, ryhmässä 22.');
define('TEXT_LABEL_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Valitse KAIKKI tuotteet lähderyhmään ID#: ');
define('TEXT_LABEL_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Linkki (kopio) kohderyhmään ID#: ');
define('BUTTON_COPY_CATEGORY_LINKED', 'Kopioi tuotteet linkitettynä');
define('WARNING_CATEGORY_SOURCE_NOT_EXIST','<strong>Lähde</strong> Ryhmä ID#%u virheellinen (ei ole olemassa)');
define('WARNING_CATEGORY_TARGET_NOT_EXIST','<strong>Kohde</strong> Ryhmä ID#%u virheellinen (ei ole olemassa)');
define('WARNING_CATEGORY_IDS_DUPLICATED', 'VAROITUS: sama Ryhmä ID (#%u)');
define('WARNING_CATEGORY_NO_PRODUCTS', '<strong>Lähde</strong> Ryhmä ID#%u virheellinen (ei sisällä tuotteita)');
define('WARNING_CATEGORY_SUBCATEGORIES', '<strong>Kohde</strong> Ryhmä ID#%u virheellinen (sisältää alaluokkia)');
define('SUCCESS_PRODUCT_COPIED', 'tuote: %1$s linkitettiin ryhmään ID#%2$u<br>');
define('SUCCESS_COPY_LINKED', '%1$u tuote(et) linkitetty lähderyhmään ID#%2$u kohderyhmään ID#%3$u');
define('WARNING_COPY_FROM_IN_TO_LINKED', 'VAROITUS: Ei tuotteita kopioitu (kaikki tuotteet ryhmässä ID#%1$u on jo linkitetty ryhmään ID#%2$u)');

// Remove linked products in reference category from target category
define('TEXT_HEADING_REMOVE_ALL_PRODUCTS_FROM_CATEGORY_LINKED', 'Poista linkitetyt tuotteet ryhmästä');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', 'Esimerkki: Viiteryhmä #8 ja kohderyhmä #22 käyttäminen poistaa kaikki linkitetyt tuotteet kohderyhmästä #22, joka on vertailuryhmässä #8. Yhdelläkään kohderyhmään #22 kuuluvalla tuotteella ei voi olla pääryhmän tunnus #22 (jos on, se on määritettävä uudelleen toiseen ryhmään).<br><strong>Nykyinen ryhmään ID#%u.</strong>');
define('TEXT_LABEL_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Valitse KAIKKI tuotteet vertairyhmästä: ');
define('TEXT_LABEL_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Poista kaikki linkitetyt tuotteet kohderyhmästä: ');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'Poista linkitetyt tuotteet');
define('SUCCESS_REMOVED_PRODUCT', 'tuote: %1$s poistettiin ryhmästä ID#%2$u<br>');
define('SUCCESS_REMOVE_LINKED_PRODUCTS', '%u linkitetty tuote(et) poistettu');
define('WARNING_REMOVE_FROM_IN_TO_LINKED', 'VAROITUS: Ei mitään tehtävää! Ei tuotteita kohderyhmässä ID#%1$u on linkitetty viiteryhmään ID#%2$u');
define('WARNING_PRODUCT_MASTER_CATEGORY_IN_TARGET','Tuote: ID#%1$u "%2$s" (%3$s)<br>on sama pääryhmän tunnus kuin kohderyhmän ID#%4$u<br>');
define('WARNING_REMOVE_LINKED_PRODUCTS_MASTER_CATEGORIES_ID_CONFLICT', '<strong>VAROITUS: PÄÄRYHMÄN ID RISTIRIITA!</strong><br>Viiteryhmä ID#%1$u linkitettyjen tuotteiden poistamiseksi kohderyhmästä ID#%2$u.<br>Olet pyytänyt joidenkin linkitettyjen tuotteiden poistamista kohderyhmästä. Yhdellä tai useammalla näistä tuotteista on sama pääryhmän ID kuin kohderyhmään. Tämä tarkoittaa, että tuote ei ole "linkitetty" kohderyhmään, mutta "pysyy" ryhmään, joten sitä ei voida poistaa osana tätä poistopyyntöä <i>linkitetty</i> tuotteet.<br>Jos haluat <i>säilyttää</i> tämä tuote, sinun on muutettava se pää ryhmään ID toiseen ryhmään (Esm. "Siirrä" ) ennen kuin suoritat tämän prosessin uudelleen. Tämä voidaan tehdä tällä sivulla tai "Siirrä" toiminto Ryhmä-Tuotetiedot sivulla. Ensimmäinen tuote, jonka pääryhmä ID on ristiriitainen on jo valittu muokkausta varten.<br/>Jos haluat <i>poista</i> tämä tuote, sinun on käytettävä "POISTA" toiminta Ryhmä-Tuotetiedot listasivulla.');

// Reset Master Categories ID for all products in a category
define('TEXT_HEADING_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', 'Nollaa pääryhmään ID KAIKILLE luokan tuotteille');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', 'Esimerkki: Ryhmä #22 nollaaminen antaa pääryhmään ID #22 KAIKILLE ryhmän #22 tuotteille.');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Nollaa kaikkien ryhmään tuotteiden pääryhmään ID: ');
define('BUTTON_RESET_CATEGORY_MASTER', 'Nollaa pääryhmäät ID');
define('SUCCESS_RESET_PRODUCTS_MASTER_CATEGORY', 'Kaikki tuotteet luokassa ID#%1$d on palautettu käyttämään pääryhmään ID#%1$d llä');
define('TEXT_CATEGORIES_NAME', 'Ryhmä Nimi');
