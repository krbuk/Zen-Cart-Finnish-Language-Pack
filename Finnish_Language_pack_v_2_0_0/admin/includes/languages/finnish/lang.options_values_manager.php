<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2022 Feb 08 New in v1.5.8-alpha $
 * Finnish translation v2.0.0 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
*/

$define = [
    'HEADING_TITLE_ATRIB' => 'Tuotteen ominaisuudet',
    'TABLE_HEADING_DOWNLOAD' => 'Ladattavat tuotteet:',
    'TABLE_TEXT_FILENAME' => 'Tiedostonimi:',
    'TABLE_TEXT_MAX_DAYS' => 'Päiviä vanhenemiseen:',
    'TABLE_TEXT_MAX_COUNT' => 'Latauksia enintään:',
    'TEXT_WARNING_OF_DELETE' => '<span class="alert">Tähän ominaisuuteen on yhdistetty tuotteita ja arvoja - sitä ei ole turvallista poistaa<br>HUOMAUTUS: Mitään tähän vaihtoehdon arvoon liittyviä lataustiedostoja ei poisteta palvelimelta.</span>',
    'TEXT_OK_TO_DELETE' => 'Tähän ominaisuuteen ei ole yhdistetty tuotteita - se voidaan poistaa turvallisesti.',
    'ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE_SPECIFIC' =>  'Mahdolliset päällekkäiset vaihtoehdot Lisätty arvo: "<b>%1$s</b>" %2$s vaihtoehdon nimeä varten "%3$s" (arvoihin ids: %4$s)',
    'TEXT_DOWNLOADS_DISABLED' => 'HUOM: Tiedostolataukset eivät ole käytössä',
    'TABLE_TEXT_MAX_DAYS_SHORT' => 'Päivää:',
    'TABLE_TEXT_MAX_COUNT_SHORT' => 'Enintään:',
    'TEXT_SORT' => ' Järjestys: ',
    'TEXT_OPTION_VALUE_COMMENTS' => 'Kommentit: ',
    'TEXT_OPTION_VALUE_SIZE' => 'Näyettävä pituus: ',
    'TEXT_OPTION_VALUE_MAX' => 'Pituus enintään: ',
    'TEXT_ATTRIBUTES_IMAGE' => 'Ominaisuuden kuva:',
    'TEXT_ATTRIBUTES_IMAGE_DIR' => 'Ominaisuuden kuvan hakemisto:',
    'TEXT_ATTRIBUTES_FLAGS' => 'Ominaisuuden<br>asetukset:',
    'TEXT_ATTRIBUTES_DISPLAY_ONLY' => 'Käytetään<br>vain näyteeksi:',
    'TEXT_ATTRIBUTES_IS_FREE' => 'Ominaisuus on ilmainen<br>kun tuote on ilmainen:',
    'TEXT_ATTRIBUTES_DEFAULT' => 'Oletus ominaisuus<br>joka on merkattu valituksi:',
    'TEXT_ATTRIBUTE_IS_DISCOUNTED' => 'Käytä samoja alennuksia<br>kuin tuotteella:',
    'TEXT_PRODUCT_OPTIONS_INFO' => 'Muokkaa tuotteen ominaisuuksia tehdäksesi muita asetuksia',
    'TEXT_OPTION_VALUE_COPY_ALL' => '<strong>Kopioi KAIKKIIN tuotteisiin, joissa vaihtoehdon nimi ja arvo ...</strong>',
    'TEXT_INFO_OPTION_VALUE_COPY_ALL' => 'Valitse vaihtoehdon nimi ja arvo, joka on olemassa tuotteesta tai tuotteista, jotka haluat kopioida sitten toisen vaihtoehdon nimen ja arvon kaikille tuotteille, joilla on tämä nykyinen vaihtoehdon nimi ja arvo',
    'TEXT_SELECT_OPTION_FROM' => 'Vastaavan vaihtoehdon nimi:',
    'TEXT_SELECT_OPTION_VALUES_FROM' => 'Optioarvo vastaa:',
    'TEXT_SELECT_OPTION_TO' => 'Lisättävän vaihtoehdon nimi:',
    'TEXT_SELECT_OPTION_VALUES_TO' => 'Lisättävän lisäysarvo:',
    'TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID' => 'Jätä tyhjäksi KAIKKI tuotteet tai<br>kirjoita päivitettävien tuotteiden ID',
    'TEXT_OPTION_VALUE_COPY_OPTIONS_TO' => '<strong>Kopioi vaihtoehdon nimi / arvo tuotteisiin, joissa on nykyinen vaihtoehdon nimi ...</strong>',
    'TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO' => 'Valitse tuotteelle tai tuotteille olemassa oleva vaihtoehdon nimi ja arvo lisätäksesi kaikkiin tuotteisiin tai vain valitun luokan tuotteisiin, joilla on valittu vaihtoehdon nimi.
                                                   <br><strong>Esimerkki:</strong> Lisää vaihtoehdon nimi: Värivaihtoehdon arvo: Punainen kaikille tuotteille, joilla on vaihtoehdon nimi: Koko
                                                   <br><strong>Esimerkki:</strong> Lisää vaihtoehdon nimi: Värivaihtoehdon arvo: Vihreä tuotteiden oletusarvoilla ID: 34 kaikille tuotteille, joilla on Optio-nimi: Koko
                                                   <br><strong>Esimerkki:</strong> Lisää vaihtoehdon nimi: Värivaihtoehdon arvo: Vihreä tuotteiden oletusarvoilla ID: 34 kaikille tuotteille, joilla on Optio-nimi: Kategorian koko ID: 65
        ',
    'TEXT_SELECT_OPTION_TO_ADD_TO' => 'Ominaisuuden nimi johon lisätään:',
    'TEXT_SELECT_OPTION_FROM_ADD' => 'Lisättävän ominaisuuden nimi:',
    'TEXT_SELECT_OPTION_VALUES_FROM_ADD' => 'Lisättävän ominaisuuden arvo:',
    'TEXT_SELECT_OPTION_FROM_PRODUCTS_ID' => 'Tuotteen uudet ominaisuusarvot ID# tai jätä tyhjäksi, jos et ole oletusarvoja:',
    'TEXT_INFO_FROM' => ' Lähde: ',
    'TEXT_INFO_TO' => ' kohde: ',
    'ERROR_OPTION_VALUES_COPIED' => 'Virhe: Kopioi vaihtoehdon nimi ja vaihtoehdon arvo',
    'ERROR_OPTION_VALUES_COPIED_MISMATCH' => 'Virhe: Sovimaton vaihtoehdon nimi ja vaihtoehdon arvo valittu',
    'ERROR_OPTION_VALUES_NONE' => 'Virhe: Kopiotavaa ei löytnyt',
    'SUCCESS_OPTION_VALUES_COPIED' => 'Kopiointi onnistui! ',
    'ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID' => 'Virhe: Puuttuu vaihtoehdon nimi / arvo tuotteille ID#',
    'TEXT_OPTION_VALUE_DELETE_ALL' => '<strong>Poista vastaava ominaisuus kaikista tuotteista, joissa vaihtoehdon nimi ja arvo ...</strong>',
    'TEXT_INFO_OPTION_VALUE_DELETE_ALL' => 'Valitse vaihtoehdon nimi ja arvo, joka on olemassa tuotteesta tai tuotteista, jotka haluat poistaa kaikista tuotteista tai kaikista yhden kategoria tuotteista',
    'TEXT_SELECT_DELETE_OPTION_FROM' => 'Vastaava ominaisuuden nimi:',
    'TEXT_SELECT_DELETE_OPTION_VALUES_FROM' => 'Ominaisuuden vastaava arvo:',
    'ERROR_OPTION_VALUES_DELETE_MISMATCH' => 'Virhe: Yhteensopimaton nimi/arvo pari valittu',
    'SUCCESS_OPTION_VALUES_DELETE' => 'Poistettu onnistuneesti: ',
    'LABEL_FILTER' => 'Valitse suodatettava ominaisuuden-arvo',
    'TEXT_DISPLAY_NUMBER_OF_OPTION_VALUES' => 'Näytetään <b>%d</b> / <b>%d</b> (/ <b>%d</b> Ominaisuuden arvo)',
    'TEXT_SHOW_ALL' => 'Näytä kaikki',
];

return $define;
