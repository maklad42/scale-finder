<?php

if(isset($_POST['scalekey'])) {
  $key = $_POST['scalekey'];
} else {
  $key = "C";
}

if(isset($_POST['scalemode'])) {
  $mode = $_POST['scalemode'];
} else {
  $mode = "Ionian (Major)";
}


echo "Showing: ".$key." ".$mode;


// Create switch for key
switch ($key) {
  case "C":
    $startkey = "0";
    break;
  case "C#/Db":
    $startkey = "11";
    break;
 case "D":
    $startkey = "10";
    break;
  case "D#/Eb":
    $startkey = "9";
    break;
  case "E":
    $startkey = "8";
    break;
  case "F":
    $startkey = "7";
    break;
  case "F#/Gb":
    $startkey = "6";
    break;
  case "G":
    $startkey = "5";
    break;
  case "G#/Ab":
    $startkey = "4";
    break;
  case "A":
    $startkey = "3";
    break;
  case "A#/Bb":
    $startkey = "2";
    break;
  case "B":
  case "Cb":
    $startkey = "1";
    break;
  default:
    $startkey = 99;
    $rootnote ="";
}


// Create switch for mode
switch ($mode) {
  case "Ionian (Major)":
    $startmode = "0";
    break;
  case "Dorian":
    $startmode = "2";
    break;
  case "Phrygian":
    $startmode = "4";
    break;
  case "Lydian":
    $startmode = "5";
    break;
  case "Mixylodian":
    $startmode = "7";
    break;
  case "Aeolian (Minor)":
    $startmode = "9";
    break;
  case "Locrian":
    $startmode = "11";
    break;
    default:
      $startmode = 99;
}

// Set variable to count starting position in fretboard array
$startpos = $startkey + $startmode;

// Fret counters
$mark = array("", "", "", "o", "", "o", "", "o", "", "o", "", "", "8");

//Scale sequence starting at E and representing the C Major (no sharps or flats) scale
$fretboard = array(" on"," on first",""," on",""," on fifth",""," on"," on"," ninth"," on",""," on"," on first",""," on",""," on fifth",""," on"," on"," ninth"," on","", " on");
$strings = array("E1","B","G","D","A","E2");  // Set names for each string to set as classes
$startfret = array(0, 7, 3, 10, 5, 0);  // Offset for each string to align starting position
$rootnote =$startmode + 8;  // Set position of root note for the scale to add "red" class

// Start table
echo "<table class='fretboard'>";

// Draw in fret markings
echo "<tr>";
$fretcount = 0;
for($fm = 1; $fm<=25; $fm++) {
  if($fretcount > 12) {
    $fretcount = 1;
  }
  echo "<td>".$mark[$fretcount]."</td>";
  $fretcount++;
}
echo "</tr>";

//Set loop to draw six strings
for($i = 0; $i<=5; $i++) {
  echo "<tr class='".$strings[$i]."-string'>";

  //Set loop to draw 24 frets on each of the six strings

  // Initialise starting position counter
  $go = $startpos + $startfret[$i];

  for($b = 0; $b <= 24; $b++) {

    if($go>23) {
      $go = $go - 24;
    }

    // Add variable to count position. Max 24, start position from key and mode switches

    // Add class from fretboard array
    if($b == 0) {
      echo "<td class='nut";
    }else{
      echo "<td class='fret";
    }
    echo $fretboard[$go];
    if($go == $rootnote || $go == $rootnote +12 || $go == $rootnote -12) {
      echo " red";
    }
    echo "'></td>";
    $go++;
  }
  echo "</tr>";
}

echo "</table>";

?>
