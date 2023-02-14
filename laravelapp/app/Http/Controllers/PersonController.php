<?php
// 6-2
namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        // 全レコード取得
        $items = Person::all();
        return view('person.index', ['items' => $items]);
    }

    // 6-8 /findにGETアクセスしたときの処理　P244
    public function find(Request $request)
    {
        return view('person.find', ['input' => '']);
    }

    // POST送信されたときの処理
    // public function search(Request $request)
    // {
    //     // $item = Person::find($request->input);
    //     // 6-10 nameを検索する
    //     $item = Person::where('name', $request->input)->first();
    //     $param = ['input' => $request->input, 'item' => $item];
    //     return view('person.find', $param);
    // }

    // 6-12 nameEqualを利用
    // public function search(Request $request)
    // {
    //     $item = Person::nameEqual($request->input)->first();
    //     $param = ['input' => $request->input, 'item' => $item];
    //     return view('person.find', $param);
    // }

    // 6-14
    public function search(Request $request)
    {
        $min = $request->input * 1;
        $max = $min + 10;
        $item = Person::ageGreaterThan($min)->ageLessThan($max)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('person.find', $param);
    }

    // 6-20 アクションを追記
    public function add(Request $request)
    {
        return view('person.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Person::$rules);
        // Personインスタンスの作成
        $person = new Person;
        // 値を用意する
        $form = $request->all();
        unset($form['_token']);
        // インスタンスに値を設定して保存
        $person->fill($form)->save();
        return redirect('/person');
    }

    // 6-23　アクションを追記 P262
    public function edit(Request $request)
    {
        $person = Person::find($request->id);
        // Person::findを使ってdパラメータの値のモデルを取得し、
        // これをformという値に設定、edit.blade.phpのフォームのvalueに表示される
        return view('person.edit', ['form' => $person]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = Person::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/person');
    }

    // 6-26 delete及びremoveアクションの追記
    public function delete(Request $request)
    {
        $person = Person::find($request->id);
        return view('person.del', ['form' => $person]);
    }

    public function remove(Request $request)
    {
        Person::find($request->id)->delete();
        return redirect('/person');
    }
}
