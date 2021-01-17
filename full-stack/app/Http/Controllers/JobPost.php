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
        $site = [
            'site' => $request->input('0')['value'],
            'css3' => $request->input(1)['value'],
        ];
        $sites[] = $site;
        
        Redis::set('sites', json_encode($sites));

        return response('Data inserted: ' . json_encode($site), 200);
    }
}
