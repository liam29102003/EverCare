@props(['text2'])

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 offset-md-0">
            <div class="card mt-4"  style="background-color:#bb95dccc !important; color:#ffffff !important">
                
                
    <div class="mb-2 mt-2 w-50" style="margin: auto">
      @if (session('status'))
          <livewire:alert>
      @endif
  </div>
    <div class="d-flex justify-content-between mb-0  pb-0">
        <div class="mb-0">
            <h2 class="card-header" style="color:#ffffff">Patient list</h2>
            <h5 class='bg-secondary p-3 text-white'>Total Patients - {{$patients->total()}}</h5>
        </div>
    </div>
{{-- 
     --}} 

    <div class="table-responsive text-nowrap mt-0 ">
        <table class="table" >
            <thead  >
                <tr style=" background-color:#e2dcf8" class="shadow">
                    <th style="color:#bb95dc" class="btn" >Name </th>                    
                    <th style="color:#bb95dc" >Email </th>
                    <th style="color:#bb95dc" >Phone</th>
                    <th style="color:#bb95dc">Gender</th>
                    <th style="color:#bb95dc">Address</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($patients as $patient)
                <tr wire:key="{{ $patient->id }}" style="border-top:2px solid #FFFEF2; " class="shadow-sm mb-3 text-white">
                    <td><strong>{{ $patient->name }}</strong></td>
                        <td>{{ $patient->email }}</td>
                        <td>{{ $patient->phone }}</td>
                        <td>{{ $patient->gender }}</td>
                        <td>{{ $patient->address }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="text-white ms-3 mt-3" >
        {{ $patients->links() }}

        </div>

    </div>
</div>

        </div>
    </div>
</div>
