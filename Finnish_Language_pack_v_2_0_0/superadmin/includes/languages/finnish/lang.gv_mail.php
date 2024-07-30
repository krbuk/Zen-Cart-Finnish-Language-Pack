<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Zen4All 2020 Aug 20 New in v1.5.8-alpha $
 * Finnish translation v2.0.0 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
*/

$define = [
    'HEADING_TITLE' => 'Lähetä ' . '%%TEXT_GV_NAME%%' . ' asiakkaille',
    'TEXT_FROM' => 'Lähettäjä:',
    'TEXT_TO' => 'Vastaanottaja:',
    'TEXT_TO_CUSTOMERS' => 'Asiakasluetteloihin:',
    'TEXT_TO_EMAIL' => 'tai sähköpostiosoitteeseen:',
    'TEXT_TO_EMAIL_NAME' => 'Nimi (valinnainen):',
    'TEXT_TO_EMAIL_INFO' => 'alitse luettelo yllä olevasta avattavasta valikosta tai käytä seuraavia kenttiä yksittäisen sähköpostin lähettämiseen.',
    'TEXT_SUBJECT' => 'Aihe:',
    'TEXT_AMOUNT' => '%%TEXT_GV_NAME%%' . ' Arvo:',
    'ERROR_GV_AMOUNT' => 'Syötä luku murtolukujen desimaalipilkulla Esimerkki: 25.00.',
    'TEXT_AMOUNT_INFO' => '%%ERROR_GV_AMOUNT%%',
    'TEXT_HTML_MESSAGE' => 'HTML Viesti:',
    'TEXT_MESSAGE' => 'Text-Only Viesti:',
    'TEXT_MESSAGE_INFO' => '<p>Sisällytä mahdollisesti erityinen viesti, joka on lisätty ennen standardia ' . '%%TEXT_GV_NAME%%' . ' sähköpostiteksti.</p>',
    'NOTICE_EMAIL_SENT_TO' => 'Huom: %1s sähköposti lähetetty osoitteeseen %2s',
    'ERROR_NO_CUSTOMER_SELECTED' => 'Virhe: Asiakasta ei ole valittu.',
    'ERROR_NO_AMOUNT_ENTERED' => 'Virhe: Varmenteen arvo on virheellinen.',
    'ERROR_NO_SUBJECT' => 'Virhe: sähköpostiosoitetta ei syötetty.',
    'TEXT_GV_ANNOUNCE' => 'Ohessa ' . '%%TEXT_GV_NAME%%' . ' verkkokauppaamme, olkaa hyvä! %s.',
    'TEXT_GV_TO_REDEEM_TEXT' => 'Käytä seuraavaa linkkiä lunastaaksesi ' . '%%TEXT_GV_NAME%%' . "\n\n " . '%1$s%2$s' . "\n\n" . 'tai käy ' . STORE_NAME . " at " . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . "\n" . 'ja syötä koodi %2$s on the Checkout-Payment -sivulla.',
    'TEXT_GV_TO_REDEEM_HTML' => '<a href="%1$s%2$s">Napsauta tätä lunastaaksesi ' . '%%TEXT_GV_NAME%%' . '</a> tai käy <a href="' . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . '">' . STORE_NAME . '</a> ja syötä koodi <strong>%2$s</strong> Checkout-Payment -sivulla.',
];

return $define;
