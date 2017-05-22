<?php
$hasnewssectiontitle = (!empty($PAGE->theme->settings->newssectiontitle));

$hasnews1icon = (!empty($PAGE->theme->settings->news1icon));
$hasnews1title = (!empty($PAGE->theme->settings->news1title));
$hasnews1content = (!empty($PAGE->theme->settings->news1content));

$hasnews2icon = (!empty($PAGE->theme->settings->news2icon));
$hasnews2title = (!empty($PAGE->theme->settings->news2title));
$hasnews2content = (!empty($PAGE->theme->settings->news2content));

$hasnews3icon = (!empty($PAGE->theme->settings->news3icon));
$hasnews3title = (!empty($PAGE->theme->settings->news3title));
$hasnews3content = (!empty($PAGE->theme->settings->news3content));


/* News settings */
$newssectiontitle = $PAGE->theme->settings->newssectiontitle;

/* News1 */
$news1icon = $PAGE->theme->settings->news1icon;
$news1title = $PAGE->theme->settings->news1title;
$news1content = $PAGE->theme->settings->news1content;

/* News2 */
$news2icon = $PAGE->theme->settings->news2icon;
$news2title = $PAGE->theme->settings->news2title;
$news2content = $PAGE->theme->settings->news2content;

/* News3 */
$news3icon = $PAGE->theme->settings->news3icon;
$news3title = $PAGE->theme->settings->news3title;
$news3content = $PAGE->theme->settings->news3content;


$news1hasdata = ($news1icon||$news1title||$news1content);
$news2hasdata = ($news2icon||$news2title||$news2content);
$news3hasdata = ($news3icon||$news3title||$news3content);


?>

<?php if($PAGE->theme->settings->usenews ==1) { ?> 
    <section class="news-section">
        <div class="container">
            <?php if ($hasnewssectiontitle) { ?>
            <h2 class="section-title"><?php echo $newssectiontitle ?></h2>
            <?php } ?>
            <div class="row">
                <div class="item col-xs-12 col-sm-4">
                    <div class="item-inner">
                        <?php if ($hasnews1icon) { ?>
                        <div class="item-icon">
                            <div class="item-icon-inner">
                                <i class="fa <?php echo $news1icon ?>" aria-hidden="true"></i>
                            </div>
                        </div><!--//item-icon-->
                        <?php } ?>
                        <div class="details">
                            <?php if ($hasnews1title) { ?>
                            <h4 class="news-title"><?php echo $news1title ?></h4>
                            <?php } ?>
                            <?php if ($hasnews1content) { ?>
                            <div class="details">
                                <?php echo $news1content ?>
                            </div><!--//details-->
                            <?php } ?>
                            <div class="meta">
                            </div><!--//meta-->
                        </div><!--//details-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-xs-12 col-sm-4">
                    <div class="item-inner">
                        <?php if ($hasnews2icon) { ?>
                        <div class="item-icon">
                            <div class="item-icon-inner">
                                <i class="fa <?php echo $news2icon ?>" aria-hidden="true"></i>
                            </div>
                        </div><!--//item-icon-->
                        <?php } ?>
                        <div class="details">
                            <?php if ($hasnews2title) { ?>
                            <h4 class="news-title"><?php echo $news2title ?></h4>
                            <?php } ?>
                            <?php if ($hasnews2content) { ?>
                            <div class="details">
                                <?php echo $news2content ?>
                            </div><!--//details-->
                            <?php } ?>
                            <div class="meta">
                            </div><!--//meta-->
                        </div><!--//details-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-xs-12 col-sm-4">
                    <div class="item-inner">
                        <?php if ($hasnews3icon) { ?>
                        <div class="item-icon">
                            <div class="item-icon-inner">
                                <i class="fa <?php echo $news3icon ?>" aria-hidden="true"></i>
                            </div>
                        </div><!--//item-icon-->
                        <?php } ?>
                        <div class="details">
                            <?php if ($hasnews3title) { ?>
                            <h4 class="news-title"><?php echo $news3title ?></h4>
                            <?php } ?>
                            <?php if ($hasnews3content) { ?>
                            <div class="details">
                                <?php echo $news3content ?>
                            </div><!--//details-->
                            <?php } ?>
                            <div class="meta">
                            </div><!--//meta-->
                        </div><!--//details-->
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//news-section-->
<?php }?>
