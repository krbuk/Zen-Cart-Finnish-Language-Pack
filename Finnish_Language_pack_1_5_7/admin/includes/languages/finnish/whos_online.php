<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 06 Modified in v1.5.7 $
 */
// Finnish translation Ver. 1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 
define('HEADING_TITLE', 'Sivulla olevat käyttäjät');
define('TABLE_HEADING_ONLINE', 'Online');
define('TABLE_HEADING_CUSTOMER_ID', 'ID');
define('TABLE_HEADING_FULL_NAME', 'Koko nimi');
define('TABLE_HEADING_IP_ADDRESS', 'IP osoite');
define('TABLE_HEADING_SESSION_ID', 'Istunto');
define('TABLE_HEADING_ENTRY_TIME', 'Saapumisaika');
define('TABLE_HEADING_LAST_CLICK', 'Viimeisin klikkaus');
define('TIME_PASSED_LAST_CLICKED', '<strong>Aika viime klikkauksesta:</strong> ');
define('TABLE_HEADING_LAST_PAGE_URL', 'Viimeisin avattu URL osoite');
define('TABLE_HEADING_ACTION', 'Toiminto');
define('TABLE_HEADING_SHOPPING_CART', 'Käyttäjän ostoskori');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'Välisumma');
define('TEXT_NUMBER_OF_CUSTOMERS', 'Tällä hetkellä paikalla on %s asiakasta');

define('WHOS_ONLINE_REFRESH_LIST_TEXT', 'PÄIVITÄ');
define('WHOS_ONLINE_LEGEND_TEXT','Selite:');
define('WHOS_ONLINE_ACTIVE_TEXT','Aktiivinen ja ostoskorissa tuotteita');
define('WHOS_ONLINE_INACTIVE_TEXT','Ei aktiivinen ja ostoskorissa tuotteita');
define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT','Aktiivinen ja ostoskorissa ei ole tuotteita');
define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT','Ei Aktiivinen eikä ostoskorissa ole tuotteita');
define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT','Ei aktiivisten viimeinen klikkaus >=');
define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT','Ei aktiivinen sitten saapumisen >');
define('WHOS_ONLINE_REMOVED_TEXT','poistetaan');

define('TEXT_SESSION_ID', '<strong>Istunnon ID:</strong> ');
define('TEXT_HOST', '<strong>Isäntänimi:</strong> ');
define('TEXT_USER_AGENT', '<strong>Selaimen tunniste:</strong> ');
define('TEXT_EMPTY_CART', '<strong>Tyhjä kori</strong>');
define('TEXT_WHOS_ONLINE_FILTER_SPIDERS', 'Älä näytä hakubotteja?');
define('TEXT_WHOS_ONLINE_FILTER_ADMINS', 'Älä näytä käyttäjiä ylläpitäjien IP osoitteista?');

// show Last Clicked time and host name - 1 both(default), 0=time-only
if (!defined('WHOIS_SHOW_HOST')) define('WHOIS_SHOW_HOST', '1');

define('TEXT_DUPLICATE_IPS', 'Monista IP-osoitteet: ');
define('TEXT_TOTAL_UNIQUE_USERS', 'Yhteensä yksittäisiä käyttäjiä: ');

define('TEXT_WHOS_ONLINE_TIMER_UPDATING', 'Päivitetään ');
define('TEXT_WHOS_ONLINE_TIMER_EVERY', 'joka %s sekuntti.&nbsp;&nbsp;');
define('TEXT_WHOS_ONLINE_TIMER_DISABLED', 'Päivitä itse');
define('TEXT_WHOS_ONLINE_TIMER_FREQ0', 'OFF');
define('TEXT_WHOS_ONLINE_TIMER_FREQ1', '5s');
define('TEXT_WHOS_ONLINE_TIMER_FREQ2', '15s');
define('TEXT_WHOS_ONLINE_TIMER_FREQ3', '30s');
define('TEXT_WHOS_ONLINE_TIMER_FREQ4', '1m');
define('TEXT_WHOS_ONLINE_TIMER_FREQ5', '5m');
define('TEXT_WHOS_ONLINE_TIMER_FREQ6', '10m');
define('TEXT_WHOS_ONLINE_TIMER_FREQ7', '14m');
