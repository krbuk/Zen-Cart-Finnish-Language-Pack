<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2019 May 27 Modified in v1.5.6b $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.5 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>

define('HEADING_TITLE', 'Sivulaatikoiden hallinta');

define('TABLE_HEADING_LAYOUT_BOX_NAME', 'Laatikon tiedostonimi');
define('TABLE_HEADING_LAYOUT_BOX_STATUS', 'VASEN/OIKEA REUNA<br />Tila');
define('TABLE_HEADING_LAYOUT_BOX_STATUS_SINGLE', 'SINGLE COLUMN<br />Tila'); // keksi tähän jotain
define('TABLE_HEADING_LAYOUT_BOX_LOCATION', 'VASEN tai OIKEA<br />REUNA');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER', 'VASEN/OIKEA REUNA<br />Lajittelujärjestys');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER_SINGLE', 'SINGLE COLUMN<br />Lajittelujärjestys');
define('TABLE_HEADING_ACTION', 'Toiminto');

define('TEXT_INFO_EDIT_INTRO', 'Tee tarvittavat muutokset');
define('TEXT_INFO_LAYOUT_BOX','Valittu laatikko: ');
define('TEXT_INFO_LAYOUT_BOX_NAME', 'Laatikon nimi:');
define('TEXT_INFO_LAYOUT_BOX_LOCATION','Sijainti: (Single Column ohittaa tämän asetuksen)');
define('TEXT_INFO_LAYOUT_BOX_STATUS', 'Vasen/oikea reuna tila: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_SINGLE', 'Single Column tila: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_INFO','ON= 1 OFF=0');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER', 'Vasen/Oikea reuna lajittelujärjestys:');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Single Column lajittelujärjestys:');
define('TEXT_INFO_INSERT_INTRO', 'Täytä uuden laatikon tiedot');
define('TEXT_INFO_DELETE_INTRO', 'Haluatko varmasti poistaa tämän laatikon?');
define('TEXT_INFO_HEADING_NEW_BOX', 'Uusi laatikko');
define('TEXT_INFO_HEADING_EDIT_BOX', 'Muokkaa laatikkoa');
define('TEXT_INFO_HEADING_DELETE_BOX', 'Poista Laatikko');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX','Poista puuttuva laatikko ulkoasulistauksesta: ');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX_NOTE','HUOM: Laatikon tiedostoja ei poisteta. Voit halutessasi lisätä laatikon uudestaan lisäämällä sen oikeaan hakemistoon.<br /><br /><strong>Poistettavan laatikon nimi: </strong>');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER','Alusta laatikoiden lajittelujärjestys vastaamaan ulkoasun oletuslajittelujärjestystä: ');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER_NOTE','Tämä ei poista laatiokoita, se vain uudelleen asettaa laatikoiden nykyisen lajittelujärjestyksen.');
define('TEXT_INFO_BOX_DETAILS','Laatikon tiedot: ');

////////////////

define('HEADING_TITLE_LAYOUT_TEMPLATE', 'Sivun ulkoasu');

define('TABLE_HEADING_LAYOUT_TITLE', 'Otsikko');
define('TABLE_HEADING_LAYOUT_VALUE', 'Arvo');

define('TABLE_HEADING_BOXES_PATH', 'Laatikoiden polku: ');
define('TEXT_WARNING_NEW_BOXES_FOUND', 'VAROITUS: Uusia laatikoita löytyi: ');

define('TEXT_MODULE_DIRECTORY', 'Sivun ulkoasun hakemisto:');
define('TEXT_INFO_DATE_ADDED', 'Lisätty:');
define('TEXT_INFO_LAST_MODIFIED', 'Muokattu:');

// layout box text in includes/boxes/layout.php
define('BOX_HEADING_LAYOUT', 'Ulkoasu');
define('BOX_LAYOUT_COLUMNS', 'Reunojen hallinta');

// file exists
define('TEXT_GOOD_BOX',' ');
define('TEXT_BAD_BOX','<font color="ff0000"><b>PUUTTUU</b></font><br />');


// Success message
define('SUCCESS_BOX_DELETED','Successfully removed from the template of the box: '); // ???
define('SUCCESS_BOX_RESET','Kaikki ulkoasun laatikot on palautettu oletusasetuksiin: ');
define('SUCCESS_BOX_UPDATED','Asetukset päivitetty laatikolle: ');

define('TEXT_ON',' Päällä ');
define('TEXT_OFF',' Ei päällä ');
define('TEXT_LEFT',' Vasen ');
define('TEXT_RIGHT',' Oikea ');
?>