<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: freeoptions.php 3830 2006-06-21 23:47:16Z ajeh $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE', 'Ilmainen toimitus ');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION', '
Ilmaiset vaihtoehdot -toiminto näyttää ilmaisen lähetysvaihtoehdon, kun muita lähetysmoduuleja näytetään.
Se voi perustua seuraaviin: Näytä aina, Tilaa yhteensä, Tilauksen paino tai Tilausmäärä.
Ilmaiset asetukset -moduuli ei näy, kun Ilmaiset lähettäjät näytetään.<br /><br />
Kokonaisarvoksi asetetaan >= 0.00 ja <= nothing (leave blank) aktivoi tämän moduulin näyttämään kaikkien lähetysmoduulien kanssa, paitsi Free Shipping - freeshipper.<br /><br />
HUOMAUTUS: Jos jätät kaikki Kokonais-, Paino- ja Tuotemäärä-asetukset tyhjiksi, tämä moduuli deaktivoidaan.<br /><br />
HUOMAUTUS: Ilmaiset toimitusvaihtoehdot eivät näy, jos ilmaista lähetystä käytetään 0 painon perusteella.
Katso: freeshipper
');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY', 'Ilmainen toimitus');

?>