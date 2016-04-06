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
                                        <label class="">Name</label>
                                        <input type="text" name="name" value="<?=@$resource->name?>" class="form-control" required>
                                      </div>
                                      <div class="form-group">
                                        <label class="">Position</label>
                                        <input type="text" name="position" value="<?=@$resource->position?>" class="form-control" >
                                      </div>
                                      <div class="form-group">
                                        <label class="">Phone</label>
                                        <input type="text" name="phone" value="<?=@$resource->phone?>" class="form-control" >
                                      </div>
                                      
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="">Yahoo</label>
                                        <input type="text" name="yahoo" value="<?=@$resource->yahoo?>" class="form-control">
                                      </div>
                                      <div class="form-group">
                                        <label class="">Skype</label>
                                        <input type="text" name="skype" value="<?=@$resource->skype?>" class="form-control">
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

<script type="text/javascript" src="<?=base_url()?>tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
  tinymce.init({
      selector: "#entry_content",
      height:400,
      theme: "modern",
      plugins: [
          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen",
          "insertdatetime media nonbreaking save table contextmenu directionality",
          "emoticons template paste textcolor colorpicker textpattern filemanager"
      ],
      toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
      toolbar2: "print preview media | forecolor backcolor emoticons",
      image_advtab: true,
      templates: [
          {title: 'Test template 1', content: 'Test 1'},
          {title: 'Test template 2', content: 'Test 2'}
      ]
   });
</script>