<?php
class PerfTest {
	public $perfTestStartTime;
	
	public function perfTestBegin() {
		$this->perfTestStartTime = microtime(true);
	}

	public function perfTimeFromInclude() {
		return microtime(true) - $this->perfTestStartTime;
	}

	public function perfLoadTest($weight) {
		// Weight must be between 1-10
		if ($weight > 10) { $weight = 10; } elseif ($weight < 1) { $weight = 1; }
		// Warning! Eight to the tenth is over a billion calculations. A slow machine will choke or time out.
		$loops = pow(8, $weight);
		for ($i=0; $i < $loops; $i++) { 
			$number = 1+1;
		}
	}
}
$perfTest = new PerfTest;
$perfTest->perfTestBegin();
?>