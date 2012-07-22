<?php
/**
 * Generates random MAC addresses
 * @author gehaxelt
 * @version 1.0
 */
class MACGenerator {
	
	/**
	 * Current MAC address
	 * @var sttring $macaddress
	 */
	private $macaddress = '00:00:00:00:00:00';
	
	/**
	 * Characterset for MAC addresses
	 * @var string $characterset
	 */
	private $characterset='0123456789ABCDEF';
	
	/**
	 * Generates a random MAC address
	 * @return string MAC address
	 */
	public function generateMAC() {
		$this->macaddress=$this->randomBracket().":".$this->randomBracket().":".$this->randomBracket().":".$this->randomBracket().":".$this->randomBracket().":".$this->randomBracket();
		return $this->getCurrentMAC();
	}
	
	/**
	 * Generates one random bracket
	 * @return string
	 */
	private function randomBracket() {
		return $this->characterset[rand(0,strlen($this->characterset)-1)]."".$this->characterset[rand(0,strlen($this->characterset)-1)];
	}
	
	/**
	 * Getter mehtod of the MAC address
	 * @return string
	 */
	public function getCurrentMAC() {
		return $this->macaddress;
	}
}

?>