<?php
// ファイルがある場所のパスを示すもの
namespace App\Models;

// データベースとモデルを対応づける機能
// Factory=Laravel8でテストデータを入れる際に使用
// 全てのEloquentモデルは、Illuminate\Database\Eloquent\Modelを拡張する必要あり
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // use HasFactory;
    // Eloquentモデルでは、自動でidが割り振られる為(自動採番)
    // $guardedを用いて、idを「値を用意しておかない項目」に指定＝書き換えないように保護する
    // idの配列は、用意しないように守る
    protected $guarded = array('id');
}
