@component('mail::message')
# You have submitted a request to reset your password.

Your OTP is: <b>#{{$otp}}</b>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
