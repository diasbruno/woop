<?php

/**
 * Data Object wrapper.
 */
class WoopCategory {
	
	function WoopCategory( $tag ) {
		$this->category = $tag;
	}

	private $category;

	/**
	 * Return the name of the tag.
	 * @return string
	 */
	public function name() {
		return $this->category->name;
	}

	/**
	 * Return the link of the tag using #get_tag_link( term_id ).
	 * @return string
	 */
	public function link() {
		return get_category_link( $this->category->term_id );
	}

	/**
	 * Return the term_id of the tag.
	 * @return string
	 */
	public function termId() {
		return $this->category->term_id;
	} 
    
    public function numPosts() {
		return $this->category->count;
    }
    
}

/**
 * 
 */
class WoopCategories {
    
    function WoopCategories() {}
    
    public function getCategoriesUsingArgs( $args ) {
		return new WoopIterator( get_bookmarks( $args ), 'WoopCategory' );
	}
    
}

global $WooPCategories;
$WooPCategories = new WoopCategories();

?>