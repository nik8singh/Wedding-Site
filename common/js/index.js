$(document).ready(function() {




  const inputs = document.querySelectorAll(".rsvpForm input");
  var labels = document.querySelectorAll(".rsvpForm label");
  labels.forEach(label => {
    console.log(label.innerHTML);
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
      console.log(phoneNumber);
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
    dataString = dataString.concat("&yesorno=", $("#yesorno").is(":checked"));
    console.log(dataString);


    $.ajax({
      type: "POST",
      url: "common/PHP/index.php",
      data: dataString,
      success: function (data) {

        $("#myForm")[0].reset();
        $("#successMessage").slideDown();

      },
      error: function (XMLHttpRequest, textStatus, errorThrown) {
        $("#failMessage").slideDown();
      }

    });
  });


});