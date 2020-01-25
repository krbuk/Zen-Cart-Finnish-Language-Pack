<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2006 The zen-cart developers                           |
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
//  $Id: media_manager.php 4873 2006-11-02 09:12:46Z drbyte $
//
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.5 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>

define('HEADING_TITLE_MEDIA_MANAGER', 'Medioiden hallinta');

define('TABLE_HEADING_MEDIA', 'Kokoelman nimi');
define('TABLE_HEADING_ACTION', 'Toiminto');
define('TEXT_HEADING_NEW_MEDIA_COLLECTION', 'Uusi mediakokoelma');
define('TEXT_NEW_INTRO', 'Täytä uuden mediakokoelman tiedot');
define('TEXT_MEDIA_COLLECTION_NAME', 'Mediakokoelman nimi');
define('TEXT_MEDIA_EDIT_INSTRUCTIONS', 'Vaihda mediakokoelman nimi yllä olevaan kenttään ja paina tallenna.<br /><br />
                                        Käytä alla olevaa valikkoa lisätäksesi tai poistaaksesi medialeikkeitä mediakokoelmasta.');
define('TEXT_DATE_ADDED', 'Lisätty:');
define('TEXT_LAST_MODIFIED', 'Muokattu:');
define('TEXT_PRODUCTS', 'Linkitetyt tuotteet:');
define('TEXT_CLIPS', 'Linkitetyt leikkeet:');
define('TEXT_NO_PRODUCTS', 'Tässä ryhmässä ei ole tuotteita');
define('TEXT_HEADING_EDIT_MEDIA_COLLECTION', 'Muokkaa mediakokoelmaa');
define('TEXT_EDIT_INTRO', 'Korjaa uuden mediakokoelman tietoja');
define('TEXT_HEADING_DELETE_MEDIA_COLLECTION', 'Poista mediakokoelma');
define('TEXT_DELETE_INTRO', 'Haluatko poistaa tämän media kokoelman?');
  define('TEXT_DISPLAY_NUMBER_OF_MEDIA', 'Näyetetään <strong>%d</strong> / <strong>%d</strong> (<strong>%d</strong> Mediakokoelmasta)');
define('TEXT_ADD_MEDIA_CLIP', 'Lisää medialeike');
define('TEXT_MEDIA_CLIP_DIR', 'Tallenna media hakemistoon');
define('TEXT_MEDIA_CLIP_TYPE', 'Medialeikkeen tyyppi');
define('TEXT_HEADING_ASSIGN_MEDIA_COLLECTION', 'Liitä mediakokoelma tuotteeseen');
define('TEXT_PRODUCTS_INTRO', 'Voit liittää tai poistaa tämän mediakokoelman tuotteelta alla olevalla lomakkeella.');
define('IMAGE_PRODUCTS', 'Lisää tuotteeseen');
define('TEXT_DELETE_PRODUCTS', 'Poista tämä mediakokoelma ja kaikki siihen liitetyt tuotteet?');
define('TEXT_DELETE_WARNING_PRODUCTS', '<strong>VAROITUS:</strong> Tähän mediakokoelmaan on vielä liitettynä %s tuotetta!');
define('TEXT_WARNING_FOLDER_UNWRITABLE', 'HUOM: media hakemistoon ' . DIR_FS_CATALOG_MEDIA . ' ei voi kirjoittaa. Tiedostoja ei voida ladata palvelimelle.');

define('ERROR_UNKNOWN_DATA', 'VIRHE: Virheellistä dataa määritelty ... toiminto lopetettu');
define('TEXT_ADD','Lisää');

?>