<?php

if(isset($_POST['scalekey'])) {
  $key = $_POST['scalekey'];
} else {
  $key = "D";
}

if(isset($_POST['scalemode'])) {
  $mode = $_POST['scalemode'];
} else {
  $mode = "Locrian";
}


echo "Showing: ".$key." ".$mode;


// Create switch for key
switch ($key) {
  case "C":
    $startkey = "7";
    break;
  case "C#/Db":
    $startkey = "8";
    break;
 case "D":
    $startkey = "9";
    break;
  case "D#/Eb":
    $startkey = "10";
    break;
  case "E":
    $startkey = "11";
    break;
  case "F":
    $startkey = "0";
    break;
  case "F#/Gb":
    $startkey = "1";
    break;
  case "G":
    $startkey = "2";
    break;
  case "G#/Ab":
    $startkey = "3";
    break;
  case "A":
    $startkey = "4";
    break;
  case "A#/Bb":
    $startkey = "5";
    break;
  case "B":
  case "Cb":
    $startkey = "6";
    break;
  default:
    $startkey = 99;
}


// Create switch for mode
switch ($mode) {
  case "Ionain (Major)":
    $startmode = "0";
    break;
  case "Dorian":
    $startmode = "10";
    break;
  case "Phrygian":
    $startmode = "8";
    break;
  case "Lydian":
    $startmode = "7";
    break;
  case "Mixylodian":
    $startmode = "5";
    break;
  case "Aeolian (Minor)":
    $startmode = "3";
    break;
  case "Locrian":
    $startmode = "1";
    break;
    default:
      $startmode = 99;
}

// Set variable to count starting position in fretboard array
$startpos = $startkey + $startmode;
echo $startpos;

//Scale sequence starting at E and representing the C Major (no sharps or flats) scale
$fretboard = array("on","on","","on","","on","","on","on","","on","","on","on","","on","","on","","on","on","","on","");
$strings = array("E1","B","G","D","A","E2");

echo "<table class='fretboard'>";

//Set loop to draw six strings
for($i = 1; $i<=6; $i++) {
  echo "<tr class='".$strings[$i]."-string'>";
  echo "<td class='nut'></td>";
  //Set loop to draw 24 frets on each of the six strings
  for($b = 1; $b <= 24; $b++) {
    // Add variable to count position. Max 24, start position from key and mode switches
    // Add class from fretboard array
    echo "<td class='fret'></td>";
  }
  echo "</tr>";
}

echo "</table>";

?>
