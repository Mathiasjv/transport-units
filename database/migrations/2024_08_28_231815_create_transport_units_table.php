<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('transport_units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['trailer', 'truck']);
            $table->timestamps();
        });
    }
    
};
