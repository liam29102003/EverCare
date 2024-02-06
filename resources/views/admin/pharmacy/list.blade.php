@extends('admin.layouts.app')
@section('content')
<livewire:medicine-list/>
    
<script>
    window.Livewire.on('openModal', () => {
        Livewire.emit('openModal');
    });
</script>
    
@endsection