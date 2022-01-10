<?php

    // services
    dd($services);
    $servicesLength = sizeof($services);
    // dd($servicesLength);

    for ($i=0; $i<$servicesLength; $i++) {
        // var_dump($services[$i]);
        $dataPoints = array();
        array_push($dataPoints, $services[$i]['quantity_sold']);

        $labels = array();
        array_push($labels, $services[$i]['name']);
    }

    // var_dump($dataPoints);

    // orders
    $current_month = date('M', time());
    $last_month = date('M', strtotime("first day of -1 month"));
    $last_to_last_month = date('M', strtotime("first day of -2 month"));
    $last_to_last_month_two = date('M',strtotime("first day of -3 month"));
    $last_to_last_month_three = date('M',strtotime("first day of -4 month"));
    $last_to_last_month_four = date('M',strtotime("first day of -5 month"));

    $dataPointes = array(
        $last_month_but_four_orders,
        $last_month_but_three_orders,
        $last_month_but_two_orders,
        $last_month_but_one_orders,
        $last_month_orders,
        $current_month_orders
    );

    $labelles = array(
        $last_to_last_month_four,
        $last_to_last_month_three,
        $last_to_last_month_two,
        $last_to_last_month, 
        $last_month, 
        $current_month
    );

    // users
    $dataPointese = array(
        $last_month_but_four_users,
        $last_month_but_three_users,
        $last_month_but_two_users,
        $last_month_but_one_users,
        $last_month_users,
        $current_month_users	
    );

    $labellese = array($last_to_last_month_four, $last_to_last_month_three, $last_to_last_month_two, $last_to_last_month, $last_month, $current_month);

?>

@extends('layouts.dashboard')

@section('content')
    <div class="recentOrders">
        <div class="cardHeader">
            <h4><strong>Charts</strong></h4>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="graphbox">
                    <div class="box">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="box">
                        <canvas id="earning"></canvas>
                    </div>
                </div>
                <div class="graphbox">
                    <div class="box">
                        <canvas id="user"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        // services
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'polarArea',
            data: {
                labels: <?php echo json_encode($labels, JSON_NUMERIC_CHECK); ?>,
                datasets: [{
                    label: '5 Most Requested Services',
                    data: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>,
                    backgroundColor: [
                        'rgb(255, 99, 132, 1)',
                        'rgb(75, 192, 192, 1)',
                        'rgb(255, 205, 86, 1)',
                        'rgb(201, 203, 207, 1)',
                        'rgb(54, 162, 235, 1)'
                    ],
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        position: 'top',
                        align: 'start',
                        font: {weight: 'bold'},
                        text: 'Most Ordered Services (Top 5)'
                    }
                },
                responsive: true,
            }
        });

        // orders
        const earning = document.getElementById('earning').getContext('2d');
        const myChat = new Chart(earning, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labelles, JSON_NUMERIC_CHECK); ?>,
                datasets: [{
                    label: 'No. of Orders',
                    data: <?php echo json_encode($dataPointes, JSON_NUMERIC_CHECK); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        position: 'top',
                        align: 'start',
                        font: {weight: 'bold'},
                        text: 'Number of Orders (Last 6 Months)'
                    }
                },
                scales: {
                    y: {
                        ticks: {
                            stepSize: 1.0
                        },
                        beginAtZero: true
                    }
                },
                responsive: true,
            }
        });

        // users
        var user = document.getElementById('user').getContext('2d');
        var myUser = new Chart(user, {
            type: 'line',
            data: {
                labels: <?php echo json_encode($labellese, JSON_NUMERIC_CHECK); ?>,
                datasets: [{
                    label: 'New Users',
                    data: <?php echo json_encode($dataPointese, JSON_NUMERIC_CHECK); ?>,
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        position: 'top',
                        align: 'start',
                        font: {weight: 'bold'},
                        text: 'New Users (Last 6 Months)'
                    }
                },
                scales: {
                    y: {
                        ticks: {
                            stepSize: 1.0
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection