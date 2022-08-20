@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <th>Menfess</th>
                </thead>
                <tbody>
                @foreach($menfess as $menfess)
                <tr>
                    <td>{{ $menfess->id }}</td>
                    <td>
                        <a href="{{ route('menfess.show', $menfess->id) }}" class="btn btn-primary">Show Post</a>
                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
@endsection