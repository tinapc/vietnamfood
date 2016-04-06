<script type="text/javascript">
  $(document).ready(function() {
      $('#myFrm').parsley();
  });
</script>

<div class="container-fluid" id="pcont">
  <div class="fix-nav-tool">
    <a href="javascript:void(0)" onclick="$('#myFrm').submit()" class="btn btn-primary"><i class="fa fa-save"></i> Save</a>
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
                    <div class="row">
                      <div class="col-sm-12">
                          <!--Start Tab-->
                          <div class="tab-container">
                            <ul class="nav nav-tabs">
                              <li class="active">
                                <a href="#tb_document" data-toggle="tab" aria-expanded="true">General</a>
                              </li>
                              <li>
                                <a href="#tb_setting" data-toggle="tab" aria-expanded="true">Social</a>
                              </li>
                            </ul>
                            <div class="tab-content">
                              <div class="tab-pane cont active" id="tb_document">
                                <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="">Site name</label>
                                        <input type="text" name="site_name" value="<?=@$general['site_name']?>" class="form-control">
                                      </div>
                                      <div class="form-group">
                                        <label class="">Seo keyword (Home page)</label>
                                        <textarea name="seo_k_home" class="form-control"><?=@$general['seo_k_home']?></textarea>
                                      </div>
                                      <div class="form-group">
                                        <label class="">Seo Description (Home page)</label>
                                        <textarea name="seo_desc_home" class="form-control"><?=@$general['seo_desc_home']?></textarea>
                                      </div>
                                      <div class="form-group">
                                        <label class="">Company name</label>
                                        <input type="text" name="company_name" value="<?=@$general['company_name']?>" class="form-control">
                                      </div>
                                      <div class="form-group">
                                        <label class="">Company address</label>
                                        <input type="text" name="company_address" value="<?=@$general['company_address']?>" class="form-control" data-original-title="Địa chỉ này cũng được dùng để show google map" data-toggle="tooltip">
                                      </div>
                                      <div class="form-group">
                                        <label class="">Phone</label>
                                        <input type="text" name="phone" value="<?=@$general['phone']?>" class="form-control" >
                                      </div>
                                      <div class="form-group">
                                        <label class="">Video TĐ</label>
                                        <input type="text" name="video_td" value="<?=@$general['video_td']?>" class="form-control" >
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="">Website</label>
                                        <input type="text" name="website" value="<?=@$general['website']?>" class="form-control" >
                                      </div>
                                      <div class="form-group">
                                        <label class="">Email</label>
                                        <input type="text" name="email" value="<?=@$general['email']?>" class="form-control" >
                                      </div>
                                      <div class="form-group">
                                        <label class="">Fax</label>
                                        <input type="text" name="fax" value="<?=@$general['fax']?>" class="form-control" >
                                      </div> 
                                      <div class="form-group">
                                        <label class="">Hotline</label>
                                        <input type="text" data-toggle="tooltip" title="Nếu nhiều hơn một số Hotline, bạn có thể dùng dấu chấm phẩy để phân cách. <br> Ví dụ: 08.1234567, 0987665511" name="hotline" value="<?=@$general['hotline']?>" class="form-control" >
                                      </div>                                         
                                    </div>
                                </div>
                                  
                              </div>
                              <div class="tab-pane cont" id="tb_setting">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      	<div class="form-group">
	                                        <label class="">Facebook</label>
	                                        <input type="text" name="facebook" value="<?=@$social['facebook']?>" class="form-control">
	                                      </div>
	                                      <div class="form-group">
	                                        <label class="">Youtube</label>
	                                        <input type="text" name="youtube" value="<?=@$social['youtube']?>" class="form-control">
	                                      </div>
	                                      <div class="form-group">
	                                        <label class="">Twitter</label>
	                                        <input type="text" name="twitter" value="<?=@$social['twitter']?>" class="form-control">
	                                      </div>
	                                      <div class="form-group">
	                                        <label class="">RSS</label>
	                                        <input type="text" name="rss" value="<?=@$social['rss']?>" class="form-control">
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

      loadImagePreview('icon');
      loadImagePreview('image');
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

<script type="text/javascript" src="<?=base_url()?>tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
  tinymce.init({
      selector: "#entry_content",
      document_base_url: "<?=base_url()?>",
      relative_urls: false,
      height:400,
      theme: "modern",
      plugins: [
          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen",
          "insertdatetime media nonbreaking save table contextmenu directionality",
          "emoticons template paste textcolor colorpicker textpattern responsivefilemanager"
      ],
      toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media responsivefilemanager",
      toolbar2: "print preview | forecolor backcolor emoticons",
      image_advtab: true,
      //filemanager_crossdomain: true,
      external_filemanager_path:"<?=base_url()?>filemanager/",
      filemanager_title:"Filemanager" ,
      external_plugins: { 
          "filemanager" : "<?=base_url()?>filemanager/plugin.min.js"},
      templates: [
          {title: 'Test template 1', content: 'Test 1'},
          {title: 'Test template 2', content: 'Test 2'}
      ]
   });
</script>