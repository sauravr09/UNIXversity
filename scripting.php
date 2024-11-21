<?php

    $pageName = "UNIXVERSITY - Scripting";
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
        <li><a href="scripting.php">Scripting</a></li>
    </ul>

    <!-- End Breadcrumb -->

    <div class="content">
        <h2>Scripting</h2>
        <p>
            Scripting can be very useful in Unix and in many other Operating Systems. 
            The default scripting language for Unix is bash. Bash files end in the .sh 
            file extension and is very similar to popular coding languages such as Python. 
            Unix still supports many scripting languages, such as Python, Perl, and AWK.
        </p>

        <ul class="contList">
            <!-- Sub List -->
            <li class="strHead"><strong>Basic Scripting Concepts</strong></li>
                
            <!-- Example -->
                <ul class="example">
                    <li><strong>Shebang Line</strong>
                        <ul>
                        This line should be the first line in a scripting file and tell 
                        the file what language the code is written in. The syntax for 
                        this line is as follows: #!/bin/[language name]. For example, if I was 
                        writing code in bash I would write #!/bin/bash as the shebang line. 
                        </ul>
                    </li>
                </ul>
                
        </br>

                <!-- Example -->
                <ul class="example">
                    <li><strong>Variables</strong>
                        <ul>
                        Variables store and manipulate data. Most languages define variables
                        in the same way, some languages simply require the name of the variable
                        and the data that should be stored. Other languages require the data type 
                        that will be stored within the data as well. Here are a few variable 
                        declaration examples from the most popular languages on Unix:
                        </ul>
                
                </br>

                        <li>
                            <ul>
                                <strong>Bash</strong> 
                                [variable name] = [Data]
                            </ul>
                            <ul>
                                <strong>Python</strong> 
                                [variable name] = [Data]
                            </ul>

                            <ul>
                                <strong>Perl</strong> 
                                @[array name] = [Array]
                                [variable name] = [Data]
                            </ul>

                            <ul>
                                <strong>AWK</strong> 
                                [variable name] = [Data]
                            </ul>
                        </li>

                    </li>
                </ul>
        </ul>

                </br>

                
            <!-- Example -->
                <ul class="example">
                    <li><strong>Functions</strong>
                        <ul>
                        Functions allow you to ‘wrap’ code into a reusable segment, that you 
                        can call repeatedly within a script. Functions have varying syntax based 
                        on which scripting language you are using. Here are examples of function 
                        definitions from the most common scripting languages in Unix: 
                </br>

                        <li>
                            <ul>
                                <strong>Bash</strong> 
                                [function name]{[code]}
                            </ul>
                            <ul>
                                <strong>Python</strong> 
                                def [function name]([parameter,parameter]){[code]}
                            </ul>

                            <ul>
                                <strong>Perl</strong> 
                                sub [function name]{[code]}

                            </ul>

                            <ul>
                                <strong>AWK</strong> 
                                function [function name]([parameter,parameter]){[code]}
                            </ul>
                        </ul>

                    </li>
                </ul>

                </br>


                <!-- Example -->
                <ul class="example">
                    <li><strong>Control Structures</strong>
                        <ul>
                        Control Structures allow users to write complex logic in scripts. 
                        Common control structures include if, while, and for loops.
                        </ul>
                        
                        </br>

                        <li>
                            <ul>
                                <li><strong>If</strong></li>
                                <ul>
                                    If statements check if a statement is true or false. If the 
                                    condition within the if statement is true, then the code is run. 
                                    If the statement is false, and an “if else” statement is present, 
                                    this is run next. This logic continues until there are no more if/if 
                                    else statements or an else statement (which are always at the end of 
                                    an if statement block) is reached. If none of the if statements are true, 
                                    and there is no else statement, then none of the code in the if statement 
                                    block is run and the program continues.
                                </ul>
                            </ul>

                            <ul>
                                <li><strong>While</strong></li>
                                <ul>
                                    Code in a while loop is run while a condition is true, and ends when the 
                                    condition becomes false.
                                </ul>
                            </ul>

                            <ul>
                             	<li><strong>For</strong> </li>
                                <ul>
                                    For loops are run while a variable (typically i) is not null (it exists). While 
                                    the variable exists, the code within the for loop is run for each variable in a 
                                    given set. For example, given the statement “for i in range(1,4): print(‘iteration’,i)” 
                                    this code will run for every number in the range of 1-4 (exclusive).
                                </ul>
                            </ul>

                    </li>
                </ul>
            
            </ul>
    </div>
</body>
</html>

