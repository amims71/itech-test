<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{

    protected $guarded=[];
    protected $appends = [
        'total_diary_taken',
        'total_eraser_taken',
        'total_pen_taken',
        'total_item_taken',
    ];


    public function diaryTaken(){
        return $this->hasMany(DiaryTaken::class);
    }
    public function eraserTaken(){
        return $this->hasMany(EraserTaken::class);
    }
    public function penTaken(){
        return $this->hasMany(PenTaken::class);
    }

    public function getTotalDiaryTakenAttribute(){
        $count=0;
//        dd($this->diaryTaken()->getResults());
        foreach ($this->diaryTaken()->getResults() as $diary){
            $count=$count+$diary->amount;
        }
        return $count;
    }
    public function getTotalEraserTakenAttribute(){
        $count=0;
        foreach ($this->eraserTaken()->getResults() as $eraser){
            $count=$count+$eraser->amount;
        }
        return $count;
    }
    public function getTotalPenTakenAttribute(){
        $count=0;
        foreach ($this->penTaken()->getResults() as $pen){
            $count=$count+$pen->amount;
        }
        return $count;
    }
    public function getTotalItemTakenAttribute(){
        $count=$this->total_diary_taken+$this->total_eraser_taken+$this->total_pen_taken;
        return $count;
    }



}
