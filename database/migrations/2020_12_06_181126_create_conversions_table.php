<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConversionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("offer_id");
            $table->string("offer_name");
            $table->string("aff_sub")->nullable();
            $table->string("aff_sub2")->nullable();
            $table->string("aff_sub3")->nullable();
            $table->string("aff_sub4")->nullable();
            $table->string("aff_sub5")->nullable();
            $table->string("session_ip");
            $table->float("payout");
            $table->unsignedBigInteger("post_id");
            $table->timestamps();

            $table->foreign('post_id')
                ->references('id')
                ->on('posts')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conversions');
    }
}
