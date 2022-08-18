@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 mx-4"> 
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="assets/images/post1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="assets/images/post2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="assets/images/post3.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                
            
        </div>
        <div class="col-md-8 ">
            <div class="card d-flex flex-column flex-nowrap overflow-auto" style="height: 460px;">
                <div class="card-body">
                <div>
                        <textarea name="notes" cols="70" rows="5"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
