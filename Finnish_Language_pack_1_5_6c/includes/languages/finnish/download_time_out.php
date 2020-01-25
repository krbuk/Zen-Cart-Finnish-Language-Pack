<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2013 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version GIT: $Id: Author: DrByte  Sun Feb 17 23:22:33 2013 -0500 Modified in v1.5.2 $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.5 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>

define('NAVBAR_TITLE', 'Latauksesi ...');
define('HEADING_TITLE', 'Latauksesi ...');

define('TEXT_INFORMATION', 'Latauksesi on vanhentunut.<br /><br />
  Jos sinulla oli muita latauksia ja haluat ladata ne,
  mene <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">tilin hallintaan</a> ja avaa tilaus joka sisältää ladattavia tiedostoja.<br /><br />
  Tai jos uskot että on sattunut virhe, <a href="' . zen_href_link(FILENAME_CONTACT_US, '', 'SSL') . '">ota yhteyttä meihin</a> <br /><br />
  Kiitos!
  ');
?>