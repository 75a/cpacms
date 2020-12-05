<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGeneratorFieldsToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string("connecting");
            $table->string("connected");
            $table->string("secondstep");
            $table->string("secondstepfinished");
            $table->string("thirdstep");
            $table->string("thirdsteperror");
            $table->string("thirdstepwaiting");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn("connecting");
            $table->dropColumn("connected");
            $table->dropColumn("secondstep");
            $table->dropColumn("secondstepfinished");
            $table->dropColumn("thirdstep");
            $table->dropColumn("thirdsteperror");
            $table->dropColumn("thirdstepwaiting");
        });
    }
}
