<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2022 Jan 11 New in v1.5.8-alpha $
 * Finnish translation v2.0.0 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
*/

$define = [
    'HEADING_TITLE' => 'Ylläpito Kirjaudu Sisään',
    'HEADING_TITLE_EXPIRED' => 'Ylläpito - Salasana vanhentunut!',
    'TEXT_SUBMIT' => 'Kirjaudu',
    'TEXT_ADMIN_PASS' => 'Ylläpitäjän salasana',
    'TEXT_ADMIN_OLD_PASSWORD' => 'Vanha salasana',
    'TEXT_ADMIN_NEW_PASSWORD' => 'Uusi salasana',
    'TEXT_ADMIN_CONFIRM_PASSWORD' => 'Vahvista salasana',
    'ERROR_WRONG_LOGIN' => 'Väärä käyttäjätunnus tai salasana..',
    'ERROR_SECURITY_ERROR' => 'Tietoturvavirhe kirjauduttaessa.',
    'TEXT_PASSWORD_FORGOTTEN' => 'Unohditko salasanasi? ',
    'LOGIN_EXPIRY_NOTICE' => '',
    'ERROR_PASSWORD_EXPIRED' => 'Huom: Salasanasi on vanhentunut. Aseta uusi salasana. Salasanassa tulee olla <strong>NUMEROITA ja KIRJAIMIA ja sen on oltava vähintään 7 merkkiä pitkä.</strong>',
    'TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED' => 'Tietoturvasyistä, väliaikainen salasanasi on vaihdettava. Aseta uusi salasana.<br />Salasanassa <strong>tulee olla NUMEROITA ja KIRJAIMIA ja sen on oltava vähintään 7 merkkiä pitkä.</strong>',
    'SUCCESS_PASSWORD_UPDATED' => 'Salasana päivitetty',
    'TEXT_EMAIL_SUBJECT_LOGIN_FAILURES' => 'Ylläpitäjän kirjautumisvirhe',
    'TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES' => 'Järjestelmä on havainnut useita epäonnistuneita kirjautumisyrityksiä ylläpitoon. Järjestelmä lukitsee käyttäjätunnuksen 30 minuutiksi 6 epäonnistuneen kirjautumisyrityksen jälkeen. Jokainen uusi kirjautumisyritys ennen lukon aukeamista pidentää tätä aikaa 30 minuuttia lisää. Tunnuksen ollessa lukittuna, sillä ei voi kirjautua ylläpitoon, eikä sen salasanaa pysty vaihtamaan.' . "\n\nViimeisin kirjautumisyritys tapahtui IP osoitteesta: %s.\n\n\n",
    'EXPIRED_DUE_TO_SSL' => 'Huom: Salasanasi on vanhentunut koska ylläpitosivujen SSL asetusta on muutettu. Paremman tietoturvan takaamiseksi salasanaa on vaihdettava tämän muutoksen johdosta.',
];

return $define;
