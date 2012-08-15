<?php

/**
 * Data Object wrapper.
 */
class WoopPost {
	
	function WoopPost( $tag ) {
		$this->post = $tag;
	}

	private $post;

	/**
	 * Return the name of the tag.
	 * @return string
	 */
	public function name() {
		return $this->post->name;
	}

	/**
	 * Return the link of the tag using #get_tag_link( term_id ).
	 * @return string
	 */
	public function link() {
		return get_tag_link( $this->post->term_id );
	}

	/**
	 * Return the term_id of the tag.
	 * @return string
	 */
	public function termId() {
		return $this->post->term_id;
	} 

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