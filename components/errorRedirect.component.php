<form id="redirectForm" action="<?php echo $args[0] ?>" method="post">
  <?php
  foreach ($args[1] as $a => $b) {
    echo '<input type="hidden" name="' . htmlentities($a) . '" value="' . htmlentities($b) . '">';
  }
  ?>
</form>

<script type="text/javascript">
  document.getElementById("redirectForm").submit();
</script>
