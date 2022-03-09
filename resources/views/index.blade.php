<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jquery GetStarted</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<p>If you click on the Hide Button, I will disappear</p>
<button id="hide">Hide</button>
<button id="show">Show</button>
<script>
$(document).ready(function (){
    $('#hide').on('click',function (){
        $('p').hide();
    })
    $('#show').on('click',function (){
        $('p').show()
    })
})
</script>
</body>
</html>
