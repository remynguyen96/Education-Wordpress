<?php
/*
Plugin Name: SON Auto Save Images
Plugin URI: http://theson.net
Description: Tự động lưu ảnh về website khi đăng bài viết.
Version: 1.102
Author: THESON.NET
Author URI: http://theson.net
Copyright: 2012
*/
class SON_Auto_Save_Images{

	function __construct(){		
		
		//filter and action hook
		add_filter( 'content_save_pre',array($this,'post_save_images') );	//save images
	}
	
	//save post exterior images
	function post_save_images( $content ){
		if( ($_POST['save'] || $_POST['publish'] )){
			set_time_limit(240);
			global $post;
			$post_id=$post->ID;
			$preg=preg_match_all('/<img.*?src="(.*?)"/',stripslashes($content),$matches);
			if($preg){
				foreach($matches[1] as $image_url){
					if(empty($image_url)) continue;
					$pos=strpos($image_url,$_SERVER['HTTP_HOST']);
					if($pos===false){
						$res=$this->save_images($image_url,$post_id);
						$replace=$res['url'];
						$content=str_replace($image_url,$replace,$content);
					}
				}
			}
		}
		remove_filter( 'content_save_pre', array( $this, 'post_save_images' ) );
		return $content;
	}
	
	//save exterior images
	function save_images($image_url,$post_id){
		$file=file_get_contents($image_url);
        $post = get_post($post_id);
        $posttitle = $post->post_title;
        $postname = sanitize_title($posttitle);
        $im_name = "$postname-$post_id.jpg";
		$res=wp_upload_bits($im_name,'',$file);
		$this->insert_attachment($res['file'],$post_id);
		return $res;
	}
	
	//insert attachment
	function insert_attachment($file,$id){
		$dirs=wp_upload_dir();
		$filetype=wp_check_filetype($file);
		$attachment=array(
			'guid'=>$dirs['baseurl'].'/'._wp_relative_upload_path($file),
			'post_mime_type'=>$filetype['type'],
			'post_title'=>preg_replace('/\.[^.]+$/','',basename($file)),
			'post_content'=>'',
			'post_status'=>'inherit'
		);
		$attach_id=wp_insert_attachment($attachment,$file,$id);
		$attach_data=wp_generate_attachment_metadata($attach_id,$file);
		wp_update_attachment_metadata($attach_id,$attach_data);
		return $attach_id;
	}
    
    

}

//new
new SON_Auto_Save_Images();
