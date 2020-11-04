@extends('layouts.index')

@section('content')

    <section id="intro">
        <div class="intro-text">
            <h2>Bienvenida {{Auth::user()->names}}</h2>
            <p>We are team of talanted designers making websites with Bootstrap</p>
            <a href="#more-features" class="btn-get-started scrollto">Circulo Familiar</a>
        </div>
    </section>
    <section id="more-features" class="section-bg">
        <div class="container">

            <div class="section-header">
                <h3 class="section-title">Circulo Familiar</h3>
                <span class="section-divider"></span>
                <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row">
            @if($code_id === null)
                    <div class="col-lg-12">
                        <div class="box wow fadeInLeft">
                            <div class="icon"><img src="{{url('/image/familia.png')}}"></div>
                            <h4 class="title text-center">No pertence a ningun circulo familiar</h4>
                        </div>
                    </div>
              @else
                    @foreach($familyCircle as $item)
                        <div class="col-lg-6">
                            <div class="box wow fadeInLeft">
                                <div class="icon"><img src="{{url('/image/familia.png')}}"></div>
                                <h4 class="title">{{$item->name." ". $item->surname}}</h4>
                                <p class="description">Numer de telefono:  {{$item->phone}}</p>
                            </div>
                        </div>
                    @endforeach
              @endif
            </div>
        </div>
    </section>

@endsection
