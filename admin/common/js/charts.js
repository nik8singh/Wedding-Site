$(document).ready(function () {
    let data = getDataset();
    yesNoValues(data);
});


function yesNoValues(data) {
    let noofyes = 0, noofno = 0, adult = 0, child = 0;
    $.each(data, function (index, row) {
        if (row.response === "Yes") {
            noofyes++;
        } else {
            noofno++;
        }
        adult += parseInt(row.adult_guest);
        child += parseInt(row.child_guest);

    });
    yesNo(noofno, noofyes);
    totalGuests(adult, child);

}

function getDataset() {
    let data;
    const stored = localStorage["dataset"];
    if (stored) {
        data = JSON.parse(stored);
    }
    return data;
}

function yesNo(nay, yay) {
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['No', 'Yes'],
            datasets: [{
                label: 'Guest Responses',
                data: [nay, yay],
                backgroundColor: [
                    'rgba(255,99,132,0.53)',
                    'rgba(75,192,192,0.53)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(75, 192, 192, 1)',
                ],
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: true,
                labels: {
                    fontColor: 'rgb(255,255,255)',
                    fontSize: 20
                }
            },
            title: {
                display: true,
                text: 'Guest Responses',
                fontColor: 'rgb(255,255,255)',
                fontSize: 30
            },
            plugins: {
                datalabels: {
                    color: '#111',
                    font: {
                        size: 45,
                    }
                }


            },
        }

    });
}

function totalGuests(adult, child) {
    var ctx = document.getElementById('myTotalChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Total Adults', 'Total Children'],
            datasets: [{
                label: 'Total Guests',
                data: [adult, child],
                backgroundColor: [
                    'rgba(92,91,255,0.53)',
                    'rgba(192,186,81,0.53)',
                ],
                borderColor: [
                    'rgb(108,110,255)',
                    'rgb(192,182,82)',
                ],
                borderWidth: 2
            }


            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: true,
                labels: {
                    fontColor: 'rgb(255,255,255)',
                    fontSize: 20
                }
            },
            title: {
                display: true,
                text: 'Total Guest',
                fontColor: 'rgb(255,255,255)',
                fontSize: 30
            },
            plugins: {
                datalabels: {
                    color: '#111',
                    font: {
                        size: 45,
                    }
                }


            },
        }

    });
}