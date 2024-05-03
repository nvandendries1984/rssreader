<?php namespace NielsVanDenDries\Rssreader\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesRssreaderSnippets extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_rssreader_snippets', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->boolean('is_publisched')->default(false);
            $table->text('code');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_rssreader_snippets');
    }
}
