
<?php  include 'header.php'?>
<div id="main-Content">
    <h2>Registration Form</h2>
    <form class="test-form" action="registered.php" method="post">




      <div class="crud-form"><br>
            <input type="text" name="sid" placeholder="ID">

        </div>





        
        <div class="crud-form"><br>
            <input type="text" name="sname" placeholder="Name">

        </div>
        <div class="crud-form"><br>
            <input type="text" name="saddress" placeholder="Address">
        </div>

        <div class="crud-form"><br>
            
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                 <?php 
                $conn=mysqli_connect("localhost","root","","crud") or die("connection_aborted");

         $sql="SELECT * FROM  studentclass"; 
         $result=mysqli_query($conn,$sql) or die("Query Unsuccessful.");


         while($row = mysqli_fetch_assoc($result)){

                ?>
                <option value="<?php  echo $row['cid'];?>"><?php echo $row['cname'];?></option>
                
           <?php }  ?>
         
            </select>

        </div>

        <div class="crud-form"><br>
            <input type="text" name="sphone" placeholder="Phone">
            
        </div>
        <input class="submit" name="submit" type="submit" value="Submit"><br>
    </form>
</div>
 
