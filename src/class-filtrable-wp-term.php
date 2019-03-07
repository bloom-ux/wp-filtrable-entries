<?php

namespace Bloom_UX\WP_Filtrable_Entries;

class Filtrable_WP_Term extends Filtrable_Term implements Filtrable_Term_Interface {
	private $term = null;
	public function __construct( $term ) {
		$this->term = $term;
	}
	public function get_id() {
		return $this->term->term_id;
	}
	public function get_name() {
		return $this->term->name;
	}
	public function get_taxonomy() {
		return $this->term->taxonomy;
	}
	public function get_taxonomy_label() {
		return get_taxonomy( $this->term->taxonomy )->labels->singular_name;
	}
	public function get_meta() {
		$meta = get_term_meta( $this->get_id() );
		$out  = array();
		foreach ( $meta as $key => $val ) {
			$this_meta = new Filtrable_Meta( $key, $val );
			$out[ $this_meta->get_key() ] = count( $this_meta->get_value() ) == 1 ? current( $this_meta->get_value() ) : $this_meta->get_value();
		}
		return $out;
	}
}