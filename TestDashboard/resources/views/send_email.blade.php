@extends('layouts.master')
<br>
<br>
<br>

@section('content')
<!DOCTYPE html>
<html>
 <head>
  <title>Send Email</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
   .has-error
   {
    border-color:#cc0000;
    background-color:#ffff99;
   }
  </style>
 </head>
 <body>
  <br />
   <!-- <div class="container box">

   </div> -->
  <br />
  <br />
  <div class="container box">
  <!-- <img src="http://127.0.0.1:8000/resources/img/logo.png"/> -->
   <h3 align="center">FORM Email</h3><br />
 
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
   <form method="post" action="{{url('sendemail/send')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Enter The Name</label>
     <input type="text" name="name" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Enter Subject</label>
     <input type="text" name="subject" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Enter The Email</label>
     <input type="text" name="email" class="form-control" value="" />
    </div>
    
    <div class="form-group form-group-default">
        <label>Attachment</label>
        <input type="file" name="a_file" accept="file_extension|image/*|media_type" multiple enctype="multipart/form-data">
    </div>
    
    <div class="form-group">
     <label>Enter Your Message</label>
     <textarea name="message" class="form-control"></textarea>
    </div>
    <div class="form-group">
     <input type="submit" name="send" class="btn btn-info" value="Send" />
    </div>
   </form>
   
  </div>
 </body>
</html>

@stop

@section('footer')
    <script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@stop
