<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 08/07/15
 * Time: 15:52
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class BlogController extends Controller {

    public function index(){

        return view('blog/index');

    }

}