<?php
// 6-30
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{

    protected $guarded = array('id');

    public static $rules = array(
        'person_id' => 'required',
        'title' => 'required',
        'message' => 'required'
    );

    // public function getData()
    // {
    //     return $this->id . ': ' . $this->title;
    // }


    // 6-39 belongs To結合 P283
    public function person()
    {
        return $this->belongsTo('App\Models\Person');
    }

    // 既にあるメソッドを修正
    public function getData()
    {
        return $this->id . ': ' . $this->title . ' ('
            . $this->person->name . ')';
    }
}
