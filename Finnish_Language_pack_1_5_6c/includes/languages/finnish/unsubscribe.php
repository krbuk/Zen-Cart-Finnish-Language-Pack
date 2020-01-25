<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Originally Programmed By: Christopher Bradley (www.wizardsandwars.com) for OsCommerce
 * @copyright Modified by Jim Keebaugh for OsCommerce
 * @copyright Adapted for Zen Cart
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: unsubscribe.php 3159 2006-03-11 01:35:04Z drbyte $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>

define('NAVBAR_TITLE', 'Peru tilaus');
define('HEADING_TITLE', 'Peru uutiskirjeen tilaus');

define('UNSUBSCRIBE_TEXT_INFORMATION', '<br />On valitettavaa että et halua enää uutiskirjeitämme. Jos sinulla on epäilyksiä yksityisyydestäsi, lue meidän <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><span class="pseudolink">yksityisyysturvatiedote</span></a>.<br /><br />Uutiskirjeen tilaajille lähetämme tietoja uusista tuotteista, tarjouksista, ja muista sivuston uutisista.<br /><br />Jos et tästäkään huolimatta halua uutiskirjettämme, paina alla olevaa painiketta. ');
define('UNSUBSCRIBE_TEXT_NO_ADDRESS_GIVEN', '<br />On valitettavaa että et halua enää uutiskirjeitämme. Jos sinulla on epäilyksiä yksityisyydestäsi, lue meidän <a href="' . zen_href_link(FILENAME_PRIVACY,'','NONSSL') . '"><span class="pseudolink">yksityisyysturvatiedote</span></a>.<br /><br />Uutiskirjeen tilaajille lähetämme tietoja uusista tuotteista, tarjouksista, ja muista sivuston uutisista.<br /><br />Jos et tästäkään huolimatta halua uutiskirjettämme, paina alla olevaa painiketta. Sinut ohjataan tilinhallinta sivulle, missä voit perua uutiskirjeen tilauksen. Sinua saatetaan pyytää kirjautumaan sisään ensin.');
define('UNSUBSCRIBE_DONE_TEXT_INFORMATION', '<br />Sähköpostiosoitteesi joka näkyy alla on poistettu onnistuneesti postituslistaltamme. <br /><br />');
define('UNSUBSCRIBE_ERROR_INFORMATION', '<br />Määrittämääsi sähköpostiosoitetta ei löytynyt postituslistaltamme. <br /><br />');
?>