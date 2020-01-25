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
// $Id: define_pages_editor.php 1969 2005-09-13 06:57:21Z drbyte $
//
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.5 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>

define('HEADING_TITLE', 'Muokataan sivuja kielelle: ');
define('NAVBAR_TITLE', 'Define Pages muokkain');

define('TEXT_INFO_EDIT_PAGE', 'Valitse sivu jota haluat muokata:');

define('TEXT_INFO_MAIN_PAGE', 'Etusivu');

define('TEXT_INFO_SHIPPINGINFO', 'Toimitusehdot');
define('TEXT_INFO_PRIVACY', 'Yksityisyyssuojatiedote');
define('TEXT_INFO_CONDITIONS', 'Käyttöehdot');
define('TEXT_INFO_CONTACT_US', 'Yhteystiedot');
define('TEXT_INFO_CHECKOUT_SUCCESS', 'Tilaus vastaanotettu');

define('TEXT_INFO_PAGE_2', 'Sivu 2');
define('TEXT_INFO_PAGE_3', 'Sivu 3');
define('TEXT_INFO_PAGE_4', 'Sivu 4');

define('TEXT_FILE_DOES_NOT_EXIST', 'Sivua ei ole olemassa: %s');

define('ERROR_FILE_NOT_WRITEABLE', 'Virhe: Tähän tiedostoon ei voi kirjoittaa. Muuta tiedoston %s kirjoitusoikeuksia');

define('TEXT_INFO_SELECT_FILE', 'Valitse muokattava tiedosto ...');
define('TEXT_INFO_EDITING', 'Muokataan sivua:');

define('TEXT_INFO_CAUTION','Huom: Sinun tulisi aina muokata tiedostoja jotka ovat nykyisen ulkoasun override hakemistossa, Esim: /languages/' . $_SESSION['language'] . '/html_includes/' . $template_dir . '<br />Muista varmuuskopioida tiedostosi!');
?>