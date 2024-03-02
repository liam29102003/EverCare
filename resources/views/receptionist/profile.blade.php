@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row mb-3">
        @if (session('status'))
            <livewire:alert>
        @endif

    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2 text-center mt-4">
            <h3>Update Password</h3>

            <div class="card mt-4 p-3">
                <div class="card-header" style="border: 2px dashed #bb95dc">
                    <livewire:rec-update-password/>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection