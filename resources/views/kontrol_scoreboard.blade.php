@extends('layouts.app')
@section('title','Kontrol Scoreboard')
@section('head') 
<meta name="csrf-token" content="{{ csrf_token() }}">  
@endsection

@section('content')

<div class="page-header">
        <h4>Dashboard</h4>
        <hr>
    </div>

    
                        

<div class="form-row mt-3">

                    <div class="col-md-4 mb-3">

                    <form action=""  method="POST">
                        <label for="validationCustom03">HOME</label>
                        <input type="text" class="form-control" name ="nama_home" id="nama" placeholder="Masukkan Home" >
                        </div>

                        <div class="col-md-2 mb-3" style="margin-top:4px;">
                        <button type="button" class="mt-4 btn btn-outline-info btn-uppercase-submit-home">Submit</button>
                        </form>
                        </div>
                    

                    <div class="col-md-4 mb-3">
                    <form action="" method="POST">
                    <label for="validationCustom03">AWAY</label>
                    <input type="text" class="form-control" name ="nama_away" id="nama" placeholder="Masukkan Away" >
                    </div>

                    <div class="col-md-2 mb-3" style="margin-top:4px;">
                    <button type="submit" class="mt-4 btn btn-outline-info btn-uppercase-submit-away">Submit</button>
                    </form>
                    </div>
                   
</div>

<center>

<div class="form-row mt-3">
    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-outline-secondary btn-uppercase-homeplus2" name="homeplus2">+ 2 Home</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-outline-danger btn-uppercase-homeminus2" name="homeminus2">- 2 Home</button>
        </form>
    </div>
    <div class="col-md-2">
    
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-outline-secondary btn-uppercase-awayplus2" name="awayplus2">+ 2 Away</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-outline-danger btn-uppercase-awayminus2" name="awayminus2">- 2 Away</button>
        </form>
    </div>
</div>
</center>

<center>
<div class="form-row mt-3">
    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-outline-secondary btn-uppercase-homeplus3" name="homeplus3">+ 3 Home</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-outline-danger btn-uppercase-homeminus3" name="homeminus2">- 3 Home</button>
        </form>
    </div>
    <div class="col-md-2">
    
    </div>
    

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-outline-secondary btn-uppercase-awayplus3" name="awayplus3">+ 3 Away</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-outline-danger btn-uppercase-awayminus3" name="awayminus3">- 3 Away</button>
        </form>
    </div>
    </div>
    <hr>
    <div class="col-md-2">
    
                                                <h4>FOUL HOME</h4>
                                                <div class="btn-group btn-submit-foulshome" role="group" aria-label="Basic example">
                                                <form action="" method="POST">
                                                    <button type="button" class="btn btn-danger home_foul_min" name="home_foul_min1">
                                                        <i class="ti-minus"></i>
                                                    </button>
                                                </form>
                                                <form action="" method="POST">
                                                    <button type="button" class="btn btn-success home_foul_plus" name="home_foul_plus1">
                                                        <i class="ti-plus"></i>
                                                    </button>
                                                </form>
                                                </div></br></br>
                                                <h4>FOUL AWAY</h4>
                                                <div class="btn-group btn-submit-foulsaway" role="group" aria-label="Basic example">
                                                <form action="" method="POST">
                                                    <button type="button" class="btn btn-danger away_foul_min" name="away_foul_min1">
                                                        <i class="ti-minus"></i>
                                                    </button>
                                                    </form>
                                                    <form action="" method="POST">
                                                    <button type="button" class="btn btn-success away_foul_plus" name="away_foul_plus1">
                                                        <i class="ti-plus"></i>
                                                    </button>
                                                    </form>
                                                </div></br></br>
                                                
    </div>

</center>
<hr>
                                                <h4 class="mt-4" align="center">PERIOD</h4>
                                                <div class="form-inline" style="display: flex; justify-content: center; align-items: center;">
                                                    <div class="form-group mb-2">
                                                        <button type="button" class="btn btn-secondary min_period" name="min_period1">
                                                            -
                                                        </button>
                                                        <div id="period" style="display:table-cell; border: 5px solid purple; width: 90px; height: 90px; vertical-align: middle; text-align: center; font-size: 56px; margin-left: 5px; margin-right: 5px">
                                                            1
                                                        </div>
                                                        <button type="button" class="btn btn-primary plus_period" name="plus_period1">
                                                            +
                                                        </button>
                                                    </div>
                                                </div>
</br>
<hr>
<h4 class="mt-4" align="center">Scoreboard</h4>
</br>
<div class="form-inline" style="display: flex; justify-content: center; align-items: center;">
        <form action="/store-reset" method="POST">
            <button type="submit" class="btn btn-outline-secondary btn-submit-reset" name="reset"> Reset Scoreboard</button>
        </form>
    </div>
</br>
<hr>
<div class="form-row">
<div class="col-md-6">
<h3 class="mt-4" align="center"><span>Timer</span></h3>
</div>
<div class="col-md-6">
<h3 class="mt-4"  align="center">Music</h3>

</div>
</div>

<center>
<div class="form-row mt-3">
    <div class="col-md-2">
        <form action="/store-start-timer" method="POST">
            <button type="submit" class="btn btn-outline-success btn-submit-start-timer" name="start_timer">Reset</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="/store-resume-timer" method="POST">
            <button type="submit" class="btn btn-outline-warning btn-submit-resume-timer" name="resume_timer">Start/Resume</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="/store-stop-timer" method="POST">
            <button type="submit" class="btn btn-outline-danger btn-submit-stop-timer" name="stop_timer">Stop</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-outline-info btn-submit-sound1" name="homeminus2">Sound 1</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-outline-info btn-submit-sound2" name="homeminus2">Sound 2</button>
        </form>
    </div>

    <div class="col-md-2">
        <form action="" method="POST">
            <button type="submit" class="btn btn-outline-info btn-submit-sound3" name="homeminus2">Sound 3</button>
        </form>
    </div>
    
</div>
</center>

</form>


@endsection

@section('script')
<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-uppercase-submit-home").click(function(e){
        e.preventDefault();

        var home = $("input[name=nama_home]").val();
        var url = '{{ url('store-home') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
                  name_home:home, 
                },
           success:function(response){
              if(response.success){
                  console.log('sukses')
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
	});
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-uppercase-submit-away").click(function(e){
        e.preventDefault();

        var away = $("input[name=nama_away]").val();
        var url = '{{ url('store-away') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
                  name_away:away, 
                },
           success:function(response){
              if(response.success){
                  console.log('sukses')
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
	});
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-uppercase-homeplus2").click(function(e){
        console.log('masukplus2home');
        e.preventDefault();

        var homeplus2 = $("input[name=homeplus2]").val();
        var url = '{{ url('store-homeplus2') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
                  
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
    
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-uppercase-homeminus2").click(function(e){
        console.log('masukminus2home');
        e.preventDefault();

        var url = '{{ url('store-homeminus2') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-uppercase-homeplus3").click(function(e){
        console.log('masukhomeplus3');
        e.preventDefault();

        var url = '{{ url('store-homeplus3') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-uppercase-homeminus3").click(function(e){
        console.log('masukhomeminus3');
        e.preventDefault();

        var url = '{{ url('store-homeminus3') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>



<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-uppercase-awayplus2").click(function(e){
        console.log('masukawayplus2');
        e.preventDefault();

        var url = '{{ url('store-awayplus2') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-uppercase-awayplus3").click(function(e){
        console.log('awayplus3');
        e.preventDefault();

        var url = '{{ url('store-awayplus3') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-uppercase-awayminus3").click(function(e){
        console.log('awayminus3');
        e.preventDefault();

        var url = '{{ url('store-awayminus3') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-uppercase-awayminus2").click(function(e){
        console.log('awayminus2');
        e.preventDefault();

        var url = '{{ url('store-awayminus2') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>


<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit-sound1").click(function(e){
        console.log('sound1');
        e.preventDefault();

        var url = '{{ url('store-sound1') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit-sound2").click(function(e){
        console.log('sound2');
        e.preventDefault();

        var url = '{{ url('store-sound2') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit-sound3").click(function(e){
        console.log('sound3');
        e.preventDefault();

        var url = '{{ url('store-sound3') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit-start-timer").click(function(e){
        console.log('start-timer');
        e.preventDefault();

        var url = '{{ url('reset-menit-detik') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit-resume-timer").click(function(e){
        console.log('resume-timer');
        e.preventDefault();

        var url = '{{ url('resume-menit-detik') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit-stop-timer").click(function(e){
        console.log('stop-timer');
        e.preventDefault();

        var url = '{{ url('stop-menit-detik') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".away_foul_plus").click(function(e){
        console.log('masuk away_foul_plus');
        e.preventDefault();

        var awayfouls = $("input[name=away_foul_plus1]").val();
        var url = '{{ url('store-awayfouls') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
                  
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
    
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".away_foul_min").click(function(e){
        console.log('masuk away_foul_min');
        e.preventDefault();

        var awayfouls = $("input[name=away_foul_min1]").val();
        var url = '{{ url('store-awayfoulsmin') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
                  
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
    
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".home_foul_plus").click(function(e){
        console.log('masuk home_foul_plus');
        e.preventDefault();

        var homefouls = $("input[name=home_foul_plus1]").val();
        var url = '{{ url('store-homefouls') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
                  
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
    
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".home_foul_min").click(function(e){
        console.log('masuk home_foul_min');
        e.preventDefault();

        var homefouls = $("input[name=home_foul_min1]").val();
        var url = '{{ url('store-homefoulsmin') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
                  
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
    
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".plus_period").click(function(e){
        console.log('masuk period plus');
        e.preventDefault();

        var homefouls = $("input[name=plus_period1]").val();
        var url = '{{ url('store-periodplus') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
                  
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
    
</script>

<script>
 $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".min_period").click(function(e){
        console.log('masuk period min');
        e.preventDefault();

        var homefouls = $("input[name=min_period1]").val();
        var url = '{{ url('store-periodmin') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
                  
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
    
</script>

<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit-reset").click(function(e){
        console.log('reset');
        e.preventDefault();

        var url = '{{ url('store-reset') }}';

        $.ajax({
           url:url,
           method:'POST',
           data:{
              
           },
           success:function(response){
              if(response.success){
                  console.log('sukses')
              }else{
                //   alert("Error")
              }
           },
           error:function(error){
              console.log(error)
           }
        });
    });
</script>

@endsection