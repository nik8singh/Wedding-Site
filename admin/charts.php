<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Charts</title>
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


    <link href="common/css/charts.css" rel="stylesheet"/>
    <link href="common/css/common.css" rel="stylesheet">

    <?php
    include('common/PHP/check_session.php');
    ?>
</head>
<body>
<div id="header"></div>

<canvas id="myChart" style="max-width: 1500px; max-height: 1500px"></canvas>

<canvas id="myTotalChart" style="max-width: 1500px; max-height: 1500px; margin-top: 50px"></canvas>


</body>
</html>
<!-- Latest compiled and minified CSS -->
<link
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        rel="stylesheet"
/>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!--Charts and tables-->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>


<script src="common/js/common.js"></script>
<script src="common/js/charts.js"></script>