<x-frontend-master>
    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="post-single">
                        <div class="post-thumb">
                            <img src="{{ $data->imageUrl ?? 'https://media.sproutsocial.com/uploads/2017/02/10x-featured-social-media-image-size.png'}}" alt="" class="img-fluid">
                        </div>

                        <div class="single-post-content">
                            <div class="post-meta">
                                <span class="post-author">Editor : <strong>{{ $data->editor }}</strong></span>
                                <span class="post-date"><i class="fa fa-calendar-alt mr-2"></i>{{ $data->date }}</span>
                            </div>
                            <h3 class="post-title">{!! $data->title !!}</h3>
                            <table>
                                <tr>
                                    <td class="fw-bold">Afiliasi</td>
                                    <td>:</td>
                                    <td>{{ $data->afiliasi }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Terdaftar</td>
                                    <td>:</td>
                                    <td>{{ $data->date }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Indexasi</td>
                                    <td>:</td>
                                    <td>{!! $data->index_journal ?? 'Tidak tersedia.' !!}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Link Jurnal</td>
                                    <td>:</td>
                                    <td><a href="{{ $data->link_journal }}" class="bdage bg-primary p-2 rounded text-white"><i class="fa fa-link"></i> LINK JURNAL</a></td>
                                </tr>
                            </table>

                            @include('client.sections.journal-linkages', ['title' => 'Jurnal Terkait', 'data' => $journals])

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    @include('client.sections.sidebar-journal')
                </div>
            </div>
        </div>
    </div>
</x-frontend-master>
