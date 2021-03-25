@extends('layout.app')
@section('title','Services')

@section('content')

<div class="container">
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

<div class="container mb-3 mt-3">
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
            <h5>Address</h5>
            <p> 408/1, Kuratoli, Khilkhet,
                Dhaka 1229, Bangladesh</p>
                <p>01627897267</p>
                <p>nasirkhan97.bd@gmail.com</p>
        </div>
    </div>
</div>

@endsection
