<template>
	<div class="p-grid p-fluid">
		<div class="p-col-12">
			<div class="card card-w-title">
				<div class="card-title">Menu</div>
				<Menu :model="menuItems"></Menu>
                
				<Menu ref="menu" :model="menuItems" :popup="true"></Menu>
				<Button type="button" label="Overlay" @click="toggle" style="margin-top: 20px; width: auto"/>
			</div>
		</div>
		
	</div>
</template>

<script>
export default {
	data() {
		return {
			menuItems: [
				{
					label: 'File',
					items: [
						{label: 'New', icon: 'pi-md-plus'},
						{label: 'Open', icon: 'pi-md-open-in-browser'}
					]
				},
				{
					label: 'Edit',
					items: [
						{label: 'Undo', icon: 'pi-md-undo'},
						{label: 'Redo', icon: 'pi-md-redo'}
					]
				}
			]
		}
	},
	methods: {
		toggle(event) {
			this.$refs.menu.toggle(event);
		}
	}
}
</script>

<style scoped>

</style>