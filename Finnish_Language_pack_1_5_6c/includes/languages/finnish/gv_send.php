<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: gv_send.php 3421 2006-04-12 04:16:14Z drbyte $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>

define('HEADING_TITLE', 'Lähetä ' . TEXT_GV_NAME);
define('HEADING_TITLE_CONFIRM_SEND', 'Send ' . TEXT_GV_NAME . ' Confirmation');
define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . ' Sent');
define('NAVBAR_TITLE', 'Lähetä ' . TEXT_GV_NAME);
define('EMAIL_SUBJECT', 'Viestin lähettäjä ' . STORE_NAME);
define('HEADING_TEXT','Ole hyvä ja täytä haluamasi ' . TEXT_GV_NAMES . 'in tiedot alle. Lisätietoja saat sivulta <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a>');
define('ENTRY_NAME', 'Vastaanottajan Nimi:');
define('ENTRY_EMAIL', 'Vastaanottajan Sähköpostiosoite:');
define('ENTRY_MESSAGE', 'Viesti Vastaanottajalle:');
define('ENTRY_AMOUNT', 'Arvo jonka haluat lähettää:');
define('ERROR_ENTRY_TO_NAME_CHECK', 'Vastaanottajan nimi puuttuu, täytä kenttä ja yritä uudelleen. ');
define('ERROR_ENTRY_AMOUNT_CHECK', 'Virheellinen arvo.');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Virheelinen sähköpostiosoite');
define('MAIN_MESSAGE', 'Olet lähettämässä ' . TEXT_GV_NAMES . 'tia jonka arvo on %s henkilölle nimeltään %s jonka sähköpostiosoite on %s. Voit korjata viestiä painamalla <strong>muokkaa</strong> -nappia. <br /><br />Kirjoittamasi viestin sisältö:<br /><br />');
define('SECONDARY_MESSAGE', 'Hei %s,<br /><br />' . 'Sinulle on lähetetty ' . TEXT_GV_NAME . ' jonka arvo on %s. ' . TEXT_GV_NAMES . 'tin lähettäjä: %s');
define('PERSONAL_MESSAGE', '%s sanoo');
define('TEXT_SUCCESS', TEXT_GV_NAME . ' on lähetetty onnistuneesti');
define('TEXT_SEND_ANOTHER', 'Haluaisitko lähettää toisen ' . TEXT_GV_NAMES . 'in?');
define('TEXT_AVAILABLE_BALANCE','Lahjakorttitilisi arvo: ');

define('EMAIL_GV_TEXT_SUBJECT', '%s on lähettänyt sinulle lahjan!');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', 'Onneksi olkoon, Olet saanut ' . TEXT_GV_NAMES . 'in arvoltaan %s');
define('EMAIL_GV_FROM', 'Tämän ' . TEXT_GV_NAMES . 'in on lähettänyt sinulle %s');
define('EMAIL_GV_MESSAGE', 'Viesti: ');
define('EMAIL_GV_SEND_TO', 'Hei, %s');
define('EMAIL_GV_REDEEM', 'Lunastaaksesi tämän ' . TEXT_GV_NAMES . 'in, paina alla olevaa linkkiä. Muista kirjoita ' . TEXT_GV_REDEEM . ' %s muistiin.' . "\n" . ' siltä varalta että ongelmia ilmaantuu.');
define('EMAIL_GV_LINK', 'Lunastaaksesi ' . TEXT_GV_NAMES . 'in mene osoitteeseen: ');
define('EMAIL_GV_VISIT', ' tai mene sivulle ');
define('EMAIL_GV_ENTER', ' ja syötä ' . TEXT_GV_REDEEM . ' ');
define('EMAIL_GV_FIXED_FOOTER', 'Jos sinulla on ongelmia ' . TEXT_GV_NAMES . 'in lunastuksessa käyttäessäsi yllä olevaa linkkiä, ' . "\n" .
                                'voit syöttää ' . TEXT_GV_NAMES . 'in ' . TEXT_GV_REDEEM . 'n ollessasi verkkokauppamme kassalla.');
define('EMAIL_GV_SHOP_FOOTER', '');
?>