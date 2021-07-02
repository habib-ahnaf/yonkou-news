@extends('front.layouts.frontend')
@section('content')
@include('front.includes.slide')

<div class="row">
    @forelse ($artikel as $row)
    <div class="col-md-4 mt-3">
        <div class="card">
            <img src="{{asset('uploads/' . $row->gambar_artikel)}}"class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{route('detail-artikel', $row->slug)}}" style="text-decoration: none">
                        {{$row->judul}}
                    </a>
                </h5>
                <!-- <p class="card-text">{!!$row->body!!}</p> -->
            </div>
            <!-- <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul> -->
            <div class="card-body">
                <a href="#" class="card-link">{{$row->users->name}}</a>
                <a href="#" class="card-link">{{$row->kategori->nama_kategori}}</a>
            </div>
        </div>
    </div>
    @empty
    <p>Data Masih Kosong</p>
    @endforelse
</div>
@endsection