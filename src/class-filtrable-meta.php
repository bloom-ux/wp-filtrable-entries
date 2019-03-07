<?php

namespace Bloom_UX\WP_Filtrable_Entries;

class Filtrable_Meta implements Filtrable_Meta_Interface, \JsonSerializable {
	private $key;
	private $value;
	public function __construct( $key, $value ) {
		$this->key = $key;
		$this->value = $value;
	}
	public function get_key() {
		return $this->key;
	}
	public function get_value() {
		return $this->value;
	}
	public function jsonSerialize() {
		return (object) array(
			$this->get_key() => $this->get_value()
		);
	}
}