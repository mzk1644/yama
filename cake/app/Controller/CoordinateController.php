<?php
class CoordinateController extends Controller {

	/*
	** 初期表示処理
	*/
	public function index () {
		$this->set('coodinate_image_uri', '/yama/cake/app/webroot/img/pict_men.png');
		$this->render('index');
	}

	public function coordinate() {
		require_once($_SERVER['DOCUMENT_ROOT'] . '/yama/lib/SplClassLoader.php');
		$DmDirPath = $_SERVER['DOCUMENT_ROOT'] .'/yama/lib/DmImage';
		$classLoader = new SplClassLoader(null, $DmDirPath);
		$classLoader->register();
		$filter = new Dm_Image_Filter_Fit(300,300);
		$image = new Dm_Image_File($_SERVER['DOCUMENT_ROOT'] . '/yama/cake/app/webroot/img/pict_men.png');
		$image->applyFilter($filter);

		$hatImage = new Dm_Image_File($_SERVER['DOCUMENT_ROOT'] . '/yama/cake/app/webroot/img/hat1.png');
		$hatFilter = new Dm_Image_Filter_Fit(100,100);
		$hatImage->applyFilter($hatFilter);
		$image->draw($hatImage,98,14);

		$this->set('coodinate_image_uri', $image->toDataSchemeURI());
		$this->render('index');
	}

}
?>