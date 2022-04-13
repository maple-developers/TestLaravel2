@extends('layouts.layout')
@section('main_content')
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <table class="table">
            <thead>
                <tr>
                    <th>Teacher ID</th>
                    <th>Teacher Name</th>
                    <th>Teacher Email</th>
                    <th>Teacher password</th>
                    <th>Teacher Edit</th>
                    <th>Teacher Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher['id'] }}</td>
                        <td>{{ $teacher['name'] }}</td>
                        <td>{{ $teacher['email'] }}</td>
                        <td>{{ $teacher['password'] }}</td>
                        <td><a href="/updateTeacher/{{ $teacher['id'] }}" class="btn btn-warning">UPDATE</a></td>
                        <td><a href="/deleteTeacher/{{ $teacher['id'] }}" class="btn btn-danger">DELETE</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-lg-4"></div>
@endsection
