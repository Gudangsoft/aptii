<div class="card">
    <div class="card-body">
        <h5>Add Friends</h5>
        @foreach ($users->shuffle() as $user)
            @if ($loop->depth == 8)
                <div class="d-flex justify-content-start align-items-center mt-2">
                    <div class="avatar mr-75">
                        <img src="{{asset('assets')}}/images/portrait/small/avatar-s-9.jpg" alt="avatar" height="40" width="40" />
                    </div>
                    <div class="profile-user-info">
                        <h6 class="mb-0">Peter Reed</h6>
                        <small class="text-muted">6 Mutual Friends</small>
                    </div>
                    <button type="button" class="btn btn-primary btn-icon btn-sm ml-auto">
                        <i data-feather="user-plus"></i>
                    </button>
                </div>
            @endif
        @endforeach
    </div>
</div>
