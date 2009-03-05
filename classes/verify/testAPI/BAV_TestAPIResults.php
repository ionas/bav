<?php
BAV_Autoloader::add('../BAV.php');
BAV_Autoloader::add('../bank/BAV_Bank.php');


/**
 * Copyright (C) 2009  Markus Malkusch <bav@malkusch.de>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 * 
 * @package classes
 * @subpackage verify
 * @author Markus Malkusch <bav@malkusch.de>
 * @copyright Copyright (C) 2009 Markus Malkusch
 */


class BAV_TestAPIResults extends BAV {

	
	private
	/**
	 * @var BAV_Bank
	 */
	$bank = 0,
	/**
	 * @var int
	 */
	$account = 0,
	/**
	 * @var Array
	 */
	$results = array();
	
	
	public function __construct(BAV_Bank $bank, $account, Array $results) {
		$this->bank       = $bank;
		$this->account    = $account;
		$this->results    = $results;
	}
	
	
	/**
	 * @return BAV_Bank
	 */
	public function getBank() {
		return $this->bank;
	}
	
	
	/**
	 * @return int
	 */
	public function getAccount() {
		return $this->account;
	}
	
	
	/**
	 * @return Array
	 */
	public function getResults() {
		return $this->results;
	}
	
	
}


?>