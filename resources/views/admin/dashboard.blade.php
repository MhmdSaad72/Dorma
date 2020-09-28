@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $users }}</h3>

                    <p>Total Users</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{ route('users.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $services }}</h3>

                    <p>Services</p>
                </div>
                <div class="icon">
                    <i class="fas fa fa-cogs"></i>
                </div>
                <a href="{{ route('service-body.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $team_members }}</h3>

                    <p>Team Members</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users-cog"></i>
                </div>
                <a href="{{ route('team.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $pricing }}</h3>

                    <p>Pricing Plans</p>
                </div>
                <div class="icon">
                    <i class="fas fa-tags"></i>
                </div>
                <a href="{{ route('single-price.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->

    </div>
    <div class="row">
      <div class="col-lg-6 ">
                  <!-- Dashboard Chart Card-->
                  <div class="card border-0 overflow-hidden p-4 p-lg-0">
                      <div class="card-body p-lg-5">
                          <h2 class="h4 text-dark">New Subscriptions</h2>
                          <p class="text-small text-muted mb-5">Trach new subscriptions for last week</p>
                          <!-- Visitors Chart-->
                          <canvas id="visitorsChart"></canvas>
                      </div>
                  </div>
              </div>
        <div class="col-lg-6">


            <div class="card">
                <div class="card-header border-0">
                    <h3 class="card-title">Team Members</h3>
                    <div class="card-tools">
                        {{-- <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a> --}}
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-striped table-valign-middle">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Social</th>
                                <th>More</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($team_member as $key => $item)
                            <tr>
                                <td><img src="{{ asset('storage/' . $item->image)}}" class="img-circle img-size-32 mr-2">{{ $item->name }}</td>
                                <td>{{ $item->position }}</td>
                                <td><small class="text-success mr-1">
                                  <a href="{{ $item->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                  <a href="{{ $item->twitter }}"><i class="fab fa-twitter"></i></a>
                                  <a href="{{ $item->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                                  {{-- <a href="{{ $item->twitter }}"><i class="fab fa-twitter"></i></a></td> --}}
                                <td><a href="{{ route('team.show' , $item->id)}}" class="text-muted"><i class="fas fa-search"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card -->
        </div>

    </div>
</div>
@endsection
@section('js')
  <!-- Chart.js configuration -->
  <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('js/charts/charts-config.js')}}"></script>
  <script>
  /* ==============================================
     Chart New Vistors
============================================== */
$.getJSON("{{route('newVistors')}}", function (data) {
  console.log('hello');
    var lineChartLabels,
        lineChartData1Values;

    lineChartLabels = data.dayOfTheWeek;
    lineChartData1Values = data.newVistors;

    var visitorsChartConfig = {
        type: 'line',
        options: {
            responsive: true,
            tooltips: {
                backgroundColor: "rgba(10, 10, 10, 0.85)",
                xPadding: 30,
                yPadding: 15,
                multiKeyBackground: 'rgba(0, 0, 0, 0)',
            },
            layout: {
                padding: {
                    left: 15,
                    right: 15
                }
            },
            scales: {
                xAxes: [{
                    display: true,
                    gridLines: {
                        color: 'rgba(249, 249, 249, 0.0)'
                    },
                    gridLines: {
                        display: false
                    },
                    ticks: {
                        fontColor: "#555",
                    }
                }],
                yAxes: [{
                    display: true,
                    gridLines: {
                        color: 'rgba(249, 249, 249, 0.0)'
                    },
                    ticks: {
                        min: 1,
                        fontColor: "#555",
                    },
                }]
            },
            legend: {
                display: false,
                labels: {
                    fontColor: '#3e3e3e',
                    padding: 0,
                    boxWidth: 6,
                    usePointStyle: true,
                }
            }
        },
        data: {
            labels: lineChartLabels,
            datasets: [{
                label: " New visitors",
                fill: true,
                lineTension: 0.35,
                backgroundColor: config.gradientTransparent,
                borderColor: config.gradientPrimary,
                pointBorderColor: config.gradientPrimary,
                pointHoverBackgroundColor: config.gradientPrimary,
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                borderWidth: 2,
                pointBackgroundColor: config.gradientPrimary,
                pointBorderWidth: 2,
                pointHoverRadius: 2,
                pointBorderColor: "rgba(236, 165, 21, 0.85)",
                pointHoverBorderColor: "rgba(236, 165, 21, 0.85)",
                pointHoverBorderWidth: 15,
                pointRadius: 0,
                pointHitRadius: 5,
                data: lineChartData1Values,
                spanGaps: false
            }]
        }
    };

    visitorsChart = new Chart('visitorsChart', visitorsChartConfig);
});
  </script>

@endsection
