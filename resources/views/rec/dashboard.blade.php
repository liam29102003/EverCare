<h1>Receptionist Dashboard</h1>
<a href="{{route('pharmacy')}}" wire:navigate>Pharmacy</a>
<form action="{{route('logout')}}" method="POST">
@csrf
<button>Logout</button>
</form>