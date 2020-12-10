<template>
	<ul v-if="items" role="menu">
        <template v-for="(item,i) of items">
            <li v-if="visible(item) && !item.separator" :key="item.label || i" :class="[item.badgeStyleClass,{'active-menuitem': activeIndex === i && !item.to && !item.disabled}]" role="none">
                <router-link v-if="item.to" :to="item.to" :style="item.style" :class="[item.class, 'p-ripple', {'p-disabled': item.disabled}]" :target="item.target" exact
                             @mouseenter="onMenuItemMouseEnter(i)" @click="onMenuItemClick($event,item,i)" role="menuitem" v-ripple>
                    <i :class="['layout-menuitem-icon', item.icon]"></i>
                    <span>{{item.label}}</span>
                    <span v-if="item.badge" class="menuitem-badge">{{item.badge}}</span>
                    <i v-if="item.items" class="pi pi-fw pi-angle-down submenu-icon"></i>
                </router-link>
                <a v-if="!item.to" :href="item.url||'#'" :style="item.style" :class="[item.class, 'p-ripple', {'p-disabled': item.disabled}]" :target="item.target"
                   @click="onMenuItemClick($event,item,i)" @mouseenter="onMenuItemMouseEnter(i)" role="menuitem" v-ripple>
                    <i :class="['layout-menuitem-icon', item.icon]"></i>
                    <span>{{item.label}}</span>
                    <span v-if="item.badge" class="menuitem-badge">{{item.badge}}</span>
                    <i v-if="item.items" class="pi pi-fw pi-angle-down submenu-icon"></i>
                </a>
                <div v-if="root" class="layout-menu-tooltip">
                    <div class="layout-menu-tooltip-arrow"></div>
                    <div class="layout-menu-tooltip-text">{{item.label}}</div>
                </div>
                <transition name="layout-submenu-container">
                    <appsubmenu v-show="activeIndex === i" :items="visible(item) && item.items" @menuitem-click="$emit('menuitem-click', $event)" :layoutMode="layoutMode"
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
		layoutMode: String,
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
			else {
				const ink = this.getInk(event.currentTarget);
				if (ink) {
					this.removeClass(ink, 'p-ink-active');
				}
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
		}
	}
}
</script>

<style scoped>

</style>
