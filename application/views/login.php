<section class="registration">
   <div class="registration-bg" style="background: url('<?= base_url('assets/') ?>/img/BG_Login.jpg') center top 12% #162b36; height: 800px;">
      <div class="container-form">
         <div>
            <h3>Log In</h3>
            <section class="registration-form">
               <div>
                  <input class="form-control" type="text" name="userid" placeholder="User ID">
               </div>
               <div>
                  <input class="form-control" type="password" name="password1" placeholder="Password">
               </div>
            </section>

            <section>
               <div class="agreements">

                  <!-- Remember My Account Name -->

                  <div>
                     <input name="oldenough" type="checkbox"><label for="">Remember my Account Name</label>
                  </div>
               </div>
            </section>

            <button class="btn-login" type="submit">Log In</button>
            <div class="form-links">
               <a href="">Forgot Your Password?</a>
               <br>
               <a href="">I need a new account</a><br>
            </div>
         </div>

      </div>
   </div>
</section>