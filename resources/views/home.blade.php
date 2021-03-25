@extends('layout.app')
@section('title','Home')

@section('content')

<div class="container-fluid parallax mb-6">
    <div class="row d-flex justify-content-center ">
        <div class="col-md-4 topDiv">
            <h1 class="text-white">Software Engineer</h1>
            <h3 class="text-white">Mobile and Web</h3>
            <button class="btn btn-primary">Learn More</button>
        </div>
    </div>
</div>

<div class="container mb-5 mt-5">
    <h2>My Services</h2>
    <div class="row">
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                </div>
              </div>
        </div>
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                </div>
              </div>
        </div>
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                </div>
              </div>
        </div>
    </div>
</div>
<div class="container mb-5 mt-5">
    <h2>Recent Projects</h2>
    <div class="row">
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                </div>
              </div>
        </div>
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                </div>
              </div>
        </div>
        <div class="col-md-4 p-1">
            <div class="card" style="width: 100%;">
                <img src="{{asset('images/laravel.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                </div>
              </div>
        </div>
    </div>
</div>

<div class="container mb-5 mt-5">
    <h2>Contact With Me</h2>
    <div class="row">
        <div class="col-md-6">
            <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Your Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Your Mobile</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Your Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Your Message</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Send Now</button>
              </form>
        </div>
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.6771527829474!2d91.20317049151942!3d23.472107228388737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37547f52b58f77f1%3A0x6988b3197fdd629!2sBaitul%20Falah%20Jam&#39;e%20Mosque!5e0!3m2!1sen!2sbd!4v1616697007425!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>

@endsection
