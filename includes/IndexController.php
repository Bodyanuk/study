<?php
namespace \includes\IndexControler;

class IndexController extends Controller {
	private $layout;

	public function _construct($layout) {
		$this->layout = $layout;
	}

	public function actionIndex() {
		$this->getTemplate('\pages\index');
	}

	public function actionEnd() {
		$this->renderTemplatePart('\page\footer');
	}
}
?>
