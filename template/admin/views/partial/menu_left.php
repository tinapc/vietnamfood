<div id="cl-wrapper" class="fixed-menu">
    <div class="cl-sidebar" data-position="right" data-step="1" data-intro="<strong>Fixed Sidebar</strong> <br/> It adjust to your needs.">
        <div class="cl-toggle"><i class="fa fa-bars"></i></div>
        <div class="cl-navblock">
            <div class="menu-space">
                <div class="content">
                    <ul class="cl-vnavigation">
                        <li><a href="<?= ADMIN_URL ?>"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
                        <li><a href="#"><i class="fa fa-cogs"></i><span>System</span></a>
                            <ul class="sub-menu">
                                <li><a href="<?= site_url('auth/users') ?>">Users</a></li>
                                <li><a href="<?= base_url() ?>dashboard/config">Configuration</a></li>
                            </ul>
                        </li>

                        <!-- <li><a href="#"><i class="fa fa-folder"></i><span>Nội dung</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?= ADMIN_URL ?>resource/index/?contentType=introduction">
                                        <i class="fa fa-info"></i><span>Giới thiệu</span>
                                    </a>
                                </li>
                                </li>
                                
                                <li><a href="<?= ADMIN_URL ?>resource/index/?contentType=job"><i class="fa fa-edit"></i><span>Tuyển dụng</span></a></li>
                            </ul>
                        </li> -->
                        <li><a href="<?=base_url()?>m_page">
                            <i class="fa fa-list-ul"></i><span>Quản lý trang</span></a>
                        </li>

                        <li><a href="#"><i class="fa fa-folder"></i><span>Tin tức - Danh mục</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?= ADMIN_URL ?>resource/index/?contentType=cate_news">
                                        <i class="fa fa-list"></i><span>Quản lý danh mục</span>
                                    </a>
                                </li>
                                <?php if (count($this->load->get_var('resoucesCateNews')) > 0) : ?>
                                    <?php foreach ($this->load->get_var('resoucesCateNews') as $row) : ?>
                                        <li>
                                            <a href="<?= ADMIN_URL ?>resource/news/<?= $row->id ?>" title="<?= $row->title ?>">
                                                <i class="fa fa-angle-right"></i><span><?= $row->title ?></span>
                                            </a>
                                        </li>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-folder"></i><span>Sản phẩm</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?= ADMIN_URL ?>resource/index/?contentType=cate_product">
                                        <i class="fa fa-list"></i><span>Quản lý danh mục</span>
                                    </a>
                                </li>
                                <?php if (count($this->load->get_var('resoucesCateProducts')) > 0) : ?>
                                    <?php foreach ($this->load->get_var('resoucesCateProducts') as $row) : ?>
                                        <li>
                                            <a href="<?= ADMIN_URL ?>resource/product/<?= $row->id ?>" title="<?= $row->title ?>">
                                                <i class="fa fa-angle-right"></i><span><?= $row->title ?></span>
                                            </a>
                                        </li>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </ul>
                        </li>
                        <li><a href="<?= base_url() ?>banner"><i class="fa fa-picture-o"></i><span>Main Banner</span></a>
                        </li>
                        <li><a href="<?= ADMIN_URL ?>support">
                            <i class="fa fa-smile-o"></i><span>Hổ trợ trực tuyến</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-right collapse-button" style="padding:7px 9px;">
                <!-- <input type="text" class="form-control search" placeholder="Search..." /> -->
                <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
            </div>
        </div>
    </div>