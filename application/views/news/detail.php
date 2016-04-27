<div class="list-products">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="sidebar">
                    <?php widget::run('support_online')?>

                    <?php widget::run('most_view_product')?>
                </div>  
            </div>

            <ul class="col-sm-9 col-md-9 col-lg-9">
                <div class="detail-content">
                    <h2><?php echo ($s_lang === 'vi') ? $content->title : $content->title_en?></h2>
                    <div class="clearfix"></div>
                    <?php echo ($s_lang === 'vi') ? $content->content : $content->content_en?>
                </div>

                <?php if (isset($relateds) && count($relateds) > 0) : ?>
                    <h3 class="title title-s-13" style="margin-top: 30px"> <i class="fa fa-list-alt"></i> <?=$this->lang->line('txt_post_related');?></h3>
                    <?php if (count($relateds) > 0) : ?>
                        <ul class="list-unstyled news-related">
                            <?php foreach ($relateds as $product) : ?>
                                <li><a href="<?=site_url('news-detail/'. $product->id)?>">
                                        <i class="fa fa-angle-right"></i> <?php echo ($s_lang === 'vi') ? $product->title : $product->title_en?></a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    <?php endif ?>
                <?php endif ?>
            </div>

        </div>
    </div>
</div>