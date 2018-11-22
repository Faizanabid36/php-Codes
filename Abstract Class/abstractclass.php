<?php 
	abstract class Character{
		abstract public function Attacks();
		abstract public function Defends();
		abstract public function Dies();
		public function gameOver(){
			echo "Game Over";
		}
	}
	class Hero extends Character{
		public function Attacks(){
			echo "Hero Attacks";
		}
		public function Defends(){
			echo "Hero Defends";
		}
		public function Dies(){
			echo "Hero Dies";
		}
	}
	class Enemy extends Character{
		public function Attacks(){
			echo "The Enemy Attacks";
		}
		public function Defends(){
			echo "Enemy Defends";
		}
		public function Dies(){
			echo "Enemy Dies";
		}
	}
	$user1=new Enemy();
	$user1->Defends();
	$user2=new Hero();
	$user2->Attacks();