<template>
	<AppSubmenu class="layout-menu" :items="model" :menuMode="menuMode" :menuActive="active" :root="true" :parentMenuItemActive="true"/>
</template>

<script>
import AppSubmenu from './AppSubmenu';

export default {
	props: {
		model: Array,
		menuMode: String,
		active: Boolean
	},
	components: {
		'AppSubmenu': AppSubmenu
	}
}
</script>

<style scoped>

</style>