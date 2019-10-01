<template>
    <div class="p-grid">
        <div class="p-col-12">
            <div class="card docs">
                <h1>Current Version</h1>
                <p>Vue 2.6.0 and PrimeVue 1.0.x</p>

                <h1>Getting Started</h1>
                <p>Sapphire is an application template for Vue based on the <a href="https://cli.vuejs.org/">Vue CLI</a> that provides out-of-the-box standard
                tooling for Vue projects. If you don't have CLI installed already run the following command.</p>
<pre>
npm install -g @vue/cli

# OR

yarn global add @vue/cli
</pre>

                <p>Once CLI is ready in your system, extract the contents of the Sapphire zip file distribution, cd to the directory and install the libraries from npm.</p>  

<pre>
npm install

# OR

yarn
</pre>              

                <p>Final step is running the application using the serve script and navigate to <b>http://localhost:8080/</b> to view the application.
                    That is it, you may now start with the development of your application using the Sapphire template.</p>

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
                <p>Sapphire consists of 2 main parts; the application layout and the resources. <i>App.vue</i> inside src folder is the main component containing the template for the base layout
                    whereas required resources such as SASS structure for the layout are placed inside the <b>src/assets/layout</b> folder.</p>

                <h1>Template</h1>
                <p>Main layout is the template of the <i>App.vue</i>, it is divided into a couple of child components such as topbar, content, menu and footer. Here is template of the
                    <i>App.vue</i> component that implements the logic such as menu state, layout modes and other configurable options.
                </p>

<pre>
&lt;template&gt;
    &lt;div :class="containerClass" @click="onWrapperClick"&gt;
        &lt;div class="layout-top"&gt;
            &lt;AppTopBar @menu-click="onMenuClick" @usermenu-button-click="onTopbarUserMenuButtonClick" @usermenu-click="onTopbarUserMenuClick"
                :menuActive="menuActive" :topbarUserMenuActive="topbarUserMenuActive" :model="menu" :horizontal="horizontal" :menuHoverActive="menuHoverActive"
                @sidebar-click="onSidebarClick" @menuitem-click="onMenuItemClick" @root-menuitem-click="onRootMenuItemClick" :isMobile="isMobile"/&gt;

            &lt;div class="layout-topbar-separator"&gt;&lt;/div&gt;

            &lt;AppBreadcrumb&gt;&lt;/AppBreadcrumb&gt;
        &lt;/div&gt;

        &lt;div class="layout-content"&gt;
            &lt;router-view /&gt;
        &lt;/div&gt;

        &lt;AppConfig :topbarSize.sync="topbarSize" :topbarColor.sync="topbarColor" :menuColor.sync="menuColor" :horizontal.sync="horizontal"&gt;&lt;/AppConfig&gt;

        &lt;AppFooter /&gt;

        &lt;div class="layout-mask" v-if="menuActive"&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/template&gt;
</pre>

                <h1>Menu</h1>
                <p>Menu is a separate component defined in <i>AppMenu.vue</i> file based on PrimeNG MenuModel API. In order to define the menuitems,
                    navigate to data section of <i>App.vue</i> file and define your own model as a nested structure using the menu property. 
                    Here is the menu component from the demo application. Notice that menu object is bound to the model property of AppMenu component as shown above.</p>

<pre>
data() &#123;
    return &#123;
        menu : [
            &#123;label: 'Dashboard', icon: 'dashboard', to: '/'&#125;,
            &#123;
                label: 'Components', icon: 'list',
                items: [
                    &#123;label: 'Sample Page', icon: 'desktop_mac', to: '/sample'&#125;,
                    &#123;label: 'Forms', icon: 'input', to: '/forms'&#125;,
                    &#123;label: 'Data', icon: 'grid_on', to: '/data'&#125;,
                    &#123;label: 'Panels', icon: 'content_paste', to: '/panels'&#125;,
                    &#123;label: 'Overlays', icon: 'content_copy', to: '/overlays'&#125;,
                    &#123;label: 'Menus', icon: 'menu', to: '/menus'&#125;,
                    &#123;label: 'Messages', icon: 'message',to: '/messages'&#125;,
                    &#123;label: 'Charts', icon: 'insert_chart', to: '/charts'&#125;,
                    &#123;label: 'Misc', icon: 'toys', to: '/misc'&#125;
                ]
            &#125;,
            &#123;
                label: 'Mega', icon: 'list', badge: 2, mega: true,
                items: [
                    &#123;
                        label: 'Components',
                        items: [
                            &#123;label: 'Sample Page', icon: 'desktop_mac', to: '/sample'&#125;,
                            &#123;label: 'Forms', icon: 'input', to: '/forms'&#125;,
                            &#123;label: 'Data', icon: 'grid_on', to: '/data'&#125;,
                            &#123;label: 'Panels', icon: 'content_paste', to: '/panels'&#125;,
                            &#123;label: 'Overlays', icon: 'content_copy', to: '/overlays'&#125;,
                            &#123;label: 'Menus', icon: 'menu', to: '/menus'&#125;,
                            &#123;label: 'Messages', icon: 'message',to: '/messages'&#125;,
                            &#123;label: 'Charts', icon: 'insert_chart', to: '/charts'&#125;,
                            &#123;label: 'Misc', icon: 'toys', to: '/misc'&#125;
                        ]
                    &#125;,
                    &#123;
                        label: 'Templates',
                        items: [
                            &#123;label: 'Ultima', icon: 'desktop_mac', url: 'https://www.primefaces.org/layouts/ultima-ng' &#125;,
                            &#123;label: 'Serenity', icon: 'desktop_mac', url: 'https://www.primefaces.org/layouts/serenity-ng'&#125;,
                            &#123;label: 'Avalon', icon: 'desktop_mac',  url: 'https://www.primefaces.org/layouts/avalon-ng'&#125;,
                            &#123;label: 'Apollo', icon: 'desktop_mac',  url: 'https://www.primefaces.org/layouts/apollo-ng'&#125;,
                            &#123;label: 'Roma', icon: 'desktop_mac',  url: 'https://www.primefaces.org/layouts/roma-ng'&#125;,
                            &#123;label: 'Babylon', icon: 'desktop_mac',  url: 'https://www.primefaces.org/layouts/babylon-ng'&#125;,
                            &#123;label: 'Manhattan', icon: 'desktop_mac',  url: 'https://www.primefaces.org/layouts/manhattan-ng'&#125;,
                            &#123;label: 'Verona', icon: 'desktop_mac', url: 'https://www.primefaces.org/layouts/verona-ng'&#125;,
                            &#123;label: 'Olympia', icon: 'desktop_mac',  url: 'https://www.primefaces.org/layouts/olympia-ng'&#125;,
                            &#123;label: 'Ecuador', icon: 'desktop_mac',  url: 'https://www.primefaces.org/layouts/ecuador-ng'&#125;
                        ]
                    &#125;,
                    &#123;
                        label: 'Demo',
                        items: [
                            &#123;label: 'PrimeFaces', icon: 'desktop_mac', url: 'https://www.primefaces.org/showcase'&#125;,
                            &#123;label: 'PrimeNG', icon: 'desktop_mac',  url: 'https://www.primefaces.org/primeng'&#125;,
                            &#123;label: 'PrimeReact', icon: 'desktop_mac',  url: 'https://www.primefaces.org/primereact'&#125;
                        ]
                    &#125;
                ]
            &#125;,
            &#123;
                label: 'Pages', icon: 'get_app',
                items: [
                    &#123;label: 'Empty Page', icon: 'hourglass_empty', to: '/empty'&#125;,
                    &#123;label: 'Landing Page', icon: 'flight_land', url: 'assets/pages/landing.html', target: '_blank'&#125;,
                    &#123;label: 'Login Page', icon: 'verified_user', to: '/login'&#125;,
                    &#123;label: 'Error Page', icon: 'error', to: '/error'&#125;,
                    &#123;label: '404 Page', icon: 'error_outline', to: '/notfound'&#125;,
                    &#123;label: 'Access Denied Page', icon: 'security', to: '/access'&#125;
                ]
            &#125;,
            &#123;
                label: 'Hierarchy', icon: 'menu',
                items: [
                    &#123;
                        label: 'Submenu 1', icon: 'subject',
                        items: [
                            &#123;
                                label: 'Submenu 1.1', icon: 'subject',
                                items: [
                                    &#123;label: 'Submenu 1.1.1', icon: 'subject'&#125;,
                                    &#123;label: 'Submenu 1.1.2', icon: 'subject'&#125;,
                                    &#123;label: 'Submenu 1.1.3', icon: 'subject'&#125;,
                                ]
                            &#125;,
                            &#123;
                                label: 'Submenu 1.2', icon: 'subject',
                                items: [
                                    &#123;label: 'Submenu 1.2.1', icon: 'subject'&#125;,
                                    &#123;label: 'Submenu 1.2.2', icon: 'subject'&#125;
                                ]
                            &#125;,
                        ]&#125;,
                        &#123;
                            label: 'Submenu 2', icon: 'subject',
                            items: [
                            &#123;
                                label: 'Submenu 2.1', icon: 'subject',
                                items: [
                                    &#123;label: 'Submenu 2.1.1', icon: 'subject'&#125;,
                                    &#123;label: 'Submenu 2.1.2', icon: 'subject'&#125;,
                                    &#123;label: 'Submenu 2.1.3', icon: 'subject'&#125;,
                                ]
                            &#125;,
                            &#123;
                                label: 'Submenu 2.2', icon: 'subject',
                                items: [
                                    &#123;label: 'Submenu 2.2.1', icon: 'subject'&#125;,
                                    &#123;label: 'Submenu 2.2.2', icon: 'subject'&#125;
                                ]
                            &#125;
                        ]
                    &#125;
                ]
            &#125;,
            &#123;label: 'Utils', icon: 'build',  command:()=>&#123; window.location = "#/utils"&#125;&#125;,
            &#123;label: 'Documentation', icon: 'find_in_page',  command:()=>&#123; window.location = "#/documentation"&#125;&#125;,
            &#123;label: 'Buy Now', icon: 'credit_card', command: () => &#123; window.location = "https://www.primefaces.org/store"&#125;&#125;,
        ]
    &#125;
&#125;
</pre>

                <p>Dependencies of Sapphire are listed below and needs to be added to package.json. Only required
                    dependency is PrimeVue where optional dependencies exist to enable certain components in PrimeVue such as FullCalendar.</p>

                <pre>
{
    "primevue": "^1.0.0-beta.7",         //required: PrimeVue components
}
</pre>

                <h1>Theme</h1>
                <p>Sapphire provides 18 PrimeVue themes out of the box, setup of a theme simple including the css of theme to your page that are located inside public/assets/sass/theme folder.</p>
                <p>In the demo application, theme css file is added to the index page to enable themeswitcher functionality however since VueCLI supports
                    SASS compilation via webpack, you may also import the sass of the theme to App.vue as well.</p>
                <ul>
                    <li>theme-amber</li>
                    <li>theme-blue</li>
                    <li>theme-bluegrey</li>
                    <li>theme-brown</li>
                    <li>theme-cyan</li>
                    <li>theme-deeporange</li>
                    <li>theme-deeppurple</li>
                    <li>theme-gray</li>
                    <li>theme-green</li>
                    <li>theme-indigo</li>
                    <li>theme-lightblue</li>
                    <li>theme-lightgreen</li>
                    <li>theme-lime</li>
                    <li>theme-orange</li>
                    <li>theme-pink</li>
                    <li>theme-purple</li>
                    <li>theme-teal</li>
                    <li>theme-yellow</li>
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

<pre>
$primaryColor:#1E88E5;
$primaryDarkColor:#1565C0;
$primaryLightColor:#42A5F5;
$primaryLightestColor:#E3F2FD;
$primaryTextColor:#ffffff;
$accentColor:#FFB300;
$accentDarkColor: #FF8F00;
$accentLightColor: #FFCA28;
$accentTextColor: #212121;

@import '../sass/theme/_theme';
</pre>

                <p>If you prefer to compile manually, an example sass command to compile the css would be;</p>

<pre>
sass src/assets/theme-myown/theme.scss:src/assets/theme-myown/theme.css
</pre>

                <p>Watch mode is handy to avoid compiling everytime when a change is made, instead use the following command
                so that sass generates the file whenever you make a customization. This builds all css files whenever a change is made to any scss file.</p>
<pre>
sass --watch public/assets:public/assets
</pre>

                <h1>TopBar</h1>
                <p>TopBar comes in 3 sizes; large, medium and small. A specific style class with the layout-top-* prefix is defined at the main container element in order to apply a size. Below are the all 3 options;</p>
<pre>
&lt;div class="layout-container layout-top-small"&gt;
&lt;div class="layout-container layout-top-medium"&gt;
&lt;div class="layout-container layout-top-large"&gt;
</pre>

                <p>Similarly TopBar style theme is also defined at the main container element, template below uses the default blue topbar.</p>
<pre>
&lt;div class="layout-container layout-topbar-blue"&gt;
</pre>

                <p>Full list of topbar options are the following, note that <i>layout-topbar-</i> prefix needs to be added to apply the style such as <b>layout-topbar-midnight</b>.</p>

                <ul>
                    <li>aerial</li>
                    <li>apricot</li>
                    <li>aquarelle</li>
                    <li>architecture</li>
                    <li>ash</li>
                    <li>balloon</li>
                    <li>beach</li>
                    <li>beyoglu</li>
                    <li>bloom</li>
                    <li>blue</li>
                    <li>canvas</li>
                    <li>circuit</li>
                    <li>city</li>
                    <li>classic</li>
                    <li>coffee</li>
                    <li>condo</li>
                    <li>connectionsone</li>
                    <li>connectionstwo</li>
                    <li>crystal</li>
                    <li>dark</li>
                    <li>dawn</li>
                    <li>desert</li>
                    <li>destination</li>
                    <li>disco</li>
                    <li>dock</li>
                    <li>downtown</li>
                    <li>emptiness</li>
                    <li>exposure</li>
                    <li>faraway</li>
                    <li>flamingo</li>
                    <li>flight</li>
                    <li>fluid</li>
                    <li>forest</li>
                    <li>fruity</li>
                    <li>grape</li>
                    <li>hallway</li>
                    <li>harvey</li>
                    <li>hazy</li>
                    <li>highline</li>
                    <li>island</li>
                    <li>jet</li>
                    <li>kashmir</li>
                    <li>light</li>
                    <li>lights</li>
                    <li>lille</li>
                    <li>louisville</li>
                    <li>marley</li>
                    <li>materialone</li>
                    <li>materialtwo</li>
                    <li>midnight</li>
                    <li>mountain</li>
                    <li>mural</li>
                    <li>night</li>
                    <li>norge</li>
                    <li>northern</li>
                    <li>olympic</li>
                    <li>orange</li>
                    <li>palm</li>
                    <li>perfection</li>
                    <li>pine</li>
                    <li>polygons</li>
                    <li>reflection</li>
                    <li>revolt</li>
                    <li>river</li>
                    <li>road</li>
                    <li>rose</li>
                    <li>royal</li>
                    <li>sandiego</li>
                    <li>seagull</li>
                    <li>sky</li>
                    <li>skyline</li>
                    <li>skyscaper</li>
                    <li>snow</li>
                    <li>splash</li>
                    <li>spray</li>
                    <li>station</li>
                    <li>sunset</li>
                    <li>symmetry</li>
                    <li>timelapse</li>
                    <li>tinfoil</li>
                    <li>tractor</li>
                    <li>tropical</li>
                    <li>urban</li>
                    <li>vanusa</li>
                    <li>volcano</li>
                    <li>wall</li>
                    <li>waterfall</li>
                    <li>waves</li>
                    <li>wing</li>
                </ul>

                <p>Creating your own topbar requires a couple of steps.</p>
                <ul>
                    <li>Choose a topbar name such as mytopbar.</li>
                    <li>Create an empty file named _topbar_mytopbar.scss inside <i>public/assets/sass/layout/topbar/themes</i> folder.</li>
                    <li>Add your file to the import section of the _topbar.scss in the same folder.</li>
                    <li>Define the variables listed below and import the <i>../_topbar_theme</i> file.</li>
                    <li>Build the scss to generate css</li>
                    <li>Apply layout-topbar-mytopbar class to the main container element in the App template.</li>
                </ul>

<pre>
&lt;div class="layout-container layout-topbar-mytopbar"&gt;
</pre>

                <p>Here are the variables required to create a gradient based topbar.</p>

<pre>
.layout-topbar-mytopbar &#123;
    $topbarLeftBgColor:#F1719A;
    $topbarRightBgColor:#FE9473;
    $topbarSearchInputColor:#FDD5CF;
    $topbarSearchFocusedInputColor:#ffffff;
    $topbarUserIconHoverBorderColor:#ffffff;
    $topbarSeparatorColor:#ffffff;

    //vertical menubutton
    $menuButtonBgColor:#fafafa;
    $menuButtonIconColor:#F1719A;
    $menuButtonHoverBgColor:#e0e0e0;
    $menuButtonHoverIconColor:#F1719A;
    $menuButtonActiveBgColor:rgba(169,53,89,.6);
    $menuButtonActiveIconColor:#ffffff;

    //horizontal menu
    $horizontalMenuitemTextColor:#ffffff;
    $horizontalMenuitemIconColor:#ffffff;
    $horizontalMenuitemActiveBorderColor:#ffffff;
    $horizontalMenuitemHoverBorderColor:#FDD5CF;

    //breadcrumb
    $breadcrumbIconColor:#ffffff;
    $breadcrumbTextColor:#ffffff;
    $breadcrumbLinkColor:#80CBC4;
    
    @import '../_topbar_theme';
&#125;
</pre>

                <p>If you prefer an image for the background, use the template below.</p>

<pre>
.layout-topbar-mytopbar &#123;
    $topbarBgImage:'reflection-topbar.jpg';
    $topbarSearchInputColor:#BFDEE2;
    $topbarSearchFocusedInputColor:#ffffff;
    $topbarUserIconHoverBorderColor:#ffffff;
    $topbarSeparatorColor:#ffffff;

    //vertical menubutton
    $menuButtonBgColor:#fafafa;
    $menuButtonIconColor:#1C1F20;
    $menuButtonHoverBgColor:#e0e0e0;
    $menuButtonHoverIconColor:#1C1F20;
    $menuButtonActiveBgColor:rgba(0,172,193,.6);
    $menuButtonActiveIconColor:#ffffff;

    //horizontal menu
    $horizontalMenuitemTextColor:#ffffff;
    $horizontalMenuitemIconColor:#ffffff;
    $horizontalMenuitemActiveBorderColor:#ffffff;
    $horizontalMenuitemHoverBorderColor:#BFDEE2;

    //breadcrumb
    $breadcrumbIconColor:#ffffff;
    $breadcrumbTextColor:#ffffff;
    $breadcrumbLinkColor:#4DD0E1;

    @import '../_topbar_theme';
&#125;
</pre>

                <h1>Menu Themes</h1>
                <p>Menu themes apply to the vertical menu, submenus of horizontal menu and the profile menu. Menu style used across the template is defined at the main container element, template below uses the default light menus.</p>
<pre>
&lt;div class="layout-container layout-menu-light"&gt;
</pre>

                <p>Full list of menu themes are the following, note that <i>layout-menu-</i> prefix needs to be added to apply the style such as <b>layout-menu-dark</b>.</p>

                <ul>
                    <li>aerial</li>
                    <li>apricot</li>
                    <li>aquarelle</li>
                    <li>architecture</li>
                    <li>ash</li>
                    <li>balloon</li>
                    <li>beach</li>
                    <li>beyoglu</li>
                    <li>bloom</li>
                    <li>blue</li>
                    <li>canvas</li>
                    <li>circuit</li>
                    <li>city</li>
                    <li>classic</li>
                    <li>coffee</li>
                    <li>condo</li>
                    <li>connectionsone</li>
                    <li>connectionstwo</li>
                    <li>crystal</li>
                    <li>dark</li>
                    <li>dawn</li>
                    <li>desert</li>
                    <li>destination</li>
                    <li>disco</li>
                    <li>dock</li>
                    <li>downtown</li>
                    <li>emptiness</li>
                    <li>exposure</li>
                    <li>faraway</li>
                    <li>flamingo</li>
                    <li>flight</li>
                    <li>fluid</li>
                    <li>forest</li>
                    <li>fruity</li>
                    <li>grape</li>
                    <li>hallway</li>
                    <li>harvey</li>
                    <li>hazy</li>
                    <li>highline</li>
                    <li>island</li>
                    <li>jet</li>
                    <li>kashmir</li>
                    <li>light</li>
                    <li>lights</li>
                    <li>lille</li>
                    <li>louisville</li>
                    <li>marley</li>
                    <li>materialone</li>
                    <li>materialtwo</li>
                    <li>midnight</li>
                    <li>mountain</li>
                    <li>mural</li>
                    <li>night</li>
                    <li>norge</li>
                    <li>northern</li>
                    <li>olympic</li>
                    <li>orange</li>
                    <li>palm</li>
                    <li>perfection</li>
                    <li>pine</li>
                    <li>polygons</li>
                    <li>reflection</li>
                    <li>revolt</li>
                    <li>river</li>
                    <li>road</li>
                    <li>rose</li>
                    <li>royal</li>
                    <li>sandiego</li>
                    <li>seagull</li>
                    <li>sky</li>
                    <li>skyline</li>
                    <li>skyscaper</li>
                    <li>snow</li>
                    <li>splash</li>
                    <li>spray</li>
                    <li>station</li>
                    <li>sunset</li>
                    <li>symmetry</li>
                    <li>timelapse</li>
                    <li>tinfoil</li>
                    <li>tractor</li>
                    <li>tropical</li>
                    <li>urban</li>
                    <li>vanusa</li>
                    <li>volcano</li>
                    <li>wall</li>
                    <li>waterfall</li>
                    <li>waves</li>
                    <li>wing</li>
                </ul>

                <p>Creating your own menu theme requires a couple of steps.</p>
                <ul>
                    <li>Choose a menu name such as mymenu.</li>
                    <li>Create an empty file named _menu_mymenu.scss inside <i>public/assets/sass/layout/menu/themes</i> folder.</li>
                    <li>Add your file to the import section of the _menu.scss in the same folder.</li>
                    <li>Define the variables listed below and import the <i>../_menu_theme</i> file.</li>
                    <li>Build the scss to generate css</li>
                    <li>Add layout-menu-mymenu to the main wrapper element of in the main App template.</li>
                </ul>

<pre>
&lt;div class="layout-container layout-menu-mymenu"&gt;
</pre>

                <p>Here are the variables required to create a gradient based menu.</p>

<pre>
.layout-menu-mymenu &#123;
    $menuTopBgColor:#457fca;
    $menuBottomBgColor:#5691c8;
    $menuitemTextColor:#ffffff;
    $menuitemIconColor:#ffffff;
    $menuitemHoverBgColor:#578bcf;
    $menuitemHoverTextColor:#ffffff;
    $menuitemHoverIconColor:#ffffff;
    $menuitemActiveTextColor:#ffc107;
    $menuitemActiveIconColor:#ffc107;
    $verticalActiveRootMenuitemBgColor:#ffffff; 
    $verticalActiveRootMenuitemTextColor:#457fca;   
    $verticalActiveRootMenuitemIconColor:#457fca;
    $verticalSubmenuBgColor:#6a98d4;

    @import '../_menu_theme';
&#125;
</pre>

                <p>If you prefer an image for the background, use the template below.</p>

<pre>
.layout-menu-mymenu &#123;
    $menuBgImage:'architecture-menu.jpg';
    $menuitemTextColor:#ffffff;
    $menuitemIconColor:#ffffff;
    $menuitemHoverBgColor:rgba(255,255,255,0.32);
    $menuitemHoverTextColor:#ffffff;
    $menuitemHoverIconColor:#ffffff;
    $menuitemActiveTextColor:#B39DDB;
    $menuitemActiveIconColor:#B39DDB;
    $verticalActiveRootMenuitemBgColor:#673AB7; 
    $verticalActiveRootMenuitemTextColor:#ffffff;   
    $verticalActiveRootMenuitemIconColor:#ffffff;
    $verticalSubmenuBgColor:rgba(0,0,0,0.2);

    @import '../_menu_theme';
&#125;
</pre>

                <h1>Menu Highlight Color</h1>
                <p>When light and dark menus are used, a highlight color needs to be defined to show the selected menuitem whereas in other menu themes, the highlight color is defined by the menu theme itself. 
                    This color scheme is specified by the layout file such as layout-blue.scss which is still a mandatory file to be included regardless of the menu type as it defines the structure for the layout itself.</p>

                <p>Full list of menu highlight themes are the following.</p>
                <ul>
                    <li>amber</li>
                    <li>blue</li>
                    <li>bluegray</li>
                    <li>brown</li>
                    <li>cyan</li>
                    <li>deeporange</li>
                    <li>deeppurple</li>
                    <li>gray</li>
                    <li>green</li>
                    <li>indigo</li>
                    <li>lightblue</li>
                    <li>lightgreen</li>
                    <li>lime</li>
                    <li>orange</li>
                    <li>pink</li>
                    <li>purple</li>
                    <li>teal</li>
                    <li>yellow</li>
                </ul>

                <p>Creating your own menu highlight theme requires a couple of steps.</p>
                <ul>
                    <li>Choose a layout name such as myown.</li>
                    <li>Create an empty file named layout-myown.scss inside <i>public/assets/sass/layout/css</i> folder.</li>
                    <li>Define the variables listed below and import the <i>../../sass/layout/_layout</i> file.</li>
                    <li>Build the scss to generate css</li>
                    <li>Import the layout css file in your application.</li>
                </ul>

<pre>
$primaryColor:#607D8B;
$primaryTextColor:#ffffff;
$accentColor:#FFC107;
$accentTextColor:#212121;

@import '../../sass/layout/_layout';
</pre>

                <h1>Common SASS Variables</h1>
                <p>In case you'd like to customize the shared variables, use the variables files under sass/variables folder.</p>

                <h3>sass/_common.scss</h3>
<pre>
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
</pre>

                <h3>sass/variables/_layout.scss</h3>
<pre>
@import './common';

$bodyBgColor:#f4f4f7;
$bodySidePadding:100px;
$mobileBreakpoint:1024px;
$footerBgColor:#212121;
$footerTextColor:#9f9f9f;
$menuitemBorderRadius:6px;
$maskBgColor:#252529;

//horizontal menu
$horizontalOverlaySubmenuShadow:0 6px 20px 0 rgba(0, 0, 0, 0.19), 0 8px 17px 0 rgba(0, 0, 0, 0.2);
</pre>

                <h3>sass/variables/_theme.scss</h3>
<pre>
@import './common';

$headerPadding:.714em 1em;
$headerTextColor:#ffffff;
$headerFontWeight:500;

$contentPadding:.857em 1em;
$contentBorderColor:#d8d8d8;
$contentBgColor:#ffffff;

$inputBorderColor:#bdbdbd;
$inputInvalidBorderColor:#e62a10;
$inputBgColor:#ffffff;
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
$inputGroupTextColor:#757575;
$inputGroupIconColor:#bdbdbd;
$inputGroupAddonMinWidth:2*$fontSize;
$checkboxWidth:18px;
$checkboxHeight:18px;
$inputGroupPadding:2px 2px 1px 2px;
$inputGroupIconFontSize: 1.5em;

//panels
$accordionHeaderBgColor:#eeeeee;
$accordionHeaderTextColor:$textColor;
$accordionHeaderHoverBgColor:#d9d9d9;
$accordionHeaderHoverTextColor:$textColor;

$panelContentLineHeight:1.5;
$panelLightHeaderBgColor:#eeeeee;
$panelLightHeaderTextColor:$textColor;
$panelLightHeaderIconHoverBgColor:#d9d9d9;
$panelDarkHeaderBgColor:#212121;
$panelDarkHeaderTextColor:#ffffff;
$panelDarkHeaderIconHoverBgColor:#424242;

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
</pre>

                <h1>Menu Modes</h1>
                <p>Menu has 2 modes; horizontal and overlay. Layout container element in App.vue is used to define which mode to use by adding specific classes. List
                below indicates the style classes for each mode.</p>

                <ul>
                    <li>Horizontal: "layout-container layout-menu-horizontal"</li>
                    <li>Overlay: "layout-container"</li>
                </ul>

                <p>It is also possible to leave the choice to the user by keeping the preference at a component and using an expression to bind it so that user can switch between modes. Sample
                application has an example implementation of such use case. Refer to App.vue for an example.</p>

                <h1>Customizing Styles</h1>
                <p>It is suggested to add your customizations in the following sass files under the overrides folder instead of adding them to the
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
export default {
    
}
</script>

<style scoped>
h1 {
    font-weight: 400;
    font-size: 24px;
}

pre {
    font-family: monospace;
    background-color: #424242;
    color: #ffffff;
    padding: 1em;
    font-size: 14px;
    border-radius: 3px;
    overflow: auto;
}

i {
    background-color: #fcf2a7;
    font-family: monaco,Consolas,Lucida Console,monospace;
    font-weight: 700;
    font-style: normal;
    font-size: 14px;
    padding: 2px;
}

li {
    line-height: 1.5;
}
</style>