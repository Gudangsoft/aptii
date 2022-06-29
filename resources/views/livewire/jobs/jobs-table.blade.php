<div>

    <div class="row" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Table Basic</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Using the most basic table Leanne Grahamup, here’s how <code>.table</code>-based tables look in Bootstrap. You
                        can use any example of below table for your table and it can be use with any type of bootstrap tables.
                    </p>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Specialis</th>
                                <th>Location</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $row)
                                <tr>
                                    <td>
                                        <span class="font-weight-bold">{{ $row->title }}</span>
                                    </td>
                                    <td>{{ $row->type }}</td>
                                    <td>
                                        {{ $row->specialisation }}
                                    </td>
                                    <td><span class="badge badge-light-primary mr-1">{{ $row->work_location }}</span></td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-primary" title="View"><i data-feather="eye"></i></a>
                                        <a href="" class="btn btn-sm btn-success" title="Edit"><i data-feather="edit"></i></a>
                                        <a href="" class="btn btn-sm btn-danger" title="Delete"><i data-feather="trash"></i></a>
                                    </td>
                                </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="pt-2 pb-2">Data not found !</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center mt-2">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
