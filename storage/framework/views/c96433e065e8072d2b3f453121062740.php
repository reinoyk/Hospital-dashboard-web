

<?php $__env->startSection('title', 'Book Appointment'); ?>

<?php $__env->startSection('content'); ?>
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
                <form action="<?php echo e(route('appointments.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
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
                                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                    <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($doctor->id); ?>"><?php echo e($doctor->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        <?php if(session('success')): ?>
            <div class="col-md-12">
                <div class="alert" role="alert" style="max-width: 600px; margin: 0 auto;">
                    <?php echo e(session('success')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        <?php endif; ?>

        <!-- Display appointments or "No appointments found" message -->
        <div class="col-md-12">
            <?php if($appointments->count()): ?>
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
                        <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($appointment->doctor->name); ?></td>
                                <td><?php echo e($appointment->department->name); ?></td>
                                <td><?php echo e($appointment->phone_number); ?></td>
                                <td><?php echo e($appointment->appointment_date); ?></td>
                                <td>
                                    <form action="<?php echo e(route('appointments.destroy', $appointment->id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p class="no-appointments-text">No appointments found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\WEB DEV\test3\resources\views/appointment.blade.php ENDPATH**/ ?>