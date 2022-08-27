@extends('layouts.komentar')

@section('content')
    <div class="container">
        
        <div class="row">
            <div class="col-md-3 p-0">
                <div id="carouselExampleControls" class="carousel slide mx-4" data-bs-ride="carousel"
                    style="display: block; position: fixed;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/assets/images/post1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/images/post2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/images/post3.png" class="d-block w-100" alt="...">
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
            {{-- @foreach ($komentars as $key => $komentar) --}}
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
                                                <table style="border-collapse: collapse; width: 100%;" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 100%;">
                                                                <p>Comment</p>
                                                                <table style="border-collapse: collapse; width: 100%;"
                                                                    border="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td
                                                                                style="width: 100%; border-left: 1px solid black;">
                                                                                <textarea class="form-control" cols="83" rows="3" readonly="readonly" style="border: none; ">
                                                                                    @foreach ($menfess->komentars as $komentar)
                                                                                    {{ $komentar->komentar }}
                                                                                    @endforeach
            {{-- {{ $komentar->komentar }} --}}
        </textarea>
                                                                            </td>
                                                                        </tr>
                                                                        {{-- @endforeach --}}
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table style="border-collapse: collapse; width: 100%;" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 100%;">&nbsp;</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <p>&nbsp;</p>
                            <p>&nbsp;</p>

                            <div>
                                <tr>
                                    

                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ url('/menfess/' . $menfess->id . '/add-comment') }}"
                                                        method="post">
                                                        @csrf
                                                        <textarea type="text" name="komentar" class="form-control"></textarea>
                                                        <input type="hidden" name="menfess_id" value="{{ $menfess->id }}">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <form action="{{ url('/menfess/' . $menfess->id . '/add-comment') }}"
            method="post">
            @csrf
            <textarea type="text" name="komentar" class="form-control" ></textarea><br />
            <input type="hidden" name="menfess_id" value="{{ $menfess->id }}">
            <button type="submit"  style="background-color: #A9B2FFF7; border: none;">Submit</button>
        </form>
        </tr>
    </div>
    </div>
    </div>
    </div>

    </div>
    </div>
@endsection
