<html>
<head>
    <title>test ajax technology</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <style>
    .container{
        width: 960px;
        margin: 0 auto;
    }
    .menu{
        text-align: center;
    }
    </style>
</head>
<body>
<div class="container">
    <div class="menu">
        <button onclick="ajaxContent()">Нажми меня!</button>
    </div>
    <div class="ajax-result"></div>
</div>
<div class="a"></div>
<script>
    $(document).ready(function(){
        $('.menu').css({
            'width': 960,
            'heigth': 100
        });
    });
    function ajaxContent(){
        $.post('/ajax.php',{data: 'testAjax',length: '123467'},function(result){
            console.log(result);
            $('.ajax-result').text(result.test1);
        },'JSON');
    }

</script>
</body>
</html>