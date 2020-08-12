<template>
	<div>
		<div :class="['profile', {'profile-expanded': expanded}]">
			<button class="p-link" @click="onClick">
				<img class="profile-image" src="assets/layout/images/avatar.png" alt="Profile"/>
				<span class="profile-name">Jane Williams</span>
				<i class="pi pi-angle-down"></i>
			</button>
		</div>

		<ul class="ultima-menu profile-menu">
			<li role="menuitem">
				<button class="p-link" :tabIndex="expanded ? null : '-1'">
					<i class="pi pi-user"></i>
					<span>Profile</span>
				</button>
			</li>
			<li role="menuitem">
				<button class="p-link" :tabIndex="expanded ? null : '-1'">
					<i class="pi pi-lock"></i>
					<span>Privacy</span>
				</button>
			</li>
			<li role="menuitem">
				<button class="p-link" :tabIndex="expanded ? null : '-1'">
					<i class="pi pi-cog"></i>
					<span>Settings</span>
				</button>
			</li>
			<li role="menuitem">
				<button class="p-link" :tabIndex="expanded ? null : '-1'">
					<i class="pi pi-power-off"></i>
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
