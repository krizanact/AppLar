
<?php if(auth()->guard()->guest()): ?>
                        <!-- Only login page possible without logging in. -->

<?php else: ?>

    <nav class="navbar navbar-expand-md navbar-inverse bg-dark navbar-laravel">
        <div class="container">


            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Right Side Of Navbar -->

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?> <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right navbar-inverse bg-dark ">
                                <a class="dropdown-item "id="link" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                    </li>

                    <?php endif; ?>

                </ul>
            </div>
        </div>

    </nav>
