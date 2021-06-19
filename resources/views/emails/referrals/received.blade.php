@component('mail::message')
# {{ $sender->name }} has invited you to join Pendu.

You'll get $15 on your first payment.

@component('mail::button', ['url' => route('register', ['referral'=> $referral->token])])
    Sign up now
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
