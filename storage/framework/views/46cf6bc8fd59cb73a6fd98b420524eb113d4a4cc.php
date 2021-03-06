<?php $__env->startSection('content'); ?>

    <?php if(Auth::user()->user_type=='Admin'): ?>

    <h1>Add New User</h1>

    <?php echo Form::open(['action' => 'FunctionController@store', 'method' => 'POST']); ?>

    <div class="form-group">
        <?php echo e(Form::label('first_name','First Name:')); ?>

        <?php echo e(Form::text('first_name','',['class'=> 'form-control'])); ?>

    </div>

    <div class="form-group">
        <?php echo e(Form::label('last_name','Last Name:')); ?>

        <?php echo e(Form::text('last_name','',['class'=> 'form-control'])); ?>

    </div>
    <div class="form-group">
        <?php echo e(Form::label('username','Username:')); ?>

        <?php echo e(Form::text('username','',['class'=> 'form-control'])); ?>

    </div>
    <div class="form-group">
        <?php echo e(Form::label('password','Password:')); ?>

        <?php echo Form::password('password', array('class'=>'form-control')); ?>

    </div>
    <?php echo e(Form::label('user_type','Pick Access Level: ')); ?>

    <?php echo e(Form::select('User_Type',[
                              null=>'Select User Access Level ','Access Levels:'=>['Admin'=>'Admin','Default User'=>'Default User'],
                             ],'default',['name'=>'user_type'])); ?>


    <?php echo e(Form::label('user_location','Pick Your Location(optional): ')); ?>

    <?php echo e(Form::select('User_Location',[
                              null=>'Select User Location ','Available towns:'=>['Mostar'=>'Mostar','London'=>'London','Berlin'=>'Berlin','Zagreb'=>'Zagreb','Split'=>'Split'],
                             ],'default',['name'=>'user_location'])); ?>

    <br>
    <br>
    <?php echo e(Form::submit('Submit',['class'=>'btn btn-success'])); ?> <br><br>
    <a href="/home"><button type="button"class="btn btn-success">Go Back</button></a>



    <?php echo Form::close(); ?>


    <?php else: ?>

        <h1>You are not authorized to access this page !</h1>
        <a href="/home"><button type="button"class="btn btn-success">Go Back</button></a>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>