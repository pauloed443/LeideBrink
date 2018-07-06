<?php
	function cpf($cpf) {

	   if (! $cpf) {

	       return '';
	       
	   }

	   if (strlen($cpf) == 11) {

	       return substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9);

	   }

	   return $cpf;

	}

	function cnpj($cnpj) {

        if (! $cnpj) {

            return '';

        }

        if (strlen($cnpj) == 14) {

            return substr($cnpj, 0, 2) . '.' . substr($cnpj, 2, 3) . '.' . substr($cnpj, 5, 3) . '/' . substr($cnpj, 8, 4) . '-' . substr($cnpj, 12, 2);

        }

        return $cnpj;

    }
?>