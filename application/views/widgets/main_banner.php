<div class="container-fluid" style="padding:0">
    <div class="row">
        <div class="col-xs-12">
            <div id="banner">
                <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php foreach ($banners as $row) : ?>
                            <div class="item">
                                <a href="<?= $row->linkTo ?>"><img src="<?= cover_image_path($row->image) ?>" alt=""></a>
                            </div>
                        <?php endforeach ?>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>