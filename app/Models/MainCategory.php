<?php namespace App\Models;

/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 1/31/2015 AD
 * Time: 9:22 AM
 */
class MainCategory extends AbstrctIModel
{

    protected $connection = 'neo4j';

    protected $label = ['MainCategory', 'Classification'];

    protected $fillable = ['name', 'description'];

    public function categories()
    {
        return $this->hasMany("Category", "HAS_CATEGORY");
    }

}