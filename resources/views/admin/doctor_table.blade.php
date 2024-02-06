@extends('admin.layouts.app')
@section('content')
<livewire:doctor-table>
    
<script>
    window.Livewire.on('openModal', () => {
        Livewire.emit('openModal');
    });
</script>
    
@endsection
