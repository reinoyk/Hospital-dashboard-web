<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;


class AppointmentController extends Controller
{
    public function index(){
        // Fetch departments, doctors, and appointments for the logged-in user
        $departments = Department::all();
        $doctors = Doctor::all();
        $appointments = Appointment::where('user_id', Auth::id())->get();

        // Pass all data to the view
        return view('appointment', compact('departments', 'doctors', 'appointments'));
    }


    // Menampilkan form create appointment
    public function create()
    {
        $departments = Department::all();
        $doctors = Doctor::all();
        // Ambil semua appointment dari user yang sedang login
        $appointments = Appointment::where('user_id', Auth::id())->get();

        return view('appointment', compact('departments', 'doctors', 'appointments'));
    }

    // Menyimpan data appointment
    public function store(Request $request)
    {
        $request->validate([
            'patient_name' => 'required|string|max:255',
            'department_id' => 'required|exists:departments,id',
            'doctor_id' => 'required|exists:doctors,id',
            'phone_number' => 'required|string|max:15',
            'appointment_date' => 'required|date',
        ]);

        Appointment::create([
            'user_id' => Auth::id(),
            'patient_name' => $request->patient_name,
            'department_id' => $request->department_id,
            'doctor_id' => $request->doctor_id,
            'phone_number' => $request->phone_number,
            'appointment_date' => $request->appointment_date,
        ]);

        return redirect()->route('appointments.index')->with('success', 'Appointment booked successfully!');
    }

    public function destroy($id){
        $appointment = Appointment::findOrFail($id);

        // Hanya izinkan pengguna yang membuat appointment untuk menghapus
        if ($appointment->user_id == Auth::id()) {
            $appointment->delete();
            return redirect()->route('appointments.index')->with('success', 'Appointment deleted successfully!');
        } else {
            return redirect()->route('appointments.index')->with('error');
        }
    }

}
