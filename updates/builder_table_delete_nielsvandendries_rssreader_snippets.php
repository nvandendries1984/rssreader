<?php namespace NielsVanDenDries\Rssreader\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteNielsvandendriesRssreaderSnippets extends Migration
{
    public function up()
    {
        Schema::dropIfExists('nielsvandendries_rssreader_snippets');
    }
    
    public function down()
    {
        Schema::create('nielsvandendries_rssreader_snippets', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->boolean('is_publisched')->default(0);
            $table->text('code');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
