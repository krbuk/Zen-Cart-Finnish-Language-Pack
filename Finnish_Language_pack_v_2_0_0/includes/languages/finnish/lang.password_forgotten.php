<?php
// Finnish translation v2.0.0 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
$define = [
    'NAVBAR_TITLE_1' => 'Kirjaudu sisään',
    'NAVBAR_TITLE_2' => 'Salasana unohtunut',
    'HEADING_TITLE' => 'Salasana unohtunut',
    'TEXT_MAIN' => 'Syötä sähköpostiosoitteesi alle niin me lähetämme sinulle uuden salasanan.',
    'EMAIL_PASSWORD_REMINDER_SUBJECT' => STORE_NAME . ' - Uusi Salasana',
    'EMAIL_PASSWORD_REMINDER_BODY' => 'Uutta salasanaa pyydettiin osoitteesta ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Uusi salasanasi on: <b>   %s </b>' . "\n\nVoit muuttaa salasanan kirjautumalla sisään verkkokauppaamme ja menemällä tilin asetuksiin\n\n <br>Terveisin,<br>\n" . STORE_NAME,
    'SUCCESS_PASSWORD_SENT' => 'Kiitos. Jos tämä sähköpostiosoite on järjestelmässämme, lähetämme salasanan palautusohjeet kyseiseen sähköpostiosoitteeseen (muista tarkistaa roskapostikansiosi)',
];

return $define;
