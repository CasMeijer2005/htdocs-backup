<?php
$voornaam = "cas"; // je voornaam
$tussenvoegsel = " "; // je tussenvoegsel
$achternaam = "meijer"; // je achternaam
$volledigeNaam = "$voornaam $tussenvoegsel $achternaam"; // plak hier de 3 bovenstaande variabelen aan elkaar, met spaties
$geboortedag = "26"; // je geboortedag
$geboortemaand = "november"; // je geboortemaand
$geboortejaar = 2005; // je geboortejaar
$huidig_jaartal = 2021;
$leeftijd = "$geboortejaar - $huidig_jaartal"; // bereken hier jouw leeftijd op basis van de eerder ingevulde geboortegegevens.
$dag_van_het_jaar = 347; // bereken hier hoeveelste dag van dit kalenderjaar het is
$straat = "vondellaan"; // je straat;
$huisnummer = "33"; // je huisnummer;
$woonplaats = "ijsselstein"; // je woonplaats;
$woonachtig_in_utrecht = ""; // check hier dmv een boolean of jouw woonplaats gelijk is aan "Utrecht"
$aantal_studenten_in_deze_klas = 15;
$kosten_van_frikandelbroodje = 1.76;
$totale_lunchkosten = $aantal_studenten_in_deze_klas * $kosten_van_frikandelbroodje * 2; // bereken hier het totaalbedrag als iedere student 2 frikandelbroodjes zou kopen
// toon de waardes hieronder op het scherm gescheiden door het html: '<br>' element voor een nieuwe-regel
//   bijvoorbeeld:
  echo "Voornaam: $voornaam";
  echo "<br>";
  echo "achernaam: $achternaam";
  echo "<br>";
  echo "voledige naam: $volledigeNaam";
  echo "<br>";
  echo "geboortemaand: $geboortemaand";
  echo "<br>";
  echo "geboortejaar: $geboortejaar";
  echo "<br>";
  echo "leeftijd: $leeftijd";
  echo "<br>";
  echo "dag van het jaar: $dag_van_het_jaar";
  echo "<br>";
  echo "straat: $straat";
  echo "<br>";
  echo "huisnummer: $huisnummer";
  echo "<br>";
  echo "woonplaats: $woonplaats";
  echo "<br>";
  echo "woonachtig_in_utrecht: $woonachtig_in_utrecht";
  echo "<br>";
  echo "aantal_studenten_in_deze_klas: $aantal_studenten_in_deze_klas";
  echo "<br>";
  echo "kosten_van_frikandelbroodje: $kosten_van_frikandelbroodje";
  echo "<br>";
  echo "totale_lunchkosten: $totale_lunchkosten";
  echo "<br>";
?>
