<?php include "header.php"; ?>
<div id="main-Content">
    <div class="crud-form">
        <h2>Update Record</h2>
        <?php 

          $conn=mysqli_connect("localhost","root","","crud") or die("Connection Failed");

          $stu_id = $_GET['id'];

         $sql="SELECT * FROM student  WHERE sid = {$stu_id}";
         $result=mysqli_query($conn, $sql) or die("Query Unsuccessful.");

         if (mysqli_num_rows($result) > 0 )
         {
            
            while ($row = mysqli_fetch_assoc($result)) {
                # code...
            
        ?>

    </form>

           <form class="test-form" action="updatedata.php" method="post">
            <div class="crud-form"><br>
             
              <label>Name</label>
              <input type="hidden" name="sid"  value="<?php echo $row['sid']; ?>" />
       
        <input type="text" name="sname"  placeholder="Name"  value="<?php  echo $row['sname'];  ?>" /><br>
    </div>

          <div class="crud-form"><br>

             <label>Address</label>


        <input type="text" name="saddress" placeholder="Address"  value="<?php  echo $row['saddress'];  ?>"  /><br>

        </div>

        <div class="crud-form" ><br>
            <label>Class</label>
             <?php

             $sql1 = "SELECT * FROM studentclass";
             $result1=mysqli_query($conn, $sql1) or die("Unsuccessfull Query.");

             if(mysqli_num_rows($result1) > 0) {

                 echo '<select name="class">
                 <option value="" selected disabled ></option>';
                 
                 while($row1 = mysqli_fetch_assoc($result1)){

                    if ($row['sclass'] == $row1['cid']) {
                        $select ="Selected";
                    }
                    else{
                              $select="";
                    }
             
      
                echo "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
            } 

       
       
   echo "</select>";

 }
  ?>

    

        </div>

        <div class="crud-form"><br>
             <label>Number</label>
        
       
        <input type="text" name="sphone" placeholder="Phone" value="<?php  echo $row['sphone']; ?>"/><br><br>

    </div>

      <input type="radio" id="radio" >I accept the Terms of Use & Privacy Policy<br><br>
    <input class="submit" name="submit" type="submit" value="update">

        
    </div>
    </form> 
<?php } } ?>
</div>
</div>
