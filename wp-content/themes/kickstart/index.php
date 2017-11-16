<?php get_header(); ?>

        <!--sidebar-->
	<aside class="col-md-4 sidebar_nav">
		<ul class="nav">
			<li class="nav-item">
				<h5><a href="" class="nav-link">Choose your Country
					<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
					</a>
				</h5>
			</li>
			<li class="nav-item">
				<h5><a href="" class="nav-link">Cards
					<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
					</a>
				</h5>
			</li>
			<li class="nav-item">
				<h5><a href="" class="nav-link">Personal Banking
					<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
					</a>
				</h5>
			</li>
			<li class="nav-item">
				<h5><a href="" class="nav-link">Business Banking
					<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
					</a>
				</h5>
			</li>
			<li class="nav-item">
				<h5><a href="" class="nav-link">Products
					<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
					</a>
				</h5>
			</li>
			<li class="nav-item">
				<h5><a href="" class="nav-link">Service
					<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
					</a>
				</h5>
			</li>
			<li class="nav-item">
				<h5><a href="" class="nav-link">Customer Service
					<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
					</a>
				</h5>
			</li>
		</ul>
		<div class="banking-apps">
			<div class="int-banking"><a><span>Online Banking (personal)</span></a></div>
			<div class="int_link_banking">
				<ul>
					<li><a href="#">Login</a></li>
					<li><a href="#">Register</a></li>
					<li><a href="#">Demo</a></li>
				</ul>
			</div>
			<div class="gapps">
				<span>Switch to Business (GAPS)</span>
			</div>
		</div>
		<div class="bvn_link">
			<ul>
				<li><a href="#">Link your BVN Here!</a></li>
			</ul>
		</div>
		<div class="feedback_survey">
			<ul>
				<li><a href="#">Customer Feedback Survey</a></li>
			</ul>
			
		</div>

	</aside>

<!-- <?php if (have_posts()): ?>
	<?php while(have_posts()): the_post(); ?>
	<div <?php post_class(); ?>>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
	</div>
	<?php endwhile; ?>
<?php else : ?>
	<h2>Couldn’t find any articles!</h2>
<?php endif; ?> -->

<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>