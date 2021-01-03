<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Symfony\Component\HttpFoundation\StreamedResponse;

class controllerscoreboard extends Controller
{

    public function controller_index(){
        return view('kontrol_scoreboard');
    }

    public function scoreboard_index(){
        return view('display_scoreboard');
    }

    public function update_sse(){
        
        $response = new StreamedResponse();
        $response->headers->set('Content-Type', 'text/event-stream');
        $response->headers->set('Cache-Control', 'no-cache');
        $response->setCallback(
            function() {
                    $score = DB::table('scoreboard')->where('id', '1')->get();
                    echo "data: ".json_encode($score)."\n\n";
                    echo "retry: 100\n\n"; // no retry would default to 3 seconds.
                    ob_end_flush();
                    // ob_flush();
                    flush();
            });
        $response->send();
    }

    public function update_menit_detik(Request $request){
        DB::table('scoreboard')->where('id','1')->update([
            'menit' => $request->input('name_menit'),
            'detik' => $request->input('name_detik')  
       ]);

       
    }

    public function reset_menit_detik(Request $request){
        DB::table('scoreboard')->where('id','1')->update([
            'status_waktu' => 1,
            'menit' => "10",
            'detik' => "00" 
       ]);

       
    }

    public function resume_menit_detik(Request $request){
        DB::table('scoreboard')->where('id','1')->update([
            'status_waktu' => 1
       ]);

       
    }

    public function stop_menit_detik(Request $request){
        DB::table('scoreboard')->where('id','1')->update([
            'status_waktu' => 0
       ]);

       
    }
    


    public function store_home(Request $request){
        DB::table('scoreboard')->where('id','1')->update([
            'name_home' => $request->input('name_home') 
       ]);

       
    }

    public function store_away(Request $request){
        DB::table('scoreboard')->where('id','1')->update([
            'name_away' => $request->input('name_away') 
       ]);

       
    }

    public function scorehomeplus2(Request $request){
        // $score = DB::table('scoreboard')->select('score_home')->where('id', '1')->first();
        $score = DB::table('scoreboard')->where('id', '1')->get();
        foreach($score as $sc){
            $result = $sc->score_home;
        }
            $result_fix = $result+2;
        DB::table('scoreboard')->where('id','1')->update([
            'score_home' =>  $result_fix
        ]);

       
    }

    public function scorehomeminus2(Request $request){
         // $score = DB::table('scoreboard')->select('score_home')->where('id', '1')->first();
         $score = DB::table('scoreboard')->where('id', '1')->get();
         foreach($score as $sc){
             $result = $sc->score_home;
         }
             $result_fix = $result-2;
             if($result_fix<0){
                $result_fix=0;
             }
         DB::table('scoreboard')->where('id','1')->update([
             'score_home' =>  $result_fix
         ]);
 
       

    }

    public function scorehomeplus3(Request $request){
        // $score = DB::table('scoreboard')->select('score_home')->where('id', '1')->first();
        $score = DB::table('scoreboard')->where('id', '1')->get();
        foreach($score as $sc){
            $result = $sc->score_home;
        }
            $result_fix = $result+3;
            if($result_fix<0){
               $result_fix=0;
            }
        DB::table('scoreboard')->where('id','1')->update([
            'score_home' =>  $result_fix
        ]);

       

   }

   public function scorehomeminus3(Request $request){
    // $score = DB::table('scoreboard')->select('score_home')->where('id', '1')->first();
    $score = DB::table('scoreboard')->where('id', '1')->get();
    foreach($score as $sc){
        $result = $sc->score_home;
    }
        $result_fix = $result-3;
        if($result_fix<0){
           $result_fix=0;
        }
    DB::table('scoreboard')->where('id','1')->update([
        'score_home' =>  $result_fix
    ]);

  

    }

    //skor-away

    public function scoreawayplus2(Request $request){
        // $score = DB::table('scoreboard')->select('score_away')->where('id', '1')->first();
        $score = DB::table('scoreboard')->where('id', '1')->get();
        foreach($score as $sc){
            $result = $sc->score_away;
        }
            $result_fix = $result+2;
        DB::table('scoreboard')->where('id','1')->update([
            'score_away' =>  $result_fix
        ]);

       
    }

    public function scoreawayminus2(Request $request){
         // $score = DB::table('scoreboard')->select('score_away')->where('id', '1')->first();
         $score = DB::table('scoreboard')->where('id', '1')->get();
         foreach($score as $sc){
             $result = $sc->score_away;
         }
             $result_fix = $result-2;
             if($result_fix<0){
                $result_fix=0;
             }
         DB::table('scoreboard')->where('id','1')->update([
             'score_away' =>  $result_fix
         ]);
 
       

    }

    public function scoreawayplus3(Request $request){
        // $score = DB::table('scoreboard')->select('score_away')->where('id', '1')->first();
        $score = DB::table('scoreboard')->where('id', '1')->get();
        foreach($score as $sc){
            $result = $sc->score_away;
        }
            $result_fix = $result+3;
            if($result_fix<0){
               $result_fix=0;
            }
        DB::table('scoreboard')->where('id','1')->update([
            'score_away' =>  $result_fix
        ]);

       

   }

   public function scoreawayminus3(Request $request){
    // $score = DB::table('scoreboard')->select('score_away')->where('id', '1')->first();
    $score = DB::table('scoreboard')->where('id', '1')->get();
    foreach($score as $sc){
        $result = $sc->score_away;
    }
        $result_fix = $result-3;
        if($result_fix<0){
           $result_fix=0;
        }
    DB::table('scoreboard')->where('id','1')->update([
        'score_away' =>  $result_fix
    ]);

  

    }

    public function store_sound1(Request $request){

        DB::table('scoreboard')->where('id','1')->update([
            'musik' =>  1
        ]);
    
       
    
    }

    
    public function store_sound2(Request $request){

        DB::table('scoreboard')->where('id','1')->update([
            'musik' =>  2
        ]);
    
       
    }

    public function store_sound3(Request $request){

        DB::table('scoreboard')->where('id','1')->update([
            'musik' =>  3
        ]);
    
       
    }

    public function update_sound(Request $request){

        DB::table('scoreboard')->where('id','1')->update([
            'musik' =>  0
        ]);
    
       
    }

    public function scorehomefouls(Request $request){
        // $score = DB::table('scoreboard')->select('score_home')->where('id', '1')->first();
        $score = DB::table('scoreboard')->where('id', '1')->get();
        foreach($score as $sc){
            $result = $sc->fouls_home;
        }
            $result_fix = $result+1;
        DB::table('scoreboard')->where('id','1')->update([
            'fouls_home' =>  $result_fix
        ]);
    }

    public function scoreawayfouls(Request $request){
        // $score = DB::table('scoreboard')->select('score_home')->where('id', '1')->first();
        $score = DB::table('scoreboard')->where('id', '1')->get();
        foreach($score as $sc){
            $result = $sc->fouls_away;
        }
            $result_fix = $result+1;
        DB::table('scoreboard')->where('id','1')->update([
            'fouls_away' =>  $result_fix
        ]);
    }
  
    public function fouls_homeminus(Request $request){
        // $score = DB::table('scoreboard')->select('score_home')->where('id', '1')->first();
        $score = DB::table('scoreboard')->where('id', '1')->get();
        foreach($score as $sc){
            $result = $sc->fouls_home;
        }
            $result_fix = $result-1;
            if($result_fix<0){
               $result_fix=0;
            }
        DB::table('scoreboard')->where('id','1')->update([
            'fouls_home' =>  $result_fix
        ]);
    }

    public function fouls_awayminus(Request $request){
        // $score = DB::table('scoreboard')->select('score_home')->where('id', '1')->first();
        $score = DB::table('scoreboard')->where('id', '1')->get();
        foreach($score as $sc){
            $result = $sc->fouls_away;
        }
            $result_fix = $result-1;
            if($result_fix<0){
               $result_fix=0;
            }
        DB::table('scoreboard')->where('id','1')->update([
            'fouls_away' =>  $result_fix
        ]);
    }

    public function period_plus(Request $request){
        // $score = DB::table('scoreboard')->select('score_home')->where('id', '1')->first();
        $score = DB::table('scoreboard')->where('id', '1')->get();
        foreach($score as $sc){
            $result = $sc->period;
        }
            $result_fix = $result+1;
        DB::table('scoreboard')->where('id','1')->update([
            'period' =>  $result_fix
        ]);
    }

    public function period_min(Request $request){
        // $score = DB::table('scoreboard')->select('score_home')->where('id', '1')->first();
        $score = DB::table('scoreboard')->where('id', '1')->get();
        foreach($score as $sc){
            $result = $sc->period;
        }
            $result_fix = $result-1;
            if($result_fix<0){
               $result_fix=0;
            }
        DB::table('scoreboard')->where('id','1')->update([
            'period' =>  $result_fix
        ]);
    }

    public function reset_pertandingan(Request $request){
        DB::table('scoreboard')->where('id','1')->update([
            'status_waktu' => 0,
            'score_home' => 0,
            'score_away' => 0,
            'fouls_home' => 0,
            'fouls_away' => 0,
            'menit' => "10",
            'detik' => "00" ,
            "name_home" => "-",
            "name_away" => "-"
       ]);

       
    }

}
