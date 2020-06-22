
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat System</title>
    <!-- <link rel="stylesheet" href="style.css" type="text/css"> -->
    <style>
        .centeralised{
	margin:10px auto;
	width:1000px;
	text-align:center;
}
.clearchat{
    width:30%;
    height:55px;
    background:#33ff33;
}


.chathistory{
	min-height:600px;
	width:100%;
	margin:10px auto;
	padding:10px;
	background:#f1f1f1;
	text-align:left;
}


.txtarea{
	min-height:100px;
	width:100%;
	margin:10px auto;
    padding:10px;
    text-align:left;
    font-size:25px;
}

.siglemessage{
	font-size:32px;
    padding:5px;
	border-bottom:1px solid #b3b3b3;
}
    </style>
    <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

</head>
<body>
    <div>
    <div class="chathistory"></div>

        <div class="chatbox">
            <form action="" method="POST">
                <textarea name="message" id="message" class="txtarea">
                
                </textarea>
                
            </form>
            <button onclick="clearchat();" class="clearchat">Clear Chat</button>
        </div>
    </div>

    <script>

        $(document).ready(function(){
            loadChat();
        });
        $('#message').keyup(function(e){
            var message=$(this).val();
            if(e.which == 13){
                $.post('handlers/ajax.php?action=SendMessage&message='+message,function(response){
                loadChat();
                $('#message').val('');
                });
            }
        });

        function loadChat(){
            $.post('handlers/ajax.php?action=getChat',function(response){
                $('.chathistory').html(response);
                check();
            });
        }

        setInterval(function(){
            loadChat();     
        },2000);
        function clearchat(){
            $.post('handlers/ajax.php?action=clearChat',function(response){
                $('.clearchat').html(response);
            });
        }
        function check(){
            $.post('handlers/ajax.php?action=check',function(response){
                $('#message').html(response);
            });
        }
    </script>

</body>
</html>