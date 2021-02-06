<?php
// -----
// Part of the "Display Logs" plugin for Zen Cart v1.5.0 or later
//
// Copyright (c) 2012-2017, Vinos de Frutas Tropicales (lat9)
//
define('HEADING_TITLE', 'Näytä virheenkorjauslokitiedostot ');

define('TABLE_HEADING_FILENAME', 'Tiedoston nimi');
define('TABLE_HEADING_MODIFIED', 'Muokattu');
define('TABLE_HEADING_FILESIZE', 'Tiedoston koko (bytes)');
define('TABLE_HEADING_DELETE', 'Poistaa ?');
define('TABLE_HEADING_ACTION', 'Toiminta');

define('BUTTON_DELETE_SELECTED', 'Poista valitut');
define('DELETE_SELECTED_ALT', 'Poista kaikki valitut tiedostot ');
define('BUTTON_DELETE_ALL', 'Poista kaikki');
define('DELETE_ALL_ALT', 'Poista kaikki nykyisen näkymän tiedostot ');

define('ICON_INFO_VIEW', 'Tarkastele tämän tiedoston sisältöä ');

define('DISPLAY_DEBUG_LOGS_ONLY', 'Näytetäänkö vain virheenkorjauslokeja? ');
define('LOG_SORT_ASC', 'Asc');
define('LOG_SORT_DESC', 'Desc');

define('TEXT_HEADING_INFO', 'Tiedoston sisältö ');

// -----
// Sort-order descriptions, used in the instructions' display.
//
define('TEXT_MOST_RECENT', 'viimeisin');
define('TEXT_OLDEST', 'vanhin ');
define('TEXT_SMALLEST', 'pienin ');
define('TEXT_LARGEST', 'suurin');

// -----
// The TEXT_INSTRUCTIONS string is passed into sprintf to produce the instructions given on the plugin's main display,
// using the following variables:
//
// %1$u ... The maximum size of a fully-displayed file.
// %2$s ... Contains a descriptive string identifying the current sort order
// %3$u ... The number of log files currently being displayed.
// %4$u ... The number of log files currently present in the log-related directories.
// %5$s ... The "included" prefixes for the log-files displayed.
// %6$s ... The "excluded" prefixes for the log-files displayed.
//
$imageName = zen_image (DIR_WS_IMAGES . 'icon_info.gif', ICON_INFO_VIEW);
define('TEXT_INSTRUCTIONS', '<br /><br />Tiedostot voidaan lajitella nousevassa tai laskevassa järjestyksessä (joko viimeksi muokatun päivämäärän tai tiedostokoon perusteella) napsauttamalla yhtä  <em>Asc</em> or <em>Desc</em> linkkejä . Napsauta  ' . $imageName . ' -kuvaketta nähdäksesi liitetyn tiedoston sisällön. Vain ensimmäinen  %1$u valitun tiedoston tavut luetaan ; jos tiedosto on  &quot;liian suuri&quot;, sen <em>Tiedoston koko</em> korostetaan kuten  <span class="bigfile">tämä</span>.<br /><br />Napsauttamalla  <strong>poista kaikki </strong> -painike poistaa kaikki tarkasteltavat tiedostot ; napsauttamalla  <strong>poista valitut</strong> poistaa vain ne tiedostot, joissa on valintaruudut. <br /><br />Katselet tällä hetkellä  %2$s %3$u / %4$u lokitiedostot näiden kanssa  <code>%5$s</code> etuliitteet ja  <b>not</b> näitä vastaavia <code>%6$s</code>.<br />');

define('JS_MESSAGE_DELETE_ALL_CONFIRM', 'Haluatko varmasti poistaa nämä  \'+n+\' tiedostot?');
define('JS_MESSAGE_DELETE_SELECTED_CONFIRM', 'Haluatko varmasti poistaa  \'+valittu +\' valittu  tiedosto(t)?');

define('WARNING_NOT_SECURE','<span class="errorText">HUOMAUTUS: SSL ei ole käytössä. Tältä sivulta katsomasi tiedostosisältöä ei salata ja se voi aiheuttaa tietoturvariskin. </span>');
define('WARNING_NO_FILES_SELECTED', 'Yhtään tiedostoa ei valittu poistettavaksi! ');
define('WARNING_SOME_FILES_DELETED', 'Varoitus: Vain  %u / %u lokitiedostot poistettiin; tarkista käyttöoikeudet.');
define('SUCCESS_FILES_DELETED', '%u lokitiedostot poistettiin.');