
<?php include_once("connection.php");   ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Report to Admin</title>
</head>
<style>
    .form-check {

        margin-top: 5px;
        margin-bottom: 5px;
        padding: 20px;
        border: 1px solid #DCDCDC;
    }

</style>
<body>
<h3 style="margin:0 auto;width:760px; margin-top:20px;text-align:center;border-bottom:1px solid #DCDCDC;">Help Center</h3>


<div class="report-form" style="width:480px;margin:0 auto;margin-top:20px;">
    <form method="POST" action="chat.php">

        <fieldset class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="report" id="gridRadios1"
                       value="My order is marked as delivered but I haven't received it" checked>
                <label class="form-check-label" for="gridRadios1">
                    My order is marked as delivered but I haven't received it
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="report" id="gridRadios2"
                       value="There are missing items from my order">
                <label class="form-check-label" for="gridRadios2">
                    There are missing items from my order
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="report" id="gridRadios3"
                       value="I received the wrong order">
                <label class="form-check-label" for="gridRadios3">
                    I received the wrong order
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="report" id="gridRadios4"
                       value="My order didn't arrive on time">
                <label class="form-check-label" for="gridRadios4">
                    My order didn't arrive on time
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="report" id="gridRadios4"
                       value="I have a question about payment or refund">
                <label class="form-check-label" for="gridRadios4">
                    I have a question about payment or refund
                </label>
            </div>

</div>

</fieldset>
<div class="button" style="text-align:center;padding:10px; margin:10px;">
    <button type="submit" name="report_send" class="btn btn-outline-primary" style="vertical-align:center;">Send
    </button>
</div>


</form>
</div>

</body>
</html>