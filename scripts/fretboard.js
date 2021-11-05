function fretUpdate() {
  var key = $('#scalekey option:selected').text();
  var mode = $('#scalemode option:selected').text();
  //alert("Key is " + key + mode);

if((key == "Select a Key:") && (mode == "Select a Mode:")) {
  alert("Oops, looks like you haven't selected a key or a mode.");
}else if(key == "Select a Key:") {
  alert("Please select a key from the list.");
} else if(mode == "Select a Mode:") {
  alert("Please select a mode from the list.");
}

$.post('fretboard.php', {scalekey: key, scalemode: mode},function(data, status) {
  $('#fretboard-wrapper').html(data);
});

}
