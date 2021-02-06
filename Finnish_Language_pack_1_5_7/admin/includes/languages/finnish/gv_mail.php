<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2020 May 12 Modified in v1.5.7 $
 */
// Finnish translation Ver. 1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 

require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php';
define('HEADING_TITLE', 'Lähetä ' . TEXT_GV_NAME . ' asiakkaille');

define('TEXT_FROM', 'Lähettäjä:');
define('TEXT_TO', 'Vastaanottaja:');
define('TEXT_TO_CUSTOMERS', 'Asiakasluetteloihin:');
define('TEXT_TO_EMAIL', 'tai sähköpostiosoitteeseen:');
define('TEXT_TO_EMAIL_NAME', 'Nimi (valinnainen):');
define('TEXT_TO_EMAIL_INFO', '<span class="smallText">Valitse luettelo yllä olevasta avattavasta valikosta tai käytä seuraavia kenttiä yksittäisen sähköpostin lähettämiseen.</span>');
define('TEXT_SUBJECT', 'Aihe:');
define('TEXT_AMOUNT', TEXT_GV_NAME . ' Arvo:');
define('ERROR_GV_AMOUNT', '<span class="smallText">Syötä luku murtolukujen desimaalipilkulla Esimerkki: 25.00.</span>');
define('TEXT_AMOUNT_INFO', '<span class="smallText">' . ERROR_GV_AMOUNT . '</span>');
define('TEXT_HTML_MESSAGE', 'HTML<br>Viesti:');
define('TEXT_MESSAGE', 'Text-Only<br>Viesti:');
define('TEXT_MESSAGE_INFO', '<p>Sisällytä mahdollisesti erityinen viesti, joka on lisätty ennen standardia ' . TEXT_GV_NAME . ' sähköpostiteksti.</p>');

define('NOTICE_EMAIL_SENT_TO', 'Huom: %1s sähköposti lähetetty osoitteeseen %2s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Virhe: Asiakasta ei ole valittu.');
define('ERROR_NO_AMOUNT_ENTERED', 'Virhe: Varmenteen arvo on virheellinen.');
define('ERROR_NO_SUBJECT', 'Virhe: sähköpostiosoitetta ei syötetty.');

define('TEXT_GV_ANNOUNCE', 'Ohessa ' . TEXT_GV_NAME . ' verkkokauppaamme, olkaa hyvä! %s.');
define('TEXT_GV_TO_REDEEM_TEXT', 'Käytä seuraavaa linkkiä lunastaaksesi ' . TEXT_GV_NAME . "\n\n ". '%1$s%2$s' . "\n\n" . 'tai käy ' . STORE_NAME . " - " . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . "\n" . 'ja syötä koodi %2$s Checkout-Payment -sivulla.');
define('TEXT_GV_TO_REDEEM_HTML', '<a href="%1$s%2$s">Napsauta tätä lunastaaksesi ' . TEXT_GV_NAME . '</a> tai käy <a href="' . HTTP_CATALOG_SERVER . DIR_WS_CATALOG . '">' . STORE_NAME . '</a> ja syötä koodi <strong>%2$s</strong> Checkout-Payment -sivulla.');

