@extends('layouts.master')
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                            <livewire:user-table></livewire:user-table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@push('custom-scripts')

@endpush
@endsection
