<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

global $start, $head, $body, $end;
$start = "<html>";
$head = <<<EOF
<head>
  <style>
    body {
      font-size: 16px;
      color: #999
    }
  </style>
</head>
EOF;
$body = "<body><pre>request</pre><pre>response</pre></body>";
$end = "</html>";

class RequestController extends Controller
{

    function index(Request $request, Response $response) {
        global $start, $head, $body, $end;
        $body = str_replace("request", $request, $body);
        $body = str_replace("response", $response, $body);
        $html = $start.$head.$body.$end;
        return $html;
    }
}