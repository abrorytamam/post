@extends('layouts.app')

@section('title', 'Data Post')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Tutorial Laravel 10</h3>
                <hr>
            </div>
            <div class="card bg-dark border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="{{ url('/posts/create') }}" class="btn btn-md btn-light mb-3">TAMBAH POST</a>
                    <table class="table text-white table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">CONTENT</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($posts as $item)
                                <tr>
                                    <td>
                                        <img src="{{ asset('/storage/posts/'.$item->image) }}" 
                                            class="rounded" style="width: 150px">
                                    </td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->content }}</td>
                                    <td>
                                        <a href="{{ url('/posts/edit/'.$item->id) }}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{ url('/posts/delete/'.$item->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                                        <a href="{{url('/posts/show/'.$item->id) }}" class="btn btn-info btn-sm">show</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                       
                </div>
            </div>
        </div>
    </div>
@endsection