<?php
if (!isset($this) || !$this instanceof \Slim\Views\PhpRenderer) {
    return;
}
$base_url = rtrim($this->container->request->getUri()->getBaseUrl(), '/');
$base_url = preg_replace('/^http:/i', '', $base_url);
?>
  </div>
  <!-- .wrapper -->
  <script type="text/javascript" src="<?php echo $base_url;?>/assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo $base_url;?>/assets/js/jquery-migrate.min.js"></script>
  <script type="text/javascript" src="<?php echo $base_url;?>/assets/js/domainverifier.js"></script>
  <script type="text/javascript" src="<?php echo $base_url;?>/assets/js/pentagonal.js"></script>
</body>
</html>
<?php
