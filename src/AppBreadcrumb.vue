<template>
	<div class="layout-breadcrumb-container p-d-flex p-jc-between p-ai-center p-shadow-1">
		<Breadcrumb :home="home" :model="items" class="layout-breadcrumb p-pl-4 p-py-2"></Breadcrumb>

		<div class="layout-breadcrumb-buttons p-d-flex p-ai-center p-pr-3">
			<Button icon="pi pi-cloud-upload" class="p-button-rounded p-button-text p-button-plain p-mr-1"></Button>
			<Button icon="pi pi-bookmark" class="p-button-rounded p-button-text p-button-plain p-mr-1"></Button>
			<Button icon="pi pi-power-off" class="p-button-rounded p-button-text p-button-plain p-mr-1"></Button>
		</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				home: {icon: 'pi pi-home', to: '/'},
				items: []
			}
		},
		watch: {
			$route() {
				if(this.$router.currentRoute._value.meta.breadcrumb) {
					this.items = [];
					const x = this.$router.currentRoute._value.meta.breadcrumb[0];
					for(let pro in x) {
						this.items.push({label: x[pro]})
					}
				}
			}
		}
	}
</script>

<style scoped>

</style>
