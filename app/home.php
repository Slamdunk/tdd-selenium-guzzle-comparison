<html>
<head>
    <title>Playground</title>
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
</head>
<body>
<h1>Playground</h1>

<?php if (isset($_POST['date'])): ?>
    <p style="color:green"><?php echo htmlspecialchars($_POST['date']);?></p>
<?php endif; ?>

<form id="form" action="/" method="POST">
    <input type="text" name="date" id="date">
    <button type="submit=">Send</button>
</form>
</body>
</html>
