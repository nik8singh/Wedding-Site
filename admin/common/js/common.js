$(document).ready(function () {
    $("#header").load("header.html");

});

function getData() {
    let dataset = [];
    $.ajax({
        url: "common/PHP/rsvp.php",
        type: "GET",
        dataType: 'json',
        success: function (data) {

            $.each(data, function (index, item) {
                if (item.response === "1")
                    item.response = "Yes";
                else
                    item.response = "No";

                if (item.visa === "1")
                    item.visa = "Has Visa";
                else
                    item.visa = "Doesn't have Visa";

                item.response_id = parseInt(index) + 1;
                dataset.push(item);

            });
            temp = "hello world";
            localStorage['dataset'] = JSON.stringify(dataset);

        }
    });


}

