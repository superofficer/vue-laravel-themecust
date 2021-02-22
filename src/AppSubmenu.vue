<template>
	<ul v-if="items" role="menu">
        <template v-for="(item,i) of items">
            <li v-if="visible(item) && !item.separator" :key="item.label || i" :class="[{'layout-root-menuitem': root, 'active-menuitem': activeIndex === i && !item.disabled}]" role="menuitem">
				<div v-if="root">
					<span class="layout-menuitem-text">{{item.label}}</span>
				</div>
                <router-link v-if="item.to" :to="item.to" :style="item.style" :class="[item.class, 'p-ripple', {'p-disabled': item.disabled}]" :target="item.target" active-class="active-route" exact
                   @mouseenter="onMenuItemMouseEnter(i)" @click="onMenuItemClick($event,item,i)" v-ripple>
                    <i :class="['layout-menuitem-icon', item.icon]"></i>
                    <span class="layout-menuitem-text">{{item.label}}</span>
					<span class="p-badge p-component p-badge-no-gutter" :class="item.badgeStyleClass" v-if="item.badge && !root">{{item.badge}}</span>
                    <i v-if="item.items" class="pi pi-fw pi-angle-down layout-submenu-toggler"></i>
                </router-link>
                <a v-if="!item.to" :href="item.url||'#'" :style="item.style" :class="[item.class, 'p-ripple', {'p-disabled': item.disabled}]" :target="item.target"
                   @click="onMenuItemClick($event,item,i)" @mouseenter="onMenuItemMouseEnter(i)" v-ripple>
                    <i :class="['layout-menuitem-icon', item.icon]"></i>
                    <span class="layout-menuitem-text">{{item.label}}</span>
					<span class="p-badge p-component p-badge-no-gutter" :class="item.badgeStyleClass" v-if="item.badge && !root">{{item.badge}}</span>
                    <i v-if="item.items" class="pi pi-fw pi-angle-down layout-submenu-toggler"></i>
                </a>
				<span class="layout-menuitem-tooltip p-tooltip">
					<span class="layout-menuitem-tooltip-arrow p-tooltip-arrow"></span>
					<span class="layout-menuitem-tooltip-text p-tooltip-text">{{item.label}}</span>
				</span>
                <transition name="layout-menu">
                    <appsubmenu v-show="item.items && (root && (!isSlim() || (isSlim() && activeIndex !== null)) ? true : activeIndex === i)" :items="visible(item) && item.items" @menuitem-click="$emit('menuitem-click', $event)" :menuMode="menuMode"
                            :menuActive="menuActive" :parentMenuItemActive="activeIndex === i"></appsubmenu>
                </transition>
            </li>
            <li class="p-menu-separator" :style="item.style" v-if="visible(item) && item.separator" :key="'separator' + i" role="separator"></li>
        </template>
	</ul>
</template>
<script>
import EventBus from './event-bus';

export default {
	name: 'appsubmenu',
	emits: ['menuitem-click', 'root-menuitem-click'],
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
		menuMode: String,
	},
	data() {
		return {
			activeIndex : null
		}
	},
	mounted() {
		EventBus.on('reset-active-index', () => {
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
			return (this.menuMode === 'horizontal' || this.menuMode === 'slim');
		},
		isMobile() {
			return window.innerWidth <= 640;
		},
        visible(item) {
            return (typeof item.visible === 'function' ? item.visible() : item.visible !== false);
        },
		getInk(el) {
			for (let i = 0; i < el.children.length; i++) {
				if (typeof el.children[i].className === 'string' && el.children[i].className.indexOf('p-ink') !== -1) {
					return el.children[i];
				}
			}
			return null;
		},
		removeClass(element, className) {
			if (element.classList)
				element.classList.remove(className);
			else
				element.className = element.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
		},
		isSlim() {
			return this.menuMode === 'slim';
		},
	}
}
</script>

<style scoped>

</style>
