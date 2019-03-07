<?php

namespace Bloom_UX\WP_Filtrable_Entries;

interface Filtrable_Term_Interface extends \JsonSerializable {
	public function get_id();
	public function get_name();
	public function get_taxonomy();
	public function get_taxonomy_label();
	public function get_meta();
}