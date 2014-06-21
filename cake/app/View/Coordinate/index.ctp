<BODY>
<?php
echo $this->Html->css('foundation.css');
echo $this->Html->css('site.css');
echo $this->Html->script('modernizr.js');
?>
	<div class="row">
		<div class="large-8 small-8 columns">
			<span class="pictimage">
			<?php
			echo $this->Html->image('pict_men.png');
			?>
			</span>
		</div>
		<div class="large-4 small-4 columns end">
			<div class="panel">
				<ul class="side-nav">
					<li><h5>アイテムを選択してください</h5></li>
					<li class="divider"></li>
 					<li><a href="#">帽子</a></li>
 					<li><a href="#">マフラー類</a></li>
 					<li><a href="#">アウター</a></li>
 					<li><a href="#">ザック</a></li>
 					<li><a href="#">パンツ</a></li>
 					<li><a href="#">シューズ</a></li>
    				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<ul class="large-block-grid-3 small-block-grid-1">
			<li>
				<div class="thumbnail">
					<a href="#">
						<?php
						echo $this->Html->image('hat1.png');
						?>
					</a>
				</div>
				<div class="panel-description">
					<p><span class="makername">MILLET</span><br><span class="itemname">カラフルHAT</span></p>
					<p class="pbutton">
	  					<?php
	  					echo $this->Html->link('試着する', '/Coordinate/Coordinate', array('class' => 'button tiny radius'))
	  					?>
					</p>
				</div>
			</li>
			<li>
				<div class="thumbnail">
					<a href="#">
						<?php
						echo $this->Html->image('hat1.png');
						?>
					</a>
				</div>
				<div class="panel-description">
					<p><span class="makername">MILLET</span><br><span class="itemname">カラフルHAT</span></p>
					<p class="pbutton">
	  					<?php
	  					echo $this->Html->link('試着する', '/Coordinate/Coordinate', array('class' => 'button tiny radius'))
	  					?>
					</p>
				</div>
			</li>
			<li>
				<div class="thumbnail">
					<a href="#">
						<?php
						echo $this->Html->image('hat1.png');
						?>
					</a>
				</div>
				<div class="panel-description">
					<p><span class="makername">MILLET</span><br><span class="itemname">カラフルHAT</span></p>
					<p class="pbutton">
	  					<?php
	  					echo $this->Html->link('試着する', '/Coordinate/Coordinate', array('class' => 'button tiny radius'))
	  					?>
					</p>
				</div>
			</li>
		</ul>
	</div>
</BODY>