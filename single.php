<div class="card shadow-sm mb-4 post">
    <div class="card-body">
        <a href="detail.php?id=<?php echo $p['id'] ; ?>">
            <h5 class="text-primary"><?php echo short($p['title'],80) ?></h5>
        </a>
        <div class="my-3">
            <span class="mr-2">
                <i class="feather-user text-primary"></i>
                <?php echo user($p['user_id'])['name'] ; ?>
            </span>

            <span class="mr-2">
                <i class="feather-layers text-info"></i>
                <?php echo category($p['category_id'])['title'] ; ?>
            </span>

            <span class="mr-2">
                <i class="feather-calendar text-warning"></i>
                <?php echo showTime($p['created_at'], "j M Y") ?>
            </span>
        </div>
        <p class="text-black-50">
            <?php echo short(strip_tags(html_entity_decode($p['description'])),200) ; ?>
        </p>
    </div>
</div>