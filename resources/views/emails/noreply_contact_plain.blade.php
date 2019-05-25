[{{ env('APP_NAME') }}]({{ env('APP_URL') }})

# Hello {{ $contactName }}

{{ $title }}

@if($contactOption != '3')
One of our team members will contact to you as soon as possible.
@endif

Please do not reply to this email. For more information, visit {{ env('APP_URL') }} or contact our Customer Service at 778 987 0309

Thanks for trust in our services


© {{ env('APP_NAME') }}. All rights reserved.