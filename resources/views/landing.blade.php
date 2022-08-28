@extends('layouts.app')

@section('content')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="container" style="position: relative;">
        <div class="row gx-3">
            <div class="col-md-3 p-0">
                <div id="carouselExampleControls" class="carousel slide mx-4" data-bs-ride="carousel"
                    style="display: block; position: fixed;">
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
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            @foreach ($menfesses as $key => $menfess)
                <div class="col-9">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    @csrf
                                    <table style="border-collapse: collapse; width: 100%; border: none;">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;">
                                                    <table style="border-collapse: collapse; width: 100%; height: 18px;"
                                                        border="0">
                                                        <tbody>
                                                            <tr style="height: 18px;">
                                                                <td style="width: 8.52633%; height: 18px;"><img
                                                                        src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg"
                                                                        alt="" width="36" /></td>
                                                                <td style="width: 91.4737%; height: 18px;">Anonymous</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <textarea cols="90" rows="5" readonly="readonly" style="border: none; ">
{{ $menfess->menfess }}
</textarea>

                                            <tr>
                                                <td style="border-bottom: 1px solid black; padding-bottom: 6px;">
                                                    <a href="{{ url('/menfess/' . $menfess->id) }}"><img
                                                            src="assets/images/message-solid.svg" width="20">
                                                </td>
                                            </tr>
            @endforeach
            </td>
            </tr>
            </tbody>
            </table>
        </div>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div>
            <tr>


                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create Menfess</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action={{ url('/menfess/add') }} method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <textarea cols="50" placeholder="Privasi aman 100%!" name="menfess"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                        </div>
                    </div>
                </div>
            </tr>
        </div>

        </form>

    </div>
    </div>
    </div>
    </div>

    </div>

    </div>
@endsection
