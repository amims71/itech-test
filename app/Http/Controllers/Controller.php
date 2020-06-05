<?php

namespace App\Http\Controllers;

use App\Buyer;
use App\Record;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function recordTransfer(){
        Record::query()->truncate();

        $path = storage_path() . "/app/public/records.json";

        $json = json_decode(file_get_contents($path), true)['RECORDS'];
        foreach (array_chunk($json,1000) as $t)
        {
            DB::table('records')->insert($t);
        }
        dd( Record::all());
    }

    public function purchaseListEloquent(){
        $buyers=Buyer::all();
        $buyers=$buyers->sortBy('total_item_taken');
        return view('purchase',compact('buyers'));
    }
    public function secondBuyerEloquent(){
        $buyers=Buyer::all();
        $buyer=$buyers->sortBy('total_item_taken')[1];
        return view('buyer',compact('buyer'));
    }

    public function purchaseListNoEloquent(){
        /*$buyers=DB::raw('select buyers.id, buyers.name, sum(diary_taken.amount) AS total_diary_taken,
        sum(eraser_taken.amount) AS total_eraser_taken,sum(pen_taken.amount) AS total_pen_taken
          from buyers inner join diary_taken on buyers.id=diary_taken.buyer_id inner join eraser_taken on
          buyers.id=eraser_taken.buyer_id inner join pen_taken on buyers.id=pen_taken.buyer_id GROUP BY buyers.id ');*/
        /*$buyers=DB::table('buyers')
            ->leftJoin('diary_taken','buyers.id','=','diary_taken.buyer_id')
            ->leftJoin('eraser_taken','buyers.id','=','eraser_taken.buyer_id')
            ->leftJoin('pen_taken','buyers.id','=','pen_taken.buyer_id')
            ->groupBy('buyers.id')
            ->select('buyers.*',
                DB::raw('sum(diary_taken.amount) as total_diary_taken'),
                DB::raw('sum(eraser_taken.amount) as total_eraser_taken'),
                DB::raw('sum(pen_taken.amount) as total_pen_taken')
            )->get();*/

        $buyers=DB::table('buyers')->get();
//        dd($buyers);
        foreach ($buyers as $buyer){
            $buyer->total_diary_taken=0;
            $buyer->total_eraser_taken=0;
            $buyer->total_pen_taken=0;
            $buyer->total_item_taken=0;
            $diaries=DB::table('diary_taken')->select('*')
                ->where('buyer_id','=',$buyer->id)->sum('amount');
            $buyer->total_diary_taken=$buyer->total_diary_taken+$diaries;

            $erasers=DB::table('eraser_taken')->select('*')
                ->where('buyer_id','=',$buyer->id)->sum('amount');
            $buyer->total_eraser_taken=$buyer->total_eraser_taken+$erasers;

            $pens=DB::table('pen_taken')->select('*')
                ->where('buyer_id','=',$buyer->id)->sum('amount');
            $buyer->total_pen_taken=$buyer->total_pen_taken+$pens;

            $buyer->total_item_taken=$buyer->total_item_taken+$diaries+$erasers+$pens;

        }
        $buyers=$buyers->sortBy('total_item_taken');
        return view('purchase',compact('buyers'));
//        dd($buyers);
    }
    public function secondBuyerNoEloquent(){
        $buyers=DB::table('buyers')->get();
        foreach ($buyers as $buyer){
            $buyer->total_diary_taken=0;
            $buyer->total_eraser_taken=0;
            $buyer->total_pen_taken=0;
            $buyer->total_item_taken=0;
            $diaries=DB::table('diary_taken')->select('*')
                ->where('buyer_id','=',$buyer->id)->sum('amount');
            $buyer->total_diary_taken=$buyer->total_diary_taken+$diaries;

            $erasers=DB::table('eraser_taken')->select('*')
                ->where('buyer_id','=',$buyer->id)->sum('amount');
            $buyer->total_eraser_taken=$buyer->total_eraser_taken+$erasers;

            $pens=DB::table('pen_taken')->select('*')
                ->where('buyer_id','=',$buyer->id)->sum('amount');
            $buyer->total_pen_taken=$buyer->total_pen_taken+$pens;

            $buyer->total_item_taken=$buyer->total_item_taken+$diaries+$erasers+$pens;

        }
        $buyer=$buyers->sortBy('total_item_taken')[1];
        return view('buyer',compact('buyer'));
//        dd($buyers);
    }

}
