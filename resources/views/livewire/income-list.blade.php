@props(['text2'])

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 offset-md-0">
            <button class="btn btn-sm btn-outline-primary mt-3 shadow">Income</button>
            <button class="btn btn-sm btn-outline-primary mt-3 shadow">Expense</button>

            <div class="card mt-2"  style="background-color:#bb95dc !important; color:#ffffff !important">
                {{-- <h1>{{$search}}</h1> --}}
                
                {{-- <h1 x-text="a"></h1> --}}
    <div class="mb-2 mt-2 w-50" style="margin: auto">
      @if (session('status'))
          <livewire:alert>
      @endif
  </div>
    <div class="d-flex justify-content-between mb-0  pb-0">
        <div class="mb-0">
            <h2 class="card-header" style="color:#ffffff">Income list</h2>
        </div>
        <div class="mb-0">
            <div class="mt-3 me-2 d-flex align-items-center ">
              <i class="fa-solid fa-magnifying-glass"></i>
              <input type="text" class="form-control border-0 shadow ms-2 " wire:model.live="search" placeholder="Search.....">
              <a href="{{route('finance.expense.add')}}" wire:navigate class="btn btn-primary ms-2"  style="background:#ffffff; color:#bb95dc; border-color:#bb95dc !important "><i class="fa-solid fa-plus"></i></a>

            </div>
              
            
        </div>
    </div>
{{-- 
     --}} 

    <div class="table-responsive text-nowrap mt-0 ">
        <table class="table" >
            <thead  >
                <tr style=" background-color:#e2dcf8" class="shadow">
                    <th style="color:#bb95dc" class="btn" wire:click='sorting("name")'>MedicalRecored_ID 
                        </th>                    
                    <th style="color:#bb95dc" wire:click='sorting("amount")'>Amount
                    </th>
                    <th style="color:#bb95dc" wire:click='sorting("created_at")'>Date 
                    </th>
                    
                    <th style="color:#bb95dc">Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($records as $record)
                <tr wire:key="{{ $record->medical_record_id }}" style="border-top:2px solid #FFFEF2; border-bottom:2px solid #FFFEF2; border-top:0;" class="shadow-sm mb-3">
                    <td class="ms-5 text-white"><strong>{{ $record->medical_record_id }}</strong></td>
                        <td class="text-white">{{ $record->amount }} MMK</td>
                        <td class="text-white"><span class="badge bg-label-primary me-1">{{ date_format($record->updated_at,"Y/m/d")  }}</span></td>

                        <td>
                            
                            
                                <a  href="{{route('finance.voucher',$record->medical_record_id)}}" wire:navigate class=" misc" style="color:#e2dcf8"><i
                                    class="fa-solid fa-eye"></i></a>
                                    
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="text-white ms-3 mt-3" >
        {{ $records->links() }}

        </div>



        {{-- <div>{{$text2}}</div> --}}
        {{-- @if ($text2 != '')
            @include('admin.modal')
        @endif --}}
    </div>
</div>

        </div>
    </div>
</div>
