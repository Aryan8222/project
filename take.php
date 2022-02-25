<?php
        if(isset($_POST['search']))
        {
            $valueToSearch = $_POST['Bloodgroup'];

            $query = "SELECT * FROM `donate` WHERE CONCAT(`email`, `Name`, `Mobileno`, `Bloodgroup`) LIKE '%".$valueToSearch."%'";
            $search_result = filterTable($query);
            
        }
         else {
            $query = "SELECT * FROM `donate`";
            $search_result = filterTable($query);
        }
        
        // function to connect and execute the query
        function filterTable($query)
        {
            $connect = mysqli_connect("localhost", "root", "", "blood bank");
            $filter_Result = mysqli_query($connect, $query);
            return $filter_Result;
        }
        
        ?>
        
        <!DOCTYPE html>
        <html>
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
            <span class="ml-3 text-xl">Choudhary Blood Bank</span>
          </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="web.html" class="mr-5 hover:text-gray-900">Home</a>
            <a href="contact.html"class="mr-5 hover:text-gray-900">Contact</a>
          </nav>
            
          </button>
        </div>
      </header>
      <section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
    <img class="object-cover object-center rounded" alt="hero" src="https://st.depositphotos.com/1163607/1682/v/600/depositphotos_16827173-stock-illustration-blood-donation.jpg" height="400" width="400">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Welcome to Choudhary Blood Bank 
    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Enter The Bloodgroup You Need Below 
      </h1>
    
                <style>
                    table,tr,th,td
                    {
                        border: 1px solid black;
                    }
                </style>
            </head>
            <body>
            
                <form action="take.php" method="post">
                    <input type="text" name="Bloodgroup" placeholder="Bloodgroup"><br><br>
                    <input type="submit" name="search" value="Enter"><br><br>
                    
                    <table>
                        <tr>
                            <th>E mail</th>
                            <th>Name</th>
                            <th>Contact No.</th>
                            <th>Blood Group</th>
                        </tr>
        
              <!-- populate table from mysql database -->
                        <?php 
                        while($row = mysqli_fetch_array($search_result)):?>
                        <tr>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['Name'];?></td>
                            <td><?php echo $row['Mobileno'];?></td>
                            <td><?php echo $row['Bloodgroup'];?></td>
                        </tr>
                        <?php endwhile;?>
                    </table>
                </form>
                
            </body>
        </html>