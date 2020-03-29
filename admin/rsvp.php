<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>RSVPs</title>
    <link
        crossorigin="anonymous"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        rel="stylesheet"
    />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
        rel="stylesheet"
    />
    <link
        href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"
        rel="stylesheet"
    />

    <link href="common/css/rsvp.css" rel="stylesheet"/>

    <link href="common/css/common.css" rel="stylesheet">
    <?php
    include('common/PHP/check_session.php');
    ?>
</head>
<body>
<div id="header"></div>

<div class="table-responsive">
    <table class="table " id="myTable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Response</th>
            <th scope="col">Adult guests</th>
            <th scope="col">Children</th>
            <th scope="col">Visa</th>
        </tr>
        </thead>
        <!--        <tbody>-->

        <!--        </tbody>-->
    </table>

</div>


<div id="test"></div>

</body>
</html>

<!-- Latest compiled and minified CSS -->
<link
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    rel="stylesheet"
/>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="common/js/common.js"></script>
<script src="common/js/rsvp.js"></script>
