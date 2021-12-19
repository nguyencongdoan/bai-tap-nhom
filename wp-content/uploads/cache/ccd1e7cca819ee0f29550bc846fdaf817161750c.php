<section class="mod-demo">
    <div class="banner">
       <div class="slider">
         <div class="slider-item">
           <img src="<?= \App\asset_path('images/banner.jpg'); ?>" alt="">
         </div>

         <div class="slider-item">
           <img src="<?= \App\asset_path('images/banner.jpg'); ?>" alt="">
         </div>

         <div class="slider-item">
           <img src="<?= \App\asset_path('images/banner.jpg'); ?>" alt="">
         </div>

         <div class="slider-item">
           <img src="<?= \App\asset_path('images/banner.jpg'); ?>" alt="">
         </div>
       </div>
    </div>

    <div class="collapse w-96 border rounded-box border-base-300 collapse-arrow">
      <input type="checkbox"> 
      <div class="collapse-title text-xl font-medium">
        I open/close with click
      </div> 
      <div class="collapse-content"> 
        <p>Collapse content reveals with focus. If you add a checkbox, you can control it using checkbox instead of focus. Or you can force-open/force-close using 
          <span class="badge badge-outline">collapse-open</span> and 
          <span class="badge badge-outline">collapse-close</span> classes.
        </p>
      </div>
    </div> 
</section>