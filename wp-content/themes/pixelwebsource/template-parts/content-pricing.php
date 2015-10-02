<?php
/**
 * Description: Content for Pricing page
 */

// Advanced Custom Fields
$pricing_title 	= get_field('pricing_title');
?>
	<div class="site-wrapper">
      	<div class="site-wrapper-inner">
			<h1 class=""><?php echo $pricing_title; ?></h1>
            <div class="col-sm-6 col-md-6 col-lg-5 col-lg-offset-1 site-left">
				<div class="center-vertical">
					<?php while( have_posts() ) : the_post(); ?>
					
						<?php the_content(); ?>

					<?php endwhile; // end of the loop ?>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-5 site-right">
				<div class="moving-gear">
					<div class="gear thirteen runMovingGear"></div>
					<div class="gear fourteen runMovingGear"></div>
					<div class="gear sixteen runMovingGear"></div>
					<div class="gear fifthteen runInvertBarrelRoll"></div>
					<div class="gear three runInvertBarrelRoll"></div>
					<div class="gear four runInvertBarrelRoll"></div>
					<div class="gear five runMovingGear"></div>
					<div class="gear six runMovingGear"></div>
					<div class="gear seven runInvertBarrelRoll"></div>
					<div class="gear eight runInvertBarrelRoll"></div>
					<div class="gear nine runInvertBarrelRoll"></div>
					<div class="gear ten runInvertBarrelRoll"></div>
					<div class="gear eleven runInvertBarrelRoll"></div>
					<div class="gear twelve runInvertBarrelRoll"></div>
					<div class="gear one runMovingGear"></div>
					<div class="gear two runMovingGear"></div>
					<div class="gear seventeen runMovingGear"></div>
					<div class="gear eighteen runInvertBarrelRoll"></div>
					<div class="gear nineteen runMovingGear"></div>
					<div class="gear twenty runInvertBarrelRoll"></div>
					<div class="gear twenty-one runMovingGear"></div>
					<div class="piece"></div>
				</div>
			</div>

      	</div><!-- site-wrapper-inner -->
    </div><!-- site-wrapper -->
    <div class="scroll-down"><a href=""></a></div>
</section><!-- pixel-wrapper -->