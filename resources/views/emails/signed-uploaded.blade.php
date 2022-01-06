@component('mail::message')
# Signed Service Specification Uploaded

A Signed Service Specification for the order, **Order Number:** {{ $order->order_number }} has been uploaded.

Regards,<br>
{{ config('app.name') }}
@endcomponent