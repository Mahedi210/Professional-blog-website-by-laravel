@extends('admin.master')

@section('content')

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>

        @if(count($categories) >0 )
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->name}}</td>
                    <td>{{$category->slug}}</td>
                    <td>{{$category->description}}</td>

                    <td>


                        <div class="row">

                            <div >
                                <div><a href="{{url('/cedit',$category->id)}}"  class="btn btn-primary m-2"><i class="fas fa-edit"></i></a></div>

                            </div>

                            <div >
                                <div><a href="{{url('/cview',$category->id)}}" class="btn btn-info m-2"><i class="fas fa-eye"></i></a></div>

                            </div>

                            <div >
                                <form action="{{url('/cdelete',$category->id)}}" method="POST" >
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
