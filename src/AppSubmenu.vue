<template>
	<ul v-if="items">
		<li v-for="(item,i) of items" :key="item.label || i" :class="[item.badgeStyleClass,{'active-menuitem': activeIndex === i && !item.to}]">
            <router-link v-if="item.to" :to="item.to" :class="[{'active-menuitem-routerlink': activeIndex === i}]" @click.native="onMenuItemClick($event,item,i)"
                    :target="item.target" exact @mouseenter.native="onMenuItemMouseEnter(i)">
                <i class="material-icons">{{item.icon}}</i>
                <span>{{item.label}}</span>
                <span v-if="item.badge" class="menuitem-badge">{{item.badge}}</span>
                <i v-if="item.items" class="material-icons submenu-icon">keyboard_arrow_down</i>
            </router-link>
            <a v-if="!item.to" class="ripplelink" :href="item.url" @click="onMenuItemClick($event,item,i)" target="item.target" @mouseenter="onMenuItemMouseEnter(i)">
                <i class="material-icons">{{item.icon}}</i>
                <span>{{item.label}}</span>
                <span v-if="item.badge" class="menuitem-badge">{{item.badge}}</span>
                <i v-if="item.items" class="material-icons submenu-icon">keyboard_arrow_down</i>
            </a>
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

			if (this.root) {
				this.$emit('root-menuitem-click', {
					originalEvent: event,
					isSameIndex: index === this.activeIndex
				});
			}

			this.activeIndex = index === this.activeIndex ? null : index;

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