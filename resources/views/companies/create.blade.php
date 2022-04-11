@extends('layouts.app')

@section('content')
    <div class="container bg-black p-3 text-white">

        <h1>Add a company</h1>

        <form method="POST" action="{{url('/companies')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Company Name</label>
                <input type="text" class="form-control" name="name"  placeholder="Enter name" value="{{old('name')}}">
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{old('email')}}">
                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
                <label for="website">Company Website</label>
                <input type="text" class="form-control" name="website"  placeholder="Enter website" value="{{old('website')}}">
            </div>

            <div class="form-group">
                <label for="logo">Image</label>
                <input type="file" class="form-control" name="logo"  value="{{old('logo')}}" >
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>

    </div>

@endsection
