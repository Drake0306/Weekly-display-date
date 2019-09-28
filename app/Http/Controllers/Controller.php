<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
    public function show(){


        $toReturn['data']=['Activity','Mon','Tue','Wed','Thr','Fri','Sat','Sun','Total'];
        // $dt = strtotime('06-10-2009');
        // $day = date("D", $dt);

        
            // set current date
            $toReturn['today']=date('d-m-Y');
            

            $today=date('d-m-Y');
            $date = $today;
            // parse about any English textual datetime description into a Unix timestamp 
            $ts = strtotime($date);
            // calculate the number of days since Monday
            $dow = date('w', $ts);
            $offset = $dow - 1;
            if ($offset < 0) {
                $offset = 6;
            }
            // calculate timestamp for the Monday
            $ts = $ts - $offset*86400;
            // loop from Monday till Sunday 
            for ($i = 0; $i < 7; $i++, $ts += 86400){
                $toReturn['daydate'][$i]= date("d-m-Y ", $ts) . "\n";
                $toReturn['lastdate']= date("d-m-Y l", $ts) . "\n";
                

                
                $toReturn['day'][$i]= date("l", $ts) . "\n";

            }
            // to calculate next month date


            // $prev_date = date('Y-m-d', strtotime($date .' -1 day'));
            // $next_date = date('Y-m-d', strtotime($date .' +1 day'));
        //  return $toReturn;

                //for blade loop
                //@foreach ($toReturn['daydate'] as $i)      
                //<th>{{$i}}</th>
                //@endforeach

        return view('Tabledemo')->with('toReturn',$toReturn);
    }

    public function nextdate(Request $r){
        //another round

         // set current date
         
         $lastdate=$r->new;

         $next_date = date('d-m-Y',strtotime($lastdate .' +1 day'));
        //  return $next_date;
         $today= $next_date;
         $date = $today;
         // parse about any English textual datetime description into a Unix timestamp 
         $ts = strtotime($date);
         // calculate the number of days since Monday
         $dow = date('w', $ts);
         $offset = $dow - 1;
         if ($offset < 0) {
             $offset = 6;
         }
         // calculate timestamp for the Monday
         $ts = $ts - $offset*86400;
         // loop from Monday till Sunday 
         for ($i = 0; $i < 7; $i++, $ts += 86400){
             $toReturn['daydate'][$i]= date("d-m-Y", $ts) . "\n";
             
   
             $toReturn['day'][$i]= date("l", $ts) . "\n";
 
         }

         return view('Tabledemo')->with('toReturn',$toReturn);
    }




    public function last_date(Request $r){


        $first_date=$r->old;
        
        $next_date = date('d-m-Y',strtotime($first_date .' -1 day'));
        //  return $next_date;
         $today= $next_date;
         $date = $today;
         // parse about any English textual datetime description into a Unix timestamp 
         $ts = strtotime($date);
         // calculate the number of days since Monday
         $dow = date('w', $ts);
         $offset = $dow - 1;
         if ($offset < 0) {
             $offset = 6;
         }
         // calculate timestamp for the Monday
         $ts = $ts - $offset*86400;
         // loop from Monday till Sunday 
         for ($i = 0; $i < 7; $i++, $ts += 86400){
             $toReturn['daydate'][$i]= date("d-m-Y", $ts) . "\n";
             
   
             $toReturn['day'][$i]= date("l", $ts) . "\n";
 
         }

         return view('Tabledemo')->with('toReturn',$toReturn);    
    }
}
