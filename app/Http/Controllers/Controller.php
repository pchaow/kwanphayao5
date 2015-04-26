<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BasesController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BasesController {

	use DispatchesCommands, ValidatesRequests;

}
