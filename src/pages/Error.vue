<template>
	<div class="exception-body  error-page">
		<div class="exception-type">
			<img src="assets/layout/images/error.svg" alt="ultima"/>
		</div>

		<div class="card exception-panel">
			<i class="material-icons">&#xE000;</i>
			<h1>Exception Occured</h1>
			<div class="exception-detail">Please contact system administrator</div>
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