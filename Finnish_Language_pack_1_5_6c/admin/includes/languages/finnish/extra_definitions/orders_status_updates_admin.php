<?php
/**
 * Constants used by the zen_update_orders_history function.
 *
 * @package admin
 * @copyright Copyright 2003-2018 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: lat9 Mon Oct 22 13:19:39 2018 -0400 New in v1.5.6 $
 */
// Finnish translation v1.5.5 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------');
define('OSH_EMAIL_TEXT_SUBJECT', 'Tilauspäivitys');
define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'Tilausnumero:');
define('OSH_EMAIL_TEXT_INVOICE_URL', 'Laskun erittely:');
define('OSH_EMAIL_TEXT_DATE_ORDERED', 'Tilauspäivä:');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', '<em>Tilauksesi kommentit ovat: </em>');
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'Tilauksen tila on päivitetty:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', 'Tilauksen tila ei ole muuttunut:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong>Nykyinen tila: </strong> %s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong>Vanha tila:</strong> %1$s, <strong>Uusi tila:</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Vastaa tähän sähköpostiviestiin, jos sinulla on kysyttävää.' . "\n");
