@component('mail::message')
# New Get in Touch Request

**You have received a new contact request from your website!**

## Details

- **Email:** [{{ $data->email_address }}](mailto:{{ $data->email_address }})

@component('mail::button', ['url' => 'mailto:' . $data->email_address])
Reply to Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
