<template>
	<div class="pages-body login-page p-d-flex p-flex-column">
    <div class="topbar p-p-3 p-d-flex p-jc-between p-flex-row p-ai-center">
        <div class="topbar-left p-ml-3 p-d-flex" routerLink="/">
            <div class="logo">
                <img src="assets/layout/images/logo2x.png" alt=""/>
            </div>
        </div>
        <div class="topbar-right p-mr-3 p-d-flex">
            <Button type="button" label="DASHBOARD" @click="goDashboard"
                    class="p-button-text p-button-plain topbar-button"></Button>
        </div>
    </div>

    <div class="p-as-center p-mt-auto p-mb-auto">
        <div class="pages-panel card p-d-flex p-flex-column">
            <div class="pages-header p-px-3 p-py-1">
                <h2>LOGIN</h2>
            </div>

            <h4>Welcome</h4>

            <div class="pages-detail p-mb-6 p-px-6">Please use the form to sign-in Ultima network</div>

            <div class="input-panel p-d-flex p-flex-column p-px-3">
                <div class="p-inputgroup">
                    <span class="p-inputgroup-addon">
                        <i class="pi pi-envelope"></i>
                    </span>
                    <span class="p-float-label">
                        <InputText type="text" id="email" v-model="email" />
                        <label for="email">Email</label>
                    </span>
                </div>

                <div class="p-inputgroup p-mt-3 p-mb-6">
                    <span class="p-inputgroup-addon">
                        <i class="pi pi-lock"></i>
                    </span>
                    <span class="p-float-label">
                        <InputText type="password" id="password" v-model="password" />
                        <label for="password">Password</label>
                    </span>
                </div>

            </div>

            <Button class="login-button p-mb-6 p-px-3" label="LOGIN" @click="login"></Button>
        </div>
        
    </div>
</div>

</template>

<script>
	export default {
		data() {
			return {
				email: '',
				password: ''
			}
		},
		methods: {
			goDashboard(){
                if ( localStorage.getItem('token') ) {
                    window.location = "/"
                }
				
			},
            login() {
                let data = {
                    email: this.email,
                    password: this.password,
                }
                this.$store.dispatch('login', data)
               .then(() => {
                   if (this.$store.state.status == "success") {
                       this.$router.push('/')
                   }
               })
               .catch(err => console.log(err))
            }
		}
	}
</script>

<style scoped>

</style>
