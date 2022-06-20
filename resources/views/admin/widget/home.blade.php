<div class="card card-developer-meetup">
    <div class="meetup-img-wrapper rounded-top text-center">
        <img src="{{ asset('assets') }}/images/illustration/email.svg" alt="Meeting Pic" height="170" />
    </div>
    <div class="card-body">
        <div class="meetup-header d-flex align-items-center">
            <div class="meetup-day">
                <h6 class="mb-0">THU</h6>
                <h3 class="mb-0">24</h3>
            </div>
            <div class="my-auto">
                <h4 class="card-title mb-25">Developer Meetup</h4>
                <p class="card-text mb-0">Meet world popular developers</p>
            </div>
        </div>
        <div class="media">
            <div class="avatar bg-light-primary rounded mr-1">
                <div class="avatar-content">
                    <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                </div>
            </div>
            <div class="media-body">
                <h6 class="mb-0">{{ $data['date'] }}</h6>
                <small>{{ $data['time'] }}</small>
            </div>
        </div>
        <div class="media mt-2">
            <div class="avatar bg-light-primary rounded mr-1">
                <div class="avatar-content">
                    <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                </div>
            </div>
            <div class="media-body">
                <h6 class="mb-0">{{ $data['currentUserInfo']->cityName }}</h6>
                <small>{{ $data['currentUserInfo']->regionName }}, {{ $data['currentUserInfo']->countryName }}</small>
            </div>
        </div>
        <div class="avatar-group">
            <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Billy Hopkins" class="avatar pull-up">
                <img src="{{ asset('assets') }}/images/portrait/small/avatar-s-9.jpg" alt="Avatar" width="33" height="33" />
            </div>
            <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Amy Carson" class="avatar pull-up">
                <img src="{{ asset('assets') }}/images/portrait/small/avatar-s-6.jpg" alt="Avatar" width="33" height="33" />
            </div>
            <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Brandon Miles" class="avatar pull-up">
                <img src="{{ asset('assets') }}/images/portrait/small/avatar-s-8.jpg" alt="Avatar" width="33" height="33" />
            </div>
            <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Daisy Weber" class="avatar pull-up">
                <img src="{{ asset('assets') }}/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="33" height="33" />
            </div>
            <div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Jenny Looper" class="avatar pull-up">
                <img src="{{ asset('assets') }}/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="33" height="33" />
            </div>
            <h6 class="align-self-center cursor-pointer ml-50 mb-0">+42</h6>
        </div>
    </div>
</div>

