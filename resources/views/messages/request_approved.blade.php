@component('mail::message')
    ## Request Approved

    Dear {{$data['name']}}.Your request for {{$data['item']}} has been approved.
    The following are the details of your request.

    Item given : {{$data['item']}}
    Item Description : {{$data['description']}}
    Reason : {{$data['reason']}}
    start Date : {{$data['from']}}
    Return Date : {{$data['to']}}

    @component('mail::button', ['url' => 'https://forms.baylor-uganda.org/'])
        Request for another item
    @endcomponent

    Thanks,<br>
    IT department
@endcomponent



