<template>
	<div class="layout-breadcrumb">
		<ul>
			<li><button class="p-link" @click="home"><i class="material-icons">home</i></button></li>
			<li>{{$route.path}}</li>
		</ul>

		<div class="layout-breadcrumb-options">
			<button class="p-link" title="Backup">
				<i class="material-icons">backup</i>
			</button>
			<button class="p-link" title="Bookmark">
				<i class="material-icons">bookmark</i>
			</button>
			<button class="p-link" title="Logout">
				<i class="material-icons">power_settings_new</i>
			</button>
		</div>
	</div>
</template>

<script>
	export default {
		methods: {
			home() {
				window.location = "/#/"
			}
		}
	}
</script>

<style scoped>

</style>