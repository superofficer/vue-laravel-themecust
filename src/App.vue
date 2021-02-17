<template>
		<div :class="layoutContainerClass" @click="onDocumentClick">
			<AppTopBar :horizontal="menuMode==='horizontal'" :topbarMenuActive="topbarMenuActive" :activeTopbarItem="activeTopbarItem" :mobileTopbarActive="mobileTopbarActive" @topbar-mobileactive="onTopbarMobileButtonClick"
				@menubutton-click="onMenuButtonClick" @topbar-menubutton-click="onTopbarMenuButtonClick" @topbaritem-click="onTopbarItemClick" @rightpanel-button-click="onRightPanelButtonClick"></AppTopBar>

				<div class="menu-wrapper">
					<div class="layout-menu-container" @click="onMenuClick">
							<AppInlineMenu v-if="inlineMenuPosition === 'top' || inlineMenuPosition === 'both'" v-model:active="inlineMenuTopActive" @change-inlinemenu="onChangeInlineMenu" inlineMenuKey="top" :menuMode="menuMode"></AppInlineMenu>
							<AppMenu :model="menu" :menuMode="menuMode" :active="menuActive" @menuitem-click="onMenuItemClick" @root-menuitem-click="onRootMenuItemClick"></AppMenu>
							<AppInlineMenu v-if="inlineMenuPosition === 'bottom' || inlineMenuPosition === 'both'" v-model:active="inlineMenuBottomActive" @change-inlinemenu="onChangeInlineMenu" inlineMenuKey="bottom" :menuMode="menuMode"></AppInlineMenu>
					</div>
				</div>

			<div class="layout-main">

				<AppBreadcrumb></AppBreadcrumb>

				<div class="layout-content">
					<router-view />
				</div>

				<AppFooter :layoutMode="layoutMode" />
			</div>

			<AppConfig :menuMode="menuMode" @menu-mode-change="onMenuModeChange" @menu-color-change="onMenuColorChange" @menu-theme="onMenuTheme"
						:layoutMode="d_layoutMode" @topbar-theme="onTopbarThemeChange"
						v-model:inlineMenuPosition="inlineMenuPosition" @inlinemenu-change="onInlineMenuPositionChange"
						:theme="theme" :themes="themes" @theme-change="changeTheme" :menuTheme="d_menuTheme" :menuThemes="menuThemes"
						:topbarTheme="d_topbarTheme" :topbarThemes="topbarThemes"></AppConfig>

			<AppRightPanel :expanded="rightPanelActive" @content-click="onRightPanelClick"></AppRightPanel>

			<div v-if="mobileMenuActive" class="layout-mask modal-in"></div>
	</div>
</template>

<script>
import AppTopBar from './AppTopbar.vue';
import AppInlineMenu from './AppInlineMenu.vue';
import AppRightPanel from './AppRightPanel.vue';
import AppMenu from './AppMenu.vue';
import AppConfig from './AppConfig.vue';
import AppFooter from './AppFooter.vue';
import AppBreadcrumb from './AppBreadcrumb.vue';
import EventBus from './event-bus';

export default {
	emits: ['menu-color-change', 'menu-theme'],
	props: {
		topbarTheme: String,
		menuTheme: String,
		layoutMode: String
	},
    data() {
        return {
			d_topbarTheme: this.topbarTheme,
			d_menuTheme: this.menuTheme,
			d_layoutMode: this.layoutMode,
			mobileTopbarActive: false,
			mobileMenuActive: false,
			search: false,
			searchClick: false,
			menuMode: 'static',
			inlineMenuClick: false,
			inlineMenuPosition: 'bottom',
			inlineMenuTopActive: false,
			inlineMenuBottomActive: false,
			overlayMenuActive: false,
			staticMenuDesktopInactive: false,
			staticMenuMobileActive: false,
			rotateMenuButton: false,
			topbarMenuActive: false,
			activeTopbarItem: null,
			darkMenu: false,
			theme: 'blue',
			themes: [
				{name: 'indigo', color: '#2f8ee5'},
				{name: 'pink', color: '#E91E63'},
				{name: 'purple', color: '#9C27B0'},
				{name: 'deeppurple', color: '#673AB7'},
				{name: 'blue', color: '#2196F3'},
				{name: 'lightblue', color: '#03A9F4'},
				{name: 'cyan', color: '#00BCD4'},
				{name: 'teal', color: '#009688'},
				{name: 'green', color: '#4CAF50'},
				{name: 'lightgreen', color: '#8BC34A'},
				{name: 'lime', color: '#CDDC39'},
				{name: 'yellow', color: '#FFEB3B'},
				{name: 'amber', color: '#FFC107'},
				{name: 'orange', color: '#FF9800'},
				{name: 'deeporange', color: '#FF5722'},
				{name: 'brown', color: '#795548'},
				{name: 'bluegrey', color: '#607D8B'}
			],
			menuThemes: [
				{name: 'light', color: '#FDFEFF'},
				{name: 'dark', color: '#434B54'},
				{name: 'indigo', color: '#1A237E'},
				{name: 'bluegrey', color: '#37474F'},
				{name: 'brown', color: '#4E342E'},
				{name: 'cyan', color: '#006064'},
				{name: 'green', color: '#2E7D32'},
				{name: 'deeppurple', color: '#4527A0'},
				{name: 'deeporange', color: '#BF360C'},
				{name: 'pink', color: '#880E4F'},
				{name: 'purple', color: '#6A1B9A'},
				{name: 'teal', color: '#00695C'}
			],
			topbarThemes: [
				{name: 'lightblue', color: '#2E88FF'},
				{name: 'dark', color: '#363636'},
				{name: 'white', color: '#FDFEFF'},
				{name: 'blue', color: '#1565C0'},
				{name: 'deeppurple', color: '#4527A0'},
				{name: 'purple', color: '#6A1B9A'},
				{name: 'pink', color: '#AD1457'},
				{name: 'cyan', color: '#0097A7'},
				{name: 'teal', color: '#00796B'},
				{name: 'green', color: '#43A047'},
				{name: 'lightgreen', color: '#689F38'},
				{name: 'lime', color: '#AFB42B'},
				{name: 'yellow', color: '#FBC02D'},
				{name: 'amber', color: '#FFA000'},
				{name: 'orange', color: '#FB8C00'},
				{name: 'deeporange', color: '#D84315'},
				{name: 'brown', color: '#5D4037'},
				{name: 'grey', color: '#616161'},
				{name: 'bluegrey', color: '#546E7A'},
				{name: 'indigo', color: '#3F51B5'}
			],
			rightPanelActive: false,
			menuActive: false,
            menu: [
				{
					label: 'Favorites', 
					icon: 'pi pi-fw pi-home',
					items: [
						{label: 'Dashboard Sales', icon: 'pi pi-fw pi-home', to: '/', badge: 4, badgeStyleClass: 'p-badge-info'},
						{label: 'Dashboard Analytics', icon: 'pi pi-fw pi-home',
							to: '/favorites/dashboardanalytics', badge:2, badgeStyleClass: 'p-badge-success'}
					]
				},
				{
					label: 'UI Kit', icon: 'pi pi-fw pi-star',
					items: [
						{label: 'Input', icon: 'pi pi-fw pi-check-square', to: '/input', badge: 6, badgeStyleClass: 'p-badge-danger'},
						{label: "Float Label", icon: "pi pi-fw pi-bookmark", to: "/floatlabel"},
						{label: 'Invalid State', icon: 'pi pi-fw pi-exclamation-circle', to: '/invalidstate'},
						{label: 'Button', icon: 'pi pi-fw pi-mobile', to: '/button', class: 'rotated-icon'},
						{label: 'Table', icon: 'pi pi-fw pi-table', to: '/table', badge: 6, badgeStyleClass: 'p-badge-help'},
						{label: 'List', icon: 'pi pi-fw pi-list', to: '/list'},
						{label: 'Tree', icon: 'pi pi-fw pi-share-alt', to: '/tree'},
						{label: 'Panel', icon: 'pi pi-fw pi-tablet', to: '/panel'},
						{label: 'Overlay', icon: 'pi pi-fw pi-clone', to: '/overlay'},
						{label: "Media", icon: "pi pi-fw pi-image", to: "/media"},
						{label: 'Menu', icon: 'pi pi-fw pi-bars', to: '/menus'},
						{label: 'Message', icon: 'pi pi-fw pi-comment', to: '/messages'},
						{label: 'File', icon: 'pi pi-fw pi-file', to: '/file'},
						{label: 'Chart', icon: 'pi pi-fw pi-chart-bar', to: '/chart'},
						{label: 'Misc', icon: 'pi pi-fw pi-circle-off', to: '/misc'},
					]
				},
				{
					label: "Utilities", icon:'pi pi-fw pi-compass',
					items: [
						{label: 'Form Layout', icon: 'pi pi-fw pi-id-card', to: '/formlayout', badge: '6', badgeStyleClass: 'p-badge-warning'},
						{label: 'Display', icon:'pi pi-fw pi-desktop', to:'/display'},
						{label: 'Elevation', icon:'pi pi-fw pi-external-link', to:'/elevation'},
						{label: 'Flexbox', icon:'pi pi-fw pi-directions', to:'/flexbox'},
						{label: 'Icons', icon:'pi pi-fw pi-search', to:'/icons'},
						{label: 'Text', icon:'pi pi-fw pi-pencil', to:'/text'},
						{label: 'Widgets', icon:'pi pi-fw pi-star-o', to:'/widgets'},
						{label: 'Grid System', icon:'pi pi-fw pi-th-large', to:'/grid'},
						{label: 'Spacing', icon:'pi pi-fw pi-arrow-right', to:'/spacing'},
						{label: 'Typography', icon:'pi pi-fw pi-align-center', to:'/typography'}
					]
				},
				{
					label: 'Pages', icon: 'pi pi-fw pi-briefcase',
					items: [
						{label: 'Crud', icon: 'pi pi-fw pi-pencil', to: '/crud'},
						{label: 'Calendar', icon: 'pi pi-fw pi-calendar-plus', to: '/calendar'},
						{label: 'Timeline', icon: 'pi pi-fw pi-calendar', to: '/timeline'},
						{
							label: 'Landing', 
							icon: 'pi pi-fw pi-globe',
							badge: '2', badgeStyleClass: 'p-badge-warning',
							items: [
								{label: 'Static', icon: 'pi pi-fw pi-globe', url: 'assets/pages/landing.html', target: '_blank'},
								{label: 'Component', icon: 'pi pi-fw pi-globe', to: '/landing'}
							]
						},
						{label: 'Login', icon: 'pi pi-fw pi-sign-in', to: '/login'},
						{label: 'Invoice', icon: 'pi pi-fw pi-dollar', to: '/invoice'},
						{label: 'Help', icon: 'pi pi-fw pi-question-circle', to: '/help'},
						{label: 'Error', icon: 'pi pi-fw pi-times-circle', to: '/error'},
						{label: 'Not Found', icon: 'pi pi-fw pi-exclamation-circle', to: '/notfound'},
						{label: 'Access Denied', icon: 'pi pi-fw pi-lock', to: '/access'},
						{label: 'Contact Us', icon: 'pi pi-fw pi-pencil', to: '/contactus'},
						{label: 'Empty', icon: 'pi pi-fw pi-circle-off', to: '/empty'}
					]
				},
				{
					label: 'Hierarchy', icon: 'pi pi-fw pi-align-left',
					items: [
						{
							label: 'Submenu 1', icon: 'pi pi-fw pi-align-left',
							items: [
								{
									label: 'Submenu 1.1', icon: 'pi pi-fw pi-align-left',
									items: [
										{label: 'Submenu 1.1.1', icon: 'pi pi-fw pi-align-left'},
										{label: 'Submenu 1.1.2', icon: 'pi pi-fw pi-align-left'},
										{label: 'Submenu 1.1.3', icon: 'pi pi-fw pi-align-left'},
									]
								},
								{
									label: 'Submenu 1.2', icon: 'pi pi-fw pi-align-left',
									items: [
										{label: 'Submenu 1.2.1', icon: 'pi pi-fw pi-align-left'},
										{label: 'Submenu 1.2.2', icon: 'pi pi-fw pi-align-left'}
									]
								},
							]
						},
						{
							label: 'Submenu 2', icon: 'pi pi-fw pi-align-left',
							items: [
								{
									label: 'Submenu 2.1', icon: 'pi pi-fw pi-align-left',
									items: [
										{label: 'Submenu 2.1.1', icon: 'pi pi-fw pi-align-left'},
										{label: 'Submenu 2.1.2', icon: 'pi pi-fw pi-align-left'},
										{label: 'Submenu 2.1.3', icon: 'pi pi-fw pi-align-left'},
									]
								},
								{
									label: 'Submenu 2.2', icon: 'pi pi-fw pi-align-left',
									items: [
										{label: 'Submenu 2.2.1', icon: 'pi pi-fw pi-align-left'},
										{label: 'Submenu 2.2.2', icon: 'pi pi-fw pi-align-left'}
									]
								},
							]
						}
					]
				},
				{
					label: 'Start', icon: 'pi pi-fw pi-download',
					items: [
						{
							label: 'Buy Now', icon: 'pi pi-fw pi-shopping-cart', command: () => { window.location = "https://www.primefaces.org/store"}
						},
						{
							label: 'Documentation', icon: 'pi pi-fw pi-info-circle', to: '/documentation'
						}
					]
				}
            ]
        }
    },
    watch: {
        $route() {
			this.menuActive = this.isStatic() && !this.isMobile();
            this.$toast.removeAllGroups();
        },
		topbarTheme(newValue) {
			this.d_topbarTheme = newValue;
		},
		menuTheme(newValue) {
			this.d_menuTheme = newValue;
		},
		layoutMode(newValue) {
			this.d_layoutMode = newValue;
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
					EventBus.emit('reset-active-index');
				}

				if (this.mobileMenuActive) {
                    this.mobileMenuActive = false;
                }

				this.hideOverlayMenu();
				this.unblockBodyScroll();
			}

			if(!this.rightPanelClick) {
				this.rightPanelActive = false;
			}

			if (!this.searchClick) {
                this.search = false;
            }

			if(!this.inlineMenuClick) {
				this.inlineMenuTopActive = false;
				this.inlineMenuBottomActive = false;
			}

			this.topbarItemClick = false;
			this.menuClick = false;
			this.rightPanelClick = false;
			this.searchClick = false;
			this.inlineMenuClick = false;
        },
		isHorizontal() {
			return this.menuMode === 'horizontal';
		},
		isSlim() {
			return this.menuMode === 'slim';
		},
		isOverlay() {
			return this.menuMode === 'overlay';
		},
		isStatic() {
			return this.menuMode === 'static';
		},
		isDesktop() {
			return window.innerWidth > 991;
		},
		isMobile() {
			return window.innerWidth <= 991;
		},
		hideOverlayMenu() {
			this.rotateMenuButton = false;
			this.overlayMenuActive = false;
			this.staticMenuMobileActive = false;
		},
		onMenuButtonClick(event){
			this.menuClick = true;
			this.menuActive = !this.menuActive;
			this.topbarMenuActive = false;
			this.topbarRightClick = true;
			this.rotateMenuButton = !this.rotateMenuButton;
			this.topbarMenuActive = false;

			if(this.isDesktop())
				this.staticMenuDesktopInactive = !this.staticMenuDesktopInactive;
			else {
				this.mobileMenuActive = !this.mobileMenuActive;
				if (this.mobileMenuActive) {
					this.blockBodyScroll();
				} else {
					this.unblockBodyScroll();
				}
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
		onTopbarMobileButtonClick(event) {
			this.mobileTopbarActive = !this.mobileTopbarActive;
			event.preventDefault();
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
				EventBus.emit('reset-active-index');
			}

			if(!event.item.items && (this.isHorizontal() || this.isSlim())) {
				this.menuActive = false;
			}
		},
		onMenuModeChange(menuMode) {
			this.menuMode = menuMode;
			if(menuMode === 'horizontal') {
				this.inlineMenuPosition = 'top';
			}
		},
		onMenuColorChange(menuColor) {
			this.$emit('menu-color-change', menuColor);
		},
		onInlineMenuPositionChange(position) {
			this.inlineMenuPosition = position;
		},
		onChangeInlineMenu(e, key) {
			if(key === 'top') {
				if(this.inlineMenuBottomActive) {
					this.inlineMenuBottomActive = false;
				}
				this.inlineMenuTopActive = !this.inlineMenuTopActive;
			}
			if(key === 'bottom') {
				if(this.inlineMenuTopActive) {
					this.inlineMenuTopActive = false;
				}
				this.inlineMenuBottomActive = !this.inlineMenuBottomActive;
			}

			this.inlineMenuClick = true;
			
		},
		changeTheme(theme) {
			this.theme = theme;
			this.changeStyleSheetUrl('theme-css', theme);
		},
		onTopbarThemeChange(theme) {
			this.$emit('topbar-theme', theme);
		},
		onMenuTheme(menuTheme) {
			this.$emit('menu-theme', menuTheme);
		},
		changeStyleSheetUrl(id, value) {
			const element = document.getElementById(id);
			const urlTokens = element.getAttribute('href').split('/');
			urlTokens[urlTokens.length - 2] = value;
			const newURL = urlTokens.join('/');
			this.replaceLink(element, newURL);
		},
		replaceLink(linkElement, href, callback) {
			const id = linkElement.getAttribute('id');
			const cloneLinkElement = linkElement.cloneNode(true);

			cloneLinkElement.setAttribute('href', href);
			cloneLinkElement.setAttribute('id', id + '-clone');

			linkElement.parentNode.insertBefore(cloneLinkElement, linkElement.nextSibling);

			cloneLinkElement.addEventListener('load', () => {
				linkElement.remove();
				cloneLinkElement.setAttribute('id', id);

				if(callback) {
					console.log('kdfjn')
					callback();
				}
			});
		},
		blockBodyScroll() {
            if (document.body.classList) {
                document.body.classList.add('blocked-scroll');
            } else {
                document.body.className += ' blocked-scroll';
            }
        },
        unblockBodyScroll() {
            if (document.body.classList) {
                document.body.classList.remove('blocked-scroll');
            } else {
                document.body.className = document.body.className.replace(new RegExp('(^|\\b)' +
                    'blocked-scroll'.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
            }
        },
		setOverviewColors() {
			const { pinkBorderColor, pinkBgColor, tealBorderColor, tealBgColor } = this.getOverviewColors();

			this.overviewChartData1.datasets[0].borderColor[0] = tealBorderColor;
			this.overviewChartData1.datasets[0].backgroundColor[0] = tealBgColor;

			this.overviewChartData2.datasets[0].borderColor[0] = tealBorderColor;
			this.overviewChartData2.datasets[0].backgroundColor[0] = tealBgColor;

			this.overviewChartData3.datasets[0].borderColor[0] = pinkBorderColor;
			this.overviewChartData3.datasets[0].backgroundColor[0] = pinkBgColor;

			this.overviewChartData4.datasets[0].borderColor[0] = tealBorderColor;
			this.overviewChartData4.datasets[0].backgroundColor[0] = tealBgColor;

			const { whiteBgColor, whiteBorderColor} = this.getOverviewColors();

			this.overviewChartData5.datasets[0].borderColor[0] = whiteBorderColor;
			this.overviewChartData5.datasets[0].backgroundColor[0] = whiteBgColor;

			this.overviewChartData6.datasets[0].borderColor[0] = whiteBorderColor;
			this.overviewChartData6.datasets[0].backgroundColor[0] = whiteBgColor;

			this.overviewChartData7.datasets[0].borderColor[0] = whiteBorderColor;
			this.overviewChartData7.datasets[0].backgroundColor[0] = whiteBgColor;

			this.overviewChartData8.datasets[0].borderColor[0] = whiteBorderColor;
			this.overviewChartData8.datasets[0].backgroundColor[0] = whiteBgColor;
		},
		getOverviewColors() {
			const isLight = this.layoutMode === 'light';
			return {
				pinkBorderColor: isLight ? '#E91E63' : '#EC407A',
				pinkBgColor: isLight ? '#F48FB1' : '#F8BBD0',
				tealBorderColor: isLight ? '#009688' : '#26A69A',
				tealBgColor: isLight ? '#80CBC4' : '#B2DFDB',
				whiteBorderColor: isLight ? '#ffffff' : '#ffffff',
				whiteBgColor: isLight ? 'rgba(255,255,255,.35)' : 'rgba(255,255,255,.35)',
			}
		},
		getOrdersOptions() {
			const textColor = getComputedStyle(document.body).getPropertyValue('--text-color') || 'rgba(0, 0, 0, 0.87)';
			const gridLinesColor = getComputedStyle(document.body).getPropertyValue('--divider-color') || 'rgba(160, 167, 181, .3)';
			const fontFamily = getComputedStyle(document.body).getPropertyValue('--font-family');
			return {
				legend: {
					display: true,
					labels: {
						fontFamily,
						fontColor: textColor,
					}
				},
				responsive: true,
				scales: {
					yAxes: [{
						ticks: {
							fontFamily,
							fontColor: textColor
						},
						gridLines: {
							color: gridLinesColor
						}
					}],
					xAxes: [{
						ticks: {
							fontFamily,
							fontColor: textColor
						},
						gridLines: {
							color: gridLinesColor
						}
					}]
				}
        }
		},
		getChartData() {
			const isLight = this.layoutMode === 'light';
			const completedColors = {
				borderColor: isLight ? '#00ACC1' : '#4DD0E1',
				backgroundColor: isLight ? 'rgb(0, 172, 193, .3)' : 'rgb(77, 208, 225, .3)'
			};
			const canceledColors = {
				borderColor: isLight ? '#FF9800' : '#FFB74D',
				backgroundColor: isLight ? 'rgb(255, 152, 0, .3)' : 'rgb(255, 183, 77, .3)'
			};

			return {
				labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				datasets: [
					{
						label: 'Completed',
						data: [65, 59, 80, 81, 56, 55, 40],
						borderColor: completedColors.borderColor,
						backgroundColor: completedColors.backgroundColor,
						borderWidth: 2,
						fill: true
					},
					{
						label: 'Cancelled',
						data: [28, 48, 40, 19, 86, 27, 90],
						borderColor: canceledColors.borderColor,
						backgroundColor: canceledColors.backgroundColor,
						borderWidth: 2,
						fill: true
					}
				]
			};
    },
		getChartOptions() {
			const textColor = getComputedStyle(document.body).getPropertyValue('--text-color') || 'rgba(0, 0, 0, 0.87)';
			const gridLinesColor = getComputedStyle(document.body).getPropertyValue('--divider-color') || 'rgba(160, 167, 181, .3)';
			return {
				legend: {
					display: true,
					labels: {
						fontColor: textColor
					}
				},
				responsive: true,
				scales: {
					yAxes: [{
						ticks: {
							fontColor: textColor
						},
						gridLines: {
							color: gridLinesColor
						}
					}],
					xAxes: [{
						ticks: {
							fontColor: textColor
						},
						gridLines: {
							color: gridLinesColor
						}
					}]
				}
			}
		}
    },
    computed: {
		layoutContainerClass() {
            return [
				'layout-wrapper', 
				'layout-menu-' + this.menuTheme + ' layout-topbar-' + this.topbarTheme, 
				{
					'layout-menu-static': this.menuMode === 'static',
					'layout-menu-overlay': this.menuMode === 'overlay',
					'layout-menu-overlay-active': this.overlayMenuActive,
					'layout-menu-slim': this.menuMode === 'slim',
					'layout-menu-horizontal': this.menuMode === 'horizontal',
					'layout-menu-active': this.menuActive,
					'layout-menu-mobile-active': this.mobileMenuActive,
					'layout-rightmenu-active': this.rightPanelActive,
					'layout-rtl': this.$appState.RTL,
					'p-input-filled': this.$appState.inputStyle === 'filled',
					'p-ripple-disabled': this.$primevue.config.ripple === false
				}
			];
        }
    },
    components: {
        'AppTopBar': AppTopBar,
        'AppInlineMenu': AppInlineMenu,
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
