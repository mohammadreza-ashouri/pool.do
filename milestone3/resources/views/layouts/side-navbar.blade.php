<nav class="navbar navbar-vertical navbar-expand-xl navbar-light">
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">

        <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-toggle="tooltip" data-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

        </div><a class="navbar-brand" href="index.html">
        <div class="d-flex align-items-center py-3"><img class="mr-2" src="{{asset("assets/img/illustrations/logo.png")}}" alt="" width="55" /><span class="text-sans-serif"></span>
        </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content perfect-scrollbar scrollbar">
        <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#home" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="home">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text">Block Explorer</span>
                </div>
            </a>
            <ul class="nav collapse show" id="home" data-parent="#navbarVerticalCollapse">
                <li class="nav-item active"><a class="nav-link" href="/">Search</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="/">Blocks</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="/">Coins</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="/">Top Farmers</a></li>
                <li class="nav-item"><a class="nav-link" href="/">Top Addresses</a></li>
                <li class="nav-item"><a class="nav-link" href="/">Biggest Spenders</a></li>
            </ul>
            </li>
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#pages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-copy"></span></span><span class="nav-link-text">Charts</span>
                </div>
            </a>
            <ul class="nav collapse" id="pages" data-parent="#navbarVerticalCollapse">
                <li class="nav-item"><a class="nav-link" href="/">Chia (XCH) Price</a></li>
                <li class="nav-item"><a class="nav-link" href="/">Netscape</a></li>
                <li class="nav-item"><a class="nav-link" href="/">XCH/TiB Day</a></li>
                <li class="nav-item"><a class="nav-link" href="/">TiB Hour/XCH</a></li>
                <li class="nav-item"><a class="nav-link" href="/">Unique Address Count</a></li>
                <li class="nav-item"><a class="nav-link" href="/">Top Farmers</a></li>
                <li class="nav-item"><a class="nav-link" href="/">Top Pools</a></li>
            </ul>
            </li>
            
            <!-- <li class="nav-item"><a class="nav-link" href="kanban.html">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text"> Kanban</span>
                </div>
            </a></li> -->
            <!-- <li class="nav-item"><a class="nav-link" href="calendar.html">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text"> Calendar</span>
                </div>
            </a></li>
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#email" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="email">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text">Email</span>
                </div>
            </a>
            <ul class="nav collapse" id="email" data-parent="#navbarVerticalCollapse">
                <li class="nav-item"><a class="nav-link" href="email/inbox.html">Inbox</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="email/email-detail.html">Email detail</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="email/compose.html">Compose</a>
                </li>
            </ul>
            </li> -->
            <!-- <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-unlock-alt"></span></span><span class="nav-link-text">Authentication</span>
                </div>
            </a> -->
            <!-- <ul class="nav collapse" id="authentication" data-parent="#navbarVerticalCollapse">
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-basic" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-basic">Basic</a>
                <ul class="nav collapse" id="authentication-basic" data-parent="#authentication">
                    <li class="nav-item"><a class="nav-link" href="authentication/basic/login.html">Login</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/basic/logout.html">Logout</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/basic/register.html">Register</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/basic/forgot-password.html">Forgot password</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/basic/reset-password.html">Reset password</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/basic/confirm-mail.html">Confirm mail</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/basic/lock-screen.html">Lock screen</a>
                    </li>
                </ul>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-card" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-card">Card</a>
                <ul class="nav collapse" id="authentication-card" data-parent="#authentication">
                    <li class="nav-item"><a class="nav-link" href="authentication/card/login.html">Login</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/card/logout.html">Logout</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/card/register.html">Register</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/card/forgot-password.html">Forgot password</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/card/reset-password.html">Reset password</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/card/confirm-mail.html">Confirm mail</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/card/lock-screen.html">Lock screen</a>
                    </li>
                </ul>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#authentication-split" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="authentication-split">Split</a>
                <ul class="nav collapse" id="authentication-split" data-parent="#authentication">
                    <li class="nav-item"><a class="nav-link" href="authentication/split/login.html">Login</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/split/logout.html">Logout</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/split/register.html">Register</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/split/forgot-password.html">Forgot password</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/split/reset-password.html">Reset password</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/split/confirm-mail.html">Confirm mail</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/split/lock-screen.html">Lock screen</a>
                    </li>
                </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="authentication/wizard.html">Wizard</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#!" data-toggle="modal" data-target="#authentication-modal">In Modal</a></li>
            </ul>
            </li>
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#e-commerce" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="e-commerce">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-cart-plus"></span></span><span class="nav-link-text">E commerce</span>
                </div>
            </a>
            <ul class="nav collapse" id="e-commerce" data-parent="#navbarVerticalCollapse">
                <li class="nav-item"><a class="nav-link" href="e-commerce/product-list.html">Product list</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="e-commerce/product-grid.html">Product grid</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="e-commerce/product-details.html">Product details</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="e-commerce/orders.html">Orders</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="e-commerce/order-details.html">Order details</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="e-commerce/customers.html">Customers</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="e-commerce/shopping-cart.html">Shopping cart</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="e-commerce/checkout.html">Checkout</a>
                </li>
            </ul>
            </li> -->
        </ul>
        <!-- <div class="navbar-vertical-divider">
            <hr class="navbar-vertical-hr my-2" />
        </div>
        <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link" href="widgets.html">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-poll"></span></span><span class="nav-link-text"> Widgets</span>
                </div>
            </a></li>
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="components">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-puzzle-piece"></span></span><span class="nav-link-text">Components</span>
                </div>
            </a>
            <ul class="nav collapse" id="components" data-parent="#navbarVerticalCollapse">
                <li class="nav-item"><a class="nav-link" href="components/accordion.html">Accordion</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/alerts.html">Alerts</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/avatar.html">Avatar</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/background.html">Background</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/badges.html">Badges</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/breadcrumb.html">Breadcrumb</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/bulk-select.html">Bulk select</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/buttons.html">Buttons</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/cards.html">Cards</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/carousel.html">Carousel</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/collapse.html">Collapse</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/countup.html">Countup</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/dropdowns.html">Dropdowns</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/fancyscroll.html">Fancyscroll</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/fancytab.html">Fancytab</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/forms.html">Forms</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/hoverbox.html">Hoverbox</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/list-group.html">List group</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/modals.html">Modals</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/media-object.html">Media object</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/navs.html">Navs</a>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#components-navbar" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="components-navbar">Navbar</a>
                <ul class="nav collapse" id="components-navbar" data-parent="#components">
                    <li class="nav-item"><a class="nav-link" href="components/navbar/default.html">Default</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/navbar/vertical.html">Vertical</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/navbar/top.html">Top</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/navbar/combo.html">Combo</a>
                    </li>
                </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/cookie-notice.html">Cookie notice</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/page-headers.html">Page headers</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/pagination.html">Pagination</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/popovers.html">Popovers</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/progress.html">Progress</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/search.html">
                    <div class="d-flex align-items-center">Search<span class="badge badge-pill ml-2 badge-soft-success">New</span>
                    </div>
                </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/scrollspy.html">Scrollspy</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/sidepanel.html">Sidepanel</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/spinners.html">Spinners</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/tables.html">Tables</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/tabs.html">Tabs</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/toasts.html">Toasts</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="components/tooltips.html">Tooltips</a>
                </li>
            </ul>
            </li>
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#utilities" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="utilities">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-fire"></span></span><span class="nav-link-text">Utilities</span>
                </div>
            </a>
            <ul class="nav collapse" id="utilities" data-parent="#navbarVerticalCollapse">
                <li class="nav-item"><a class="nav-link" href="utilities/borders.html">Borders</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="utilities/clearfix.html">Clearfix</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="utilities/close-icon.html">Close icon</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="utilities/colors.html">Colors</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="utilities/display.html">Display</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="utilities/embed.html">Embed</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="utilities/figures.html">Figures</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="utilities/flex.html">Flex</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="utilities/grid.html">Grid</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="utilities/sizing.html">Sizing</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="utilities/spacing.html">Spacing</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="utilities/stretched-link.html">Stretched link</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="utilities/typography.html">Typography</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="utilities/vertical-align.html">Vertical align</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="utilities/visibility.html">Visibility</a>
                </li>
            </ul>
            </li>
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-plug"></span></span><span class="nav-link-text">Plugins</span>
                </div>
            </a>
            <ul class="nav collapse" id="plugins" data-parent="#navbarVerticalCollapse">
                <li class="nav-item"><a class="nav-link" href="plugins/bootstrap-wizard.html">Bootstrap wizard</a>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins-charts" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins-charts">Charts</a>
                <ul class="nav collapse" id="plugins-charts" data-parent="#plugins">
                    <li class="nav-item"><a class="nav-link" href="plugins/charts/chart-js.html">Chart js</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/charts/echarts.html">Echarts</a>
                    </li>
                </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/countdown.html">Countdown</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/data-table.html">Data table</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/date-picker.html">Date picker</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/draggable.html">Draggable</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/dropzone.html">Dropzone</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/emojionearea.html">Emojionearea</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/fancybox.html">Fancybox</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/fontawesome.html">Fontawesome</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/fullcalendar.html">Fullcalendar</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/inline-player.html">Inline player</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/jquery-validation.html">Jquery validation</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/lightbox.html">Lightbox</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/lottie.html">Lottie</a>
                </li>
                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#plugins-map" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="plugins-map">Map</a>
                <ul class="nav collapse" id="plugins-map" data-parent="#plugins">
                    <li class="nav-item"><a class="nav-link" href="plugins/map/google-map.html">Google map</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/map/leaflet-map.html">Leaflet map</a>
                    </li>
                </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/toastr.html">Toastr</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/owl-carousel.html">Owl carousel</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/perfect-scrollbar.html">Perfect scrollbar</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/progressbar.html">Progressbar</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/raty.html">Raty</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/select2.html">Select2</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/tinymce.html">Tinymce</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="plugins/typed-text.html">Typed text</a>
                </li>
            </ul>
            </li>
        </ul>
        <div class="navbar-vertical-divider">
            <hr class="navbar-vertical-hr my-2" />
        </div> -->
        <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#documentation" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="documentation">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-book"></span></span><span class="nav-link-text">Documentation</span>
                </div>
            </a>
            <ul class="nav collapse" id="documentation" data-parent="#navbarVerticalCollapse">
                <li class="nav-item"><a class="nav-link" href="documentation/getting-started.html">Getting started</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="documentation/file-structure.html">File structure</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="documentation/customization.html">Customization</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="documentation/dark-mode.html">Dark mode</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="documentation/fluid-layout.html">Fluid layout</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="documentation/gulp.html">Gulp</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="documentation/RTL.html">RTL</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="documentation/plugins.html">Plugins</a>
                </li>
            </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="changelog.html">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-code-branch"></span></span><span class="nav-link-text"> Changelog</span><span class="badge badge-pill ml-2 badge-soft-primary">v2.8.2</span>
                </div>
            </a></li>
        </ul>
        <div class="settings px-3 px-xl-0">
            <div class="navbar-vertical-divider px-0">
                <hr class="navbar-vertical-hr my-3" />
            </div>
            
        </div>
        </div>
    </div>
</nav>