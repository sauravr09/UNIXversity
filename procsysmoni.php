<?php

    $pageName = "UNIXversity - Find Your UNIX Distribution";
	include("assets/inc/header.php");
?>
<head>
    <link  href="assets/css/procsysmoni.css" rel="stylesheet" type="text/css">
    <link href="assets/css/breadcrumb.css" rel="stylesheet" type="text/css">
</head>

   <!-- Breadcrumb -->

    <ul class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li>Basics/Commands</li>
        <li><a href="textprocess.php">Processes and System Monitoring</a></li>
    </ul>

   <!-- Content -->
<body>
    <div class="content">
        <h2>What is a Process?</h2>
        <p>Processes are an important part of understanding how the Unix operating system works. A process can be thought as individual tasks and programs that are running on your computer. Google Chrome, microsoft word, and any other running program can be thought of as a process. Each process has its own unique identifier known as the Process ID (PID). The process id is crucial for interacting and managing the processes on your system.</p>

        <h2>Process states:</h2>
        <p>There are 4 unique process states:</p>
        <ul>
            <li>Running : The process is being executed.</li>
            <li>Sleeping : The process is paused & waiting for an event to occur before resuming.</li>
            <li>Stopped : The process is paused.</li>
            <li>Zombie : The process has been completed but has not been closed by the system.</li>
        </ul>

        <h2>Monitoring Processes</h2>
        <ul>
            <li>ps : allows you to view detailed information about processes.</li>

            <li>top : The top command displays all the real-time processes in a list. The list will refresh every time you press enter. From here you can see Process ID, User, Priority, Niceness number, CPU usage, Memory usage, Swap Memory, Cache Size, and more.</li>
        </ul>

        <figure>
            <img src="assets/images/figure4.png" alt="Figure 4" />
            <figcaption>Figure 4</figcaption>
        </figure></br>

    </div>
</body>
</html>