@component('mail::message')
# Inquiry Message

**Name:** {{ $inquiry->name }}
**Email:** {{ $inquiry->email }}
**Email:** {{ $inquiry->subject }}
**Message:** {{ $inquiry->message }}

@endcomponent