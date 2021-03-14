<?php

include(__DIR__ . '/functions.php');

function test_add() {
	if(add(10, 30) === 40) return true;
	return false;
}

function test_addArray() {
	if(addArray([10, 20, 50], [20, 10, -5]) === [30, 30, 45]) return true;
	return false;
}

function test_addArray_can_handle_arrays_of_different_size() {
        if(addArray([10, 20, 50, 40], [20, 10, -5]) === [30, 30, 45, 40]) return true;
	return false;
}

function test_addArray_can_handle_strings() {
        if(addArray([10, 20, 50, '100'], [20, 10, -5, '20']) === [30, 30, 45, 120]) return true;
        return false;
}

echo "\n";

if(!test_add())
	echo "add() failed!\n";
else
	echo "add() ok\n";

if(!test_addArray())
	echo "addArray() failed\n";
else
	echo "addArray() ok\n";

if(!test_addArray_can_handle_arrays_of_different_size())
	echo "test_addArray_can_handle_arrays_of_different_size() failed\n";
else
	echo "test_addArray_can_handle_arrays_of_different_size() ok\n";

if(!test_addArray_can_handle_strings())
	echo "test_addArray_can_handle_strings() failed\n";
else
	echo "test_addArray_can_handle_strings() ok\n";



