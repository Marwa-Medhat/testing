<?php
	class Validation {

		public static function checkAge($dob /* yyyy-mm-dd */, $minAge) {
			$ts = strtotime($dob);
			if(!$ts) return false;

			$now = time();
			$age = ($now - $ts) / 86400 / 365; // age in years

			return $age >= $minAge;
		}
	}
