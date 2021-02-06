<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Steve 2020 May 27 Modified in v1.5.7 $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.7 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
define('NAVBAR_TITLE', 'Usein kysyttyä ' . TEXT_GV_NAME . 'eista');
define('HEADING_TITLE', 'Usein kysyttyä ' . TEXT_GV_NAME . 'eista');

define('TEXT_INFORMATION', '<a id="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1','NONSSL').'">' . TEXT_GV_NAMES . 'in ostaminen</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2','NONSSL').'">' . TEXT_GV_NAMES . 'in lähettäminen</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3','NONSSL').'">' . TEXT_GV_NAMES . 'illa ostaminen</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4','NONSSL').'">' . TEXT_GV_NAMES . 'in lunastaminen</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5','NONSSL').'">Ongelmatilanteissa...</a><br />
');
if (empty($_GET['faq_item'])) {
  $_GET['faq_item'] = '0';
}
switch ($_GET['faq_item']) {
  case '1':
define('SUB_HEADING_TITLE', TEXT_GV_NAMES . 'in ostaminen');		
define('SUB_HEADING_TEXT', TEXT_GV_NAMES . 'in ostaminen tapahtuu samalla tavalla kuin minkä tahansa muun tuotteen ja voit maksaa
  sen kauppamme hyväksymillä maksutavoilla.   Kun olet ostanut ' . TEXT_GV_NAMES . 'in, sen arvo siirtyy sinun henkilökohtaiselle
   ' . TEXT_GV_NAME . 'tilillesi. Jos sinulla on rahaa ' . TEXT_GV_NAME . 'tililläsi, näkyy kyseinen summa ostoskori ikkunassa jossa on myös linkki jota painamalla voit lähettää ' . TEXT_GV_NAMES . 'in sähköpostilla.');
  break;
  case '2':
define('SUB_HEADING_TITLE',TEXT_GV_NAMES . 'in lähettäminen');
define('SUB_HEADING_TEXT','Lähettääksesi ' . TEXT_GV_NAMES . 'in sinun tulee mennä ' . TEXT_GV_NAMES . 'in lähetys sivulle. Löydät linkin
  kyseiselle sivulle "Oma tili" sivulta.
  Kun lähetät ' . TEXT_GV_NAMES . 'in, sinun tulee määritellä seuraavat asiat.
  ' . TEXT_GV_NAMES . 'in vastaanottajan nimi, sähköpostiosoite,
  summa (Huomaa että voit lähettää myös vain osan ' . TEXT_GV_NAME . 'tilisi arvosta.)
  sekä lyhyt viesti joka liitetään sähköpostiin.
  Varmista lopuksi että olet syöttänyt kaikki tiedot oikein (Tietoja voi vielä muuttaa ennen varsinaisen sähköpostin lähettämistä).');
  break;
  case '3':
  define('SUB_HEADING_TITLE',TEXT_GV_NAMES . 'illa ostaminen');
  define('SUB_HEADING_TEXT','Jos sinulla on rahaa ' . TEXT_GV_NAME . 'tililläsi, voit käyttää niitä ostoksiisi kaupassamme.
  Kassalla näkyy kenttä, johon voit syöttää summan, jonka haluat käytettäväksi ' . TEXT_GV_NAME . 'tilitäsi.
  Huomaa että jos ' . TEXT_GV_NAME . 'tilisi arvo ei kata koko tilauksen summaa, on erotus maksettava muulla maksutavalla.
  Jos ' . TEXT_GV_NAME . 'tilillesi jää rahaa tilauksen jälkeen, on tilin summa käytettävissä seuraaviin tilauksiisi.');
  break;
  case '4':
  define('SUB_HEADING_TITLE',TEXT_GV_NAMES . 'in lunastaminen');
  define('SUB_HEADING_TEXT','Jos saat ' . TEXT_GV_NAMES . 'in sähköpostitse, näet siitä lähettäjän nimen sekä mahdollisesti lyhyen viestin lähettäjältä.
  Sähköposti sisltää myös ' . TEXT_GV_NAMES . 'in ' . TEXT_GV_REDEEM . 'n. Sähköposti kannattaa tulostaa myöhempää käyttöä varten.
  ' . TEXT_GV_NAME . ' on lunastettavissa kahdella tapaa.<br /><br />
  1. Painamalla sähköpostissa olevaa lunastus linkkiä, pääset verkkokauppamme ' . TEXT_GV_NAMES . 'in lunastus sivulle, jossa sinua pyydetään luomaan tunnus, ennen ' . TEXT_GV_NAMES . 'in varmistamista.
  ' . TEXT_GV_NAME . ' lisätään ' . TEXT_GV_NAME . 'tilillesi, jotta voit käyttää sitä verkkokaupassa ostoksiisi.<br /><br />
  2. Valitessasi kassalla tilauksesi maksutapaa näkyy samalla sivulla kentän, johon voit kirjoittaa ' . TEXT_GV_REDEEM . 'n.
  Syötä ' . TEXT_GV_REDEEM . ' ja paina lunasta -painiketta. Koodi varmistetaan ja summa lisätään ' . TEXT_GV_NAME . 'tilillesi.
  Tämän jälkeen voit käyttää summan tekemiisi ostoksiin verkkokaupassamme.');
  break;
  case '5':
  define('SUB_HEADING_TITLE','Kun ongelmia ilmaantuu');
  define('SUB_HEADING_TEXT', TEXT_GV_NAME . ' järjestelmään liittyvissä kysymyksissä, ota yhteyttä sähköpostitse
  kauppaamme osoitteessa: '. STORE_OWNER_EMAIL_ADDRESS . '. Liitä sähköpostiisi mahdollisimman tarkka kuvaus ongelmasta. ');
  break;
  default:
  define('SUB_HEADING_TITLE','');
  define('SUB_HEADING_TEXT','Valitse kysymys listalta.');

  }

  define('TEXT_GV_REDEEM_INFO', 'Kirjoita ' . TEXT_GV_NAMES . ' in lunastuskoodi: ');
  define('TEXT_GV_REDEEM_ID', 'Lunastuskoodi:');
