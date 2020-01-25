<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2009 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 14280 2009-08-29 01:33:18Z drbyte $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>

define('NAVBAR_TITLE', 'Kirjaudu');
define('HEADING_TITLE', 'Tervetuloa, ole hyvä ja kirjaudu sisään');

define('HEADING_NEW_CUSTOMER', 'Uusi asiakas?');
define('HEADING_NEW_CUSTOMER_SPLIT', 'Uudet asiakkaat');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Tilin luonti verkkokauppaamme nopeuttaa ja helpottaa asioimista kanssamme. Tilin avulla pystyt seuraamaan tekemiäsi tilauksia ja tarkastelemaan vanhoja tilauksiasi.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Onko sinulla PayPal tili? Haluatko maksaa nopeasti luottokortilla? Käytä alla olevaa PayPal painiketta käyttääksesi PayPal Express Checkout tilaus- ja maksutapaa.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">tai</span><br />');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'luo tili verkkokauppaamme. Tilin luonti nopeuttaa ja helpottaa asioimista kanssamme. Tilin avulla pystyt seuraamaan tekemiäsi tilauksia ja tarkastelemaan vanhoja tilauksiasi.');

define('HEADING_RETURNING_CUSTOMER', 'Oletko jo asiakas? Ole hyvä ja kirjaudu sisään');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Asiakkaat joilla on jo tili.');

define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Jatkaaksesi sinun on kirjauduttava sisään.');

define('TEXT_PASSWORD_FORGOTTEN', 'Unohtuiko salasana?');

define('TEXT_LOGIN_ERROR', 'Virhe: Antamasi sähköpostiosoite ja/tai salasana on virheelinen.');
define('TEXT_VISITORS_CART', '<strong>Huom:</strong> Ostoskorissa olevat tuotteet pysyvät korissa kirjautumisen tai tunnuksen luonnin jälkeen. <a href="javascript:session_win();">[Lisätietoja]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Yksityisyyssuoja tiedote</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">Hyväksy yksityisyyssuoja tiedote valitsemalla seuraava ruutu. Yksityisyyssuoja tiedotteen voit lukea</span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">täältä</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">Olen lukenut ja ymmärtänyt yksityisyyssuoja tiedotteen.</span>');

define('ERROR_SECURITY_ERROR', 'Kirjautuessa tapahtui tietoturva virhe.');

define('TEXT_LOGIN_BANNED', 'Virhe: Pääsy kielletty.');
?>

