<?php defined('BASEPATH') OR exit('No direct script access allowed');

/* 
 * Copyright (C) 2017 DotKom <sudadi.kom@yahoo.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */


$this->load->helper('form'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
  </div>
</div>
  <?php
  $error = $this->session->flashdata('error');
  $send = $this->session->flashdata('send');
  $notsend = $this->session->flashdata('notsend');
  $unable = $this->session->flashdata('unable');
  $invalid = $this->session->flashdata('invalid');
  if($error)
  {
      ?>
      <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <?php echo $this->session->flashdata('error'); ?>                    
      </div>
  <?php }

  if($send)
  {
      ?>
      <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <?php echo $send; ?>                    
      </div>
  <?php }

  if($notsend)
  {
      ?>
      <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <?php echo $notsend; ?>                    
      </div>
  <?php }

  if($unable)
  {
      ?>
      <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <?php echo $unable; ?>                    
      </div>
  <?php }

  if($invalid)
  {
      ?>
      <div class="alert alert-warning alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <?php echo $invalid; ?>                    
      </div>
  <?php } ?>