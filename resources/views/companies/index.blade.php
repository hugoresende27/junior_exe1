@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="text-white">Companies</h1>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Logo</th>
                <th scope="col">Website</th>
                <th class="nav-item dropdown">Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($companies as $company)
                <tr>
                    <th scope="row">{{$company->id}}</th>
                    <th scope="row">{{$company->name}}</th>
                    <th scope="row">{{$company->email}}</th>
                    <th scope="row">{{$company->logo ?? 'no logo'}}</th>
                    <th scope="row">{{$company->website}}</th>

                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="/companies/{{$company->id}}/edit">Edit</a>

                                <form action="/companies/{{ $company->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                            class="dropdown-item"
                                            onclick="return confirm('Are you sure?')"
                                    > Delete </button>

                                </form>


                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
