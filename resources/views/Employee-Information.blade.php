@extends('layouts.master')

@section('title', 'Employee Information')

@section('content')
    <div class="container-fluid main-bg">
        <div class="row header">
            <p class="head-text">Employee Data</p>
        </div>
        <div class="container  emp-data">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">City</th>
                        <th scope="col">Age</th>
                        <th scope="col">Salary</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $id => $emp)
                        <tr>
                            <td>{{ $emp->id }}</td>
                            <td>{{ $emp->name }}</td>
                            <td>{{ $emp->email }}</td>
                            <td>{{ $emp->city }}</td>
                            <td>{{ $emp->age }}</td>
                            <td>{{ $emp->salary }}</td>
                        </tr>
                    @endforeach
                    <tr height="50"></tr>
                    <tr>
                        <td style="text-align: center" colspan="6">
                            <a href="{{ route('home') }}" class="btn view-bt">Back To Home</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

