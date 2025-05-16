@extends('layouts.master')

@section('title', 'Employee Data')

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
                        <th scope="col">Info</th>
                        <th scope="col">Update</th>
                        <th scope="col">Remove</th>
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
                            <td><a href="{{ route('emp.info', $emp->id) }}" class="btn view-bt">View</a></td>
                            <td><a href="{{ route('emp.update.page', $emp->id) }}" class="btn update-bt">Update</a></td>
                            <td><a href="{{ route('emp.delete', $emp->id) }}"  class="btn remove-bt">Remove</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="container pag-container">
            <div class="paginate pag">
                {{ $data->links() }}
            </div>
            <div class="btns">
                <div class="new-emp">
                    <a href="{{ route('emp.add') }}" class="btn view-bt">Add New Employee</a>
                </div>
                <div class="delete-emp">
                    <button type="button" class="btn remove-bt" onclick="confirmDelete()">Delete All Employee</button>
                </div>
            </div>
        </div>
    </div>
@endsection
