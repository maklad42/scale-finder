<?php
  // Main file for the Scale Selector page using PHP POST method to update the fretboard
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta lang="ja" />
  <title>Guitar Fretboard Scale Selector</title>
  <script src="./scripts/jquery-1.12.3.js"></script>
  <script src="./scripts/fretboard.js"></script>
  <link rel="stylesheet" href="./styles/scales.css" />
</head>
<body>
<div id="wrapper">
  <div id="header">
    <h1>Scale Finder</h1>
  </div>
  <div id="selector">
    <p>Select the scale you wish to display from the list below.</p>
    <p>The notes of the scale will be displayed on the fretboard.</p>
      <form name="Key" method="post">
        <select id="scalekey">
          <option>Select a Key:</option>
          <option>C</option>
          <option>C#/Db</option>
          <option>D</option>
          <option>D#/Eb</option>
          <option>E</option>
          <option>F</option>
          <option>F#/Gb</option>
          <option>G</option>
          <option>G#/Ab</option>
          <option>A</option>
          <option>A#/Bb</option>
          <option>B</option>
          <option>Cb</option>
        </select>
        <select id="scalemode">
          <option value="">Select a Mode:</option>
          <option value="Ionian (Major)">Ionian (Major)</option>
          <option value="Dorian">Dorian</option>
          <option value="Phrygian">Phrygian</option>
          <option value="Lydian">Lydian</option>
          <option value="Mixylodian">Mixylodian</option>
          <option value="Aeolian (Minor)">Aeolian (Minor)</option>
          <option value="Locrian">Locrian</option>
        </select>
        <br />
      </form>
      <div id="fretupdate" onClick="fretUpdate()">Update Pattern</div>
  </div>

  <div id="fretboard-wrapper">

  <?php
    include("fretboard.php");
  ?>

  </div>
</div>
</body>

</html>

