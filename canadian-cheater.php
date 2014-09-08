<?php
//Plugin Name: Canadian Cheater

add_filter( 'gettext', 'more_canadian', 10, 3 );
function more_canadian( $translation, $text, $domain ) {
	if ( $text != 'Cheatin&#8217; uh?' ) return $translation;
	return 'Cheatin&#8217; eh?';
}