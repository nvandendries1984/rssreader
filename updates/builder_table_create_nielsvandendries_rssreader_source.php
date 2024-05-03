<?php namespace NielsVanDenDries\Rssreader\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesRssreaderSource extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_rssreader_source', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->text('source_url');
            $table->smallInteger('max_items');
            $table->boolean('is_enabled')->default(false);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_rssreader_source');
    }
}
