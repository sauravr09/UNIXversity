<?php

    $pageName = "UNIXversity - Find Your UNIX Distribution";
	include("assets/inc/header.php");
?>

<head>
	<link href="assets/css/dists.css" rel="stylesheet" type="text/css">
	<link href="assets/css/breadcrumb.css" rel="stylesheet" type="text/css">
</head>

   <!-- Breadcrumb -->

    <ul class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li>Introduction</li>
        <li><a href="dists.php">Finding Your Distribution</a></li>
    </ul>

   <!-- Content -->

    <div class='content'>
        <h2>Finding Your Perfect Linux Distribution</h2>
        <p class="top">
            Linux is a free and open-source Unix-based operating system. As a result, there are many different 
            distributions to choose from when installing your operating system. Many distributions offer unique features 
            and advantages over others. Before selecting your distribution, it is important to understand what you want 
            out of your operating system. Here are some questions you might ask when choosing a Unix distribution:
        </p>

        <!-- Drop Down Menu-->
        <button onclick=dropDownFAQ(0) class="FAQDrop">What is the purpose of my computer?</button>
            <div class="sect">
                <p>
                    Different distributions are optimized for different uses such as graphic design, programming, general computing, or server use.
                </p>
            </div>

        <!--2nd section of drop down-->
        <button onclick=dropDownFAQ(1) class="FAQDrop">How beginner-friendly is it?</button>
        <div class="sect">
            <p>
                Some distributions of Unix are more beginner-friendly than others. They focus on an easy-to-understand installation process, familiar GUIs, and carrying 
                over features from popular operating systems such as Microsoft’s Windows or Apple’s MAC OS.
            </p>
        </div>

        <!--3rd section of drop down-->
        <button onclick=dropDownFAQ(2) class="FAQDrop">What package manager does it use?</button>
        <div class="sect">
            <p>
                The package manager is your way of installing, updating, and removing software packages from your computer. 
                with one package manager might make a user stay away from distributions that use other ones due to the hassle of relearning command syntax.
                Some package managers include:
            </p>
            <ul>
                <li>APT (Used by Debian-based distributions like Ubuntu)</li>
                <li>DNF (Used by Red Hat-based distributions such as Fedora)</li>
                <li>Pacman (Used by Arch Linux)</li>
                <li>Zypper (Used by openSUSE)</li>
                <li>Portage (Used by Gentoo)</li>
            </ul>
        </div>

        <!--4th section of drop down-->
        <button onclick=dropDownFAQ(3) class="FAQDrop">How beginner-friendly is it?</button>
        <div class="sect">
            <p>
                Some distributions of Unix are more beginner-friendly than others. They focus on an easy-to-understand installation process, familiar GUIs, and carrying 
                over features from popular operating systems such as Microsoft’s Windows or Apple’s MAC OS.
            </p>
        </div>

        <!--5th section of drop down-->
        <button onclick=dropDownFAQ(4) class="FAQDrop">How is the community support?</button>
        <div class="sect">
            <p>
                A strong community and active forum can be very helpful for finding solutions to problems and learning more about your distribution.
            </p>
        </div>

        <!--6th section of drop down-->
        <button onclick=dropDownFAQ(5) class="FAQDrop">What is the release model?</button>
        <div class="sect">
            <p>
                Different distributions offer unique release models. The two most common are a Point Release and Rolling Release model.
                A point release model means that updates are bundled together and scheduled to be released at specific times. 
                This type of release is known for offering a high degree of reliability.
                A Rolling Release model will push updates to the user as soon as they are ready to be released. 
                This leads to more frequent updates as well as having access to the latest features as soon as they are available.
                Certain distributions offer a hybrid system where updates are released more frequently than most point-release models, 
                offering a middle ground between the two models. Example: Fedora
            </p>
        </div>

        <!--7th section of drop down-->
        <button onclick=dropDownFAQ(6) class="FAQDrop">How important is security to me?</button>
        <div class="sect">
            <p>
                For more advanced users, some distributions emphasize security and privacy features more than others. 
                Consider what level of security you need and whether the distribution supports it. 
            </p>
        </div>

        <!--8th section of dropdown-->
        <button onclick=dropDownFAQ(7) class="FAQDrop">How limiting is my hardware?</button>
        <div class="sect">
            <p>
                Several distributions are made to run on specialized hardware. Some are made to 
                perform well on dated hardware and others focus on enterprise-grade servers.
            </p>
        </div>
        <h2>Information on UNIX Distributions</h2>
        <ul class="list">
            <li>Ubuntu</li>
            <ul class=subList>
                <li>
                    Ubuntu is one of the most popular and stable Unix distributions in the world. 
                    It has a large user base with a ton of tutorials and community support. 
                    A good choice for any beginner trying to learn Linux.
                </li>
            </ul>

            <li>Linux Mint</li>
            <ul class=subList>
                <li>
                    Linux Mint is known for being one of the most beginner-friendly distributions. 
                    Its desktop environment (Cinnamon) provides a modern and easy-to-use user interface.
                </li>
            </ul>
            <li>Arch Linux</li>
            <ul class=subList>
                <li>
                    Arch Linux focuses on being as barebones as possible. You have to install all the features yourself allowing for a highly customizable experience. 
                    It is known to be hard to get up and running and definitely not beginner-friendly.
                </li>
            </ul>
            <li>Zorin OS</li>
            <ul class=subList>
                <li>
                    Zorin OS was designed for users who want a familiar experience to Windows and macOS. 
                    It comes preinstalled with WINE and PlayOnLinux for running Windows applications on your Linux machine.
                </li>
            </ul>
            <li>Fedora</li>
            <ul class=subList>
                <li>
                    Fedora is known to be on the cutting edge of software releases while maintaining stability as a priority.
                </li>
            </ul>
            <li>Elementary OS</li>
            <ul class=subList>
                <li>
                    Elementary OS was made to be as close to MacOS as possible. 
                    It is built on Ubuntu and is known to be one of the most aesthetically pleasing and easy-to-use distributions you can get.
                </li>
            </ul>
            <li>macOS</li>
            <ul class=subList>
                <li>
                    MacOS is a Unix-based operating system developed by Apple for their line of MAC computers and laptops. 
                    It is the most well-known Unix-based operating system in the world by far. It is known for its end-user compatibility.
                </li>
            </ul>
        </ul>
    </div>            
    <script src="assets/scripts/dropDown.js"></script>

</body>
</html>

