<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2020 Apr 30 Modified in v1.5.7 $
 */
// Finnish translation Ver. 1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 
define('HEADING_TITLE', 'Ominaisuuden Nimenhallinta');
define('TEXT_ATTRIBUTES_CONTROLLER', 'Ominaisuus Ohjain');

define('TEXT_WARNING_TEXT_OPTION_NAME_RESTORED', 'Varoitus: Vaihtoehtoarvo TEXT ID#0 havaittiin puuttuvan tietokantataulukosta "' . TABLE_PRODUCTS_OPTIONS_VALUES . '". Tämä johtui väärin koodatusta laajennuksesta.<br>Arvo on palautettu oikein.');
define('TABLE_HEADING_PRODUCT', 'Tuotteen nimi');
define('TABLE_HEADING_OPTION_NAME', 'Ominaisuuden nimi');
define('TABLE_HEADING_OPTION_VALUE', 'Ominaisuuden arvo');
define('TABLE_HEADING_ACTION', 'Toiminto');
define('TEXT_PRODUCT_OPTIONS_INFO','<strong>Huomaa: Muokkaa lisäasetuksia muokkaamalla vaihtoehdon nimeä</strong>');
define('TEXT_WARNING_OF_DELETE', 'Tätä vaihtoehdon nimeä käyttävät alla luetellut tuotteet: sitä ei voida poistaa, ennen kuin kaikki tähän vaihtoehdon nimeen liittyvät vaihtoehtojen arvot (määritteet) on poistettu näistä tuotteista (tämä voidaan tehdä käyttämällä alla olevia yleisiä työkaluja)');
define('TEXT_OK_TO_DELETE', 'Tähän ominaisuuteen ei ole yhdistetty tuotteita - se voidaan poistaa turvallisesti.<br><strong>Varoitus:</strong> Myös kaikki ominaisuuden arvot poistetaan!');
define('TEXT_OPTION_ID', 'Ominaisuuden ID');
define('TEXT_OPTION_NAME', 'Ominaisuuden nimi');

define('TEXT_WARNING_DUPLICATE_OPTION_NAME','Vaihtoehto ID#%1$u: Kopioitu ominaisuuden nimi lisätty: "%2$s" (%3$s)');

define('TEXT_ORDER_BY','Tilaa');
define('TEXT_SORT_ORDER','Lajittelujärjestys');

define('TABLE_HEADING_OPTION_TYPE', 'Ominaisuuden tyyppi');
define('TABLE_HEADING_OPTION_NAME_SIZE','Koko');
define('TABLE_HEADING_OPTION_NAME_MAX','Enintään');

define('TEXT_OPTION_NAME_COMMENTS','Kommentit (näkyy ominaisuuden nimen vieressä)');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Määritä kuvat riviä kohden');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'Ominaisuus kuva tyylit (vain valintaruutu / radiopainikkeet)');
define('TEXT_OPTION_ATTRIBUTE_LAYOUTS_EXAMPLE', 'Katso esimerkkejä');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0 - Kuvat ominaisuuksien nimien alla');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1 - Valintaruutu, Kuva ja ominaisuuden arvo');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2 - Valintaruutu, ominaisuuden nimi ja kuva alapuolella');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3 - Ominaisuuden arvo kuvan ja valintaruudun alla');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4 - Kuva yllä, ominaisuuden arvo keskellä ja valintaruutu alla');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5 - Valintaruutu yllä, kuva keskellä ja ominaisuuden arvo alla');
//text attributes only
define('TEXT_OPTION_NAME_ROWS', 'Rivit');
define('TEXT_OPTION_NAME_SIZE','Näytön koko');
define('TEXT_OPTION_NAME_MAX','Suurin pituus');
define('TEXT_OPTION_TYPE_TEXT_ATTRIBUTE_INFO', 'Huom: ' . TEXT_OPTION_NAME_ROWS . ', ' . TEXT_OPTION_NAME_SIZE . ' ja ' . TEXT_OPTION_NAME_MAX . ' ovat ominaisuuden nimen tyypille vain "Teksti".');
define('TEXT_INSERT_NEW_OPTION_NAME', 'Lisää uusi ominaisuuden nimi');

// Global Tools
define('TEXT_GLOBAL_TOOLS', 'Globaali Työkalut');
define('TEXT_CLICK_TO_SHOW_HIDE', 'napsauta näyttää / piilottaa');
define('TEXT_WARNING_BACKUP', 'Tärkeää: Tee aina varmennettu varmuuskopio tietokannastasi, ennen kuin teet globaaleja muutoksia / käytät Globaali Työkalut');
define('TEXT_SELECT_OPTION_TYPES_ALLOWED', 'Huomaa, että yleisiä työkaluja ei voida käyttää vaihtoehtojen nimityyppien "Teksti" tai "Tiedosto" kanssa".');
define('TEXT_SELECT_PRODUCT', 'Valitse tuote');
define('TEXT_SELECT_CATEGORY', 'Valitse ryhmä');
define('TEXT_SELECT_OPTION', 'Valitse ominaisuuden nimi');
define('TEXT_NAME', 'Nimi');

// Add
define('TEXT_INFO_OPTION_VALUES_ADD', '<strong>Muistio:</strong> tuotteille, jotka päivitetään (saavat lisää ominaisuuden arvoja) käyttämällä <b>Lisää</b> työkalut, ominaisuudenarvojen (määritteiden) lajittelujärjestys palautetaan <strong>oletus</strong> lajittelujärjestys tälle ominaisuuden-nimelle');

define('TEXT_OPTION_VALUE_ADD_ALL', 'Päivitä (lisää) kaikki jäljellä olevat ominaisuuden arvot kaikkiin tuotteisiin, jotka käyttävät tätä ominaisuuden nimeä');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Lisää KAIKKI tuotteet, jotka käyttävät valittua ominaisuuden nimeä (ja joilla on vähintään yksi ominaisuuden arvo), KAIKKI muut ominaisuuden nimeen liittyvät ominaisuuden arvot.');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', 'Päivitä (lisää) kaikki jäljellä olevat ominaisuuden arvot yhteen tuotteeseen, joka käyttää tätä ominaisuuden nimeä');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Lisää tuotteelle, joka käyttää valittua ominaisuuden nimeä (ja jolla on vähintään yksi ominaisuuden arvo), KAIKKI muut ominaisuudenn nimeen liittyvät ominaisuuden arvot.');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', 'Päivitä (lisää) kaikki jäljellä olevat ominaisuuden arvot kaikkiin ryhmän tuotteisiin, jotka käyttävät tätä ominaisuuden nimeä');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Lisää vain YKSI luokkaan kuuluville tuotteille, jotka käyttävät valittua ominaisuuden nimeä, lisää KAIKKI muut ominaisuuden nimeen liittyvät ominaisuuden arvot.');
define('TEXT_SHOW_CATEGORY_PATH', 'Näytä ryhmän polku');
define('TEXT_SHOW_CATEGORY_NAME', 'Näytä vain ryhmän nimi');

// messageStack
define('SUCCESS_PRODUCT_OPTION_VALUE', 'Ominaisuuden nimi "%1$s": ominaisuuden arvo "%2$s" lisätään tuotteeseen "%3$s".');
define('SUCCESS_PRODUCT_OPTIONS_VALUES_SORT_ORDER', 'Ominaisuuden nimi "%1$s": tuote "%2$s" ominaisuuden arvo päivitetään ominaisuuden nimen oletuslajittelujärjestykseen "%1$s".');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Ominaisuuden nimi "%1$s": %2$u tuote\et päivitetty lisävaihtoehtojen arvoilla.');

define('ERROR_PRODUCTS_OPTIONS_PRODUCTS', 'Varoitus: Vastaavaa tuotetta ei löytynyt ominaisuuden nimellä "%s" (ei yhteen päivitetty).');
define('ERROR_PRODUCTS_OPTIONS_VALUES', 'Varoitus: Kaikilla vastaavilla tuotteilla on jo kaikki ominaisuuden arvot ominaisuuden nimellä "%s" (ei yhteen päivitetty).');

// Delete
define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>MUISTIO:</strong> Kaikki ominaisuuden arvot poistetaan vastaavista tuotteista / valituista tuotteista. Tämä ei poista kyseiselle ominaisuuden nimelle määritettyjä ominaisuuden arvoja.');
define('TEXT_OPTION_VALUE_DELETE_ALL', 'Poista kaikki ominaisuuden arvot KAIKISTA tuotteista käyttämällä tätä ominaisuuden nimeä');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Poista kaikki ominaisuuden arvot / ominaisuuden nimi kaikista tuotteista, jotka käyttävät valittua ominaisuuden nimeä.');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', 'Poista kaikki ominaisuuden arvot yhdestä tuotteesta tällä ominaisuuden nimellä');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Poista tuotteesta, joka käyttää valittua ominaisuuden nimeä, KAIKKI ominaisuuden arvot / ominaisuuden nimi.');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', 'Poista kaikki ominaisuuden arvot YKSI tuoteryhmästä tälle ominaisuuden nimelle');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Poista vain YKSI-luokan tuotteet, jotka käyttävät valittua ominaisuuden nimeä, kaikki ominaisuuden arvot / ominaisuuden nimi.');

// messageStack
define('SUCCESS_PRODUCT_OPTION_VALUES_DELETED', 'Ominaisuuden nimi "%1$s": kaikki tuotteesta poistetut optioarvot "%2$s".');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES_DELETED', 'Ominaisuuden nimi "%1$s": kaikki ominaisuuden arvot poistettu %2$u tuotteet.');

// Copy
define('TEXT_OPTION_VALUE_COPY_ALL', 'Kopioi kaikki ominaisuuden arvot toiselle ominaisuuden nimelle');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Kaikki ominaisuuden arvot kopioidaan ominaisuudesta toiseen');
define('TEXT_SELECT_OPTION_FROM', 'Kopioi ominaisuudesta: ');
define('TEXT_SELECT_OPTION_TO', 'Kopioi kaikki ominaisuuden arvot ominaisuuteen nimeltä: ');

define('SUCCESS_OPTION_VALUE_COPIED', 'ominaisuuden arvo "%6$s" ID#%5$u kopioitu ominaisuuden nimestä "%2$s" ID#%1$u ominaisuuden nimeen "%4$s" ID#%3$u.');
define('SUCCESS_OPTION_VALUES_COPIED', '%5$u ominaisuuden arvot kopioitu ominaisuuden nimestä "%2$s" ID#%1$u ominaisuuden nimeen "%4$s" ID#%3$u.');
define('ERROR_OPTION_VALUES_COPIED', 'Virhe - Ominaisuuden arvoa ei voi kopioida samaan ominaisuuteen! ("%2$s" ID#%1$u to "%4$s" ID#%3$u)!');
define('ERROR_OPTION_VALUES_NONE', 'Virhe - Ominaisuudella "%2$s" ei ole yhtään arvoa määritelty. Kopiointia ei suoritettu!  ID#%1$u ei ole määritelty ominaisuuden arvoja (ei mitään kopioitavaa)!');
