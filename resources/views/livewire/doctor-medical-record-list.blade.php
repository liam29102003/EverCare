@props(['text2'])

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 offset-md-0">
            <div class="card mt-4"  style="background-color:#bb95dccc !important; color:#ffffff !important">
                {{-- <h1 x-text="a"></h1> --}}
                
                {{-- <h1 x-text="a"></h1> --}}
    <div class="mb-2 mt-2 w-50" style="margin: auto">
      @if (session('status'))
          <livewire:alert>
      @endif
  </div>
    <div class="d-flex justify-content-between mb-0  pb-0">
        <div class="mb-0">
            <h2 class="card-header" style="color:#ffffff">Medical Record list</h2>
        </div>
        <div class="mb-0">
            <div class="mt-3 me-2 d-flex align-items-center ">
              <i class="fa-solid fa-magnifying-glass"></i>
              <input type="text" class="form-control border-0 shadow ms-2 " wire:model.live="search" placeholder="Search.....">
              {{-- <a href="{{route('medical.add')}}" wire:navigate class="btn btn-primary ms-2"  style="background:#ffffff; color:#bb95dc; border-color:#bb95dc !important "><i class="fa-solid fa-plus"></i></a> --}}

            </div>
              
            
        </div>
    </div>
{{-- 
     --}} 

    <div class="table-responsive text-nowrap mt-0 ">
        <table class="table" >
            <thead  >
                <tr style=" background-color:#e2dcf8" class="shadow">
                    <th style="color:#bb95dc" class="btn" wire:click='sorting("name")'>Name @if ($orderName === 'name')
                        <span>{{ $type === 'asc' ? '▲' : '▼' }}</span>
                    @endif</th>                    
                    <th style="color:#bb95dc" wire:click='sorting("disease")'>Disease @if ($orderName === 'disease')
                        <span>{{ $type === 'asc' ? '▲' : '▼' }}</span>
                    @endif</th>
                    <th style="color:#bb95dc" wire:click='sorting("updated_at")'>Date @if ($orderName === 'updated_at')
                        <span>{{ $type === 'asc' ? '▲' : '▼' }}</span>
                    @endif</th>
                    <th style="color:#bb95dc">Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($medicals as $medical)
                <tr wire:key="{{ $medical->id }}" style="border-top:2px solid #FFFEF2; " class="shadow-sm mb-3 text-white">
                    <td><strong>{{ $medical->patient->name }}</strong></td>
                        <td>{{ $medical->disease }}</td>
                        <td><span class="badge bg-label-primary me-1">{{ $medical->updated_at }}</span></td>
                        <td>
                            <a href="{{ route('detail.medicalrecord', $medical->id) }}" wire:navigate class=" misc" style="color:#e2dcf8"><i
                                    class="fa-solid fa-eye"></i></a>
                            {{-- <button type="button" class="btn misc" style="color:#e2dcf8"
                                x-on:click=" $dispatch('open-modal'); $wire.changevalue({{ $medical->id }}, 'Are you sure to delete')">

                                <i class="fa-solid fa-trash"></i></button>
                            <a href="{{ route('medical.edit', $medical->id) }}" wire:navigate class="misc" style="color:#e2dcf8"><i
                                    class="fa-solid fa-pen-to-square"></i></a> --}}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="text-white ms-3 mt-3" >
        {{ $medicals->links() }}

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
