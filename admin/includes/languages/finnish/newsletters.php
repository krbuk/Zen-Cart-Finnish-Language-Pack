<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: newsletters.php 4385 2006-09-04 04:10:48Z drbyte $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.5 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>

define('HEADING_TITLE', 'Uutiskirjeiden ja tuoteilmoitusten hallinta');

define('TABLE_HEADING_NEWSLETTERS', 'Uutiskirjeet');
define('TABLE_HEADING_SIZE', 'Koko');
define('TABLE_HEADING_MODULE', 'Moduli');
define('TABLE_HEADING_SENT', 'Lähetetty');
define('TABLE_HEADING_STATUS', 'Tila');
define('TABLE_HEADING_ACTION', 'Toiminto');

define('TEXT_NEWSLETTER_MODULE', 'Moduli:');
define('TEXT_NEWSLETTER_TITLE', 'Aihe:');
define('TEXT_NEWSLETTER_CONTENT', 'Muotoilematon <br />teksti:');
define('TEXT_NEWSLETTER_CONTENT_HTML', 'Muotoiltu <br />teksti:');

define('TEXT_NEWSLETTER_DATE_ADDED', 'Lisätty:');
define('TEXT_NEWSLETTER_DATE_SENT', 'Muokattu:');

define('TEXT_INFO_DELETE_INTRO', 'Haluatko varmasti poistaa tämän uutiskirjeen?');

define('TEXT_PLEASE_WAIT', 'Odota ... sähköposteja lähetetään ...<br /><br />Älä keskeytä prosessia!');
define('TEXT_FINISHED_SENDING_EMAILS', 'Sähköpostit lähetetty!');

define('TEXT_AFTER_EMAIL_INSTRUCTIONS','%s sähköpostia käsitelty. (Jokainen valintalaatikko tarkoittaa 1 vastaanottajaa. Siirrä hiiri laatikon päälle nähdäksesi vastaanottajan sähköpostiosoitteen.)<br /><br />Tarkkaile ('.EMAIL_FROM.') postilaatikkoasi virheellisten sähköpostiosoitteiden ja poisto pyyntöjen varalta<br />Asiakkaan voi poistaa postituslistalta menemällä asiakkaiden hallintaan.');

define('ERROR_NEWSLETTER_TITLE', 'Virhe: Uutiskirjeen otsikko tarvitaan');
define('ERROR_NEWSLETTER_MODULE', 'Virhe: Uutiskirje moduli tarvitaan');
define('ERROR_PLEASE_SELECT_AUDIENCE','Virhe: Valitse kohderyhmä');
?>