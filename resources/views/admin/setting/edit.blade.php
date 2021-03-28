@extends('admin.master')

@section('content')


    <form action="{{url('/update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="PostName">Post name</label>
                <input type="text" class="form-control" name="name" placeholder="post name">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputLogo">Site Logo</label>
                <input type="file" class="form-control-file" name="site_logo" placeholder="site logo" >
            </div>
        </div>


        <div class="form-group">
            <label for="inputAbout">About Site</label>
            <textarea type="text" class="form-control col-form-label-lg" name="about_site"  placeholder="Dabout site"></textarea>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputFacebook">Facebook Link</label>
                <input type="text" class="form-control" name="facebook" placeholder="facebook link">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputTwitter">Twitter Link</label>
                <input type="text" class="form-control" name="twitter" placeholder="Twitter link">
            </div>
        </div>




        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputInst">Instragram Link</label>
                <input type="text" class="form-control" name="inst" placeholder="Instragram link">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputReddite">Reddite Link</label>
                <input type="text" class="form-control" name="reddite" placeholder="Reddite link">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email id ">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCopy">Copy Right</label>
                <input type="text" class="form-control" name="copy_right" placeholder="Copy Right">
            </div>
        </div>

         <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCopy">Address</label>
                <input type="address" class="form-control" name="address" placeholder="input address">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCopy">Contact Number</label>
                <input type="text" class="form-control" name="phone_number" placeholder="input address">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection


