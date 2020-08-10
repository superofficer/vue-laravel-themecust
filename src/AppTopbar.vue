<template>
	<div class="topbar clearfix">
		<div class="topbar-left">
			<div class="logo"></div>
		</div>
		<div class="topbar-right">
			<button class="p-link" id="menu-button" @click="onMenuButtonClick">
				<i class="pi pi-angle-left"></i>
			</button>

			<button class="p-link" id="rightpanel-menu-button" @click="onRightPanelButtonClick">
				<i class="pi pi-ellipsis-v"></i>
			</button>

			<button class="p-link" id="topbar-menu-button" @click="onTopbarMenuButtonClick">
				<i class="pi pi-bars"></i>
			</button>
			<ul :class="topbarItemsClass">
				<li v-if="profileMode === 'top' || horizontal"
					:class="['profile-item', {'active-top-menu': activeTopbarItem === 'profile'}]">
					<button class="p-link" @click="onTopbarItemClick($event,'profile')">
						<img class="profile-image" src="assets/layout/images/avatar.png" alt="Profile"/>
						<span class="topbar-item-name">Jane Williams</span>
					</button>

					<transition name="layout-submenu-container">
						<ul class="ultima-menu animated fadeInDown" v-show="activeTopbarItem === 'profile'">
							<li role="menuitem">
								<button class="p-link">
									<i class="pi pi-user"></i>
									<span>Profile</span>
								</button>
							</li>
							<li role="menuitem">
								<button class="p-link">
									<i class="pi pi-lock"></i>
									<span>Privacy</span>
								</button>
							</li>
							<li role="menuitem">
								<button class="p-link">
									<i class="pi pi-cog"></i>
									<span>Settings</span>
								</button>
							</li>
							<li role="menuitem">
								<button class="p-link">
									<i class="pi pi-power-off"></i>
									<span>Logout</span>
								</button>
							</li>
						</ul>
					</transition>
				</li>

				<li :class="[{'active-top-menu': activeTopbarItem === 'settings'}]">
					<button class="p-link" @click="onTopbarItemClick($event,'settings')">
						<i class="topbar-icon pi pi-cog"></i>
						<span class="topbar-item-name">Settings</span>
					</button>

					<transition name="layout-submenu-container">
						<ul class="ultima-menu animated fadeInDown" v-show="activeTopbarItem === 'settings'">
							<li role="menuitem">
								<button class="p-link">
									<i class="pi pi-palette"></i>
									<span>Change Theme</span>
								</button>
							</li>
							<li role="menuitem">
								<button class="p-link">
									<i class="pi pi-heart"></i>
									<span>Favorites</span>
								</button>
							</li>
							<li role="menuitem">
								<button class="p-link">
									<i class="pi pi-lock"></i>
									<span>Lock Screen</span>
								</button>
							</li>
							<li role="menuitem">
								<button class="p-link">
									<i class="pi pi-image"></i>
									<span>Wallpaper</span>
								</button>
							</li>
						</ul>
					</transition>
				</li>

				<li :class="[{'active-top-menu': activeTopbarItem === 'messages'}]">
					<button class="p-link" @click="onTopbarItemClick($event,'messages')">
						<i class="topbar-icon pi pi-envelope animated swing"></i>
						<span class="topbar-badge animated rubberBand">5</span>
						<span class="topbar-item-name">Messages</span>
					</button>

					<transition name="layout-submenu-container">
						<ul class="ultima-menu animated fadeInDown" v-show="activeTopbarItem === 'messages'">
							<li role="menuitem">
								<button class="p-link topbar-message">
									<img src="assets/layout/images/avatar1.png" width="35" alt="avatar1"/>
									<span>Give me a call</span>
								</button>
							</li>
							<li role="menuitem">
								<button class="p-link topbar-message">
									<img src="assets/layout/images/avatar2.png" width="35" alt="avatar2"/>
									<span>Sales reports attached</span>
								</button>
							</li>
							<li role="menuitem">
								<button class="p-link topbar-message">
									<img src="assets/layout/images/avatar3.png" width="35" alt="avatar3"/>
									<span>About your invoice</span>
								</button>
							</li>
							<li role="menuitem">
								<button class="p-link topbar-message">
									<img src="assets/layout/images/avatar2.png" width="35" alt="avatar2"/>
									<span>Meeting today at 10pm</span>
								</button>
							</li>
							<li role="menuitem">
								<button class="p-link topbar-message">
									<img src="assets/layout/images/avatar4.png" width="35" alt="avatar4"/>
									<span>Out of office</span>
								</button>
							</li>
						</ul>
					</transition>
				</li>

				<li :class="[{'active-top-menu': activeTopbarItem === 'notifications'}]">
					<button class="p-link" @click="onTopbarItemClick($event,'notifications')">
						<i class="topbar-icon pi pi-bell"></i>
						<span class="topbar-badge animated rubberBand">4</span>
						<span class="topbar-item-name">Notifications</span>
					</button>

					<transition name="layout-submenu-container">
						<ul class="ultima-menu animated fadeInDown" v-show="activeTopbarItem === 'notifications'">
							<li role="menuitem">
								<button class="p-link">
									<i class="pi pi-sliders-h"></i>
									<span>Pending tasks</span>
								</button>
							</li>
							<li role="menuitem">
								<button class="p-link">
									<i class="pi pi-calendar"></i>
									<span>Meeting today at 3pm</span>
								</button>
							</li>
							<li role="menuitem">
								<button class="p-link">
									<i class="pi pi-download"></i>
									<span>Download documents</span>
								</button>
							</li>
							<li role="menuitem">
								<button class="p-link">
									<i class="pi pi-ticket"></i>
									<span>Book flight</span>
								</button>
							</li>
						</ul>
					</transition>
				</li>

				<li :class="['search-item', {'active-top-menu': activeTopbarItem === 'search'}]"
					@click="onTopbarItemClick($event,'search')">
					<span class="p-float-label p-input-icon-left">
						<i class="topbar-icon pi pi-search"></i>
						<InputText id="search" type="text" v-model="searchText" placeholder="Search"/>
					</span>
				</li>
			</ul>
		</div>
	</div>
</template>

<script>
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
				this.$emit('topbaritem-click', {originalEvent: event, item: item})
			},
			onRightPanelButtonClick(event) {
				this.$emit('rightpanel-button-click', event)
			},
			goDashboard() {
				window.location = "/#/"
			}
		},
		computed: {
			topbarItemsClass() {
				return ['topbar-items animated fadeInDown', {
					'topbar-items-visible': this.topbarMenuActive
				}];
			}
		}
	}
</script>
