@extends('admin.layouts.app')

@section('content')


    <div>
        <div class="row mb-5 mt-5 ">
            <div class="col-6 offset-3 p-0">
                <div class="card" style="background:#F6E8B1;">

                    <div class="card-header text-center pb-0">
                        <h3 class="mb-0"
                            style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:#9d926a">
                            Medicine Detail</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr style="border-bottom: 2px solid white">
                                <td colspan="3" class="text-center"><img
                                        src="{{ asset('admin/assets/img/121115012_axcel_pcm_500mg_tab_10sx10.webp') }}"
                                        alt="" class="w-25  mx-auto"
                                        style="border: 2px solid #9d926a; width:20% !important; border-radius:10%"></td>
                            </tr>
                            <tr style="border-bottom: 2px solid white" class="py-3">
                                <th class="py-3 w-25">Name</th>
                                <td class=" " style="width:10% !important">:</td>
                                <td class="py-3">{{ $pharmacy->name }}</td>
                            </tr>
                            <tr style="border-bottom: 2px solid white" class="py-3">
                                <th class="py-3 w-25">Price</th>
                                <td class=" " style="width:10% !important">:</td>
                                <td>{{ $pharmacy->price }}</td>
                            </tr>
                            <tr style="border-bottom: 2px solid white" class="py-3">
                                <th class="py-3 w-25">Quantity</th>
                                <td class=" " style="width:10% !important">:</td>
                                <td>{{ $pharmacy->quantity }}</td>
                            </tr>
                            <tr style="border-bottom: 2px solid white" class="py-3">
                                <th class="py-3 w-25">Manufacturer</th>
                                <td class=" " style="width:10% !important">:</td>
                                <td>{{ $pharmacy->manufacturer }}</td>
                            </tr>
                            <tr style="border-bottom: 2px solid white" class="py-3">
                                <th class="py-3 w-25">Side Effect</th>
                                <td class=" " style="width:10% !important">:</td>
                                <td>{{ $pharmacy->side }}</td>
                            </tr>
                            <tr class="py-3">
                                <td colspan="3">Paracetamol is a medicine used for mild to moderate pain. It can be
                                    bought over the counter in pharmacies, supermarkets and other shops. You can also take
                                    paracetamol for: fever (high temperature) stronger pain — used with other pain relievers
                                    such as codeine.</td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

@endsection