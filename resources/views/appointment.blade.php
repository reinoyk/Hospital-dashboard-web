@extends('layouts.app')

@section('title', 'Book Appointment')

@section('content')
<!-- appointment section start -->
<div class="appointment_section">
    <div class="container">
        <div class="appointment_box">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="appointment_taital">Book <span style="color: #0cb7d6;">Appointment</span></h1>
                </div>
            </div>
            <div class="appointment_section_2">
                <form action="{{ route('appointments.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <!-- Patient Name -->
                        <div class="col-md-4">
                            <p class="doctorname_text">Patient Name</p>
                            <input type="text" class="email_text" name="patient_name" placeholder="Enter your name" required>
                        </div>

                        <!-- Department's Name -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <p class="doctorname_text">Department's Name</p>
                                <select class="form-control" name="department_id" required>
                                    <option value="" disabled selected>Select Department</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Phone Number -->
                        <div class="col-md-4">
                            <p class="doctorname_text">Phone Number</p>
                            <input type="text" class="email_text" name="phone_number" placeholder="Enter phone number" required>
                        </div>

                        <!-- Doctor's Name -->
                        <div class="col-md-4">
                            <div class="form-group">
                                <p class="doctorname_text">Doctor's Name</p>
                                <select class="form-control" name="doctor_id" required>
                                    <option value="" disabled selected>Select Doctor</option>
                                    @foreach ($doctors as $doctor)
                                        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Appointment Date -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="appointment_date">Choose Date</label>
                                <input type="date" name="appointment_date" class="form-control" id="appointment_date" required>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-md-6 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- appointment section end -->

<!-- Appointment List Section (Your Appointments) -->
<div class="container mt-5">
    <div class="appointments-container">
        <div class="col-md-12">
            <h2 class="appointment_taital">Your <span style="color: #0cb7d6;">Appointments</span></h2>
        </div>

        <!-- Success message after appointment booking -->
        @if (session('success'))
            <div class="col-md-12">
                <div class="alert" role="alert" style="max-width: 600px; margin: 0 auto;">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif

        <!-- Display appointments or "No appointments found" message -->
        <div class="col-md-12">
            @if ($appointments->count())
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Doctor's Name</th>
                            <th>Department</th>
                            <th>Phone Number</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $appointment)
                            <tr>
                                <td>{{ $appointment->doctor->name }}</td>
                                <td>{{ $appointment->department->name }}</td>
                                <td>{{ $appointment->phone_number }}</td>
                                <td>{{ $appointment->appointment_date }}</td>
                                <td>
                                    <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="no-appointments-text">No appointments found.</p>
            @endif
        </div>
    </div>
</div>
@endsection
