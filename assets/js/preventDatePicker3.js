$( document ).ready(function() {

    var dateInput = document.getElementsByName("investor-dob")[0];

    if (dateInput !== null) {
        console.log("Preventing normal date functionality.");
        dateInput.addEventListener('keydown', function(event) {
            if (event.keyIdentifier == "Down") {
                event.preventDefault()
            }
        }, false);
    }
});
