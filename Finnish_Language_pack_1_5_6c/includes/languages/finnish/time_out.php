<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: time_out.php 3027 2006-02-13 17:15:51Z drbyte $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.5 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
define('NAVBAR_TITLE', 'Istunto aikakatkaistu');
define('HEADING_TITLE', 'Istunto aikakatkaistu');
define('HEADING_TITLE_LOGGED_IN', 'Hups! Toiminto jota yritit suorittaa ei ole sallittu sinulle tällä hetkellä. ');
define('TEXT_INFORMATION', '<p>Jos olit tekemässä tilausta, kirjaudu uudelleen sisään ja jatka siitä mihin jäit.</p><p>Jos olit tehnyt tilauksen ja haluat tarkastaa sen sisällön' . (DOWNLOAD_ENABLED == 'true' ? ', tai jos haluat ladata ostamiasi tiedostoja' : '') . ', mene <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">oma tili</a> sivulle.</p>');

define('TEXT_INFORMATION_LOGGED_IN', 'Olet edelleen kirjautuneena tilillesi voit jatkaa ostamista. Valitse minne haluat siirtyä valikosta.');

define('HEADING_RETURNING_CUSTOMER', 'Kirjaudu sisään');
define('TEXT_PASSWORD_FORGOTTEN', 'Salasana unohtunut?');
?>