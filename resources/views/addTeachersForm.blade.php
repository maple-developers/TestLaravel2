@extends('layouts.layout')
@section('main_content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                @foreach ($errors->all() as $error)
                    <h1>{{ $error }}</h1>
                @endforeach
            </div>
            <form action="" method="post">
                @csrf
                <div class="col-lg-4 mt-2">
                    <div class="form-group">
                        <label for="teacherName">Name</label>
                        <input type="text" class="form-control" id="teacherName" name="teacherName"
                            aria-describedby="emailHelp" placeholder="Enter email" value="{{ $teachers['name'] }}">
                    </div>
                    <div class="form-group">
                        <label for="teacherEmail">Email address</label>
                        <input type="email" class="form-control" id="teacherEmail" name="teacherEmail"
                            aria-describedby="emailHelp" placeholder="Enter email" value="{{ $teachers['email'] }}">
                    </div>
                    <div class="form-group">
                        <label for="teacherPassword">Password</label>
                        <input type="password" class="form-control" name="teacherPassword" id="teacherPassword"
                            placeholder="Password" value="{{ $teachers['password'] }}">
                    </div>
                    @if (!isset($teachers))
                        <div class="form-group">
                            <label for="teacherRePassword">Re-Password</label>
                            <input type="password" class="form-control" name="teacherRePassword" id="teacherRePassword"
                                placeholder="Password">
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary" id="addformSubmin"
                                name="addformSubmin">Submit</button>
                        </div>
                    @else
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary" id="addformSubmin"
                                name="addformSubmin">UPDATE</button>
                        </div>
                    @endif

                </div>
            </form>
        </div>
    </div>
@endsection
