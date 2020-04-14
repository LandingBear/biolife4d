$( document ).ready(function() {
    if (document.getElementById("current-time") !== null) {
        console.log("Onboarding form found!");
        var date = new Date();
        var dateDay = date.getDate();
        var dateMonth = date.getMonth() + 1;
        var dateYear = date.getFullYear();
        var hours = date.getHours();
        var minutes = date.getMinutes();
        var ampm = hours >= 12 ? 'pm' : 'am';
        hours = hours % 12;
        hours = hours ? hours : 12; // the hour '0' should be '12'
        minutes = minutes < 10 ? '0'+minutes : minutes;
        var strTime = hours + ':' + minutes + ' ' + ampm;

        $("#current-time").val(dateMonth + "/" + dateDay  + "/" + dateYear + ". " + strTime + ".");

    } else {
        console.log("Not first onboarding form.");
    }

});

$(window).on('load', function (e) {
    // Skip the first step of the second form
    if (document.getElementById("wpcf7-f6701-o1") !== null) {
        var nextButton = document.getElementsByClassName("cf7mls_next");
        console.log(nextButton);
        if (nextButton[0] !== null) {
            nextButton[0].click();
            console.log("Button clicked.");
        }
    } else {
        console.log("Not second onboarding form.")
    }
});

$( "#shares-desired" ).blur(function() {
    var id = $( "#shares-desired" ).val();
    console.log("VALUE: " + id);
    console.log($.isNumeric(id));
  if (!$.isNumeric(id) || Math.floor(id) != id) {
      alert("Please enter your desired shares as a whole number.");
      $( "#shares-desired" ).val(id.ceil());
      $("#shares-cost").val(id.ceil() * 13.5);
  }
});
