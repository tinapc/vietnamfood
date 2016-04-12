<script type="text/javascript">
    $(document).ready(function () {
        $('#myFrm').parsley();
    });
</script>

<div class="container-fluid" id="pcont">
    <div class="fix-nav-tool">
        <a href="javascript:void(0)" onclick="$('#myFrm').submit()" class="btn btn-primary"><i class="fa fa-save"></i> Save</a>
        <a href="<?= $return_url ?>" class="btn btn-default"><i class="fa fa-mail-reply"></i> Close</a>
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
                                                <a href="#tb_document" data-toggle="tab" aria-expanded="true">Nội dung tiếng việt</a>
                                            </li>
                                            <li>
                                                <a href="#tb_document_en" data-toggle="tab" aria-expanded="true">Nội dung tiếng anh</a>
                                            </li>
                                            <li>
                                                <a href="#tb_setting" data-toggle="tab" aria-expanded="true">Properties</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane cont active" id="tb_document">
                                                <div class="row">
                                                    <div class="col-sm-6">
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

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="">Title</label>
                                                            <input type="text" name="title" value="<?= @$resource->title ?>" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="">Alias</label>
                                                            <input type="text" name="alias" value="<?= @$resource->alias ?>" class="form-control"
                                                                   data-original-title="Tạo đường dẫn thân thiện <br>Ví dụ: http://domain.com/this-name-of-page"
                                                                   data-toggle="tooltip">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="">Menu Title</label>
                                                            <input type="text" name="menu_title" value="<?= @$resource->menu_title ?>" class="form-control">
                                                        </div>

                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="">SEO Keyword</label>
                                                            <input type="text" name="long_title" value="<?= @$resource->long_title ?>" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="">SEO Description</label>
                                                            <textarea name="description" class="form-control"><?= @$resource->description ?></textarea>
                                                        </div>
                                                        <?php if ($this->input->get('contentType') !== 'introduction') : ?>
                                                            <div class="form-group">
                                                                <label class="">Intro text</label>
                                                                <textarea name="intro" id="intro" class="form-control"><?= @$resource->intro ?></textarea>
                                                            </div>
                                                        <?php endif ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <?php if ($this->input->get('contentType') == 'introduction') : ?>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label class="">Intro</label>
                                                                        <textarea id="intro" name="intro"><?= @$resource->intro ?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endif ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="">Content</label>
                                                            <textarea id="entry_content" name="content"><?= @$resource->content ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane cont" id="tb_document_en">

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="">Title</label>
                                                            <input type="text" name="title_en" value="<?= @$resource->title_en ?>" class="form-control" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="">Menu Title</label>
                                                            <input type="text" name="menu_title_en" value="<?= @$resource->menu_title_en ?>" class="form-control">
                                                        </div>

                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="">SEO Keyword</label>
                                                            <input type="text" name="long_title_en" value="<?= @$resource->long_title_en ?>" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="">SEO Description</label>
                                                            <textarea name="description_en" class="form-control"><?= @$resource->description_en ?></textarea>
                                                        </div>
                                                        <?php if ($this->input->get('contentType') !== 'introduction') : ?>
                                                            <div class="form-group">
                                                                <label class="">Intro text</label>
                                                                <textarea name="intro_en" id="intro_en" class="form-control"><?= @$resource->intro_en ?></textarea>
                                                            </div>
                                                        <?php endif ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <?php if ($this->input->get('contentType') == 'introduction') : ?>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label class="">Intro</label>
                                                                        <textarea id="intro_en" name="intro_en"><?= @$resource->intro_en ?></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endif ?>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="">Content</label>
                                                            <textarea id="entry_content_en" name="content_en"><?= @$resource->content_en ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane cont" id="tb_setting">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="">Icon</label>

                                                            <div class="input-group">
                                                                <input type="text" name="icon" id="icon" class="form-control" value="<?= @$resource->icon ?>">
                                          <span class="input-group-btn">
                                          <a href="<?= base_url() ?>filemanager/dialog.php?type=1&field_id=icon&fldr=icons" class="btn btn-primary iframe-btn"><i
                                                  class="fa fa-picture-o"></i> Select File</a>
                                          </span>
                                                            </div>
                                                            <div class="row" style="display:none" id="preview_icon">
                                                                <div class="col-sm-12">
                                                                    <img src="" class="img-responsive"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="">Feature Image</label>

                                                            <div class="input-group">
                                                                <input type="text" name="image" id="image" class="form-control" value="<?= @$resource->image ?>">
                                          <span class="input-group-btn">
                                          <a href="<?= base_url() ?>filemanager/dialog.php?type=1&field_id=image&fldr=images" class="btn btn-primary iframe-btn"><i
                                                  class="fa fa-picture-o"></i> Select File</a>
                                          </span>
                                                            </div>
                                                            <div class="row" style="display:none; max-width:500px; overflow:hidden" id="preview_image">
                                                                <div class="col-sm-12">
                                                                    <img src="" class="img-responsive"/>
                                                                </div>
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

<?php
if ($this->input->get('contentType') == 'introduction') {
    $editor = '#entry_content, #intro,#entry_content_en, #intro_en';
} else {
    $editor = '#entry_content,#entry_content_en';
} ?>

<script type="text/javascript" src="<?= base_url() ?>tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "<?=$editor?>",
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
</script>