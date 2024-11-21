<?php

    $pageName = "UNIXversity - Find Your UNIX Distribution";
	include("assets/inc/header.php");
?>
<head>
    <link  href="assets/css/textprocess.css" rel="stylesheet" type="text/css">
    <link href="assets/css/breadcrumb.css" rel="stylesheet" type="text/css">
</head>

   <!-- Breadcrumb -->

    <ul class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li>Basics/Commands</li>
        <li><a href="textprocess.php">Text Processing and Editing</a></li>
    </ul>

   <!-- Content -->
<body>
    <div class="content">
        <h2>Introduction to Text Editors</h2>
        <p>Editing text within the Unix command line is a very common practice. There are several types of command-line text editors. Of course, Unix includes a more familiar, user-friendly GUI text editor, but it is good practice to learn how to use command-line editors, especially when getting involved in data processing.</p>
        <p><strong>Vi/Vim</strong> - Vi and Vim are very similar commands. In fact, Vim stands for “Vi Improved”. To edit a file in Vim, simply type “Vim [filename]”. Calling Vim on a non-existent file will cause the machine to create a new file in the current working directory with the name specified in the command. Using these commands the user is able to insert or command within the file. The insert mode allows the user to enter text into the specified file. The command mode lets the user move the file and delete lines. To switch between these modes and issue other commands within the editor, the user must scroll to the bottom of the file - this is where users can enter exit commands among many others.</p>
        <p><strong>Nano</strong> - Nano is very similar to Vim. To begin using the nano editor, type “nano [filename]” into the command line. Calling this command on a non-existent file will cause the machine to create a new file with the specified name in the current working directory. To exit Nano, refer to the help commands at the bottom of the page. “Ctrl + O”, and “Ctrl + X” will save progress and exit the editor.</p></br>

        <h2>Basic text processing commands</h2>
        <p>Text/data processing is a huge part of scripting today. Unix features many commands that make processing text more efficient. The basic commands are awk, sed, and grep. These commands can be stringed together using a “pipe”, which is represented by a “|” in the command line.</p>
        <p><strong>Awk</strong> - Used for finding text, performing comparisons, etc.</p>
        <ul><li>Syntax: awk 'selection criteria {action}' [input-file path] </li></ul>
        <p><strong>Sed</strong> - Used for finding, and modifying data </p>
        <ul><li>Syntax: sed ‘s/[string to find]/[string to replace]/g’ [input-file path] </li></ul>
        <p><strong>Grep</strong> - Used for finding data and patterns in text files</p>
        <ul><li>Syntax: grep [string to find] [input-file path]</li></ul>

        <h2>Regular expressions (regex)</h2>
        <p>Regular expressions are tools that allow for complex pattern recognition given a file, or data. Each special character in a regular expression correlates with some sort of text pattern. To use regular expressions, the user should use the correct special characters in the order that they expect the pattern to appear. (Insert graphic here demonstrating the different regex syntax before the next sentence). For example, if I wanted to find a string of three letters in a file, I would use the following expression: “[a-z]{3}”. [a-z] denotes any lowercase letters from a-z, {3} denotes three from the set.</p>

        <figure>
            <img src="assets/images/figure3.png" alt="Figure 3 - Basic Regex Characters" />
            <figcaption>Figure 3 - Basic Regex Characters</figcaption>
        </figure></br>

        <p>A list of all Regular Expressions can be found <a href="https://docs.linuxfoundation.org/v2/security-service/manage-false-positives/regular-expressions-cheat-sheet">here</a></p>
    </div>
</body>
</html>
