<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// 4-21 p141
// FormRequestクラスは、リクエストがコントローラーに渡る前に
// バリデーションをする機能が入ったクラス
class HelloRequest extends FormRequest
{
    //authorize ＝ 承認する
    //このファイル(このフォームリクエスト)の使用許可があるかどうか判定
    // public function authorize()
    // {
        //pathメソッド → URIを取得する 
        //URI → URL(web上の住所)とURN(web上の名前)の総称
        //URIが文字列helloと等しいか判定 
    //     if ($this->path() ==  'hello') {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    // // 適用されるバリデーションの検証ルールを設定
    // public function rules()
    // {
    //     return [
    //         'name' => 'required',
    //         'mail' => 'email',
    //         'age' => 'numeric|between:0,150',
    //     ];
    // }

    // // 4-23 メッセージのカスタマイズ
    // public function messages()
    // {
    //     return [
    //         'name.required' => '名前は必ず入力して下さい。',
    //         'mail.email'  => 'メールアドレスが必要です。',
    //         'age.numeric' => '年齢を整数で記入下さい。',
    //         'age.between' => '年齢は0～150の間で入力下さい。',
    //     ];
    // }

    // 4-30
    public function authorize()
    {
        //rules = 約束、ルール
        // バリデーションで検証するルールをここで設定
        if ($this->path() ==  'hello') {
            return true;
        } else {
            return false;
        }
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|hello',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力して下さい。',
            'mail.email'  => 'メールアドレスが必要です。',
            'age.numeric' => '年齢を整数で記入下さい。',
            'age.hello' => 'Hello! 入力は偶数のみ受け付けます。',
        ];
    }
}
