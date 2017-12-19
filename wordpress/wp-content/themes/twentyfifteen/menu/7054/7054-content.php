<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = "http://" . str_replace('\\', '/', $url_path);
// echo $url_path;
?>
<div class="type-7054">
    <div class="container">
        <div class="box">
            <div class="sep-text">
                <div class="sep-text-before">
                    <div class="sep-text-line"></div>
                </div>
                <div class="content">
                    <h3>Breakfast</h3>
                </div>
                <div class="sep-text-after">
                    <div class="sep-text-line"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="item">
                        <div class="image">
                            <img src="<?php echo($url_path); ?>/images/Desserts-10.jpg">
                            <span class="price">$9</span>
                        </div>
                        <div class="menu-info">
                            <div class="inner-box">
                                <h3>Traditional pancakes with maple syrup butter & berry jam</h3>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="image">
                            <img src="<?php echo($url_path); ?>/images/Desserts-11-1230x823.jpg">
                            <span class="price">$9</span>
                        </div>
                        <div class="menu-info">
                            <div class="inner-box">
                                <h3>Traditional pancakes with maple syrup butter & berry jam</h3>
                                <div class="description">
                                    Milk, eggs, strawberries, butter, maple syrup
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="item">
                        <div class="image">
                            <img src="<?php echo($url_path); ?>/images/Desserts-3.jpg">
                            <span class="price">$9</span>
                        </div>
                        <div class="menu-info">
                            <div class="inner-box">
                                <h3>Traditional pancakes with maple syrup butter & berry jam</h3>
                                <div class="description">
                                    Milk, eggs, strawberries, butter, maple syrup
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="image">
                            <img src="<?php echo($url_path); ?>/images/Desserts-12-1230x823.jpg">
                            <span class="price">$9</span>
                        </div>
                        <div class="menu-info">
                            <div class="inner-box">
                                <h3>Traditional pancakes with maple syrup butter & berry jam</h3>
                                <div class="description">Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for an impressive and indulgent addition to ...</div>
                            </div>
                        </div>
                    </div>
                </div>  

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="item">
                        <div class="image">
                            <img src="<?php echo($url_path); ?>/images/Vegetarian-3-1230x823.jpg">
                            <span class="price">$9</span>
                        </div>
                        <div class="menu-info">
                            <div class="inner-box">
                                <h3>Traditional pancakes with maple syrup butter & berry jam</h3>
                                <div class="description">
                                    Milk, eggs, strawberries, butter, maple syrup
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="image">
                            <img src="<?php echo($url_path); ?>/images/Sandwiches-1.jpg">
                            <span class="price">$9</span>
                        </div>
                        <div class="menu-info">
                            <div class="inner-box">
                                <h3>Traditional pancakes with maple syrup butter & berry jam</h3>
                                <div class="description">Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for an impressive and indulgent addition to ...</div>
                            </div>
                        </div>
                    </div>
                </div>                  
            </div>
        </div>
    </div>
</div>