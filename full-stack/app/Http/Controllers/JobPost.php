<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

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
        $sites = json_decode(Redis::get('sites'));
        $sites[] = [
            'site' => $request->get('URL'),
            'css3' => $request->get('CSS3'),
        ];
        
        Redis::set('sites', json_encode($sites));

        return response('', 200);
    }
}
