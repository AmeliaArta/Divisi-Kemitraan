@extends('layouts.master')

@section('content')

<div class="main">
      <!-- MAIN CONTENT -->
      <div class="main-content">
<!--         <div class="container-fluid" style="background-color: #CCCCCC;"> -->
          <!-- OVERVIEW -->
<!--           <div class="panel panel-headline" style="background-color: #D6D6D6;"> -->
            <div class="row">
              <div class="container">
            
            <div class="container-fluid">
            <h1 class="page-title">DASHBOARD</h1>
            </div>

<div class="row">
<div class="col-md-6">  
          <script type="text/javascript">
            var statuskerjasama = <?php echo $statusKerjasama; ?>
            
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable(statuskerjasama);

              var options = {
                chart: {
                  title: ' ',
                },
                vAxis: { //Line Graph
                  title: 'Jumlah Kerjasama' //Line Graph
                }
              };

              var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

              chart.draw(data, google.charts.Bar.convertOptions(options));
            }
          </script>
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title" align="center">Total Kerjasama</h3>
              <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                  </div>
            </div>
            <div class="panel-body">
              <div id="columnchart_material" style="height: 350px; width: 500px;" width="700" height="375"></div>
            </div>
          </div>
        </div>

        <div class="col-md-6">        
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
          <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title" align="center">Jumlah Naskah PkS</h3>
          <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                  </div>
        </div>
        <div class="panel-body">
          <div id="naskah_chart" style="height: 350px; width: 500px;" width="700" height="375"></div>
        </div>
      </div>
          <!-- /.box -->
      </div>
    </div>

        <!-- /.col (LEFT) -->
      <div class="col-md-12">
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
          <div class="panel" style="margin-left: 250px; width: 600px;">
        <div class="panel-heading">
          <h3 class="panel-title" align="center">Jumlah Kerjasama Sesuai Unit</h3>
          <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                  </div>
        </div>
        <div class="panel-body">
          <div id="pie_chart" style="height: 350px; width: 500px;" width="700" height="375"></div>
        </div>
      </div>
          <!-- /.box -->
        </div>
      </div>
        <!-- /.col (LEFT) -->


        
        <!-- /.col (RIGHT) -->
      </div>
    </div>
  </div>

  </section>




@stop

