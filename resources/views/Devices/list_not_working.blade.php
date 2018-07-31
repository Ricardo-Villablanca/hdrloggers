DISPOSITIVOS PARA DAR DE ALTA <br>
@if(count($devices))
    @foreach ($devices as $device)
        <a href="{{ route('fill-delivery-data',$device->id) }}"> {{ $device->name }} </a> <br>
    @endforeach
@else
    No hay dispositivos para dar de alta
@endif
