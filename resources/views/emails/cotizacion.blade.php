@component('mail::message')
# Prueba developer andres meza

Persona que contacta: <strong>{{ $datos['nombre'] }}</strong>
<br>
email que contacta: <strong>{{ $datos['email'] }}</strong>
<br>
celular que contacta: <strong>{{ $datos['celular'] }}</strong>
<br>
lugar contacta: <strong>{{ $datos['departamento'] }} ciudad {{ $datos['ciudad'] }} </strong>
<p>mensaje:</p>
@component('mail::panel')
    Deseo una cotizacion del vahiculo modelo {{ $datos['modelo'] }}
@endcomponent

Gracias,<br>

@endcomponent
