<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2017 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Modified in v1.5.5 $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
define('NAVBAR_TITLE_1', 'Kassa - Vaihe 1');
define('NAVBAR_TITLE_2', 'Maksutapa - Vaihe 2');

define('HEADING_TITLE', 'Vaihe 2/3 - Maksutapa');

define('TABLE_HEADING_BILLING_ADDRESS', 'Laskutusosoite');
define('TEXT_SELECTED_BILLING_DESTINATION', 'Maksajan tiedot näkyvät vasemmalla. Varmista että tiedot ovat oikein. Voit muuttaa tietoja painamlla "<em>Muuta osoite</em>" painiketta.');
define('TITLE_BILLING_ADDRESS', 'Laskutusosoite:');

define('TABLE_HEADING_PAYMENT_METHOD', 'Maksutapa');
define('TEXT_SELECT_PAYMENT_METHOD', 'Valitse maksutapa tälle tilaukselle.');
define('TITLE_PLEASE_SELECT', 'Valitse');
define('TEXT_ENTER_PAYMENT_INFORMATION', 'Tämä on ainoa maksutapa tälle tilaukselle.');
define('TABLE_HEADING_COMMENTS', 'Lisätiedot');

define('TITLE_NO_PAYMENT_OPTIONS_AVAILABLE', 'Ei saatavilla tällä hetkellä');
define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert">Valitettavasti emme hyväksy maksuja alueeltasi tällä hetkellä.</span>');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Jatka Vaiheeseen 3</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- tilauksen vahvistus.');

define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Ehdot</span>');
define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">Ole hyvä ja hyväksy tilausehdot ruksittamalla seuraava laatikko. Ehdot voit lukea <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><span class="pseudolink">täältä</span></span></a>.');
define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">Olen lukenut ja hyväksynyt tilausehdot.</span>');

define('TEXT_CHECKOUT_AMOUNT_DUE', 'Maksettavaa yhteensä: ');
define('TEXT_YOUR_TOTAL','Yhteensä');
?>
