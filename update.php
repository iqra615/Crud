<?php include "header.php"; ?>
<div id="main-Content">
    <div class="crud-form">
        <h2>Update Record</h2>
        <form class="test-form" action="Updated" method="post">

            

          <div class="crud-form">

        <input type="text" name="sid" value=""  placeholder="ID" /><br>
        </div>
        

    </form>

           <form class="test-form" action="Updated" method="post"><br>
            <div class="crud-form">

       
        <input type="text" name="sname" value="" placeholder="Name" /><br>
    </div>

          <div class="crud-form"><br>


        <input type="text" name="saddress" value="" placeholder="Address" /><br>

        </div>

        <div class="crud-form" ><br>
            
            <select>
                <option value="" selected disabled >Select Class</option>
        <option value="1">Computer Science</option>
        <option value="2">Management</option>
        <option value="3">Medical</option>
        <option value="4">School</option>
    </select>

        </div>

        <div class="crud-form"><br>
        
       
        <input type="text" name="sphone" value=""  placeholder="Phone" /><br><br>

    </div>

      <input type="radio" id="radio" >I accept the Terms of Use & Privacy Policy<br><br>
    <input class="submit" name="submit" type="submit" value="submit">

        
    </div>
    </form>