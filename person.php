<?php
class person{
	public $first = "Daniel";
	private $last = "Nielson";
	private $age = "28";


}

class pet extends person {
		public function owner(){
		$a = $this->first;
		 return $a;
	}
}
class boy {
		public function owner(){
		$a = "Hi there!";

		return $a;
	}
}

?>