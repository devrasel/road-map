<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       namloc254@gmail.com
 * @since      1.0.0
 *
 * @package    Road_map
 * @subpackage Road_map/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div id="<?php echo ROAD_MAP_PREFIX; ?>">
	<transition 
		name="<?php echo ROAD_MAP_PREFIX; ?>_fade" 
		mode="out-in"
		@beforeLeave="beforeLeave"
        @enter="enter"
        @afterEnter="afterEnter"
	>
		<component 
			:is="currentView" 
			v-bind.sync="<?php echo ROAD_MAP_PREFIX; ?>" 
		></component>
	</transition>
</div>
