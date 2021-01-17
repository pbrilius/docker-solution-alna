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
            'site' => $request->input('0')['value'],
            'css3' => $request->input(1)['value'],
        ];
        
        Redis::set('sites', json_encode($sites));

        dd(Redis::get('sites'));

        return response('', 200);
    }
}
