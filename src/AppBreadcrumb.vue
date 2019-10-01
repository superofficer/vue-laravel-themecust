<template>
	<div class="layout-breadcrumb">
		<ul>
			<li><button class="p-link" @click="home"><i class="material-icons">home</i></button></li>
			<li><i class="material-icons">chevron_right</i></li>
			<li>{{$route.path.split('/')[1]}}</li>
		</ul>
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