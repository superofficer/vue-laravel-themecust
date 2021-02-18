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
    import Error from './pages/Error';
    import Access from './pages/Access';
    import Login from './pages/Login';
    import NotFound from './pages/NotFound';
    import Landing from './pages/Landing';
    import ContactUs from './pages/ContactUs';

	export default {
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
            }
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
