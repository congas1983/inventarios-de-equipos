<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empleados', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cedula')->unique();
			$table->string('nombre',50);
			$table->string('telefono',20);
			$table->string('celular',20);
			$table->string('email')->unique();
			$table->integer('ccosto_id')->unsigned();
			$table->timestamps();
			$table->foreign('ccosto_id')
                  ->references('id')->on('ccostos')
                  ->onUpdate('CASCADE')
                  ->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('empleados');
	}

}
