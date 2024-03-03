@props(['text2'])

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 offset-md-0">
            @if(request()->routeIs('finance.income.list'))
            <a href="{{route('finance.income.list')}}" wire:navigate class="btn btn-sm  mt-3 shadow" style="background-color:  #bb95dc; color:white">Income</a>
            <a href="{{route('finance.expense.list')}}" wire:navigate class="btn btn-sm  mt-3 shadow" style="border: 2px solid #bb95dc">Expense</a>
            @elseif(request()->routeIs('finance.expense.list'))
            <a href="{{route('finance.income.list')}}" wire:navigate class="btn btn-sm  mt-3 shadow" style="border: 2px solid #bb95dc">Income</a>
            <a href="{{route('finance.expense.list')}}" wire:navigate class="btn btn-sm  mt-3 shadow" style="background-color:  #bb95dc; color:white">Expense</a>
            @endif
           


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
            <h2 class="card-header" style="color:#ffffff">Offline Income list</h2>
        </div>
    
    </div>
{{-- 
     --}} 

    <div class="table-responsive text-nowrap mt-0 ">
        <table class="table" >
            <thead  >
                <tr style=" background-color:#e2dcf8" class="shadow">
                    <th style="color:#bb95dc" class="btn" wire:click='sorting("name")'>From 
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
                <tr wire:key="{{ $record->medical_record_id }}" style="border-top:2px solid #FFFEF2;  " class="shadow-sm mb-3">
                    <td class="ms-5 text-white"><strong>Medical Record {{$record->medical_record_id}}</strong></td>
                        <td class="text-white">{{ $record->total_price }} MMK</td>
                        <td class="text-white"><span class="badge bg-label-primary me-1">{{ date_format($record->updated_at,"Y/m/d")  }}</span></td>

                        <td>
                            
                            
                                <a  href="{{route('finance.voucher',$record->medical_record_id)}}" wire:navigate class=" misc" style="color:#e2dcf8"><i
                                    class="fa-solid fa-eye"></i></a>
                                    
                        </td>
                    </tr>
                @endforeach
                {{-- @foreach ($incomeForToday as $i)
                <tr wire:key="{{ $i->id }}" style="border-top:2px solid #FFFEF2;  " class="shadow-sm mb-3">
                    <td class="ms-5 text-white"><strong>{{ $i->treatment_type }} treatment</strong></td>
                        <td class="text-white">{{ $i->total_income }} MMK</td>
                        <td class="text-white"><span class="badge bg-label-primary me-1">{{$i->appointment_date}}</span></td>

                        <td>
                            
                            
                                
                                    
                        </td>
                    </tr>
                @endforeach --}}
                

            </tbody>
        </table>
        <div class="text-white ms-3 mt-3" >
        {{-- {{ $records->links() }} --}}

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
