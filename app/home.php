<!doctype html>
<html>
<head>
    <title>Playground PHP</title>
    <link rel="stylesheet" href="/cupertino/jquery-ui.min.css">
    <script src="/jquery.min.js"></script>
    <script src="/jquery-ui.min.js"></script>
    <script src="/datepicker-it.js"></script>
    <script type="text/javascript">
        $(function(){
            var options = $.datepicker.regional["it"];
            options.showAnim = '';
            $("#date").datepicker(options);
        });
    </script>
    <style type="text/css">
    #result {
        color: green;
        border: 1px solid green;
        width: 10em;
    }
    </style>
</head>
<body>
<h1>Playground PHP</h1>

<p id="result"><?php echo ($_POST['date'] ?? null) ?: '&nbsp;';?></p>

<form id="form" action="/" method="POST">
    <input type="text" name="date" id="date">
    <button type="submit=">Send</button>
</form>
</body>
</html>
