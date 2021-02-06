<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: gv_queue.php 1105 2005-04-04 22:05:35Z birdbrain $
//

require DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . 'gv_name.php';
define('HEADING_TITLE', TEXT_GV_NAME . ' tien vapauttamisjono');

define('TABLE_HEADING_CUSTOMERS', 'Asiakkaat');
define('TABLE_HEADING_ORDERS_ID', 'Tilausnumero.');
define('TABLE_HEADING_VOUCHER_VALUE', TEXT_GV_NAMES . 'in arvo');
define('TABLE_HEADING_DATE_PURCHASED', 'Ostopäivä');
define('TABLE_HEADING_ACTION', 'Toiminto');

define('TEXT_REDEEM_GV_MESSAGE_HEADER', 'Kiitos että olet ostanut ' . TEXT_GV_NAMES . 'in verkkokaupastamme.');
define('TEXT_REDEEM_GV_MESSAGE_RELEASED', 'Käytännön syistä ' . TEXT_GV_NAMES . 'tia ei aktivoitu käyttöönne heti. ' .
                                          TEXT_GV_NAME . ' on aktivoitu käyttöönne nyt. Voit kirjautua sisään kauppaamme ja lähettää ' . TEXT_GV_NAMES . 'in eteenpäin sähköpostilla kenelle haluat tai voit käyttää sen itse.' . "\n\n"
                                          );

define('TEXT_REDEEM_GV_MESSAGE_AMOUNT', 'Ostamiesi ' . TEXT_GV_NAMES . 'tien arvo on %s');
define('TEXT_REDEEM_GV_MESSAGE_THANKS', 'Kiitos että teit kauppoja kanssamme!');

define('TEXT_REDEEM_GV_MESSAGE_BODY', '');
define('TEXT_REDEEM_GV_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_GV_SUBJECT', TEXT_GV_NAME . ' Osto');
define('TEXT_REDEEM_GV_SUBJECT_ORDER',' Tilaus #');

define('TEXT_EDIT_ORDER','Muokkaa tilausta ID# ');
define('TEXT_GV_NONE','Ei ' . TEXT_GV_NAMES . 'teja vapautettavaksi');
?>