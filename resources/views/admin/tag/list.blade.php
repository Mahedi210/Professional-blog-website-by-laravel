@extends('admin.master')

@section('content')

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @if(count($tags) >0 )
            @foreach($tags as $tag)
                <tr>
                    <th scope="row">{{$tag->id}}</th>
                    <td>{{$tag->name}}</td>
                    <td>{{$tag->slug}}</td>
                    <td>{{$tag->description}}</td>


                    <td>


                        <div class="row">

                            <div >
                                <div><a href="{{url('/edit',$tag->id)}}"  class="btn btn-primary m-2"><i class="fas fa-edit"></i></a></div>

                            </div>

                            <div >
                                <div><a href="{{url('/view',$tag->id)}}" class="btn btn-info m-2"><i class="fas fa-eye"></i></a></div>

                            </div>

                            <div >
                                <form action="{{url('/delete',$tag->id)}}" method="POST" >
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

