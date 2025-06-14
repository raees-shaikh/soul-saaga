@component('mail::message')
# New Message Notification

**You have received a new message from your website!**

## Details

- **First Name:** {{ $data->first_name }}
- **Last Name:** {{ $data->last_name }}
- **Email:** [{{ $data->email }}](mailto:{{ $data->email }})
- **Phone No.:** {{ $data->phone }}
- **Area Of Interest:** {{ $data->area_of_interest }}
- **Date:** {{ $data->date }}
- **Message:** {{ $data->message }}

@component('mail::button', ['url' => 'mailto:' . $data->email])
Reply to {{ $data->first_name }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent