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
    dataString = dataString.concat("&yesorno=", $("#yesorno").is(":checked"))
    console.log(dataString);


    $.ajax({
      type: "POST",
      url: "common/PHP/index.php",
      data: dataString,
      success: function(data) {

          $("#myForm")[0].reset();
          $("#successMessage").slideDown();

      },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            $("#failMessage").slideDown();
        }

    });
  });


});

// $(function() {
//   // Set the date we're counting down to
//   const countDownDate = new Date("Dec 5, 2020 13:00:0").getTime();
//
// // Update the count down every 1 second
//   var x = setInterval(function myTimer() {
//
//     // Get today's date and time
//     var now = new Date().getTime();
//
//     // Find the distance between now and the count down date
//     var distance = countDownDate - now;
//
//     // Time calculations for days, hours, minutes and seconds
//     var days = Math.floor(distance / (1000 * 60 * 60 * 24));
//
//     // Output the result in an element with id="demo"
//     document.getElementById("days").innerHTML = days+"";
//
//     // If the count down is over, write some text
//     if (distance < 0) {
//       clearInterval(x);
//       document.getElementById("days").innerHTML = "TODAY";
//     }
//     return myTimer;
//   }(), 1000);

// });

