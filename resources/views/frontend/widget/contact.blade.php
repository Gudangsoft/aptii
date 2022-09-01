<div class="padding40 box-rounded mb30" data-bgcolor="#F2F6FE">
    @foreach ($customerCare as $row)
        <h3>{{ $row->getUser->name }}</h3>
        <address class="s1">
            <span><i class="id-color fa fa-phone fa-lg"></i>{{ $row->getUser->phone  }}</span>
            <span><i class="id-color fa fa-whatsapp fa-lg"></i><a href="https://wa.me/{{ $row->getUser->phone }}">Whatsapp</a></span>
        </address>
    @endforeach
</div>
