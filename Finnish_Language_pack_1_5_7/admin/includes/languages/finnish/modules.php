<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 16 Modified in v1.5.7 $
 */
// Finnish translation Ver. 1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 
define('HEADING_TITLE_MODULES_PAYMENT', 'Maksumodulit');
define('HEADING_TITLE_MODULES_SHIPPING', 'Toimitusmodulit');
define('HEADING_TITLE_MODULES_ORDER_TOTAL', 'Välisummamodulit');

define('TABLE_HEADING_MODULES', 'Modulit');
define('TABLE_HEADING_SORT_ORDER', 'Lajittelujärjestys');
define('TABLE_HEADING_ORDERS_STATUS','Tilauksen tila');
define('TABLE_HEADING_ACTION', 'Toiminto');

define('TEXT_MODULE_DIRECTORY', 'Modulin hakemisto:');
define('ERROR_MODULE_FILE_NOT_FOUND', 'VIRHE: Modulia ei ladattu puuttuvan kielitiedoston takia: ');
define('TEXT_EMAIL_SUBJECT_ADMIN_SETTINGS_CHANGED', 'Varoitus: Ylläpidon asetuksia on muutettu verkkokaupassasi.');
define('TEXT_EMAIL_MESSAGE_ADMIN_SETTINGS_CHANGED', 'Tämä on automaattinen ilmoitus siitä, että Zen Cart verkkokauppasi ylläpidon asetuksia on muutettu: ' . "\n\n" . 'Huom: Ylläpidon asetuksia on MUUTETTU [%s] modulin, Zen Cart ylläpito käyttäjän %s.' . "\n\n" . 'Jos muutokset on tehty tietämättäsi, on suositeltavaa että tarkastat uudet asetukset..' . "\n\n" . 'Jos tiedät jo näistä muutoksista, voit ohittaa tämän automaattisen sähköpostin.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_INSTALLED', 'Tämä on automaattinen ilmoitus siitä, että Zen Cart verkkokauppasi ylläpidon asetuksia on muutettu: ' . "\n\n" . 'Huom: Ylläpidon asetuksia on muutettu. Uusi moduli [%s] on asennettu Zen Cart ylläpito käyttäjän %s.' . "\n\n" . 'Jos muutokset on tehty tietämättäsi, on suositeltavaa että tarkastat uudet asetukset.' . "\n\n" . 'Jos tiedät jo näistä muutoksista, voit ohittaa tämän automaattisen sähköpostin.');
define('TEXT_EMAIL_MESSAGE_ADMIN_MODULE_REMOVED', 'Tämä on automaattinen ilmoitus siitä, että Zen Cart verkkokauppasi ylläpidon asetuksia on muutettu: ' . "\n\n" . 'Huom: Ylläpidon asetuksia on muutettu. Moduli [%s] on poistettu Zen Cart ylläpito käyttäjän %s.' . "\n\n" . 'Jos muutokset on tehty tietämättäsi, on suositeltavaa että tarkastat uudet asetukset.' . "\n\n" . 'Jos tiedät jo näistä muutoksista, voit ohittaa tämän automaattisen sähköpostin.');
define('TEXT_DELETE_INTRO', 'Oletko varma että haluat poistaa tämän modulin?');
define('TEXT_WARNING_SSL_EDIT', 'ILMOITUS: <a href="https://docs.zen-cart.com/user/installing/enable_ssl/" rel="noopener" target="_blank">Tämän modulin muokkaaminen on estetty, kunnes ylläpitosivut ovat suojattu SSL -salauksella</a>.');
define('TEXT_WARNING_SSL_INSTALL', 'ILMOITUS: <a href="https://docs.zen-cart.com/user/installing/enable_ssl/" rel="noopener" target="_blank">Tämän modulin asentaminen on estetty, kunnes ylläpitosivut ovat suojattu SSL -salauksella</a>.');

// Generic validation messages for modules
define('TEXT_POSITIVE_INT','%s on oltava kokonaisluku suurempi tai yhtä suuri kuin 0');
define('TEXT_POSITIVE_FLOAT','%s desimaalin on oltava suurempi tai yhtä suuri kuin 0');
