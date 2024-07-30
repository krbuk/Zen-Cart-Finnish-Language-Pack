<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2022 Feb 14 New in v1.5.8-alpha $
 * Finnish translation v2.0.0 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
*/

$define = [
    'HEADING_TITLE_MODULES_PAYMENT' => 'Maksumodulit',
    'HEADING_TITLE_MODULES_SHIPPING' => 'Toimitusmodulit',
    'HEADING_TITLE_MODULES_ORDER_TOTAL' => 'Välisummamodulit',
    'TABLE_HEADING_ORDERS_STATUS' => 'Tilauksen tila',
    'TEXT_MODULE_DIRECTORY' => 'Modulin hakemisto:',
    'ERROR_MODULE_FILE_NOT_FOUND' => 'VIRHE: Modulia ei ladattu puuttuvan kielitiedoston takia: ',
    'TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED' => 'Varoitus: Ylläpidon asetuksia on muutettu verkkokaupassasi "' . STORE_NAME . '"',
    'TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED' => 'Tämä on automaattinen sähköposti lähettäjältä "' . STORE_NAME . '" ilmoittaaksesi muutoksesta, joka on juuri tehty hallinta-asetuksiin: ' . "\n\n" . 'Huom: Ylläpidon asetuksia on MUUTETTU [%s] modulin, Zen Cart ylläpito käyttäjän %s.' . "\n\n" . 'Jos muutokset on tehty tietämättäsi, on suositeltavaa että tarkastat uudet asetukset.' . "\n\n" . 'Jos tiedät jo näistä muutoksista, voit ohittaa tämän automaattisen sähköpostin.',
    'TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED' => 'Tämä on automaattinen sähköposti lähettäjältä "' . STORE_NAME . '" ilmoittaaksesi muutoksesta, joka on juuri tehty hallinta-asetuksiin: ' . "\n\n" . 'Huom: Ylläpidon asetuksia on muutettu. Uusi moduli [%s] on asennettu Zen Cart ylläpito käyttäjän %s.' . "\n\n" . 'Jos muutokset on tehty tietämättäsi, on suositeltavaa että tarkastat uudet asetukset.' . "\n\n" . 'Jos tiedät jo näistä muutoksista, voit ohittaa tämän automaattisen sähköpostin.',
    'TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED' => 'Tämä on automaattinen sähköposti lähettäjältä "' . STORE_NAME . '" ilmoittaaksesi muutoksesta, joka on juuri tehty hallinta-asetuksiin: ' . "\n\n" . 'Huom: Ylläpidon asetuksia on muutettu. Moduli [%s] on poistettu Zen Cart ylläpito käyttäjän %s.' . "\n\n" . 'Jos muutokset on tehty tietämättäsi, on suositeltavaa että tarkastat uudet asetukset.' . "\n\n" . 'Jos tiedät jo näistä muutoksista, voit ohittaa tämän automaattisen sähköpostin.',
    'TEXT_DELETE_INTRO' => 'Oletko varma että haluat poistaa tämän modulin?',
    'TEXT_WARNING_SSL_EDIT' => 'VAROITUS: <a href="https://docs.zen-cart.com/user/installing/enable_ssl/" rel="noopener" target="_blank">Tämän modulin muokkaaminen on estetty, kunnes ylläpitosivut ovat suojattu SSL -salauksella</a>.',
    'TEXT_WARNING_SSL_INSTALL' => 'VAROITUS: <a href="https://docs.zen-cart.com/user/installing/enable_ssl/" rel="noopener" target="_blank">Tämän modulin asentaminen on estetty, kunnes ylläpitosivut ovat suojattu SSL -salauksella</a>.',
    'TEXT_POSITIVE_INT' => '%s on oltava kokonaisluku suurempi tai yhtä suuri kuin 0',
    'TEXT_POSITIVE_FLOAT' => '%s desimaalin on oltava suurempi tai yhtä suuri kuin 0',
];

return $define;
