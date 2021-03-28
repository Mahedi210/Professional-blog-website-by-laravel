@extends('admin.master')

@section('content')

    <form action="{{url('/usave')}}" method="POST">
        @csrf
        {{method_field('PUT')}}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="text" class="form-control" name="name" placeholder="name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" name="email" placeholder="email">
            </div>
        </div>

        <div class="form-group">
            <label for="inputAddress">Description</label>
            <textarea type="text" class="form-control col-form-label-lg" name="description"  placeholder="Description"></textarea>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">User password</label>
                <input type="password" class="form-control" name="password" placeholder="please enter password">
            </div>

        </div>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



@endsection

