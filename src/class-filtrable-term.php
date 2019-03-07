<?php

namespace Bloom_UX\WP_Filtrable_Entries;

abstract class Filtrable_Term implements Filtrable_Term_Interface {
	public function jsonSerialize() {
		return (object) array(
			'name'           => $this->get_name(),
			'id'             => $this->get_id(),
			'taxonomy'       => $this->get_taxonomy(),
			'meta'           => $this->get_meta(),
			'taxonomy_label' => $this->get_taxonomy_label(),
		);
	}
}