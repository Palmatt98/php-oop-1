<?php
class Movie {
	private int $duration;
	private string $title;
	private Genere $genere;

	public function getDuration():int{
		return $this->duration;
	}
	public function getTitle():string{
		return $this->title;
	}
	public function getGenere():Genere{
		return $this->genere;
	}

	public function setDuration(int $_duration):void{
		$this->duration = $_duration;
	}
	public function setTitle(string $_title):void{
		$this->title = $_title;
	}
	public function setGenere(Genere $_genere):void{
		$this->genere = $_genere;
	}
	
}

$movie1 = new Movie();
$movie1->setTitle("Paradiso all'improvviso");

