<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Sun Oct 18 01:50:54 2015 -0400 Modified in v1.5.5 $
 */
// Finnish translation v1.5.5 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>

define('NAVBAR_TITLE_1', 'Kirjaudu sisään');
define('NAVBAR_TITLE_2', 'Salasana unohtunut?');

define('HEADING_TITLE', 'Salasana unohtunut?');

define('TEXT_MAIN', 'Syötä sähköpostiosoitteesi alle niin me lähetämme sinulle uuden salasanan.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Uusi Salasana');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Uutta salasanaa pyydettiin osoitteesta ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Uusi salasanasi on: <b>   %s </b>' . "\n\nVoit muuttaa salasanan kirjautumalla sisään verkkokauppaamme ja menemällä tilin asetuksiin\n\n <br>Terveisin,<br>\n" . STORE_NAME);

define('SUCCESS_PASSWORD_SENT', 'Onnistui: Uusi salasana on lähetetty sähköpostitse sinulle.');
?>