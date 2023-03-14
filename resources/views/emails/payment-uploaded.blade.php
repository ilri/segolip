@component('mail::message')
# Proof of Payment Uploaded

Your payment for, **Order Number:** {{ $order->order_number }} has been received. Thank you for choosing SegoliP as your service provider.

Regards,<br>
{{ config('app.name') }}
@endcomponent
