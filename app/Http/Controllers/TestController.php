<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 07/07/15
 * Time: 22:34
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class TestController extends Controller {

    public function index($nome){
//        $nome = "Adriano Bradbury";
        return view("test/index",array('nome'=>strtoupper($nome)));
    }

    public function notas(){
        $notaLists = array(
                            0 => 'Notação 1',
                            1 => 'Notação 2',
                            2 => 'Notação 3',
                            3 => 'Notação 4',
                            4 => 'Notação 5'
                          );
        return view("test/notas",compact('notaLists'));
    }

}