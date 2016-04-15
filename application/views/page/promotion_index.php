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
                <div class="list-news">
                    <?php if (count($promotions) > 0 ) : ?>
                        <?php foreach ($promotions as $promotion) : ?>
                            <div class="row item">
                                <div class="col-md-3">
                                    <img src="<?=cover_image_path($promotion->image)?>" alt="<?=$promotion->title?>" class="img-responsive">
                                </div>
                                <div class="col-md-9">
                                    <h2 class="title-s-18" style="margin-top:0;"><a style="color:#ff0000;" href="<?=site_url('promotion/view/'. $promotion->id)?>"><?php echo ($s_lang === 'vi') ? $promotion->title : $promotion->title_en?></a></h2>
                                    <div class="intro">
                                        <?=word_limiter(($s_lang == 'vi' ? $promotion->intro : $promotion->intro_en), 35)?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach?>
                    <?php endif?>
                </div>

                <div class="pagi text-center">
                    <nav>
                        <?php echo $this->pagination->create_links(); ?>
                    </nav>
                </div>

            </div>

        </div>
    </div>
</div>