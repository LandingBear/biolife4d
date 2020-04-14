$(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
          console.log("Submit by return prevented");
          event.preventDefault();
          return false;
    }
  });
});