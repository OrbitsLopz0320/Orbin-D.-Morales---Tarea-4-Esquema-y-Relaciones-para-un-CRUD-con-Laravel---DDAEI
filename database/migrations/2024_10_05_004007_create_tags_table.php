<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamp('created_at')->nullable(); 
            $table->timestamp('updated_at')->nullable(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('tags');
    }
}