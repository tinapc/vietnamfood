<script type="text/javascript">
  $(document).ready(function() {
      $('#myFrm').parsley();
  });
</script>

<div class="container-fluid" id="pcont">
  <div class="fix-nav-tool">
    <a href="javascript:void(0)" onclick="$('#myFrm').submit()" class="btn btn-primary"><i class="fa fa-save"></i> Save</a>
    <a href="<?=$return_url?>" class="btn btn-default"><i class="fa fa-mail-reply"></i> Close</a>
  </div>

    <div class="cl-mcont">
        <div class="row">
            <div class="col-md-12">
              <div class="block-flat">
                <div class="header">              
                  <?=$template['partials']['breadcrum'];?>
                </div>
                <?php if($this->session->flashdata('message')) : ?>
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="fa fa-check sign"></i><strong>Success!</strong> <?=$this->session->flashdata('message')?>
                      </div>      
                <?php endif ?>
                <?php if($this->session->flashdata('error')) : ?>
                      <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="fa fa-times-circle sign"></i>
                            <strong>Error!</strong> <?php echo $this->session->flashdata('error');?>
                       </div>
                <?php endif ?>
                <div class="content">
                  <form action="<?=site_url(uri_string())?>" method="post" id="myFrm" class="form-horizontal group-border-dashed" style="border-radius: 0px;" data-parsley-validate novalidate>
                    <input type="hidden" name="id" value="<?=@$resource->id?>"/>
                    <?php if(isset($resource->created_at)) : ?>
                    <input type="hidden" name="created_at" value="<?=@$resource->created_at?>"/>  
                    <?php endif?>
                    <div class="row">
                      <div class="col-sm-12">
                          <!--Start Tab-->
                          <div class="tab-container">
                            <ul class="nav nav-tabs">
                              <li class="active">
                                <a href="#tb_document" data-toggle="tab" aria-expanded="true">General</a>
                              </li>
                              <!-- <li>
                                <a href="#tb_setting" data-toggle="tab" aria-expanded="true">Properties</a>
                              </li> -->
                            </ul>
                            <div class="tab-content">
                              <div class="tab-pane cont active" id="tb_document">
                                <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="">Company Name</label>
                                        <input type="text" name="company_name" value="<?=@$resource->company_name?>" class="form-control" required>
                                      </div>
                                      <div class="form-group">
                                        <label class="">Website</label>
                                        <input type="text" name="web_site" value="<?=@$resource->web_site?>" class="form-control" >
                                      </div>
                                                                            
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="">Logo</label>
                                        <div class="input-group">
                                          <input type="text" name="logo" id="logo" class="form-control" value="<?=@$resource->logo?>" required>
                                          <span class="input-group-btn">
                                          <a href="<?=base_url()?>filemanager/dialog.php?type=1&field_id=logo&fldr=partner" class="btn btn-primary iframe-btn"><i class="fa fa-picture-o"></i> Select File</a>
                                          </span>
                                        </div>

                                        <div class="row" style="display:none" id="preview_logo">
                                          <div class="col-sm-12">
                                            <img src="" class="img-responsive"/>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="checkbox my-checkbox">
                                        <label class="checkbox-inline"> 
                                        <?php if(isset($resource->published)) :?>
                                          <?php if($resource->published == 1) : ?>
                                            <input type="checkbox" name="published" checked="checked" value="1" class="icheck"> Published </label>
                                          <?php else : ?>
                                            <input type="checkbox" name="published" value="1" class="icheck"> Published </label>
                                          <?php endif ?>
                                        <?php else : ?>
                                          <input type="checkbox" name="published" checked="checked" value="1" class="icheck"> Published </label>
                                        <?php endif ?>
                                        
                                      </div>
                                    </div>
                                </div>
                                  
                              </div>
                              
                            </div>
                          </div><!--end Tab-->
                      </div>
                    </div>

                    
                  </form>
                </div>
              </div>
            </div>
        </div> 
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
     $('.iframe-btn').fancybox({
        'width' : 880,
        'height'  : 600,
        'minHeight': 500,
        'type'  : 'iframe',
        'autoScale'   : false
      });

      loadImagePreview('logo');
  });

  function responsive_filemanager_callback(fieldID){
    var url=jQuery('#'+fieldID).val();
    //alert('update '+fieldID+" with "+url);
    //your code
    $('#preview_' + fieldID + ' img').attr('src', url);
    $('#preview_' + fieldID).show();
  }

  function loadImagePreview(field) {
    var url=jQuery('#'+field).val();
    //alert('update '+fieldID+" with "+url);
    //your code
    $('#preview_' + field + ' img').attr('src', url);
    $('#preview_' + field).show();  
  }
</script>