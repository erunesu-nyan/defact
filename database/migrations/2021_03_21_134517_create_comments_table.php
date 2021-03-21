<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')
			    ->references('id')
				->on('users')
				->onDelete('cascade')
				->onUpdate('cascade');
            $table->bigInteger('thread_id')->unsigned();
            $table->foreign('thread_id')
                ->references('id')
                ->on('threads')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->bigInteger('parent_comment_id')->unsigned()->nullable();
            $table->foreign('parent_comment_id')
			    ->references('id')
				->on('comments')
				->onDelete('cascade')
				->onUpdate('cascade');
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
        Schema::dropIfExists('comments');
    }
}
