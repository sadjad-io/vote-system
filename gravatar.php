<?php
function get_gravatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = true, $atts = array() ) {
    $url = 'https://www.gravatar.com/avatar/';
    $url .= md5( strtolower( trim( $email ) ) );
    $url .= "?s=$s&d=$d&r=$r";
    if ( $img ) {
        $url = '<img class="img-rounded mar" width="50" src="' . $url . '"';
        foreach ( $atts as $key => $val )
            $url .= ' ' . $key . '="' . $val . '"';
        $url .= ' />';
    }
    return $url;
}
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
echo get_gravatar("amirbagh75@gmail.com");
