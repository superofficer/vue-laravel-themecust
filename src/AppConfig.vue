<template>
    <div :class="containerClass">
        <a href="#" class="layout-config-button" id="layout-config-button" @click="toggleConfigurator">
            <i class="pi pi-cog"></i>
        </a>
        <a href="#" class="layout-config-close" @click="hideConfigurator">
            <i class="pi pi-times"></i>
        </a>
        <div class="layout-config-content">

            <h5 style="margin-top: 0">Input Style</h5>
            <div class="p-formgroup-inline">
                <div class="p-field-radiobutton">
                    <RadioButton id="input_outlined" name="inputstyle" value="outlined" :modelValue="value" @input="onChange" />
                    <label for="input_outlined">Outlined</label>
                </div>
                <div class="p-field-radiobutton">
                    <RadioButton id="input_filled" name="inputstyle" value="filled" :modelValue="value" @input="onChange" />
                    <label for="input_filled">Filled</label>
                </div>
            </div>

            <h5>Ripple Effect</h5>
            <InputSwitch :value="rippleActive" @input="onRippleChange"  />

            <h5>Menu Type</h5>
            <div class="p-field-radiobutton">
                <RadioButton id="static" name="layoutMode" value="static" v-model="d_layoutMode" @change="changeMenuMode($event, 'static')" />
                <label for="static">Static</label>
            </div>
            <div class="p-field-radiobutton">
                <RadioButton id="overlay" name="layoutMode" value="overlay" v-model="d_layoutMode" @change="changeMenuMode($event, 'overlay')" />
                <label for="overlay">Overlay</label>
            </div>
            <div class="p-field-radiobutton">
                <RadioButton id="horizontal" name="layoutMode" value="horizontal" v-model="d_layoutMode" @change="changeMenuMode($event, 'horizontal')" />
                <label for="horizontal">Horizontal</label>
            </div>
            <div class="p-field-radiobutton">
                <RadioButton id="slim" name="layoutMode" value="slim" v-model="d_layoutMode" @change="changeMenuMode($event, 'slim')" />
                <label for="slim">Slim</label>
            </div>

            <h5>Menu Colors</h5>
            <div class="p-field-radiobutton">
                <RadioButton id="dark" name="darkMenu" :value="true" v-model="d_darkMenu" @change="changeMenuColor($event, true)" />
                <label for="dark">Dark</label>
            </div>

            <div class="p-field-radiobutton">
                <RadioButton id="light" name="darkMenu" :value="false" v-model="d_darkMenu" @change="changeMenuColor($event, false)" />
                <label for="light">Light</label>
            </div>

            <h5>User Profile</h5>
            <div class="p-field-radiobutton">
                <RadioButton id="inline" name="darkMenu" :disabled="layoutMode === 'horizontal'" value="inline" v-model="d_profileMode" @change="changeProfileMode($event, 'inline')" />
                <label for="inline">Inline</label>
            </div>

            <div class="p-field-radiobutton">
                <RadioButton id="top" name="darkMenu" :disabled="layoutMode === 'horizontal'" value="top" v-model="d_profileMode" @change="changeProfileMode($event, 'top')" />
                <label for="top">Overlay</label>
            </div>

            <h5>Themes</h5>
            <div class="layout-themes">
                <div v-for="t of themes" :key="t.name">
                    <a href="#" @click="changeTheme($event, t.file)">
                        <img :src="'assets/layout/images/configurator/theme/' + t.image" :alt="t.name">
                        <i class="pi pi-check" v-if="theme === t.file"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        layoutMode: {
            type: String,
            default: 'static'
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
            active: false,
            d_layoutMode: this.layoutMode,
            d_darkMenu: this.darkMenu,
            d_profileMode: this.profileMode
        }
    },
    watch: {
        $route() {
            if (this.active) {
                this.active = false;
                this.unbindOutsideClickListener();
            }
        },
        layoutMode(newValue) {
            this.d_layoutMode = newValue;
        },
        darkMenu(newValue) {
            this.d_darkMenu = newValue;
        },
        profileMode(newValue) {
            this.d_profileMode = newValue;
        }
    },
    outsideClickListener: null,
    methods: {
        onChange(value) {
            this.$appState.inputStyle = value;
        },
        onRippleChange(value) {
            this.$primevue.ripple = value;
        },
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
        },
        rippleActive() {
            return this.$primevue.ripple;
        },
        value() {
            return this.$appState.inputStyle;
        }
    }
}
</script>
