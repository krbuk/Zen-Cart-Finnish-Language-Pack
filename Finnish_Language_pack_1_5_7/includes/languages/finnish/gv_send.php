<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 10 Modified in v1.5.7 $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
define('HEADING_TITLE', 'Lähetä ' . TEXT_GV_NAME);
define('HEADING_TITLE_CONFIRM_SEND', 'Lähetä ' . TEXT_GV_NAME . ' Vahvistus');
define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . ' Lähetä');
define('NAVBAR_TITLE', 'Lähetä ' . TEXT_GV_NAME);
define('EMAIL_SUBJECT', 'Viestin lähettäjä ' . STORE_NAME);
define('HEADING_TEXT','Ole hyvä ja täytä haluamasi ' . TEXT_GV_NAME . ' in tiedot alle. Lisätietoja saat sivulta <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a>');
define('ENTRY_NAME', 'Vastaanottajan Nimi:');
define('ENTRY_EMAIL', 'Vastaanottajan Sähköpostiosoite:');
define('ENTRY_MESSAGE', 'Viesti Vastaanottajalle:');
define('ENTRY_AMOUNT', 'Arvo jonka haluat lähettää:');
define('ERROR_ENTRY_TO_NAME_CHECK', 'Vastaanottajan nimi puuttuu, täytä kenttä ja yritä uudelleen. ');
define('ERROR_ENTRY_AMOUNT_CHECK', TEXT_GV_NAME . ' virheellinen arvo.');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Virheelinen sähköpostiosoite');
define('MAIN_MESSAGE', 'You are sending a ' . TEXT_GV_NAME . ' Olet lähettämässä ' . TEXT_GV_NAMES . 'tia jonka arvo on %s henkilölle nimeltään %s jonka sähköpostiosoite on %s. Voit korjata viestiä painamalla <strong>muokkaa</strong> -nappia.<br /><br />Kirjoittamasi viestin sisältö:<br /><br />');
define('SECONDARY_MESSAGE', 'Hei %s,<br /><br />' . 'Sinulle on lähetetty ' . TEXT_GV_NAME . ' jonka arvo on %s. ' . TEXT_GV_NAMES . 'tin lähettäjä: %s');
define('PERSONAL_MESSAGE', '%s sanoo:');
define('TEXT_SUCCESS', TEXT_GV_NAME . ' on lähetetty onnistuneesti');
define('TEXT_SEND_ANOTHER', 'Haluaisitko lähettää toisen ' . TEXT_GV_NAMES . 'in?');
define('TEXT_AVAILABLE_BALANCE',  'Lahjakorttitilisi arvo');

define('EMAIL_GV_TEXT_SUBJECT', '%s on lähettänyt sinulle lahjan!');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', 'Onneksi olkoon, Olet saanut ' . TEXT_GV_NAME . ' in arvoltaan %s');
define('EMAIL_GV_FROM', 'Tämän ' . TEXT_GV_NAMES . 'in on lähettänyt sinulle %s');
define('EMAIL_GV_MESSAGE', 'Viesti: ');
define('EMAIL_GV_SEND_TO', 'Hei, %s');
define('EMAIL_GV_REDEEM', 'Lunastaaksesi tämän ' . TEXT_GV_NAME . ' in, paina alla olevaa linkkiä. Muista kirjoita ' . TEXT_GV_REDEEM . ': %s muistiin siltä varalta että ongelmia ilmaantuu.');
define('EMAIL_GV_LINK', 'Lunasta napsauttamalla tätä');
define('EMAIL_GV_FIXED_FOOTER', 'Jos sinulla on ongelmia ' . TEXT_GV_NAME . ' in lunastuksessa käyttäessäsi yllä olevaa linkkiä, ' . "\n" . 'voit syöttää ' . TEXT_GV_NAME . ' in ' . TEXT_GV_REDEEM . ' n ollessasi verkkokauppamme kassalla.');
define('EMAIL_GV_SHOP_FOOTER', '');
