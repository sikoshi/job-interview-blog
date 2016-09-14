<html>
    <head>
        <title><?php echo empty($this->title) ? 'blog example': $this->title  ?></title>
        <link href="/css/style.css" rel="stylesheet" media="all">
    </head>

    <body>
        <div id="page">
            <div id="page_header">
                <div id="header_logo">
                    <a href="/">sample blog</a>
                </div>

                <div id="header_menu">
                    <a href="/signin">Sign in</a>
                    <!--<a href="/compose">New post</a>
                    <a href="/signout">Sign out</a>-->
                </div>

                <div class="clear"></div>
            </div>
            <div id="page_content">
                <?php echo $content; ?>
            </div>
        </div>
    </body>
</html>