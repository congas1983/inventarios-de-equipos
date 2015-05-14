<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCcostosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ccostos', function(Blueprint $table)
		{
			
            $table->increments('id');
            $table->string('codigo')->unique();  
            $table->integer('area_id')->unsigned();   
            $table->string('nombre');
            $table->string('departamento');
            $table->string('ciudad');
            
			$table->timestamps();
            
            
            $table->foreign('area_id')
                  ->references('id')->on('areas')
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
		Schema::drop('ccostos');
	}

}
