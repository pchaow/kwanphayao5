<?php namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Page;
use App\Services\ContentEvalService;
use Illuminate\Http\Request;

class HomeController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function __construct(ContentEvalService $contentEvalService)
    {
        $this->contentEvalService = $contentEvalService;
    }

    public function index()
    {
//        $contents = Content::with([])->orderBy('updated_at', 'desc')->take(5)->get();

        $contents = [
            Content::find(9),
            Content::find(60),
            Content::find(76),
            Content::find(26),
            Content::find(58)
        ];
        return view('home.index', [
            'contents' => $contents
        ]);
    }

    public function login()
    {
        return view('home.login');
    }

    public function getLogout()
    {
        \Auth::logout();
        return \Redirect::to('/');
    }

    public function postLogin()
    {
        $email = \Input::get('email');
        $password = \Input::get('password');

        $credentials = [
            'email' => $email,
            'password' => $password
        ];

        if (\Auth::attempt($credentials)) {
            return \Redirect::to("/");
        } else {
            return view('home.login')->with('loginError', 'User e-mail or password is invalid');
        }
    }

    public function getContent($id)
    {
        $content = Content::find($id);

        $category = $content->category;

        $relateContent = $category->contents()->get()->random(5);

        return view('home.content')
            ->with('content', $content)
            ->with('relateContent', $relateContent);
    }

    public function getContents()
    {
        $contents = Content::orderBy('updated_at', 'desc')->paginate(15);

        return view('home.contents')->with('contents', $contents);
    }

    public function getSearch()
    {

        $keyword = \Input::get('keyword');

        $contents = Content::where('title', '=~', ".*$keyword.*")->orWhere('content', '=~', ".*$keyword.*")->orderBy('updated_at', 'desc')->paginate(15);
        $contents->appends(['keyword' => $keyword]);
        return view('home.contents')
            ->with('contents', $contents)
            ->with('keyword', $keyword);
    }

    public function getCategory($name)
    {
        $cat_ids = [];
        $category = Category::with('children')->where('name', '=', $name)->first();
        $cat_ids[] = $category->id;

        foreach ($category->children as $child) {
            $cat_ids[] = $child->id;
        }


        $contents = Content::whereHas('category', function ($q) use ($cat_ids) {
            $q->whereIn('id', $cat_ids);
        })
            ->orderBy('updated_at', 'desc')->paginate(15);

        return view('home.contents')
            ->with('contents', $contents)
            ->with('category_name', $name);
    }

    public function getStaticPage($title)
    {

        $content = Page::where('title', '=', $title)->first();

        return view('home.staticpage')->with('content', $content);
    }


}
