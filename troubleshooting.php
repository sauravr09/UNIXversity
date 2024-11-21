<?php

    $pageName = "UNIXVERSITY - Troubleshooting";
    include("assets/inc/header.php");

?>

<head>
    <link href="assets/css/net.css" rel="stylesheet" type="text/css">
    <link href="assets/css/breadcrumb.css" rel="stylesheet" type="text/css">
</head>

   <!-- Breadcrumb -->

    <ul class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li>Other Resources</li>
        <li><a href="troubleshooting.php">Troubleshooting</a></li>
    </ul>

   <!-- Content -->
    <div class="content">
        <h2>General Troubleshooting</h2>
        <ul class="contList">
            <!-- Sub List -->
            <li class="strHead"><strong>Update Software</strong></li>
            <ul>
                <li>
                If your software is not up to date, you can run into all sorts of problems. 
                To make sure your software is up to date, enter “sudo apt-get update”, and “sudo apt upgrade” 
                into your terminal to make sure your system is to date.
                </li>
            </ul>
            <!-- Sub List -->
            <li class="strHead"><strong>Check for Error Messages</strong></li>
            <ul>
                <li>
                It is always a good idea to check your systems logs for any error messages you would have missed. 
                To do this, either open the syslog file in the /var/log directory, or enter “cat /var/log/syslog” 
                into your terminal.
                </li>
            </ul>
            <!-- Sub List -->
            <li class="strHead"><strong>Verify Permissions</strong></li>
            <ul>
                <li>
                You may be attempting to access a file that you do not have permission to access. 
                Check with your system administrator, and use the following command “chmod 755 
                [file-path]” to gain read, write, and execute permissions.
                </li>
            </ul>
            <!-- Sub List -->
            <li class="strHead"><strong>Check Disk Space</strong></li>
            <ul>
                <li>
                If your system is being slow, or freezing up you may be using too 
                much of its disk space. Try closing idle applications, and enter “df” 
                into the command line. The output for this command will show you how 
                much disk space your various applications are using.
                </li>
            </ul>
        </ul>

        <h2>Network Connectivity Troubleshooting</h2>
            <p>
                Network connectivity issues are very common in any OS. There are many 
                commands in Unix that can help diagnose network issues. 
                Here are some of the basics:
            </p>

        <ul class="contList">
            <!-- Sub List -->
            <li class="strHead"><strong>ifconfig</strong></li>
            <ul>
                <li>
                This command will display the network configuration information 
                for the interface you are using to try and connect to the internet. 
                Use the /all option to view all interfaces on your system, or use 
                “ifconfig [interface-name] up” to change a down interface to the ‘up’ status.
                </li>
            </ul>
            <!-- Sub List -->
            <li class="strHead"><strong>ip addr show</strong></li>
            <ul>
                <li>
                Shows the ip address of your system. 
                Use this to determine if your system has a valid IP address.
                </li>

                <li> <strong> Sudo dhclient </strong>
                    If you do not have a valid IP address, 
                    use this command to call DHCP and get one 
                    assigned to your system.

                </li>

            </ul>
            <!-- Sub List -->
            <li class="strHead"><strong>ping</strong></li>
            <ul>
                <li>
                Check if your system can connect to the internet, or other 
                hosts on your network. Use “ping 8.8.8.8” to ping Google.
                </li>
            </ul>
            <!-- Sub List -->
            <li class="strHead"><strong>route</strong></li>
            <ul>
                <li>
                Use this to view and edit IP routing table. Use the add or delete options to 
                statically add or delete a line in the routing table.
                </li>
            </ul>
            <!-- Sub List-->
            <li class="strHead"><strong>Check Network Hardware</strong></li>
            <ul>
                <li>
                The most common reason something isn’t working is because it isn’t plugged in right. 
                Make sure you’re either connected to ethernet, or a wireless connection. If you can 
                open up your desktop, ensure your NIC card is plugged in correctly. Rebooting your 
                computer is another very common solution to network problems.
                </li>
            </ul>
        </ul>

    </div>
</body>
</html>

