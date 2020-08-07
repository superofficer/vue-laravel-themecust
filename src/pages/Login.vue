<template>
	<div class="login-body">
		<div class="login-type">
			<div class="card login-panel p-fluid">
				<div class="p-grid">
					<div class="p-col-12">
						<img src="assets/layout/images/logo-ultima.svg" alt="ultima"/>
					</div>
					<div class="p-col-12">
						<span class="md-inputfield">
							<InputText style="width: 100%" v-model="username"/>
							<label>Username</label>
						</span>
					</div>
					<div class="p-col-12">
						<span class="md-inputfield">
							<InputText type="password" style="width: 100%" v-model="password"/>
							<label>Password</label>
						</span>
					</div>
					<div class="p-col-12">
						<Button label="Sign In" icon="pi pi-user" @click="goDashboard" />
						<Button label="Forgot Password" icon="pi pi-question-circle" class="pink-btn"/>
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
