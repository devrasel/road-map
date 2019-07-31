<div id="<?php echo ROAD_MAP_PREFIX; ?>-questions">
	<div class="<?php echo ROAD_MAP_PREFIX; ?>-questions-header">
		<!-- <div class="<?php echo ROAD_MAP_PREFIX; ?>-progress">
			<span class="progress-left">
				<span class="progress-bar"></span>
			</span>
			<span class="progress-right">
				<span class="progress-bar"></span>
			</span>
			<div class="progress-value">67%</div>
		</div> -->

		<radial-progress-bar
			:completed-steps="completedSteps"
			:total-steps="totalSteps"
			:strokeWidth="10" 
			:diameter="125" 
			:startColor="'#00a84e'" 
			:stopColor="'#00a84e'" 
			:innerStrokeColor="'#dbd6d6'"
		>
			<strong>{{ Math.round( completedSteps / totalSteps * 100 )  }}%</strong>
		</radial-progress-bar>
		<span class="<?php echo ROAD_MAP_PREFIX; ?>-line-bar"></span>

	</div>
	<div class="<?php echo ROAD_MAP_PREFIX; ?>-questions-body">
		
		<!-- START : Question -->
		<div class="<?php echo ROAD_MAP_PREFIX; ?>-question" data-id="1">
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<label>
					<input type="checkbox" v-on:change="markComplete($event)" />
					<span></span>
				</label>
			</div>
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item-title"><a href="#" class="<?php echo ROAD_MAP_PREFIX; ?>-toggle-question-details" v-on:click="expandQuestionDetails( $event )"></a>
				<h3>GETTING STARTED</h3></div>
				<p>
					<!-- START : Question details -->
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.

					<br/><br/>

					<strong>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</strong>
					<!-- END : Question details -->

					<br/><br/>

					<iframe width="560" height="315" src="https://www.youtube.com/embed/Jq-QOxaZEcI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
		</div>
		<!-- END : Question -->

		<!-- START : Question -->
		<div class="<?php echo ROAD_MAP_PREFIX; ?>-question" data-id="2">
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<label>
					<input type="checkbox" v-on:change="markComplete($event)" />
					<span></span>
				</label>
			</div>
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item-title"><a href="#" class="<?php echo ROAD_MAP_PREFIX; ?>-toggle-question-details" v-on:click="expandQuestionDetails( $event )"></a>
				<h3>JOIN THE FACEBOOK COMMUNITY</h3></div>
				<p>
					<!-- START : Question details -->
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.

					<br/><br/>

					<strong>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</strong>
					<!-- END : Question details -->

					<br/><br/>

					<iframe width="560" height="315" src="https://www.youtube.com/embed/Jq-QOxaZEcI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
		</div>
		<!-- END : Question -->

		<!-- START : Question -->
		<div class="<?php echo ROAD_MAP_PREFIX; ?>-question" data-id="3">
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<label>
					<input type="checkbox" v-on:change="markComplete($event)" />
					<span></span>
				</label>
			</div>
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item-title"><a href="#" class="<?php echo ROAD_MAP_PREFIX; ?>-toggle-question-details" v-on:click="expandQuestionDetails( $event )"></a>
				<h3>SETUP YOUR ACCOUNT</h3></div>
				<p>
					<!-- START : Question details -->
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.

					<br/><br/>

					<strong>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</strong>
					<!-- END : Question details -->

					<br/><br/>

					<iframe width="560" height="315" src="https://www.youtube.com/embed/Jq-QOxaZEcI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
		</div>
		<!-- END : Question -->

		<!-- START : Question -->
		<div class="<?php echo ROAD_MAP_PREFIX; ?>-question" data-id="4">
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<label>
					<input type="checkbox" v-on:change="markComplete($event)" />
					<span></span>
				</label>
			</div>
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item-title"><a href="#" class="<?php echo ROAD_MAP_PREFIX; ?>-toggle-question-details" v-on:click="expandQuestionDetails( $event )"></a>
				<h3>ACTION ITEMS</h3></div>
				<p>
					<!-- START : Question details -->
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.

					<br/><br/>

					<strong>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</strong>
					<!-- END : Question details -->

					<br/><br/>

					<iframe width="560" height="315" src="https://www.youtube.com/embed/Jq-QOxaZEcI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
		</div>
		<!-- END : Question -->

		<!-- START : Question -->
		<div class="<?php echo ROAD_MAP_PREFIX; ?>-question" data-id="5">
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<label>
					<input type="checkbox" v-on:change="markComplete($event)" />
					<span></span>
				</label>
			</div>
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item-title"><a href="#" class="<?php echo ROAD_MAP_PREFIX; ?>-toggle-question-details" v-on:click="expandQuestionDetails( $event )"></a>
				<h3>ACCESS IGNITION</h3></div>
				<p>
					<!-- START : Question details -->
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.

					<br/><br/>

					<strong>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</strong>
					<!-- END : Question details -->

					<br/><br/>

					<iframe width="560" height="315" src="https://www.youtube.com/embed/Jq-QOxaZEcI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
		</div>
		<!-- END : Question -->

		<!-- START : Question -->
		<div class="<?php echo ROAD_MAP_PREFIX; ?>-question" data-id="6">
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<label>
					<input type="checkbox" v-on:change="markComplete($event)" />
					<span></span>
				</label>
			</div>
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item-title"><a href="#" class="<?php echo ROAD_MAP_PREFIX; ?>-toggle-question-details" v-on:click="expandQuestionDetails( $event )"></a>
				<h3>HOW TO GET HELP & SUPPORT</h3></div>
				<p>
					<!-- START : Question details -->
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.

					<br/><br/>

					<strong>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</strong>
					<!-- END : Question details -->

					<br/><br/>

					<iframe width="560" height="315" src="https://www.youtube.com/embed/Jq-QOxaZEcI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
		</div>
		<!-- END : Question -->

		<!-- START : Question -->
		<div class="<?php echo ROAD_MAP_PREFIX; ?>-question" data-id="7">
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<label>
					<input type="checkbox" v-on:change="markComplete($event)" />
					<span></span>
				</label>
			</div>
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item-title"><a href="#" class="<?php echo ROAD_MAP_PREFIX; ?>-toggle-question-details" v-on:click="expandQuestionDetails( $event )"></a>
				<h3>ACCESS YOUR PRODUCTS</h3></div>
				<p>
					<!-- START : Question details -->
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.

					<br/><br/>

					<strong>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</strong>
					<!-- END : Question details -->

					<br/><br/>

					<iframe width="560" height="315" src="https://www.youtube.com/embed/Jq-QOxaZEcI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
		</div>
		<!-- END : Question -->

		<!-- START : Question -->
		<div class="<?php echo ROAD_MAP_PREFIX; ?>-question" data-id="8">
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<label>
					<input type="checkbox" v-on:change="markComplete($event)" />
					<span></span>
				</label>
			</div>
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item-title"><a href="#" class="<?php echo ROAD_MAP_PREFIX; ?>-toggle-question-details" v-on:click="expandQuestionDetails( $event )"></a>
				<h3>READ ATTRACTION MARKETING FORMULA</h3></div>
				<p>
					<!-- START : Question details -->
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.

					<br/><br/>

					<strong>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</strong>
					<!-- END : Question details -->

					<br/><br/>

					<iframe width="560" height="315" src="https://www.youtube.com/embed/Jq-QOxaZEcI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
		</div>
		<!-- END : Question -->

		<!-- START : Question -->
		<div class="<?php echo ROAD_MAP_PREFIX; ?>-question" data-id="9">
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<label>
					<input type="checkbox" v-on:change="markComplete($event)" />
					<span></span>
				</label>
			</div>
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item-title"><a href="#" class="<?php echo ROAD_MAP_PREFIX; ?>-toggle-question-details" v-on:click="expandQuestionDetails( $event )"></a>
				<h3>HOW ELITE MARKETING PRO & ATTRACTION MARKETING HELP YOU ENROLL MORE & HIGHER QUALITY TEAM MEMBERS INTO YOUR NETWORK MARKETING BUSINESS</h3></div>
				<p>
					<!-- START : Question details -->
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.

					<br/><br/>

					<strong>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</strong>
					<!-- END : Question details -->

					<br/><br/>

					<iframe width="560" height="315" src="https://www.youtube.com/embed/Jq-QOxaZEcI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
		</div>
		<!-- END : Question -->

		<!-- START : Question -->
		<div class="<?php echo ROAD_MAP_PREFIX; ?>-question" data-id="10">
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<label>
					<input type="checkbox" v-on:change="markComplete($event)" />
					<span></span>
				</label>
			</div>
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item-title"><a href="#" class="<?php echo ROAD_MAP_PREFIX; ?>-toggle-question-details" v-on:click="expandQuestionDetails( $event )"></a>
				<h3>THE ELITE MARKETING PRO AFFILIATE COMPENSATION PLAN</h3></div>
				<p>
					<!-- START : Question details -->
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.

					<br/><br/>

					<strong>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</strong>
					<!-- END : Question details -->

					<br/><br/>

					<iframe width="560" height="315" src="https://www.youtube.com/embed/Jq-QOxaZEcI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
		</div>
		<!-- END : Question -->

		<!-- START : Question -->
		<div class="<?php echo ROAD_MAP_PREFIX; ?>-question" data-id="11">
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<label>
					<input type="checkbox" v-on:change="markComplete($event)" />
					<span></span>
				</label>
			</div>
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item-title"><a href="#" class="<?php echo ROAD_MAP_PREFIX; ?>-toggle-question-details" v-on:click="expandQuestionDetails( $event )"></a>
				<h3>ELITE MARKETING PRO PAGES</h3></div>
				<p>
					<!-- START : Question details -->
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.

					<br/><br/>

					<strong>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</strong>
					<!-- END : Question details -->

					<br/><br/>

					<iframe width="560" height="315" src="https://www.youtube.com/embed/Jq-QOxaZEcI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
		</div>
		<!-- END : Question -->

		<!-- START : Question -->
		<div class="<?php echo ROAD_MAP_PREFIX; ?>-question" data-id="12">
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<label>
					<input type="checkbox" v-on:change="markComplete($event)" />
					<span></span>
				</label>
			</div>
			<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item">
				<div class="<?php echo ROAD_MAP_PREFIX; ?>-question-item-title"><a href="#" class="<?php echo ROAD_MAP_PREFIX; ?>-toggle-question-details" v-on:click="expandQuestionDetails( $event )"></a>
				<h3>WHAT'S NEXT</h3></div>
				<p>
					<!-- START : Question details -->
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.

					<br/><br/>

					<strong>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</strong>
					<!-- END : Question details -->

					<br/><br/>

					<iframe width="560" height="315" src="https://www.youtube.com/embed/Jq-QOxaZEcI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</p>
			</div>
		</div>
		<!-- END : Question -->

	</div>
	<div class="<?php echo ROAD_MAP_PREFIX; ?>-questions-footer">
		<a href="#" class="<?php echo ROAD_MAP_PREFIX; ?>-btn" v-on:click="markCompleteAll($event)"><?php echo __( 'MARK ALL AS COMPLETE', 'road_map' ); ?></a>
		<a href="#" class="<?php echo ROAD_MAP_PREFIX; ?>-btn" v-on:click="reset($event)"><?php echo __( 'RESET PROGRESS', 'road_map' ); ?></a>
	</div>
</div>