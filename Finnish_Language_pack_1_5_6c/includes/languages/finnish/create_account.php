<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Sat Jul 21 16:05:31 2012 -0400 Modified in v1.5.1 $
 */

// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.5 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 

define('NAVBAR_TITLE', 'Tilin luonti');

define('HEADING_TITLE', 'Tilin tiedot');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">HUOM:</strong> Jos sinulla on jo tili, ole hyvä ja <a href="%s">kirjaudu sisään</a>.');

define('ERROR_CREATE_ACCOUNT_SPAM_DETECTED', 'Kiitos, tilisi pyyntösi on lähetetty tarkistettavaksi.');


// greeting salutation
define('EMAIL_SUBJECT', 'Tervetuloa ' . STORE_NAME . ' verkkokauppaan');
define('EMAIL_GREET_MR', 'Hei %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Hei %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Hei %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'Tervetuloa ' . STORE_NAME . ' verkkokaupan jäseneksi!' . "\n");
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Kiitos että loit verkkokauppaamme henkilökohtaisen käyttäjätilin! Kiitokseksi olemme luoneet sinulle alennuskupongin jota voit käyttää tehdessäsi ostoksia verkkokaupassamme. Alla näet kupongin tiedot.' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'Käyttääksesi alennuskuponkia, kirjoita ' . TEXT_GV_REDEEM . ':<br /> %s ollessasi kassalla.' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>Kuponki on voimassa %s - %s</p>');

define('EMAIL_GV_INCENTIVE_HEADER', 'Koska poikkesit verkkokaupassamme, annamme sinulle %s arvoisen ' . TEXT_GV_NAMES . 'in!' . "\n\n");
define('EMAIL_GV_REDEEM', TEXT_GV_NAMES . 'in ' . TEXT_GV_REDEEM . ' on: %s ' . "\n\n" . 'Voit käyttää ' . TEXT_GV_REDEEM . ' maksaessasi kassalla.' . "\n\n");
define('EMAIL_GV_LINK', 'Tai voit lunastaa sen nyt seuraamalla linkkiä: ' . "\n\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','Kun olet lisännyt ' . TEXT_GV_NAMES . 'in tunnuksellesi, voit käyttää ' . TEXT_GV_NAME . 'tia itse tai lähettää sen ystävälle!' . "\n\n");

define('EMAIL_TEXT', "Kiitos että loit verkkokauppaamme henkilökohtaisen käyttäjätilin!\nKäyttäjätilin ansiosta tuotteiden tilaaminen käy vastaisuudessa vaivattomasti. Sinun täytyy vain kirjautua sisään ja siirtyä kassalle.\n\nPystyt hallinoimaan kaikkia tiliisi liittyviä tietoja \"oma tili\" sivujen kautta.\n\nMuista että käyttäjätunnuksesi on henkilökohtainen, älä levitä sitä eteenpäin!");
define('EMAIL_CONTACT', 'Apua ja ohjeita palveluidemme käyttöön on saatavilla sähköpostitse osoitteesta: ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");
define('EMAIL_GV_CLOSURE','Terveisin,' . "\n\n" . STORE_OWNER . "\n\n" . STORE_NAME_ADDRESS ."\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Tämä sähköpostiosoite on saatettu tietoomme sinun tai jonkun muun asiakkaamme toimesta. Jos et ole rekisteröinyt tunnusta, tai epäilet saaneesi tämän sähköpostin virheen takia, ole hyvä ja ilmoita asiasta osoitteeseen %s');
?>
