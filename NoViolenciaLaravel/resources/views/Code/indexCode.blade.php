@extends('layouts.index')

@section('content')
    <section id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-lg-left">
                    <h3 class="cta-title text-center">CODIGO</h3><br>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row wow fadeInUp">

                <div class="col-lg-12 col-md-12">
                    @foreach($code as $item)
                        <div class="card">
                           <div class="card-body">
                             <h1 class="card-title text-center">{{$item->code}}</h1>
                             <p class="card-text text-center">Comparte el codigo a tus familiares para formar tu circulo familiar</p>
                           </div>
                        </div> <br><br>
                    @endforeach
                </div>
                <div class="col-lg-12 col-md-12 text-center">
                    <div class="contact-about">
                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



@endsection
