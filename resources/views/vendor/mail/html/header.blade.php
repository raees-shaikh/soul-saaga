@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
            @else
                <img src="{{ asset('frontend/images/soul-saaga.png') }}" class="logo"
                    alt="soul saaga logo" style="height: 100px !important;max-height: 100px !important;width: auto !important;">
            @endif
        </a>
    </td>
</tr>
