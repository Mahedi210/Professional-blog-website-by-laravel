@extends('admin.master')

@section('content')

    <form action="{{url('/update',$category->id)}}" method="POST">
        @csrf

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="text" class="form-control" name="name" value="{{$category->name}}" placeholder="name">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Description</label>
            <textarea type="text" class="form-control col-form-label-lg" name="description"   placeholder="Description">{{$category->description}}</textarea>
        </div>


        <button type="submit" class="btn btn-primary">update category</button>
    </form>



@endsection
