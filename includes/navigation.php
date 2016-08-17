<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menucool ddmenu</title>
    <link href="../menu/ddmenu.css" rel="stylesheet" type="text/css" />
    <script src="../menu/ddmenu.js" type="text/javascript"></script>

</head>
<body>
<nav id="ddmenu">
    <div class="menu-icon"></div>
    <ul>
        <li class="no-sub"><a class="top-heading" href="http://www.google.com">Home</a></li>
        <li class="full-width">
            <span class="top-heading">Blog</span>
            <i class="caret"></i>
            <div class="dropdown">
                <div class="dd-inner">
                    <ul class="column">
                        <li><h3>Categories</h3></li>
                        <li><a href="#">Planning</a></li>
                        <li><a href="#">Editing</a></li>
                        <li><a href="#">Writing</a></li>
                        <li><a href="#">Characters</a></li>
                        <li><a href="#">Settings</a></li>
                    </ul>
                    <ul class="column">
                        <li><h3>Dates</h3></li>
                        <li><a href="#">July 2016</a></li>
                        <li><a href="#">August 2016</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <a class="top-heading" href="http://www.microsoft.com">Resources</a>
            <i class="caret"></i>
            <div class="dropdown">
                <div class="dd-inner">
                    <ul class="column">
                        <li><h3>Snowflake Method</h3></li>
                        <li><a href="#">Planning in Detail</a></li>
                        <li><a href="#">Almost No Planning</a></li>
                        <li><a href="#">Need to know</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <span class="top-heading">Accusantium</span>
            <i class="caret"></i>
            <div class="dropdown offset300">
                <div class="dd-inner">
                    <ul class="column">
                        <li><h3>Pellentesque</h3></li>
                        <li><a href="#">Fermentum ut nulla</a></li>
                        <li><a href="#">Duis ut mauris</a></li>
                        <li><h3>Volutpat</h3></li>
                        <li><a href="#">Quisque dictum</a></li>
                        <li><a href="#">Nulla scelerisque</a></li>
                    </ul>
                    <ul class="column">
                        <li><h3>Suspendisse</h3></li>
                        <li><a href="#">Suspendisse potenti</a></li>
                        <li><a href="#">Curabitur in mauris</a></li>
                        <li><a href="#">Phasellus ultrices</a></li>
                        <li><a href="#">Quisque ornare</a></li>
                        <li><a href="#">Vestibulum</a></li>
                        <li><a href="#">Vitae tempus risus</a></li>
                    </ul>
                    <ul class="column mayHide">
                        <li><br /><img src="ddmenu/img2.jpg" /></li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="no-sub">
            <a class="top-heading" href="#">Dignissim</a>
        </li>
        <li>
            <span class="top-heading">Laudantium</span>
            <i class="caret"></i>
            <div class="dropdown right-aligned">
                <div class="dd-inner">
                    <ul class="column">
                        <li><h3>Nam a leo</h3></li>
                        <li><a href="#">Vel faucibus leo</a></li>
                        <li><a href="#">Duis ut mauris</a></li>
                        <li><a href="#">In tempus semper</a></li>
                        <li><a href="#">laoreet erat</a></li>
                    </ul>
                    <ul class="column">
                        <li><h3>Proin iaculis</h3></li>
                        <li><a href="#">In tempus semper</a></li>
                        <li><a href="#">Hendrerit tincidunt</a></li>
                        <li><a href="#">Duis ut mauris</a></li>
                        <li><a href="#">pretium amet</a></li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>
</nav>
<div style="margin:200px auto 40px; width:400px; font:normal 15px/20px Arial; color:white; background-color:rgba(0,0,0,0.5);padding:30px;">
    <h2>Note</h2>
    <p>If you decrease the window size and the menu switches to the mobile mode, some of the columns in the menu dropdown will disappear.
        This is because we have added the <code><b>mayHide</b></code> class to the columns. Class <b>mayHide</b> has been set to <code>display:none</code>
        in the <em>ninja-slider.css</em> when the screen size is small.</p>
</div>
</body>
</html>