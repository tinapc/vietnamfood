<script type="text/javascript">
    $(document).ready(function () {
        $('#myFrm').parsley();
    });
</script>

<style type="text/css">
    #preview_image1 img,
    #preview_image2 img,
    #preview_image3 img,
    #preview_image4 img,
    #preview_image5 img {
        max-width: 25%;
    }
</style>

<div class="container-fluid" id="pcont">
    <div class="fix-nav-tool">
        <a href="javascript:void(0)" onclick="$('#myFrm').submit()" class="btn btn-primary"><i class="fa fa-save"></i> Save</a>
        <?php if (isset($return_url)) : ?>
            <a href="<?=$return_url?>" class="btn btn-default"><i class="fa fa-mail-reply"></i> Close</a>
        <?php else : ?>
            <a href="<?= ADMIN_URL ?>resource/product/<?= $this->uri->segment(4) ?>/?contentType=<?= $this->input->get('contentType') ?>" class="btn btn-default"><i class="fa fa-mail-reply"></i> Close</a>
        <?php endif ?>
    </div>

    <div class="cl-mcont">
        <div class="row">
            <div class="col-md-12">
                <div class="block-flat">
                    <div class="header">
                        <?= $template['partials']['breadcrum']; ?>
                    </div>
                    <?php if ($this->session->flashdata('message')) : ?>
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="fa fa-check sign"></i><strong>Success!</strong> <?= $this->session->flashdata('message') ?>
                        </div>
                    <?php endif ?>
                    <?php if ($this->session->flashdata('error')) : ?>
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="fa fa-times-circle sign"></i>
                            <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                        </div>
                    <?php endif ?>
                    <div class="content">
                        <form action="<?= site_url(uri_string()) ?>" method="post" id="myFrm" class="form-horizontal group-border-dashed" style="border-radius: 0px;"
                              data-parsley-validate novalidate>
                            <input type="hidden" name="id" value="<?= @$resource->id ?>"/>
                            <input type="hidden" name="content_type" value="<?= $this->input->get('contentType') ?>"/>
                            <?php if (isset($resource->created_at)) : ?>
                                <input type="hidden" name="created_at" value="<?= @$resource->created_at ?>"/>
                            <?php endif ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!--Start Tab-->
                                    <div class="tab-container">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tb_document" data-toggle="tab" aria-expanded="true">Nội dung</a>
                                            </li>
                                            <li>
                                                <a href="#tb_setting" data-toggle="tab" aria-expanded="true">Hình ảnh</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane cont active" id="tb_document">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="">Title (Vietnamese)</label>
                                                            <input type="text" name="title" value="<?= @$resource->title ?>" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="">Title (English)</label>
                                                            <input type="text" name="title_en" value="<?= @$resource->title_en ?>" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="">Alias</label>
                                                            <input type="text" name="alias" value="<?= @$resource->alias ?>" class="form-control"
                                                                   data-original-title="Tạo đường dẫn thân thiện <br>Ví dụ: http://domain.com/this-name-of-page"
                                                                   data-toggle="tooltip">
                                                        </div>
                                                        <!-- <div class="form-group">
                                                            <label class="">Menu Title (Vietnamese)</label>
                                                            <input type="text" name="menu_title" value="<?= @$resource->menu_title ?>" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="">Menu Title (English)</label>
                                                            <input type="text" name="menu_title_en" value="<?= @$resource->menu_title_en ?>" class="form-control">
                                                        </div> -->

                                                        <div class="form-group">
                                                            <label class="">SEO Keyword</label>
                                                            <input type="text" name="long_title" value="<?= @$resource->long_title ?>" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="">SEO Description</label>
                                                            <textarea name="description" class="form-control"><?= @$resource->description ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="">Intro text (Vietnamese)</label>
                                                            <textarea name="intro" class="form-control"><?= @$resource->intro ?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="">Intro text (English)</label>
                                                            <textarea name="intro_en" class="form-control"><?= @$resource->intro_en ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="">Parent resource</label>
                                                            <select class="select2" name="parent" required>
                                                                <option value="">Normal</option>
                                                                <?php if (count($this->load->get_var('resoucesCateProducts')) > 0 && $this->input->get('contentType') == 'product_item') : ?>
                                                                    <?php foreach ($this->load->get_var('resoucesCateProducts') as $row) : ?>
                                                                        <?php if ($this->uri->segment(4) && $row->id == $resource->parent) {
                                                                            echo '<option value="' . $row->id . '" selected="selected">' . $row->title . '</option>';
                                                                        } else {
                                                                            echo '<option value="' . $row->id . '">' . $row->title . '</option>';
                                                                        } ?>
                                                                    <?php endforeach ?>
                                                                <?php endif ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="">Order</label>
                                                            <input type="text" name="menu_index" value="<?= @$resource->menu_index ?>" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="">Product Code</label>
                                                            <input type="text" name="product_code" value="<?= @$resource->product_code ?>" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="">Price</label>
                                                            <input type="text" name="price" value="<?= @$resource->price ?>" class="form-control" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="">Price Promotion</label>
                                                            <input type="text" name="price_promotion" value="<?= @$resource->price_promotion ?>" class="form-control">
                                                        </div>

                                                        <!-- <div class="form-group">
                                                            <label class="">External resource</label>
                                                            <input type="text" name="external_link" value="<?= @$resource->external_link ?>" class="form-control"
                                                                   placeholder="http://google"
                                                                   data-original-title="Nếu bạn muốn liên kết đến một webpage ngoài. Vui lòng nhập giá trị. <br>Ví dụ: http://google.com"
                                                                   data-toggle="tooltip">
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="">Link Attribute</label>
                                                            <input type="text" name="link_attr" value="<?= @$resource->link_attr ?>" class="form-control"
                                                                   data-original-title="Thuộc tính của liên kết <br>Ví dụ:target='_blank' style='border:1px solid #ccc'"
                                                                   data-toggle="tooltip">
                                                        </div> -->
                                                        <div class="checkbox my-checkbox">
                                                            <label class="checkbox-inline">
                                                                <?php if (isset($resource->published)) : ?>
                                                                    <?php if ($resource->published == 1) : ?>
                                                                    <input type="checkbox" name="published" checked="checked" value="1" class="icheck"> Published </label>
                                                                    <?php else : ?>
                                                                    <input type="checkbox" name="published" value="1" class="icheck"> Published </label>
                                                                  <?php endif ?>
                                                                <?php else : ?>
                                                                  <input type="checkbox" name="published" checked="checked" value="1" class="icheck"> Published </label>
                                                                <?php endif ?>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="hide_from_menu"
                                                                       value="1" <?php if (@$resource->hide_from_menu == 1) echo "checked=checked"; ?> class="icheck">
                                                                Hide from Menu </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="is_default"
                                                                       value="1" <?php if (@$resource->is_default == 1) echo "checked=checked"; ?> class="icheck"> is
                                                                Default </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="show_home"
                                                                       value="1" <?php if (@$resource->show_home == 1) echo "checked=checked"; ?> class="icheck"> Show
                                                                Home </label>

                                                            <!--<label class="checkbox-inline" style="margin-left:0px">
                                                                <input type="checkbox" name="show_gallery"
                                                                       value="1" <?php /*if (@$resource->show_gallery == 1) echo "checked=checked"; */?> class="icheck"> Show
                                                                Gallery </label>-->


                                                                <label class="checkbox-inline">
                                                                    <input type="checkbox" name="is_hot"
                                                                           value="1" <?php if (@$resource->is_hot == 1) echo "checked=checked"; ?> class="icheck"> Is Hot </label>


                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="tab-pane cont" id="tb_setting">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <!-- <div class="form-group">
                                                            <label class="">Icon</label>

                                                            <div class="input-group">
                                                                <input type="text" name="icon" id="icon" class="form-control" value="<?= @$resource->icon ?>">
                                                                  <span class="input-group-btn">
                                                                  <a href="<?= base_url() ?>filemanager/dialog.php?type=1&field_id=icon&fldr=product" class="btn btn-primary iframe-btn"><i
                                                                          class="fa fa-picture-o"></i> Select File</a>
                                                                  </span>
                                                            </div>
                                                            <div class="row" style="display:none" id="preview_icon">
                                                                <div class="col-sm-12">
                                                                    <img src="" class="img-responsive"/>
                                                                </div>
                                                            </div>
                                                        </div> -->

                                                        <div class="form-group">
                                                            <label class="">Hình 1</label>

                                                            <div class="input-group">
                                                                <input type="text" name="image1" id="image1" class="form-control" value="<?= @$photo->image1 ?>">
                                                                  <span class="input-group-btn">
                                                                  <a href="<?= base_url() ?>filemanager/dialog.php?type=1&field_id=image1&fldr=product" class="btn btn-primary iframe-btn"><i
                                                                          class="fa fa-picture-o"></i> Select File</a>
                                                                  </span>
                                                            </div>
                                                            <div class="row" style="display:block" id="preview_image1">
                                                                <div class="col-sm-12">
                                                                    <img src="<?=@$photo->image1?>" class="img-responsive"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="">Hình 2</label>

                                                            <div class="input-group">
                                                                <input type="text" name="image2" id="image2" class="form-control" value="<?= @$photo->image2 ?>">
                                                                  <span class="input-group-btn">
                                                                  <a href="<?= base_url() ?>filemanager/dialog.php?type=1&field_id=image2&fldr=product" class="btn btn-primary iframe-btn"><i
                                                                          class="fa fa-picture-o"></i> Select File</a>
                                                                  </span>
                                                            </div>
                                                            <div class="row" style="display:block" id="preview_image2">
                                                                <div class="col-sm-12">
                                                                    <img src="<?=@$photo->image2?>" class="img-responsive"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="">Hình 3</label>

                                                            <div class="input-group">
                                                                <input type="text" name="image3" id="image3" class="form-control" value="<?= @$photo->image3 ?>">
                                                                  <span class="input-group-btn">
                                                                  <a href="<?= base_url() ?>filemanager/dialog.php?type=1&field_id=image3&fldr=product" class="btn btn-primary iframe-btn"><i
                                                                          class="fa fa-picture-o"></i> Select File</a>
                                                                  </span>
                                                            </div>
                                                            <div class="row" style="display:block" id="preview_image3">
                                                                <div class="col-sm-12">
                                                                    <img src="<?=@$photo->image3?>" class="img-responsive"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="">Hình 4</label>

                                                            <div class="input-group">
                                                                <input type="text" name="image4" id="image4" class="form-control" value="<?= @$photo->image4 ?>">
                                                                  <span class="input-group-btn">
                                                                  <a href="<?= base_url() ?>filemanager/dialog.php?type=1&field_id=image4&fldr=product" class="btn btn-primary iframe-btn"><i
                                                                          class="fa fa-picture-o"></i> Select File</a>
                                                                  </span>
                                                            </div>
                                                            <div class="row" style="display:block" id="preview_image4">
                                                                <div class="col-sm-12">
                                                                    <img src="<?=@$photo->image4?>" class="img-responsive"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="">Hình 5</label>

                                                            <div class="input-group">
                                                                <input type="text" name="image5" id="image5" class="form-control" value="<?= @$photo->image5 ?>">
                                                                  <span class="input-group-btn">
                                                                  <a href="<?= base_url() ?>filemanager/dialog.php?type=1&field_id=image5&fldr=product" class="btn btn-primary iframe-btn"><i
                                                                          class="fa fa-picture-o"></i> Select File</a>
                                                                  </span>
                                                            </div>
                                                            <div class="row" style="display:block" id="preview_image5">
                                                                <div class="col-sm-12">
                                                                    <img src="<?=@$photo->image5?>" class="img-responsive"/>
                                                                </div>
                                                            </div>
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
                                        <label class="">Product Description (Vietnamese)</label>
                                        <textarea id="entry_content" name="content"><?= @$resource->content ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="">Product Description (English)</label>
                                        <textarea id="entry_content_en" name="content_en"><?= @$resource->content_en ?></textarea>
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

<script type="text/javascript">
    $(document).ready(function () {
        $('.iframe-btn').fancybox({
            'width': 880,
            'height': 600,
            'minHeight': 500,
            'type': 'iframe',
            'autoScale': false
        });

        loadImagePreview('icon');
        loadImagePreview('image');
    });

    function responsive_filemanager_callback(fieldID) {
        var url = jQuery('#' + fieldID).val();
        //alert('update '+fieldID+" with "+url);
        //your code
        $('#preview_' + fieldID + ' img').attr('src', url);
        $('#preview_' + fieldID).show();
    }

    function loadImagePreview(field) {
        var url = jQuery('#' + field).val();
        //alert('update '+fieldID+" with "+url);
        //your code
        $('#preview_' + field + ' img').attr('src', url);
        $('#preview_' + field).show();
    }
</script>

<script type="text/javascript" src="<?= base_url() ?>tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "#entry_content, #entry_content_en",
        document_base_url: "<?=base_url()?>",
        relative_urls: false,
        height: 400,
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
        external_filemanager_path: "<?=base_url()?>filemanager/",
        filemanager_title: "Filemanager",
        external_plugins: {
            "filemanager": "<?=base_url()?>filemanager/plugin.min.js"
        },
        templates: [
            {title: 'Test template 1', content: 'Test 1'},
            {title: 'Test template 2', content: 'Test 2'}
        ]
    });
</script>>