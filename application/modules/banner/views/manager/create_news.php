<script type="text/javascript">
  $(document).ready(function() {
      $('#myFrm').parsley();
  });
</script>

<div class="container-fluid" id="pcont">
  <div class="fix-nav-tool">
    <a href="javascript:void(0)" onclick="$('#myFrm').submit()" class="btn btn-primary">Save</a>
    <a href="<?=ADMIN_URL?>resource/news/<?=$this->uri->segment(4)?>/?contentType=<?=$this->input->get('contentType')?>" class="btn btn-default">Close</a>
  </div>

    <div class="cl-mcont">
        <div class="row">
            <div class="col-md-12">
              <div class="block-flat">
                <div class="header">              
                  <?=$template['partials']['breadcrum'];?>
                </div>
                <?php if(!empty($this->session->flashdata('message'))) : ?>
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="fa fa-check sign"></i><strong>Success!</strong> <?=$this->session->flashdata('message')?>
                      </div>      
                <?php endif ?>
                <?php if(!empty($this->session->flashdata('error'))) : ?>
                      <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="fa fa-times-circle sign"></i>
                            <strong>Error!</strong> <?php echo $this->session->flashdata('error');?>
                       </div>
                <?php endif ?>
                <div class="content">
                  <form action="<?=site_url(uri_string())?>" method="post" id="myFrm" class="form-horizontal group-border-dashed" style="border-radius: 0px;" data-parsley-validate novalidate>
                    <input type="hidden" name="id" value="<?=@$resource->id?>"/>
                    <input type="hidden" name="content_type" value="<?=$this->input->get('contentType')?>"/>
                    <?php if(isset($resource->created_at)) : ?>
                    <input type="hidden" name="created_at" value="<?=@$resource->created_at?>"/>  
                    <?php endif?>
                    <div class="row">
                      <div class="col-sm-12">
                          <!--Start Tab-->
                          <div class="tab-container">
                            <ul class="nav nav-tabs">
                              <li class="active">
                                <a href="#tb_document" data-toggle="tab" aria-expanded="true">Document</a>
                              </li>
                              <li>
                                <a href="#tb_setting" data-toggle="tab" aria-expanded="true">Properties</a>
                              </li>
                            </ul>
                            <div class="tab-content">
                              <div class="tab-pane cont active" id="tb_document">
                                <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="">Title</label>
                                        <input type="text" name="title" value="<?=@$resource->title?>" class="form-control" required>
                                      </div>
                                      <div class="form-group">
                                        <label class="">Long Title</label>
                                        <input type="text" name="long_title" value="<?=@$resource->long_title?>" class="form-control" >
                                      </div>
                                      <div class="form-group">
                                        <label class="">Description</label>
                                        <textarea name="description" class="form-control"><?=@$resource->description?></textarea>
                                      </div>
                                      <div class="form-group">
                                        <label class="">Intro text</label>
                                        <textarea name="intro" class="form-control"><?=@$resource->intro?></textarea>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="">Parent resource</label>
                                        <select class="select2" name="parent">
                                          <option value="0">Normal</option>
                                          <?php if(count($this->load->get_var('resoucesCateNews')) > 0 && $this->input->get('contentType') == 'news_item') : ?>
                                              <?php foreach($this->load->get_var('resoucesCateNews') as $row) : ?>
                                                  <?php if( $this->uri->segment(4) && $row->id == $this->uri->segment(4)) {
                                                    echo '<option value="'.$row->id.'" selected="selected">'.$row->title.'</option>';
                                                  } else {
                                                    echo '<option value="'.$row->id.'">'.$row->title.'</option>';
                                                  } ?>
                                                <?php endforeach ?>
                                          <?php endif?>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label class="">External resource</label>
                                        <input type="text" name="external_link" value="<?=@$resource->external_link?>" class="form-control" placeholder="http://google" data-original-title="Nếu bạn muốn liên kết đến một webpage ngoài. Vui lòng nhập giá trị. <br>Ví dụ: http://google.com" data-toggle="tooltip">
                                      </div>
                                      <div class="form-group">
                                        <label class="">Alias</label>
                                        <input type="text" name="alias" value="<?=@$resource->alias?>" class="form-control" data-original-title="Tạo đường dẫn thân thiện <br>Ví dụ: http://domain.com/this-name-of-page" data-toggle="tooltip">
                                      </div>
                                      <div class="form-group">
                                        <label class="">Menu Title</label>
                                        <input type="text" name="menu_title" value="<?=@$resource->menu_title?>" class="form-control">
                                      </div>
                                      <div class="form-group">
                                        <label class="">Link Attribute</label>
                                        <input type="text" name="link_attr" value="<?=@$resource->link_attr?>" class="form-control" data-original-title="Thuộc tính của liên kết <br>Ví dụ:target='_blank' style='border:1px solid #ccc'" data-toggle="tooltip">
                                      </div>
                                      <div class="checkbox my-checkbox">
                                        <label class="checkbox-inline"> 
                                        <input type="checkbox" name="hide_from_menu" value="1" <?php if(@$resource->hide_from_menu == 1) echo "checked=checked";?> class="icheck"> Hide from Menu </label>
                                        <label class="checkbox-inline"> 
                                        <input type="checkbox" name="is_default" value="1" <?php if(@$resource->is_default == 1) echo "checked=checked";?> class="icheck"> is Default </label>  
                                        <label class="checkbox-inline"> 
                                        <input type="checkbox" name="show_home" value="1" <?php if(@$resource->show_home == 1) echo "checked=checked";?> class="icheck"> Show Home </label> 
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
                              <div class="tab-pane cont" id="tb_setting">
                                  <div class="row">
                                    <div class="col-sm-6">
                                      <div class="form-group">
                                        <label class="">Icon</label>
                                        <input type="text" name="icon" value="<?=@$resource->icon?>" class="form-control">
                                      </div>
                                      <div class="form-group">
                                        <label class="">Feature Image</label>
                                        <input type="text" name="image" value="<?=@$resource->image?>" class="form-control" >
                                      </div>
                                      
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div><!--end Tab-->
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                            <label class="">Content</label>
                            <textarea id="entry_content" name="content"><?=@$resource->content?></textarea>
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
          "emoticons template paste textcolor colorpicker textpattern"
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