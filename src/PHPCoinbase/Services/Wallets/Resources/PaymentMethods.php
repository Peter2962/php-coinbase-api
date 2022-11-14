<?php

namespace PHPCoinbase\Services\Wallets\Resources;

use PHPCoinbase\Concerns\InteractsWithResource;

/**
 * @link https://docs.cloud.coinbase.com/sign-in-with-coinbase/docs/api-payment-methods
 */

class PaymentMethods
{

	use InteractsWithResource;

	/**
	 * Lists payment methods.
	 * 
	 * @access public
	 */
	public function list()
	{

	}

	/**
	 * Show payment method with provided id.
	 * 
	 * @param $paymentMethodId String
	 * @access public
	 */
	public function show(String $paymentMethodId)
	{

	}

}