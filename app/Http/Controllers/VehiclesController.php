<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Vehicle;

class VehiclesController extends Controller
{
    //
    public function store()
    {


    }

    public function fetch()
    {
    	$vehicles = \App\Vehicle::all();

    	return view('Vehicles.index')->with(['vehicles'=>$vehicles]);
    }

    public function getActiveVehicles()
    {
        $activeDeliveries = \App\Delivery::active()->get();

        return view('Vehicles.list_active')->with([
    		'activeDeliveries'=>$activeDeliveries
    	]);
    }
}
