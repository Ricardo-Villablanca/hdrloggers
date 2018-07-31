@if(session()->has('message'))
    {{ session()->get('message') }}
@endif
<br>
@include('MonitoringCenter.Elements.list_deliveries_working',['activeDeliveries'=>$activeDeliveries])
<br>
@include('MonitoringCenter.Elements.list_devices_working',['activeDevices'=>$activeDevices])
<br>
@include('MonitoringCenter.Elements.list_devices_not_working',['devicesNotWorking'=>$devicesNotWorking])
<br>
@include('MonitoringCenter.Elements.list_vehicles_working',['activeDeliveries'=>$activeDeliveries])
