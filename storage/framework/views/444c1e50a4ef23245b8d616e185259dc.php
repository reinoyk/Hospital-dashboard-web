

<?php $__env->startSection('title', 'Our Doctors'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Doctors Section Start -->
    <div class="doctores_section margim_90">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="doctores_taital">Our Doctors</h1>
                </div>
            </div>
            <div class="doctores_section_2">
                <div id="my_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <!-- Doctor 1 -->
                                <div class="col-md-4">
                                    <div class="doctores_box">
                                        <div class="image_1">
                                            <img src="<?php echo e(asset('images/doctor1.jpeg')); ?>" alt="Doctor 1">
                                        </div>
                                        <h4 class="humour_text">Dr. Waqas Khan<br><span class="mbbs_text">Cardiologist at Lancashire</span></h4>
                                        <!-- Add rating section -->
                                        <div class="rating">
                                            <span class="doctor_rating" data-doctor-id="1" data-rating="0">☆☆☆☆☆</span>
                                            <p id="rating-value-1">0/5</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Doctor 2 -->
                                <div class="col-md-4">
                                    <div class="doctores_box">
                                        <div class="image_1">
                                            <img src="<?php echo e(asset('images/doctor2.jpeg')); ?>" alt="Doctor 2">
                                        </div>
                                        <h4 class="humour_text">Dr. Leonardo Petrus<br><span class="mbbs_text">Neurologist</span></h4>
                                        <div class="rating">
                                            <span class="doctor_rating" data-doctor-id="2" data-rating="0">☆☆☆☆☆</span>
                                            <p id="rating-value-2">0/5</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Doctor 3 -->
                                <div class="col-md-4">
                                    <div class="doctores_box">
                                        <div class="image_1">
                                            <img src="<?php echo e(asset('images/doctor3.jpeg')); ?>" alt="Doctor 3">
                                        </div>
                                        <h4 class="humour_text">Dr. Kautsarrahman<br><span class="mbbs_text">General Doctor</span></h4>
                                        <div class="rating">
                                            <span class="doctor_rating" data-doctor-id="3" data-rating="0">☆☆☆☆☆</span>
                                            <p id="rating-value-3">0/5</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Doctors Section End -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const stars = document.querySelectorAll('.doctor_rating');

        stars.forEach(star => {
            star.addEventListener('click', function (event) {
                const doctorId = this.getAttribute('data-doctor-id');
                let currentRating = event.target.dataset.rating;
                const rating = prompt("Rate from 1 to 5:", currentRating); // Replace with a better UI input for rating

                if (rating >= 1 && rating <= 5) {
                    document.getElementById(`rating-value-${doctorId}`).innerText = `${rating}/5`;
                    saveRating(doctorId, rating);
                } else {
                    alert('Please enter a valid rating between 1 and 5.');
                }
            });
        });

        function saveRating(doctorId, rating) {
            // Send an AJAX request to your server to save the rating
            fetch(`/rate-doctor/${doctorId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>' // Important for Laravel POST requests
                },
                body: JSON.stringify({ rating })
            })
            .then(response => response.json())
            .then(data => {
                console.log('Rating saved:', data);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        }
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Kuliah\WEB DEV\test3\resources\views/doctors.blade.php ENDPATH**/ ?>