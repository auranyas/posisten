@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 p-0">
        <div id="carouselExampleControls" class="carousel slide mx-4" data-bs-ride="carousel" style="display: block; position: fixed;">
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

            <div class="col-9">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="">
                                <div class="form-group">
                                    @csrf
                                    <table style="border-collapse: collapse; width: 100%;" border="0">
<tbody>
<tr>
<td style="width: 100%;">
<table style="border-collapse: collapse; width: 100%; height: 134px;" border="1">
<tbody>
<tr style="height: 44px;">
<td style="width: 100%; height: 44px;">
<table style="border-collapse: collapse; width: 100%;" border="0">
<tbody>
<tr>
<td style="width: 9.2079%;"><img src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg" alt="" width="36" /></td>
<td style="width: 90.7921%;">Anonymous</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr style="height: 90px;">
<td style="width: 100%; height: 90px;">
<textarea cols="107" rows="5" readonly="readonly" style="border: none;">
From : secret
To : ank bc yng jga bc hari senin sma selasa
gpke jilbab rambutny digerai
Message : cantik nomor wa nya brp? Yng tau ig nya spill dong
</textarea>

<textarea cols="107" rows="5" readonly="readonly" style="border: none;">
From : secret
To : ank bc yng jga bc hari senin sma selasa
gpke jilbab rambutny digerai
Message : cantik nomor wa nya brp? Yng tau ig nya spill dong
</textarea>
<textarea cols="107" rows="5" readonly="readonly" style="border: none;">
From : secret
To : ank bc yng jga bc hari senin sma selasa
gpke jilbab rambutny digerai
Message : cantik nomor wa nya brp? Yng tau ig nya spill dong
</textarea>
<textarea cols="107" rows="5" readonly="readonly" style="border: none;">
From : secret
To : ank bc yng jga bc hari senin sma selasa
gpke jilbab rambutny digerai
Message : cantik nomor wa nya brp? Yng tau ig nya spill dong
</textarea>
</td>
</tr>
</tbody>
</table>
</tr>
</tbody>
</table>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>

                                <div class="form-group">
                                <textarea cols="106"></textarea></td>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" />
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
             
    </div>
</div>
@endsection