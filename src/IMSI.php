<?php

declare(strict_types=1);

namespace captainDuckay;

use Exception;

/**
 * Class IMSI
 * @author  Nicki Bo Otte <nbo@evercall.dk>
 * @package Structures\Utilities
 */
class IMSI {

	/**
	 * FYI This has no validation whatsoever
	 * @return string
	 * @author Nicki Bo Otte <nbo@evercall.dk>
	 */
	public static function generateRandom() {

		try {
			$IMSI = (string)random_int( 10000000000000, 999999999999999 );
		}
		catch( Exception $e ) {
			die( $e );
		}
		$IMSI = (strlen( $IMSI ) == 14 ? '0' . $IMSI : $IMSI);
		return $IMSI;
	}

}