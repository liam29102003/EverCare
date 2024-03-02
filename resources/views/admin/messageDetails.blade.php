@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 offset-2 mt-3">
            <div class="text-center">
                <h3 >Contact Detail</h3>

            </div>
            <div class="card mt-3 p-3">

                <div class="card-body " style="border: 2px dashed #bb95dc">
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <td>:</td>
                            <td>{{$message->name}}</td>
                        </tr>
                        <tr>
                            <th>Reason</th>
                            <td>:</td>
                            <td>{{$message->reason}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td><a href="mailto:{{$message->email}}">{{$message->email}}</a></td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>:</td>
                            <td>{{$message->phone}}</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>:</td>
                            <td>{{$message->message}}</td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection