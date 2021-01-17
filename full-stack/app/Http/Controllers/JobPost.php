<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class JobPost extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        throw new Exception('test exception', 205);
        return response('test trouble');
    }
}
