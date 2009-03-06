<?php
BAV_Autoloader::add('../../bank/BAV_Bank.php');
BAV_Autoloader::add('../BAV_Validator_Chain.php');
BAV_Autoloader::add('BAV_Validator_05.php');
BAV_Autoloader::add('BAV_Validator_01.php');


/**
 * Implements B1
 *
 * Copyright (C) 2006  Markus Malkusch <bav@malkusch.de>
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
 */


class BAV_Validator_B1 extends BAV_Validator_Chain {
  
  
  public function __construct(BAV_Bank $bank) {
        parent::__construct($bank);

        $this->validators[] = new BAV_Validator_05($bank);
        $this->validators[0]->setWeights(array(7, 3, 1));
        
        $this->validators[] = new BAV_Validator_01($bank);
        $this->validators[1]->setWeights(array(3, 7, 1));
    }


}


?>