
@if(count($activeDevices))
    @foreach ($activeDevices as $device)
        {{ $device->name }} <br>
    @endforeach
@else
    No hay dispositivos activos
@endif
