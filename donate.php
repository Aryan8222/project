<!Doctype html>
<html lang="en">
<head>
  <meta charseta="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="http://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <title>Bloodbank</title>
</head>
        <body>
        <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img src="https://www.nicepng.com/png/detail/364-3647802_blood-symbol-png-blood-donation-app-logo.png" height="50"width="50">
            <span class="ml-3 text-xl">Choudhary blood Bank</span>
          </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="web.html" class="mr-5 hover:text-gray-900">Home</a>
            <a class="mr-5 hover:text-gray-900">Contact</a>
          </nav>
            
          </button>
        </div>
        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Welcome to Choudhary Blood Bank 
      
      </header>
      <style>
        body {
            text-align: center;
        }
    </style>
    <br>
    <br>
    <br>

<?php
	$sername="localhost";
    $uname="root";
    $pass="";
    $db="blood bank";
	// Database connection
	$conn =mysqli_connect($sername,$uname,$pass,$db);
	if(isset($_POST['Submit']))
    {
        if(!empty($_POST['email']) &&!empty($_POST['Name']) && !empty($_POST['Mobileno']) && !empty($_POST['Bloodgroup']))
        { 
            $email = $_POST['email'];
	        $Name = $_POST['Name'];
	        $Mobileno = $_POST['Mobileno'];
	        $Bloodgroup = $_POST['Bloodgroup'];
            
            $query="insert into donate(email, Name, Mobileno, Bloodgroup) values('$email','$Name','$Mobileno','$Bloodgroup')";
		    $run=mysqli_query($conn,$query);
        
            if($run)
            {
                echo "Form Submitted";
            }
            else
            {
                echo"not submitted";
            }
        }
    }     
    else
    {
        echo "Form Submitted Successfully";
	}
?>

        </body>
</html>