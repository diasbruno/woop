<?php  

/**
 * Data Object wrapper.
 */
class WoopArchiveCustom {
	
	/**
	 * Use, only if, for some reason, you need to make a different implementation.
	 * @param $archive Raw archive from #wp_get_archives().
	 */
	function WoopArchiveCustom( $archive ) {
		$archive = str_replace( '<a ', '', $archive );
		$archive = str_replace( '</a>', '', $archive );
		$gName = explode('>', $archive );
		$this->a_name = $gName[ 1 ];
		$gLink = explode( 'href=\'', $gName[ 0 ] );
		$gLink = explode( '\'', $gLink[ 1 ] );
		$this->a_link = $gLink[0];
	}

	private $a_name;
	private $a_link;

	/**
	 * Return the name of the tag.
	 * @return string
	 */
	public function name() { return $this->a_name; }
	/**
	 * Return the link of the tag using #get_tag_link( term_id ).
	 * @return string
	 */
	public function link() { return $this->a_link; }

}

/**
 * Data Object wrapper.
 */
class WoopArchive {
	
	/**
	 * Use as normal call of #wp_get_archives().
	 */
	function WoopArchive( $archive ) {
		$this->archive = $archive;
	}

	private $archive;

	/**
	 * Return the name of the tag.
	 * @return string
	 */
	public function link() { return $this->archive.'</a>'; }

}

/**
 * Oop wrapper to tags.
 */
class WoopArchives {
	 
	function WoopArchives() {}

	/**
	 * This should return am iterator of archives using the same args as #wp_get_archives( $args ).
	 * @param $args {array} The same information you pass for #wp_get_archives( $args ).
	 * @param $type {string} 'normal' don't apply any manipulation to the information from wp_get_archives() 
	 *						 | 'custom' apply.
	 * @return WoopIterator
	 */
	public function getArchivesUsingArgs( $args, $type = 'normal' ) {
		$archives = explode('</a>', wp_get_archives( $args ) );
		$last = array_pop( $archives );
		return new WoopIterator( $archives, (($type == 'normal') ? 'WoopArchive' : 'WoopArchiveCustom' ) );
	}

}

global $WooPArchives;
$WooPArchives = new WoopArchives();

?>