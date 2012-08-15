<?php  

/**
 * Data Object wrapper.
 */
class WoopBookmark {
	
	function WoopBookmark( $bookmark ) {
		$this->bookmark = $bookmark;
	}

	private $bookmark;

	/**
	 * Return the link name of the bookmark using #link_name.
	 * @return string
	 */
	public function name() {
		return $this->bookmark->link_name;
	}

	/**
	 * Return the link of the bookmark using #link_url.
	 * @return string
	 */
	public function link() {
		return $this->bookmark->link_url;
	}

}

/**
 * Oop wrapper to tags.
 */
class WoopBookmarks {
	 
	function __construct() {}

	/**
	 * This should return am iterator of tags using the same args as get_tags($args).
	 *  - Valid options:
	 * 'orderby'        
	 * 'order'          
	 * 'limit'          
	 * 'category'       
	 * 'category_name'  
	 * 'hide_invisible' 
	 * 'show_updated'   
	 * 'include'        
	 * 'exclude'        
	 * 'search'        
	 * @return WoopIterator 
	 */
	public function getBookmarksUsingArgs( $args ) {
		return new WoopIterator( get_bookmarks( $args ), 'WoopBookmark' );
	}

}

global $WooPBookmarks;
$WooPBookmarks = new WoopBookmarks();

?>