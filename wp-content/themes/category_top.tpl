<?php if ($categories) { ?>

    <ul class="home-categories">
        <?php foreach ($categories as $category) { ?>
            <li>
                <img src="<?php echo $category['thumb']; ?>">
                <a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?>
            </a></li>
        <?php } ?>
    </ul>

<?php } ?>