<?php  

/**
 * Data Object wrapper.
 */
class WoopTag {
	
	function WoopTag( $tag ) {
		$this->tag = $tag;
	}

	private $tag;

	/**
	 * Return the name of the tag.
	 * @return string
	 */
	public function name() {
		return $this->tag->name;
	}

	/**
	 * Return the link of the tag using #get_tag_link( term_id ).
	 * @return string
	 */
	public function link() {
		return get_tag_link( $this->tag->term_id );
	}

	/**
	 * Return the term_id of the tag.
	 * @return string
	 */
	public function termId() {
		return $this->tag->term_id;
	} 

}

/**
 * Oop wrapper to tags.
 */
class WoopTags {
	 
	function __construct() {}

	/**
	 * This should return am iterator of tags using the same args as get_tags($args).
	 */
	public function getTagsUsingArgs( $args ) {
		return new WoopIterator( get_tags( $args ), 'WoopTag' );
	}

}

global $WooPTags;
$WooPTags = new WoopTags();

?>