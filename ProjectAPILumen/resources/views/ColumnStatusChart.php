<!DOCTYPE html>
<html>
 <head>
  <title>Status Kerjasama</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <style type="text/css">
    .box{
    /*width:650px;*/
        width:900px;
        height:500px;
        /*display: inline-block;
        margin-left: 10px;*/
   }
  </style>

  <script type="text/javascript">
   var tahun = <?php echo $tahun; ?>

   google.charts.load('current', {'packages':['corechart']});

   google.charts.setOnLoadCallback(drawChart);

   function drawChart()
   {
    var data = google.visualization.arrayToDataTable(tahun);
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
        title: 'Jumlah Kerjasama' //Line Graph
     },  //Line Graph
     lineWidth: 2, //Line Graph
     pointsVisible: true, //Line Graph
     pointShape: 'diamond'
     // is3D:true,  
     // pieHole: 0.4 
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
     <h3 align="left">Kerjasama Berlangsung dan Expired</h3><br />
       <div class="panel panel-default">
          <div class="panel-heading">
           <h3 class="panel-title">Info Kerjasama</h3>
          </div>
          <div class="panel-body" align="left">
           <div id="column_chart" style="width:800px; height:500px;"></div>
          </div>
      </div>
    </div>
 </body>
</html>

<br>
