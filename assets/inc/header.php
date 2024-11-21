<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/header.css" rel="stylesheet" type="text/css"/>
    <title><?php echo $pageName; ?></title>
</head>

<!-- Body tag isnt closed at the end of the file, make sure to add body and html end tag at the end of the file you include this to! -->
<body>

    <!--Header-->
    <header>
        <img src="assets/images/logo.png" alt="Logo">
    </header>

    <!--Navigation Bar-->
    <nav class="dropdown">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li>
                <a>Introduction</a>
                <ul class="submenu">
                    <li><a href="intro.php">Introduction</a></li>
                    <li><a href="dists.php">Finding Your Distribution</a></li>
                </ul>
            </li>
            <li>
                <a>Basics/Commands</a>
                <ul class="submenu">
                    <li><a href="filesys.php">The UNIX Filesystem</a></li>
                    <li><a href="basiccmd.php">Basic Commands and Tools</a></li>
                    <li><a href="textprocess.php">Text Processing and Editing</a></li>
                    <li><a href="procsysmoni.php">Processes and System Monitoring</a></li>
                </ul>
            </li>
            <li>
                <a>Networking/Security</a>
                <ul class="submenu">
                    <li><a href="networking.php">Networking</a></li>
                    <li><a href="permissionsandsecurity.php">Permissions and Security</a></li>
                    <li><a href="scripting.php">Scripting</a></li>
                </ul>
            </li>
            <li>
                <a>Other Resources</a>
                <ul class="submenu">
                    <li><a href="troubleshooting.php">Troubleshooting</a></li>
                    <li><a href="morehelp.php">Other Resources</a></li>
                    <li><a href="reference.php">Reference Guide</a></li>
                </ul>
            </li> 
            <li><a href="quiz.php">Test Your Knowledge</a></li> 
            
        </ul>
    </nav>

