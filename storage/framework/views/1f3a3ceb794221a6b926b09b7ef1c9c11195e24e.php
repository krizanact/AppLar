<?php $__env->startSection('content'); ?>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-100%">
            <div class="card">
                <div class="card">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>


                    <?php endif; ?>
                        <div class="row justify-content-center">
                    You are logged in!
                        </div>


                </div>

                <table border="2"   width="100%">
                    <thead align="center" >
                    <tr>

                        <th>Name</th>
                        <th>User Type</th>
                        <th>User Location</th>
                        <?php if(Auth::user()->user_type=='Admin'): ?>
                        <th>Edit</th>
                        <th>Delete</th>
                        <?php endif; ?>

                    </tr>
                    </thead>

                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr align="center">
                            <td>
                                <?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?>

                            </td>

                            <td>
                                <?php echo e($user->user_type); ?>

                            </td>
                            <td>
                                <?php echo e($user->user_location); ?>

                            </td>
                            <?php if(Auth::user()->user_type=='Admin' &&( $user->user_type=='Default User'||Auth::user()->id ==$user->id )): ?>
                            <td>
                                <a href="users/<?php echo e($user->id); ?>/edit"><button type="button" class="btn btn-primary">Edit</button></a>
                            </td>
                            <td>


                                <!-- Bootstrap code/Modal Window -->

                                <button type="button" class="btn btn-danger btn-submit" data-toggle="modal" data-target="#myModal<?php echo e($user->id); ?>">Delete</button>

                                <!-- Modal content-->

                                <div id="myModal<?php echo e($user->id); ?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog">


                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"> </h4>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Are you sure you want to delete this user ?</h5>

                                            </div>
                                            <div class="modal-footer">
                                                <?php echo Form::open(['action'=> ['FunctionController@destroy',$user->id], 'method' =>'POST', 'class' => 'pull-right']); ?>

                                                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                                                <?php echo e(Form::submit('Yes', ['class'=> 'btn btn-primary'])); ?>

                                                <?php echo Form::close(); ?>

                                                <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>

                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </td>
                                <?php endif; ?>
                        </tr>



                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    <?php if(Auth::user()->user_type=='Admin'): ?>
                    <div class="row justify-content-center">
                        <a href="/users/create" class="btn btn-primary">Add New User</a>
                    </div>
                        <?php endif; ?>

                </table>

                </div>
            </div>
        </div>
    </div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>