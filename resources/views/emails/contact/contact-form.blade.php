{{-- To generate this template we run the following command: php artisan make:mail NAMEofCLASS --markdwon==PATH.TO.THE-TEMAPLATE --}}

@component('mail::message')
# Introduction

The body of your message.

# Thanks for you message
<strong>Name</strong> {{$data['name']}}
<strong>E-mail</strong> {{$data['email']}}<br />
<strong>Message</strong><br />
{{$data['message']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}

@endcomponent
