@component('mail::message')
# {{ $senderName }} has invited you to join Pendu.

You'll get $15 as reward.

@component('mail::button', ['url' => route('dropper.register', ['referral'=> $referral->token])])
    Sign up now
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
