<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/5
 * Time: 14:11
 */
function reward_img($author_name, $default = 'https://www.hongweipeng.com/usr/uploads/2016/09/555702225.jpg') {
    $_map = array(
        "hongweipeng"=>"https://www.hongweipeng.com/usr/uploads/2016/09/555702225.jpg",
    );
    return isset($_map[$author_name]) ? $_map[$author_name] : $default;
}

function reward_words() {
    static $words = array(
        "如果对您有用，您的支持将鼓励我继续创作！",
        "赏个馒头吧",
    );
    return $words[array_rand($words)];
}