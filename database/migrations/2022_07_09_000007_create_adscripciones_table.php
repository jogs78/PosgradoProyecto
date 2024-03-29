<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdscripcionesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'adscripciones';

    /**
     * Run the migrations.
     * @table adscripciones
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('pe_id')->unsigned();
            $table->integer('docente_id')->unsigned();

            $table->index(["pe_id"], 'fk_adscripciones_pes1_idx');

            $table->index(["docente_id"], 'fk_adscripciones_docentes1_idx');


            $table->foreign('docente_id', 'fk_adscripciones_docentes1_idx')
                ->references('id')->on('docentes')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('pe_id', 'fk_adscripciones_pes1_idx')
                ->references('id')->on('pes')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
