<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
<body>

<h2>Upload new document</h2>
<?php echo Form::open(['action' => 'FunctionController@store','method' => 'POST','enctype'=>'multipart/form-data']); ?>

<div class="form-group">
    <?php echo e(Form::label('title','Title')); ?>

    <?php echo e(Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title','name'=>'title'])); ?>


    <table>
        <tr>
            <td>
                <div class="form-group">
                    <?php echo e(Form::file('doc_upload'),['name'=>'doc_upload']); ?>

                </div>
            </td>

            <td>

                <p>
                    Document Type :
                </p>


    <?php echo e(Form::select('doc_type',[
          null=>'Select Document Type: ','Available Users'=>['Personal_ID'=>'Personal ID','Driving License'=>'Driving License','Residence Confirmation'=>'Residence Confirmation','Birth Certificate'=>'Birth Certificate'],
         ],'default',['name'=>'doc_type'])); ?>


</div>
</td>
</tr>
</table>


<?php echo e(Form::submit('submit', ['class'=>'btn btn-success btn-submit'])); ?>

<?php echo Form::close(); ?>





<script type="text/javascript">

    $(document).ready(function() {

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });



    $(".btn-submit").click(function(e){



        e.preventDefault();



        var title = $("input[name=title]").val();

        var doc_upload = $("input[name=doc_upload]").val();

        var doc_type=$("input[name=doc_type]").val();




        $.ajax({

            type: 'POST',

            url: '/ajax',

            data: {title: title, doc_upload: doc_upload, doc_type: doc_type},

            success: function (data) {

                alert(data.success);


            }

        });

        });




    });

</script>

</body>




</html>




