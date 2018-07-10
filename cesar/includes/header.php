<div class="header">
	<ul class="menu">
	    <?php
            $full_name = $_SERVER['PHP_SELF'];
            $name_array = explode('/',$full_name);
            $count = count($name_array);
            $page_name = $name_array[$count-1];

            $pages = array(
                'videoproduction.php' => 'Video production',
                'photography.php' => 'Photography',
                'pricing.php' => 'Pricing',
                'about.php' => 'About',
                'contacts.php' => 'Contact',
            );
        ?>

		<?php foreach ($pages as $pageId => $pageTitle): ?>
          <li class="menu_item <?=(($page_name == $pageId) ? 'menu_item-current' : '')?>">
            <a href="<?=$pageId?>"><?=$pageTitle?></a>
          </li>
        <?php endforeach; ?>

        <li class="menu_item">
            <a class="contactIcon" href="https://www.instagram.com/cexarmusic/" target="_blank"><img src="img/instagram.png" width="24" height="24" alt="Instagram"></a>
        </li>
        <li class="menu_item" style="margin-left: 5px;">
            <a class="contactIcon" href="https://www.youtube.com/user/Cexarmusic/" target="_blank"><img src="img/youtube.png" width="24" height="24" alt="Youtube"></a>
        </li>

	</ul>
	<div class="menu-burger__btn" data-menu-burger=""><span></span></div>
	<div class="logo"><a href="index.php">
		<img src="img/CEXARMUSIC.png" width="163" alt="">
	</a></div>
</div>