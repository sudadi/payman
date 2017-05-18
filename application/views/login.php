<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('head'); ?>
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php $this->load->view('alert'); ?>
            <form action="<?php echo base_url(); ?>loginMe" method="post">
                <h1>Form Login</h1>
                <div>
                  <input type="text" class="form-control" placeholder="Username" required="" />
                </div>
                <div>
                  <input type="password" class="form-control" placeholder="Password" required="" />
                </div>
                <div>
                    <input type="submit" class="btn btn-default" value="Log-in">
                    <a class="reset_pass" href="<?php echo base_url() ?>forgotPassword">Lupa password?</a>
                </div>
                <div class="clearfix"></div>
                <div class="separator">
                  <div class="clearfix"></div>
                  <br />
                  <div>
                      <h1><i class="fa fa-users fa-lg"></i> PayMan</h1>
                      <p>Copyright &copy; DotKom 2017</p>
                      <p>Powered By <a href="https://colorlib.com">Gentelella - Bootstrap</a></p>
                  </div>
                </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
