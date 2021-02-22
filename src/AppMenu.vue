<template>
	<AppSubmenu class="layout-menu" :items="model" :menuMode="menuMode" :menuActive="active" :root="true" :parentMenuItemActive="true" :mobileMenuActive="mobileMenuActive"/>
</template>

<script>
import AppSubmenu from './AppSubmenu';

export default {
	props: {
		model: Array,
		menuMode: String,
		active: Boolean,
		mobileMenuActive: Boolean
	},
	components: {
		'AppSubmenu': AppSubmenu
	}
}
</script>

<style scoped>

</style>