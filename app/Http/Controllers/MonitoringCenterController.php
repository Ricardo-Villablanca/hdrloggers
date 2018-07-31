<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Vehicle;
use \App\Device;
use \App\Delivery;

class MonitoringCenterController extends Controller
{
    // VIAJES
    // public function getActiveDeliveries()
    // {
    //     $activeDeliveries = \App\Delivery::active()->get();
    //
    //     return view('Deliveries.list_working')->with([
    // 		'activeDeliveries'=>$activeDeliveries
    // 	]);
    // }

    //DISPOSITIVOS
    // public function listNotWorking()
    // {
    //     $devices = \App\Device::notWorking()->get();
    //
    //     return view('Devices.list_not_working')->with(['devices'=>$devices]);
    // }
    //
    // public function listWorking()
    // {
    //     $devices = \App\Device::working()->get();
    //
    //     return view('Devices.list__working')->with(['devices'=>$devices]);
    // }

    // VEHICULOS
    // public function getActiveVehicles()
    // {
    //     $activeDeliveries = \App\Delivery::working()->get();
    //
    //     return view('Vehicles.list_working')->with([
    //         'activeDeliveries'=>$activeDeliveries
    //     ]);
    // }

    public function index()
    {
        $activeDeliveries = \App\Delivery::working()->get();
        $devicesNotWorking = \App\Device::notWorking()->get();
        $devices = \App\Device::working()->get();

        return view('MonitoringCenter.index')->with([
            'activeDeliveries'=>$activeDeliveries,
            'devicesNotWorking'=>$devicesNotWorking,
            'activeDevices'=>$devices
        ]);
    }
}
