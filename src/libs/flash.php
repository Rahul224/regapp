<?php
const FLASH = 'FLASH_MESSAGES';

const FLASH_ERROR = 'error';
const FLASH_SUCCESS = 'success';
const FLASH_INFO = 'info';
const FLASH_WARNING = 'warning';

/**
 *create a flas message
 *
 *@param string $name
 *
 *@param string $massage
 *
 *@param string $type
 *
 *@return void
 **/

function create_flash_message(string $name, string $message, string $type):void 
{
	//remove existing message with flash
	if(isset($_SESSION[FLASH][$name])){
		unset($_SESSION[FLASH][$name]);
	}

	//add the message to the session
	$_SESSION[FLASH][$name] = ['message' => $message, 'type'=>$type];
}