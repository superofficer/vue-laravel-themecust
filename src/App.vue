<template>
	<div class="layout-wrapper" @click="onDocumentClick">
		<div :class="layoutContainerClass">
			<AppTopBar :profileMode="profileMode" :horizontal="layoutMode==='horizontal'" :topbarMenuActive="topbarMenuActive" :activeTopbarItem="activeTopbarItem"
			@menubutton-click="onMenuButtonClick" @topbar-menubutton-click="onTopbarMenuButtonClick" @topbaritem-click="onTopbarItemClick" @rightpanel-button-click="onRightPanelButtonClick"></AppTopBar>

			<transition name="layout-menu-container">
				<div :class="menuClass" @click="onMenuClick">
					<div class="menu-scroll-content">
						<AppInlineProfile v-if="profileMode === 'inline' && layoutMode !== 'horizontal'"></AppInlineProfile>
						<AppMenu :model="menu" :layoutMode="layoutMode" :active="menuActive" @menuitem-click="onMenuItemClick" @root-menuitem-click="onRootMenuItemClick"></AppMenu>
					</div>
				</div>
			</transition>

			<div class="layout-main">

				<AppBreadcrumb></AppBreadcrumb>

				<div class="layout-content">
					<router-view />
				</div>

				<AppFooter />
			</div>

			<AppConfig :layoutMode.sync="layoutMode" @menu-mode-change="onMenuModeChange" :darkMenu.sync="darkMenu" @menu-color-change="onMenuColorChange"
						:profileMode.sync="profileMode" @profile-mode-change="onProfileModeChange" :theme="theme" :themes="themeColors" @theme-change="changeTheme"></AppConfig>

			<AppRightPanel :expanded="rightPanelActive" @content-click="onRightPanelClick"></AppRightPanel>

			<div class="layout-mask"></div>
		</div>
	</div>
</template>

<script>
import AppTopBar from './AppTopbar.vue';
import AppInlineProfile from './AppInlineProfile.vue';
import AppRightPanel from './AppRightPanel.vue';
import AppMenu from './AppMenu.vue';
import AppConfig from './AppConfig.vue';
import AppFooter from './AppFooter.vue';
import AppBreadcrumb from './AppBreadcrumb.vue';
import EventBus from './event-bus';

export default {
    data() {
        return {
			layoutMode:'static',
			profileMode: 'inline',
			overlayMenuActive: false,
			staticMenuDesktopInactive: false,
			staticMenuMobileActive: false,
			rotateMenuButton: false,
			topbarMenuActive: false,
			activeTopbarItem: null,
			darkMenu: false,
			theme: 'dark-green',
			themeColors: [
				{ name: 'Indigo Pink', file: 'indigo', image: 'indigo-pink.svg' },
				{ name: 'Brown Green', file: 'brown', image: 'brown-green.svg' },
				{ name: 'Blue Amber', file: 'blue', image: 'blue-amber.svg' },
				{ name: 'BlueGrey Green', file: 'blue-grey', image: 'bluegrey-green.svg' },
				{ name: 'Dark Blue', file: 'dark-blue', image: 'dark-blue.svg' },
				{ name: 'Dark Green', file: 'dark-green', image: 'dark-green.svg' },
				{ name: 'Green Yellow', file: 'green', image: 'green-yellow.svg' },
				{ name: 'Purple Cyan', file: 'purple-cyan', image: 'purple-cyan.svg' },
				{ name: 'Purple Amber', file: 'purple-amber', image: 'purple-amber.svg' },
				{ name: 'Teal Lime', file: 'teal', image: 'teal-lime.svg' },
				{ name: 'Cyan Amber', file: 'cyan', image: 'cyan-amber.svg' },
				{ name: 'Grey DeepOrange', file: 'grey', image: 'grey-deeporange.svg' }
			],
			rightPanelActive: false,
			menuActive: false,
            menu : [
				{label: 'Dashboard', icon: 'pi pi-fw pi-home', to:'/'},
				{
					label: 'UI Kit', icon: 'pi pi-fw pi-sitemap',
					items: [
						{label: 'Form Layout', icon: 'pi pi-fw pi-id-card', to: '/formlayout'},
						{label: 'Input', icon: 'pi pi-fw pi-check-square', to: '/input'},
						{label: 'Button', icon: 'pi pi-fw pi-mobile', to: '/button'},
						{label: 'Table', icon: 'pi pi-fw pi-table', to: '/table'},
						{label: 'List', icon: 'pi pi-fw pi-list', to: '/list'},
						{label: 'Tree', icon: 'pi pi-fw pi-share-alt', to: '/tree'},
						{label: 'Panel', icon: 'pi pi-fw pi-tablet', to: '/panel'},
						{label: 'Overlay', icon: 'pi pi-fw pi-clone', to: '/overlay'},
						{label: 'Menu', icon: 'pi pi-fw pi-bars', to: '/menus'},
						{label: 'Message', icon: 'pi pi-fw pi-comment', to: '/messages'},
						{label: 'File', icon: 'pi pi-fw pi-file', to: '/file'},
						{label: 'Chart', icon: 'pi pi-fw pi-chart-bar', to: '/chart'},
						{label: 'Misc', icon: 'pi pi-fw pi-circle-off', to: '/misc'},
					]
				},
				{
					label: "Utilities", icon:'pi pi-fw pi-globe',
					items: [
						{label: 'Display', icon:'pi pi-fw pi-desktop', to:'/display'},
						{label: 'Elevation', icon:'pi pi-fw pi-external-link', to:'/elevation'},
						{label: 'Flexbox', icon:'pi pi-fw pi-directions', to:'/flexbox'},
						{label: 'Icons', icon:'pi pi-fw pi-search', to:'/icons'},
						{label: 'Widgets', icon:'pi pi-fw pi-star-o', to:'/widgets'},
						{label: 'Grid System', icon:'pi pi-fw pi-th-large', to:'/grid'},
						{label: 'Spacing', icon:'pi pi-fw pi-arrow-right', to:'/spacing'},
						{label: 'Typography', icon:'pi pi-fw pi-align-center', to:'/typography'},
						{label: 'Text', icon:'pi pi-fw pi-pencil', to:'/text'},
					]
				},
				{
					label: 'Pages', icon: 'pi pi-fw pi-clone',
					items: [
						{label: 'Crud', icon: 'pi pi-fw pi-pencil', to: '/crud'},
						{label: 'Calendar', icon: 'pi pi-fw pi-calendar-plus', to: '/calendar'},
						{label: 'Landing', icon: 'pi pi-fw pi-user-plus', url: 'assets/pages/landing.html', target: '_blank'},
						{label: 'Login', icon: 'pi pi-fw pi-sign-in', to: '/login'},
						{label: 'Invoice', icon: 'pi pi-fw pi-dollar', to: '/invoice'},
						{label: 'Help', icon: 'pi pi-fw pi-question-circle', to: '/help'},
						{label: 'Wizard', icon: 'pi pi-fw pi-star', to: '/wizard'},
						{label: 'Error', icon: 'pi pi-fw pi-times-circle', to: '/error'},
						{label: 'Not Found', icon: 'pi pi-fw pi-exclamation-circle', to: '/notfound'},
						{label: 'Access Denied', icon: 'pi pi-fw pi-lock', to: '/access'},
						{label: 'Empty Page', icon: 'pi pi-fw pi-circle-off', to: '/empty'}
					]
				},
				{
					label: 'Menu Hierarchy', icon: 'pi pi-fw pi-sort-amount-down-alt',
					items: [
						{
							label: 'Submenu 1', icon: 'pi pi-fw pi-circle-off',
							items: [
								{
									label: 'Submenu 1.1', icon: 'pi pi-fw pi-circle-off',
									items: [
										{label: 'Submenu 1.1.1', icon: 'pi pi-fw pi-circle-off'},
										{label: 'Submenu 1.1.2', icon: 'pi pi-fw pi-circle-off'},
										{label: 'Submenu 1.1.3', icon: 'pi pi-fw pi-circle-off'},
									]
								},
								{
									label: 'Submenu 1.2', icon: 'pi pi-fw pi-circle-off',
									items: [
										{label: 'Submenu 1.2.1', icon: 'pi pi-fw pi-circle-off'},
										{label: 'Submenu 1.2.2', icon: 'pi pi-fw pi-circle-off'}
									]
								},
							]
						},
						{
							label: 'Submenu 2', icon: 'pi pi-fw pi-circle-off',
							items: [
								{
									label: 'Submenu 2.1', icon: 'pi pi-fw pi-circle-off',
									items: [
										{label: 'Submenu 2.1.1', icon: 'pi pi-fw pi-circle-off'},
										{label: 'Submenu 2.1.2', icon: 'pi pi-fw pi-circle-off'},
										{label: 'Submenu 2.1.3', icon: 'pi pi-fw pi-circle-off'},
									]
								},
								{
									label: 'Submenu 2.2', icon: 'pi pi-fw pi-circle-off',
									items: [
										{label: 'Submenu 2.2.1', icon: 'pi pi-fw pi-circle-off'},
										{label: 'Submenu 2.2.2', icon: 'pi pi-fw pi-circle-off'}
									]
								},
							]
						}
					]
				},
				{label: 'Documentation', icon: 'pi pi-fw pi-question', to: '/documentation'},
				{label: 'Buy Now', icon: 'pi pi-shopping-cart', command: () => { window.location = "https://www.primefaces.org/store"}},
            ]
        }
    },
	rippleListener: null,
    watch: {
        $route() {
            this.menuActive = false;
            this.$toast.removeAllGroups();
        }
    },
    methods: {
		onDocumentClick() {
			if(!this.topbarItemClick) {
				this.activeTopbarItem = null;
				this.topbarMenuActive = false;
			}

			if(!this.menuClick) {
				if(this.isHorizontal() || this.isSlim()) {
					this.menuActive = false;
					EventBus.$emit('reset_active_index');
				}

				this.hideOverlayMenu();
			}

			if(!this.rightPanelClick) {
				this.rightPanelActive = false;
			}

			this.topbarItemClick = false;
			this.menuClick = false;
			this.rightPanelClick = false;
        },
		isHorizontal() {
			return this.layoutMode === 'horizontal';
		},
		isSlim() {
			return this.layoutMode === 'slim';
		},
		isDesktop() {
			return window.innerWidth > 1024;
		},
		hideOverlayMenu() {
			this.rotateMenuButton = false;
			this.overlayMenuActive = false;
			this.staticMenuMobileActive = false;
		},
		onMenuButtonClick(event){
			this.menuClick = true;
			this.rotateMenuButton = !this.rotateMenuButton;
			this.topbarMenuActive = false;

			if(this.layoutMode === 'overlay') {
				this.overlayMenuActive = !this.overlayMenuActive;
			}
			else {
				if(this.isDesktop())
					this.staticMenuDesktopInactive = !this.staticMenuDesktopInactive;
				else
					this.staticMenuMobileActive = !this.staticMenuMobileActive;
			}

			event.preventDefault();
		},
		onTopbarMenuButtonClick(event) {
			this.topbarItemClick = true;
			this.topbarMenuActive = !this.topbarMenuActive;
			this.hideOverlayMenu();
			event.preventDefault();
		},
		onTopbarItemClick(event){
			this.topbarItemClick = true;

			if(this.activeTopbarItem === event.item)
				this.activeTopbarItem = null;
			else
				this.activeTopbarItem = event.item;

			event.originalEvent.preventDefault();
		},
		onRightPanelButtonClick(event){
			this.rightPanelClick = true;
			this.rightPanelActive = !this.rightPanelActive;

			event.preventDefault();
		},
		onRightPanelClick(){
			this.rightPanelClick = true;
		},
		onMenuClick() {
			this.menuClick = true;
		},
		onRootMenuItemClick() {
			this.menuActive = !this.menuActive;
		},
		onMenuItemClick(event) {
			if(!event.item.items) {
				this.hideOverlayMenu();
				EventBus.$emit('reset_active_index');
			}

			if(!event.item.items && (this.isHorizontal() || this.isSlim())) {
				this.menuActive = false;
			}
		},
		onMenuModeChange(layoutMode) {
			this.layoutMode = layoutMode;
			if(layoutMode === 'horizontal') {
				this.profileMode = 'top';
			}
		},
		onMenuColorChange(menuColor) {
			this.darkMenu = menuColor;
		},
		onProfileModeChange(profileMode) {
			this.profileMode = profileMode;
		},
		changeTheme(theme) {
			this.theme = theme;
			this.changeStyleSheetUrl('layout-css', theme, 'layout');
			this.changeStyleSheetUrl('theme-css', theme, 'theme');
		},
		changeStyleSheetUrl(id, value, prefix) {
			let element = document.getElementById(id);
			let urlTokens = element.getAttribute('href').split('/');
			urlTokens[urlTokens.length - 1] = prefix + '-' + value + '.css';
			let newURL = urlTokens.join('/');

			this.replaceLink(element, newURL);
		},
		replaceLink(linkElement, href) {
			const id = linkElement.getAttribute('id');
			const cloneLinkElement = linkElement.cloneNode(true);

			cloneLinkElement.setAttribute('href', href);
			cloneLinkElement.setAttribute('id', id + '-clone');

			linkElement.parentNode.insertBefore(cloneLinkElement, linkElement.nextSibling);

			cloneLinkElement.addEventListener('load', () => {
				linkElement.remove();
				cloneLinkElement.setAttribute('id', id);
			});
		}
    },
    computed: {
		layoutContainerClass() {
            return ['layout-container', {
				'menu-layout-static': this.layoutMode !== 'overlay',
				'menu-layout-overlay': this.layoutMode === 'overlay',
				'layout-menu-overlay-active': this.overlayMenuActive,
				'menu-layout-slim': this.layoutMode === 'slim',
				'menu-layout-horizontal': this.layoutMode === 'horizontal',
				'layout-menu-static-inactive': this.staticMenuDesktopInactive,
				'layout-menu-static-active': this.staticMenuMobileActive,
				'p-input-filled': this.$appState.inputStyle === 'filled',
				'p-ripple-disabled': this.$primevue.ripple === false
			}];
        },
		menuClass(){
			return ['layout-menu', {'layout-menu-dark': this.darkMenu}];
		}
    },
    components: {
        'AppTopBar': AppTopBar,
        'AppInlineProfile': AppInlineProfile,
        'AppRightPanel': AppRightPanel,
        'AppMenu': AppMenu,
        'AppConfig': AppConfig,
        'AppFooter': AppFooter,
        'AppBreadcrumb': AppBreadcrumb
    }
}
</script>

<style lang="scss">
@import './App.scss';
</style>
