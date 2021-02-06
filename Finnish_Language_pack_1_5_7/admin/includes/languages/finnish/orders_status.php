<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: orders_status.php 1105 2005-04-04 22:05:35Z birdbrain $
//
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
define('HEADING_TITLE', 'Tilauksen tilat');

define('TABLE_HEADING_ORDERS_STATUS', 'Tilauksen tilat');
define('TABLE_HEADING_ACTION', 'Toiminto');
define('TABLE_HEADING_ORDERS_STATUS_ID', 'Tilaukset ID');
define('TABLE_HEADING_SORT_ORDER', 'Lajittelujärjestys');

define('TEXT_INFO_SORT_ORDER', 'Lajittelujärjestys: ');

define('TEXT_INFO_EDIT_INTRO', 'Tee tarvittavat muutokset');
define('TEXT_INFO_ORDERS_STATUS_NAME', 'Tilauksen tila:');
define('TEXT_INFO_INSERT_INTRO', 'Täytä uuden tilauksen tilan tiedot');
define('TEXT_INFO_DELETE_INTRO', 'Haluatko varmasti poistaa tämän tilauksen tilan?');
define('TEXT_INFO_HEADING_NEW_ORDERS_STATUS', 'Uusi tilauksen tila');
define('TEXT_INFO_HEADING_EDIT_ORDERS_STATUS', 'Muokkaa tilauksen tilaa');
define('TEXT_INFO_HEADING_DELETE_ORDERS_STATUS', 'Poista tilauksen tila');

define('ERROR_REMOVE_DEFAULT_ORDER_STATUS', 'Virhe: Oletus tilaa ei voi poistaa. Aseta jokin muu tilauksen tila oletukseksi ja yritä uudelleen.');
define('ERROR_STATUS_USED_IN_ORDERS', 'Virhe: Tämä tila on käytössä.');
define('ERROR_STATUS_USED_IN_HISTORY', 'Virhe: Tämä tila on käytössä tilauksen tilahistorioissa.');
?>