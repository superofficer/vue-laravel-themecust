import { createStore } from 'vuex'
import axios from 'axios';

export const store = createStore({
	state: {
  	    // status : '',
  		token : localStorage.getItem('token') || '',
  		// user : {}
	},
	mutations: {
		auth_request(state){
	    	state.status = 'loading'
	  	},
	  	auth_success(state, data){
		    state.status = "success"
		    state.token = data.token
		    state.user = data.user
	  	},
	  	auth_error(state){
	    	state.status = 'error'
	  	},
	  	logout(state){
	    	state.status = ''
	    	state.token = ''
	  	},
	},
	actions: {
		login({commit}, user){
			return new Promise((resolve, reject) => {
				commit('auth_request')
				axios({url: 'http://localhost:8000/api/login', data: user, method: 'POST' })
				.then(resp => {
					const token = resp.data.token
					const user = resp.data.data
					const success = resp.data.success
					if (success) {
						localStorage.setItem('token', token)
						axios.defaults.headers.common['Authorization'] = token
						commit('auth_success', { token , user })
					}
					resolve(resp)
				})
				.catch(err => {
					commit('auth_error')
					localStorage.removeItem('token')
					reject(err)
				})
			})
		},
		register({commit}, user){
			return new Promise((resolve, reject) => {
				commit('auth_request')
				axios({url: 'http://localhost:8000/api/register', data: user, method: 'POST' })
				.then(resp => {
					const token = resp.data.token
					const user = resp.data.user
					localStorage.setItem('token', token)
					// Add the following line:
					axios.defaults.headers.common['Authorization'] = token
					commit('auth_success', token, user)
					resolve(resp)
				})
				.catch(err => {
					commit('auth_error', err)
					localStorage.removeItem('token')
					reject(err)
				})
			})
		},
		logout({commit}){
			return new Promise((resolve) => {
				commit('logout')
				localStorage.removeItem('token')
				delete axios.defaults.headers.common['Authorization']
				resolve()
			})
		}
	},
});