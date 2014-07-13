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
			<p>ヤマコレは、登山ウェアのマッチングができるサイトです</p>
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
