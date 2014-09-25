<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Chat Challenge</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .container {
            width: 600px;
        }
        .chat-messages {
            margin-top: 20px;
            height: 600px;
        }

        .chat-form {
            height: 180px;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row chat-messages">
        <iframe class="messages" src="chat.php"></iframe>
    </div>
    <div class="row chat-form">
        <form role="form" action="save.php">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Ваше имя"
                       value="<?php echo $_SESSION['name']; ?>">
            </div>
            <div class="input-group">
                <input type="text" class="form-control" name="text" placeholder="Сообщение">
                <span class="input-group-btn">
                    <input type="submit" class="btn btn-default" id="btn-chat" value="Послать"/>
                </span>
            </div>
        </form>
    </div>
</div>
</body>
</html>