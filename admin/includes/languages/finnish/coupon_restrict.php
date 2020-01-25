<?php
/**
 * @package admin
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Drbyte Wed Aug 2 14:55:16 2017 -0400 Modified in v1.5.6 $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.6 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>

define('HEADING_TITLE', 'Alennuskuponkien Tuote/Ryhmä rajoitukset');
define('HEADING_TITLE_CATEGORY', 'Ryhmärajoitukset');
define('HEADING_TITLE_PRODUCT', 'Tuoterajoitukset');

define('HEADER_COUPON_ID', 'Kupongin ID');
define('HEADER_COUPON_NAME', 'Kupongin nimi');
define('HEADER_CATEGORY_ID', 'Ryhmän ID');
define('HEADER_CATEGORY_NAME', 'Ryhmän nimi');
define('HEADER_PRODUCT_ID', 'Tuotteen ID');
define('HEADER_PRODUCT_NAME', 'Tuotteen nimi');
define('HEADER_RESTRICT_ALLOW', 'Salli');
define('HEADER_RESTRICT_DENY', 'Estä');
define('HEADER_RESTRICT_REMOVE', 'Poista');
define('IMAGE_ALLOW', 'Salli');
define('IMAGE_DENY', 'Estä');
define('IMAGE_REMOVE', 'Poista');
define('TEXT_ALL_CATEGORIES', 'Kaikki ryhmät');

define('MAX_DISPLAY_RESTRICT_ENTRIES', 20);
define('TEXT_ALL_PRODUCTS_ADD', 'Lisää kaikki ryhmän tuotteet');
define('TEXT_ALL_PRODUCTS_REMOVE', 'Poista kaikki ryhmän tuotteet');
define('TEXT_INFO_ADD_DENY_ALL', '<strong>Lisätessä kaikki ryhmän tuotteet: Vain ne tuotteet joita ei ole jo rajoitettu lisätään.<br />
                    Poistaessa kaikki ryhmän tuotteet: Vain estetyt ja sallitut tuotteet poistetaan.</strong>');

define('TEXT_MANUFACTURER', 'Valmistaja: ');
define('TEXT_CATEGORY', 'Ryhmä: ');
define('ERROR_DISCOUNT_COUPON_DEFINED_CATEGORY', 'Ryhmä ei valmis'); 
define('ERROR_DISCOUNT_COUPON_DEFINED_PRODUCT', 'Tuote ei valmis');

define('HEADER_MANUFACTURER_NAME', '<br> -- TAI -- <br>' . 'Valmistaja: ');
define('TEXT_ALL_MANUFACTURERS_ADD', 'Lisää kaikki valmistajan tuotteet');
define('TEXT_ALL_MANUFACTURERS_REMOVE', 'Poista kaikki valmistajan tuotteet');

define('HEADER_PRODUCT_STATUS', 'Tila');
define('HEADER_PRODUCT_MODEL', 'Malli');

define('ERROR_RESET_CATEGORY_MANUFACTURER', 'Luokka- ja valmistaja-suodattimet nollataan. Käytä suodattimia erikseen.');

define('TEXT_PULLDOWN_ALLOW', 'Salli');
define('TEXT_PULLDOWN_DENY', 'Estä');
define('TEXT_SUBMIT_CATEGORY_ADD', 'Lisää');
define('TEXT_SUBMIT_PRODUCT_UPDATE', 'Päivittää');
?>