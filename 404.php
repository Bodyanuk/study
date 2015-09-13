<?php 
class Errors {
	private $error;
	public function _construct(\Error $error) {
		$this->error = $error;
	}

	private function codeTranslate() {
		switch ($this->error->getCode()) {
			case 404:
				return 'Some text 404 error!';
				break;
			default:
				return 'Unknow error code: '.$this->error->getCode();		
		}
	}
}
?> 
