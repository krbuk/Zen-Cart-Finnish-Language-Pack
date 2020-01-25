<?php
/**
 * @package admin
 * @copyright Copyright 2003-2019 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2019 Jan 19 Modified in v1.5.6b $
 */
// Finnish translation v1.5.6b by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
require 'gv_name.php';
define('HEADING_TITLE', 'Lähetä ' . TEXT_GV_NAME . ' asiakkaille');

define('TEXT_CUSTOMER', 'Asiakas:');
define('TEXT_SUBJECT', 'Aihe:');
define('TEXT_FROM', 'Lähettäjä:');
define('TEXT_TO', 'Vastaanottaja:');
define('TEXT_AMOUNT', 'Summa');
define('TEXT_MESSAGE', 'Pelkkä teksti <br />viesti:');
define('TEXT_RICH_TEXT_MESSAGE', 'Muotoiltu teksti <br />viesti:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Käytä tätä lähettääksesi lahjakortin vain yhdelle asiakkaalle. Muussa tapauksessa käytä yllä olevaa alasvetovalikkoa</span>');
define('TEXT_SELECT_CUSTOMER', 'Valitse asiakkaat');
define('TEXT_ALL_CUSTOMERS', 'Kaikki asiakkaat');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Kaikille uutiskirjeen tilaajille');

define('NOTICE_EMAIL_SENT_TO', 'Huom: Sähköposti lähetetty osoitteeseen: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Virhe: Asiakasta ei ole valittu.');
define('ERROR_NO_AMOUNT_SELECTED', 'Virhe: Määrää ei ole annettu.');
define('ERROR_NO_SUBJECT', 'Virhe: Aihetta ei ole annettu.');
define('ERROR_GV_AMOUNT', 'Kirjoita määrä ilman symbooleja. esimerkiksi: 25.00');

define('TEXT_GV_ANNOUNCE','<font color="#0000ff">Ohessa ' . TEXT_GV_NAME . ' verkkokauppaamme, olkaa hyvä!</font>');
define('TEXT_GV_WORTH', TEXT_GV_NAME . ' on arvoltaan ');
define('TEXT_TO_REDEEM', 'Lunastaaksesi tämän ' . TEXT_GV_NAMES . 'in, seuratkaa alla olevaa linkkiä. Kirjoita varmuudenvuoksi ' . TEXT_GV_REDEEM . 'si ylös.');
define('TEXT_WHICH_IS', "\n" . TEXT_GV_REDEEM . ': ');
define('TEXT_IN_CASE', '');
define('TEXT_OR_VISIT', 'Tai menkää ');
define('TEXT_ENTER_CODE', ' ja kirjoittakaa koodi ollessanne kassalla');
define('TEXT_CLICK_TO_REDEEM','Paina tästä lunastaaksesi');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Olet ostanut ' . TEXT_GV_NAMES . 'in kaupastamme. Teknisistä syistä johtuen kauppamme tarkastaa ' . TEXT_GV_NAMES . 'tit ennen kuin vapauttaa niiden varat käytettäväksi. ' . TEXT_GV_NAMES . 'tisi varat ovat nyt käytettävissänne.');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . TEXT_GV_NAMES . 'in arvo oli %s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . 'Voit nyt kirjautua kauppaamme ja lähettää  ' . TEXT_GV_NAMES . 'istasi haluamasi summan kenelle vain haluat.');
define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");
?>