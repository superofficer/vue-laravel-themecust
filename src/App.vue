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

					<AppFooter />
				</div>
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
				{label: 'Dashboard', icon: 'dashboard', to: '/'},
				{
					label: 'Themes', icon: 'palette', badge: '6',
					items: [
						{label: 'Indigo - Pink', icon: 'brush', command: () => {this.changeTheme('indigo')}},
						{label: 'Brown - Green', icon: 'brush', command: () => {this.changeTheme('brown')}},
						{label: 'Blue - Amber', icon: 'brush', command: () => {this.changeTheme('blue')}},
						{label: 'Blue Grey - Green', icon: 'brush', command: () => {this.changeTheme('blue-grey')}},
						{label: 'Dark - Blue', icon: 'brush', command: () => {this.changeTheme('dark-blue')}},
						{label: 'Dark - Green', icon: 'brush', command: () => {this.changeTheme('dark-green')}},
						{label: 'Green - Yellow', icon: 'brush', command: () => {this.changeTheme('green')}},
						{label: 'Purple - Cyan', icon: 'brush', command: () => {this.changeTheme('purple-cyan')}},
						{label: 'Purple - Amber', icon: 'brush', command: () => {this.changeTheme('purple-amber')}},
						{label: 'Teal - Lime', icon: 'brush', command: () => {this.changeTheme('teal')}},
						{label: 'Cyan - Amber', icon: 'brush', command: () => {this.changeTheme('cyan')}},
						{label: 'Grey - Deep Orange', icon: 'brush', command: () => {this.changeTheme('grey')}}
					]
				},
				{
					label: 'Customization', icon: 'settings_application',
					items: [
						{label: 'Static Menu', icon: 'menu',  command: () => this.layoutMode = 'static'},
						{label: 'Overlay Menu', icon: 'exit_to_app',  command: () => this.layoutMode = 'overlay'},
						{label: 'Slim Menu', icon: 'more_vert',  command: () => this.layoutMode = 'slim'},
						{label: 'Horizontal Menu', icon: 'border_horizontal',  command: () => this.layoutMode = 'horizontal'},
						{label: 'Light Menu', icon: 'label_outline',  command: () => this.darkMenu = false},
						{label: 'Dark Menu', icon: 'label',  command: () => this.darkMenu = true},
						{label: 'Inline Profile', icon: 'contacts',  command: () => this.profileMode = 'inline'},
						{label: 'Top Profile', icon: 'person_pin',  command: () => this.profileMode = 'top'},
					]
				},
				{
					label: 'UI KIT', icon: 'list', badge: '2', badgeStyleClass: 'teal-badge',
					items: [
						{label: 'Form Layout', icon: 'library_books', to: '/formlayout'},
						{label: 'Input', icon: 'input', to: '/input'},
						{label: 'Button', icon: 'stay_current_landscape', to: '/button'},
						{label: 'Table', icon: 'grid_on', to: '/table'},
						{label: 'List', icon: 'format_list_bulleted', to: '/list'},
						{label: 'Tree', icon: 'share', to: '/tree'},
						{label: 'Panel', icon: 'tablet_mac', to: '/panel'},
						{label: 'Overlay', icon: 'content_copy', to: '/overlay'},
						{label: 'Menu', icon: 'menu', to: '/menu'},
						{label: 'Message', icon: 'message', to: '/messages'},
						{label: 'File', icon: 'insert_drive_file', to: '/file'},
						{label: 'Chart', icon: 'insert_chart', to: '/chart'},
						{label: 'Misc', icon: 'panorama_fish_eye', to: '/misc'},
					]
				},
				{
					label: 'Template Pages', icon: 'get_app',
					items: [
						{label: 'Empty Page', icon: 'hourglass_empty', to: '/empty'},
						{label: 'Help', icon: 'help', to: '/help'},
						{label: 'Invoice', icon: 'content_paste', to: '/invoice'},
						{label: 'Wizard', icon: 'star', to: '/wizard'},
						{label: 'Landing Page', icon: 'flight_land', url: 'assets/pages/landing.html', target: '_blank'},
						{label: 'Login Page', icon: 'verified_user', to: '/login'},
						{label: 'Error Page', icon: 'error', to: '/error'},
						{label: '404 Page', icon: 'error_outline', to: '/notfound'},
						{label: 'Access Denied Page', icon: 'security', to: '/access'}
					]
				},
				{
					label: 'Menu Hierarchy', icon: 'menu',
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
	rippleListener: null,
    watch: {
        $route() {
            this.menuActive = false;
            this.$toast.removeAllGroups();
        }
    },
	mounted() {
		this.bindRipple();
	},
	beforeDestroy() {
		this.unbindRipple();
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
		},
		bindRipple() {
			this.rippleListener = this.rippleMousedown.bind(this);
			document.addEventListener('mousedown', this.rippleListener, false);
		},
		rippleMousedown(e) {
			const parentNode = 'parentNode';
			for (let target = e.target; target && target !== this; target = target[parentNode]) {
				if (!this.isVisible(target)) {
					continue;
				}

				// Element.matches() -> https://developer.mozilla.org/en-US/docs/Web/API/Element/matches
				if (this.selectorMatches(target, '.ripplelink, .p-button, .p-listbox-item, .p-multiselect-item, .p-fieldset-toggler')) {
					const element = target;
					this.rippleEffect(element, e);
					break;
				}
			}
		},
		selectorMatches(el, selector) {
			const matches = 'matches';
			const webkitMatchesSelector = 'webkitMatchesSelector';
			const mozMatchesSelector = 'mozMatchesSelector';
			const msMatchesSelector = 'msMatchesSelector';
			const p = Element.prototype;
			const f = p[matches] || p[webkitMatchesSelector] || p[mozMatchesSelector] || p[msMatchesSelector] || function(s) {
				return [].indexOf.call(document.querySelectorAll(s), this) !== -1;
			};
			return f.call(el, selector);
		},
		isVisible(el) {
			return !!(el.offsetWidth || el.offsetHeight);
		},
		rippleEffect(element, e) {
			if (element.querySelector('.ink') === null) {
				const inkEl = document.createElement('span');
				this.addClass(inkEl, 'ink');

				if (this.hasClass(element, 'ripplelink') && element.querySelector('span')) {
					element.querySelector('span').insertAdjacentHTML('afterend', '<span class=\'ink\'></span>');
				} else {
					element.appendChild(inkEl);
				}
			}

			const ink = element.querySelector('.ink');
			this.removeClass(ink, 'ripple-animate');

			if (!ink.offsetHeight && !ink.offsetWidth) {
				const d = Math.max(element.offsetWidth, element.offsetHeight);
				ink.style.height = d + 'px';
				ink.style.width = d + 'px';
			}

			const x = e.pageX - this.getOffset(element).left - (ink.offsetWidth / 2);
			const y = e.pageY - this.getOffset(element).top - (ink.offsetHeight / 2);

			ink.style.top = y + 'px';
			ink.style.left = x + 'px';
			ink.style.pointerEvents = 'none';
			this.addClass(ink, 'ripple-animate');
		},
		hasClass(element, className) {
			if (element.classList) {
				return element.classList.contains(className);
			} else {
				return new RegExp('(^| )' + className + '( |$)', 'gi').test(element.className);
			}
		},
		addClass(element, className) {
			if (element.classList) {
				element.classList.add(className);
			} else {
				element.className += ' ' + className;
			}
		},
		removeClass(element, className) {
			if (element.classList) {
				element.classList.remove(className);
			} else {
				element.className = element.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
			}
		},
		getOffset(el) {
			const rect = el.getBoundingClientRect();

			return {
				top: rect.top + (window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0),
				left: rect.left + (window.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft || 0),
			};
		},
		unbindRipple() {
			if (this.rippleListener) {
				document.removeEventListener('mousedown', this.rippleListener);
				this.rippleListener = null;
			}
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
