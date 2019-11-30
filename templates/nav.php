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
    <div class="homeLink">
      <a href="index.php">
        <div>
          <img style="height: 125px" src="images/Akron_seal.png">
        </div>
        <div>
          <span style="font-size: 2em;">University of Akron <br></span>
          <span style="font-size: 1.5em;">
            <span style="color: #FFD61A;">STEM</span> Faculty Directory
          </span>
        </div>
      </a>
    </div>
    <div style="margin: auto 10px auto 0; " class="dropdown">
    <button class="dropbtn">Menu</button>
        <div class="dropdown-content">
            <a href="index.php">Search</a>
            <a href="insert.php">Insert</a>
            <a href="update.php">Update</a>
            <a href="delete.php">Delete</a>
            <a href="Stage_4/index.php">Stage 4: Initial Demo</a>
        </div>
    </div>
    
</nav>