@extends('admin.master')

@section('content')
    <div class="card-body">
        <table class="table table-bordered table-primary">
            <tbody>
            <tr>
                <th style="width: 200px">Title</th>
                <td>{{$post->title}}</td>
            </tr>

            <tr>
                <th style="width: 200px">Image</th>
                <td><img style="height: 50vh"  src="{{url($post->image)}}" class="img-thumbnail"></td>
            </tr>

            <tr>
                <th style="width: 200px">Description</th>
                <td>{{$post->description}}</td>
            </tr>

            <tr>
                <th style="width: 200px">Tags</th>
                <td>
                    {{$post->tag_ids}}
                </td>
            </tr>

            <tr>
                <th style="width: 200px">post Category</th>
                <td>{{ $post->category->name }}</td>
            </tr>

            <tr>
                <th style="width: 200px">Author name</th>
                <td>{{$post->User->name}}</td>
            </tr>

            </tbody>

        </table>

    </div>
@endsection

