<template>
	<div class="exception-body accessdenied-page">
		<div class="exception-type">
			<img src="assets/layout/images/401.svg" alt="ultima"/>
		</div>

		<div class="card exception-panel">
			<i class="pi pi-lock"></i>
			<h1>Access Denied</h1>
			<div class="exception-detail">You are not authorized to access this resource.</div>
			<Button label="Homepage" @click="goDashboard" />
		</div>
	</div>
</template>

<script>
	export default {
		methods: {
			goDashboard(){
				window.location = "/#/"
			}
		}
	}
</script>

<style scoped>

</style>
