SERVICIOS ACTIVOS <br>

@if(count($activeDeliveries))
    @foreach ($activeDeliveries as $delivery)
        {{ $delivery->service_name }} <br>
    @endforeach
@else
    No hay viajes activos
@endif
