<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thread_votes', function (Blueprint $table) {
            $table->id();
            $table->boolean('isUpvote');
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
        Schema::dropIfExists('thread_votes');
    }
}
