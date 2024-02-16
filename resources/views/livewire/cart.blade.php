<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 offset-md-0">
            <div class="card mt-4" style="background-color:#F6E8B1 !important; color:#9d926a !important">


                <div class="mb-2 mt-2 w-50" style="margin: auto">
                    @if (session('status'))
                        <livewire:alert>
                    @endif
                </div>
                <div class="d-flex justify-content-between mb-0  pb-0">
                    <div class="mb-3">
                        <div class="mt-3 ms-2  d-flex align-items-center ">
                            <button wire:click='deleteCart' type="submit"
                                class="btn btn-sm btn-primary  d-flex align-items-center"
                                style="background:#9d926a; color:#fffdd2; border-color:#9d926a !important ">
                                <div>Clear</div>


                            </button>
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="mt-3 me-2  d-flex align-items-center ">
                            <button wire:click='checkOut' type="submit" class="btn btn-sm btn-primary  d-flex align-items-center"
                                style="background:#9d926a; color:#fffdd2; border-color:#9d926a !important ">
                                <div>Check out</div>


                            </button>
                        </div>


                    </div>
                </div>
                <div class="table-responsive text-nowrap mt-0 ">
                    {{-- <button wire:click="deleteCart">Delete</button> --}}
                    <table class="table">
                        <thead>
                            <tr style="border: 2px solid #faf8e3; background-color:#faf8e3" class="shadow">
                                <th style="color:#9d926a" class="">Name</th>
                                <th style="color:#9d926a" class="text-center">Quantity</th>
                                <th style="color:#9d926a" class="text-center">Price</th>
                                <th style="color:#9d926a">Actions</th>
                            </tr>
                        </thead>

                        <tbody class="table-border-bottom-0">
                            {{-- {{$quantity }} --}}
                            @foreach (session('my_associative_array') as $key => $item)
                                <livewire:cart-update :cart="$item" :key="$key" :id="$key" />
                            @endforeach

                        </tbody>
                    </table>
                    {{-- <div class="text-white ms-3 mt-3" >
        {{ $staffs->links() }}

        </div> --}}



                    {{-- <div>{{$text2}}</div> --}}
                    {{-- @if ($text2 != '')
            @include('admin.modal')
        @endif --}}
                </div>
            </div>

        </div>
    </div>
</div>
