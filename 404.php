<?php get_template_part('templates/page', 'header'); ?>

<div class="alert alert-warning">
  <?php _e('Sorry, but the page you were trying to view does not exist.', 'ismail'); ?>
</div>

<p><?php _e('It looks like this was the result of either:', 'ismail'); ?></p>
<ul>
  <li><?php _e('a mistyped address', 'ismail'); ?></li>
  <li><?php _e('an out-of-date link', 'ismail'); ?></li>
</ul>

<?php get_search_form(); ?>
