@component('mail::message')
# Introduction
## OrderID #{{ $order->code }} 

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
