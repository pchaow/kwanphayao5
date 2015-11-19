<?php namespace App\Models;

use Vinelab\NeoEloquent\Eloquent\SoftDeletes;

class Page extends AbstrctIModel {
    use SoftDeletes;
	protected $connection = 'neo4j';
    protected $label = ['Page'];
	protected $fillable = ['title', 'content'];


}
