<?php namespace App\Models;
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 1/31/2015 AD
 * Time: 9:22 AM
 */

class Category extends AbstrctIModel {

    protected $connection = 'neo4j';

    protected $label = ['Category','Classification'];

    protected $guarded = ['parent'];

    protected $fillable = ['name','description','content_type'];

    public function parent(){
        return $this->belongsTo('MainCategory','HAS_CATEGORY');
    }

    public function contents(){
        return $this->hasMany("Content","HAS");
    }


}