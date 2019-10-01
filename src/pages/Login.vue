<template>
	<div class="login-body">
		<div class="login-panel ui-fluid">
			<div class="login-panel-header">
				<img src="assets/layout/images/login/logo-sapphire-color.png" alt="sapphire"/>
			</div>
			<div class="login-panel-content">
				<div class="p-grid">
					<div class="p-col-12">
						<h1>SAPPHIRE NETWORK</h1>
						<h2>Welcome, please use the form to sign-in</h2>
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
					<div class="p-col-6">
						<button class="p-link">Forget Password?</button>
					</div>
					<div class="p-col-6" style="text-align: right">
					<Button label="NEXT" @click="goDashboard" style="width:100%"/>
				</div>
			</div>
		</div>
	</div>
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