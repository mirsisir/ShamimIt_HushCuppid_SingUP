<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetaSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_settings', function (Blueprint $table) {
            $table->id();
            $table->text('website_name')->nullable();
            $table->text('background_image')->nullable();
            $table->text('login_image')->nullable();
            $table->text('logo')->nullable();
            $table->text('title')->nullable();
            $table->text('sub_title')->nullable();
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
        Schema::dropIfExists('meta_settings');
    }
}
