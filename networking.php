<?php

    $pageName = "UNIXVERSITY - Networking";
    include("assets/inc/header.php");

?>

<head>
    <link href="assets/css/net.css" rel="stylesheet" type="text/css">
    <link href="assets/css/breadcrumb.css" rel="stylesheet" type="text/css">

</head>

   <!-- Breadcrumb -->

    <ul class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li>Networking/Security</li>
        <li><a href="networking.php">Basic Networking Commands</a></li>
    </ul>

    <!-- End Breadcrumb -->

    <div class="content">
        <h2>Basic Networking Commands</h2>
            <p>
                Networking is a huge part of getting your Unix machine up and running. Using networking commands
                in the terminal is a very easy way to configure your machine. Here are some basic Unix networking
                commands.
            </p>
        <ul class="contList">
            <!-- Sub List -->
            <li class="strHead"><strong>Ifconfig</strong></li>
            <ul>
                <li>
                Used to configure and view the network interfaces on your machine. This command will output the IP 
                address, netmask, default gateway, etc. for the machine you are using.
                </li>

                <!-- Example -->

                <ul class="example">
                    <li> 
                    Example: ifconfig/all
                        <ul>
                        This will display the configuration information for all the network interfaces on your machine
                        </ul>
                    </li>
                </ul>
            </ul>

            <!-- Sub List -->
            <li class="strHead"><strong>Netstat</strong></li>
            <ul>
                <li>
                Used to view network information such as interface statistics, open network connections, routing tables,
                and listening ports. This is commonly used to monitor and diagnose network connectivity issues.
                </li>
            </ul>

            <!-- Sub List -->
            <li class="strHead"><strong>Ping</strong></li>
            <ul>
                <li>
                Used to test the connectivity your machine has to a given IP address. When the ping command is issued,
                your machine sends ICMP echo requests to the pinged host. This is commonly used to diagnose network
                connectivity issues.
                </li>

            <!-- Example -->
                <ul class="example">
                    <li> 
                    Example: ping 192.168.1.1 
                    </li>
                </ul>
            </ul>

            <!-- Sub List -->
            <li class="strHead"><strong>Hostname</strong></li>
            <ul>
                <li>
                Used to view or change the hostname of the machine. 
                </li>

             <!-- Example -->
                <ul class="example">
                    <li> 
                        Example: hostname
                        <ul> 
                            Returns the hostname of the machine
                        </ul>
                    </li>
                    <li> 
                        Example: sudo hostname [new-name]
                        <ul> 
                            Changes the hostname to the value in [new-hostname]
                        </ul>
                    </li>
                </ul>
            </ul>

             <!-- Sub List -->
             <li class="strHead"><strong>Tcpdump</strong></li>
            <ul>
                <li>
                Packet capture tool used to view and analyze traffic on a network. Used for 
                network troubleshooting, monitoring, and security analysis.
                </li>

             <!-- Example -->
                <ul class="example">
                    <li> 
                        Example: tcpdump
                        <ul> 
                            Displays packet captures from all interfaces
                        </ul>
                    </li>
                    <li> 
                        Example: tcpdump -i [interface]
                        <ul> 
                            Displays packet captures only from a specified interface
                        </ul>
                    </li>
                </ul>
            </ul>

            <!-- Sub List -->
            <li class="strHead"><strong>Traceroute</strong></li>
            <ul>
                <li>
                Used to  identify bottlenecks and connectivity issues in a network. 
                Given a destination, outputs a list in order of what hops a packet 
                took to reach the destination.
                </li>

            <!-- Example -->
                <ul class="example">
                    <li> 
                    Example: traceroute google.com
                    </li>
                </ul>
            </ul>

            <!-- Sub List -->
            <li class="strHead"><strong>Nslookup</strong></li>
            <ul>
                <li>
                Given an IP address or an address record, returns an address 
                record, or an IP address. Used to receive information about 
                domain names, and can help with DNS troubleshooting.
                </li>

            <!-- Example -->
                <ul class="example">
                    <li> 
                    Example: nslookup google.com
                    </li>
                </ul>
            </ul>
        </ul>

        
        <h2>Secure Shell (SSH) and Secure Copy (SCP)</h2>
            <p>
            Secure shell and Secure copy go hand in hand. Secure shell allows the user to 
            connect to a remote server securely. The data sent during the connection is 
            encrypted. The SSH connection will often require a password to connect to the server, depending on the server’s settings. Secure Copy allows the user to transfer files between the client and server systems. SCP is used once the SSH connection is established, so any SCP data is also encrypted.
            </p>

            <ul class="contList">
                <!-- Sub List -->
                <li class="strHead"><strong>Using SSH and SCP</strong></li>

                <!-- Example -->
                <ul class="example">
                        <li>
                            SSH 
                            <ul> 
                            ssh [username]@[hostname]  - connects to the server
                            </ul>   
                        </li>

                        <li>
                            SCP 
                            <ul> 
                            scp [file] [username]@[hostname]:[destination on server] - copies file to server
                            </ul>   

                            <ul> 
                            scp [username]@[hostname]:[file-path on local host] - copies server file to local host
                            </ul>   
                        </li>
                </ul>
        </ul>
    </div>
</body>
</html>
