<section class="mod-news mt-15 <?php post_class() ?>">
    <div class="container">
        <h1>Danh sách bài viết</h1>
       
        <div class="row mt-20">
            <div class="col w-2/3 down_2lg:w-full">
                <div class="row">
                    <?php while($data->allpost->have_posts()): ?> <?php ($data->allpost->the_post()); ?>
                        <div class="col w-1/2 mb-15 new-item">
                            <div class="bg-white p-8">
                                <?php echo the_post_thumbnail(); ?>

                                <h2><?php echo e(get_the_title()); ?></h2>
                                <div class="content mb-8 leading-11">
                                    <?php echo get_the_content(); ?>

                                </div>
                                <p> 
                                    <a href="<?php echo e(get_permalink()); ?>">Đoc thêm</a>
                                </p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php echo e(wp_reset_query()); ?>

                </div>
            </div>
           
            <div class="col w-1/3 down_2lg:w-full">
                <div>
                    <h3>Bài viết mới nhất</h3>
                    <div class="row mt-15">
                        <?php while($data->toppost->have_posts()): ?> <?php ($data->toppost->the_post()); ?>
                            <div class="col w-full mb-15 down_2lg:w-1/2">
                                <div class="flex border-b-1 border-solid border-black pb-5 down_lg:border-none">
                                    <div class="post-img">
                                        <?php echo e(the_post_thumbnail()); ?>

                                    </div>
                                    <div class="w-[300px] ml-8">
                                        <a href="<?php echo e(get_permalink()); ?>" class="content">
                                            <?php echo e(get_the_title()); ?>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php echo e(wp_reset_query()); ?>

                    </div>
                </div>
                <div>
                    <h3>Bài viết nổi bật</h3>
                    <div class="row mt-15">
                        <div class="col w-full mb-15 down_2lg:w-1/2">
                            <div class="flex border-b-1 border-solid border-black pb-5 down_lg:border-none">
                                <img src="https://www.zagufashion.com/wp-content/uploads/2021/08/immagine_copertina-770x458-1-87x67.jpeg" class="mr-11 w-50 h-44" alt="">
                                <p>
                                    <a href="#">
                                        Mua sắm trực tuyến gia tăng vào năm 2021 cho những người trên 65 tuổi
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="col w-full mb-15 down_2lg:w-1/2">
                            <div class="flex">
                                <img src="https://www.zagufashion.com/wp-content/uploads/2021/08/immagine_copertina-770x458-1-87x67.jpeg" class="mr-11 w-50 h-44" alt="">
                                <p>
                                    <a href="#">
                                        Mua sắm trực tuyến gia tăng vào năm 2021 cho những người trên 65 tuổi
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>