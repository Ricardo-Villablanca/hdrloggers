<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Vehicle;
use \App\Device;

class DeliveriesController extends Controller
{
    //
/*$ndel = new App\Delivery;
$ndel->pstart =  $request->pstart;
$ndel->pend =  $request->pend;
$ndel->dstart =  $request->dstart;
$ndel->dend =  $request->dend;
$ndel->Nvehicle =  $request->Nvehicle;
$ndel->Ndisp =  $request->Ndisp;

if($record->save())
  return "recibido!";
else
  return "no recibido";
*/
    public function fetch()
    {
    	$deliveries = \App\Delivery::all();

    	return view('Deliveries.index')->with(['deliveries'=>$deliveries]);
    }

    public function store(Request $request)
    {
    	$ndel = new \App\Delivery;
    	$ndel->start_loc =  $request->start_loc;
    	$ndel->end_loc =  $request->end_loc;
    	$ndel->start_date =  $request->start_date;
    	$ndel->end_date =  $request->end_date;
    	$ndel->vehicle_id =  $request->vehicle_id;
    	$ndel->device_id =  $request->device_id;

    	if($ndel->save())
    		return "recibido!";
    	else
    		return "no recibido";
    }


    public function form()
    {
    	$vehicles = \App\Vehicle::all();
    	$devices = \App\Device::all();

    	return view('Deliveries.add')->with([
    		'vehicles'=>$vehicles,
    		'devices'=>$devices,
    	]);
    }

    public function getActiveDeliveries()
    {
        $activeDeliveries = \App\Delivery::active()->get();

        return view('Deliveries.list_active')->with([
    		'activeDeliveries'=>$activeDeliveries
    	]);
    }
}
