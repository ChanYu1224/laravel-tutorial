<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function __invoke(){
        return <<<EOF
        <html>
        <head>
        <title>Hello</title>
        <style>
        body { font-size:16pt; color:#999; }
        h1 { font-size:30pt; text-align:right; color:#eee; margin: -15px 0px 0px 0px; }
        </style>
        </head>
        <body>
            <h1>Single Action</h1>
            <p>これは、シングルアクションコントローラです。</p>
        </body>
        </html>
        EOF;
    }

    public function index(Request $request, Response $response){
        return <<<EOF
        <html>
        <head>
        <title>Hello</title>
        <style>
        body { font-size:16pt; color:#999; }
        h1 { font-size:30pt; text-align:right; color:#eee; margin: -15px 0px 0px 0px; }
        </style>
        </head>
        <body>
            <h1>Hello</h1>
            <h3>Request</h3>
            <pre>{$request}</pre>
            <h3>Respose</h3>
            <pre>{$response}</pre>
        </body>
        </html>
        EOF;

        $response->setContent($html);
        return $response;
    }
}
