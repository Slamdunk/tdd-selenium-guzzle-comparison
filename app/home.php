<html>
<head>
    <title>Selenium workplace</title>
    <link rel="stylesheet" href="/cupertino/jquery-ui.min.css">
    <script src="/jquery.min.js"></script>
    <script src="/jquery-ui.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#date").datepicker();
        });
    </script>
</head>
<body>
<h1>Selenium workplace</h1>
<h2><?php echo date('H:i:s, d M Y');?></h2>
<input type="text" name="date" id="date">
</body>
</html>