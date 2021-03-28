@extends('admin.master')

@section('content')

    <form action="{{url('/update',$tag->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="text" class="form-control" name="name" value="{{$tag->name}}" placeholder="name">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Description</label>
            <textarea type="text" class="form-control col-form-label-lg" name="description"   placeholder="Description">{{$tag->description}}</textarea>
        </div>


        <button type="submit" class="btn btn-primary">Update Category</button>
    </form>



@endsection
