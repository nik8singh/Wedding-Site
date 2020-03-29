function authcheck() {
    $.ajax({
        url: "common/PHP/check_session.php",
        type: "GET",
        dataType: "string",
        success: function (data) {
            console.log("logged in : " + data);
            if (data === "true") return true;
        }
    });
}
