mysqli_connect("localhost","root","","cseb");
    mysql_select_db("cseb");


    if(isset($_REQUEST["submit"]))
    {
        $user=$_POST["user"];
        $pass=$_POST["pass"];
        $qquery=mysql_query("select * from register1 where uname1='$user' and upswd1='$pass'");
        
        $count=mysql_num_rows($query);

        if($count==true)
        {
            echo "login sucess";
        }
        else
        {
            echo "login not sucess";
        }
    }

?>