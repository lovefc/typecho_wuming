<?php
/**
 * 无名主题
 * 
 * @package Typecho Theme WuMing
 * @author lovefc
 * @version 1.0.0
 * @link https://github.com/lovefc/typecho_wuming
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<?php $this->need('page/header.php'); ?>
<body>
<main>
<div class="main">
<?php if ($this->have()): ?>
    <?php while($this->next()): ?>
        <article class="post">
            <h2 class="post-title"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
            <p class="post-meta"><?php $this->date('F j, Y'); ?></p><br />
        </article>
    <?php endwhile; ?>
<?php else: ?>
    <p>没有找到文章</p>
    <div class="pagination">
       <div class="next"><a class="next" title="" href="#" onclick="return history.back();">返回首页</a></div>
    </div>	
<?php endif; ?>
</div>
<div class="pagination">
    <div class="prev"><?php $this->pageLink('上一页','prev');?></div>
    <div class="next"><?php $this->pageLink('下一页','next');?></div>
</div>
</main>
<?php $this->need('page/footer.php'); ?>