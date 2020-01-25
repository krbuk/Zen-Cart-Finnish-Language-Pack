<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: mail.php 7197 2007-10-06 20:35:52Z drbyte $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.5 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>

define('HEADING_TITLE', 'Lähetä sähköposteja asiakkaille');

define('TEXT_CUSTOMER', 'Asiakas:');
define('TEXT_SUBJECT', 'Aihe:');
define('TEXT_FROM', 'Lähettäjä:');
define('TEXT_MESSAGE', 'Muotoilematon<br />teksti:');
define('TEXT_MESSAGE_HTML','Muotoiltu<br />teksti:');
define('TEXT_SELECT_CUSTOMER', 'Valitse asiakas');
define('TEXT_ALL_CUSTOMERS', 'Kaikki asiakkaat');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Kaikille uutiskirjee tilaajille');
define('TEXT_ATTACHMENTS_LIST','Valitut liitteet: ');
define('TEXT_SELECT_ATTACHMENT','Liitteet <br>palvelimella: ');
define('TEXT_SELECT_ATTACHMENT_TO_UPLOAD','Palvelimelle <br>ladattava tiedosto<br>liitteeksi: ');
define('TEXT_ATTACHMENTS_DIR','Tallennushakemisto: ');

define('NOTICE_EMAIL_SENT_TO', 'Huom: Sähköposti lähetetty osoitteeseen: %s');
define('NOTICE_EMAIL_FAILED_SEND', 'Huom: Sähköpostia ei voitu toimittaa kaikille vastaanottajille: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Virhe: Asiakkaita ei valittu.');
define('ERROR_NO_SUBJECT', 'Virhe: Aihe puuttuu.');
define('ERROR_ATTACHMENTS', 'Virhe: Et voi ladata palvelimelle JA lisätä erillistä liitettä. Valitse vain toinen.');
?>