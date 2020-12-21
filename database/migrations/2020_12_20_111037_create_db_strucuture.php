<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbStrucuture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('instagram_id', 255);
            $table->string('picture');
            $table->string('name');
            $table->string('full_name');
            $table->string('profile_url');
            $table->text('biography');
            $table->timestamps();
        });

        Schema::create('profile_activity', function (Blueprint $table){
           $table->id();
           $table->integer('profile_id');
           $table->integer('follows');
           $table->integer('followers');
           $table->integer('posts');
           $table->timestamps();
        });

        Schema::create('profile_posts_activity', function (Blueprint $table){
            $table->id();
            $table->integer('profile_id');
            $table->string('instagram_id', 255);
            $table->timestamp('create_date');
            $table->string('link',255);
            $table->string('image_url',255);
            $table->string('video_url',255);
            $table->text('content');
            $table->integer('count_likes');
            $table->integer('count_comments');
            $table->string('location', 255);
            $table->string('type');
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
        Schema::dropIfExists('profiles');
        Schema::dropIfExists('profile_activity');
        Schema::dropIfExists('profile_posts_activity');
    }
}
