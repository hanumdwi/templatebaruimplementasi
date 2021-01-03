@extends('layouts.app')
@section('title','Tampilan Scoreboard')
@section('head') 
<meta name="csrf-token" content="{{ csrf_token() }}"> 

@endsection

@section('content')
<audio id="audio1">
 <source src="{{ asset('assets/lagu/sound1.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<audio id="audio2">
 <source src="{{ asset('assets/lagu/sound2.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<audio id="audio3">
 <source src="{{ asset('assets/lagu/sound3.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<audio id="audio4">
 <source src="{{ asset('assets/lagu/sound4.mp3') }}" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

<div class="page-header">
        <h4>Basket Scoreboard</h4>
        <hr>
    </div>

    <div class="row">
        <div class="col d-flex align-items-center justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col d-flex align-items-center justify-content-center">
                            <div class="table-responsive col-md-12">
                                <table class="table table-active text-center">
                                    <thead>
                                      <tr>
                                        <td>
                                        <h1>HOME</h1>
                                                <h4  id="name_home">TEAM A</h4>
                                            </td>
                                            <td><h1 style="color: red">BASKET</h1></td>
                                            <td>
                                                <h1>AWAY</h1>
                                                <h4 id="name_away">TEAM B</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <div id="score_home" style="display:table-cell; border: 5px solid purple; width: 80px; height: 80px; vertical-align: middle; text-align: center; font-size: 48px;">
                                                    0
                                                </div>
                                            </td>
                                            <td style="width: 20%">
                                                <h2>PERIOD</h2>
                                                <h1 id="period">1</h1>
                                            </td>
                                            <td align="center">
                                                <div id="score_away" style="display:table-cell; border: 5px solid purple; width: 80px; height: 80px; vertical-align: middle; text-align: center; font-size: 48px;">
                                                    0
                                                </div>
                                            </td>
                                            </tr>
                                        <tr>
                                            <td align="center">
                                                <h1>FOUL</h1>
                                                <div id="fouls_home" style="display:table-cell; border: 5px solid purple; width: 50px; height: 50px; vertical-align: middle; text-align: center; font-size: 32px;">
                                                    0
                                                </div>
                                            </td>
                                            <td align="center" style="width: 40%">
                                                <h1>TIME</h1>
                                                <div id="timer" style="display:table-cell; border: 5px solid yellow; width: 180px; height: 60px; vertical-align: middle; text-align: center; font-size: 42px;">
                                                09 : 00
                                                </div>
                                            </td>
                                            <td align="center">
                                                <h1>FOUL</h1>
                                                <div id="fouls_away" style="display:table-cell; border: 5px solid purple; width: 50px; height: 50px; vertical-align: middle; text-align: center; font-size: 32px;">
                                                    0
                                                </div>
                                            </td>
                                        </tr>
                                        
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- <center>
<div class="form-row">
    <div class="col md-4" id="name_home">a</div>
    <div class="col md-4" id="name_away">b</div>
</div>

<div class="form-row mt-4">
    <div class="col md-4" id="score_home">0</div>
    <div class="col md-4" id="score_away">0</div>
</div>
</center>

<center class="mt-4">
<div>Timer = <span id="timer">09 : 00</span></div>
</center> -->
    

@endsection

@section('script')
<script>
var stop;
var menit;
var detik;
window.onload = function() {
    var sse = new EventSource("/sse");
      sse.onmessage = function(e) {
          console.log(e);
          var data_json = JSON.parse(e.data);
          document.getElementById("name_home").innerHTML=data_json[0].name_home;
          document.getElementById("name_away").innerHTML=data_json[0].name_away;
          document.getElementById("score_home").innerHTML=data_json[0].score_home;
          document.getElementById("score_away").innerHTML=data_json[0].score_away;
          document.getElementById("fouls_home").innerHTML=data_json[0].fouls_home;
          document.getElementById("fouls_away").innerHTML=data_json[0].fouls_away;
          document.getElementById("period").innerHTML=data_json[0].period;

      
          

          if(data_json[0].musik==1){
            var audio1 = document.getElementById("audio1");
            stop_audio2_audio3();
            audio1.play();
            update_sound();
          }

          if(data_json[0].musik==2){
            var audio2 = document.getElementById("audio2");
            stop_audio1_audio3();
            audio2.play();
            update_sound();
          }

          if(data_json[0].musik==3){
            var audio3 = document.getElementById("audio3");
            stop_audio1_audio2();
            audio3.play();
            update_sound();
          }
          
          document.getElementById('timer').innerHTML = data_json[0].menit + ":" + data_json[0].detik;
          
          if(data_json[0].status_waktu==1){
            startTimer();


            function startTimer() {
            
                    var presentTime = document.getElementById('timer').innerHTML;
                    var timeArray = presentTime.split(/[:]+/);
                    var m = timeArray[0];
                    var s = checkSecond((timeArray[1] - 1));
                    if(s==59){m=m-1}
                    if(m<0){
                        if(data_json[0].menit==0 && data_json[0].detik==00){
                            var audio4 = document.getElementById("audio4");
                            audio4.play();
                            
                        }
                        
                    }
                    else{
                        menit = m;
                        detik = s;
                        insert_menit_detik();
                        console.log(m);
                        console.log(s);
                        setTimeout(startTimer, 1000*1000);
                    }
                }

                function checkSecond(sec) {
                        if (sec < 10 && sec >= 0) {sec = "0" + sec}; 
                        if (sec < 0) {sec = "59"};
                        return sec;
                }
          }
      
          


        //   tutup-sse
      }
}



function insert_menit_detik(){
             
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        var url = '{{ url('update-menit-detik') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              name_menit:menit, 
              name_detik:detik, 
           },
           success:function(response){
              if(response.success){
                  // console.log(response.message);
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
                });
}

function stop_audio1_audio2(){
      audio1.pause();
      audio1.currentTime = 0;
      audio2.pause();
      audio2.currentTime = 0;
}

function stop_audio2_audio3(){
      audio2.pause();
      audio2.currentTime = 0;
      audio3.pause();
      audio3.currentTime = 0;
}

function stop_audio1_audio3(){
      audio1.pause();
      audio1.currentTime = 0;
      audio3.pause();
      audio3.currentTime = 0;
}

function update_sound(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        var url = '{{ url('update-sound') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log(response.message);
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
                });
        }
</script>

@endsection

