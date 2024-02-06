@extends('admin.layouts.app')
@section('content')
<div class="staff-profile py-4" ">
    <div class="container">
        <div class="row">
            <div class="row mb-3">
                @if (session('status'))
                    <livewire:alert>
                @endif

            </div>
            <div class="col-lg-4">
                <div class="card mb-3 shadow-sm" style="background-color: #F6E8B1 !important; color:#9d926a !important">
                    <div class="card-header bg-transparent text-center">
                        <img class="profile_img" src="{{ asset('storage/' . $staff->image) }}" alt="staff dp">
                        <h3 class="mt-3 mb-0">{{ $staff->name }}</h3>

                        <h5 class="mb-0 mt-2">{{$staff->role}}</h5>
                        <a href="{{ route('staff.edit', $staff->id) }}" wire:navigate type="submit"
                            class="btn mt-2 btn-primary w-25 text-center mx-auto "
                            style="background:#9d926a; color:#fffdd2; border-color:#9d926a !important ">
                            <div>Edit</div>

                        </a>

                    </div>

                </div>

                

            </div>
            <div class="col-lg-8">
                <div class="card shadow-sm" style="background-color: #F6E8B1 !important; color:#9d926a !important">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                    </div>
                    <div class="card-body pt-0">
                        <table class="table table-bordered">
                            <tr>
                                <th width="30%">Qualification</th>
                                <td width="2%">:</td>
                                <td>{{ $staff->qualification }}</td>
                            </tr>
                            <tr>
                                <th width="30%">Role</th>
                                <td width="2%">:</td>
                                <td>{{ $staff->role }}</td>
                            </tr>
                            <tr>
                                <th width="30%">DOB</th>
                                <td width="2%">:</td>
                                <td>{{ $staff->dob }}</td>
                            </tr>
                            <tr>
                                <th width="30%">Gender</th>
                                <td width="2%">:</td>
                                <td>{{ $staff->gender }}</td>
                            </tr>
                            <tr>
                                <th width="30%">Salary</th>
                                <td width="2%">:</td>
                                <td>{{ $staff->salary }}</td>
                            </tr>

                            <tr>
                                <th width="30%">Joined Date</th>
                                <td width="2%">:</td>
                                <td>{{ $staff->created_at }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div style="height: 26px"></div>
                <div class="card shadow-sm" style="background-color: #F6E8B1 !important; color:#9d926a !important">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0"><i class="fas fa-map-marked-alt pr-1"></i>Contact Information</h3>
                    </div>
                    <div class="card-body pt-0">
                        <table class="table table-bordered ">
                            <tr>
                                <th width="30%">Address</th>
                                <td width="2%">:</td>
                                <td>{{ $staff->address }}</td>
                            </tr>
                            <tr>
                                <th width="30%">Phone</th>
                                <td width="2%">:</td>
                                <td>{{ $staff->phone }}</td>
                            </tr>
                            <tr>
                                <th width="30%">Email</th>
                                <td width="2%">:</td>
                                <td>{{ $staff->email }}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection