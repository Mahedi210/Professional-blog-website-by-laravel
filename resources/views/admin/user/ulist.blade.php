@extends('admin.master')


@section('content')

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">IMAGE</th>
            <th scope="col">NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @if(count($users) >0 )
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->image}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>


                    <td>


                        <div class="row">

                            <div >
                                <div><a href="{{url('/uedit',$user->id)}}"  class="btn btn-primary m-2"><i class="fas fa-edit"></i></a></div>

                            </div>

                            <div >
                                <div><a href="{{url('/uview',$user->id)}}" class="btn btn-info m-2"><i class="fas fa-eye"></i></a></div>

                            </div>

                            <div >
                                <form action="{{url('/udelete',$user->id)}}" method="POST" >
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

