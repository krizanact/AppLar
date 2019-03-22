<?php $__env->startSection('content'); ?>

    <h2>Upload new document</h2>

    <?php echo Form::open(['action' => ['FunctionController@store'],'method' => 'POST','enctype'=>'multipart/form-data','id'=>'form']); ?>


    <div class="form-group">
        <?php echo e(Form::label('title','Title')); ?>

        <?php echo e(Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title','name'=>'title'])); ?>


        <table>
            <tr>
                <td>
                    <div class="form-group">
                        <?php echo e(Form::file('doc_upload'),['name'=>'doc_upload','doc_upload' =>'nullable|required|max:1999']); ?>

                    </div>
                </td>

                <td>

                    <p>
                        Document Type :
                    </p>


                    <?php echo e(Form::select('doc_type',[
                                  null=>'Select Document Type: ','Available Users'=>['Personal_ID'=>'Personal ID','Driving License'=>'Driving License','Residence Confirmation'=>'Residence Confirmation','Birth Certificate'=>'Birth Certificate'],
                                 ],'default',['name'=>'doc_type'])); ?>

                </td>
            </tr>
        </table>
    </div>



    <?php echo e(Form::submit('Submit', ['class'=>'btn btn-success btn-submit'])); ?>

    <?php echo Form::close(); ?>


    <?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>