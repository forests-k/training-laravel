<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


global $start, $head, $body, $end;
$start = "<html>";
$head = "<head></head>";
$body = "<body><p>text</p></body>";
$end = "</html>";

class MultiHandlerController extends Controller
{

    public function first() {
        global $start, $head, $body, $end;
        $body = str_replace("text", "first", "<body><p>text</p></body>");
        $html = $start.$head.$body.$end;
        return $html;
    }

    public function second($path = "unknown") {
        $start = "<html>";
        $head = "<head></head>";
        $body = str_replace("text", $path, "<body><p>text</p></body>");
        $end = "</html>";
        $html = $start.$head.$body.$end;
        
        return $html;

    }
}