<?php
// プログラムが使うクラスの場所を表示
// vendor配下のlaravelディレクトリにcomposer.jsonがあって、そこのオートロードの設定で読み込む
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// StudyTaskテーブルでマイグレーションの範囲を広げる
class CreateStudyTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // マイグレーションを実行した際の処理
    public function up()
    {
        // Schema(構造)のcreateメソッドを実行
        Schema::create('study_task', function (Blueprint $table) {
            // idを増加させる
            $table->increments('id');
            $table->string('comment');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * 処理の必要がなし（空を返す）
     * @return void
     */

    //  up()の処理を取り消す処理
    public function down()
    {
        // 指定したテーブル(study_task)があれば削除して、なければ何もしない（エラーを返さない）というメソッドです。
        Schema::dropIfExists('study_task');
    }
}
