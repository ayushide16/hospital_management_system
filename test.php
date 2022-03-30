<?php
        $user=$_REQUEST['user'];
        $passwd=$_REQUEST['passwd'];
        $conn = new mysqli('localhost', 'ayushide', '1234', 'sem6_project');
			
			//Checking Connection
			
			if ($conn->connect_error)
			{
				die("Connection failed: " . $conn->connect_error);
			}
            #if(isset($_GET["submit"]))
            #{
                
                $sql="SELECT Username, Password FROM login_data;";
                echo "1";
                $result=$conn->query($sql);
                echo "2";
                if ($result->num_rows>0)
                {
                    echo "3";
                    while($row=$result->fetch_assoc())
                    {
                        echo $row["Username"];
                        echo $row["Password"];
                    }
                }
            
            #}
			
            $conn->close();
            ?>