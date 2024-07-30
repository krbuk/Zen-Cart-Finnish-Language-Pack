<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: torvista 2022 Jun 12 New in v1.5.8-alpha $
 * Finnish translation v2.0.0 by Nida Verkkopalvelu Oy (Ihsan Yuz) <ihsan@nida.fi>
*/

$define = [
    'HEADING_TITLE' => 'Ylläpidon tapahtumaloki hallinta',
    'HEADING_SUB1' => 'Esikatsele tai vie tiedostoon',
    'HEADING_SUB2' => 'Tyhjennä loki',
    'TEXT_ACTIVITY_EXPORT_FORMAT' => 'Vientitiedoston muoto:',
    'TEXT_ACTIVITY_EXPORT_FILENAME' => 'Vientitiedoston nimi:',
    'TEXT_ACTIVITY_EXPORT_SAVETOFILE' => 'Tallenna palvelimelle? (Muussa tapauksessa tiedosto avataan tähän ikkunaan)',
    'TEXT_ACTIVITY_EXPORT_DEST' => 'Kohde: ',
    'SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG' => 'Vienti valmis. ',
    'FAILURE_EXPORT_ADMIN_ACTIVITY_LOG' => 'VIRHE: Vienti epäonnistui. Tiedostoa ei voitu kirjoittaa ',
    'TEXT_INSTRUCTIONS' => '<u>OHJEET</u><br>
TTämän sivun avulla voit tallentaa Zen Cart&reg; ylläpitäjän tapahtumalokin CSV-tiedostoon tietokoneellesi.  Lokitiedoston avulla voit tarvittaessa tutkia mahdollisia tietomurtoja.<br>
Sinun tulee tallentaa nämä tiedot petostutkintaa varten, jos sivustosi vaarantuu. Tämä on PCI-yhteensopivuuden vaatimus.<br>
<ol>
<li>Valitse, näytetäänkö vai viedäänkö tiedostoon.</li>
<li>Anna tiedostonimi. (täytyy päättyä johonkin: .csv .txt .htm .html .xml)</li>
<li>Napsauta Tallenna jatkaaksesi.</li>
<li>Valitse, haluatko tallentaa vai avata tiedoston sen mukaan, mitä selaimesi tarjoaa.</li></ol>
',
    'TEXT_INFO_ADMIN_ACTIVITY_LOG' => '<strong>Tyhjennä ylläpidon tapahtumaloki<br />TÄRKEÄÄ: Tallenna loki koneellesi ennen tyhjentämistä.</strong><br />Tiedoston avulla voit tutkia mahdollisia tietomurtoja myöhemmin.<br />Loki kasvaa ajanmyötä suureksi ja vie levytilaa palvelimelta. Tämän takia loki on syytä tyhjentää säännöllisesti.<br />Järjestelmä pyytää tekemään tyhjennyksen 50000 merkinnän tai 60 päivän välein.<br /><span class="alert">HUOM: PCI tietoturvastandardi vaatii että säilytät lokitiedoston varmuuskopion vähintään 12 kuukautta.</span>',
    'TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE' => '<strong><span class="alert">VAROITUS: Olet poistamassa <u>tärkeitä</u> lokitietoja pysyvästi.</span></strong><br> Ilman näitä tietoja mahdollisten tietomurtojen löytäminen jälkeen päin on vaikeampaa.<br>Varmista ennen poistamista, että olet ottanut lokitiedoista varmuuskopion<br>Jatkamalla poistoa, vakuutat että ymmärrät mitä olet tekemässä ja mitä seurauksia lokitietojen poistamisella voi olla.<br><br >Mikäli haluat poistaa tiedot nyt, jatka painamalla "Tyhjennä":<br>',
    'SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG' => '<strong>Ylläpidon tapahtumaloki on tyhjennetty</strong>',
    'TEXT_NO_RECORDS_FOUND' => 'Merkintöjä ei löydy valitsemaltasi suodattimella.',
    'TEXT_EXPORTFORMAT0' => 'Vie HTML-muodossa (näytön katseluun)',
    'TEXT_EXPORTFORMAT1' => 'Vie CSV (tuoda taulukkolaskenta)',
    'TEXT_EXPORTFORMAT2' => 'Vie TXT',
    'TEXT_EXPORTFORMAT3' => 'Vie XML',
    'TEXT_ACTIVITY_EXPORT_FILTER' => 'Mitkä lokitiedot haluat nähdä?',
    'TEXT_EXPORTFILTER0' => 'Kaikki kirjautuneet tiedot, riippumatta vakavuusasteesta.',
    'TEXT_EXPORTFILTER1' => 'INFO - Yleisesti kirjautuneet tiedot',
    'TEXT_EXPORTFILTER2' => 'HUOMAUTUS - Huomattavia tietoja, joita on tarkistettava määräajoin',
    'TEXT_EXPORTFILTER3' => 'VAROITUS - Toiminto, joka tarkistetaan päivittäin',
    'TEXT_EXPORTFILTER4' => 'Sekä HUOMAUTUS ja VAROITUS (yleinen yhdistelmä tarkistettavaksi).',
    'TEXT_ACTIVITY_EXPORT_FILTER_USER' => 'Filter by Admin User:',
    'TEXT_EXPORTFILTER_USER' => 'Kaikki ylläpitäjät',
    'TEXT_INTERPRETING_LOG_DATA' => '<p><strong>Lokitietojen tulkinta</strong></p>
      <ul>
          <li><strong>Vakavuus</strong> - Standardit kirjaukseen kuvailevat yleisesti vaikeusasteeltaan seuraavasti:
            <ul>
              <li><strong>INFO</strong> yleiseen toimintaan. Tämä voi sisältää tai olla sisältämättä huomattavia yksityiskohtia.</li>
              <li><strong>HUOMAUTUS</strong> joka kertoo suuremman etuoikeuden käyttämisestä, ja siihen voi kuulua esimerkiksi uusien admin-käyttäjien luominen tai uusien maksumoduulien lisääminen. Se myös korostaa, milloin verkkosivustossa lähetetyt tiedot sisältävät mahdollisia riskialttiita sisältöjä, kuten komentotunnisteita tai sulautettuja iframeja, joissa tyytymättömät työntekijät tai sivustosi tunkeilijat lisäävät haittaohjelmia tuotteet/luokat/sivut. Näitä tulisi tarkistaa säännöllisesti mahdollisista poikkeavuuksista, kuten luvattomasta toiminnasta.</li>
              <li><strong>VAROITUS</strong> On määritetty kriittisiin asioihin, kuten maksumodulien poistamiseen tai järjestelmänvalvojan käyttäjien poistoon. Nämä ovat toimia, jotka saattavat viitata odottamattomiin ongelmiin, jos niitä ei saada nopeasti kiinni. Niitä olisi tarkasteltava hyvin usein; Suositellaan päivittäin.</li>
            </ul>
        </li>
        <li><strong>admin_user</strong> - Tämä näyttää adminin käyttäjätunnuksen ja sen adminin käyttäjätunnuksen. Jos et ole kirjautunut sisään, se näyttää 0.</li>
        <li><strong>page_accessed</strong> - Tämä ilmaisee vierailun kohteena olevan sivun nimen, mikä antaa vihjeitä siitä, millaista toimintaa on tapahtumassa.</li>
        <li><strong>parameters</strong> - Tämä on muun vierailun kohteena olevan sivun URI ja antaa lisätiedot siitä, millaista toimintaa kävijä yrittää.</li>
        <li><strong>flagged</strong> - Jos tämä on asetettu arvoon 1, se tarkoittaa, että sinun on tarkistettava "postdata" -kenttään tallennettu sisältö käsikirjoituksen tai iframe-koodin tai muun mahdollisesti vaarallisen sisällön luvatonta kirjaamista varten. Epäilyttävän sisällön selitys tulee näkyviin "huomiota" -kenttään.</li>
        <li><strong>attention</strong> - Tämä sisältää ehdotuksia epäillyistä toiminnoista, jotka on tarkistettava "postdata" -kenttään, jos ne on merkitty. </li>
        <li><strong>logmessage</strong> - Tämä sisältää kaikki järjestelmään tallentamat viestit aktiviteetista, kuten tietyn moduulin asennuksesta.</li>
        <li><strong>postdata</strong> - Tämä sisältää raaka POST-tiedot (joitain arkaluonteisia tietoja puhdistettuna), jotta ne voisivat helposti tarkastella, jos epäillään haitallista toimintaa.</li>
      </ul>',
];

return $define;
