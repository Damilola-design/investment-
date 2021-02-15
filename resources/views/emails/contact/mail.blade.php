@component('mail::message')
<b>Email</b> {{ $data['email'] }}
<b>Subject</b> {{ $data['subject'] }}
<b>Message</b> {{ $data['message'] }}

@component('mail::button', ['url' => 'mailto:'.$data['email']])
Reply to {{ $data['email'] }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
