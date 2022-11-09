import Chart from 'chart.js/auto';

// On load
$(() => {
    $.ajax({
        url: '/dashboard/all',
        method: 'GET',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }).done((res) => {
        const data = {
            labels: res.labels,
            datasets: [{
                label: 'Valor UF',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: res.data,
                tension: 0
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: (context) => {
                                let label = '';
                                if (context.parsed.y !== null) {
                                    label += new Intl.NumberFormat('es-CL', { style: 'currency', currency: 'CPL' }).format(context.parsed.y);
                                }
                                return label
                            }
                        }
                    }
                }
            }
        };

        const graph = new Chart(
            document.getElementById('myChart'),
            config
        );

    }).fail((res) => {
        alert(res.error);
    });
  
    let today = new Date();
    let dd = today.getDate();
    let mm = today.getMonth() + 1;
    let yyyy = today.getFullYear();
    if (dd < 10) {
        dd = '0' + dd;
    }
    if (mm < 10) {
        mm = '0' + mm;
    }
    today = yyyy + '-' + mm + '-' + dd;
    // Set Today as max date
    $('#toDate').attr('max', today);
});

// On Click
$("#btnFilter").click(() => {
    let from = $("#fromDate").val();
    let to = $("#toDate").val();
    if (from == '' || to == '') {
        alert("Please, select both dates to filter");
    }
    else if (from > to || to < from) {
        alert("The start date must be less than the end date and the end date cannot be earlier than the start date.");
    }
    else {
        $.ajax({
            url: '/dashboard/filtered',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: { from_date: from, to_date: to }
        }).done((res) => {
            let graph = Chart.getChart('myChart');
            // Update Graph
            graph.data.labels = res.labels;
            graph.data.datasets[0].data = res.data;
            graph.update();
        }).fail((err) => {
            alert(err);
        });
    }
});
