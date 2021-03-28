@extends('admin.master')

@section('content')

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Category</th>
            <th scope="col">Author</th>
        </tr>
        </thead>
        <tbody>

        @if(count($posts) >0 )
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
{{--                    <td>{{$post->image}}</td>--}}
                    <td>
                        <img style="height: 10vh" src="{{url($post->image)}}" alt="image">
                    </td>
                    <td>{{$post->category->name}}</td>
                    <td>{{$post->user->name}}</td>



                    <td>


                        <div class="row">

                            <div >
                                <div><a href="{{url('/pedit',$post->id)}}"  class="btn btn-primary m-2"><i class="fas fa-edit"></i></a></div>

                            </div>

                            <div >
                                <div><a href="{{url('/pview',$post->id)}}" class="btn btn-info m-2"><i class="fas fa-eye"></i></a></div>

                            </div>

                            <div >
                                <form action="{{url('/pdelete',$post->id)}}" method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2">

                                </form>

                            </div>


                        </div>
                    </td>
                </tr>

            @endforeach
        @endif

        </tbody>
    </table>
@endsection


