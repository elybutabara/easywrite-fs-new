<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
        <style>
            td p {
                margin: 0
            }
        </style>
    </head>
    <body>
        <table cellpadding="0" cellspacing="0" border="0" style='font-weight: 300!important;
        font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol"'>
            <tr> 
                <td style="padding-top: 1rem">Hi {{ $receiver }},</td>
            </tr>
            <tr> 
                <td style="padding-top: .3rem">{{ $sender }} has replied {{ $type }} titled <a href="{{ $discussion_url }}">{{ $discussion_title }}</a> on <a href="{{ $group_url }}">{{ $group_title }}</a></td>
            </tr>
            @if($email_message)
            <tr>
                <td style="padding-top: .3rem">{{ "Here what's they say:" }}</td>
            </tr>
            <tr>
                <td style="padding-top: .3rem">
                    <pre>{!!html_entity_decode($email_message)!!}</pre>
                </td>
            </tr>
            @endif
            <tr>
                <td style="padding-top: .3rem">This is an automated email from Easywrite. {{ "Please don't reply to this." }}</td>
            </tr>
        </table>
    </body>
</html>