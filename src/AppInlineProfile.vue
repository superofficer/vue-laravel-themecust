<template>
	<div>
		<div :class="['profile', {'profile-expanded': expanded}]">
			<button class="p-link" @click="onClick">
				<img class="profile-image" src="assets/layout/images/avatar.png" alt="Profile"/>
				<span class="profile-name">Jane Williams</span>
				<i class="material-icons">keyboard_arrow_down</i>
			</button>
		</div>

		<ul class="ultima-menu profile-menu">
			<li role="menuitem">
				<button class="p-link ripplelink" :tabIndex="expanded ? null : '-1'">
					<i class="material-icons">person</i>
					<span>Profile</span>
				</button>
			</li>
			<li role="menuitem">
				<button class="p-link ripplelink" :tabIndex="expanded ? null : '-1'">
					<i class="material-icons">security</i>
					<span>Privacy</span>
				</button>
			</li>
			<li role="menuitem">
				<button class="p-link ripplelink" :tabIndex="expanded ? null : '-1'">
					<i class="material-icons">settings_application</i>
					<span>Settings</span>
				</button>
			</li>
			<li role="menuitem">
				<button class="p-link ripplelink" :tabIndex="expanded ? null : '-1'">
					<i class="material-icons">power_settings_new</i>
					<span>Logout</span>
				</button>
			</li>
		</ul>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				expanded: false
			}
		},
		methods: {
			onClick(event) {
				this.expanded = !this.expanded;
				event.preventDefault();
			}
		},
		name: "AppInlineProfile"
	}
</script>

<style scoped>

</style>