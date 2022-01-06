@component('mail::message')
# Order Placed

An order, **Order Number:** {{ $order->order_number }} has been placed.

# Placed by:
**Researcher:** {{ $order->researcher }}
**Department:** {{ $order->department }}
**Institution:** {{ $order->institution }}
**Country:** {{ $order->country }}
**Email:** {{ $order->email }}
**Phone Number:** {{ $order->phone }}

Regards,<br>
{{ config('app.name') }}
@endcomponent