@extends('layouts.index')

@section('content')
    <section id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-lg-left">
                    <h3 class="cta-title text-center">UNIRSE A UN CIRCULO FAMILIAR</h3><br>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-lg-10 col-md-10">
                    <form method="POST" action="{{ route('familyCircles.family.store') }}" >
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Codigo</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"name="code">
                            <small id="emailHelp" class="form-text text-muted">Ingrese un codigo para unirse a un circulo familiar.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->



@endsection
