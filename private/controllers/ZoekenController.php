<?php

/**
 * Class HomeController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class ZoekenController {

	function zoeken() {

		$searchterm      = filter_var( $_GET['term'], FILTER_SANITIZE_STRING );
        $zoekresultaten  = search_database( $searchterm );
		$template_engine = get_template_engine();
		echo $template_engine->render( 'zoeken', [
			'zoekresultaten' => $zoekresultaten,
			'searchterm'     => $searchterm
		] );
	}

}
