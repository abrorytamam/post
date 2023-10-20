@extends('layouts.app')

@section('title', 'Data Post')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Tutorial Laravel 10</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                        
                        <ul>
                            <li><label class="font-weight-bold">GAMBAR  <img src="{{asset('storage/posts/'.$post->image)}}" class="rounded" style="width:150px"> </li>
                        </ul>
                        <ul>
                            <li><label class="font-weight-bold">JUDUL POST</label> {{$post->title}}</li>
                        </ul>                          
                        <ul>
                            <li><label class="font-weight-bold">KONTEN</label> {{ $post->content}}</li>
                        </ul>
                        @include('posts.komentar.show-komentar')
                        <div class="mt-4">
                            <form action="{{ url('/posts/comment/store') }}" method="post">
                                @csrf
                                <input type="hidden" name="post_id" id="post_id"
                                     value="{{ $post->id }}">
                                <div class="form-group">
                                     <label class="font-weight-bold">KOMENTAR</label>
                                     <input type="text" class="form-control
                                     @error('komentar')
                                     is-invalid @enderror"
                                     name="komentar"
                                     placeholder="masukkan komentar post">

                             @error('komentar')
                                <div class="alert alert-danger mt-2">
                                     {{ $message }}
                                </div>
                             @enderror
                        </div>
                        <button type="submit" 
                        class="btn btn-md btn-primary mb-4">
                        SIMPAN
                        </button>
                </form>
            </div> 

                                   
                        <ul>
                            <li><label class="font-weight-bold">TANGGAL POSTINGAN</li>{{ $post->created_at}}</label>
                        </ul>
                        <a href="{{ url('/posts') }}" class="btn btn-danger btn-sm">BACK</a>
                       
                </div>
            </div>
        </div>
    </div>
@endsection