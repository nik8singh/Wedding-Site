$(document).ready(function() {
  const labels = document.querySelectorAll(".rsvpForm label");
  labels.forEach(label => {
    label.innerHTML = label.innerText
      .split("")
      .map(
        (letter, idx) => `<span style="
				transition-delay: ${idx * 50}ms
			">${letter}</span>`
      )
      .join("");
  });

  let phoneNumber;
  $("input:radio[name=response]").change(function() {
    if (this.value === "1") {
      $("#rsvp_phone").val(phoneNumber);
      $("#phonePanel").slideDown();
      $("#adultGuestPanel").slideDown();
      $("#childGuestPanel").slideDown();
      $("#visaPanel").slideDown();
    } else if (this.value === "0") {
      phoneNumber = $("#rsvp_phone").val();
      $("#phonePanel").slideUp("slow", function() {
        $("#rsvp_phone").val("000");
      });
      $("#adultGuestPanel").slideUp();
      $("#childGuestPanel").slideUp();
      $("#visaPanel").slideUp();
    }
  });

  $("#myForm").on("submit", function(event) {
    event.preventDefault();
    let dataString = $(this).serialize();
    let response = $("#yesorno").is(":checked");
    dataString = dataString.concat("&yesorno=", response);
    $.ajax({
      type: "POST",
      url: "common/PHP/index.php",
      data: dataString,
      success: function (data) {

        $("#myForm")[0].reset();

        if (response)
          $("#successMessage").slideDown();
        else
          $("#sorryMessage").slideDown();

        $("#rsvp_phone").val(phoneNumber);
        $("#phonePanel").slideDown();
        $("#adultGuestPanel").slideDown();
        $("#childGuestPanel").slideDown();
        $("#visaPanel").slideDown();
      },
      error: function (XMLHttpRequest, textStatus, errorThrown) {
        $("#failMessage").slideDown();
      }

    });
  });


});