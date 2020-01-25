<?php
/**
 * @package admin
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_page_registration.php 18695 2011-05-04 05:24:19Z drbyte $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.6 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 

define('HEADING_TITLE', 'Ylläpitosivun rekisteröinti');
define('TEXT_PAGE_KEY', 'Sivun avain');
define('TEXT_LANGUAGE_KEY', 'Sivun kieliavain');
define('TEXT_MAIN_PAGE', 'Sivun tiedostonimi');
define('TEXT_PAGE_PARAMS', 'Sivun parametrit');
define('TEXT_MENU_KEY', 'Valikko');
define('TEXT_DISPLAY_ON_MENU', 'Näytä valikossa?');
define('TEXT_SORT_ORDER', 'Järjestys');

define('TEXT_EXAMPLE_PAGE_KEY', '(esim. myModPageName)');
define('TEXT_EXAMPLE_LANGUAGE_KEY', '(esim. WebAdmin-Page)');
define('TEXT_EXAMPLE_MAIN_PAGE', '(esim. tiedotwebadminpage)');
define('TEXT_EXAMPLE_PAGE_PARAMS', '(esim. option=1 tai jätä tyhjäksi)');
define('TEXT_SELECT_MENU', 'Valitse valikko');

define('ERROR_PAGE_KEY_NOT_ENTERED', 'Sivun avainta ei annettu. Kaikilla sivuilla täytyy olla yksilöllinen avain.');
define('ERROR_PAGE_KEY_ALREADY_EXISTS', 'Avainteksti on jo olemassa. Avaimen on oltava yksilöllinen.');
define('ERROR_LANGUAGE_KEY_NOT_ENTERED', 'Sivun kieliavainta ei annettu. Kaikilla sivuilla on oltava kieliavain joka näkyy valikossa.');
define('ERROR_LANGUAGE_KEY_HAS_NOT_BEEN_DEFINED', 'Annettua kieliavainta ei ole määritelty kielitiedostoissa. Varmista että se on kirjoitettu oikein, ja että se on ylipäätään määritelty kielitiedostoissa.');
define('ERROR_MAIN_PAGE_NOT_ENTERED', 'Sivun tiedostonimeä ei ole annettu.');
define('ERROR_FILENAME_HAS_NOT_BEEN_DEFINED', 'Annettua sivuston tiedostonimeä ei ole määritelty järjestelmään. Varmista että kirjoitit sen oikein ja että se on ylipäätään määritelty järjestelmän lähdekoodissa.');
define('ERROR_MENU_NOT_CHOSEN', 'Valikkoa ei valittu. Sinun täytyy liittää sivu johonkin valikkoon vaikka sitä ei näytettäisikään.');
define('SUCCESS_ADMIN_PAGE_REGISTERED', 'Ylläpitosivusi on rekisteröity.');
?>