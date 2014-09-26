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
            overflow: auto;
        }
        .wrapper {
            position: relative;
            height: 10000px;
            overflow: hidden;
        }
        .full-height: { height: 10000px; }

        .chat-form {
            height: 180px;
        }
        .messages {
            position: absolute;
            top: 0;
            opacity: 0.2;
            height: 100%;
        }

        iframe {
            width: 600px;
            height: 600px;
            border: 0;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row chat-messages">
        <div class="wrapper">
            <div class="full-height"></div>
            <iframe name="result" class="messages" src="chat.php?s=1"></iframe>
            <iframe class="messages" src="chat.php?s=1"></iframe>
            <iframe class="messages" src="chat.php?s=2"></iframe>
            <iframe class="messages" src="chat.php?s=3"></iframe>
            <iframe class="messages" src="chat.php?s=4"></iframe>
            <iframe class="messages" src="chat.php?s=5"></iframe>
            <iframe class="messages" src="chat.php?s=6"></iframe>
            <iframe class="messages" src="chat.php?s=7"></iframe>
        </div>
    </div>
    <div class="row chat-form">
        <form role="form" target="result" action="save.php">
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