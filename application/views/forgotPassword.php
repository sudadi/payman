<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('head'); ?>
  <body class="login">
    <div>      
        <div class="login_wrapper">
            <div class="form">
                <section class="login_content">
                    <form action="<?php echo base_url(); ?>resetPasswordUser" method="post" class="form-horizontal form-label-left input_mask">
                        <h1>Lupa Password</h1>
                        <?php $this->load->view('alert'); ?>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                          <input type="email" class="form-control has-feedback-right" placeholder="Masukkan Email" name="login_email" required />
                          <span class="fa fa-envelope form-control-feedback right" aria-hidden="true"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-default" value="Kirim" />
                            <a class="reset_pass" href="<?php echo base_url() ?>">Kembali ke Login!</a>
                        </div><!-- /.col -->
                        <div class="clearfix"></div>
                        <div class="separator">
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <p>Copyright &copy; DotKom 2017</p>
                                <p>Powered By <a href="https://colorlib.com">Gentelella - Bootstrap</a></p>
                            </div>
                        </div>
                    </form>
                </section>
            </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->
    </div>
   <?php $this->load->view('footerjs'); ?>  
  </body>
</html>