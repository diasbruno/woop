<?php

/**
 * Data Object wrapper.
 */
class WoopPost {
	
/*

["post_author"]=> string(1) "1" 
["post_date"]=> string(19) "2012-08-07 18:06:41" 
["post_date_gmt"]=> string(19) "2012-08-07 21:06:41" 
["comment_status"]=> string(4) "open" 
["ping_status"]=> string(4) "open" 
["post_password"]=> string(0) "" 
["to_ping"]=> string(0) "" 
["pinged"]=> string(0) "" 
["post_modified"]=> string(19) "2012-08-07 18:07:13" 
["post_modified_gmt"]=> string(19) "2012-08-07 21:07:13" 
["post_content_filtered"]=> string(0) "" 
["menu_order"]=> int(0) 
["post_mime_type"]=> string(0) "" 
["comment_count"]=> string(1) "2" 
["filter"]=> string(3) "raw" 
}
*/

	function WoopPost( $post ) { $this->post = $post; }

	private $post;
	/**
	 * Return the id of the post.
	 * @return int
	 */
	public function id() { return $this->post->ID; }
	/**
	 * Return the author id of the post.
	 * @return int
	 */
	public function authorId() { return $this->post->post_author; }
	/**
	 * Return the author id of the post.
	 * @return int
	 */
	public function authorLink() { return $this->post->post_author; }
	/**
	 * Return the id of the post.
	 * @return int
	 */
	public function type() { return $this->post->post_type; }
	/**
	 * Return the name of the post.
	 * @return string
	 */
	public function name() { return $this->post->post_name; }
	/**
	 * Return the title of the post.
	 * @return string
	 */
	public function title() { return $this->post->post_title; }
	/**
	 * Return the raw content of the post. 
	 * You have to apply the filters when use this method.
	 * @return string
	 */
	public function excerpt() { return $this->post->post_excerpt; }
	/**
	 * Return the raw content of the post. 
	 * You have to apply the filters when use this method.
	 * @return string
	 */
	public function content() { return $this->post->post_content; }
	/**
	 * Return the link of the post.
	 * @return string
	 */
	public function link() { return 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"].$this->post->post_name; }
	/**
	 * Return the term_id of the post.
	 * @return string
	 */
	public function termId() { return $this->post->term_id; }
	/**
	 * Return the guid of the post.
	 * @return string
	 */
	public function guid() { return $this->post->guid; }
	/**
	 * Return the post parent of the post.
	 * @return int
	 */
	public function parent() { return $this->post->post_parent; }
	/**
	 * Return the status of the post.
	 * @return string
	 */
	public function status() { return $this->post->post_status; }

}

/**
 * 
 */
class WoopPosts {
    function WoopPosts() {}
    
    public function getPostsUsingArgs( $args ) {
		return new WoopIterator( get_posts( $args ), 'WoopPost' );
	}
}

global $WooPPosts;
$WooPPosts = new WoopPosts();

?>