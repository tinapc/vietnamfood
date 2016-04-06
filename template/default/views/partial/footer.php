<div id="partner" class="container" >
    <h2 class="text-center">ĐỐI TÁC</h2>
    <ul id="flexisel-partner" style="display:none">
        <?php foreach ($this->load->get_var('partners') as $key) : ?>
            <li><img src="<?php echo str_replace(array('tamdiem.home', 'lienviet.app', 'tamdiem.com.vn', 'trungdungmedia.app'), $_SERVER['HTTP_HOST'], $key->logo)?>" /></li>
        <?php endforeach?>
    </ul>
</div><!--End partner-->

<div class="near-footer">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-2">
    				<h4>Về chúng tôi</h4>
					<ul class="nav-pills nav-stacked list-unstyled">
						<?php foreach($this->load->get_var('data_nav_introduc') as $row) : ?>
                            <?php if($row->external_link !== '') : ?>
                                <li><i class="fa fa-angle-double-right"></i> <a href="<?=prep_url($row->external_link)?>" <?=$row->link_attr?> title="<?=$row->title?>"><?=$row->menu_title?></a></li>
                            <?php else : ?>
                                <li><i class="fa fa-angle-double-right"></i> <a href="<?=site_url('page/'. $row->alias)?>" <?=$row->link_attr?> title="<?=$row->title?>"><?=$row->menu_title?></a></li>  
                            <?php endif ?>
                        <?php endforeach ?>
					</ul>
    			</div>
    			<div class="col-sm-2">
    				<h4>Khách hàng</h4>
					<ul class="nav-pills nav-stacked list-unstyled">
						<li><i class="fa fa-angle-double-right"></i> <a href="<?=site_url('page/dien-thoai-ho-tro')?>" title="Điện thoại hổ trợ">Điện thoại hỗ trợ</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="<?=site_url('hoi-dap')?>" title="Hỏi & đáp">Hỏi & đáp</a></li>
                        <li><i class="fa fa-angle-double-right"></i> <a href="<?=site_url('page/so-do-duong-di')?>" title="Sơ đồ đường đi">Sơ đồ đường đi</a></li>
					</ul>
    			</div>
    			<div class="col-sm-4 social">
    				<h4>Mạng xã hội</h4>
					<div class="row">
						<div class="col-xs-6">
							<a href="<?=$this->load->get_var('facebook')?>" target="_blank" title="Facebook"><img src="<?=base_url()?>assets/front/images/icons/facebook.png" alt=""/> Facebook</a>
						</div>
						<div class="col-xs-6">
							<a href="<?=$this->load->get_var('rss')?>" target="_blank" title="Rss"><img src="<?=base_url()?>assets/front/images/icons/rss.png" alt=""/> RSS</a>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6">
							<a href="<?=$this->load->get_var('youtube')?>" target="_blank" title="Youtube"><img src="<?=base_url()?>assets/front/images/icons/youtube.png" alt=""/> Youtube</a>
						</div>
						<div class="col-xs-6">
							<a href="<?=$this->load->get_var('twitter')?>" target="_blank" title="Twitter"><img src="<?=base_url()?>assets/front/images/icons/twitter.png" alt=""/> Twitter</a>
						</div>
					</div>
    			</div>
    			<div class="col-xs-12 col-sm-4" style="padding:0px">
    				<div class="comp_info" style="padding-top: 0">
    					<h5><?=$this->load->get_var('phone')?></h5>
                        <?php $supports = $this->load->get_var('supports'); ?>
                        <div class="info support_online" style="background: none; padding:0">
                            <div class="row">
                                <div class="col-md-12" id="online">
                                    <h5 style="display: inline-block;">Online:</h5>
                                    <a href="javascript:;" rel="yahoo"><img src="<?=base_url()?>assets/front/images/yahoo.gif" style="max-width:50px"/></a>
                                    <a href="javascript:;" rel="skype"><img src="<?=base_url()?>assets/front/images/skype.gif" style="max-width:50px"/></a>
                                </div>

                                <?php
                                $hotlines = explode(',', $this->load->get_var('hotline'));
                                ?>

                            </div>
                        </div>
                        <input class="form-control input-search" id="keywords" value="Tìm kiếm">
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    
    <?php 
        $showHoatDong = $this->resource->get_by(array('id' => 52), array('published'));
    ?>

    <div class="footer">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-2 col-xs-12">
                    <a href="/" style="background: #303030; padding: 10px 13px; font-size: 20px; border-radius: 100px;"
                    ><i class="fa fa-home"></i></a>
    			</div>
    			<div class="col-xs-12 col-sm-7 text-center" style="padding-right:0px">
    				Copyright &copy; <?=date('Y')?> TRUNG DŨNG Media <br>
                    Địa chỉ: <?=$this->load->get_var('company_address')?>
    			</div>
                <div class="col-xs-12 col-sm-3">
                    Đang online: <?php echo $this->counter->online()?>/Tổng số: <?php $this->counter->total()?>
                </div>
    		</div>
    	</div>
    </div>

<div id="yahoo" style="display:none">
    <?php foreach($supports as $row) : ?>
        <p style="margin:20px">
            <a href="ymsgr:sendIM?<?=$row->yahoo?>" style="margin:0px; display:inline"><img align="absmiddle" class="img" alt="Trợ giúp qua Yahoo Messenger!" src="http://opi.yahoo.com/online?u=<?=$row->yahoo?>&amp;m=g&amp;t=2"></a><br><span class="nick"><a href="ymsgr:sendIM?hotroonthi" style="margin:0px; display:inline"><?=$row->yahoo?></a></span><br>Họ và Tên  : <b><?=$row->name?></b><br>Chức danh : <b><?=$row->position?></b><br>
        </p>
    <?php endforeach?>
</div>
<div id="skype" style="display:none">
    <?php foreach($supports as $row) : ?>
        <?php if($row->skype !=='') : ?>
            <p style="margin:20px">
                <a href="skype:<?=$row->skype?>?chat" style="margin:0px; display:inline"><img align="absmiddle" class="img" alt="Trợ giúp qua Skype!" src="<?=base_url()?>assets/front/images/icons/skype.png"></a><br><span class="nick"><a href="skype:<?=$row->skype?>?chat" style="margin:0px; display:inline"><?=$row->skype?></a></span><br>Họ và Tên  : <b><?=$row->name?></b><br>Chức danh : <b><?=$row->position?></b><br>
            </p> <?php endif ?>
    <?php endforeach?>
</div>

<div class="modal fade" id="modal_yahoo" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('#online a').click(function(){
            var rel = $(this).attr('rel');
            var content = $('#' + rel).html();
            $('#modal_yahoo .modal-content').html(content);
            $('#modal_yahoo').modal('show');
        });

    });
</script>

    <script src="<?=base_url()?>assets/front/plugin/flexisel/js/jquery.flexisel.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            jQuery('.main-nav ul.nav li.dropdown').hover(function() {
                jQuery(this).find('.dropdown-menu').stop(true, true).slideDown();
                jQuery(this).addClass('open');
            }, function() {
                jQuery(this).find('.dropdown-menu').stop(true, true).slideUp();
                jQuery(this).removeClass('open');
            });

            $('.carousel-inner .item:first').addClass('active');
        });


        $(window).load(function() {
            $("#flexiselDemo3").flexisel({
                visibleItems: 6,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: true,
                enableResponsiveBreakpoints: false,
                clone: true
            });
            $('#flexiselDemo3').show();

            $("#flexisel-partner").flexisel({
                visibleItems: 6,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: false,
                clone: true
            });
            $("#flexisel-partner").show();

        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#keywords')
            .blur(function(event) {
                if($(this).val() == '') {
                    $(this).val('Tìm kiếm');
                }
            })
            .focus(function(event) {
                if($(this).val() == 'Tìm kiếm') {
                    $(this).val('');
                }
            });

            // Search function
            $('#keywords').keyup(function(e){
                if(e.keyCode == 13)
                {
                    var k = $('#keywords').val();
                    var kk = k.replace(/%20/gi, ' ');
                    window.location.href= site_url + 'tim-kiem/?k=' + kk;
                }
            });

        });
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url()?>assets/front/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/front/js/main.js"></script>
  </body>
</html>