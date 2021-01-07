<header class="header">
  <div class="container-xl">
    <div class="header__inner">
      <a href="/" class="header__logo">
        <img src="<?php the_field('header__logo', 'options'); ?>" alt="logo" />
      </a>
		 <?php wp_nav_menu( [
			'theme_location'  => '',
			'menu'            => '', 
			'container'       => false, 
			'container_class' => '', 
			'container_id'    => '',
			'menu_class'      => 'header__menu menu', 
			'menu_id'         => 'header__menu',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 2,
			'walker'          => '',
		] ); ?>
      <div class="header__search search">
        <a href="#" class="search__btn icon icon__search"></a>
        <a href="#" class="search__close icon icon__close"></a>
        <input type="text" />
      </div>
      <a href="#" class="header__basket basket">
        <span class="basket__count">0</span>
        <span class="basket__link icon icon__shopping-bag"></span>
      </a>
      <button class="header__burger" id="header__burger">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>
</header>