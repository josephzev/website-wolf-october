<?php namespace Joseph\Test\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJosephTest extends Migration
{
    public function up()
    {
        Schema::create('joseph_test_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('joseph_test_');
    }
}
