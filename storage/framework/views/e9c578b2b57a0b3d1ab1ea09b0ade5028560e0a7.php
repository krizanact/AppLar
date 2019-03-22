
<nav class="navbar navbar-expand-md navbar-light navbar-laravel bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <?php echo e(config('app.name', 'Application')); ?>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>
            <ul class="nav navbar-nav">
                <a class="nav-item " href="/">Login</a>
                <a class="nav-item " href="/">Registration</a>
                <a class="nav-item " href="/functions">Blog</a>

            </ul>
        </div>
    </div>
</nav>
