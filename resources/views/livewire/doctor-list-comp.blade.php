
<div class="container">
        <h2 class="text-center mt-5">Meet Our Doctors</h2 class="text-center">
        <div style="height: 2px;width: 20%;" class="bg-dark m-auto"></div>
        <div class="text-center my-3 text-dark">"Discover Compassionate Care with Our Dedicated Team of Exceptional Doctors"</div>
        <div class='d-flex justify-content-center flex-wrap category mb-3'>
            @foreach($specialities as $s)
                <button class="px-3 py-2 cateitem ms-3 {{$special==$s->id ? 'selected' : ''}}" wire:click="changeDoctor('{{ $s->id }}')">{{$s->name}}</button>
            @endforeach
        </div>
        <div class="d-flex justify-content-center flex-wrap">
@foreach($doctors as $d)
        <div class="col-8 col-md-3 m-3 position-relative ">
                <div class="card dcard w-100">
                    <div class="detailContainer position-absolute">
                        <a href="{{url('/doctor/detailPage',['id'=>$d->id])}}" wire:navigate class="btn btn-dark" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="View Doctor's Detail"> <i class="fa-solid fa-eye"></i></a>
                    </div>
                    <img src="https://hips.hearstapps.com/hmg-prod/images/portrait-of-a-happy-young-doctor-in-his-clinic-royalty-free-image-1661432441.jpg?crop=0.66698xw:1xh;center,top&resize=1200:*" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class='dname'>{{$d->name}}</h5>
                      <div>{{$d->qualification}}</div>
                      <small>{{$d->exp}} years +</small>
                    </div>

                </div>
            
            </div>
            @endforeach
        </div>
        
    </div>

