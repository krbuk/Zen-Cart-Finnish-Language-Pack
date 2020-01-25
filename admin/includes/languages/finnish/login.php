<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2019 May 25 Modified in v1.5.6b $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.6b by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>

define('HEADING_TITLE', 'Ylläpito');
define('HEADING_TITLE_EXPIRED', 'Salasana vanhentunut!');

define('TEXT_LOGIN','Kirjaudu sisään');
define('TEXT_SUBMIT','Lähetä');
define('TEXT_ADMIN_NAME', 'Käyttäjä:');
define('TEXT_ADMIN_PASS', 'Salsana:');
define('TEXT_ADMIN_OLD_PASSWORD', 'Vanha salasana:');
define('TEXT_ADMIN_NEW_PASSWORD', 'Uusi salasana:');
define('TEXT_ADMIN_CONFIRM_PASSWORD', 'Vahvista salasana:');

define('ERROR_WRONG_LOGIN', 'Väärä tunnus tai salasana.');
define('ERROR_SECURITY_ERROR', 'Tietoturvavirhe kirjauduttaessa.');

define('TEXT_PASSWORD_FORGOTTEN', 'Salasana unohtunut?');

define('LOGIN_EXPIRY_NOTICE', 'Toimeton ylläpitäjän istunto päättyy automaattisesti 15 minuutissa.');
define('ERROR_PASSWORD_EXPIRED', 'Huom: Salasanasi on vanhentunut. Aseta uusi salasana. Salasanassa tulee olla numeroita ja kirjaimia ja sen on oltava vähintään 7 merkkiä pitkä.');
define('TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED', 'Tietoturvasyistä, väliaikainen salasanasi on vaihdettava. Aseta uusi salasana.<br />Salasanassa tulee olla numeroita ja kirjaimia ja sen on oltava vähintään 7 merkkiä pitkä.');

define('TEXT_EMAIL_SUBJECT_LOGIN_FAILURES', 'Ylläpitäjän kirjautumisvirhe');
define('TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES', 'Järjestelmä on havainnut useita epäonnistuneita kirjautumisyrityksiä ylläpitoon. Järjestelmä lukitsee käyttäjätunnuksen 30 minuutiksi 6 epäonnistuneen kirjautumisyrityksen jälkeen. Jokainen uusi kirjautumisyritys ennen lukon aukeamista pidentää tätä aikaa 30 minuuttia lisää. Tunnuksen ollessa lukittuna, sillä ei voi kirjautua ylläpitoon, eikä sen salasanaa pysty vaihtamaan.' . "\n\nViimeisin kirjautumisyritys tapahtui IP osoitteesta: %s.\n\n\n");

define('EXPIRED_DUE_TO_SSL', 'Huom: Salasanasi on vanhentunut koska ylläpitosivujen SSL asetusta on muutettu. Paremman tietoturvan takaamiseksi salasanaa on vaihdettava tämän muutoksen johdosta.');
?>