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
//  $Id: salemaker_info.php 1105 2005-04-04 22:05:35Z birdbrain $
//
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>

define('HEADING_TITLE', 'Alennuksen rakentaja');
define('SUBHEADING_TITLE', 'Alennuksen rakentajan vihjeet:');
define('INFO_TEXT', '<ul>
				<li>
				<strong>HUOM:</strong> Suomen lainsäädäntö määrä alennuksille maksimiajan ja muita ehtoja.<br />
						Näistä saat lisätietoja lakimieheltäsi tai muilta vastaavilta instanseilta.
				</li>
                      <li>
                        Käytä aina desimaalierottimena pistettä \'.\'.
                      </li>
                      <li>
                        Syötä hinnat samassa valuutassa kuin luodessasi tuotteita.
                      </li>
                      <li>
                        Alennus kentiin voit kirjoittaa hinnasta vähennettävän summan tai prosenttimäärän,
                        tai korvaavan hinnan. (esim. vähennä 5.00&euro; kaikista hinnoista, vähennä 10% kaikista
                        hinnoista tai muuta kaikki hinnat 25.00&euro;)
                      </li>
                      <li>
                        Syöttämällä hintarajauksen voit rajata tuotteita joihin alennus vaikuttaa. (esim.
                        tuotteet joiden hinta on 50.00&euro; - 150.00&euro;)
                      </li>
                      <li>
                        Sinun täytyy valita mitä haluat tehdä jos tuote on tarjouksessa <i>ja</i> siihen kohdistuu alennus:
						<ul>
                          <li>
                            <strong>Ohita tarjoushinta - Laskee alennuksen tuotteen oikeasta hinnasta ja korvaa tarjouksen</strong><br />
                            (esim. Normaali hinta on 10.00&euro;, tarjoushinta on  $9.50, alennus on 10% jolloin
							tuotteen lopulliseksi hinnaksi tulee (10&euro; - 10% =) 9.00&euro; alennuksessa.)
                          </li>
                          <li>
                            <strong>Ohita alennus - Alennusta ei määritetä tuotteelle jos se on jo tarjouksessa</strong><br>
                          </li>
                          <li>
                            <strong>Laske alennus tarjouksesta - Muussa tapauksessa laske alennus normaalista hinnasta</strong><br>
                            Alennus lasketaan tuotteen tarjoushinnasta.
                            (esim. Normaali hinta on 10.00&euro;, Tarjous hinta on $9.50, Alennus on 10% jolloin tuotteen lopulliseksi hinnaksi
                            tulee (9.50&euro; - 10% =) 8.55&euro;.)
                          </li>
                        </ul>
                      </li>
                      <li>
                        Jos et aseta aloituspäivää alennus astuu voimaan välittömästi.
                      </li>
                      <li>
                        Jätä päättymispäivä tyhjäksi jos et halua että alennus päättyy automaattisesti.</li>
                      <li>
                        Valitsemalla alennuksen kohteeksi kokonaisen ryhmän, koskevat tarjoukset myös ala-ryhmissä olevia tuotteita.
                      </li>
                    </ul>');
define('TEXT_CLOSE_WINDOW', '[ sulje ikkuna ]');

?>