<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="../styles/main.css" rel="stylesheet" type="text/css" />
    <link href="../menu/ddmenu.css" rel="stylesheet" type="text/css" />
    <script src="../menu/ddmenu.js" type="text/javascript"></script>

</head>
<body>
<nav id="ddmenu">
    <div class="menu-icon"></div>
    <ul>
        <li class="no-sub">
            <a class="top-heading"href="../index.php">Home</a>
        </li>
        <li class="no-sub">
<!--     about just write it, about author, giving credit to everyone that contributes to the site       -->
            <a class="top-heading" href="../about.php">About</a>
        </li>
        <li>
            <span class="top-heading">Resources</span>
            <i class="caret"></i>
            <div class="dropdown">
                <div class="dd-inner">
                    <ul class="column">
                        <li><a href="#">Snowflake Method</a></li>
                        <li><a href="#">Planning in Detail</a></li>
                        <li><a href="#">Almost No Planning</a></li>
                        <li><a href="#">Need to know</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <span class="top-heading">How To's</span>
            <i class="caret"></i>
            <div class="dropdown offset300">
                <div class="dd-inner">
                    <ul class="column">
                        <li><h3>Programs</h3></li>
                        <li><a href="#">Scrivener</a></li>
                        <li><h3>Planning</h3></li>
                        <li><a href="#">In Lots of Detail</a></li>
                        <li><a href="#">In Less Detail</a></li>
                    </ul>
                    <ul class="column">
                        <li><h3>Build</h3></li>
                        <li><a href="#">Characters</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Scenes</a></li>
                        <li><a href="#">Chapters</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <span class="top-heading">Blog</span>
            <i class="caret"></i>
            <div class="dropdown offset300">
                <div class="dd-inner">
                    <ul class="column">
                        <li><h3>Dates</h3></li>
                        <li><a href="#">August 2016</a></li>
                        <li><h3>Recent Posts</h3></li>
                        <li><a href="#">Hello!</a></li>
                    </ul>
                    <ul class="column">
                        <li><h3>Categories</h3></li>
                        <li><a href="#">Writing</a></li>
                        <li><a href="#">Planning</a></li>
                        <li><a href="#">Characters</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Scenes</a></li>
                        <li><a href="#">Chapters</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li>
            <span class="top-heading">Members</span>
            <i class="caret"></i>
            <div class="dropdown">
                <div class="dd-inner">
                    <ul class="column">
                        <li><h3>Members</h3></li>
                        <li><a href="../login.php">Log In</a></li>
                    </ul>
                    <ul class="column">
                        <li><h3>Guests</h3></li>
                        <li><a href="../register.php">Register</a></li>
                        <li><a href="#">Sign up for emails</a></li>
                    </ul>
<!--                    --><?php
//                    if ($login->isUserLoggedIn() == true) {
//                        include ("loggedinmenu.php");
//                    }else{
//                        include("guestmenu.php");
//                    }
//                    ?>
                </div>
            </div>
        </li>
    </ul>
<!--    add social media icons here: algined right     -->
</nav>

</body>
</html>