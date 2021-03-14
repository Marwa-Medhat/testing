<?php


class FunctionsTest extends PHPUnit\Framework\TestCase {



        public function test_addArray_can_add_elements_of_2_arrays() {
                $this->assertEquals(
                        addArray([10, 30, 5], [5, -10, 10]),
                        [15, 20, 15]
                );
        }

	public function test_addArray_can_add_elements_of_2_arrays_of_different_size() {
		$this->assertEquals(
			addArray([10, 30, 5, 100, 22], [5, -10, 10]),
			[15, 20, 15, 100, 22]
		);
	}

        public function test_addArray_can_add_elements_of_an_array_and_integer() {
                $this->assertEquals(
                        addArray([10, 30, 5], 5),
                        [15, 30, 5]
                );
        }

        public function test_checkAge_returns_true_for_age_greater_than_18() {
                $this->assertTrue(
			Validation::checkAge('2000-3-15', 18)
                );
        }

        public function test_checkAge_returns_false_for_age_less_than_18() {
                $this->assertFalse(
                        Validation::checkAge('2009-3-15', 18)
                );
        }

        public function test_checkAge_returns_false_for_invalid_date() {
                $this->assertFalse(
                        Validation::checkAge('invalid', 18)
                );
        }

        public function test_factorial_zero_return_One() {
                $this->assertEquals(calcfactorial(0),1);
        }
        public function test_factorial_one_return_One() {
                $this->assertEquals(calcfactorial(1),1);
        }
        public function test_factorial_Five_return_OneHundredTwenty() {
                $this->assertEquals(calcfactorial(5),120);
        }
        public function test_factorial_randomnum_greaterthan_3_equal_to_num_minus_one_multiplyby_num() {
                $this->assertEquals(calcfactorial(6),720);
        }
        public function test_factorial_number_less_than_zero() {
                $this->assertEquals(calcfactorial(-3),null);
        }
        public function test_factorial_number_decimal() {
                $this->assertEquals(calcfactorial(3.5),null);
        }
        public function test_factorial_False() {
                $this->assertEquals(calcfactorial("False"),null);
        }
        public function test_factorial_string() {
                $this->assertEquals(calcfactorial("abc"),null);
        }
       
//*******************************************************************       

public function test_check_if_name_set() {
       // $this->assertEquals($user1->set_name('samy'),$user1->get_name());
//        $user1 = new User();
//        $user1->set_name('samy');
//        $user1->set_email('samy@gmail.com');
       $this->assertEquals($GLOBALS['user1']->get_name(),'samy');
}
public function test_check_if_email_set_to_specific_email() {
         //$user1 = new User();
         //$user1->set_name('samy');
        //$user1->set_email('samy@gmail.com');
        // $this->assertEquals($user1->set_email('samy@gmail.com'),$user1->get_email());
        $this->assertEquals($GLOBALS['user1']->get_email(),'samy@gmail.com');

}
// public function test_if_user_unset() {
//         $user1 = new User();
//         $user1->set_name('samy');
//         $user1->set_email('samy@gmail.com');
//         $user1->unset_user();
//         // echo "name".$user1->get_name();
//         // echo "email".$user1->get_email();
//         $this->assertEquals($user1->get_name(),'null');
//         $this->assertEquals($user1->get_email(),'null');
 
// }

public function test_check_if_name_set_to_null() {
        //$this->assertEquals($user2->set_name(),$user2->get_name());
         //$this->assertEquals($user2->set_name(),'null');
        //  $user2 = new User();
        //  $user2->set_name();
        //  $user2->set_email();
          $this->assertEquals($GLOBALS['user2']->get_name(),'null');
}



public function test_check_if_email_set_to_null() {
        // $this->assertEquals($user1->set_email('samy@gmail.com'),$user1->get_email());
        // $user2 = new User();
        //  $user2->set_name();
        //  $user2->set_email(); 
        $this->assertEquals($GLOBALS['user2']->get_email(),'null');
 
 }
 //*************************************************************************** 

// public function test_check_if_value_inside_file_equal_4() {
       
//         $this->assertEquals($number ,4);
//  }



// programFunctions::increase_counter()
function test_display_counter()
{
  if(file_exists("file"))
  {
  $this->assertEquals(programFunctions::display_counter(),(int)file_get_contents("file"));
  }
  else
  {
    $this->assertEquals(programFunctions::display_counter(),0);
  }

}

function test_increase_counter()
{
  programFunctions::increase_counter();
  $this->assertEquals(programFunctions::display_counter(),(int)file_get_contents("file"));
}


//*************************************************************************************
protected function setup() : void {
        echo "Test start!\n";
        //  $user1 = new User();
        
        //  $user1->set_name('samy');
        //  $user1->set_email('samy@gmail.com');
         // $user2 = new User();
        // $user2->set_name();
        // $user2->set_email();
}

protected function teardown() : void {
        //echo "Test finish!";
        //sleep(1);
        //$user1->unset_user();
}

public static function setupBeforeClass() : void {
        echo "\nStart of all tests\n";
        $GLOBALS['user1']=new User();
        $GLOBALS['user1']->set_name('samy');
        $GLOBALS['user1']->set_email('samy@gmail.com');
        $GLOBALS['user2']=new User();
        $GLOBALS['user2']->set_name();
        $GLOBALS['user2']->set_email();
       // $GLOBALS['start'] = new Visitor();
        //$number =  $GLOBALS['start']-> countVisitor();
        echo "<h1>$number</h1>";
        
}

public static function teardownAfterClass() : void {
        echo "\nEnd of all tests\n";
        unset( $GLOBALS['user1']);
        unset( $GLOBALS['user2']);
}





}


