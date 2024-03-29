<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'estudiantes';

    /**
     * Run the migrations.
     * @table estudiantes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre', 100);
            $table->integer('matricula');
            $table->string('correo', 45)->nullable()->default(null);
            $table->string('password', 100)->nullable()->default(null);
            $table->integer('pe_id')->unsigned();
            $table->integer('periodo_id')->unsigned()->nullable()->default(null);

            $table->index(["pe_id"], 'fk_estudiantes_pes1_idx');

            $table->index(["periodo_id"], 'fk_estudiantes_periodos1_idx');


            $table->foreign('periodo_id', 'fk_estudiantes_periodos1_idx')
                ->references('id')->on('periodos')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('pe_id', 'fk_estudiantes_pes1_idx')
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
