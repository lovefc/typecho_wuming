<?php $this->need('page/header.php'); ?>
<body>
<div class="content">
    <article class="article">
        <h1 class="article-title"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <p class="article-meta">
            <span><?php _e('发布时间：'); ?><?php $this->date('F j, Y'); ?></span>
            <!--<span><?php _e('分类：'); ?><?php $this->category(','); ?></span>-->
            <!--<span><?php _e('标签：'); ?><?php $this->tags(', ', true, '无'); ?></span>-->
        </p>
        <div class="article-content">
            <?php $this->content(); ?>
        </div>
    </article>
</div>
<div class="pagination">
    <div class="next"><a class="next" title="" href="#" onclick="return history.back();">返回</a></div>
</div>
</body>
<?php $this->need('page/footer.php'); ?>