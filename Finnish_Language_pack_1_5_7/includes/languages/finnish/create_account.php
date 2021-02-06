<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2019 Aug 22 Modified in v1.5.7 $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 
define('NAVBAR_TITLE', 'Tilin luonti');

define('HEADING_TITLE', 'Tilin tiedot');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">HUOM:</strong> Jos sinulla on jo tili, ole hyvä ja <a href="%s">kirjaudu sisään</a>.');

define('ERROR_CREATE_ACCOUNT_SPAM_DETECTED', 'Kiitos, tilisi pyyntösi on lähetetty tarkistettavaksi.');


// greeting salutation
define('EMAIL_SUBJECT', 'Tervetuloa ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Hei. %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Hei. %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Hei %s,' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'Tervetuloa <strong>' . STORE_NAME . '</strong>verkkokaupan jäseneksi!');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Kiitos että loit verkkokauppaamme henkilökohtaisen käyttäjätilin! Kiitokseksi olemme luoneet sinulle alennuskupongin jota voit käyttää tehdessäsi ostoksia verkkokaupassamme. Alla näet kupongin tiedot.' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'Käyttääksesi alennuskuponkia, kirjoita ' . TEXT_GV_REDEEM . ' <strong>%s</strong> ollessasi kassalla ' . "\n\n");
define('TEXT_COUPON_HELP_DATE', '<p>Kuponki on voimassa %s - %s</p>');

define('EMAIL_GV_INCENTIVE_HEADER', 'Koska poikkesit verkkokaupassamme, annamme sinulle %s arvoisen ' . TEXT_GV_NAME . ' in!' . "\n");
define('EMAIL_GV_REDEEM', TEXT_GV_NAMES . 'in ' . TEXT_GV_REDEEM . ' on: %s ' . "\n\n" . 'Voit käyttää ' . TEXT_GV_REDEEM . ' maksaessasi kassalla.' . "\n");
define('EMAIL_GV_LINK', 'Tai voit lunastaa sen nyt seuraamalla linkkiä: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','Kun olet lisännyt ' . TEXT_GV_NAMES . 'in tunnuksellesi, voit käyttää ' . TEXT_GV_NAME . 'tia itse tai lähettää sen ystävälle!' . "\n\n");

define('EMAIL_TEXT', 'Kiitos että loit '. STORE_NAME . ' verkkokauppaamme henkilökohtaisen käyttäjätilin!' . "\n\n<ul>" . '<li><strong>Tilaushistoria</strong> - Näytä tilaustiedot</li>' . "\n\n" . '<li><strong>Pysyvä ostoskori</strong> - Ostoskoriin lisäämäsi tuotteet pysyvät siellä, kunnes ne poistetaan tai ostetaan.</li>' . "\n\n" . '<li><strong>Osoitekirja</strong> - Määritä lisää osoitteita (esimerkiksi lahjan lähettämiseksi).</li>' . "\n\n" . '<li><strong>Tuotearvostelut</strong> - Jaa mielipiteesi tuotteistamme muiden asiakkaiden kanssa.</li>' . "\n\n</ul>");

define('EMAIL_CONTACT', 'Jos tarvitset apua minkä tahansa verkkokauppapalvelumme suhteen, lähetä sähköpostia myymälän omistajalle: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">' . STORE_OWNER_EMAIL_ADDRESS ."</a>\n\n");
define('EMAIL_GV_CLOSURE', "\n" . 'Terveisin,' . "\n\n" . STORE_OWNER . "\nKaupan omistaja\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">' . HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Tämä sähköpostiosoite on saatettu tietoomme sinun tai jonkun muun asiakkaamme toimesta. Jos et ole rekisteröinyt tunnusta, tai epäilet saaneesi tämän sähköpostin virheen takia, ole hyvä ja ilmoita asiasta osoitteeseen %s ');
