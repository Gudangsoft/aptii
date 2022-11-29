<header class="header-style-1">
    <div class="header-navbar navbar-sticky">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="site-logo">
                    <a href="index.html">
                        <img src="<?php echo e(asset('frontend')); ?>/images/logo.png" alt="" class="img-fluid" />
                    </a>
                </div>

                <div class="offcanvas-icon d-block d-lg-none">
                    <a href="#" class="nav-toggler"><i class="fal fa-bars"></i></a>
                </div>

                <div class="header-category-menu d-none d-xl-block">
                    <ul>
                        <li class="has-submenu">
                            <a href="#"><i class="fa fa-th me-2"></i>Categories</a>
                            <ul class="submenu">
                                <li>
                                    <a href="#">Design</a>
                                    <ul class="submenu">
                                        <li><a href="#">Design Tools</a></li>
                                        <li><a href="#">Photoshop mastering</a></li>
                                        <li><a href="#">Adobe Xd Deisgn</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Developemnt</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">Freelancing</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <nav class="site-navbar ms-auto">
                    <ul class="primary-menu">
                        <li class="current">
                            <a href="index.html">Home</a>
                            <ul class="submenu">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                                <li><a href="index-3.html">Home Three</a></li>
                                <li><a href="index-4.html">Home Four</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>

                        <li>
                            <a href="courses.html">Courses</a>
                            <ul class="submenu">
                                <li><a href="courses.html">Courses</a></li>
                                <li><a href="courses-2.html">Course Grid 2 </a></li>
                                <li><a href="courses-3.html">Course Grid 3</a></li>
                                <li><a href="courses-4.html">Course Grid 4</a></li>
                                <li><a href="courses-5-list.html">Course List</a></li>
                                <li>
                                    <a href="#">Single Layout</a>
                                    <ul class="submenu">
                                        <li><a href="course-single.html">Course Single 1</a></li>
                                        <li><a href="course-single-2.html">Course Single 2</a></li>
                                        <li><a href="course-single-3.html">Course Single 3</a></li>
                                        <li><a href="course-single-4.html">Course Single 4</a></li>
                                        <li><a href="course-single-5.html">Course Single 5</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Pages</a>
                            <ul class="submenu">
                                <li><a href="instructor.html">Instructors</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="Register.html">Register</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="blog.html">Blog</a>
                            <ul class="submenu">
                                <li><a href="blog-grid.html">Blog </a></li>
                                <li><a href="blog-single.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>

                    <a href="#" class="nav-close"><i class="fal fa-times"></i></a>
                </nav>

                <div class="header-btn d-none d-xl-block">
                    <?php if(Auth::check()): ?>
                        
                        <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-main-2 btn-sm-2 rounded"><i class="fa fa-cog"></i><span> DASHBOARD</span></a>

                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="login">Login</a>
                        <a href="<?php echo e(route('register')); ?>" class="btn btn-main-2 btn-sm-2 rounded">Sign up</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH /home/jarwonozt/Desktop/WEB/aptii/data/resources/views/client/layouts/header.blade.php ENDPATH**/ ?>