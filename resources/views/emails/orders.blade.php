@component('mail::message')
# Introduction

## Hi {{ $mailData['name'] }},

Thanks for contacting us.
<br>
Expect a call from us as soon as possible


{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
