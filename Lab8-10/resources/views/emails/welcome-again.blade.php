@component('mail::message')
# Introduction

Thanks for signing up

@component('mail::button', ['url' => 'https://laracasts.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
Some other ting to put man
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
