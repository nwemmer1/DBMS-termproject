<nav>
    <style type="text/css">
        /* Dropdown Button */
        .dropbtn {
          background-color: #FFD61A;
          color: #030A8C;
          padding: 16px 75px 16px 75px;
          font-size: 20px;
          font-weight: bold;
          border: none;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
          position: relative;
          display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f1f1f1;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {background-color: #ddd;}

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {display: block;}

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {background-color: #D6B315;}
    </style>
    <a href="index.php">
    <img style="height: 90px" src="images/ZLogo.png">
    </a>
    <div style="margin: auto 10px auto 0; " class="dropdown">
    <button class="dropbtn">Menu</button>
        <div class="dropdown-content">
            <a href="add_entry.php">Add a Faculty Member</a>
            <a href="searchOffice_form.php">Search by room number</a>
            <a href="searchName_form.php">Search by Last Name</a>
            <a href="searchDepartment_form.php">Display Department Information</a>
            <a href="displayScholarships_form.php">Search for Scholarships</a>
            <a href="displayAllEmployees.php">Display all Employees</a>
            <a href="update_form.php">Update an Employee entry</a>
            <a href="delete_form.php">Delete an Employee entry</a>>
        </div>
    </div>
    
</nav>