@extends('admin.master')

@section('content')

    <form action="{{url('/uupdate',$user->id)}}" method="POST">
        @csrf


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

        <div class="form-group">
            <label for="inputAddress">Description</label>
            <textarea type="text" class="form-control col-form-label-lg" name="description"  placeholder="Description">{{$user->description}}</textarea>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">User password</label>
                <input type="password" class="form-control" name="password" placeholder=" not showing">
            </div>

        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
