<?php
if (!isset($this) || !$this instanceof \Slim\Views\PhpRenderer) {
    return;
}
require 'header.php';
?>
    <div id="404-notfound" class="full-screen relative text-center text-white bg-black">
        <div class="absolute-full z-index-0">
            <div class="absolute-full z-index-1"></div>
            <canvas class="node-pointer absolute-full z-index-0"></canvas>
        </div>
        <div class="bottom-50 absolute-width text-center">
            <div class="container-fluid text-center z-index-2 relative">
                <h1 class="big-text">404</h1>
                <h3 class="typed text-lite">Sorry .. The page you've requested was not found :(</h3>
            </div>
        </div>
    </div>
    <!-- .absolute-full.z-index-0 -->
    </div>
    <!-- #feature-home -->
<?php
require 'footer.php';