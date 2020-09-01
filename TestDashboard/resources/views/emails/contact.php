<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style media="screen">
      /* body{
      background: url('{{ asset('img/logo.png') }}') no-repeat;
      background-size: cover; 
     
      } */
      .box{
        position: absolute;
        width: 750px;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
      }
    </style>
  </head>
  <body>
  <div class="container">
      <table style="margin:0 auto; 
            padding-top:10px;
            padding-bottom:30px;
            width:80%; 
            text-align:left; 
            maxwidth:650px; 
            table-layout:fixed">
      <tbody>
      <tr>
        
        <div class="box mb-100" style="background:rgb(240, 240, 240);">
            <center>
              <h2 class="cool-md-12" style="background:rgb(60, 60, 60); 
                                            width:500px; 
                                            color:white; 
                                            font-family:Open Sans, Helvetica, Arial, sans serif; 
                                            font-size:24px; 
                                            font-weight:700; 
                                            line-height:130%">
                                            DEL INSTITUTE OF TECHNOLOGY
                </h2>
            </center>
            <div class="cool-md-12" style="font-family:Open Sans, Helvetica, Arial, sans serif; 
                    font-weight:400; 
                    line-height:160%; 
                    font-size: 14px; 
                    margin:0; 
                    text-align:start" >
           
            <center>
            Hello Mrs/Ms   {{ $name }} 
            </center>
          </div>
          <div class="cool-md-12" style="font-family:Open Sans, Helvetica, Arial, sans serif; 
                font-weight:400; 
                line-height:160%; 
                font-size: 14px; 
                margin:0; 
                text-align:start">
          <center>
          From this email, we are from Del Institut of Technology want to inform about {{ $bodyMessage }}.
          </center>
          
          </div>
          <tr>
         
        </div>
        </tbody>
        </table>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>