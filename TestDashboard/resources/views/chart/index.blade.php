@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
        <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <!-- <li><a href="#">Examples</a></li> -->
      <li class="active">Dashboard</li>
    </ol>
  </section>
<!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-md-6">


          <!-- DONUT CHART -->
          <!-- Chart 2 Status Mahasiswa-->
          <script type="text/javascript">
            var statuskerjasama = <?php echo $tahun2; ?>

            google.charts.load('current', {'packages':['corechart']});

            google.charts.setOnLoadCallback(drawChart);

            function drawChart()
            {
              var dataStatus = google.visualization.arrayToDataTable(statuskerjasama);
              var view = new google.visualization.DataView(dataStatus); //Line Graph
                view.setColumns([0, 1, { //Line Graph
                calc: 'stringify', //Line Graph
                sourceColumn: 1, //Line Graph
                type: 'string', //Line Graph
                role: 'annotation' //Line Graph
              }]); //Line Graph
              var options = {
                hAxis: { //Line Graph
                  title: 'Tahun' //Line Graph
                }, //Line Graph
                vAxis: { //Line Graph
                  title: 'Jumlah Kerjasama' //Line Graph
                },  //Line Graph
                lineWidth: 2, //Line Graph
                pointsVisible: true, //Line Graph
                pointShape: 'diamond'
              };
              var chart = new google.visualization.ColumnChart(document.getElementById('chart_status_kerjasama'));
              chart.draw(view, options);
            }
          </script>

          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Total Kerjasama Masih Berjalan dan Expired</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
              <div id="chart_status_kerjasama" style="height: 250px; width: 467px;" width="700" height="375"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
        <!-- LINE CHART -->
        <!-- Chart 3 Resign-->        
          <script type="text/javascript">
            var infoker = <?php echo $tahun; ?>

            google.charts.load('current', {'packages':['corechart']});

            google.charts.setOnLoadCallback(drawChart);

            function drawChart()
            {
              var dataResign = google.visualization.arrayToDataTable(infoker);
              var view = new google.visualization.DataView(dataResign); //Line Graph
              view.setColumns([0, 1, { //Line Graph
                calc: 'stringify', //Line Graph
                sourceColumn: 1, //Line Graph
                type: 'string', //Line Graph
                role: 'annotation' //Line Graph
              }]); //Line Graph
              var options = {
                hAxis: { //Line Graph
                  title: 'Tahun' //Line Graph
              }, //Line Graph
              vAxis: { //Line Graph
                title: 'Jumlah Mitra' //Line Graph
              },
              lineWidth: 2, //Line Graph
              pointsVisible: true, //Line Graph
              pointShape: 'diamond'
              };
              var chart = new google.visualization.LineChart(document.getElementById('chart_infoker'));
              chart.draw(view, options);
            }
          </script>
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Total Kerjasama Sesuai Tahun</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <div id="chart_infoker" style="height: 250px; width: 467px;" width="700" height="375"></div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
        <!-- /.col (RIGHT) -->

        <!-- /.col (LEFT) -->
        <div class="col-md-6">
        
        <!-- LINE CHART -->
        <!-- Chart 5-->       
        <!-- Highcharts -->
       <!--  -->
       <script type="text/javascript">
               var analytics = <?php echo $nama_unit; ?>

           google.charts.load('current', {'packages':['corechart']});

           google.charts.setOnLoadCallback(drawChart);

           function drawChart()
           {
            var dataUnit = google.visualization.arrayToDataTable(analytics);
            var view = new google.visualization.DataView(dataUnit); //Line Graph
            view.setColumns([0, 1, { //Line Graph
                calc: 'stringify', //Line Graph
                sourceColumn: 1, //Line Graph
                type: 'string', //Line Graph
                role: 'annotation' //Line Graph
            }]); //Line Graph
            var options = {
             hAxis: { //Line Graph
                title: 'Nama Unit' //Line Graph
             }, //Line Graph
             vAxis: { //Line Graph
                title: 'Nama Mitra' //Line Graph
             },  //Line Graph
             lineWidth: 2, //Line Graph
             pointsVisible: true, //Line Graph
             pointShape: 'diamond'
             // is3D:true,  
             // pieHole: 0.4 
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
            chart.draw(view, options);
           }
          </script>
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Total Kerjasama Berdasarkan Unit</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
              <div id="pie_chart" style="height: 250px; width: 357px;" width="700" height="375"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
        <!-- LINE CHART -->
        <!-- Chart 3 Resign-->        
          <script type="text/javascript">
          var naskah = <?php echo $tahun3; ?>

           google.charts.load('current', {'packages':['corechart']});

           google.charts.setOnLoadCallback(drawChart);

           function drawChart()
           {
            var data = google.visualization.arrayToDataTable(naskah);
            var view = new google.visualization.DataView(data); //Line Graph
            view.setColumns([0, 1, { //Line Graph
                calc: 'stringify', //Line Graph
                sourceColumn: 1, //Line Graph
                type: 'string', //Line Graph
                role: 'annotation' //Line Graph
            }]); //Line Graph
            var options = {
             hAxis: { //Line Graph
                title: 'Tahun' //Line Graph
             }, //Line Graph
             vAxis: { //Line Graph
                title: 'Jumlah Naskah' //Line Graph
             },  //Line Graph
             lineWidth: 2, //Line Graph
             pointsVisible: true, //Line Graph
             pointShape: 'diamond'
             // is3D:true,  
             // pieHole: 0.4 
            };
            var chart = new google.visualization.ColumnChart(document.getElementById('naskah_chart'));
            chart.draw(view, options);
           }
          </script>
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Total Naskah yang Sudah Ditindaklanjuti</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <div id="naskah_chart" style="height: 250px; width: 467px;" width="700" height="375"></div>
              </div>
        </div>
          <!-- /.box -->
      </div>
        <!-- /.col (RIGHT) -->
      </div>

  </section>
    <!-- /.content -->
  @endsection
  