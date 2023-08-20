<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSongsTable extends Migration
{
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->longText('image');
            $table->text('title');
            $table->text('author');
            $table->text('album');
            $table->date('add_time');
            $table->time('duration');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('songs');
    }
}