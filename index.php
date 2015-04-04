<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Magento Guest Audit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1><?php echo file_get_contents('/var/www/html/mga.project.steverobbins.name/version') ?></h1>
        </div>
        <div class="page-header">
            <h3>Download</h3>
        </div>
        <a class="btn btn-lg btn-primary" href="/mga.phar">mga.phar</a>
        <div class="page-header">
            <h3>Source</h3>
        </div>
        <a class="btn btn-lg btn-primary" href="https://github.com/steverobbins/magento-guest-audit">GitHub</a>
    </div>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-16126282-21', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>