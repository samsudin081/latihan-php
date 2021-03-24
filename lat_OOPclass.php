<?php 
	class pesawatTerbang{
		public $warnaPesawat;
		public function __construct($warnaAwal){
			$this->warnaPesawat = $warnaAwal;
		}

		public function gantiWarna($warnaBaru){
			$this->warnaPesawat = $warnaBaru;
			return $this->warnaPesawt;
		}
		public function setWarna($warnaBaru){
			$this->warnaPesawat = $warnaBaru;
		}
		public function getWarna(){
			return $this->warnaPesawat;
	}

}
 class Mobil{
 	protected $warnaMobil;
 	protected $kecepatanMobil;

 	public function __construct($warnaAwalMobil){
 		$this->warnaMobil = $warnaAwalMobil;
 		$this->kecepatanMobil = 0;

 	}
 	public function tambahKecepatan($kecepatan){
 		$this->kecepatanMobil = $kecepatan
 		+ $this->kecepatanMobil;
 	}
 	public function setWarna($warnaBaru){
 		$this->warnaMobil = $warnaMobil;
 	}
 	public function getWarna(){
 		return $this->warnaMobil;
 	}
 	public function getKecepatan(){
 		return $this->kecepatanMobil;
 	}
	
 }

class mobilBalap extends Mobil{
		public function tambahKecepatan($kecepatan){
 				$this->kecepatanMobil = (2*$kecepatan) + $this->kecepatanMobil;
		}
}


class lingkaran{
	protected $luasLing;
	protected $kelling;

	public function __construct($r){
		$this->r = $r;
	}
	public function getkelLing(){
		$this->kelling = 2* 3.13 * $this->r;
		return	$this->kelling;	

	}
		public function getLuas(){
		$this->luasLing = 3.14 * $this->r * $this->r;
		return $this ->luasLing;
			}
	
	}


 ?>
 