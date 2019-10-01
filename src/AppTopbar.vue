<template>
	<div class="topbar clearfix">
		<div class="topbar-left">
			<div class="logo"></div>
		</div>
		<div class="topbar-right">
			<button class="p-link" id="menu-button" @click="onMenuButtonClick">
				<i></i>
			</button>

			<button class="p-link" id="rightpanel-menu-button" @click="onRightPanelButtonClick">
				<i class="material-icons">more_vert</i>
			</button>

			<button class="p-link" id="topbar-menu-button" @click="onTopbarMenuButtonClick">
				<i class="material-icons">menu</i>
			</button>
			<ul :class="topbarItemsClass">
				<li v-if="profileMode === 'top' && horizontal" :class="['profile-item', {'active-top-menu': activeTopbarItem === 'profile'}]">
					<button class="p-link" @click="onTopbarItemClick($event,'profile')">
						<img class="profile-image" src="assets/layout/images/avatar.png" alt="Profile"/>
						<span class="topbar-item-name">Jane Williams</span>
					</button>

					<ul class="ultima-menu animated fadeInDown">
						<li role="menuitem">
							<button class="p-link" >
								<i class="material-icons">person</i>
								<span>Profile</span>
							</button>
						</li>
						<li role="menuitem">
							<button class="p-link" >
								<i class="material-icons">security</i>
								<span>Privacy</span>
							</button>
						</li>
						<li role="menuitem">
							<button class="p-link" >
								<i class="material-icons">settings_applications</i>
								<span>Settings</span>
							</button>
						</li>
						<li role="menuitem">
							<button class="p-link" >
								<i class="material-icons">power_settings_new</i>
								<span>Logout</span>
							</button>
						</li>
					</ul>
				</li>

				<li :class="[{'active-top-menu': activeTopbarItem === 'settings'}]">
					<button class="p-link" @click="onTopbarItemClick($event,'settings')">
						<i class="topbar-icon material-icons">settings</i>
						<span class="topbar-item-name">Settings</span>
					</button>

					<ul class="ultima-menu animated fadeInDown">
						<li role="menuitem">
							<button class="p-link" >
								<i class="material-icons">palette</i>
								<span>Change Theme</span>
							</button>
						</li>
						<li role="menuitem">
							<button class="p-link" >
								<i class="material-icons">favorite_border</i>
								<span>Favorites</span>
							</button>
						</li>
						<li role="menuitem">
							<button class="p-link" >
								<i class="material-icons">lock</i>
								<span>Lock Screen</span>
							</button>
						</li>
						<li role="menuitem">
							<button class="p-link" >
								<i class="material-icons">wallpaper</i>
								<span>Wallpaper</span>
							</button>
						</li>
					</ul>
				</li>

				<li :class="[{'active-top-menu': activeTopbarItem === 'messages'}]">
					<button class="p-link" @click="onTopbarItemClick($event,'messages')">
						<i class="topbar-icon material-icons animated swing">message</i>
						<span class="topbar-badge animated rubberBand">5</span>
						<span class="topbar-item-name">Messages</span>
					</button>

					<ul class="ultima-menu animated fadeInDown">
						<li role="menuitem">
							<button  class="p-link topbar-message">
								<img src="assets/layout/images/avatar1.png" width="35" alt="avatar1" />
								<span>Give me a call</span>
							</button>
						</li>
						<li role="menuitem">
							<button  class="p-link topbar-message">
								<img src="assets/layout/images/avatar2.png" width="35" alt="avatar2"/>
								<span>Sales reports attached</span>
							</button>
						</li>
						<li role="menuitem">
							<button  class="p-link topbar-message">
								<img src="assets/layout/images/avatar3.png" width="35" alt="avatar3"/>
								<span>About your invoice</span>
							</button>
						</li>
						<li role="menuitem">
							<button  class="p-link topbar-message">
								<img src="assets/layout/images/avatar2.png" width="35" alt="avatar2"/>
								<span>Meeting today at 10pm</span>
							</button>
						</li>
						<li role="menuitem">
							<button  class="p-link topbar-message">
								<img src="assets/layout/images/avatar4.png" width="35" alt="avatar4"/>
								<span>Out of office</span>
							</button>
						</li>
					</ul>
				</li>

				<li :class="[{'active-top-menu': activeTopbarItem === 'notifications'}]">
					<button class="p-link" @click="onTopbarItemClick($event,'notifications')">
						<i class="topbar-icon material-icons">timer</i>
						<span class="topbar-badge animated rubberBand">4</span>
						<span class="topbar-item-name">Notifications</span>
					</button>

					<ul class="ultima-menu animated fadeInDown">
						<li role="menuitem">
							<button class="p-link" >
								<i class="material-icons">bug_report</i>
								<span>Pending tasks</span>
							</button>
						</li>
						<li role="menuitem">
							<button class="p-link" >
								<i class="material-icons">event</i>
								<span>Meeting today at 3pm</span>
							</button>
						</li>
						<li role="menuitem">
							<button class="p-link" >
								<i class="material-icons">file_download</i>
								<span>Download documents</span>
							</button>
						</li>
						<li role="menuitem">
							<button class="p-link" >
								<i class="material-icons">flight</i>
								<span>Book flight</span>
							</button>
						</li>
					</ul>
				</li>

				<li :class="['search-item', {'active-top-menu': activeTopbarItem === 'search'}]" @click="onTopbarItemClick($event,'search')">
					<span class="md-inputfield">
						<InputText type="text" v-model="searchText"/>
						<label>Search</label>
						<i class="topbar-icon material-icons">search</i>
					</span>
				</li>
			</ul>
		</div>
	</div>
</template>

<script>
import AppMenu from './AppMenu.vue';

export default {
	data() {
		return {
			searchText: ''
		}
	},
	props: {
		profileMode: String,
		horizontal: {
			type: Boolean,
			default: false
		},
		topbarMenuActive: {
			type: Boolean,
			default: false
		},
		activeTopbarItem: String,
	},
    methods: {
        onMenuButtonClick(event) {
            this.$emit('menubutton-click', event);
        },
		onTopbarMenuButtonClick(event) {
			this.$emit('topbar-menubutton-click', event)
		},
		onTopbarItemClick(event, item) {
			this.$emit('topbaritem-click', {originalEvent:event, item:item})
		},
		onRightPanelButtonClick(event) {
			this.$emit('rightpanel-button-click', event)
		},
		goDashboard(){
			window.location = "/#/"
		}
    },
	computed: {
		topbarItemsClass() {
			return ['topbar-items animated fadeInDown', {
				'topbar-items-visible': this.topbarMenuActive
			}];
		}
	},
	components: {
		'AppMenu': AppMenu,
	}
}
</script>