@props(['text2'])
<div class="container-fluid" x-data="{'check':false}">
    <div class="row">
        <div class="col-md-12 offset-md-0">
            <div class="card mt-4"  style="background-color:#bb95dccc !important; color:#ffffff !important">
                {{-- <h1 x-text="a"></h1> --}}


                <div class="mb-2 mt-2 w-50" style="margin: auto">
                    @if (session('status'))
                        <livewire:alert>
                    @endif
                </div>
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-4 p-0  mb-0 align-content-between text-center text-md-start">
                            <button x-show="!check" x-on:click="check = ! check" type="submit"
                                class="btn  ms-2 btn-primary w-50 text-center mx-auto mb-0 "
                                style="background:#bb95dccc; color:#ffffff; border:2px solid #ffffff !important ">
                                <div> <small x-show="!check">Manage</small> <small x-show="check">Close</small><small>Quantity</small> </div>
                            </button>
                            <div x-show='check' class="mb-0  text-center  text-md-start">
                                <button class="btn mb-0  btn-sm"  x-on:click="check = ! check" style="background:#bb95dccc; color:#ffffff; border:2px solid #ffffff !important ">X</button>
                                <button class="btn mb-0 btn-sm" wire:click="decrementQuantity" style="background:#bb95dccc; color:#ffffff; border:2px solid #ffffff !important ">-</button>
                                <input type="number" class="form-control-sm w-25 border-0 shadow" wire:model.live='jump'>
                                <button class="btn mb-0 btn-sm" wire:click="incrementQuantity" style="background:#bb95dccc; color:#ffffff; border:2px solid #ffffff !important " class="btn">+</button>
        
                            </div>
                        </div>
                        <div class="mb-0 col-md-4 text-center">
                            <h2 class="card-header" style="color:#ffffff">Medicine list</h2>
                        </div>
    
                        <div class="mb-2 col-md-4">
                            
                                <div class="mt-3 me-2 d-flex align-items-center ">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    <input type="text" class="form-control border-0 shadow ms-2 " wire:model.live="search" placeholder="Search.....">
                                    <a href="{{route('pharmacy.add')}}" wire:navigate class="btn btn-primary ms-2"  style="background:#ffffff; color:#bb95dc; border-color:#bb95dc !important "><i class="fa-solid fa-plus"></i></a>
                      
                                </div>
                                
                            
                           
                        </div>
                    </div>
                </div>
                    
                    
                    
                    
                
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead style="border-bottom: 0px;">
                            <tr style=" background-color:#e2dcf8" class="shadow">

                                
                                <th style="color:#bb95dc" class="btn" wire:click='sorting("name")'>
                                    <input type="checkbox" x-show="check"  wire:model.live='selectAll' >

                                    Name @if ($orderName === 'name')
                                        <span>{{ $type === 'asc' ? '▲' : '▼' }}</span>
                                    @endif
                                </th>
                                <th style="color:#bb95dc" class="text-center " wire:click='sorting("price")'>Price
                                    @if ($orderName === 'price')
                                        <span>{{ $type === 'asc' ? '▲' : '▼' }}</span>
                                    @endif
                                </th>
                                <th style="color:#bb95dc" class="text-center" wire:click='sorting("quantity")'>Quantity
                                    @if ($orderName === 'quantity')
                                        <span>{{ $type === 'asc' ? '▲' : '▼' }}</span>
                                    @endif
                                </th>
                                <th style="color:#bb95dc" class="text-center">Actions</th>
                            </tr>
                        </thead>

                        <tbody class="table-border-bottom-0">
                            @foreach ($medicine as $m)
                                <tr wire:key="{{ $m->id }}"
                                    style="border-top:2px solid #FFFEF2; border-bottom:2px solid #FFFEF2; border-top:0;"
                                    class="shadow-sm mb-3">

                                    
                                    <td>
                                        <input type="checkbox" x-show="check"   wire:model.live="medicine_id"  value="{{ $m->id }}">
                                        {{-- {{count($medicine_id)}} --}}
                                        <img src="{{ asset('storage/' . $m->image) }}" alt="" width="30"
                                            class="rounded-circle me-2"> <strong class="text-white">{{ $m->name }}</strong>
                                    </td>
                                    <td class="text-center text-white">{{ $m->price }} MMK</td>
                                    <td class="text-center text-white"><span
                                            class="badge bg-label-primary me-1">{{ $m->quantity }}</span></td>
                                    <td class="text-center text-white">
                                        <a href="{{ route('pharmacy.details', $m->id) }}" wire:navigate
                                            style="color: #e2dcf8"><i class="fa-solid fa-eye"></i></a>
                                        <button type="button" class="btn"
                                            x-on:click=" $dispatch('open-modal'); $wire.changevalue({{ $m->id }}, 'Are you sure to delete')"  style="color: #e2dcf8">

                                            <i class="fa-solid fa-trash"></i></button>
                                        <a href="{{ route('pharmacy.edit', $m->id) }}" wire:navigate
                                        style="color: #e2dcf8"><i class="fa-solid fa-pen-to-square"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>




                    {{-- <div>{{$text2}}</div> --}}
                    @if ($text2 != '')
                        @include('admin.modal')
                    @endif
                </div>
                <div class="text-white ms-3 mt-2">
                    {{ $medicine->links() }}

                </div>
            </div>
        </div>
    </div>
</div>



</div>
