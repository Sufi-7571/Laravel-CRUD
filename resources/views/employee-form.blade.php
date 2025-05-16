@extends('layouts.master')

@section('title', 'Employee Registration Form')

@section('content')
    <div class="container-fluid main-bg">
        <div class="row header">
            <p class="head-text">Register Employee</p>
        </div>
        <form action="{{ route('emp.insert') }}" method="POST" class="container mt-4">
            @csrf

            <div class="mb-1">
                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email (optional)</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Age <span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="age" name="age" placeholder="Enter age" required>
            </div>

            <div class="mb-3">
                <label for="city" class="form-label">City (optional)</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Enter city">
            </div>

            <div class="mb-3">
                <label for="salary" class="form-label">Salary (optional)</label>
                <input type="number" class="form-control" id="salary" name="salary" placeholder="Enter salary">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn view-bt" style="width: 300px;">Add Employee</button>
            </div>

        </form>
    </div>


@endsection
