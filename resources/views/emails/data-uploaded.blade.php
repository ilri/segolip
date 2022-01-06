@component('mail::message')
# Data Uploaded

Your data for, **Order Number:** {{ $order->order_number }} is now available for download.

Regards,<br>
{{ config('app.name') }}
@endcomponent