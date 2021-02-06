<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 Apr 08 Modified in v1.5.7 $
 */
// Finnish translation Ver. 1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 
define('HEADING_TITLE', 'Ylläpito');
define('HEADING_TITLE_EXPIRED', 'Ylläpito - Salasana vanhentunut!');

define('TEXT_SUBMIT','Kirjaudu');
define('TEXT_ADMIN_NAME', 'Ylläpito käyttäjän nimi');
define('TEXT_ADMIN_PASS', 'Ylläpito salsana');
define('TEXT_ADMIN_OLD_PASSWORD', 'Vanha salasana');
define('TEXT_ADMIN_NEW_PASSWORD', 'Uusi salasana');
define('TEXT_ADMIN_CONFIRM_PASSWORD', 'Vahvista salasana');

define('ERROR_WRONG_LOGIN', 'Väärä tunnus tai salasana.');
define('ERROR_SECURITY_ERROR', 'Tietoturvavirhe kirjauduttaessa.');

define('TEXT_PASSWORD_FORGOTTEN', 'Salasana unohtunut?');

define('LOGIN_EXPIRY_NOTICE', 'Toimeton ylläpitäjän istunto päättyy automaattisesti 15 minuutissa.');
define('ERROR_PASSWORD_EXPIRED', 'Huom: Salasanasi on vanhentunut. Aseta uusi salasana. Salasanassa tulee olla <strong>NUMEROITA ja KIRJAIMIA ja sen on oltava vähintään 7 merkkiä pitkä.</strong>');
define('TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED', 'Tietoturvasyistä, väliaikainen salasanasi on vaihdettava. Aseta uusi salasana.<br />Salasanassa <strong>tulee olla NUMEROITA ja KIRJAIMIA ja sen on oltava vähintään 7 merkkiä pitkä.</strong>');
define('SUCCESS_PASSWORD_UPDATED', 'Password updated');

define('TEXT_EMAIL_SUBJECT_LOGIN_FAILURES', 'Ylläpitäjän kirjautumisvirhe');
define('TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES', 'Järjestelmä on havainnut useita epäonnistuneita kirjautumisyrityksiä ylläpitoon. Järjestelmä lukitsee käyttäjätunnuksen 30 minuutiksi 6 epäonnistuneen kirjautumisyrityksen jälkeen. Jokainen uusi kirjautumisyritys ennen lukon aukeamista pidentää tätä aikaa 30 minuuttia lisää. Tunnuksen ollessa lukittuna, sillä ei voi kirjautua ylläpitoon, eikä sen salasanaa pysty vaihtamaan.' . "\n\nViimeisin kirjautumisyritys tapahtui IP osoitteesta: %s.\n\n\n");

define('EXPIRED_DUE_TO_SSL', 'Huom: Salasanasi on vanhentunut koska ylläpitosivujen SSL asetusta on muutettu. Paremman tietoturvan takaamiseksi salasanaa on vaihdettava tämän muutoksen johdosta.');
