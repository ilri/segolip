@component('mail::message')
# Service Specification Uploaded

The Service Specification of your order, **Order Number:** {{ $order->order_number }} has been uploaded.

Regards,<br>
{{ config('app.name') }}
@endcomponent