<?php

    $pageName = "UNIXVERSITY - Permissions & Security";
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
        <li><a href="permissionsandsecurity.php">Permissions and Security</a></li>
    </ul>

    <!-- End Breadcrumb -->

    <div class="content">
        <h2>User Account Management</h2>
        <p>Account information for users is stored in the /etc/passwd file. 
            Some of the fields displayed for each account are the name, password, 
            home directory location, default shell, and some other values.</p>

                <!-- Example -->
                <ul class="example">
                    <li> 
                    Example: 
                        <ul>
                        /etc/passwd:
                        username:password:UID:GID:comment:home:shell
                        </ul>
                    </li>
                </ul>

        <h2>Modify User Accounts</h2>
        <p>There are 3 commands that you need to know for changing user accounts.</p>

                <!-- Example -->
                <ul class="example">
                    <li> 
                        useradd : add a user to your system
                    </li>
                    <li> 
                        usermod : modify an existing user account
                    </li>
                    <li> 
                        userdel : delete an existing user account
                    </li>
                </ul>

        <h2>Group Account Management</h2>
        <p>Similar to user account information, account information for groups are stored in the /etc/group file.
        This is useful for troubleshooting and helps ensure users can access the resources they need.</p>

                <!-- Example -->
                <ul class="example">
                    <li> 
                    Example: 
                        <ul>
                        /etc/group:
                        groupname:password:GID:group members
                        </ul>
                    </li>
                </ul>
            
        <h2>Modify Group Accounts</h2>
        <p>There are 3 commands that you need to know for changing group accounts.</p>

                <!-- Example -->
                <ul class="example">
                    <li> 
                        groupadd : add a group to your system
                    </li>
                    <li> 
                        groupmod : modify an existing group account
                    </li>
                    <li> 
                        groupdel : delete an existing group account
                    </li>
                </ul>

        <h2>Manage Group Accounts</h2>
            <p>
                To add a user to a group, you have to edit the user file, not the group.
                It is necessary to use the usermod command to add a user to a group.
            </p>
            <p>Here are some important commands for group membership:</p>


                <!-- Example -->
                <ul class="example">
                    <li> 
                    usermod : update group membership
                    </li>
                    <li> 
                    id : Display a list of groups the user is a member of
                    </li>
                    <li> 
                    cat /etc/group : Show a list of existing groups
                    </li>
                </ul>

    </div>
</body>
</html>
