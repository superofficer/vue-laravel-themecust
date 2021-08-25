<template>
	<div class="p-grid">
		<div class="p-col-12">
			<div class="card">
				<h5>Empty Page</h5>
				<p>This is your empty page template to start building beautiful applications.</p>
			</div>
		</div>
	</div>
</template>

<script>
export default {
	mounted() {
		if ( !localStorage.getItem('token') ) {
			this.$router.push('/login');
		}
	}
}
</script>

<style scoped>

</style>
