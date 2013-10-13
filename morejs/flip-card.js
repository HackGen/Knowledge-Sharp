var init = function() {
  var card = document.getElementById('card');
  
  document.getElementById('card').addEventListener( 'mouseover', function(){
    card.toggleClassName('flipped');
  }, false);
  
  document.getElementById('card').addEventListener( 'mouseout', function(){
    card.toggleClassName('flipped');
  }, false);
  
  var card2 = document.getElementById('card2');
  
  document.getElementById('card2').addEventListener( 'mouseover', function(){
    card2.toggleClassName('flipped');
  }, false);
  
  document.getElementById('card2').addEventListener( 'mouseout', function(){
    card2.toggleClassName('flipped');
  }, false);
  
  var card3 = document.getElementById('card3');
  
  document.getElementById('card3').addEventListener( 'mouseover', function(){
    card3.toggleClassName('flipped');
  }, false);
  
  document.getElementById('card3').addEventListener( 'mouseout', function(){
    card3.toggleClassName('flipped');
  }, false);
  
  var card4 = document.getElementById('card4');
  
  document.getElementById('card4').addEventListener( 'mouseover', function(){
    card4.toggleClassName('flipped');
  }, false);
  
   document.getElementById('card4').addEventListener( 'mouseout', function(){
    card4.toggleClassName('flipped');
  }, false);
};

window.addEventListener('DOMContentLoaded', init, false);