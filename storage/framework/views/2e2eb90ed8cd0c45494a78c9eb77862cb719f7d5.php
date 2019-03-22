<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
 <p> Welcome !!</p>

    <ul id="tablica">

 </ul>

 <button id="pozovi_ajax">Pozovi</button>

 <script>

     $('#pozovi_ajax').click(function(){

         $.ajax({
             url:'/podaci',
             success: function (data) {

                 $('#tablica').append('<li>' + data + '</li>');
             }
         })

     });

     $.ajax({
         url:'/podaci',
         success: function (data) {

             console.log(data);

             for (var i = 0; i < data.length; i++) {
                 $('#tablica').append('<li>' + data[i] + '</li>');
             }

             //$('#tablica').append('<li>' + data + '</li>');
         }
     })



 </script>

</body>
</html>