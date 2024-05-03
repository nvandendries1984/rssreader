<?php namespace NielsVanDenDries\Rssreader\Models;

use Model;

class RssSources extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'nielsvandendries_rssreader_source';

    public $rules = [
    ];   
}
