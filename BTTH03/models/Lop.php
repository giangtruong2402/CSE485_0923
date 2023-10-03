<?php
class Lop {
    private $id;
    private $tenLop;

    // Constructor
	/**
	 * Summary of __construct
	 * @param mixed $id
	 * @param mixed $tenLop
	 */
    public function __construct($id, $tenLop) {
        $this->id = $id;
        $this->tenLop = $tenLop;
    }

   

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * @param mixed $id 
	 * @return self
	 */
	public function setId($id): self {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTenLop() {
		return $this->tenLop;
	}
	
	/**
	 * @param mixed $tenLop 
	 * @return self
	 */
	public function setTenLop($tenLop): self {
		$this->tenLop = $tenLop;
		return $this;
	}
}
