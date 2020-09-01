<!DOCTYPE html>
<html>
 <head>
  <title>Naskah Yang Telah Ditindaklanjuti</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <style type="text/css">
    .box{
        width:800px;
        height:400px;
   }
  </style>
  <script type="text/javascript">
   var tahun = <?php echo $tahun; ?>

   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(tahun);
   // var data = google.visualization.arrayToDataTable($thn_masuk);
    var view = new google.visualization.DataView(data); //Line Graph
    view.setColumns([0, 1, { //Line Graph
        calc: 'stringify', //Line Graph
        sourceColumn: 1, //Line Graph
        type: 'string', //Line Graph
        role: 'style' //Line Graph
    }]); //Line Graph
    var options = {
     //title: 'Tahun Masuk Mahasiswa IT DEL',
     hAxis: { //Line Graph
        title: 'Tahun' //Line Graph
     }, //Line Graph
     vAxis: { //Line Graph
        title: 'Jumlah Naskah' //Line Graph
     },
     legend: 'none',
    };
    var chart = new google.visualization.ColumnChart(document.getElementById('column_chart'));
    chart.draw(view, options);
   }

  </script>
 </head>
 <body>
  <br />
  <div class="container">
    <div class="box">
     <h3 align="left">Naskah Tindaklanjut</h3><br />
       <div class="panel panel-default">
          <div class="panel-heading">
           <h3 class="panel-title">Info Kerjasama</h3>
          </div>
          <div class="panel-body" align="left">
           <div id="column_chart" style="width:750px; height:400px;"></div>
          </div>
      </div>
    </div>
  </div>
 </body>
</html>