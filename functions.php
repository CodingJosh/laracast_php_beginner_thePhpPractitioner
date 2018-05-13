<?php

/**
 * @param int $age
 * @return bool
 */
function ageConfirmation(int $age):bool
{
	if((int)$age >= 21){
		return true;
	} else {
		return false;
	}
}
