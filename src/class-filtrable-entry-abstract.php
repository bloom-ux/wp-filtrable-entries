<?php

namespace Bloom_UX\WP_Filtrable_Entries;

abstract class Filtrable_Entry_Abstract implements Filtrable_Entry_Interface, \JsonSerializable {
	public function jsonSerialize(): mixed {
		return (object) array(
			'id'         => $this->get_id(),
			'title'      => $this->get_title(),
			'bookmark'   => $this->get_bookmark(),
			'meta'       => $this->get_meta(),
			'categories' => $this->get_terms()
		);
	}
}