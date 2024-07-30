<?php
/**
 * @copyright Copyright 2003-2024 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: mc12345678 2023 Jul 09 Modified in v2.0.0-alpha1 $
 * Finnish translation v2.0.0 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
*/

$define = [
    'HEADING_TITLE' => 'Alennuksen rakentaminen',
    'SUBHEADING_TITLE' => 'Alennuksen rakentaminen vihjeet:',
    'INFO_TEXT' => '<ul>
                      <li>
                        Käytä aina pistettä \'.\' desimaalierottimena vähennys- ja hinta-alueille.
                      </li>
                      <li>
                       Syötä hinnat samassa valuutassa kuin luodessasi tuotteita.
                      </li>
                      <li>
                        Alennus kentiin voit kirjoittaa hinnasta vähennettävän summan tai prosenttimäärän,
                        tai korvaavan hinnan. (esim. vähennä 5.00€ kaikista hinnoista, vähennä 10% kaikista
                        hinnoista tai muuta kaikki hinnat 25.00€)
                      </li>
                      <li>
                        yöttämällä hintarajauksen voit rajata tuotteita joihin alennus vaikuttaa. 
						(esim. tuotteet joiden hinta on 50.00&euro; - 150.00&euro;)
                      </li>
                      <li>
                        Sinun täytyy valita mitä haluat tehdä jos tuote on tarjouksessa <i>ja</i> siihen kohdistuu alennus:
                        <ul>
                          <li>
                            <strong>Ohita tarjoushinta - Laskee alennuksen tuotteen oikeasta hinnasta ja korvaa tarjouksen</strong><br>
                            Alennusta sovelletaan tuotteen normaalihintaan.
                            (esim. Normaali hinta on 10.00€;, tarjoushinta on  9.50$, alennus on 10% jolloin
							tuotteen lopulliseksi hinnaksi tulee (10€ - 10% =) 9.00€ alennuksessa.)
                          </li>
                          <li>
                            <strong>Ohita alennus - Alennusta ei määritetä tuotteelle jos se on jo tarjouksessa</strong><br>
                            Alennusta ei sovelleta tarjouksiin. Tarjoushinta näkyy myynnistä riippumatta. (esim. Normaali hinta on 10.00€, tarjoushinta on 9.50€,
                            alennus on 10%. jolloin tuotteen lopulliseksi hinnaksi tulee 9.50€ alennuksessa. Myyntiehto ohitetaan..)
                          </li>
                          <li>
                            <strong>Laske alennus tarjouksesta - Muussa tapauksessa laske alennus normaalista hinnasta</strong><br>
                            Myyntivähennystä sovelletaan tarjoushintaan. Yhdistetty hinta näytetään.
                            (esim. Normaali hinta on 10.00€, Tarjoushinta on 9.50€, Alennus on 10%. jolloin tuotteen lopulliseksi hinnaksi
                            tulee 8.55€. Lisäksi 10% alennus erikoishinnasta.)
                          </li>
                        </ul>
                      </li>
                      <li>
                        Aloituspäivämäärän jättäminen tyhjäksi aloittaa myynnin välittömästi.
                      </li>
                      <li>
                        Jätä päättymispäivä tyhjäksi jos et halua että alennus päättyy automaattisesti.</li>
                      <li>
                        Valitsemalla alennuksen kohteeksi kokonaisen kategorian, koskevat tarjoukset myös ala-kategorilla olevia tuotteita.
                      </li>
                    </ul>',
];

return $define;
