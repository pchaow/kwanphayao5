<?php namespace App\Models;

use Vinelab\NeoEloquent\Eloquent\SoftDeletes;

class Bibliography  extends AbstrctIModel {
    use SoftDeletes;
	protected $connection = 'neo4j';
    protected $label = ['Bibliography'];
	protected $fillable = ['call_code', 'short_text','long_text'];

	public function contents(){
        return $this->belongsToMany('App\Models\Content','BIBLIOGRAPHY');
    }

}
