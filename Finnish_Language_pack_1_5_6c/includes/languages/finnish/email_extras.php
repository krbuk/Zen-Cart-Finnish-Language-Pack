<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson Mon Apr 23 08:06:02 2018 -0400 Modified in v1.5.6 $
 */
 // Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
 // Finnish translation v1.5.6 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
  define ('EMAIL_LOGO_FILENAME', 'header.jpg');  //-File is present in /email folder
  define ('EMAIL_LOGO_WIDTH', '550');
  define ('EMAIL_LOGO_HEIGHT', '110');
  define ('EMAIL_LOGO_ALT_TITLE_TEXT', 'Zen Cart! The Art of E-commerce');
  
  // -----
  // If you want to include some extra information in each email's header information (like perhaps the store address and/or phone number),
  // set this value to contain the full HTML content to be copied, e.g. '<div id="extra-stuff">Extra stuff for header</div>'.
  //
  define ('EMAIL_EXTRA_HEADER_INFO', '');

// office use only
  define('OFFICE_FROM','<strong>Lähettäjä:</strong>');
  define('OFFICE_EMAIL','<strong>Lähettäjän sähköpostiosoite:</strong>');

  define('OFFICE_SENT_TO','<strong>Vastaanottaja:</strong>');
  define('OFFICE_EMAIL_TO','<strong>Vastaanottajan sähköpostiosoite:</strong>');

  define('OFFICE_USE','<strong>Vain sisäiseen käyttöön:</strong>');
  define('OFFICE_LOGIN_NAME','<strong>Käyttäjänimi:</strong>');
  define('OFFICE_LOGIN_EMAIL','<strong>Kirjautumiseen käytetty sähköposti:</strong>');
  define('OFFICE_LOGIN_PHONE','<strong>Puhelinnumero:</strong>');
  define('OFFICE_LOGIN_FAX','<strong>Faksi:</strong>');
  define('OFFICE_IP_ADDRESS','<strong>IP Osoite:</strong>');
  define('OFFICE_HOST_ADDRESS','<strong>Isäntänimi:</strong>');
  define('OFFICE_DATE_TIME','<strong>Päivä ja Aika:</strong>');
  if (!defined('OFFICE_IP_TO_HOST_ADDRESS')) define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

  define('EMAIL_TEXT_TELEPHONE', 'Puhelin: ');

// email disclaimer
  define('EMAIL_DISCLAIMER', 'Tämä sähköpostiosoite on saatettu tietoomme sinun tai jonkun muun asiakkaamme toimesta. Jos et ole rekisteröinyt tunnusta, tai epäilet saaneesi tämän sähköpostin virheen takia, ole hyvä ja lähetä sähköposti osoitteeseen %s ');
  define('EMAIL_SPAM_DISCLAIMER','Mikäli et halua tulevaisuudessa mainos-sähköpostia, lähetä sähköpostia (vastaa) tämän postin lähetysosoitteeseen ja ilmoita ettet halua enää mainoksia kaupaltamme. Poistamme sinut viipymättä postituslistoilta');
// Define a message you'd like to add to an order confirmation email
  define('EMAIL_ORDER_MESSAGE',''); 
  define('EMAIL_FOOTER_COPYRIGHT','Kaikki oikeudet pidätetään (c) ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Powered by <a href="http://www.zen-cart.com" target="_blank"> Zen Cart </a>');
  define('TEXT_UNSUBSCRIBE', "\n\nPoistaaksesi itsesi postituslistaltamme, paina alla olevaa linkkiä: \n");

// email advisory for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY', '-----' . "\n" . 'TÄRKEÄÄ: Väärinkäytösten estämiseksi, kaikki tältä sivustolta lähetetyt sähköpostit tallennetaan ja ne ovat ylläpitäjän luettavissa. Jos sinusta tuntuu, että olet saanut tämän sähköpostiviestin virheellisesti, lähetä sähköpostia osoitteeseen ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");

// email advisory included warning for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Tämä huomautus lisätään automaattiisesti kaikkiin viesteihin jotka on lähetetty osoitteesta:</strong>');


// Admin additional email subjects
  define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT','[LUO TUNNUS]');
  define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT','[ASIAKKAAN LÄHETTÄMÄ LAHJAKORTTI]');
  define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT','[UUSI TILAUS]');
  define('SEND_EXTRA_CC_EMAILS_TO_SUBJECT','[LISÄTIETOJA LUOTTOKORTILLA TEHDYSTÄ TILAUKSESTA] #');

// Low Stock Emails
  define('EMAIL_TEXT_SUBJECT_LOWSTOCK','Varoitus: Varastosaldo pieni');
  define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','Varastosaldo raportti: ');
?>