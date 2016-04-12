<div class="list-products">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3">
                <div class="sidebar">
                    <?php widget::run('support_online')?>

                    <div class="sp-xem-nhieu">
                        <div class="title title-s-13"><i class="fa fa-shopping-cart"></i> <?=$this->lang->line('txt_viewed_product');?></div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="item-product">
                                    <div class="save-money">-27%</div>
                                    <a href="">
                                        <img src="<?=base_url()?>assets/front/images/demo-photo/sp1-big.jpg" class="img-responsive" alt=""/>
                                    </a>
                                    <div class="clearfix"></div>
                                    <div class="price">
                                        <span class="price-1 pull-left">500,000 đ</span>
                                        <span class="price-2 pull-right">700,000 đ</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <h2 class="title-s-13"><a href="">Tên sảm phẩm</a></h2>
                                    <p class="intro">Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="item-product">
                                    <div class="save-money">-27%</div>
                                    <a href="">
                                        <img src="<?=base_url()?>assets/front/images/demo-photo/sp1-big.jpg" class="img-responsive" alt=""/>
                                    </a>
                                    <div class="clearfix"></div>
                                    <div class="price">
                                        <span class="price-1 pull-left">500,000 đ</span>
                                        <span class="price-2 pull-right">700,000 đ</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <h2 class="title-s-13"><a href="">Tên sảm phẩm</a></h2>
                                    <p class="intro">Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="item-product">
                                    <div class="save-money">-27%</div>
                                    <a href="">
                                        <img src="<?=base_url()?>assets/front/images/demo-photo/sp1-big.jpg" class="img-responsive" alt=""/>
                                    </a>
                                    <div class="clearfix"></div>
                                    <div class="price">
                                        <span class="price-1 pull-left">500,000 đ</span>
                                        <span class="price-2 pull-right">700,000 đ</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <h2 class="title-s-13"><a href="">Tên sảm phẩm</a></h2>
                                    <p class="intro">Lorem ipsum dolor sit amet, consectetur...</p>
                                </div>  
                            </div>
                        </div>
                    </div>
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