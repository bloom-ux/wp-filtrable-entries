<?php

namespace Bloom_UX\WP_Filtrable_Entries;

interface Filtrable_Entry_Interface {
	public function get_title();
	public function get_id();
	public function get_bookmark();
	public function get_meta();
	public function get_terms();
}