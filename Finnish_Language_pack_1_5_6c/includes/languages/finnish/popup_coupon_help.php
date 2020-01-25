<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2019 May 25 Modified in v1.5.6b $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.6b by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 
define('HEADING_COUPON_HELP', 'Alennuskupongin ohje');
define('TEXT_CLOSE_WINDOW', 'Sulje ikkuna [x]');
define('TEXT_COUPON_HELP_HEADER', '<strong>Valitun kupongin tiedot.</strong>');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Kupongin nimi: %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />Kuponki on arvoltaan %s tässä tilauksessa');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />Sinun täytyy ostaa vähintään %s käyttääksesi tätä kuponkia');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Tämä kuponki oikeuttaa ilmaiseen toimitukseen');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Kupongin tiedot: %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Kuponki on voimassa alkaen %s ja se vanhenee %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Tuote/ryhmä rajoitukset');
define('TEXT_COUPON_HELP_CATEGORIES', 'Ryhmä');
define('TEXT_COUPON_HELP_PRODUCTS', 'Tuote');
define('TEXT_ALLOW', 'Salli');
define('TEXT_DENY', 'Kiellä');

define('TEXT_ALLOWED', ' (Sallittu)');
define('TEXT_DENIED', ' (Ei Sallittu)');

define('TEXT_NO_CAT_TOP_ONLY_DENY', '<p>Tällä kuponilla on erityisiä tuotekehitysrajoituksia.');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Tätä kuponkia voi käyttää kaikissa ryhmissä.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Tätä kuponkia voi käyttää kaikkiin tuotteisiin.</p>');
define('TEXT_NO_PROD_SALES', '<p>Tämä kuponki ei koske tuotteita myynnissä.</p>');

// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','Alennuskuponkia ei voi käyttää ' . TEXT_GV_NAMES . 'tien ostamiseen.');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Laskutusosoitetta koskee rajoituksia.');
?>

