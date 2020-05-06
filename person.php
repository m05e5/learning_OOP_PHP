<?php
class person{
	private $first = "Daniel";
	private $last = "Nielson";
	private $age = "28";
}

class pet {
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