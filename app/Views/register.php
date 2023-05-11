
<div class="container">
    <div class="row">
      <div class="col-12 col-sm8-offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
      <div class="container">
        <h3>Register</h3>
        <hr>
        <form class="" action="/register" method="post">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" class="form-control" name="username" id="username" value="<?= set_value('username') ?>">
                </div>
                </div>
              <div class="col-12 col-sm-6">
              <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" name="fullname" id="fullname" value="<?= set_value('fullname') ?>">
                </div>
               </div>
                 <div class="col-12">
                 <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
                </div>
                </div>
                <div class="col-12 col-sm-6">
               <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" value="">
              </div>
              </div>
              <div class="col-12 col-sm-6">
               <div class="form-group">
                <label for="password_confirm">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
              </div>
              </div>
              <?php if (isset($validation)): ?>
                <div class="col-12">
                  <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors() ?>
              </div>
              </div>
                <?php endif; ?>
              </div>

         <div class="row">
            <div class="col-12 col-sm-4">
                <button type="submit" class="btn btn-primary">Register</button>
               
          </div>
          <div class="col-12 col-sm-8 text-right">
            <a href="/login">Already have an account</a>
         </div>
        </div>
       </form>
     </div>
   </div>
  </div>
</div>