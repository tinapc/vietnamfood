<div class="list-products">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="sidebar">
                    <?php widget::run('support_online')?>

                    <?php widget::run('most_view_product')?>
                </div>  
            </div>

            <div class="col-sm-9 col-md-9 col-lg-9">
                <div class="detail-content">
                    <h2><?php echo ($s_lang === 'vi') ? $content->title : $content->title_en?></h2>
                    <div class="clearfix"></div>
                    <?php echo ($s_lang === 'vi') ? $content->content : $content->content_en?>
                </div>
            </div>

        </div>
    </div>
</div>