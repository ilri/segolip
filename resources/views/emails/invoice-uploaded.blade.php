@component('mail::message')
# Invoice Uploaded

The invoice of your order, **Order Number:** {{ $order->order_number }} has been uploaded.

Regards,<br>
{{ config('app.name') }}
@endcomponent