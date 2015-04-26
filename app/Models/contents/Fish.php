<?php namespace App\Models\contents;

class Fish extends Content {

    protected $label = ['Content','Fish'];

    protected $fillable = ['title', 'content','fish_name','fish_science_name','fish_area','remark'];

}