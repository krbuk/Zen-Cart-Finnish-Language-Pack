<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 Jun 07 Modified in v1.5.7 $
 */
// Finnish translation Ver. 1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 
define('HEADING_TITLE', 'Salasanan nollaus');

define('TEXT_ADMIN_EMAIL', 'Ylläpitäjän sähköpostiosoite');
define('TEXT_ADMIN_USERNAME', 'Ylläpitäjän käyttäjänimi');
define('TEXT_BUTTON_REQUEST_RESET', 'Lähetä pyyntö');
define('TEXT_BUTTON_LOGIN', 'Kirjaudu');
define('TEXT_BUTTON_CANCEL', 'Peruuta');

define('ERROR_WRONG_EMAIL', 'Virheellinen sähköpostiosoite.');
define('ERROR_WRONG_EMAIL_NULL', 'Mene pois gooberbrain :-P');
define('MESSAGE_PASSWORD_SENT', 'Kiitos. Jos antamasi sähköpostiosoite vastaa tietokantaamme olevaa admin-tiliä, uusi salasana lähetetään siihen sähköpostiosoitteeseen.<br />Tarkista sähköposti ja napsauta sitten kirjautumalla alla olevaan kirjautumiseen uuden väliaikaisen salasanan avulla.');

define('TEXT_EMAIL_SUBJECT_PWD_RESET', 'Pyytämäsi salasanan nollaus');
define('TEXT_EMAIL_MESSAGE_PWD_RESET', 'Uutta salasanaa pyydettiin osoitteesta %s.' . "\n\n" . 'Uusi väliaikainen salasanasi on:' . "\n\n   %s\n\nVäliaikainen salasana täytyy vaihtaa heti kun kirjaudut sisään.\n\nVäliaikainen salasana vanhenee 24 tunnissa.\n\n\n");

define('TEXT_EMAIL_SUBJECT_PWD_FAILED_RESET', 'Pääsy Varoitus!');
define('TEXT_EMAIL_MESSAGE_PWD_FAILED_RESET', "Epäonnistuneet yritykset järjestelmänvalvojan salasanan palauttamiseksi on vastaanotettu %s\n\nAnnettu virheellinen sähköpostiosoite ja / tai käyttäjänimi.\n\nJos sinulla on järjestelmänvalvojan tilejä, jotka jakavat saman sähköpostiosoitteen, sinun kannattaa harkita yksilöllisten sähköpostiosoitteiden määrittämistä niille helpottamiseksi.");