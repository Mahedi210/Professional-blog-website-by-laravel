@extends('admin.master')

@section('content')

    <form action="{{url('/update',$post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf



        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Post title</label>
                <input type="text" class="form-control" name="title" value="{{$post->title}}" placeholder="title name">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Post Image</label>
                <img style="height: 50vh"  src="{{url($post->image)}}" class="img-thumbnail">
                <input type="file" class="form-control-file" name="image" placeholder="image" >
            </div>
        </div>




        <div class="form-group">
            <label for="inputAddress">Description</label>
            <textarea type="text" class="form-control col-form-label-lg" name="description"  placeholder="Description">{{$post->description}}</textarea>
        </div>

        <div class="form-group">

            @foreach($tags as $tag)

                <div class="form-check">
                    <input class="form-check-input" name="tags[]" type="checkbox" value="{{$tag->id}}" id="tag{{$tag->id}}">
                    <label class="form-check-label" for="tag{{$tag->id}}">
                        {{$tag->name}}
                    </label>
                </div>

            @endforeach
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Post Category</label>

                <select name="category" id="category" class="form-control">
                    <option value="{}" style="display: none" selected>{{$post->category->name}}</option>
                    @foreach($categories as $category)

                        <option value="{{$category->id}}">{{$category->name}}</option>

                    @endforeach

                </select>
            </div>
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection

