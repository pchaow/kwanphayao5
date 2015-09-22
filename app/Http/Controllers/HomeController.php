<?php namespace App\Http\Controllers;

use App\Models\Content;
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

    public function __construct(ContentEvalService $contentEvalService){
        $this->contentEvalService = $contentEvalService;
    }

    public function index()
    {
        $contents = Content::with([])->orderBy('created_at', 'desc')->take(5)->get();
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

        $eval = $this->contentEvalService->all($id);



        return view('home.content')->with('content',$content)
            ->with('eval',$eval);
    }

    public function getContents()
    {
        $contents = Content::orderBy('updated_at','desc')->paginate(15);

        return view('home.contents')->with('contents',$contents);
    }


}
