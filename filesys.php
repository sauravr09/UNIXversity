<?php

    $pageName = "UNIXversity - The UNIX Filesystem";
	include("assets/inc/header.php");
?>

<head>
    <link href="assets/css/info.css" rel="stylesheet" type="text/css">
    <link href="assets/css/breadcrumb.css" rel="stylesheet" type="text/css">
</head>

   <!-- Breadcrumb -->

    <ul class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li>Basics/Commands</li>
        <li><a href="filesys.php">The Unix Filesystem</a></li>
    </ul>

   <!-- Content -->

    <div class="content">
        <h2>File Organization</h2>
        <p>
            Unix organizes files hierarchically, meaning that all files and folders (aka Directories) are related to one another. 
            All directories stem from the “root” directory, which is often represented by a “/”. Within the root directory, 
            you can find folders like /bin, /etc, and /tmp. These directories all contain important system configuration 
            information, like which users are on the machine, and what their passwords are. Everyday users will almost never 
            venture outside of the /home directory. The home directory contains folders more familiar, like “Desktop” and “Pictures”. 
        </p>

        <!-- First section content-->
        <h2>Delve Into Root</h2>
        <div class="sect">
            <ul class='list'>
                <li><strong>/bin:</strong></li>
                <ul class=subList>
                    <li>
                        The /bin directory stores executable files, and information the system uses 
                        regarding Unix commands and their options (cat, cd, nano, ls)
                    </li>
                </ul>   

                <li><strong>/etc:</strong></li>
                <ul class=subList>
                    <li>
                        /etc contains configuration files and data that tell a Unix machine how to turn on. System Administrators may frequently edit files in this 
                        directory to give users administrative access to the rest of the system.
                    </li>
                </ul> 

                <li><strong>/tmp:</strong></li>
                <ul class=subList>
                    <li>
                        This folder contains data that will only temporarily be stored within the system.
                        Some programs only need to store data for a little while. The terminal has no need to store 
                        all of the commands the user has ever issued to it, so 
                        it is all thrown into /tmp, and thrown out when the server restarts.
                    </li>
                </ul> 

                <li><strong>/home:</strong></li>
                <ul class=subList>
                    <li>
                        The /home directory is the default ‘home’ for users in Unix. This directory contains folders such as  
                        Desktop, Documents, Pictures, etc. In an office setting, users would rarely venture outside this directory, 
                        it's easy to navigate and it provides a spot for all of their important files. 
                    </li>
                </ul> 

                <li><strong>/:</strong></li>
                <ul class=subList>
                    <li>
                        The Unix root directory contains many more subdirectories than listed above, but these are the most commonly used, and most important.
                    </li>
                </ul> 
            </ul>
        </div>

        <!-- Second section of content-->
        <h2>File Permission Groups</h2>
        <div class="sect">
            <p>For every Unix file, there are three types of file permission groups in Unix:</p>
            <ul>
                <li><strong>Owner Permissions:</strong> Owner permissions are those that apply to the owner of the file.</li>
                <li><strong>Group Permissions:</strong> Group permissions apply to the ‘group’ the owner belongs to (groups are a type of user organization in Unix, defined in the /etc directory). </li>
                <li><strong>Other User Permissions:</strong> Other permissions apply to users who are neither the owner nor in the group. Other permissions are frequently called “World permissions,” as they apply to the rest of the world. </li>
            </ul>
        </div>

        <!-- Third section of content-->
        <h2>File Access Permissions</h2>
        <div class="sect">
            <p>Every group can be assigned a unique combination of the following three permissions:</p>
            <ul>
                <li><strong>Read:</strong> Users with this permission can view the contents of a file</li>
                <li><strong>Write:</strong> Users with this permission can edit the contents of a file</li>
                <li><strong>Execute:</strong> Users with this permission can run/execute the file Permissions for a file can be displayed using the ls -l command.</li>
            </ul>
            <h2 class="numHead">Numerical Representation of Permissions</h2>
            <P>File permissions are represented as numbers. The numerical representations are seen below:</p>
            <ul>
                <li>4: Read Permission</li>
                <li>2: Write Permission</li>
                <li>1: Execute Permission</li>
            </ul>
            <p>
                Using the <i>chmod</i> command you can change the permissions associated with a file or directory by simply entering three numbers, one for each
                permission group. For example, entering <i>chmod 422 myNotes.txt</i> into the command line will assign read permissions to the owner, and write permissions to 
                the group and others to the myNotes.txt file.</br>
                To assign multiple permissions for a single permission group, simply add the numerical representations together. For example, entering <i>chmod 756 myNotes.txt</i>
                into the command line will assign read, write and execute permissions to the owner (4+2+1=7), read and write permissions to the group (4+2=5), and read, execute permissions
                to others (4+1=5).
            </p>
        </div>

        <!-- Fourth section of content-->
        <h2>Command Line File Navigation and Manipulation</h2>
        <div class="sect">
            <p>
                File manipulation and navigation commands are the most commonly used commands in Unix. These commands allow the user to effectively delete, 
                copy, or move files/folders as well as change the directory structure from within the command line. All of the following commands can be 
                used by typing the command, followed by the directory or file that is to be edited. For example, to remove a file simply type <i>rm [file location]</i>
                into the terminal
            </p>
            <p class=subHead>Basic File Manipulation Commands</p>
                <ul>
                    <li>rm - removes a file or directory from the system</li>
                    <li>cp - copies a file to the current directory</li>
                    <li>mv - moves a file to the current directory</li> 
                </ul>
            <p class=subHead>Basic File Navigation Commands</p>
                <ul>
                    <li>cd - changes the current directory</li>
                    <li>pwd - display the current directory to the terminal</li>
                    <li>ls - lists the contents of the current directory</li>
                </ul>
            </p>
        </div>
    </div>
</body>
</html>
