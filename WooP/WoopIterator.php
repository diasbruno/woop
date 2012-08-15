<?php

/**
 * Generic iterator.
 */
class WoopIterator {
	
	function WoopIterator( $list, $what = '' ) {
		$this->list = $list;
		$this->what = $what;
	}

	private $what;
	private $list;
	private $index = -1;

	public function isEmpty() {
		return ( sizeof( $this->list ) == 0) ? true : false;
	}

	public function reset() {
		$this->index = -1;
	}

	public function hasNext() {
		$this->index += 1;
		if ( $this->index >= sizeof( $this->list ) ) {
			$this->reset();
			return false;

		}
		return true;
	}

	public function get() {
		return new $this->what( $this->list[ $this->index ] );
	}
}

?>