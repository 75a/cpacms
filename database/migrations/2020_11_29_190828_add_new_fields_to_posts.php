<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('metatitle');
            $table->text('metadescription');
            $table->string('metaauthor');
            $table->text('logo_text');
            $table->text('logo_src');
            $table->text('menu_link_text');
            $table->text('menu_link_product_name');
            $table->text('menu_link_product_url');

            $table->text('featured_header')->nullable();
            $table->text('featured_description')->nullable();
            $table->text('featured_image_src')->nullable();
            $table->text('featured_image_alt')->nullable();

            $table->text('article_header')->nullable();
            $table->text('article_text')->nullable();

            $table->text('generator_header')->nullable();
            $table->text('inputs')->nullable();

            $table->text('call_to_action_header')->nullable();
            $table->string('call_image1_src')->nullable();
            $table->string('call_image1_alt')->nullable();
            $table->string('call_image2_src')->nullable();
            $table->string('call_image2_alt')->nullable();
            $table->string('call_image3_src')->nullable();
            $table->string('call_image3_alt')->nullable();
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
            $table->dropColumn('metatitle');
            $table->dropColumn('metadescription');
            $table->dropColumn('metaauthor');
            $table->dropColumn('logo_text');
            $table->dropColumn('logo_src');
            $table->dropColumn('menu_link_text');
            $table->dropColumn('menu_link_product_name');
            $table->dropColumn('menu_link_product_url');
            $table->dropColumn('featured_header');
            $table->dropColumn('featured_description');
            $table->dropColumn('featured_image_src');
            $table->dropColumn('featured_image_alt');
            $table->dropColumn('article_header');
            $table->dropColumn('article_text');
            $table->dropColumn('generator_header');
            $table->dropColumn('inputs');
            $table->dropColumn('call_to_action_header');
            $table->dropColumn('call_image1_src');
            $table->dropColumn('call_image1_alt');
            $table->dropColumn('call_image2_src');
            $table->dropColumn('call_image2_alt');
            $table->dropColumn('call_image3_src');
            $table->dropColumn('call_image3_alt');
        });
    }
}
