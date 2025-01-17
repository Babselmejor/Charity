<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Language')->default(0);
            $table->longtext('SiteTitle');
            $table->longtext('Name');
            $table->string('Location');
            $table->longtext('Googlemap');
            $table->string('PhoneNumber');
            $table->string('Email');
            $table->string('LogoPicture');
            $table->string('HomePicture');
            $table->string('AboutPicture');
            $table->longtext('MetaDescription');
            $table->longtext('MetaKeyWords');
            $table->string('FaviconOne');
            $table->string('FaviconTwo');
            $table->string('FaviconThree');
            $table->longtext('about_en');
            $table->longtext('title_home_en');
            $table->longtext('sub_title_home_en');
            $table->longtext('title_about_en');
            $table->longtext('content_about_en');
            $table->longtext('content_blog_en');
            $table->longtext('content_feature_en');
            $table->longtext('content_feature_two_en');
            $table->longtext('content_feature_three_en');
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
        Schema::dropIfExists('settings');
    }
}
