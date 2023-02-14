<?php
// 6-1 P239
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// 6-15
use Illuminate\Database\Eloquent\Builder;
// 6-17
use App\Scopes\ScopePerson;
// class Person extends Model
// {
//    // 6-5 id,name,mailを文字列にまとめて返す
//    public function getData()
//    {
//       return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
//    }

//    // 6-11 nameをスコープにする
//    public function scopeNameEqual($query, $str)
//    {
//       // nameの値が$strであるbuilderインスタンスが返される
//       return $query->where('name', $str);
//    }

//    // 6-13　スコープの組み合わせ P250
//    public function scopeAgeGreaterThan($query, $n)
//    {
//       // ageの値が引数の値と等しいかもっと大きいものに絞り込むもの
//       return $query->where('age', '>=', $n);
//    }

//    public function scopeAgeLessThan($query, $n)
//    {
//       // ageの値が引数と等しいかもっと小さいものを絞り込む
//       return $query->where('age', '<=', $n);
//    }

//    // 6-15 グローバルスコープを作成
//    // protected static function boot()
//    // {
//    //    parent::boot();

//    //    static::addGlobalScope('age', function (Builder $builder) {
//    //       // /personにアクセスすると25才以上のレコード取得
//    //       $builder->where('age', '>', 25);
//    //    });
//    // }

//    // 6-17
//    protected static function boot()
//    {
//       parent::boot();
//       static::addGlobalScope(new ScopePerson);
//    }
// }

// 6-18
class Person extends Model
{
   protected $guarded = array('id');
   public $timestamps = false;

   public static $rules = array(
      'name' => 'required',
      'mail' => 'email',
      'age' => 'integer|min:0|max:150'
   );

   // getDataは残しておく
   public function getData()
   {
      return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
   }

   // 6-35 has one結合 P278
   // public function board()
   // {
   //    return $this->hasOne('App\Models\Board');
   // }

// 6-37 has many結合
   public function boards()
   {
      return $this->hasMany('App\Models\Board');
   }
}
