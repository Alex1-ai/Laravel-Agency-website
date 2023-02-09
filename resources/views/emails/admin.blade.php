@component('mail::message')
# Introduction

Someone Just requested your assistance for project .
<br>
IT software engineer

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

<h1>Customer Info: </h1>
    <p>Name: {{ $mailData['name'] }}</p>
    <p>Email: {{ $mailData['email'] }}</p>
    <p>Phone: {{ $mailData['phone'] }}</p>
    <p>Description: {{ $mailData['description'] }}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
