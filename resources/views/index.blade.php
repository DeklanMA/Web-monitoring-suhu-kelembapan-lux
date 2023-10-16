<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- <script src="{{('jquery/jquery.min.js')}}"></script>

<script type="text/javascript"> 
$(document).ready( function() {
setInterval( function() {
$("#suhu").load("{{ url('bacasuhu') }}");
$("#kelembaban").load("{{ url('bacakelembaban') }}");
}, 1000); //1000ms = 1s
}); -->
</script> I
    <title>IOT_BB</title>
  </head>
  <body>
<div class="container" style="text-align: center;" margin-top:80px;>
<h2>Nilai sensor Suhu dan Kelembababan</h2>

</div>

<div class="container">
    <div class="row" style="text-align: center;">
     @foreach($data as $sensor)
        <div class="col-md-6">
           <div class="card">
                <h5 class="card-header" >Suhu</h5>
                <div class="card-body">
                <h5 class="card-title" style="font-size: 70px; font-weight:bold;"><span id="suhu">{{$sensor->suhu}}&deg</span><span style="font-size: 24px;">°C</span></h5>
                </div>
            </div>
        </div>
        <div class="col-md-6">
             <div class="card">
                <h5 class="card-header" style="text-align: center;">Kelembaban</h5>
                <div class="card-body">
                <h5 class="card-title" style="font-size: 70px; font-weight:bold;"><span id="kelembaban">{{$sensor->kelembaban}}&deg</span><span style="font-size: 24px;">%</span></h5>
                </div>
            </div>
        </div>
         @endforeach
    </div>
</div>



  </body>
</html>