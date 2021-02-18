<template>
    <Login v-if="$route.path === '/login'" />
    <Error v-else-if="$route.path === '/error'" />
    <Access v-else-if="$route.path === '/access'" />
    <NotFound v-else-if="$route.path === '/notfound'" />
    <Landing v-else-if="$route.path === '/landing'" />
    <ContactUs v-else-if="$route.path === '/contactus'" />
    <App :topbarTheme="topbarTheme" :layoutMode="layoutMode" :menuTheme="menuTheme" @menu-color-change="onMenuColorChange" @topbar-theme="onTopbarThemeChange" v-else />
</template>

<script>
    import App from './App.vue';
    import Error from './pages/Access';
    import Access from './pages/Access';
    import Login from './pages/Login';
    import NotFound from './pages/NotFound';
    import Landing from './pages/Landing';
    import ContactUs from './pages/ContactUs';

	export default {
        provide() {
            return {
                layoutMode: this.layoutMode,
            }
        },
        data() {
            return {
                theme: 'blue',
                layoutMode: 'light',
                topbarTheme: 'blue',
                menuTheme: 'light',
            }
        },
        methods: {
            onThemeChange(theme) {
                this.theme = theme;
            },
            onLayoutChange(layout) {
                this.layout = layout;
            },
            onTopbarThemeChange(theme) {
                this.topbarTheme = theme.name;

                const logo = document.getElementById('logo');
    
                if (theme.name == 'white' || theme.name == 'yellow' || theme.name == 'amber'  || theme.name == 'orange' || theme.name == 'lime') {
                    logo.src = 'assets/layout/images/logo-dark.svg';
                }
                else {
                    logo.src = 'assets/layout/images/logo-light.svg';
                }
            },
            onMenuTheme(menuTheme) {
                this.menuTheme = menuTheme.name;
            },
            onMenuColorChange(menuColor) {
                this.layoutMode = menuColor;

                this.$appState.inputStyle = menuColor === 'dark' ? 'filled' : 'outlined';

                if (menuColor === 'dark') {
                    this.menuTheme = 'dark';
                    this.topbarTheme = 'dark';
                }
                else {
                    this.menuTheme = 'light';
                    this.topbarTheme = 'blue';
                }

                const layoutLink = document.getElementById('layout-css');
                const layoutHref = 'assets/layout/css/layout-' + this.layoutMode + '.css';
                this.replaceLink(layoutLink, layoutHref);

                const themeLink = document.getElementById('theme-css');
                const urlTokens = themeLink.getAttribute('href').split('/');
                urlTokens[urlTokens.length - 1] = 'theme-' + this.layoutMode + '.css';
                const newURL = urlTokens.join('/');

                this.replaceLink(themeLink, newURL);
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
        },
        components: {
            "App": App,
            "Error": Error,
            "Access": Access,
            "Login": Login,
            "NotFound": NotFound,
            "Landing": Landing,
            "ContactUs": ContactUs
        }
	}
</script>

<style scoped>
</style>
