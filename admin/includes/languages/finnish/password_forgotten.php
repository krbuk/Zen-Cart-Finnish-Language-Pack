<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: bislewl  Wed Jan 20 16:12:13 2016 -0600 Modified in v1.5.5 $
 */

define('HEADING_TITLE', 'Salasanan nollaus');

define('TEXT_ADMIN_EMAIL', 'Ylläpitäjän sähköpostiosoite: ');
define('TEXT_BUTTON_REQUEST_RESET', 'Lähetä pyyntö');
define('TEXT_BUTTON_LOGIN', 'Kirjaudu');
define('TEXT_BUTTON_CANCEL', 'Peruuta');

define('ERROR_WRONG_EMAIL', 'Virheellinen sähköpostiosoite.');
define('ERROR_WRONG_EMAIL_NULL', 'The cake is a lie!<br />Mene pois... ;)');
define('MESSAGE_PASSWORD_SENT', 'Kiitos. Jos antamasi sähköpostiosoite vastaa tietokantaamme olevaa admin-tiliä, uusi salasana lähetetään siihen sähköpostiosoitteeseen.<br />Tarkista sähköposti ja napsauta sitten kirjautumalla alla olevaan kirjautumiseen uuden väliaikaisen salasanan avulla.');

define('TEXT_EMAIL_SUBJECT_PWD_RESET', 'Pyytämäsi salasanan nollaus');
define('TEXT_EMAIL_MESSAGE_PWD_RESET', 'Uutta salasanaa pyydettiin osoitteesta %s.' . "\n\n" . 'Uusi väliaikainen salasanasi on:' . "\n\n   %s\n\nVäliaikainen salasana täytyy vaihtaa heti kun kirjaudut sisään.\n\nVäliaikainen salasana vanhenee 24 tunnissa.\n\n\n");
?>