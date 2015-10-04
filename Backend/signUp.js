$( ".1" ).show(0);

$( ".1" ).click(function() {
$( ".1" ).hide( "slow" );
});

$( ".2" ).show(0);

$( ".2" ).click(function() {
$( ".2" ).hide( "slow" );
});

$( ".3" ).show(0);

$( ".3" ).click(function() {
$( ".3" ).hide( "slow" );
});

$( ".4" ).show(0);

$( ".4" ).click(function() {
$( ".4" ).hide( "slow" );
});
function addInput(divName){
  var newdiv = document.createElement("div");
  newdiv.innerHTML = "<input type='text' name='addInputs[]' size='30' maxlength='30' id='4'><button class='4'>x</button>";
  document.getElementById('divName').appendChild(newdiv);
}
