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
                        <input type="text" name="first_name" value="<?=$user->first_name?>" class="form-control" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Last Name</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="last_name" value="<?=$user->last_name?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Company</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="Placeholder text" name="company" value="<?=$user->company?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Phone</label>
                      <div class="col-sm-6">
                        <input type="text" name="phone" class="form-control" placeholder="Phone" value="<?=$user->phone?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Password</label>
                      <div class="col-sm-6">
                        <input type="password" data-original-title="Thay đổi mật khẩu nếu cần" data-toggle="tooltip" class="form-control" placeholder="Password" name="password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Password Confirm</label>
                      <div class="col-sm-6">
                        <input type="password" class="form-control" name="password_confirm" placeholder="Password Confirm">
                      </div>
                    </div>
                    <?php //if ($this->ion_auth->is_admin()): ?>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Member of Group</label>
                      <div class="col-sm-6">
                        <?php foreach ($groups as $group):?>
                        <div class="radio"> 
                          <label>
                            <?php
                                $gID=$group['id'];
                                $checked = null;
                                $item = null;
                                foreach($currentGroups as $grp) {
                                    if ($gID == $grp->id) {
                                        $checked= ' checked="checked"';
                                    break;
                                    }
                                }
                            ?>
                                <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                                <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                          </label> 
                        </div>
                        <?php endforeach ?>
                      </div>
                    </div>
                    <input type="hidden" name="id" value="<?=$user->id?>">
                  </form>
                </div>
              </div>
            </div>
        </div> 
    </div>
</div>
