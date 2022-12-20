
   
   <?php require './header.php'?>
    <main>

 <section class="registration-sec">
         <div class="registration-cont">
             <form method="post">
                 <div class="input-cont">
                     <h3>Registration</h3>

                     <label for="userName">Usename</label>
                     <input class="input-type-2" id="userName" type="text" placeholder="User name" name="txtUserName" value="" />
                     <label for="userEmail">User Email</label>
                     <input class="input-type-2" id="userEmail" type="email" placeholder="Email" name="txtEmail" value="" />
                     <label for="pass">Password</label>
                     <input class="input-type-2" id="pass" type="password" placeholder="Password" name="txtPass" value="" />
                     <input class="input-type-2" id="conPass" type="password" placeholder="Confirm Password" name="txtConPass" value="" />
                     <div class="check-box">
                         <input type="checkbox" name="termsAccepted" required>
                         <a href="#">I agree to Terms of User</a>
                        
                     </div>
                     <div class="myBtn-cont">
                         <input class="input-type-submit" type="submit" name="submitReg" placeholder="submit">
                     </div>
                 </div>

             </form>

         </div>
     </section>

    </main>
    <?php require './footer.php'?>