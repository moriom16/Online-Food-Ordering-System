<?php include_once("connection.php"); ?>

<?php


session_start();

$menu_query = "SELECT DISTINCT email FROM `chat`";
$query_run = mysqli_query($link, $menu_query);



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    html,
    body {
        height: 100%;
        width: 100%;
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    body {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    ::-webkit-scrollbar {
        width: 4px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #4c4c6a;
        border-radius: 2px;
    }

    .chatbox {
        width: 1000px;
        height: 700px;
        max-height: 600px;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        box-shadow: 0 0 4px rgba(0, 0, 0, .14), 0 4px 8px rgba(0, 0, 0, .28);
    }

    .chat-window {
        flex: auto;
        max-height: calc(100% - 60px);
        padding: 20px;
        overflow: auto;
    }

    .chat-input {
        flex: 0 0 auto;
        height: 60px;
        background: #1442ec;
        border-top: 1px solid #2671ff;
        box-shadow: 0 0 4px rgba(0, 0, 0, .14), 0 4px 8px rgba(25, 1, 1, 0.28);
    }

    .chat-input input {
        height: 59px;
        line-height: 60px;
        outline: 0 none;
        border: none;
        width: calc(100% - 60px);
        color: #0e0e0e;
        text-indent: 10px;
        font-size: 12pt;
        padding: 0;

    }

    .chat-input button {
        float: right;
        outline: 0 none;
        border: none;
        background: rgb(255, 255, 255);
        height: 40px;
        width: 40px;
        border-radius: 50%;
        padding: 2px 0 0 0;
        margin: 10px;
        transition: all 0.15s ease-in-out;
    }

    .chat-input input[good] + button {
        box-shadow: 0 0 2px rgba(0, 0, 0, .12), 0 2px 4px rgba(0, 0, 0, .24);
        background: #2671ff;
    }

    .chat-input input[good] + button:hover {
        box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .chat-input input[good] + button path {
        fill: white;
    }

    .msg-container {
        position: relative;
        display: inline-block;
        width: 100%;
        margin: 0 0 10px 0;
        padding: 0;
    }

    .msg-box {
        display: flex;
        background: #5b5e6c;
        padding: 10px 10px 0 10px;
        border-radius: 0 6px 6px 0;
        max-width: 80%;
        width: auto;
        float: left;
        box-shadow: 0 0 2px rgba(0, 0, 0, .12), 0 2px 4px rgba(0, 0, 0, .24);
    }

    .user-img {
        display: inline-block;
        border-radius: 50%;
        height: 40px;
        width: 40px;
        background: #2671ff;
        margin: 0 10px 10px 0;
    }

    .flr {
        flex: 1 0 auto;
        display: flex;
        flex-direction: column;
        width: calc(100% - 50px);
    }

    .messages {
        flex: 1 0 auto;
    }

    .msg {
        display: inline-block;
        font-size: 11pt;
        line-height: 13pt;
        color: rgba(255, 255, 255, .7);
        margin: 0 0 4px 0;
    }

    .msg:first-of-type {
        margin-top: 8px;
    }

    .timestamp {
        color: rgba(0, 0, 0, .38);
        font-size: 8pt;
        margin-bottom: 10px;
    }

    .username {
        margin-right: 3px;
    }

    .posttime {
        margin-left: 3px;
    }

    .msg-self .msg-box {
        border-radius: 6px 0 0 6px;
        background: #2671ff;
        float: right;
    }

    .msg-self .user-img {
        margin: 0 0 10px 10px;
    }

    .msg-self .msg {
        text-align: right;
    }

    .msg-self .timestamp {
        text-align: right;
    }
</style>

<section class="chatbox">
    <section class="chat-window">

        <?php
        while ($chat = mysqli_fetch_assoc($query_run)) {
            ?>

            <article class="msg-container msg-remote <?php echo $chat['type'] == 2 ? 'msg-self' : ''; ?>" id="msg-0">
                <a class="msg-box" style="width: 100%;" href="replyChat.php?userEmail='<?php echo $chat['email']; ?>'">
                    <div class="flr">
                        <div class="messages">
                            <p class="msg" id="msg-0">
                                <?php echo $chat['email']; ?>
                            </p>
                        </div>

                        <span class="timestamp">
                            <span class="username">Date</span>&bull;<span
                                class="posttime" style=" color: #f0f2f3; "> <?php echo $chat['date']; ?></span></span>
                    </div>
                </a>
            </article>

            <?php
        }
        ?>

    </section>

</section>
</body>

</body>
</html>