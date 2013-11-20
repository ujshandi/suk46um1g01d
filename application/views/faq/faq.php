					<h1 class="titlebig">FAQ</h1>
					<div class="boxbigcontent">
					
					<!-- AddThis Button BEGIN -->
					<div class="addthis_toolbox addthis_default_style ">
					<a class="addthis_button_preferred_1"></a>
					<a class="addthis_button_preferred_2"></a>
					<a class="addthis_button_preferred_3"></a>
					<a class="addthis_button_preferred_4"></a>
					<a class="addthis_button_compact"></a>
					<a class="addthis_counter addthis_bubble_style"></a>
					</div>
					<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
					<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4ddf457554a5a461"></script>
					<!-- AddThis Button END -->
					
                    <?php $i= 1+$offset ?>
                    
					<?php foreach($fields as $row): ?>
						<h2 class="subtitle"><?= $i++ ?>.&nbsp;&nbsp;&nbsp;<?= $row->pertanyaan; ?></h2>

						<div>

						<p><?= $row->jawab; ?></p>

						</div>
					
					<?php endforeach; ?>	

					</div>

					<div class="boxbigcontentbottom"></div>
