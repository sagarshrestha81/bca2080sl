<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<button class="btn">Click</button>
<input type="text" class="input">




<script src="./jquery.js"></script>

<script >
    $(".btn,.btn2").click(function(){
    // const name =  $(".input").val();
    // console.log(name);
    $(".input").val("qwerty");
    $(this).css("background-color","yellow").text("Clicked");;


    });

</script>

    
</body>
</html>