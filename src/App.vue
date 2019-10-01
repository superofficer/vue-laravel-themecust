<template>
	<div class="layout-wrapper" @click="onDocumentClick">
		<div :class="layoutContainerClass">
			<AppTopBar :profileMode="profileMode" :horizontal="layoutMode==='horizontal'" :topbarMenuActive="topbarMenuActive" :activeTopbarItem="activeTopbarItem"
			@menubutton-click="onMenuButtonClick" @topbar-menubutton-click="onTopbarMenuButtonClick" @topbaritem-click="onTopbarItemClick" @rightpanel-button-click="onRightPanelButtonClick"></AppTopBar>

			<AppRightPanel :expanded="rightPanelActive" @content-click="onRightPanelClick"></AppRightPanel>
			<div class="layout-mask"></div>
		</div>
		<!--<div class="layout-top">
			<AppTopBar @menu-click="onMenuClick" @usermenu-button-click="onTopbarUserMenuButtonClick" @usermenu-click="onTopbarUserMenuClick"
						:menuActive="menuActive" :topbarUserMenuActive="topbarUserMenuActive" :model="menu" :horizontal="horizontal" :menuHoverActive="menuHoverActive"
						@sidebar-click="onSidebarClick" @menuitem-click="onMenuItemClick" @root-menuitem-click="onRootMenuItemClick" :isMobile="isMobile"/>

			<div class="layout-topbar-separator"></div>

			<AppBreadcrumb></AppBreadcrumb>
		</div>

		<div class="layout-content">
			<router-view />
		</div>

		<AppConfig :topbarSize.sync="topbarSize" :topbarColor.sync="topbarColor" :menuColor.sync="menuColor" :horizontal.sync="horizontal"></AppConfig>

        <AppFooter />-->
	</div>
</template>

<script>
import AppTopBar from './AppTopbar.vue';
import AppInlineProfile from './AppInlineProfile.vue';
import AppRightPanel from './AppRightPanel.vue';
import AppMenu from './AppMenu.vue';
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
			rightPanelActive: false,
			menuActive: false,



			horizontal: true,
			topbarSize: 'large',
			topbarColor: 'layout-topbar-blue',
			menuColor: 'layout-menu-light',
			menuHoverActive: false,
			topbarUserMenuActive: false,

            menu : [
				{label: 'Dashboard', icon: 'dashboard', to: '/'},
				{
					label: 'Components', icon: 'list',
					items: [
						{label: 'Sample Page', icon: 'desktop_mac', to: '/sample'},
						{label: 'Forms', icon: 'input', to: '/forms'},
						{label: 'Data', icon: 'grid_on', to: '/data'},
						{label: 'Panels', icon: 'content_paste', to: '/panels'},
						{label: 'Overlays', icon: 'content_copy', to: '/overlays'},
						{label: 'Menus', icon: 'menu', to: '/menus'},
						{label: 'Messages', icon: 'message',to: '/messages'},
						{label: 'Charts', icon: 'insert_chart', to: '/charts'},
						{label: 'Misc', icon: 'toys', to: '/misc'}
					]
				},
				{
					label: 'Mega', icon: 'list', badge: 2, mega: true,
					items: [
						{
							label: 'Components',
							items: [
								{label: 'Sample Page', icon: 'desktop_mac', to: '/sample'},
								{label: 'Forms', icon: 'input', to: '/forms'},
								{label: 'Data', icon: 'grid_on', to: '/data'},
								{label: 'Panels', icon: 'content_paste', to: '/panels'},
								{label: 'Overlays', icon: 'content_copy', to: '/overlays'},
								{label: 'Menus', icon: 'menu', to: '/menus'},
								{label: 'Messages', icon: 'message',to: '/messages'},
								{label: 'Charts', icon: 'insert_chart', to: '/charts'},
								{label: 'Misc', icon: 'toys', to: '/misc'}
							]
						},
						{
							label: 'Templates',
							items: [
								{label: 'Ultima', icon: 'desktop_mac', url: 'https://www.primefaces.org/layouts/ultima-ng' },
								{label: 'Serenity', icon: 'desktop_mac', url: 'https://www.primefaces.org/layouts/serenity-ng'},
								{label: 'Avalon', icon: 'desktop_mac',  url: 'https://www.primefaces.org/layouts/avalon-ng'},
								{label: 'Apollo', icon: 'desktop_mac',  url: 'https://www.primefaces.org/layouts/apollo-ng'},
								{label: 'Roma', icon: 'desktop_mac',  url: 'https://www.primefaces.org/layouts/roma-ng'},
								{label: 'Babylon', icon: 'desktop_mac',  url: 'https://www.primefaces.org/layouts/babylon-ng'},
								{label: 'Manhattan', icon: 'desktop_mac',  url: 'https://www.primefaces.org/layouts/manhattan-ng'},
								{label: 'Verona', icon: 'desktop_mac', url: 'https://www.primefaces.org/layouts/verona-ng'},
								{label: 'Olympia', icon: 'desktop_mac',  url: 'https://www.primefaces.org/layouts/olympia-ng'},
								{label: 'Ecuador', icon: 'desktop_mac',  url: 'https://www.primefaces.org/layouts/ecuador-ng'}
							]
						},
						{
							label: 'Demo',
							items: [
								{label: 'PrimeFaces', icon: 'desktop_mac', url: 'https://www.primefaces.org/showcase'},
								{label: 'PrimeNG', icon: 'desktop_mac',  url: 'https://www.primefaces.org/primeng'},
								{label: 'PrimeReact', icon: 'desktop_mac',  url: 'https://www.primefaces.org/primereact'}
							]
						}
					]
				},
				{
					label: 'Pages', icon: 'get_app',
					items: [
						{label: 'Empty Page', icon: 'hourglass_empty', to: '/empty'},
						{label: 'Landing Page', icon: 'flight_land', url: 'assets/pages/landing.html', target: '_blank'},
						{label: 'Login Page', icon: 'verified_user', to: '/login'},
						{label: 'Error Page', icon: 'error', to: '/error'},
						{label: '404 Page', icon: 'error_outline', to: '/notfound'},
						{label: 'Access Denied Page', icon: 'security', to: '/access'}
					]
				},
				{
					label: 'Hierarchy', icon: 'menu',
					items: [
						{
							label: 'Submenu 1', icon: 'subject',
							items: [
								{
									label: 'Submenu 1.1', icon: 'subject',
									items: [
										{label: 'Submenu 1.1.1', icon: 'subject'},
										{label: 'Submenu 1.1.2', icon: 'subject'},
										{label: 'Submenu 1.1.3', icon: 'subject'},
									]
								},
								{
									label: 'Submenu 1.2', icon: 'subject',
									items: [
										{label: 'Submenu 1.2.1', icon: 'subject'},
										{label: 'Submenu 1.2.2', icon: 'subject'}
									]
								},
							]
						},
						{
							label: 'Submenu 2', icon: 'subject',
							items: [
								{
									label: 'Submenu 2.1', icon: 'subject',
									items: [
										{label: 'Submenu 2.1.1', icon: 'subject'},
										{label: 'Submenu 2.1.2', icon: 'subject'},
										{label: 'Submenu 2.1.3', icon: 'subject'},
									]
								},
								{
									label: 'Submenu 2.2', icon: 'subject',
									items: [
										{label: 'Submenu 2.2.1', icon: 'subject'},
										{label: 'Submenu 2.2.2', icon: 'subject'}
									]
								},
							]
						}
					]
				},
				{label: 'Utils', icon: 'build',  command:()=>{ window.location = "#/utils"}},
				{label: 'Documentation', icon: 'find_in_page',  command:()=>{ window.location = "#/documentation"}},
				{label: 'Buy Now', icon: 'credit_card', command: () => { window.location = "https://www.primefaces.org/store"}},
            ]
        }
    },
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





        blockBodyScroll() {
            let blockScrollClass = this.horizontal ? 'blocked-scroll-horizontal' : 'blocked-scroll';
            if (document.body.classList)
                document.body.classList.add(blockScrollClass);
            else
            document.body.className += ' ' + blockScrollClass;
		},
		unblockBodyScroll() {
			let blockScrollClass = this.horizontal ? 'blocked-scroll-horizontal' : 'blocked-scroll';
			if (document.body.classList) {
				document.body.classList.remove(blockScrollClass);
			} 
			else {
				document.body.className = document.body.className.replace(new RegExp('(^|\\b)' +
					blockScrollClass.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
			}
		},
        onMenuClick(event) {
			this.menuClick = true;

			if (!this.horizontal || this.isMobile()) {
				this.menuActive = !this.menuActive;

				if (this.menuActive) {
					this.blockBodyScroll();
				} 
				else {
					this.unblockBodyScroll();
				}
			}

            event.preventDefault();
        },
		onTopbarUserMenuButtonClick(event) {
			this.userMenuClick = true;
			this.topbarUserMenuActive = !this.topbarUserMenuActive;

			event.preventDefault();
		},
		onTopbarUserMenuClick(event) {
			this.userMenuClick = true;

			if (event.target.nodeName === 'BUTTON' || event.target.parentNode.nodeName === 'BUTTON') {
				this.topbarUserMenuActive = false;
			}

			event.preventDefault();
		},
		onSidebarClick() {
			this.menuClick = true;
		},
		onRootMenuItemClick(event) {
			this.menuClick = true;

			if (this.horizontal && this.isMobile()) {
				this.menuHoverActive = event.isSameIndex ? false : true;
			}
			else {
				this.menuHoverActive = !this.menuHoverActive;
			}	
		},
		onMenuItemClick(event) {
			if (event.item && !event.item.items) {
				if (!this.horizontal) {
					this.menuActive = false;
					this.unblockBodyScroll();
				}

				EventBus.$emit('reset_active_index');
				this.menuHoverActive = false;
			}
		},
		isMobile() {
			return window.innerWidth <= 1024;
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
				'layout-menu-static-active': this.staticMenuMobileActive
			}];
        }
    },
    components: {
        'AppTopBar': AppTopBar,
        'AppInlineProfile': AppInlineProfile,
        'AppRightPanel': AppRightPanel,
        'AppMenu': AppMenu,
        'AppFooter': AppFooter,
        'AppBreadcrumb': AppBreadcrumb
    }
}
</script>

<style lang="scss">
@import './App.scss';
</style>
