<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('head'); ?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php $this->load->view('sidemenu'); ?>
        <?php $this->load->view('topnav'); ?>       
        <!-- page content -->
        
        <!-- /page content -->
        <?php $this->load->view('footer'); ?>
      </div>
    </div>
    <?php $this->load->view('footerjs'); ?>  
  </body>
</html>
