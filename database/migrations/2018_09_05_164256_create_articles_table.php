<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('作者');
            $table->unsignedInteger('category_id')->nullable()->comment('文章所属分类');
            $table->string('title')->nullable()->comment('文章标题');
            $table->string('cover')->nullable()->comment('文章封面');
            $table->text('content')->nullable()->comment('文章内容');
            $table->tinyInteger('status')->default(0)->comment('文章状态 0 草稿  1  正常发布');
            $table->softDeletes();
            $table->unsignedInteger('stars')->default(0)->comment('文章点赞数');
            $table->unsignedInteger('views')->default(0)->comment('文章阅读数');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
