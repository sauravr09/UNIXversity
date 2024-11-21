<?php
    $pageName = "UNIXversity - Reference";
	include("assets/inc/header.php");
?>

<head>
    <link  href="assets/css/reference.css" rel="stylesheet" type="text/css">
    <link href="assets/css/breadcrumb.css" rel="stylesheet" type="text/css">
</head>

   <!-- Breadcrumb -->

    <ul class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li>Other Resources</li>
        <li><a href="reference.php">Reference Guide</a></li>
    </ul>

   <!-- Content -->
<div class="ref-content">
    <h2>Quick Reference</h2>
    <div class="ref-table">
        <table>
            <tr>
                <th colspan="3">
                    Directory & File Management
                </th>
            </tr>
            <tr>
                <td class="td-left">ls [settings]</td>
                <td>List all files and directories <br>
                    [settings]* <br>
                    -l : list files in long format <span><br></span>
                    -a : List all hidden files
                </td>
            </tr>
            <tr>
                <td class="td-left">mkdir [directory]</td>
                <td>Make a directory</td>
            </tr>
            <tr>
                <td class="td-left">rmdir [directory]</td>
                <td>Remove a directory</td>
            </tr>
            <tr>
                <td class="td-left">rm [file]</td>
                <td>Remove a file from a directory <span><br></span>
                    -r copy recursively 
                </td>
            </tr>
            <tr>
                <td class="td-left">cp [setting] [file] [location]</td>
                <td>Copy a file to a specific directory<span><br></span>
                    -r copy recursively 
                </td>
            </tr>
            <tr>
                <td class="td-left">mv [file] [location]</td>
                <td>Move a file to a specific location </td>
            </tr>
            <tr>
                <td class="td-left">cat [file]</td>
                <td>display the contents of a file</td>
            </tr>
            <tr>
                <th colspan="3">
                    File Group Permissions
                </th>
            </tr>
            <tr>
                <td class="td-left">chmod [permissions] [file]</td>
                <td>change the permissions of a file <br>
                syntax: <br>
                Numeric mode : chmod 755 [file] <br>
                Character mode : chmod u+rwx [file]
                </td>
            </tr>
            <tr>
                <td class="td-left">chown [user] [file]</td>
                <td>change ownership of a file to a specific user</td>
            </tr>
            <tr>
                <td class="td-left">chgrp [group] [file]</td>
                <td>change ownership of a file to a specific group</td>
            </tr>
            <tr>
                <td class="td-left">ls -l</td>
                <td>view the ownership and permissions of a file</td>
            </tr>
                <th colspan="3">Processes</th>
            </tr>
            <tr>
                <td class="td-left">ps</td>
                <td>list running processes</td>
            </tr>
            <tr>
                <td class="td-left">w</td>
                <td>list user processes</td>
            </tr>
            <tr>
                <td class="td-left">kill [Process ID]</td>
                <td>forcibly end a process using its Process ID</td>
            </tr>
            <tr>
                <td class="td-left">killall [name]</td>
                <td>terminate all instances of the named process</td>
            </tr>
            <tr>
                <td class="td-left">jobs</td>
                <td>list all jobs on the system whether it is active or stopped</td>
            </tr>
            <tr>
                <td class="td-left">uptime</td>
                <td>view system uptime</td>
            </tr>
            <tr>
                <th colspan="3">Text Manipulation</th>
            </tr>
            <tr>
                <td class="td-left">grep [settings] [pattern] [file]</td>
                <td>search for patterns in files</td>
            </tr>
            <tr>
                <td class="td-left">awk [setting] [pattern] { action } [file]</td>
                <td>powerful tool for manipulating text</td>
            </tr>
            <tr>
                <td class="td-left">sed [setting] [command]</td>
                <td>edit text file according to a command</td>
            </tr>
            <tr>
                <td class="td-left">cut [setting] [file]</td>
                <td>select and remove sections from a text file</td>
            </tr>
            <tr>
                <td class="td-left">sort</td>
                <td>sort lines of text</td>
            </tr>
            <tr>
                <td class="td-left">head [file]</td>
                <td>display the beginning of a file</td>
            </tr>
            <tr>
                <td class="td-left">tail [file]</td>
                <td>display the end of a file</td>
            </tr>
            <tr>
                <td class="td-left">wc [file]</td>
                <td>counts the number of characters, words, and lines.</td>
            </tr>
            <tr>
                <td class="td-left">rev</td>
                <td>reverse a string of characters</td>
            </tr>
            <tr>
                <th colspan="3">
                Networking
                </th>
            </tr>
            <tr>
                <td class="td-left">ip a</td>
                <td>Displays network interface status and information</td>
            </tr>
            <tr>
                <td class="td-left">ping [IP or Hostname]</td>
                <td>send an ICMP packet to a target host</td>
            </tr>
            <tr>
                <td class="td-left">traceroute [IP or Hostname]</td>
                <td>Trace the hops a packet takes in each direction</td>
            </tr>
            <tr>
                <td class="td-left">mtr [IP or Hostname]</td>
                <td>Combination of ping and traceroute</td>
            </tr>
            <tr>
                <td class="td-left">netstat -tuln</td>
                <td>list all listening TCP and UDP ports</td>
            </tr>
            <tr>
                <td class="td-left">ss -tuln</td>
                <td>lists all listening sockets</td>
            </tr>
            <tr>
                <td class="td-left">nslookup [hostname]</td>
                <td>Resolves domain name to IP address</td>
            </tr>
            <tr>
                <td class="td-left">route -n</td>
                <td>shows the routing table</td>
            </tr>
            <tr>
                <td class="td-left">ssh</td>
                <td>connect remotely to another system</td>
            </tr>
            <tr>
                <td class="td-left">scp [file] [hostname:destination]</td>
                <td>copy files between systems</td>
            </tr>
            <tr>
                <td class="td-left">iptables & firewalld</td>
                <td>configure firewall rules</td>
            </tr>
            <tr>
                <th colspan="3">Help</th>
            </tr>
            <tr>
                <td class="td-left">man [command]</td>
                <td>Display the manual pages for a specific command</td>
            </tr>
            <tr>
                <td class="td-left">info [command]</td>
                <td>provides documentation in hierarchical format</td>
            </tr>
            <tr>
                <td class="td-left">[command] –help</td>
                <td>show a summary of how to use a command</td>
            </tr>
            <tr>
                <td class="td-left">whatis [command]</td>
                <td>one-line description of a command</td>
            </tr>
            <tr>
                <td class="td-left">[command] –version</td>
                <td>shows the version number of the command</td>
            </tr>
            <tr>
                <td class="td-left">apropos [key-word]</td>
                <td>search for commands related to the key-word</td>
            </tr>
        </table>
    </div>
</div>
