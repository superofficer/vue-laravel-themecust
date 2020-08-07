<template>
	<ul v-if="items" role="menu">
		<li v-for="(item,i) of items" :key="item.label || i" :class="[item.badgeStyleClass,{'active-menuitem': activeIndex === i && !item.to}]" role="none">
            <router-link v-if="item.to" :to="item.to" @click.native="onMenuItemClick($event,item,i)" :target="item.target" exact
                         @mouseenter.native="onMenuItemMouseEnter(i)" role="menuitem">
                <i :class="item.icon"></i>
                <span>{{item.label}}</span>
                <span v-if="item.badge" class="menuitem-badge">{{item.badge}}</span>
                <i v-if="item.items" class="pi pi-fw pi-angle-down submenu-icon"></i>
            </router-link>
            <a v-if="!item.to" :href="item.url||'#'" @click="onMenuItemClick($event,item,i)" target="item.target" @mouseenter="onMenuItemMouseEnter(i)" role="menuitem">
                <i :class="item.icon"></i>
                <span>{{item.label}}</span>
                <span v-if="item.badge" class="menuitem-badge">{{item.badge}}</span>
                <i v-if="item.items" class="pi pi-fw pi-angle-down submenu-icon"></i>
            </a>
            <div v-if="root" class="layout-menu-tooltip">
                <div class="layout-menu-tooltip-arrow"></div>
                <div class="layout-menu-tooltip-text">{{item.label}}</div>
            </div>
            <transition name="layout-submenu-container">
                <AppSubmenu v-show="activeIndex === i" :items="item.items" @menuitem-click="$emit('menuitem-click', $event)" :layoutMode="layoutMode"
                            :menuActive="menuActive" :parentMenuItemActive="activeIndex === i"></AppSubmenu>
            </transition>
        </li>
	</ul>
</template>
<script>
import EventBus from './event-bus';

export default {
	name: 'AppSubmenu',
	props: {
		items: Array,
		root: {
			type: Boolean,
			default: false
		},
		menuActive: {
			type: Boolean,
			default: false
		},
		parentMenuItemActive: {
			type: Boolean,
			default: false
		},
		layoutMode: String,
	},
	data() {
		return {
			activeIndex : null
		}
	},
	mounted() {
		EventBus.$on('reset_active_index', () => {
			if(this.isHorizontalOrSlim() && !this.isMobile()) {
				this.activeIndex = null;
			}
		});
	},
	methods: {
		onMenuItemClick(event, item, index) {
			if (item.disabled) {
				event.preventDefault();
				return;
			}

			//execute command
			if (item.command) {
                item.command({originalEvent: event, item: item});
                event.preventDefault();
			}

            if (item.items) {
                event.preventDefault();
            }

			if (this.root) {
				this.$emit('root-menuitem-click', {
					originalEvent: event,
					isSameIndex: index === this.activeIndex
				});
			}

            if (item.items) {
                this.activeIndex = index === this.activeIndex ? null : index;
            }

			this.$emit('menuitem-click', {
				originalEvent: event,
				item: item
			});
		},
		onMenuItemMouseEnter(index) {
			if(this.root && this.menuActive && this.isHorizontalOrSlim() && !this.isMobile()) {
				this.activeIndex =  index;
			}
        },
		isHorizontalOrSlim() {
			return (this.layoutMode === 'horizontal' || this.layoutMode === 'slim');
		},
		isMobile() {
			return window.innerWidth <= 640;
		}
	},
	components: {
		"AppSubmenu": this
	}
}
</script>

<style scoped>

</style>
