<?php

function __custom_init( $context )
{
	// $context->db->execute("UPDATE example SET something = 1 WHERE 1");
	load_lib_file( 'exemplo/cnpj' );
};

?>