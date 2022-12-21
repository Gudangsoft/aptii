<x-frontend-master>
    <section class="page-header">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8">
              <div class="title-block">
                <h1>Anggota APTII</h1>
                <ul class="header-bradcrumb justify-content-center">
                  <li><a href="/">Home</a></li>
                  <li class="active" aria-current="page">Anggota</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="section-padding page" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-8">
                    <div class="post-single">
                        <ul class="list-group">
                            @forelse ($data as $item)
                            <li class="list-group-item {{ $loop->first ? 'list-group-item-action list-group-item-primary' : '' }}">
                                <a href="{{ route('anggota.detail', ['id' => $item->user_id]) }}" class="text-dark">{{ $loop->index + 1 }}. <strong>{{ $item->user->name }}</strong></a>
                                <span class="badge bg-{{ $loop->first ? 'dark' : 'primary' }} text-white fw-bold">{{  $item->user->company  }}</span>
                            </li>
                            @empty
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Coming Soon.
                            </li>
                            @endforelse
                        </ul>
                        <div class="d-flex justify-content-center mt-3">
                            {{ $data->links() }}
                        </div>
                    </div>
                  </div>
                <div class="col-lg-4 col-xl-4">
                    @include('client.sections.sidebar')
                </div>

            </div>
        </div>
        <!--course-->
    </section>
</x-frontend-master>
