<?php
function webAppSetup( $options, $echo = true ) {
	$metaTags = "<meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />\n";
	$gloss = ""; $viewPort = "";
	
	if ( ! empty( $options['statusBar'] ) )
		$metaTags .= "<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"" . $options['statusBar'] . "\" />\n";
	
	if ( ! $options['iconGloss'] )
		$gloss = "-precomposed";

	if ( ! empty( $options['icon'] ) )
		$metaTags .= "<link rel=\"apple-touch-icon$gloss\" href=\"" . $options['icon'] . "\" />\n";
	
	if ( ! empty( $options['icon_iPad'] ) )
		$metaTags .= "<link rel=\"apple-touch-icon$gloss\" sizes=\"72x72\" href=\"" . $options['icon_iPad'] . "\" />\n";
	
	if ( ! empty( $options['icon_retina'] ) )
		$metaTags .= "<link rel=\"apple-touch-icon$gloss\" sizes=\"114x114\" href=\"" . $options['icon_retina'] . "\" />\n";
					
	if ( ! empty( $options['startUpImg'] ) )
		$metaTags .= "<link rel=\"apple-touch-startup-image\" href=\"" . $options['startUpImg'] . "\" />\n";

	if ( ! empty( $options['startUpImg_iPad_landscape'] ) )
		$metaTags .= "<link rel=\"apple-touch-startup-image\" href=\"" . $options['startUpImg_iPad_landscape'] . "\" media=\"screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)\" />\n";

	if ( ! empty( $options['startUpImg_iPad_port'] ) )
		$metaTags .= "<link rel=\"apple-touch-startup-image\" href=\"" . $options['startUpImg_iPad_port'] . "\" media=\"screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)\" />\n";

	if ( ! empty( $options['vpWidth'] ) )
		$viewPort .= ( $options['vpWidth'] !== '' ? "width = " . $options['vpWidth'] . ", " : '' );

	if ( ! empty( $options['vpInitialScale'] ) )
		$viewPort .= ( $options['vpInitialScale'] !== '' ? "initial-scale = " . $options['vpInitialScale'] . ", " : '' ) ;

	if ( ! empty( $options['vpUserScalable'] ) )
		$viewPort .= ( $options['vpUserScalable'] !== false ? "user-scalable = " . $options['vpUserScalable'] . ", " : '' );

	if ( ! empty( $options['vpMinimumScale'] ) )
		$viewPort .= ( $options['vpMinimumScale'] !== '' ? "minimum-scale = " . $options['vpMinimumScale'] . ", " : '' );

	if ( ! empty( $options['vpMaximumScale'] ) )
		$viewPort .= ( $options['vpMaximumScale'] !== '' ? "maximum-scale = " . $options['vpMaximumScale'] . ", " : '' );				

	if ( ! empty( $options['vpWidth'] ) || ! empty( $options['vpInitialScale'] ) || ! empty( $options['vpUserScalable'] ) || ! empty( $options['vpMinimumScale'] ) || ! empty( $options['vpMaximumScale'] ) ) 
		$metaTags .= "<meta name=\"viewport\" content=\"" . substr( $viewPort, 0, -2 ) . "\" />\n";
	
	if( $echo )
		echo $metaTags;
	else
		return $metaTags;
}