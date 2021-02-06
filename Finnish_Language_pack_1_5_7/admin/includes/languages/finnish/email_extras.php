<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: DrByte 2020 May 16 Modified in v1.5.7 $
 */
// Finnish translation Ver. 1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 
  define ('EMAIL_LOGO_FILENAME', 'header.jpg');  //-File is present in /email folder
  define ('EMAIL_LOGO_WIDTH', '550');
  define ('EMAIL_LOGO_HEIGHT', '110');
  define ('EMAIL_LOGO_ALT_TITLE_TEXT', 'Zen Cart! The Art of E-commerce');

  // -----
  // If you want to include some extra information in each email's header information (like perhaps the store address and/or phone number),
  // set this value to contain the full HTML content to be copied, e.g. '<div id="extra-stuff">Extra stuff for header</div>'.
  //
  define ('EMAIL_EXTRA_HEADER_INFO', '');

  // Define a message you'd like to add to an order update email
  define('EMAIL_ORDER_UPDATE_MESSAGE',''); 

// office use only
  define('OFFICE_FROM','Lähettäjä:');
  define('OFFICE_EMAIL','Sähköpostiosoite:');

  define('OFFICE_USE','Vain sisäiseen käyttöön:');
  define('OFFICE_LOGIN_NAME','Käyttäjän nimi:');
  define('OFFICE_LOGIN_EMAIL','Käyttäjän sähköpostiosoite:');
  define('OFFICE_LOGIN_PHONE','Puhelin:');
  define('OFFICE_IP_ADDRESS','IP osoite:');
  define('OFFICE_HOST_ADDRESS','Isäntänimi:');
  define('OFFICE_DATE_TIME','Päivä ja aika:');

// email disclaimer
  define('EMAIL_DISCLAIMER', "\n" . 'Tämä sähköpostiosoite on ilmoitettu meille sinun tai jonkun muun asiakkaamme toimesta. Jos et ole rekisteröinyt kauppaamme tai epäilet saaneesi tämän sähköpostin virheen takia, lähetä asiasta ilmoitus sähköpostilla osoitteeseen %s');
  define('EMAIL_SPAM_DISCLAIMER','Mikäli et halua meiltä markkinointiviestejä sähköpostiisi, vastaa tähän viestiin ja ilmoita ettet halua enää mainoksia meiltä. Poistamme sinut viipymättä postituslistalta.');
  define('EMAIL_FOOTER_COPYRIGHT','Kaikki oikeudet pidätetään (c) ' . date('Y') . ' <a href="https://www.zen-cart.com">Zen Cart</a>. Powered by <a href="http://www.zen-cart.com">Zen Cart</a>');
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[YLLÄPIDON LÄHETTÄMÄ LAHJAKORTTI]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[ALENNUSKUPONKI]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[TILAUKSEN TILA]');
  define('TEXT_UNSUBSCRIBE', "\n\nPoistaaksesi itsesi postituslistaltamme, avaa alla oleva linkki selaimeesi: \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Ei käytössä');

define('TEXT_EMAIL_SUBJECT_ADMIN_USER_ADDED', 'Ylläpidon ilmoitus: Uusi ylläpitäjä lisätty.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_ADDED', 'Kauppaasi on luotu uusi ylläpitäjän käyttäjätunnus (%s) Tunnuksen luoja %s.' . "\n\n" . 'Jos tämä tunnus on luotu tietämättäsi ja/tai ilman lupaa, tutki kauppasi välittömästi tietomurtojen varalta.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_DELETED', 'Ylläpidon ilmoitus: Ylläpitäjä poistettu.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_DELETED', 'Kaupastasi on poistettu ylläpitäjän käyttäjätunnus (%s). Poistaja: %s.' . "\n\n" . 'Jos käyttäjätunnus on poistettu tietämättäsi ja/tai ilman lupaa, tutki kauppasi välittömästi tietomurtojen varalta.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_CHANGED', 'Ylläpidon ilmoitus: Ylläpitäjän käyttäjätietoja muutettu.');
define('TEXT_EMAIL_ALERT_ADM_EMAIL_CHANGED', 'Kauppasi ylläpitäjän (%s) sähköpostiosoite on vaihdettu. Vanha osoite: (%s) Uusi osoite: (%s) Muokkaaja (%s)');
define('TEXT_EMAIL_ALERT_ADM_NAME_CHANGED', 'Ylläpidon ilmoitus: Ylläpitäjän (%s) käyttäjänimeä on vaihdettu nimestä (%s) nimeen (%s) Muokkaaja (%s)');
define('TEXT_EMAIL_ALERT_ADM_PROFILE_CHANGED', 'Ylläpidon ilmoitus: Ylläpitäjän (%s) profiilia on vaihdettu. Vanha profiili: (%s) Uusi profiili: (%s) Muokkaaja: (%s)');
