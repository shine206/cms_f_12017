<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-7000">
    <div class="m-splash-screen-progress-wrapper">
        <img src="<?php echo $url_path ?>/images/logo-dark.svg" alt="reponsive-img" class="attachment-full size-full">
        <div class="m-splash-screen-progress"></div>
    </div>
</div>
