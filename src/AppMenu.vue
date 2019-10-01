<template>
	<AppSubmenu class="ultima-menu ultima-main-menu clearfix" :items="model" :layoutMode="layoutMode" :menuActive="active" :root="true" :parentMenuItemActive="true"
				@root-menuitem-click="onRootMenuItemClick" @menuitem-click="onMenuItemClick"/>
</template>

<script>
import AppSubmenu from './AppSubmenu';

export default {
	props: {
		model: Array,
		layoutMode: String,
		active: Boolean
	},
    methods: {
        onMenuItemClick(event) {
            this.$emit('menuitem-click', event);
        },
		onRootMenuItemClick(event) {
			this.$emit('root-menuitem-click', event);
		}
    },
	components: {
		'AppSubmenu': AppSubmenu
	}
}
</script>

<style scoped>

</style>