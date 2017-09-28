<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id');
            $table->string('reference_table');
            $table->string('source');
            $table->string('post_id');
            $table->string('type');
            $table->string('link');
            $table->string('caption');
            $table->dateTime('created_time');
            $table->text('payload')->nullable();
            $table->timestamps();

            $table->index(['owner_id','reference_table','source','type','created_time']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_posts');
    }
}
