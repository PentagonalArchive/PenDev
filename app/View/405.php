<?php
if (!isset($this) || !$this instanceof \Slim\Views\PhpRenderer) {
    return;
}
require 'header.php';
?>
    <div id="405-method-notallowed" class="full-screen relative text-center text-white bg-black">
      <div class="absolute-full z-index-0">
        <div class="absolute-full z-index-1"></div>
        <canvas class="node-pointer absolute-full z-index-0"></canvas>
      </div>
      <!-- .absolute-full.z-index-0 -->
      <div class="bottom-50 absolute-width text-center">
        <div class="container-fluid text-center z-index-2 relative">
          <h1 class="big-text">405</h1>
          <h3 class="typed text-lite">Hello .. what you want to do with our site? :(</h3>
        </div>
        <!-- .container-fluid.text-center.z-index-2.relative -->
      </div>
      <!-- .bottom-50.absolute-full.z-index-0 -->
    </div>
    <!-- #405-method-notallowed -->
<?php
require 'footer.php';