<template>
    <div :class="containerClass">
        <div class="layout-config-content">
            <a href="#" class="layout-config-button" id="layout-config-button" @click="toggleConfigurator">
                <i class="pi-md-settings"></i>
            </a>
            <a href="#" class="layout-config-close" @click="hideConfigurator">
                <i class="pi-md-close"></i>
            </a>
            <TabView>
                <TabPanel header="Menu">
                    <h1>Menu Modes</h1>
                    <div class="panel-items">
                        <div class="panel-item">
                            <a href="#" @click="changeMenuMode($event, 'static')">
                                <img src="assets/layout/images/configurator/menu/ultima-static.png" alt="ultima">
                                <i class="pi-md-check" v-if="layoutMode === 'static'"></i>
                            </a>
                            <span>Static</span>
                        </div>
                        <div class="panel-item">
                            <a href="#" @click="changeMenuMode($event, 'overlay')">
                                <img src="assets/layout/images/configurator/menu/ultima-overlay.png" alt="ultima">
                                <i class="pi-md-check" v-if="layoutMode === 'overlay'"></i>
                            </a>
                            <span>Overlay</span>
                        </div>
                        <div class="panel-item">
                            <a href="#" @click="changeMenuMode($event, 'horizontal')">
                                <img src="assets/layout/images/configurator/menu/ultima-horizontal.png" alt="ultima">
                                <i class="pi-md-check" v-if="layoutMode === 'horizontal'"></i>
                            </a>
                            <span>Horizontal</span>
                        </div>
                        <div class="panel-item">
                            <a href="#" @click="changeMenuMode($event, 'slim')">
                                <img src="assets/layout/images/configurator/menu/ultima-slim.png" alt="ultima">
                                <i class="pi-md-check" v-if="layoutMode === 'slim'"></i>
                            </a>
                            <span>Slim</span>
                        </div>
                    </div>

                    <h1>Menu Colors</h1>
                    <div class="panel-items">
                        <div class="panel-item">
                            <a href="#" @click="changeMenuColor($event, true)">
                                <img src="assets/layout/images/configurator/menu/ultima-dark.png" alt="ultima">
                                <i class="pi-md-check" v-if="darkMenu === true"></i>
                            </a>
                            <span>Dark</span>
                        </div>
                        <div class="panel-item">
                            <a href="#" @click="changeMenuColor($event, false)">
                                <img src="assets/layout/images/configurator/menu/ultima-static.png" alt="ultima">
                                <i class="pi-md-check" v-if="darkMenu === false"></i>
                            </a>
                            <span>Light</span>
                        </div>
                    </div>
                </TabPanel>

                <TabPanel header="User Profile">
                    <div class="panel-items">
                        <div class="panel-item">
                            <a href="#" :class="{'p-disabled': layoutMode === 'horizontal'}" @click="changeProfileMode($event, 'inline')">
                                <img src="assets/layout/images/configurator/menu/ultima-inline.png" alt="ultima">
                                <i class="pi-md-check" v-if="profileMode === 'inline'"></i>
                            </a>
                            <span>Inline</span>
                        </div>
                        <div class="panel-item">
                            <a href="#" :class="{'p-disabled': layoutMode === 'horizontal'}" @click="changeProfileMode($event, 'top')">
                                <img src="assets/layout/images/configurator/menu/ultima-popup.png" alt="ultima">
                                <i class="pi-md-check" v-if="profileMode === 'top'"></i>
                            </a>
                            <span>Overlay</span>
                        </div>
                    </div>
                </TabPanel>

                <TabPanel header="Themes">
                    <div class="panel-items">
                        <div class="panel-item" v-for="t of themes" :key="t.name">
                            <a href="#" @click="changeTheme($event, t.file)" class="layout-config-option">
                                <img :src="'assets/layout/images/configurator/theme/' + t.image" :alt="t.name">
                                <i class="pi-md-check" v-if="theme === t.file"></i>
                            </a>
                        </div>
                    </div>
                </TabPanel>
            </TabView>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        layoutMode: {
            type: String,
            default: 'slim'
        },
        darkMenu: {
            type: Boolean,
            default: true
        },
        profileMode: {
            type: String,
            default: 'inline'
        },
        theme: {
            type: String,
            default: 'indigo'
        },
        themes: {
            type: Array,
            default: null
        }
    },
    data() {
        return {
            active: false
        }
    },
    watch: {
        $route() {
            if (this.active) {
                this.active = false;
                this.unbindOutsideClickListener();
            }
        }
    },
    outsideClickListener: null,
    methods: {
        toggleConfigurator(event) {
            this.active = !this.active;
            event.preventDefault();

            if (this.active)
                this.bindOutsideClickListener();
            else
                this.unbindOutsideClickListener();
        },
        hideConfigurator(event) {
            this.active = false;
            this.unbindOutsideClickListener();
            event.preventDefault();
        },
        changeMenuMode(event, layoutMode) {
            this.$emit('menu-mode-change', layoutMode);
            event.preventDefault();
        },
        changeMenuColor(event, menuColor) {
            this.$emit('menu-color-change', menuColor);
            event.preventDefault();
        },
        changeProfileMode(event, profileMode) {
            this.$emit('profile-mode-change', profileMode);
            event.preventDefault();
        },
        changeTheme(event, theme) {
            this.$emit('theme-change', theme);
            event.preventDefault();
        },
        bindOutsideClickListener() {
            if (!this.outsideClickListener) {
                this.outsideClickListener = (event) => {
                    if (this.active && this.isOutsideClicked(event)) {
                        this.active = false;
                    }
                };
                document.addEventListener('click', this.outsideClickListener);
            }
        },
        unbindOutsideClickListener() {
            if (this.outsideClickListener) {
                document.removeEventListener('click', this.outsideClickListener);
                this.outsideClickListener = null;
            }
        },
        isOutsideClicked(event) {
            return !(this.$el.isSameNode(event.target) || this.$el.contains(event.target));
        }
    },
    computed: {
        containerClass() {
            return ['layout-config', {'layout-config-active': this.active}];
        }
    }
}
</script>
