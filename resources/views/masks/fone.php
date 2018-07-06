<?php

	function fone($fone) {

	    if (! $fone) {

	        return '';

	    }

	    if (strlen($fone) == 10) {

	        return '(' . substr($fone, 0, 2) . ') ' . substr($fone, 2, 4) . ' - ' . substr($fone, 6);

	    }

	    if (strlen($fone) == 11) {

	        return '(' . substr($fone, 0, 2) . ') ' . substr($fone, 2, 5) . ' -'  . substr($fone, 7);

	    }

	    return $fone;

	}

?>