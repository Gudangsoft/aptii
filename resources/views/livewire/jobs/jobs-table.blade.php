<div>
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-7">
                    <h2 class="content-header-title float-left mb-0">Jobs List</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Jobs
                            </li>
                            <li class="breadcrumb-item active">Jobs List
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-5 d-flex-">

                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    @if (count($selectJobs) > 0)
                    <div class="card-body">
                        <p class="card-text">
                            {{ count($selectJobs) }} data selected, <button wire:click="unselectedJobs()" class="btn btn-sm btn-primary">Cancel</button>
                            <div class="btn-group">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Actions
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                                    <a class="dropdown-item" href="javascript:void(0);" wire:click="updateStatus(0)">Hidden</a>
                                    <a class="dropdown-item" href="javascript:void(0);" wire:click="updateStatus(1)">Show</a>
                                    <a class="dropdown-item" href="javascript:void(0);" wire:click="deleteSelected()">Delete</a>
                                </div>
                            </div>
                        </p>
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" wire:click="selectAll(1)" wire:model="selectAll"></th>
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
                                            <input type="checkbox" value="{{ $row->id }}" wire:model="selectJobs" id="a">
                                        </td>
                                        <td>
                                            @if ($row->status < 1)
                                                <i class="text-danger" data-feather="x-octagon"></i>
                                            @endif
                                            <span class="font-weight-bold">{{ $row->title }}</span>
                                        </td>
                                        <td>{{ $row->type }}</td>
                                        <td>
                                            {{ $row->specialisation }}
                                        </td>
                                        <td><span class="badge badge-light-primary mr-1">{{ $row->work_location }}</span></td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-primary" title="View"> View</a>
                                            <a href="" class="btn btn-sm btn-success" title="Edit"> Edit</a>
                                            <a href="" class="btn btn-sm btn-danger" title="Delete"> Delete</a>
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

</div>
