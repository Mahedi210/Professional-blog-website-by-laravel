@extends('admin.master')

@section('content')
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
        </tr>
        </thead>
        <tbody>

        @if(count($contacts) >0 )
            @foreach($contacts as $contact)
                <tr>
                    <th scope="row">{{$contact->id}}</th>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->subject}}</td>
                    <td>{{$contact->message}}</td>

                    <td>


                        <div class="row">

                            <div >
                                <div><a href="#"  class="btn btn-primary m-2"><i class="fas fa-edit"></i></a></div>

                            </div>

                            <div >
                                <div><a href="#" class="btn btn-info m-2"><i class="fas fa-eye"></i></a></div>

                            </div>

                            <div >
                                <form action="#" method="POST" >
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
