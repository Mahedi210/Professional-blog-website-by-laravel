@extends('admin.master')

@section('content')
    <div class="col-lg-3">
        <div class="card-body text-center">
{{--            <img src="" alt="" class="img-fluid">--}}
            <img  src="{{url($user->image)}}" class="img-fluid rounded-circle">
            <h5>{{$user->name}}</h5>
            <p>{{$user->email}}</p>


        </div>

    </div>
    <form action="{{url('/proupdate')}}" method="POST" enctype="multipart/form-data">
        @csrf
{{--        {{method_field('PUT')}}--}}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="text" class="form-control" name="name" value="{{$user->name}}" placeholder="name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="email">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">User password</label>
                <input type="password" class="form-control" name="password" placeholder="please enter password">
            </div>

        </div>


        <div class="form-group col-md-6 mt-3">

            <h3>Description</h3>
            <textarea class="form-control" name="description" rows="5">{{$user->description}}</textarea>

        </div>



        <div class="form-group col-md-3 mt-3">
            <h3>Image</h3>
            <img style="height: 50vh"  src="" class="img-thumbnail">
            <input class="mt-3" type="file"  name="image">
        </div>









        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@endsection
