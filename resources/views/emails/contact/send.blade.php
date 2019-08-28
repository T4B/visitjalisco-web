@component('mail::message')

Has recibido un mensaje a través del sitio VisitJalisco

**Nombre:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
**Teléfono:** {{ $data['phone'] }}  
**Mensaje:** {{ $data['message'] }}  

Thanks,<br>
{{ config('app.name') }}
@endcomponent
