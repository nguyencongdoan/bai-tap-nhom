<section class="content-single-post">
    <div class="container text-justify">
        <h1><?php echo get_the_title(); ?></h1>
        
        <div class="row mt-25">
            <div class="col w-2/3 down_2lg:w-full">
                <?php the_content() ?>
            </div>

            <?php $data = App::getPost(); ?>

           <div class="hidden">
                <?php 
                    $id_category = the_category_ID();
                    $dataa = App::typePost($id_category); 
                ?>
           </div>

            
            
            <div class="col w-1/3 down_2lg:w-full">
                <div>
                    <h2>Bài viết mới nhất</h2>
                    <div class="row mt-15">
                        <?php while($data->have_posts()): ?> <?php ($data->the_post()); ?>
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
                    <h2>Bài viết liên quan</h2>
                    <div class="row mt-15">
                        <?php while($dataa->have_posts()): ?> <?php ($dataa->the_post()); ?>
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
            </div>
        </div>
    </div>
</section>