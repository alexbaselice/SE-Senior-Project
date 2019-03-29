 (function() {
   // your page initialization code here
   // the DOM will be available here
    setup();
})(); 


function setup() {
  let loading_time = 1.5 * 1000; // milliseconds
  setTimeout(function() { takeOffLoadingScreen(); }, loading_time);
}


function takeOffLoadingScreen() {
  document.getElementById("loading").style.opacity = 0;
  document.getElementById("loading").style.zIndex = -1;
  
  // Materialize Select
  var elems = document.querySelectorAll('select');
  var instances = M.FormSelect.init(elems);
}