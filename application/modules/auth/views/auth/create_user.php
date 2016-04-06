<script type="text/javascript">
  $(document).ready(function() {
      $('#myFrm').parsley();
  });
</script>

<div class="container-fluid" id="pcont">
  <div class="fix-nav-tool">
    <a href="javascript:void(0)" onclick="$('#myFrm').submit()" class="btn btn-primary">Save</a>
    <a href="<?=base_url()?>auth/users" class="btn btn-default">Close</a>
  </div>

    <div class="cl-mcont">
        <div class="row">
            <div class="col-md-12">
            
              <div class="block-flat">
                <div class="header">              
                  <?=$template['partials']['breadcrum'];?>
                </div>
                  <?php if(!empty($message)) : ?>
                        <div class="alert alert-danger">
                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                              <i class="fa fa-times-circle sign"></i>
                              <strong>Error!</strong> <?php echo $message;?>
                         </div>
                  <?php endif ?>

                <div class="content">
                  <form action="<?=site_url(uri_string())?>" method="post" id="myFrm" class="form-horizontal group-border-dashed" style="border-radius: 0px;" data-parsley-validate novalidate>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">First Name</label>
                      <div class="col-sm-6">
                        <input type="text" name="first_name" value="<?=$this->form_validation->set_value('first_name')?>" class="form-control" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Last Name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="last_name" value="<?=$this->form_validation->set_value('last_name')?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Company</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="company" value="<?=$this->form_validation->set_value('company')?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Phone</label>
                      <div class="col-sm-6">
                        <input type="text" name="phone" class="form-control" value="<?=$this->form_validation->set_value('phone')?>" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Email</label>
                      <div class="col-sm-6">
                        <input type="email" required name="email" class="form-control" value="<?=$this->form_validation->set_value('email')?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Password</label>
                      <div class="col-sm-6">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Password Confirm</label>
                      <div class="col-sm-6">
                        <input type="password" class="form-control" name="password_confirm" placeholder="Password Confirm" required>
                      </div>
                    </div>
                    
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div> 
    </div>
</div>


<!-- <h1><?php echo lang('create_user_heading');?></h1>
<p><?php echo lang('create_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_user");?>

      <p>
            <?php echo lang('create_user_fname_label', 'first_name');?> <br />
            <?php echo form_input($first_name);?>
      </p>

      <p>
            <?php echo lang('create_user_lname_label', 'last_name');?> <br />
            <?php echo form_input($last_name);?>
      </p>

      <p>
            <?php echo lang('create_user_company_label', 'company');?> <br />
            <?php echo form_input($company);?>
      </p>

      <p>
            <?php echo lang('create_user_email_label', 'email');?> <br />
            <?php echo form_input($email);?>
      </p>

      <p>
            <?php echo lang('create_user_phone_label', 'phone');?> <br />
            <?php echo form_input($phone);?>
      </p>

      <p>
            <?php echo lang('create_user_password_label', 'password');?> <br />
            <?php echo form_input($password);?>
      </p>

      <p>
            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
            <?php echo form_input($password_confirm);?>
      </p>


      <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>

<?php echo form_close();?>
 -->