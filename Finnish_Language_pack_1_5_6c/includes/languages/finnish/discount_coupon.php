<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * $Id: discount_coupon.php 14712 2009-10-28 22:05:08Z ajeh $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.5 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 

define('NAVBAR_TITLE', 'Alennuskuponki');
define('HEADING_TITLE', 'Alennuskuponki');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span> ei näytä olevan oikea lunastuskoodi. Yritä uudelleen.');

define('HEADING_COUPON_HELP', 'Apua alennuskupongin käyttöön');
define('TEXT_CLOSE_WINDOW', 'Sulje ikkuna [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">Alennuskuponkikoodi jonka olet syöttänyt on myönnetty käyttäjälle ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '<p>Sinun täytyy käyttää %s käyttääksesi tätä kuponkia.</p>');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">Alennus:</span> %s</p><p class="smallText">Rajoituksia saattaa olla voimassa. Katso alta tarkemmat yksityiskohdat.</p>');
define('TEXT_COUPON_HELP_DATE', '<p>Kuponki on voimassa %s - %s välisenä aikana</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">Alennuskupongin rajoitukset</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">Tuoteryhmärajoitukset:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">Tuoterajoitukset:</p>');
define('TEXT_ALLOW', 'Salli');
define('TEXT_DENY', 'Kiellä');

define('TEXT_NO_CAT_RESTRICTIONS', '<p>Tämä kuponki on käytettävissä kaikissa tuoteryhmissä.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Tämä kuponki on käytettävissä kaikkiin tuotteisiin.</p>');
define('TEXT_CAT_ALLOWED', ' (Käytettävissä tähän ryhmään)');
define('TEXT_CAT_DENIED', ' (Ei käytettävissä tähän ryhmään)');
define('TEXT_PROD_ALLOWED', ' (Käytettävissä tähän tuotteeseen)');
define('TEXT_PROD_DENIED', ' (Ei käytettävissä tähän tuotteeseen)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">Alennuskuponkeja ei voi käyttää ' . TEXT_GV_NAMES . 'in ostamiseen. Rajoitus 1 kuponki per tilaus.</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', 'Hae kupongin tiedot ... ');
define('TEXT_DISCOUNT_COUPON_ID', 'Kupongin koodi: ');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Laskutusosoitetta koskee rajoituksia.');
?>