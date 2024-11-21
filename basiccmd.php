<?php

    $pageName = "UNIXversity - Basics and Commands";
	include("assets/inc/header.php");
?>
<head>
    <link href="assets/css/basiccmd.css" rel="stylesheet" type="text/css">
    <link href="assets/css/breadcrumb.css" rel="stylesheet" type="text/css">
</head>

   <!-- Breadcrumb -->

    <ul class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li>Basics/Commands</li>
        <li><a href="basiccmd.php">Basics Commands and Tools</a></li>
    </ul>

<body>
    <div class="content">
        <h2>Shell Basics</h2>
        <p>A shell is the command-line interface used for interacting between a user and an operating system. In linux, the most popular shell is Bash which is short for “Bourne-Again Shell."</p>

        <h2>Bash</h2>
        <p>Bash is the most commonly used shell amongst Linux distributions. It provides utilities for file & directory manipulation, process management, and searching your file system.</p>

        <h2>Here is a list of the most common utilities built into bash:</h2>
        <table>
            <tr>
                <th>Command</th>
                <th>What it does</th>
            </tr>
            <tr>
                <td>ls</td>
                <td>List directory contents.</td>
            </tr>
            <tr>
                <td>cat</td>
                <td>Display the contents of files.</td>
            </tr>
            <tr>
                <td>echo</td>
                <td>Display text or variables to the terminal.</td>
            </tr>
            <tr>
                <td>man</td>
                <td>Display the manual pages for commands.</td>
            </tr>
            <tr>
                <td>pwd</td>
                <td>Print the current working directory.</td>
            </tr>
            <tr>
                <td>cd</td>
                <td>Move to a specified directory.</td>
            </tr>
            <tr>
                <td>mkdir</td>
                <td>Create a new directory.</td>
            </tr>
            <tr>
                <td>rm</td>
                <td>Remove files or directories.</td>
            </tr>
            <tr>
                <td>mv</td>
                <td>Move or rename files/directories.</td>
            </tr>
            <tr>
                <td>cp</td>
                <td>Copy files/directories.</td>
            </tr>
            <tr>
                <td>touch</td>
                <td>Create empty files or update file timestamps.</td>
            </tr>
            <tr>
                <td>chmod</td>
                <td>Change file permissions.</td>
            </tr>
            <tr>
                <td>chown</td>
                <td>Change file ownership.</td>
            </tr>
            <tr>
                <td>ps</td>
                <td>List running processes.</td>
            </tr>
            <tr>
                <td>kill</td>
                <td>Terminate processes.</td>
            </tr>
            <tr>
                <td>grep</td>
                <td>Search for patterns in text.</td>
            </tr>
            <tr>
                <td>find</td>
                <td>Search for files and directories.</td>
            </tr>
            <tr>
                <td>tar</td>
                <td>Archive files.</td>
            </tr>
            <tr>
                <td>gzip and gunzip</td>
                <td>Compress and decompress files.</td>
            </tr>
            <tr>
                <td>sed</td>
                <td>Stream editor for text manipulation.</td>
            </tr>
            <tr>
                <td>awk</td>
                <td>Text processing tool for pattern matching and data manipulation.</td>
            </tr>
        </table></br>

        <p>A list of every bash utility can be found <a href="https://ss64.com/bash/">here</a></p>
    </div>
</body>
</html>
