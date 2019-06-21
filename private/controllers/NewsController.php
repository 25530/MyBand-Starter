<?php


class NewsController {

	function News() {

		//Hier haal je de template engine op, die weet dat de views in private/views staan
		$template_engine = get_template_engine();

		//De template engine opdracht geven de juiste view weergeven: homepage (de ".php" mag je weglaten uit de naam van de view)
		echo $template_engine->render( 'news' );
	}

	}