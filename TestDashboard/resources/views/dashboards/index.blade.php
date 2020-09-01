@extends('layouts.master')

@section('content')

<div class="main">
      <!-- MAIN CONTENT -->
      <div class="main-content">
        <div class="container-fluid">
          <!-- OVERVIEW -->
          <div class="panel panel-headline">
            <!-- <h3 class="panel-title">Selamat datang , {{auth()->user()->name}}</h3>
              <div class="panel-heading">
              <p class="panel-subtitle"></p>
            </div> -->
          
            
                 <!--  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
                 

            <!-- <div class="panel-body"> -->
            <!-- <div class="panel panel-headline demo-icons"> -->
              <div class="container">
            
            
            <div><h1> Dashboard Infokerjasama </h1></div>
            <br><br><br>
                  
              
                 <!--  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
                     </span>
                  </span>


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

          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Total Kerjasama</h3>
                <div class="box-tools pull-right">
            </div>
            <div class="box-body">
              <div id="columnchart_material" style="height: 250px; width: 467px;" width="700" height="375"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title" style="margin-left: 300px; width: 500px;">Jumlah Kerjasama Sesuai Unit</h3>
                <div class="box-tools pull-center">
                 
                </div>
            </div>
            <div class="box-body">
              <div id="pie_chart" style="height: 250px; width: 500px; top: 50%; left: 100%; margin-left: 250px; margin-top: auto;" width="700" height="375"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
        <!-- /.col (LEFT) -->


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
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Jumlah Naskah PkS</h3>
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




@stop

