@props(['text2'])

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 offset-md-0">
            <div class="card mt-4"  style="background-color:#F6E8B1 !important; color:#9d926a !important">
                
                
    <div class="mb-2 mt-2 w-50" style="margin: auto">
      @if (session('status'))
          <livewire:alert>
      @endif
  </div>
    <div class="d-flex justify-content-between mb-0  pb-0">
        <div class="mb-0">
            <h2 class="card-header" style="color:#9d926a">Staff list</h2>
        </div>
        <div class="mb-0">
            <div class="mt-3 me-2 d-flex align-items-center ">
              <i class="fa-solid fa-magnifying-glass"></i>
              <input type="text" class="form-control  ms-2 " wire:model.live="search" placeholder="Search.....">
              <a href="{{route('staff.add')}}" wire:navigate class="btn btn-primary ms-2"  style="background:#9d926a; color:#fffdd2; border-color:#9d926a !important "><i class="fa-solid fa-plus"></i></a>

            </div>
              
            
        </div>
    </div>
{{-- 
     --}} 

    <div class="table-responsive text-nowrap mt-0 ">
        <table class="table" >
            <thead  >
                <tr style="border: 2px solid #faf8e3; background-color:#faf8e3" class="shadow">
                    <th style="color:#9d926a" class="btn" wire:click='sorting("name")'>Name @if ($orderName === 'name')
                        <span>{{ $type === 'asc' ? '▲' : '▼' }}</span>
                    @endif</th>                    
                    <th style="color:#9d926a" wire:click='sorting("role")'>Role @if ($orderName === 'role')
                        <span>{{ $type === 'asc' ? '▲' : '▼' }}</span>
                    @endif</th>
                    <th style="color:#9d926a" wire:click='sorting("created_at")'>Work Since @if ($orderName === 'created_at')
                        <span>{{ $type === 'asc' ? '▲' : '▼' }}</span>
                    @endif</th>
                    <th style="color:#9d926a">Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($staffs as $staff)
                <tr wire:key="{{ $staff->id }}" style="border-top:2px solid #FFFEF2; border-bottom:2px solid #FFFEF2; border-top:0;" class="shadow-sm mb-3">
                    <td><img src="{{ asset('storage/' . $staff->image) }}" alt="" width="30"
                                class="rounded-circle me-2"> <strong>{{ $staff->name }}</strong></td>
                        <td>{{ $staff->role }}</td>
                        <td><span class="badge bg-label-primary me-1">{{ date_format($staff->created_at,"Y/m/d")  }}</span></td>
                        <td>
                            <a href="{{route('staff.details',$staff->id)}}" wire:navigate class=" text-warning"><i
                                    class="fa-solid fa-eye"></i></a>
                            <button type="button" class="btn text-danger"
                                x-on:click=" $dispatch('open-modal'); $wire.changevalue({{ $staff->id }}, 'Are you sure to delete')">

                                <i class="fa-solid fa-trash"></i></button>
                            <a href="{{route('staff.edit',$staff->id)}}" wire:navigate class="text-success"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="text-white ms-3 mt-3" >
        {{ $staffs->links() }}

        </div>



        {{-- <div>{{$text2}}</div> --}}
        @if ($text2 != '')
            @include('admin.modal')
        @endif
    </div>
</div>

        </div>
    </div>
</div>
