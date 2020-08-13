<template>
	<div class="login-body">
		<div class="login-type">
			<div class="card login-panel p-fluid">
				<div class="p-grid">
					<div class="p-col-12">
						<img src="assets/layout/images/logo-ultima.svg" alt="ultima"/>
					</div>
					<div class="p-col-12">
						<span class="p-float-label">
							<InputText id="username" type="text" v-model="username"/>
							<label for="username">Username</label>
						</span>
					</div>
					<div class="p-col-12">
						<span class="p-float-label">
							<InputText id="password" type="text" v-model="password"/>
							<label for="password">Password</label>
						</span>
					</div>
					<div class="p-col-12">
						<Button label="Sign In" icon="pi pi-user" @click="goDashboard" />
						<Button label="Forgot Password" icon="pi pi-question-circle" class="p-button-secondary"/>
					</div>
				</div>
			</div>
		</div>
		<div class="login-footer">PrimeVue Ultima</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				username: '',
				password: ''
			}
		},
		methods: {
			goDashboard(){
				window.location = "/#/"
			}
		}
	}
</script>

<style scoped>

</style>
