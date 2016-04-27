<?php 
$supports = $this->load->get_var('supports');
?>
<div class="support-sidebar">
    <div class="row">
        <div class="col-sm-12">
            <div class="block support">
                <h3 class="title title-s-13"> <i class="fa fa-phone-square"></i> <?=$this->lang->line('txt_support_online');?></h3>
                <div class="c">
                    <p class="hotline"><?=$this->load->get_var('hotline')?></p>
                    <div class="nickchat text-right">
                        <?php foreach($supports as $row) : ?>
                            <?php if($row->yahoo !=='') : ?>
                            <a href="ymsgr:sendIM?<?=$row->skype?>" rel="skype"><img src="<?=base_url()?>assets/front/images/yahoo.gif"></a>
                            <?php endif ?>
                            <?php if($row->skype !=='') : ?>
                            <a href="skype:<?=$row->skype?>?chat" rel="yahoo"><img src="<?=base_url()?>assets/front/images/icons/skype2.png"></a>
                            <?php endif ?>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>