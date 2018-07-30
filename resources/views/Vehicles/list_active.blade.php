CAMIONES ACTIVOS <br>

@if(count($activeDeliveries))
    @foreach ($activeDeliveries as $delivery)
        {{ $delivery->vehicle->name }} <br>
    @endforeach
@else
    No hay camiones activos
@endif
