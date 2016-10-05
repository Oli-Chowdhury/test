<div class="container">

  <?php if ($page['header']): print render($page['header']); endif; ?>
  <?php if ($page['highlight']): print render($page['highlight']); endif; ?>

  

  <div class="content">
    

    <?php print render($page['content']) ?>
  </div>

</div>

<?php if ($page['footer']): ?>
  <div class="footer">
    <div class="footer-inner">
      <?php print render($page['footer']); ?>
    </div>
  </div>
<?php endif; ?>
