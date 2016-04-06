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

                        <li><a href="#"><i class="fa fa-folder"></i><span>Nội dung</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?= ADMIN_URL ?>resource/index/?contentType=introduction">
                                        <i class="fa fa-info"></i><span>Giới thiệu</span>
                                    </a>
                                </li>
                                <!--<li>
                                    <a href="<?/*= ADMIN_URL */?>resource/edit/58/?contentType=whychooseTD">
                                        <i class="fa fa-angle-right"></i><span>Lý do chọn TĐ</span>
                                    </a>
                                </li>
                                <li><a href="<?/*= ADMIN_URL */?>resource/index/?contentType=faq">
                                        <i class="fa fa-question"></i><span>Hỏi đáp</span></a>
                                </li>
                                <li><a href="<?/*= ADMIN_URL */?>partner">
                                        <i class="fa fa-user"></i><span>Đối tác</span></a>
                                </li>-->
                                <li><a href="<?= ADMIN_URL ?>support">
                                        <i class="fa fa-smile-o"></i><span>Hổ trợ trực tuyến</span></a>
                                </li>
                                <li><a href="<?= ADMIN_URL ?>resource/index/?contentType=job"><i class="fa fa-edit"></i><span>Tuyển dụng</span></a></li>
                                <!--<li><a href="<?/*= ADMIN_URL */?>client_say/index">
                                        <i class="fa fa-comments"></i><span>Khách hàng nói</span></a>
                                </li>
                                <li><a href="<?/*= ADMIN_URL */?>resource/edit/52/?contentType=guide">
                                        <i class="fa fa-angle-right"></i><span>Hình ảnh hoạt động</span></a>
                                </li>-->
                                <!--<li><a href="<?/*= ADMIN_URL */?>resource/edit/53/?contentType=phone_support">
                                        <i class="fa fa-angle-right"></i><span>Điện thoại hổ trợ</span></a>
                                </li>
                                <li><a href="<?/*= ADMIN_URL */?>resource/edit/54/?contentType=map">
                                        <i class="fa fa-angle-right"></i><span>Sơ đồ đường đi</span></a>
                                </li>-->
                            </ul>
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
                        <!--<li><a href="#"><i class="fa fa-folder"></i><span>Dịch vụ kinh doanh</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?/*= ADMIN_URL */?>resource/index/?contentType=cate_service">
                                        <i class="fa fa-list"></i><span>Quản lý danh mục</span>
                                    </a>
                                </li>
                                <?php /*if (count($this->load->get_var('resoucesCateServices')) > 0) : */?>
                                    <?php /*foreach ($this->load->get_var('resoucesCateServices') as $row) : */?>
                                        <li>
                                            <a href="<?/*= ADMIN_URL */?>resource/edit/<?/*= $row->id */?>/?contentType=cate_service" title="<?/*= $row->title */?>">
                                                <i class="fa fa-angle-right"></i><span><?/*= $row->title */?></span>
                                            </a>
                                        </li>
                                    <?php /*endforeach */?>
                                <?php /*endif */?>
                            </ul>
                        </li>-->
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
                       <!-- <li><a href="<?/*= base_url() */?>client_ask"><i class="fa fa-folder"></i><span>Câu hỏi khách hàng</span></a>
                        </li>-->
                        <li><a href="<?= base_url() ?>banner"><i class="fa fa-picture-o"></i><span>Main Banner</span></a>
                        </li>
                        <!--<li><a href="<?/*= base_url() */?>banner_page"><i class="fa fa-picture-o"></i><span>Banner trang con</span></a>
                        </li>-->

                    </ul>
                </div>
            </div>
            <div class="text-right collapse-button" style="padding:7px 9px;">
                <!-- <input type="text" class="form-control search" placeholder="Search..." /> -->
                <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
            </div>
        </div>
    </div>