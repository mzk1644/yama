<body>
	<?php
	echo $this->Html->css('foundation.css');
	echo $this->Html->css('site.css');
	echo $this->Html->script('modernizr.js');
	?>
	<div class="row">
		<div class="small-4 large-4 small-centered large-centered columns">
			<?php
			echo $this->Html->image('yamacolle_logo.jpg');
			?>
		</div>
	</div>
	<div class="row">
		<div class="small-4 large-4 small-centered large-centered columns">
			<?php
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
			$image->draw($hatImage,20,20);
			?>
		</div>
	</div>
	<div class="row">
		<div class="small-4 large-4 small-centered large-centered columns">
			<p>ヤマコレは、登山ウェアのマッチングができるサイトです</p>
			<img src="<?=$image->toDataSchemeURI()?>" />
		</div>
	</div>
	<div class="row">
		<div class="small-4 large-4 small-centered large-centered columns">
			<h3>性別を選んでください</h3>
			<p>
				<span>
					<?php
					echo $this->Html->link('男性', '/Coordinate/index', array('class' => 'button small radius'))
					?>
				</span>
				<span>
					<?php
					echo $this->Html->link('女性', '/Coordinate/index', array('class' => 'button small radius'))
					?>
				</span>
			</p>
		</div>
	</div>
</body>
