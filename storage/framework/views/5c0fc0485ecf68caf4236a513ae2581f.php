<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/jquery.mCustomScrollbar.min.css')); ?>">

    <!-- Fonts and Icons -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Poppins:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="icon" href="<?php echo e(asset('images/fevicon.png')); ?>" type="image/gif">

    <!-- Additional Styles (if any) -->
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
    <!-- Header Top Section -->
    <div class="header_top_section">
        <div class="header_top_container">
            <!-- Left section (Call) -->
            <div class="header_top_main">
                <span class="call_text">
                    <a href="tel:+6283478293023">
                        Call: +62 83478293023
                    </a>
                </span>
            </div>

            <!-- Center section (Email) -->
            <div class="header_top_main">
                <span class="call_text_2">
                    <a href="mailto:aeonmed@gmail.com">
                        aeonmed@gmail.com
                    </a>
                </span>
            </div>

            <!-- Right section (Login and Register / Account and Logout) -->
            <div class="header_top_right">
                <?php if(auth()->guard()->guest()): ?>
                    <!-- Jika user belum login, tampilkan Login dan Register -->
                    <a href="<?php echo e(route('login')); ?>" class="btn btn-primary">Login</a>
                    <a href="<?php echo e(route('register')); ?>" class="btn btn-secondary">Register</a>
                <?php else: ?>
                    <!-- Jika user sudah login, tampilkan logo akun dan tombol Logout -->
                    <a href="#" class="account-logo">
                        <img src="<?php echo e(asset('images/account.png')); ?>" alt="Account" class="h-8 w-8 rounded-full" />
                    </a>
                    <form method="POST" action="<?php echo e(route('logout')); ?>" style="display: inline;">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>


    <!-- Header Section -->
    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <div class="logo-text">Aeon Medical Center</div>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar links (if needed) -->
                </div>
            </nav>

            <div class="custom_bg">
                <div class="custom_menu">
                    <ul>
                        <li class="active"><a href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li><a href="<?php echo e(url('/about')); ?>">About</a></li>
                        <li><a href="<?php echo e(url('/treatment')); ?>">Treatment</a></li>
                        <li><a href="<?php echo e(url('/doctors')); ?>">Doctors</a></li>
                        <li><a href="<?php echo e(url('/appointment')); ?>">Appointment</a></li>
                    </ul>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer Section -->
    <div class="footer_section">
        <div class="container">
            <div class="input_bt">
                <input type="text" class="mail_bt" placeholder="Enter Your Email">
                <span class="subscribe_bt"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_section_2">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <h3 class="footer_taital">Address</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-map-marker"></i> Making this the first true</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i> Call: +62 83478293023</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> Email: aeonmed@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h3 class="footer_taital">Help & Support</h3>
                        <p>Our dedicated team is here to assist you with any questions...</p>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h3 class="footer_taital">Our Services</h3>
                        <ul>
                            <li>Comprehensive Checkups</li>
                            <li>Specialist Consultations</li>
                            <li>Emergency Care</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <h3 class="footer_taital">Opening Hours</h3>
                        <ul>
                            <li>Mon-Fri: 8:00 AM - 8:00 PM</li>
                            <li>Sat: 9:00 AM - 5:00 PM</li>
                            <li>Sun: Closed</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH D:\Kuliah\WEB DEV\test3\resources\views/layouts/app.blade.php ENDPATH**/ ?>