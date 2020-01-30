<?php

/**
 * 自クラスの名前空間をnamespace構文で指定
 */
namespace App\Http\Controllers;

/**
 * 参照するクラスをuse構文で指定
 */
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SampleController extends Controller
{
    /**
     * 引数なしのアクションメソッド
     */
    public function index($id="non", $pass="unknown" ) {
        return <<<EOF
        <html>
        <body>
            <p>Hello world</p>
            <ul>
                <li>id:{$id}</li>
                <li>pass:{$pass}</li>
            </ul>
        </body>
        </html>
        EOF;
    }

    public function view() {
        return view("layout");
    }
}
