<?php
    $pageName = "UNIXversity - Introduction";
	include("assets/inc/header.php");
?>
<head>
    <link href="assets/css/intro.css" rel="stylesheet" type="text/css">
    <link href="assets/css/breadcrumb.css" rel="stylesheet" type="text/css">
</head>

   <!-- Breadcrumb -->

    <ul class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li>Introduction</li>
        <li><a href="intro.php">Introduction to UNIX</a></li>
    </ul>

   <!-- Content -->

    <div class="content">
        <figure class="pdp7">
            <img class="figimg" src="assets/images/pdp7.jpeg" alt="PDP-7">
            <figcaption>Figure 1 - PDP-7</figcaption>
        </figure>
        
        <div class="sect">
            <h2><strong>How It Started</strong></h2>
            <p>
                In 1969, Bell Labs, MIT, and General Electric set out to create a new 
                operating system on the PDP-7, an 18-bit minicomputer. This “experimental time-sharing
                operating system” would allow multiple processes/users to be run at once. 
                Initially, nothing came of the project and Bell Labs cut their funding and pulled out. 
                However, inspired scientists Dennis Ritchie and Ken Thompson continued their work, and eventually developed Unix.
                Unix version 4 is particularly notable in the development of the OS because Co-Creator Dennis Ritchie created the C 
                programming language specifically for this version. This allowed Unix to be used on many different systems, and it 
                quickly grew into a major platform. Many of the operating systems of the time were largely inspired by Unix.
            </p>
        </div>
        
        <div class="sect">
            <h2><strong>How It Affected the World</strong></h2>
            <p>
                The world of operating systems would not be the same without Unix. Even today, many machines use Unix-based operating systems, and many 
                servers are still run with Unix, or one of its immediate relatives. Unix also popularized the hierarchical file systems we use 
                across machines today. Unix also implemented many other fundamental features we use today, such as TCP/IP protocols, and regular 
                expressions, and began the transition from record-based file systems to hierarchical/byte-focused operating systems.
            </p>
        </div>

        <figure class="famTree">
            <img class="figimg" src="assets/images/UNIX Tree.jpg" alt="UNIX Tree">
            <figcaption>Figure 1 - UNIX Family Tree</figcaption>
        </figure>

        <div class="sect">
            <h2><strong>UNIX's Philosophy</strong></h2>
            <p>
                The main focus of Unix’s original philosophy is to write programs that do one thing and do it well. 
                Ken Thompson -one of the founders of Unix- came up with this philosophy because he was frustrated with 
                programmers/operating systems that would pile lots of features into one program, making it cluttered and 
                inefficient. Unlike the ‘philosophies’ of many other companies, Unix’s isn’t put together as a marketing tool. 
                Thompson wanted to make a philosophy that developers would really use when adding to Unix. When looking at 
                Unix’s philosophy today, it is easy to see how people have changed it over time, McIlroy was the first to put
                an early version of the Unix philosophy into rules:
            <p>
            <ol>
                <li>Make each program do one thing well. To do a new job, build afresh rather than complicate old programs by adding new features.</li>
                <li>Expect the output of every program to become the input to another, as yet unknown, program. Don't clutter the output with extraneous information. 
                    Avoid stringently columnar or binary input formats. Don't insist on interactive input.</li>
                <li>Design and build software, even operating systems, to be tried early, ideally within weeks. Don't hesitate to throw away the clumsy parts and rebuild them.</li>
                <li>Using tools in preference to unskilled helps to lighten a programming task, even if you have to detour to build the tools and expect to throw some of them out after you've finished using them.</li>
            </ol>
        </div>
    </div>

</body>
</html>
