<div>
<h1>Hello Doctor</h1></div>
<form action="{{route('logout')}}" method="post">
    @csrf
    <input type="submit" value="Logout">
</form>
<a href="{{route("list.medicalrecord")}}">List</a>
{{-- <a href="{{route("list.medicalrecord")}}">List</a> --}}

