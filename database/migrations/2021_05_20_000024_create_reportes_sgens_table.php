<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesSgensTable extends Migration
{
    public function up()
    {
        Schema::create('reportes_sgens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->date('fecha')->nullable();
            $table->longText('observaciones')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
