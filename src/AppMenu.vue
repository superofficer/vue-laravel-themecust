<template>
	<AppSubmenu class="ultima-menu ultima-main-menu clearfix" :items="model" :layoutMode="layoutMode" :menuActive="active" :root="true" :parentMenuItemActive="true"/>
</template>

<script>
import AppSubmenu from './AppSubmenu';

export default {
	props: {
		model: Array,
		layoutMode: String,
		active: Boolean
	},
	components: {
		'AppSubmenu': AppSubmenu
	}
}
</script>

<style scoped>

</style>