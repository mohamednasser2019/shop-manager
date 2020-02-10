@component('mail::message')
# Introduction

Dear \  {{$userName}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
