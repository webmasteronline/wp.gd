<?php

add_action('wp_ajax_nopriv_post-like', 'post_like');
add_action('wp_ajax_post-like', 'post_like');


function post_like(){
    $nonce = $_POST['nonce'];
    if ( ! wp_verify_nonce( $nonce, 'ajax-nonce' ) )
        die ( 'Busted!');
    if(isset($_POST['post_like'])){
        $ip = $_SERVER['REMOTE_ADDR'];
        $post_id = $_POST['post_id'];
        $meta_IP = get_post_meta($post_id, "voted_IP");
        $voted_IP = $meta_IP[0];
        if(!is_array($voted_IP))
            $voted_IP = array();
        $meta_count = get_post_meta($post_id, "votes_count", true);
        if(!hasAlreadyVoted($post_id)){
            $voted_IP[$ip] = time();
            update_post_meta($post_id, "voted_IP", $voted_IP);
            update_post_meta($post_id, "votes_count", ++$meta_count);
            echo $meta_count;}
        else
            echo "already";}
    exit;}

function hasAlreadyVoted($post_id){
    global $timebeforerevote;
    $timebeforerevote = 120;
    $meta_IP = get_post_meta($post_id, "voted_IP");
    $voted_IP = $meta_IP[0];
    if(!is_array($voted_IP))
        $voted_IP = array();
    $ip = $_SERVER['REMOTE_ADDR'];
    if(in_array($ip, array_keys($voted_IP))){
        $time = $voted_IP[$ip];
        $now = time();
        if(round(($now - $time) / 60) > $timebeforerevote)
            return false;
        return true;}
    return false;}

function getPostLikeLink($post_id,$icon){
    $vote_count = get_post_meta($post_id, "votes_count", true);
    $output = '';
    if(hasAlreadyVoted($post_id)){
        $output .= '<div class="svg_bottom_ico"><div class="like_ico is-active">'.$icon.'</div></div>';
        $output .= '<span class="likecount">'.$vote_count.'<span class="like-t">likes</span></span>';
    }else{
        $output .= '<div class="svg_bottom_ico"><div class="like_ico noactive_svg" data-post_id="'.$post_id.'">'.$icon.'</div></div>';
        $output .= '<span class="likecount">'.$vote_count.'<span class="like-t">likes</span></span>';
    }
    return $output;
}