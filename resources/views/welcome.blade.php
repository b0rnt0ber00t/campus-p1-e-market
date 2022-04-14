@extends('template.home')

@section('content')
    <section class="primary-color pt-5">
        <div class="row">
            <div class="col-lg-4 p-5 center">
                <h1 class="text-success text-title-abhaya">How work should work</h1>
                <p class="text-white mt-4">Forget the old rules.<br/>You can have the best people.<br/>Right now. Right here.</p>
                <div class="row mt-4">
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a href="/talent" class="btn btn-warning btn-block">Find Talent</a>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <a href="" class="btn btn-outline-warning btn-block">Find Work</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <img src="assets/background.png" class="img-hero" alt="">
            </div>
        </div>
    </section>
@endsection
