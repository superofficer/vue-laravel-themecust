<template>
    <div class="p-grid">
        <div class="p-col-12">
            <div class="card docs">
                <h1>Current Version</h1>
                <p>Vue 2.6.0 and PrimeVue 1.1.x</p>

                <h1>Getting Started</h1>
                <p>Ultima is an application template for Vue based on the <a href="https://cli.vuejs.org/">Vue CLI</a> that provides out-of-the-box standard
                tooling for Vue projects. If you don't have CLI installed already run the following command.</p>
<pre>
npm install -g @vue/cli

# OR

yarn global add @vue/cli
</pre>

                <p>Once CLI is ready in your system, extract the contents of the Ultima zip file distribution, cd to the directory and install the libraries from npm.</p>

<pre>
npm install

# OR

yarn
</pre>

                <p>Final step is running the application using the serve script and navigate to <b>http://localhost:8080/</b> to view the application.
                    That is it, you may now start with the development of your application using the Ultima template.</p>

<pre>
npm run serve
</pre>

                <h1>Vue CLI Scripts</h1>
                <p>Following commands are derived from create-app-app.</p>
<pre>
"npm run serve": Starts the development server
"npm run build": Builds the application for deployment.
"npm run lint": Executes the lint checks.
"npm run test:unit": Runs the tests.
</pre>

                <h1>Structure</h1>
                <p>Ultima consists of 2 main parts; the application layout and the resources. <i>App.vue</i> inside src folder is the main component containing the template for the base layout
                    whereas required resources such as SASS structure for the layout are placed inside the <b>src/assets/layout</b> folder.</p>

                <h1>Template</h1>
                <p>Main layout is the template of the <i>App.vue</i>, it is divided into a couple of child components such as topbar, content, menu and footer. Here is template of the
                    <i>App.vue</i> component that implements the logic such as menu state, layout modes and other configurable options.
                </p>
<CodeHighlight>
<template v-pre>
&lt;template&gt;
    &lt;div class="layout-wrapper" @click="onDocumentClick"&gt;
        &lt;div :class="layoutContainerClass"&gt;
            &lt;AppTopBar :profileMode="profileMode" :horizontal="layoutMode==='horizontal'" :topbarMenuActive="topbarMenuActive" :activeTopbarItem="activeTopbarItem"
                       @menubutton-click="onMenuButtonClick" @topbar-menubutton-click="onTopbarMenuButtonClick" @topbaritem-click="onTopbarItemClick" @rightpanel-button-click="onRightPanelButtonClick"&gt;&lt;/AppTopBar&gt;

            &lt;transition name="layout-menu-container"&gt;
                &lt;div :class="menuClass" @click="onMenuClick"&gt;
                    &lt;div class="menu-scroll-content"&gt;
                        &lt;AppInlineProfile v-if="profileMode === 'inline' &amp;&amp; layoutMode !== 'horizontal'"&gt;&lt;/AppInlineProfile&gt;
                        &lt;AppMenu :model="menu" :layoutMode="layoutMode" :active="menuActive" @menuitem-click="onMenuItemClick" @root-menuitem-click="onRootMenuItemClick"&gt;&lt;/AppMenu&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/transition&gt;

            &lt;div class="layout-main"&gt;

                &lt;AppBreadcrumb&gt;&lt;/AppBreadcrumb&gt;

                &lt;div class="layout-content"&gt;
                    &lt;router-view /&gt;

                    &lt;AppFooter /&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;AppConfig :layoutMode.sync="layoutMode" @menu-mode-change="onMenuModeChange" :darkMenu.sync="darkMenu" @menu-color-change="onMenuColorChange"
                       :profileMode.sync="profileMode" @profile-mode-change="onProfileModeChange" :theme="theme" :themes="themeColors" @theme-change="changeTheme"&gt;&lt;/AppConfig&gt;

            &lt;AppRightPanel :expanded="rightPanelActive" @content-click="onRightPanelClick"&gt;&lt;/AppRightPanel&gt;

            &lt;div class="layout-mask"&gt;&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/template&gt;
</template>
</CodeHighlight>

                <h1>Menu</h1>
                <p>Menu is a separate component defined in <i>AppMenu.vue</i> file. In order to define the menuitems,
                    navigate to data section of <i>App.vue</i> file and define your own model as a nested structure using the menu property.
                    Here is the menu component from the demo application. Notice that menu object is bound to the model property of AppMenu component as shown above.</p>

<div style="overflow: auto; height: 400px; margin-bottom: 10px">
<CodeHighlight lang="js">
data() &#123;
    return &#123;
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
                label: 'Components', icon: 'list', badge: '2', badgeStyleClass: 'teal-badge',
                items: [
                    {label: 'Sample Page', icon: 'desktop_mac', to: '/sample'},
                    {label: 'Forms', icon: 'input', to: '/forms'},
                    {label: 'Data', icon: 'grid_on', to: '/data'},
                    {label: 'Panels', icon: 'content_paste', to: '/panels'},
                    {label: 'Overlays', icon: 'content_copy', to: '/overlays'},
                    {label: 'Menus', icon: 'menu', to: '/menus'},
                    {label: 'Messages', icon: 'message',to: '/messages'},
                    {label: 'Charts', icon: 'insert_chart', to: '/charts'},
                    {label: 'Misc', icon: 'toys', to: '/misc'}
                ]
            },
            {
                label: 'Template Pages', icon: 'get_app',
                items: [
                    {label: 'Empty Page', icon: 'hourglass_empty', to: '/empty'},
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
    &#125;
&#125;
</CodeHighlight>
</div>


                <p>Dependencies of Ultima are listed below and needs to be added to package.json. Ultima has no direct dependency, even PrimeVue components
                    are an optional dependency.</p>

                <pre>
{
    "primevue": "^1.0.0",         //optional: PrimeVue components
    "primeicons": "2.0.0",             //optional: Icons
    "primeflex": "1.0.0",              //optional: Grid system
}
</pre>

                <h1>Theme</h1>
                <p>Ultima provides 12 PrimeVue themes out of the box, setup of a theme simple including the css of theme to your page that are located inside public/assets/sass/theme folder.</p>
                <p>In the demo application, theme css file is added to the index page to enable themeswitcher functionality however since VueCLI supports
                    SASS compilation via webpack, you may also import the sass of the theme to App.vue as well.</p>
                <ul>
                    <li>theme-blue-grey</li>
                    <li>theme-blue</li>
                    <li>theme-brown</li>
                    <li>theme-cyan</li>
                    <li>theme-dark-blue</li>
                    <li>theme-dark-green</li>
                    <li>theme-green</li>
                    <li>theme-grey</li>
                    <li>theme-indigo</li>
                    <li>theme-purple-amber</li>
                    <li>theme-purple-cyan</li>
                    <li>theme-teal</li>
                </ul>

                <p>A custom theme can be developed by the following steps.</p>
                <ul>
                    <li>Choose a custom theme name such as theme-myown.</li>
                    <li>Create a file named theme-myown.scss under <i>public/assets/sass/theme folder</i>.</li>
                    <li>Define the variables listed below and import the <i>/sass/theme/_theme.scss</i> file.</li>
                    <li>Build the scss to generate css.</li>
                    <li>Include the theme file to your application.</li>
                </ul>

                <p>Here are the variables required to create a theme which are the primary and accent colors along with their shades.</p>

<CodeHighlight lang="css">
$primaryColor: #3F51B5;
$primaryDarkColor: #283593;
$primaryLightColor: #9fa8da;
$primaryTextColor: #ffffff;
$accentColor: #E91E63;
$accentDarkColor: #ad1457;
$accentLightColor: #f48fb1;
$accentTextColor: #ffffff;

@import '../sass/theme/_theme';
</CodeHighlight>

                <p>If you prefer to compile manually, an example sass command to compile the css would be;</p>

<pre>
sass public/assets/theme-myown/theme.scss:public/assets/theme-myown/theme.css
</pre>

                <p>Watch mode is handy to avoid compiling everytime when a change is made, instead use the following command
                so that sass generates the file whenever you make a customization. This builds all css files whenever a change is made to any scss file.</p>
<pre>
sass --watch public/assets:public/assets
</pre>


                <p>Same can also be applied to layout itself;</p>
                <ul>
                    <li>Choose a layout name such as layout-myown.</li>
                    <li>Create an empty file named layout-myown.scss inside <i>assets/layout/css</i> folder.</li>
                    <li>Define the variables listed below and import the <i>../sass/layout/_layout.scss</i> file.</li>
                    <li>Build the scss to generate css</li>
                    <li>Serve the css by importing it using a link tag or a bundler.</li>
                </ul>

                <p>Here are the variables required to create a layout, you may need to change the last line according to the
                    relative path of the sass folder in your application.</p>
<CodeHighlight lang="css">
$primaryColor: #3F51B5;
$primaryDarkColor: #283593;
$primaryLightColor: #9fa8da;
$accentColor: #E91E63;
$accentDarkColor: #ad1457;
$accentLightColor: #f48fb1;
$accentTextColor: #ffffff;
$darkMenuBgColor: #424242;
$darkMenuHoverColor: #676767;
$darkMenuRouterLinkActiveColor: #9fa8da;
$lightMenuRouterLinkActiveColor: #3F51B5;
$horizontalLightMenuRouterLinkActiveColor: #9fa8da;

@import '../../sass/layout/_layout';
</CodeHighlight>

                <p>In case you would like to customize the shared variables, the _variables.scss files are where the options are defined for layout and theme.</p>

                <h3>sass/_variables.scss</h3>
<CodeHighlight lang="css">
/* Common */
//general
$fontSize:14px;
$fontFamily:"Roboto","Helvetica Neue",sans-serif;
$textColor:#212121;
$textSecondaryColor:#616161;
$borderRadius:2px;
$letterSpacing:.25px;
$transitionDuration:.2s;

//icons
$iconWidth:20px;
$iconHeight:20px;
$iconFontSize:20px;

//list item hover
$hoverBgColor:#e8e8e8;
$hoverTextColor:#000000;

$dividerColor:#dbdbdb;
$dividerLightColor:#f8f8f8;
</CodeHighlight>

                <h3>sass/layout/_variables.scss</h3>
<CodeHighlight lang="css">
@import '../_variables';

$bodyBgColor:#f7f7f7;
$maskBgColor:#424242;
$topbarButtonColor:#ffffff;
$topbarButtonHoverColor:#e8e8e8;
$topbarSearchBorderColor:#ffffff;
$topbarSearchColor:#ffffff;
$layoutMenuBgColor:#ffffff;
$layoutMenuScrollbarBgColor:#aaaaaa;
$layoutMenuItemIconColor:#757575;
$layoutMenuItemActiveColor:#e8e8e8;
$rightPanelBgColor:#ffffff;
$topbarSubmenuBgColor:#ffffff;
$profileMenuBorderBottomColor:#d6d5d5;
$profileMenuDarkBorderBottomColor:#545454;
$darkMenuColor:#ffffff;
$slimMenuTooltipColor:#ffffff;
$activeMenuItemBadgeColor:#ffffff;
$activeMenuItemBadgeTextColor:#212121;
$lineHeight:18px;
</CodeHighlight>

                <h3>sass/theme/_variables.scss</h3>
<CodeHighlight lang="css">
@import '../variables';

$headerPadding:.714em 1em;
$headerTextColor:#ffffff;
$headerFontWeight:500;

$contentPadding:.857em 1em;
$contentBorderColor:#d8d8d8;
$contentBgColor:#ffffff;

$inputBorderColor:#bdbdbd;
$inputInvalidBorderColor:#e62a10;
$inputBgColor:transparent;
$inputErrorTextColor:#e62a10;
$inputHeaderPadding:.714em 1em;
$inputBorderErrorColor:#e62a10;
$inputFieldLabelTextColor:#999999;
$inputFieldBoxBgColor:#f7f7f7;
$inputFieldFillBgColor:#f7f7f7;
$inputAutoFillBorderColor:#bdbdbd;
$textboxBgColor:#f7f7f7;

//inputs with lists
$inputListPadding: .5em 0;

//groups
$inputGroupBorderColor:#bdbdbd;
$inputGroupBgColor:transparent;
$inputGroupTextColor:$textSecondaryColor;
$inputGroupIconColor:$textSecondaryColor;
$inputGroupAddonMinWidth:2*$fontSize;
$checkboxWidth:18px;
$checkboxHeight:18px;
$inputGroupPadding:2px 2px 1px 2px;
$inputGroupIconFontSize: 1.5em;

//panels
$accordionHeaderBgColor:$primaryColor;
$accordionHeaderTextColor:$primaryTextColor;
$accordionHeaderHoverBgColor:$primaryDarkColor;
$accordionHeaderHoverTextColor:$primaryTextColor;

$panelContentLineHeight:1.5;

$buttonTextColor:#ffffff;

$listItemPadding:.571em .857em;

$radioButtonBorderColor:#757575;
$checkboxBorderColor:#757575;

$errorMessageFontSize:11px;
$errorMessageIconFontSize:13px;

//data
$dataTableHeaderPadding:.857em;
$dataTableCellPadding:.714em .857em;
$dataTableRowBgColorEven:#f4f4f4;
$paginatorPadding:.714em 1em;

//menus
$menuitemPadding:.571em .857em;
$menuListPadding: .5em 0;

//messages
$infoMessageBgColor:#2196F3;
$infoMessageTextColor:#ffffff;
$warnMessageBgColor:#ffc107;
$warnMessageTextColor:#212121;
$errorMessageBgColor:#e62a10;
$errorMessageTextColor:#ffffff;
$successMessageBgColor:#8BC34A;
$successMessageTextColor:#ffffff;

//carousel
$carouselNavButtonsBgColor: #ffffff;
$carouselNavButtonsBorder: none;
$carouselNavButtonsBorderRadius: 50%;
$carouselNavButtonsMargin: .2em;
$carouselNavButtonsColor: $textColor;
$carouselNavButtonsHoverBgColor: $hoverBgColor;
$carouselNavButtonsHoverColor: $hoverTextColor;
$carouselNavButtonsHoverBorderColor: none;
$carouselNavButtonsTransition: color $transitionDuration;
$carouselDotIconWidth: 20px;
$carouselDotIconHeight: 6px;
$carouselDotIconBgColor: #b2c1cd;
$carouselDotIconMargin: 0 .2em;
$carouselActiveDotIconBgColor: $primaryColor;
</CodeHighlight>

                <p>In the demo app layout and theme css files are defined using link tags in index.html so the demo can switch them on
                    the fly by changing the path however if this is not a requirement, you may also import them in App.vue so that webpack adds them to the bundle.</p>

                <h1>Menu Item Badges</h1>
                <p>Badges are numerical indicators associated with a link.
                    The badge property is the value of the badge and badgeStyleClass is style class of the badge.</p>
                <pre>
label: 'Components', icon: 'list', badge: '2', badgeClassName: 'red-badge'
</pre>
                <p>Default badge uses the accent color of ultima layout and there are three more alternative colors.</p>
                <ul>
                    <li>red-badge</li>
                    <li>purple-badge</li>
                    <li>teal-badge</li>
                </ul>

                <h1>Menu Modes</h1>
                <p>Menu has 4 modes, static, overlay, slim and horizontal. Main layout container element in App.vue is used to define which mode to use by adding specific classes. List
                    below indicates the style classes for each mode.</p>

                <ul>
                    <li>Static: "layout-wrapper menu-layout-static"</li>
                    <li>Overlay: "layout-wrapper menu-layout-overlay"</li>
                    <li>Slim: "layout-wrapper menu-layout-slim"</li>
                    <li>Horizontal: "layout-wrapper menu-layout-horizontal"</li>
                </ul>

                <p>For example to create a horizontal menu, the div element should be in following form;</p>
                <pre>
&lt;div className="layout-wrapper menu-layout-static menu-layout-horizontal"&gt;
</pre>

                <p>It is also possible to leave the choice to the user by keeping the preference at a component and using an expression to bind it so that user can switch between modes. Sample
                    application has an example implementation of such use case. Refer to App.vue for an example.</p>

                <h1>Dark Menu</h1>
                <p>Default color scheme of menu is light and alternative dark mode can be activated by adding <i>layout-menu-dark</i> style class to the menu container.</p>

                <pre>
&lt;div className="layout-menu layout-menu-dark"&gt;
</pre>

                <h1>Profile Modes</h1>
                <p>There are two possible locations for the user profile menu, first option is inline located inside the main menu and second option is the topbar menu. For inline mode,
                    profile content should be placed above the menu and for inline mode content goes in topbar-items list. The sample demo application provides examples for
                    both cases.</p>

                <h1>Utilites</h1>
                <p>Ultima provides various helper features such as material iconset compatible with PrimeNG components and helper classes. Visit utils page for details.</p>

                <h1>PrimeFlex Grid System</h1>
                <p>Ultima uses PrimeFlex Grid System throughout the samples, although any Grid library can be used we suggest using PrimeFlex as your grid system as it is well tested and supported by PrimeVue. PrimeFlex is
                    available at npm and defined at package.json of Ultima so that it gets installed by default.</p>

                <h1>Customizing Styles</h1>
                <p>It is suggested to add your customizations in the following sass files under the override folder instead of adding them to the
                    scss files under sass folder to avoid maintenance issues after an update.</p>

                <ul>
                    <li><b>_layout_variables</b>: Variables of the layout.</li>
                    <li><b>_layout_styles</b>: Styles for the layout.</li>
                    <li><b>_theme_variables</b>: Variables of the theme.</li>
                    <li><b>_theme_styles</b>: Styles for the theme.</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    import CodeHighlight from './CodeHighlight';

    export default {
        components: {
            'CodeHighlight': CodeHighlight
        }
    }
</script>

<style scoped lang="scss">
    .docs pre {
        font-family: monospace;
        background-color: #323e4b;
        color: #ffffff;
        padding: 1em;
        font-size: 14px;
        border-radius: 3px;
    }

    .docs i {
        background-color: #fcf2a7;
        font-family: monaco,Consolas,Lucida Console,monospace;
        font-weight: 700;
        font-style: normal;
        font-size: 14px;
        padding: 2px;
    }

    .docs li {
        line-height: 1.5;
    }
</style>
