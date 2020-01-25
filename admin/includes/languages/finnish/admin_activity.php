<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Drbyte Tue Jan 9 13:12:24 2018 -0500 Modified in v1.5.6 $
 */
// Finnish translation by JNT Finland Oy (Pasi Rajala) <pasi.rajala@jnt-finland.fi>
// Finnish translation v1.5.6 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi> 
define('HEADING_TITLE', 'Ylläpidon tapahtumaloki hallinta');
define('HEADING_SUB1', 'Esikatsele tai vie tiedostoon');
define('HEADING_SUB2', 'Tyhjennä loki');
define('TEXT_ACTIVITY_EXPORT_FORMAT', 'Vientitiedoston muoto:');
define('TEXT_ACTIVITY_EXPORT_FILENAME', 'Vientitiedoston nimi:');
define('TEXT_ACTIVITY_EXPORT_SAVETOFILE','Tallenna palvelimelle? (Muussa tapauksessa tiedosto avataan tähän ikkunaan)');
define('TEXT_ACTIVITY_EXPORT_DEST','Kohde: ');
define('TEXT_PROCESSED', ' Käsitelty.');
define('SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG', 'Vienti valmis. ');
define('FAILURE_EXPORT_ADMIN_ACTIVITY_LOG', 'VIRHE: Vienti epäonnistui. Tiedostoa ei voitu kirjoittaa ');

define('TEXT_INSTRUCTIONS','Tämän sivun avulla voit tallentaa ylläpitäjän tapahtumalokin tietokoneellesi.<br />Lokitiedoston avulla voit tarvittaessa tutkia mahdollisia tietomurtoja.');

define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>Tyhjennä ylläpidon tapahtumaloki<br />TÄRKEÄÄ: Tallenna loki koneellesi ennen tyhjentämistä.</strong><br />Tiedoston avulla voit tutkia mahdollisia tietomurtoja myöhemmin.<br />Loki kasvaa ajanmyötä suureksi ja vie levytilaa palvelimelta. Tämän takia loki on syytä tyhjentää säännöllisesti.<br />Järjestelmä pyytää tekemään tyhjennyksen 50000 merkinnän tai 60 päivän välein.<br /><span class="alert">HUOM: PCI tietoturvastandardi vaatii että säilytät lokitiedoston varmuuskopion vähintään 12 kuukautta.</span>');
define('TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE', '<strong><span class="alert">VAROITUS: Olet poistamassa <u>tärkeitä</u> lokitietoja pysyvästi.</span></strong><br /> Ilman näitä tietoja mahdollisten tietomurtojen löytäminen jälkeen päin on vaikeampaa.<br />Varmista ennen poistamista, että olet ottanut lokitiedoista varmuuskopion<br />Jatkamalla poistoa, vakuutat että ymmärrät mitä olet tekemässä ja mitä seurauksia lokitietojen poistamisella voi olla.<br /><br />Mikäli haluat poistaa tiedot nyt, jatka painamalla "Tyhjennä":<br />');
define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>Ylläpidon tapahtumaloki on tyhjennetty</strong>');
define('TEXT_NO_RECORDS_FOUND', 'Merkintöjä ei löydy valitsemaltasi suodattimella.');

define('TEXT_EXPORTFORMAT0', 'Vie HTML-muodossa (näytön katseluun)');
define('TEXT_EXPORTFORMAT1', 'Vie CSV (tuoda taulukkolaskenta)');
define('TEXT_EXPORTFORMAT2', 'Vie TXT');
define('TEXT_EXPORTFORMAT3', 'Vie XML');

define('TEXT_ACTIVITY_EXPORT_FILTER', 'Mitkä lokitiedot haluat nähdä?');
define('TEXT_EXPORTFILTER0', 'Kaikki kirjautuneet tiedot, riippumatta vakavuusasteesta.');
define('TEXT_EXPORTFILTER1', 'INFO - Yleisesti kirjautuneet tiedot');
define('TEXT_EXPORTFILTER2', 'HUOMAUTUS - Huomattavia tietoja, joita on tarkistettava määräajoin');
define('TEXT_EXPORTFILTER3', 'VAROITUS - Toiminto, joka tarkistetaan päivittäin');
define('TEXT_EXPORTFILTER4', 'Sekä HUOMAUTUS ja VAROITUS (yleinen yhdistelmä tarkistettavaksi).');

define('TEXT_INTERPRETING_LOG_DATA', '<p><strong>Lokitietojen tulkinta</strong><ul>
<li><strong>Koruttomuus</strong> - Standardit kirjaukseen kuvailevat yleisesti vaikeusasteeltaan seuraavasti:
  <ul>
  <li><strong>INFO</strong> yleiseen toimintaan. Tämä voi sisältää tai olla sisältämättä huomattavia yksityiskohtia.</li>
  <li><strong>HUOMAUTUS</strong> joka kertoo suuremman etuoikeuden käyttämisestä, ja siihen voi kuulua esimerkiksi uusien admin-käyttäjien luominen tai uusien maksumoduulien lisääminen. Se myös korostaa, milloin verkkosivustossa lähetetyt tiedot sisältävät mahdollisia riskialttiita sisältöjä, kuten komentotunnisteita tai sulautettuja iframeja, joissa tyytymättömät työntekijät tai sivustosi tunkeilijat lisäävät haittaohjelmia tuotteet/luokat/sivut. Näitä tulisi tarkistaa säännöllisesti mahdollisista poikkeavuuksista, kuten luvattomasta toiminnasta.</li>
  <li><strong>VAROITUS</strong> On määritetty kriittisiin asioihin, kuten maksumodulien poistamiseen tai järjestelmänvalvojan käyttäjien poistoon. Nämä ovat toimia, jotka saattavat viitata odottamattomiin ongelmiin, jos niitä ei saada nopeasti kiinni. Niitä olisi tarkasteltava hyvin usein; Suositellaan päivittäin.</li>
  </ul>
</li>
<li><strong>admin_käyttäjä</strong> - Tämä näyttää adminin käyttäjätunnuksen ja sen adminin käyttäjätunnuksen. Jos et ole kirjautunut sisään, se näyttää 0.</li>
<li><strong>page_accessed</strong> - Tämä ilmaisee vierailun kohteena olevan sivun nimen, mikä antaa vihjeitä siitä, millaista toimintaa on tapahtumassa.</li>
<li><strong>parameters</strong> - Tämä on muun vierailun kohteena olevan sivun URI ja antaa lisätiedot siitä, millaista toimintaa kävijä yrittää.</li>
<li><strong>flagged</strong> - Jos tämä on asetettu arvoon 1, se tarkoittaa, että sinun on tarkistettava "postdata" -kenttään tallennettu sisältö käsikirjoituksen tai iframe-koodin tai muun mahdollisesti vaarallisen sisällön luvatonta kirjaamista varten. Epäilyttävän sisällön selitys tulee näkyviin "huomiota" -kenttään.</li>
<li><strong>attention</strong> - Tämä sisältää ehdotuksia epäillyistä toiminnoista, jotka on tarkistettava "postdata" -kenttään, jos ne on merkitty.</li>
<li><strong>logmessage</strong> - Tämä sisältää kaikki järjestelmään tallentamat viestit aktiviteetista, kuten tietyn moduulin asennuksesta.</li>
<li><strong>postdata</strong> - Tämä sisältää raaka POST-tiedot (joitain arkaluonteisia tietoja puhdistettuna), jotta ne voisivat helposti tarkastella, jos epäillään haitallista toimintaa.</li>
</ul></p>');
?>