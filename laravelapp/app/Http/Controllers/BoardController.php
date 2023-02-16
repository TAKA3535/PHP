<?php
// 6-31
namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class BoardController extends Controller
{

    // public function index(Request $request)
    // {
    //     $items = Board::all();
    //     return view('board.index', ['items' => $items]);
    // }

    public function add(Request $request)
    {
        return view('board.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Board::$rules);
        $board = new Board;
        $form = $request->all();
        unset($form['_token']);
        $board->fill($form)->save();
        return redirect('/board');
    }

    // 6-42 withを使ってデータベースのアクセス回数を減少させる
    public function index(Request $request)
    {
        $items = Board::with('person')->get();
        return view('board.index', ['items' => $items]);
    }
}
