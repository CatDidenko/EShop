<?php

class Title{
	
	public static function getTitle($a){

		switch($a){
			
			case 1:
			echo "Главная";
			break;

			case 2:
			echo "Каталог";
			break;

			case 3:
			echo "Корзина";
			break;

			case 4:
			echo "Вход";
			break;

			case 5:
			echo "Регистрация";
			break;

			case 6:
			echo "Личный кабинет";
			break;

			case 7:
			echo "Блог";
			break;

		}
	}
}