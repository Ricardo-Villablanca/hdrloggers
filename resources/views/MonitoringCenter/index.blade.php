@isset($current_delivery )
    <h1 style="text-align:center">{{ $current_delivery->service_name }}</h1>
    <h3 style="text-align:center; color: #777">
        Camion: {{ $current_delivery->vehicle->name }} |
        Dispositivo:  {{ $current_delivery->device->name }}
    </h3>
@endisset


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

    @isset($records)
        @isset($current_delivery)

            <div style="text-align:center">
                <h2 style="text-align:center">DATOS PARA ESTE SERVICIO </h2>

                @include('MonitoringCenter.Elements.show_dash',['records'=>$records])
            </div>
        @endisset
    @endisset
