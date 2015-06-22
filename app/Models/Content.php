<?php namespace App\Models;

use Vinelab\NeoEloquent\Eloquent\SoftDeletes;

class Content extends AbstrctIModel {
    use SoftDeletes;
	protected $connection = 'neo4j';
    protected $label = ['Content'];
	protected $fillable = ['title', 'content'];

	public function category() {
		return $this->belongsTo("App\Models\Category","HAS");
	}

    public function delete(){
        /* @var Category $category */
        $category = $this->category()->first();
       // $category->contents()->detach($this->id);
        return parent::delete();
    }

}
