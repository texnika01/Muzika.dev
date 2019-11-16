<?php

namespace App\Http\Controllers\Backend\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Jenssegers\Agent\Agent;


class AgentController extends Controller
{
    public function getAgent()
    {
        $agent = new Agent();
        // get lang
        $languages = $agent->languages();
        // Get device 
        $device = $agent->device();
        //Get the operating system. (Ubuntu, Windows, OS X, ...)
        $platform = $agent->platform();
        //Get the browser name. (Chrome, IE, Safari, Firefox, ...)
        $browser = $agent->browser();
        
        return view('backend.agent.index',compact('data',$data));

    }
}
