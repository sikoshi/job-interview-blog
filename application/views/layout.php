<html>
    <head>
        <title><?php echo empty($this->title) ? 'blog example': $this->title  ?></title>
        <link href="/css/style.css" rel="stylesheet" media="all">
    </head>

    <body>

        <div id="page_header">Page header</div>
        <div id="page_content">
            <?php echo $content; ?>
        </div>
    </body>
</html>