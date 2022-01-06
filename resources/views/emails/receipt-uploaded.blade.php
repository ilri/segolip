@component('mail::message')
# Receipt Uploaded

The Receipt of your order, **Order Number:** {{ $order->order_number }} has been uploaded. We were happy to serve you.

Regards,<br>
{{ config('app.name') }}
@endcomponent