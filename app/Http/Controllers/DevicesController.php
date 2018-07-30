<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevicesController extends Controller
{
    //

    public function getActiveDevices()
    {
        $activeDevices = \App\Device::active()->get();

        return view('Devices.list_active')->with(['activeDevices' => $activeDevices]);
    }
}
