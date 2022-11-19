<?php
// ファイルがある場所のパス
namespace App\Http\Controllers;

// 使用するモデルの宣言
use App\Task;
// プログラムが使うクラスの場所を表示
use Illuminate\Http\Request;
use App\Http\Requests\BoardRequest;

// Taskコントローラーでマイグレーションの範囲を広げる
class TaskController extends Controller

{
    // 全データ画面表示(Read)※メゾットインジェクション
    public function index(Request $request)
    {
        // DBデータを抽出し、$itemsに格納
        $items = 
    }
    //
}
