@extends('layouts.contentLayoutMaster')
{{-- page title --}}
@section('title', $profile->full_name)

{{-- vendor styles --}}
@section('vendor-styles')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/charts/apexcharts.css')}}">
@endsection

@section('content')
    <section id="apexchart">
        <div class="row">
            <!-- Pie Chart -->
            <div class="col-lg-6 col-md-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="card-title">Location statistic. Top 10</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div id="pie-chart" class="d-flex justify-content-center"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Donut Chart -->
            <div class="col-lg-6 col-md-12">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="card-title">Type Posts statistic</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div id="donut-chart" class="d-flex justify-content-center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Line Chart -->
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4 class="card-title">User Posts Activity</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div id="line-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Line Chart -->
            <div class="col-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4 class="card-title">User Profile Activity</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div id="line-area-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Apex charts section end -->
@endsection
{{-- vendor scripts --}}
@section('vendor-scripts')
    <script src="{{asset('vendors/js/charts/apexcharts.min.js')}}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
    <script type="text/javascript">
        $(document).ready(function () {

            var $primary = '#5A8DEE',
                $success = '#39DA8A',
                $danger = '#FF5B5C',
                $warning = '#FDAC41',
                $info = '#00CFDD',
                $label_color_light = '#E6EAEE';

            var themeColors = [$primary, $warning, $danger, $success, $info];

            // Pie Chart
            // -----------------------------
            var pieChartOptions = {
                chart: {
                    type: 'pie',
                    height: 320
                },
                colors: themeColors,
                labels: {!! json_encode($locationStatistic['labels']) !!},
                series: {!! json_encode($locationStatistic['series']) !!},
                legend: {
                    itemMargin: {
                        horizontal: 2,
                    },
                    position: 'bottom'
                },
                responsive: [{
                    breakpoint: 576,
                    options: {
                        chart: {
                            width: 300
                        }
                    }
                }]
            }
            var pieChart = new ApexCharts(
                document.querySelector("#pie-chart"),
                pieChartOptions
            );
            pieChart.render();

            // Donut Chart
            // -----------------------------
            var donutChartOptions = {
                chart: {
                    type: 'donut',
                    height: 320
                },
                colors: themeColors,
                labels: {!! json_encode($typeStatistic['labels']) !!},
                series: {!! json_encode($typeStatistic['series']) !!},
                legend: {
                    itemMargin: {
                        horizontal: 2
                    },
                    position: 'bottom'
                },
                responsive: [{
                    breakpoint: 576,
                    options: {
                        chart: {
                            width: 300
                        }
                    }
                }]
            }
            var donutChart = new ApexCharts(
                document.querySelector("#donut-chart"),
                donutChartOptions
            );

            donutChart.render();

            // Line Chart
            // ----------------------------------
            var lineChartOptions = {
                chart: {
                    height: 350,
                    type: 'line',
                    zoom: {
                        enabled: false
                    }
                },
                colors: themeColors,
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'straight'
                },
                series: {!! json_encode($activityStatistic['graph']) !!},
                title: {
                    text: 'Product Trends by Month',
                    align: 'left'
                },
                grid: {
                    row: {
                        colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                        opacity: 0.5
                    },
                },
                xaxis: {
                    categories: {!! json_encode($activityStatistic['labels']) !!},
                },
                yaxis: {
                    tickAmount: 5,
                }
            }
            var lineChart = new ApexCharts(
                document.querySelector("#line-chart"),
                lineChartOptions
            );
            lineChart.render();

            // Line Area Chart
            // ----------------------------------
            var lineAreaOptions = {
                chart: {
                    height: 350,
                    type: 'area',
                },
                colors: themeColors,
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                series: {!! json_encode($statistic['series']) !!},
                legend: {
                    offsetY: -10
                },
                xaxis: {
                    type: 'date',
                    categories: {!! json_encode($statistic['categories']) !!},
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy'
                    },
                }
            }
            var lineAreaChart = new ApexCharts(
                document.querySelector("#line-area-chart"),
                lineAreaOptions
            );
            lineAreaChart.render();
        });
    </script>
@endsection
