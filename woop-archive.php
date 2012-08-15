<?php  

/**
 * Data Object wrapper.
 */
class WoopArchive {
	
	function WoopArchive( $archive ) {
		$this->archive = $archive;
	}

	private $archive;

	/**
	 * Return the name of the tag.
	 * @return string
	 */
	public function name() {
		return $this->archive->name;
	}

	/**
	 * Return the link of the tag using #get_tag_link( term_id ).
	 * @return string
	 */
	public function link() {
		return get_tag_link( $this->archive->term_id );
	}

	/**
	 * Return the term_id of the tag.
	 * @return string
	 */
	public function termId() {
		return $this->archive->term_id;
	} 

}

/**
 * Oop wrapper to tags.
 */
class WoopArchives {
	 
	function WoopArchives() {}

	/**
	 * This should return am iterator of tags using the same args as get_tags($args).
	 */
	public function getTagsUsingArgs( $args ) {
		return new WoopIterator( get_archives( $args ), 'WoopArchive' );
	}

}

global $WooPArchives;
$WooPArchives = new WoopArchives();

?>