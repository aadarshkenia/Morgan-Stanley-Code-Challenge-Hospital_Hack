
$( "#place" ).hide(0);

$( "#lol" ).click(function() {
$( "#place" ).toggle( "slow" );
});

$( ".1" ).show(0);

$( "#1" ).click(function() {
$( ".1" ).hide( "slow" );
});
$( ".2" ).show(0);

$( "#2" ).click(function() {
$( ".2" ).hide( "slow" );
});
$( ".3" ).show(0);

$( "#3" ).click(function() {
$( ".3" ).hide( "slow" );
});
$( ".4" ).show(0);

$( ".4" ).click(function() {
$( ".4" ).toggle( "slow" );
});
function addInput(divName){
  var newdiv = document.createElement("div");
  newdiv.innerHTML = " <li class='4'><input type='text' name='addInputs[]' size='30' maxlength='30' id='4'><button class='4'>x</button></li>";
  document.getElementById('divName').appendChild(newdiv);
}
$( ".5" ).show(0);

$( "#5" ).click(function() {
$( ".5" ).hide( "slow" );
});
$( ".6" ).show(0);

$( "#6" ).click(function() {
$( ".6" ).hide( "slow" );
});
$( ".7" ).show(0);

$( "#7" ).click(function() {
$( ".7" ).hide( "slow" );
});
$( ".8" ).show(0);

$( ".8" ).click(function() {
$( ".8" ).hide( "slow" );
});
function Input(divName2){
  var newdiv2 = document.createElement("div");
  newdiv2.innerHTML = " <li class='8'><input type='text' size='30' maxlength='30' class='7'><button class='8'>x</button></li>";
  document.getElementById('divName2').appendChild(newdiv2);
}
