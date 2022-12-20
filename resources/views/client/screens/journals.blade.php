<x-frontend-master>
    <section class="page-header">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-8">
              <div class="title-block">
                <h1>Jurnal</h1>
                <ul class="header-bradcrumb justify-content-center">
                  <li><a href="/">Home</a></li>
                  <li class="active" aria-current="page">Jurnal</li>
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
                                <a href="{{ route('journal.detail', ['judul' => $item->slug]) }}" class="text-dark"><i class="fas fa-journal-whills text-primary"></i> - {{ $item->title }}</a>
                            </li>
                            @empty
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Coming Soon.
                                <span class="badge bg-primary rounded-pill">2</span>
                            </li>
                            @endforelse
                        </ul>
                    </div>
                  </div>
                <div class="col-lg-4 col-xl-4">
                    @include('client.sections.sidebar')
                </div>
            </div>
            {{-- {{ route('journal.detail', ['id' => $item->id]) }} --}}
        </div>
        <!--course-->
    </section>
</x-frontend-master>
