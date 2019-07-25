@component('mail::message')


    Dear {{$data['user']}},

    Your request for {{$data['item']}} has been successfully received. Please come to IT office and pick the item


    Thanks,<br>

        BAYLOR IT TEAM
@endcomponent
