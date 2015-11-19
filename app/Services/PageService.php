<?php namespace App\Services;

/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */

use App\Models\Page;

class PageService extends BaseService
{

    public function all(){
        return Page::all();
    }

    public function create()
    {
        return new Page();
    }

    public function store(array $input)
    {
        $page = Page::create($input);
        $page->save();

        return $page;
    }

    public function getById($id)
    {
        $content = Page::find($id);
        return $content;
    }

    public function save($id, array $input)
    {
        /* @var Page $page */
        $page = Page::find($id);
        $page->fill($input);
        $page->save();

        return $page;
    }

    public function delete($id)
    {
        return [Page::find($id)->delete()];
    }


}