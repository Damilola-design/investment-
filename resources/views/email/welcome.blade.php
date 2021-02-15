@component('mail::message')
# Welcome to Primose path capital

Hi {{ $user->username }}, Welcome to the new world of real estate investment,
take your time to browse through all our available investment plan on the investment section in your dashboard,
we are dedicated to make your life easier and to help you achieve maximum returns on your investment.
If you have any questions or issues, please reach out to our help desk.
we'd love to hear your feedback! Welcome to Landvest! Best regards, Primosepathcapital



Thanks,<br>
{{ config('app.name') }}
@endcomponent
