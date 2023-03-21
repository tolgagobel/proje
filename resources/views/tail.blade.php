
<!DOCTYPE html><html lang="en"><head>
    <meta charset="utf-8">
    <title>Mosaic HTML Demo - Customers</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="./css/vendors/flatpickr.min.css" rel="stylesheet">
    <link href="./style.css" rel="stylesheet">
</head>

<body class="gs bs hi g_" :class="{ 'sidebar-expanded': sidebarExpanded }" x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }" x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))">

<script>
    if (localStorage.getItem('sidebar-expanded') == 'true') {
        document.querySelector('body').classList.add('sidebar-expanded');
    } else {
        document.querySelector('body').classList.remove('sidebar-expanded');
    }
</script>

<!-- Page wrapper -->
<div class="flex ss la">

    <!-- Sidebar -->
    <div>
        <!-- Sidebar backdrop (mobile only) -->
        <div class="m w bg-slate-900 pu tb tex ted bz wr" :class="sidebarOpen ? 'ba' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak=""></div>

        <!-- Sidebar -->
        <div id="sidebar" class="flex ak g tb x k tea tec teh tts ss lp tth l or tej ttz 2xl:!w-64 ub hs dw we wr wu" :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false" @keydown.escape.window="sidebarOpen = false" x-cloak="lg">

            <!-- Sidebar header -->
            <div class="flex fe nx vq j_">
                <!-- Close button -->
                <button class="tex text-slate-500 xl" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
                    <span class="d">Close sidebar</span>
                    <svg class="oi so du" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                    </svg>
                </button>
                <!-- Logo -->
                <a class="block" href="index.html">
                    <svg width="32" height="32" viewBox="0 0 32 32">
                        <defs>
                            <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                                <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%"></stop>
                                <stop stop-color="#A5B4FC" offset="100%"></stop>
                            </linearGradient>
                            <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                                <stop stop-color="#38BDF8" stop-opacity="0" offset="0%"></stop>
                                <stop stop-color="#38BDF8" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <rect fill="#6366F1" width="32" height="32" rx="16"></rect>
                        <path d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z" fill="#4F46E5"></path>
                        <path d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z" fill="url(#logo-a)"></path>
                        <path d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z" fill="url(#logo-b)"></path>
                    </svg>
                </a>
            </div>

            <!-- Links -->
            <div class="ff">
                <!-- Pages group -->
                <div>
                    <h3 class="go gv text-slate-500 gh vz">
                        <span class="hidden tey ttq 2xl:hidden gn oi" aria-hidden="true">•••</span>
                        <span class="tex ttj 2xl:block">Pages</span>
                    </h3>
                    <ul class="nk">
                        <!-- Dashboard -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj hover--text-slate-200 ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du gq" d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z"></path>
                                            <path class="du g_" d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z"></path>
                                            <path class="du gq" d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Dashboard</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="index.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Main</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="analytics.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Analytics</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="fintech.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Fintech</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- E-Commerce -->
                        <li class="vn vr rounded-sm n_ ww bg-slate-900" x-data="{ open: true }">
                            <a class="block gj ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du text-indigo-300" d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z"></path>
                                            <path class="du text-indigo-600" d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z"></path>
                                            <path class="du text-indigo-500" d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">E-Commerce</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block text-indigo-500 wt wi ld" href="customers.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Customers</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="orders.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Orders</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="invoices.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Invoices</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="shop.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Shop</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="shop-2.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Shop 2</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="product.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Single Product</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="cart.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Cart</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="cart-2.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Cart 2</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="cart-3.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Cart 3</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="pay.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Pay</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Community -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du g_" d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z"></path>
                                            <path class="du gq" d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Community</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="users-tabs.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Users - Tabs</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="users-tiles.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Users - Tiles</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="profile.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Profile</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="feed.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Feed</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="forum.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Forum</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="forum-post.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Forum - Post</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="meetups.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Meetups</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="meetups-post.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Meetups - Post</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Finance -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du gq" d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z"></path>
                                            <path class="du gz" d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z"></path>
                                            <path class="du g_" d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Finance</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="credit-cards.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Cards</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="transactions.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Transactions</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="transaction-details.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Transaction Details</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Job Board -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du gz" d="M4.418 19.612A9.092 9.092 0 0 1 2.59 17.03L.475 19.14c-.848.85-.536 2.395.743 3.673a4.413 4.413 0 0 0 1.677 1.082c.253.086.519.131.787.135.45.011.886-.16 1.208-.474L7 21.44a8.962 8.962 0 0 1-2.582-1.828Z"></path>
                                            <path class="du g_" d="M10.034 13.997a11.011 11.011 0 0 1-2.551-3.862L4.595 13.02a2.513 2.513 0 0 0-.4 2.645 6.668 6.668 0 0 0 1.64 2.532 5.525 5.525 0 0 0 3.643 1.824 2.1 2.1 0 0 0 1.534-.587l2.883-2.882a11.156 11.156 0 0 1-3.861-2.556Z"></path>
                                            <path class="du gq" d="M21.554 2.471A8.958 8.958 0 0 0 18.167.276a3.105 3.105 0 0 0-3.295.467L9.715 5.888c-1.41 1.408-.665 4.275 1.733 6.668a8.958 8.958 0 0 0 3.387 2.196c.459.157.94.24 1.425.246a2.559 2.559 0 0 0 1.87-.715l5.156-5.146c1.415-1.406.666-4.273-1.732-6.666Zm.318 5.257c-.148.147-.594.2-1.256-.018A7.037 7.037 0 0 1 18.016 6c-1.73-1.728-2.104-3.475-1.73-3.845a.671.671 0 0 1 .465-.129c.27.008.536.057.79.146a7.07 7.07 0 0 1 2.6 1.711c1.73 1.73 2.105 3.472 1.73 3.846Z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Job Board</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="job-listing.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Listing</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="job-post.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Job Post</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="company-profile.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Company Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Tasks -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du g_" d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z"></path>
                                            <path class="du g_" d="M1 1h22v23H1z"></path>
                                            <path class="du gq" d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Tasks</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="tasks-kanban.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Kanban</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="tasks-list.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">List</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Messages -->
                        <li class="vn vr rounded-sm n_ ww">
                            <a class="block gj xc ld wt wi" href="messages.html">
                                <div class="flex items-center fe">
                                    <div class="uw flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du g_" d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z"></path>
                                            <path class="du gq" d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Messages</span>
                                    </div>
                                    <!-- Badge -->
                                    <div class="flex uy nq">
                                        <span class="inline-flex items-center justify-center su go gp ye ho vi rounded">4</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Inbox -->
                        <li class="vn vr rounded-sm n_ ww">
                            <a class="block gj xc ld wt wi" href="inbox.html">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du g_" d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z"></path>
                                        <path class="du gq" d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z"></path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Inbox</span>
                                </div>
                            </a>
                        </li>
                        <!-- Calendar -->
                        <li class="vn vr rounded-sm n_ ww">
                            <a class="block gj xc ld wt wi" href="calendar.html">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du g_" d="M1 3h22v20H1z"></path>
                                        <path class="du gq" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z"></path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Calendar</span>
                                </div>
                            </a>
                        </li>
                        <!-- Campaigns -->
                        <li class="vn vr rounded-sm n_ ww">
                            <a class="block gj xc ld wt wi" href="campaigns.html">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du g_" d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z"></path>
                                        <path class="du gq" d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"></path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Campaigns</span>
                                </div>
                            </a>
                        </li>
                        <!-- Settings -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du g_" d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z"></path>
                                            <path class="du gq" d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z"></path>
                                            <path class="du g_" d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z"></path>
                                            <path class="du gq" d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Settings</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="settings.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">My Account</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="notifications.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">My Notifications</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="connected-apps.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Connected Apps</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="plans.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Plans</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="billing.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Billing &amp; Invoices</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="feedback.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Give Feedback</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Utility -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <circle class="du gq" cx="18.5" cy="5.5" r="4.5"></circle>
                                            <circle class="du g_" cx="5.5" cy="5.5" r="4.5"></circle>
                                            <circle class="du g_" cx="18.5" cy="18.5" r="4.5"></circle>
                                            <circle class="du gq" cx="5.5" cy="18.5" r="4.5"></circle>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Utility</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="changelog.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Changelog</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="roadmap.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Roadmap</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="faqs.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">FAQs</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="empty-state.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Empty State</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="404.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">404</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="knowledge-base.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Knowledge Base</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- More group -->
                <div>
                    <h3 class="go gv text-slate-500 gh vz">
                        <span class="hidden tey ttq 2xl:hidden gn oi" aria-hidden="true">•••</span>
                        <span class="tex ttj 2xl:block">More</span>
                    </h3>
                    <ul class="nk">
                        <!-- Authentication -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj xc wt wi" :class="open &amp;&amp; 'hover--text-slate-200'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du g_" d="M8.07 16H10V8H8.07a8 8 0 110 8z"></path>
                                            <path class="du gq" d="M15 12L8 6v5H0v2h8v5z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Authentication</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="signin.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Sign In</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="signup.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Sign up</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="reset-password.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Reset Password</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Onboarding -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj xc wt wi" :class="open &amp;&amp; 'hover--text-slate-200'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du g_" d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z"></path>
                                            <path class="du gq" d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Onboarding</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="onboarding-01.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Step 1</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="onboarding-02.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Step 2</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="onboarding-03.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Step 3</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="onboarding-04.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Step 4</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Components -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj xc wt wi" :class="open &amp;&amp; 'hover--text-slate-200'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <circle class="du g_" cx="16" cy="8" r="8"></circle>
                                            <circle class="du gq" cx="8" cy="16" r="8"></circle>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Components</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-button.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Button</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-form.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Input Form</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-dropdown.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Dropdown</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-alert.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Alert &amp; Banner</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-modal.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Modal</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-pagination.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Pagination</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-tabs.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Tabs</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-breadcrumb.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Breadcrumb</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-badge.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Badge</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-avatar.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Avatar</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-tooltip.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Tooltip</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-accordion.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Accordion</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-icons.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Icons</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Expand / collapse button -->
            <div class="mt hidden tew 2xl:hidden justify-end rn">
                <div class="vn vr">
                    <button @click="sidebarExpanded = !sidebarExpanded">
                        <span class="d">Expand / collapse sidebar</span>
                        <svg class="oi so du _o" viewBox="0 0 24 24">
                            <path class="gq" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z"></path>
                            <path class="g_" d="M3 23H1V1h2z"></path>
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- Content area -->
    <div class="y flex ak ug ll lc">

        <!-- Site header -->
        <header class="b k bg-white cs border-slate-200 tw">
            <div class="vs jj ttm">
                <div class="flex items-center fe sa rr">

                    <!-- Header: Left side -->
                    <div class="flex">
                        <!-- Hamburger button -->
                        <button class="text-slate-500 hover--text-slate-600 tex" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
                            <span class="d">Open sidebar</span>
                            <svg class="oi so du" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4" y="5" width="16" height="2"></rect>
                                <rect x="4" y="11" width="16" height="2"></rect>
                                <rect x="4" y="17" width="16" height="2"></rect>
                            </svg>
                        </button>

                    </div>

                    <!-- Header: Right side -->
                    <div class="flex items-center fl">

                        <!-- Search button -->
                        <div x-data="{ searchOpen: false }">
                            <!-- Button -->
                            <button class="os sf flex items-center justify-center hi xt wt wi rounded-full" :class="{ 'hu': searchOpen }" @click.prevent="searchOpen = true;if (searchOpen) $nextTick(()=>{$refs.searchInput.focus()});" aria-controls="search-modal">
                                <span class="d">Search</span>
                                <svg class="oo sl" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path class="du text-slate-500" d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                    <path class="du gq" d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                </svg>
                            </button>
                            <!-- Modal backdrop -->
                            <div class="m w bg-slate-900 pu tx bz" x-show="searchOpen" x-transition:enter="wt wa wr" x-transition:enter-start="opacity-0" x-transition:enter-end="ba" x-transition:leave="wt wa ws" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" aria-hidden="true" x-cloak=""></div>
                            <!-- Modal dialog -->
                            <div id="search-modal" class="m w tx la flex aj _ ri justify-center vs jj" role="dialog" aria-modal="true" x-show="searchOpen" x-transition:enter="wt wu wr" x-transition:enter-start="opacity-0 u_" x-transition:enter-end="ba uj" x-transition:leave="wt wu wr" x-transition:leave-start="ba uj" x-transition:leave-end="opacity-0 u_" x-cloak="">
                                <div class="bg-white lu ua ou oe rounded bd" @click.outside="searchOpen = false" @keydown.escape.window="searchOpen = false">
                                    <!-- Search form -->
                                    <form class="cs border-slate-200">
                                        <div class="y">
                                            <label for="modal-search" class="d">Search</label>
                                            <input id="modal-search" class="ou cn kf bo av vo mn mr" type="search" placeholder="Search Anything…" x-ref="searchInput">
                                            <button class="g w j kk" type="submit" aria-label="Search">
                                                <svg class="oo sl ub du gq kj rs mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                                    <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                    <div class="vu vi">
                                        <!-- Recent searches -->
                                        <div class="ro ww">
                                            <div class="go gh gq gv vi ru">Recent searches</div>
                                            <ul class="text-sm">
                                                <li>
                                                    <a class="flex items-center dx text-slate-800 xc xn rounded kk" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                        <svg class="oo sl du gq kq _t ub ra" viewBox="0 0 16 16">
                                                            <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                        </svg>
                                                        <span>Form Builder - 23 hours on-demand video</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="flex items-center dx text-slate-800 xc xn rounded kk" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                        <svg class="oo sl du gq kq _t ub ra" viewBox="0 0 16 16">
                                                            <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                        </svg>
                                                        <span>Access Mosaic on mobile and TV</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="flex items-center dx text-slate-800 xc xn rounded kk" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                        <svg class="oo sl du gq kq _t ub ra" viewBox="0 0 16 16">
                                                            <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                        </svg>
                                                        <span>Product Update - Q4 2021</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="flex items-center dx text-slate-800 xc xn rounded kk" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                        <svg class="oo sl du gq kq _t ub ra" viewBox="0 0 16 16">
                                                            <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                        </svg>
                                                        <span>Master Digital Marketing Strategy course</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="flex items-center dx text-slate-800 xc xn rounded kk" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                        <svg class="oo sl du gq kq _t ub ra" viewBox="0 0 16 16">
                                                            <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                        </svg>
                                                        <span>Dedicated forms for products</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="flex items-center dx text-slate-800 xc xn rounded kk" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                        <svg class="oo sl du gq kq _t ub ra" viewBox="0 0 16 16">
                                                            <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
                                                        </svg>
                                                        <span>Product Update - Q4 2021</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Recent pages -->
                                        <div class="ro ww">
                                            <div class="go gh gq gv vi ru">Recent pages</div>
                                            <ul class="text-sm">
                                                <li>
                                                    <a class="flex items-center dx text-slate-800 xc xn rounded kk" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                        <svg class="oo sl du gq kq _t ub ra" viewBox="0 0 16 16">
                                                            <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path>
                                                        </svg>
                                                        <span><span class="gp text-slate-800 kq">Messages</span> - Conversation / … / Mike Mills</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="flex items-center dx text-slate-800 xc xn rounded kk" href="#0" @click="searchOpen = false" @focus="searchOpen = true" @focusout="searchOpen = false">
                                                        <svg class="oo sl du gq kq _t ub ra" viewBox="0 0 16 16">
                                                            <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path>
                                                        </svg>
                                                        <span><span class="gp text-slate-800 kq">Messages</span> - Conversation / … / Eva Patrick</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Notifications button -->
                        <div class="y inline-flex" x-data="{ open: false }">
                            <button class="os sf flex items-center justify-center hi xt wt wi rounded-full" :class="{ 'hu': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                <span class="d">Notifications</span>
                                <svg class="oo sl" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path class="du text-slate-500" d="M6.5 0C2.91 0 0 2.462 0 5.5c0 1.075.37 2.074 1 2.922V12l2.699-1.542A7.454 7.454 0 006.5 11c3.59 0 6.5-2.462 6.5-5.5S10.09 0 6.5 0z"></path>
                                    <path class="du gq" d="M16 9.5c0-.987-.429-1.897-1.147-2.639C14.124 10.348 10.66 13 6.5 13c-.103 0-.202-.018-.305-.021C7.231 13.617 8.556 14 10 14c.449 0 .886-.04 1.307-.11L15 16v-4h-.012C15.627 11.285 16 10.425 16 9.5z"></path>
                                </svg>
                                <div class="g k q oa sc ha cr cc rounded-full"></div>
                            </button>
                            <div class="uk tk g z q rf _g ut bg-white border border-slate-200 va rounded bd la re" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa wr au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa wr" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" x-cloak="">
                                <div class="go gh gq gv mi ms vs">Notifications</div>
                                <ul>
                                    <li class="cs border-slate-200 wk">
                                        <a class="block vr vs xr" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                            <span class="block text-sm ru">📣 <span class="gp text-slate-800">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                                            <span class="block go gp gq">Feb 12, 2021</span>
                                        </a>
                                    </li>
                                    <li class="cs border-slate-200 wk">
                                        <a class="block vr vs xr" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                            <span class="block text-sm ru">📣 <span class="gp text-slate-800">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                                            <span class="block go gp gq">Feb 9, 2021</span>
                                        </a>
                                    </li>
                                    <li class="cs border-slate-200 wk">
                                        <a class="block vr vs xr" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                            <span class="block text-sm ru">🚀<span class="gp text-slate-800">Say goodbye to paper receipts!</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span>
                                            <span class="block go gp gq">Jan 24, 2020</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Info button -->
                        <div class="y inline-flex" x-data="{ open: false }">
                            <button class="os sf flex items-center justify-center hi xt wt wi rounded-full" :class="{ 'hu': open }" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                <span class="d">Info</span>
                                <svg class="oo sl" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path class="du text-slate-500" d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
                                </svg>
                            </button>
                            <div class="uk tk g z q un bg-white border border-slate-200 va rounded bd la re" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa wr au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa wr" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" x-cloak="">
                                <div class="go gh gq gv mi ms vn">Need help?</div>
                                <ul>
                                    <li>
                                        <a class="gp text-sm text-indigo-500 xh flex items-center vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                            <svg class="w-3 h-3 du text-indigo-300 ub mr-2" viewBox="0 0 12 12">
                                                <rect y="3" width="12" height="9" rx="1"></rect>
                                                <path d="M2 0h8v2H2z"></path>
                                            </svg>
                                            <span>Documentation</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="gp text-sm text-indigo-500 xh flex items-center vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                            <svg class="w-3 h-3 du text-indigo-300 ub mr-2" viewBox="0 0 12 12">
                                                <path d="M10.5 0h-9A1.5 1.5 0 000 1.5v9A1.5 1.5 0 001.5 12h9a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0010.5 0zM10 7L8.207 5.207l-3 3-1.414-1.414 3-3L5 2h5v5z"></path>
                                            </svg>
                                            <span>Support Site</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="gp text-sm text-indigo-500 xh flex items-center vf vn" href="#0" @click="open = false" @focus="open = true" @focusout="open = false">
                                            <svg class="w-3 h-3 du text-indigo-300 ub mr-2" viewBox="0 0 12 12">
                                                <path d="M11.854.146a.5.5 0 00-.525-.116l-11 4a.5.5 0 00-.015.934l4.8 1.921 1.921 4.8A.5.5 0 007.5 12h.008a.5.5 0 00.462-.329l4-11a.5.5 0 00-.116-.525z"></path>
                                            </svg>
                                            <span>Contact us</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Divider -->
                        <hr class="of so hu">

                        <!-- User button -->
                        <div class="y inline-flex" x-data="{ open: false }">
                            <button class="inline-flex justify-center items-center kk" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                <img class="os sf rounded-full" src="./images/user-avatar-32.png" width="32" height="32" alt="User">
                                <div class="flex items-center ld">
                                    <span class="ld nq text-sm gp kz">Acme Inc.</span>
                                    <svg class="w-3 h-3 ub nz du gq" viewBox="0 0 12 12">
                                        <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                    </svg>
                                </div>
                            </button>
                            <div class="uk tk g z q un bg-white border border-slate-200 va rounded bd la re" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa wr au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa wr" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" x-cloak="">
                                <div class="mu ms vn rt cs border-slate-200">
                                    <div class="gp text-slate-800">Acme Inc.</div>
                                    <div class="go text-slate-500 gm">Administrator</div>
                                </div>
                                <ul>
                                    <li>
                                        <a class="gp text-sm text-indigo-500 xh flex items-center vf vn" href="settings.html" @click="open = false" @focus="open = true" @focusout="open = false">Settings</a>
                                    </li>
                                    <li>
                                        <a class="gp text-sm text-indigo-500 xh flex items-center vf vn" href="signin.html" @click="open = false" @focus="open = true" @focusout="open = false">Sign Out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </header>

        <main>
            <div class="vs jj ttm vl ou uf na">

                <!-- Page header -->
                <div class="je jd jc rc">

                    <!-- Left: Title -->
                    <div class="ri _y">
                        <h1 class="gu teu text-slate-800 font-bold">Customers ✨</h1>
                    </div>

                    <!-- Right: Actions -->
                    <div class="sn am jo az jp ft">

                        <!-- Delete button -->
                        <div class="table-items-action hidden">
                            <div class="flex items-center">
                                <div class="hidden tnh text-sm gm mr-2 lm"><span class="table-items-count"></span> items selected</div>
                                <button class="btn bg-white border-slate-200 hover--border-slate-300 yl xy">Delete</button>
                            </div>
                        </div>

                        <!-- Dropdown -->
                        <div class="y" x-data="{ open: false, selected: 2 }">
                            <button class="btn fe un bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600" aria-label="Select date range" aria-haspopup="true" @click.prevent="open = !open" :aria-expanded="open">
                                    <span class="flex items-center">
                                        <svg class="oo sl du text-slate-500 ub mr-2" viewBox="0 0 16 16">
                                            <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
                                        </svg>
                                        <span x-text="$refs.options.children[selected].children[1].innerHTML"></span>
                                    </span>
                                <svg class="ub nz du gq" width="11" height="7" viewBox="0 0 11 7">
                                    <path d="M5.4 6.8L0 1.4 1.4 0l4 4 4-4 1.4 1.4z"></path>
                                </svg>
                            </button>
                            <div class="tk g z q ou bg-white border border-slate-200 va rounded bd la re" @click.outside="open = false" @keydown.escape.window="open = false" x-show="open" x-transition:enter="wt wa ws au" x-transition:enter-start="opacity-0 uq" x-transition:enter-end="ba uj" x-transition:leave="wt wa ws" x-transition:leave-start="ba" x-transition:leave-end="opacity-0" x-cloak="">
                                <div class="gp text-sm g_" x-ref="options">
                                    <button tabindex="0" class="flex items-center ou xr vf vn al" :class="selected === 0 &amp;&amp; 'text-indigo-500'" @click="selected = 0;open = false" @focus="open = true" @focusout="open = false">
                                        <svg class="ub mr-2 du text-indigo-500" :class="selected !== 0 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                            <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                        </svg>
                                        <span>Today</span>
                                    </button>
                                    <button tabindex="0" class="flex items-center ou xr vf vn al" :class="selected === 1 &amp;&amp; 'text-indigo-500'" @click="selected = 1;open = false" @focus="open = true" @focusout="open = false">
                                        <svg class="ub mr-2 du text-indigo-500" :class="selected !== 1 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                            <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                        </svg>
                                        <span>Last 7 Days</span>
                                    </button>
                                    <button tabindex="0" class="flex items-center ou xr vf vn al" :class="selected === 2 &amp;&amp; 'text-indigo-500'" @click="selected = 2;open = false" @focus="open = true" @focusout="open = false">
                                        <svg class="ub mr-2 du text-indigo-500" :class="selected !== 2 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                            <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                        </svg>
                                        <span>Last Month</span>
                                    </button>
                                    <button tabindex="0" class="flex items-center ou xr vf vn al" :class="selected === 3 &amp;&amp; 'text-indigo-500'" @click="selected = 3;open = false" @focus="open = true" @focusout="open = false">
                                        <svg class="ub mr-2 du text-indigo-500" :class="selected !== 3 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                            <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                        </svg>
                                        <span>Last 12 Months</span>
                                    </button>
                                    <button tabindex="0" class="flex items-center ou xr vf vn al" :class="selected === 4 &amp;&amp; 'text-indigo-500'" @click="selected = 4;open = false" @focus="open = true" @focusout="open = false">
                                        <svg class="ub mr-2 du text-indigo-500" :class="selected !== 4 &amp;&amp; 'invisible'" width="12" height="9" viewBox="0 0 12 9">
                                            <path d="M10.28.28L3.989 6.575 1.695 4.28A1 1 0 00.28 5.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28.28z"></path>
                                        </svg>
                                        <span>All Time</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Filter button -->
                        <div class="y inline-flex">
                            <button class="btn bg-white border-slate-200 hover--border-slate-300 text-slate-500 hover--text-slate-600">
                                <span class="d">Filter</span><wbr>
                                <svg class="oo sl du" viewBox="0 0 16 16">
                                    <path d="M9 15H7a1 1 0 010-2h2a1 1 0 010 2zM11 11H5a1 1 0 010-2h6a1 1 0 010 2zM13 7H3a1 1 0 010-2h10a1 1 0 010 2zM15 3H1a1 1 0 010-2h14a1 1 0 010 2z"></path>
                                </svg>
                            </button>
                        </div>

                        <!-- Add customer button -->
                        <button class="btn ho xi ye">
                            <svg class="oo sl du bf ub" viewBox="0 0 16 16">
                                <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
                            </svg>
                            <span class="hidden trm nq">Add Customer</span>
                        </button>

                    </div>

                </div>

                <!-- Table -->
                <div class="bg-white bd rounded-sm border border-slate-200">
                    <header class="vc vu">
                        <h2 class="gh text-slate-800">All Customers <span class="gq gp">248</span></h2>
                    </header>
                    <div x-data="handleSelect">

                        <!-- Table -->
                        <div class="lf">
                            <table class="ux ou">
                                <!-- Table header -->
                                <thead class="go gh gv text-slate-500 hp co cs border-slate-200">
                                <tr>
                                    <th class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select all</span>
                                                <input id="parent-checkbox" class="i" type="checkbox" @click="toggleAll">
                                            </label>
                                        </div>
                                    </th>
                                    <th class="vi wy w_ vo lm of">
                                        <span class="d">Favourite</span>
                                    </th>
                                    <th class="vi wy w_ vo lm">
                                        <div class="gh gt">Order</div>
                                    </th>
                                    <th class="vi wy w_ vo lm">
                                        <div class="gh gt">Email</div>
                                    </th>
                                    <th class="vi wy w_ vo lm">
                                        <div class="gh gt">Location</div>
                                    </th>
                                    <th class="vi wy w_ vo lm">
                                        <div class="gh">Orders</div>
                                    </th>
                                    <th class="vi wy w_ vo lm">
                                        <div class="gh gt">Last order</div>
                                    </th>
                                    <th class="vi wy w_ vo lm">
                                        <div class="gh gt">Total spent</div>
                                    </th>
                                    <th class="vi wy w_ vo lm">
                                        <div class="gh">Refunds</div>
                                    </th>
                                    <th class="vi wy w_ vo lm">
                                        <span class="d">Menu</span>
                                    </th>
                                </tr>
                                </thead>
                                <!-- Table body -->
                                <tbody class="text-sm le lr">
                                <!-- Row -->
                                <tr>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center y">
                                            <button>
                                                <svg class="oo sl ub du yn" viewBox="0 0 16 16">
                                                    <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="flex items-center">
                                            <div class="od sy ub mr-2 _b">
                                                <img class="rounded-full" src="./images/user-40-01.jpg" width="40" height="40" alt="User 01">
                                            </div>
                                            <div class="gp text-slate-800">Patricia Semklo</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">patricia.semklo@app.com</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">🇬🇧 London, UK</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">24</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yv">#123567</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yt">$2,890.66</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">-</div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <button class="gq xv rounded-full">
                                            <span class="d">Menu</span>
                                            <svg class="os sf du" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row -->
                                <tr>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="flex items-center y">
                                            <button>
                                                <svg class="oo sl ub du yf" viewBox="0 0 16 16">
                                                    <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="flex items-center">
                                            <div class="od sy ub mr-2 _b">
                                                <img class="rounded-full" src="./images/user-40-02.jpg" width="40" height="40" alt="User 02">
                                            </div>
                                            <div class="gp text-slate-800">Dominik Lamakani</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">dominik.lamakani@gmail.com</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">🇩🇪 Dortmund, DE</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">77</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yv">#779912</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yt">$14,767.04</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">4</div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <button class="gq xv rounded-full">
                                            <span class="d">Menu</span>
                                            <svg class="os sf du" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row -->
                                <tr>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="flex items-center y">
                                            <button>
                                                <svg class="oo sl ub du yn" viewBox="0 0 16 16">
                                                    <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="flex items-center">
                                            <div class="od sy ub mr-2 _b">
                                                <img class="rounded-full" src="./images/user-40-03.jpg" width="40" height="40" alt="User 03">
                                            </div>
                                            <div class="gp text-slate-800">Ivan Mesaros</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">imivanmes@gmail.com</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">🇫🇷 Paris, FR</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">44</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yv">#889924</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yt">$4,996.00</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">1</div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <button class="gq xv rounded-full">
                                            <span class="d">Menu</span>
                                            <svg class="os sf du" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row -->
                                <tr>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="flex items-center y">
                                            <button>
                                                <svg class="oo sl ub du yf" viewBox="0 0 16 16">
                                                    <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="flex items-center">
                                            <div class="od sy ub mr-2 _b">
                                                <img class="rounded-full" src="./images/user-40-04.jpg" width="40" height="40" alt="User 04">
                                            </div>
                                            <div class="gp text-slate-800">Maria Martinez</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">martinezhome@gmail.com</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">🇮🇹 Bologna, IT</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">29</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yv">#897726</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yt">$3,220.66</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">2</div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <button class="gq xv rounded-full">
                                            <span class="d">Menu</span>
                                            <svg class="os sf du" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row -->
                                <tr>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="flex items-center y">
                                            <button>
                                                <svg class="oo sl ub du yn" viewBox="0 0 16 16">
                                                    <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="flex items-center">
                                            <div class="od sy ub mr-2 _b">
                                                <img class="rounded-full" src="./images/user-40-05.jpg" width="40" height="40" alt="User 05">
                                            </div>
                                            <div class="gp text-slate-800">Vicky Jung</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">itsvicky@contact.com</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">🇬🇧 London, UK</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">22</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yv">#123567</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yt">$2,890.66</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">-</div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <button class="gq xv rounded-full">
                                            <span class="d">Menu</span>
                                            <svg class="os sf du" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row -->
                                <tr>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="flex items-center y">
                                            <button>
                                                <svg class="oo sl ub du yn" viewBox="0 0 16 16">
                                                    <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="flex items-center">
                                            <div class="od sy ub mr-2 _b">
                                                <img class="rounded-full" src="./images/user-40-06.jpg" width="40" height="40" alt="User 06">
                                            </div>
                                            <div class="gp text-slate-800">Tisho Yanchev</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">tisho.y@kurlytech.com</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">🇬🇧 London, UK</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">14</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yv">#896644</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yt">$1,649.99</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">1</div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <button class="gq xv rounded-full">
                                            <span class="d">Menu</span>
                                            <svg class="os sf du" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row -->
                                <tr>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="flex items-center y">
                                            <button>
                                                <svg class="oo sl ub du yn" viewBox="0 0 16 16">
                                                    <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="flex items-center">
                                            <div class="od sy ub mr-2 _b">
                                                <img class="rounded-full" src="./images/user-40-07.jpg" width="40" height="40" alt="User 07">
                                            </div>
                                            <div class="gp text-slate-800">James Cameron</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">james.ceo@james.tech</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">🇫🇷 Marseille, FR</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">34</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yv">#136988</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yt">$3,569.87</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">2</div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <button class="gq xv rounded-full">
                                            <span class="d">Menu</span>
                                            <svg class="os sf du" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row -->
                                <tr>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="flex items-center y">
                                            <button>
                                                <svg class="oo sl ub du yf" viewBox="0 0 16 16">
                                                    <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="flex items-center">
                                            <div class="od sy ub mr-2 _b">
                                                <img class="rounded-full" src="./images/user-40-08.jpg" width="40" height="40" alt="User 08">
                                            </div>
                                            <div class="gp text-slate-800">Haruki Masuno</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">haruki@supermail.jp</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">🇯🇵 Tokio, JP</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">112</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yv">#442206</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yt">$19,246.07</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">6</div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <button class="gq xv rounded-full">
                                            <span class="d">Menu</span>
                                            <svg class="os sf du" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row -->
                                <tr>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="flex items-center y">
                                            <button>
                                                <svg class="oo sl ub du yn" viewBox="0 0 16 16">
                                                    <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="flex items-center">
                                            <div class="od sy ub mr-2 _b">
                                                <img class="rounded-full" src="./images/user-40-09.jpg" width="40" height="40" alt="User 09">
                                            </div>
                                            <div class="gp text-slate-800">Joe Huang</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">joehuang@hotmail.com</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">🇨🇳 Shanghai, CN</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">64</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yv">#764321</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yt">$12,276.92</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">-</div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <button class="gq xv rounded-full">
                                            <span class="d">Menu</span>
                                            <svg class="os sf du" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Row -->
                                <tr>
                                    <td class="vi wy w_ vo lm of">
                                        <div class="flex items-center">
                                            <label class="inline-flex">
                                                <span class="d">Select</span>
                                                <input class="table-item i" type="checkbox" @click="uncheckParent">
                                            </label>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="flex items-center y">
                                            <button>
                                                <svg class="oo sl ub du yf" viewBox="0 0 16 16">
                                                    <path d="M8 0L6 5.934H0l4.89 3.954L2.968 16 8 12.223 13.032 16 11.11 9.888 16 5.934h-6L8 0z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="flex items-center">
                                            <div class="od sy ub mr-2 _b">
                                                <img class="rounded-full" src="./images/user-40-10.jpg" width="40" height="40" alt="User 10">
                                            </div>
                                            <div class="gp text-slate-800">Carolyn McNeail</div>
                                        </div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">carolynlove@gmail.com</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt">🇮🇹 Milan, IT</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">19</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yv">#908764</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gt gp yt">$1,289.97</div>
                                    </td>
                                    <td class="vi wy w_ vo lm">
                                        <div class="gn">2</div>
                                    </td>
                                    <td class="vi wy w_ vo lm of">
                                        <button class="gq xv rounded-full">
                                            <span class="d">Menu</span>
                                            <svg class="os sf du" viewBox="0 0 32 32">
                                                <circle cx="16" cy="16" r="2"></circle>
                                                <circle cx="10" cy="16" r="2"></circle>
                                                <circle cx="22" cy="16" r="2"></circle>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <script>
                    // A basic demo function to handle "select all" functionality
                    document.addEventListener('alpine:init', () => {
                        Alpine.data('handleSelect', () => ({
                            selectall: false,
                            selectAction() {
                                countEl = document.querySelector('.table-items-action');
                                if (!countEl) return;
                                checkboxes = document.querySelectorAll('input.table-item:checked');
                                document.querySelector('.table-items-count').innerHTML = checkboxes.length;
                                if (checkboxes.length > 0) {
                                    countEl.classList.remove('hidden');
                                } else {
                                    countEl.classList.add('hidden');
                                }
                            },
                            toggleAll() {
                                this.selectall = !this.selectall;
                                checkboxes = document.querySelectorAll('input.table-item');
                                [...checkboxes].map((el) => {
                                    el.checked = this.selectall;
                                });
                                this.selectAction();
                            },
                            uncheckParent() {
                                this.selectall = false;
                                document.getElementById('parent-checkbox').checked = false;
                                this.selectAction();
                            }
                        }))
                    })
                </script>

                <!-- Pagination -->
                <div class="rx">
                    <div class="flex ak ja jc jd">
                        <nav class="ri _y _f" role="navigation" aria-label="Navigation">
                            <ul class="flex justify-center">
                                <li class="ml-3 first--ml-0">
                                    <a class="btn bg-white border-slate-200 yf af" href="#0" disabled="">&lt;- Previous</a>
                                </li>
                                <li class="ml-3 first--ml-0">
                                    <a class="btn bg-white border-slate-200 hover--border-slate-300 text-indigo-500" href="#0">Next -&gt;</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="text-sm text-slate-500 gn qe">
                            Showing <span class="gp g_">1</span> to <span class="gp g_">10</span> of <span class="gp g_">467</span> results
                        </div>
                    </div>
                </div>

            </div>
        </main>

    </div>

</div>

<script src="./js/vendors/alpinejs.min.js" defer=""></script>



<script async src='https://www.googletagmanager.com/gtag/js?id=UA-125021779-1'></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-125021779-1', { 'anonymize_ip': true });</script><script>console.log("%cImportant!", "color: blue; font-size: x-large");console.log("%cThe page you are viewing is for demo purposes only. CSS and HTML have been minified and class names have been shortened to improve the page load time. Download our templates from https://cruip.com/ 😉", "font-size: large");</script><script>const pagesList = [{"name":"Dashboard","url":"https://preview.cruip.com/mosaic/index.html","active":false},{"name":"Analytics","url":"https://preview.cruip.com/mosaic/analytics.html","active":false},{"name":"Fintech","url":"https://preview.cruip.com/mosaic/fintech.html","active":false},{"name":"Customers","url":"https://preview.cruip.com/mosaic/customers.html","active":true},{"name":"Orders","url":"https://preview.cruip.com/mosaic/orders.html","active":false},{"name":"Invoices","url":"https://preview.cruip.com/mosaic/invoices.html","active":false},{"name":"Shop","url":"https://preview.cruip.com/mosaic/shop.html","active":false},{"name":"Shop 2","url":"https://preview.cruip.com/mosaic/shop-2.html","active":false},{"name":"Single Product","url":"https://preview.cruip.com/mosaic/product.html","active":false},{"name":"Cart","url":"https://preview.cruip.com/mosaic/cart.html","active":false},{"name":"Cart 2","url":"https://preview.cruip.com/mosaic/cart-2.html","active":false},{"name":"Cart 3","url":"https://preview.cruip.com/mosaic/cart-3.html","active":false},{"name":"Pay","url":"https://preview.cruip.com/mosaic/pay.html","active":false},{"name":"Campaigns","url":"https://preview.cruip.com/mosaic/campaigns.html","active":false},{"name":"Users Tabs","url":"https://preview.cruip.com/mosaic/users-tabs.html","active":false},{"name":"Users Tiles","url":"https://preview.cruip.com/mosaic/users-tiles.html","active":false},{"name":"Profile","url":"https://preview.cruip.com/mosaic/profile.html","active":false},{"name":"Feed","url":"https://preview.cruip.com/mosaic/feed.html","active":false},{"name":"Forum","url":"https://preview.cruip.com/mosaic/forum.html","active":false},{"name":"Forum Post","url":"https://preview.cruip.com/mosaic/forum-post.html","active":false},{"name":"Meetups","url":"https://preview.cruip.com/mosaic/meetups.html","active":false},{"name":"Meetups Post","url":"https://preview.cruip.com/mosaic/meetups-post.html","active":false},{"name":"Cards","url":"https://preview.cruip.com/mosaic/credit-cards.html","active":false},{"name":"Transactions","url":"https://preview.cruip.com/mosaic/transactions.html","active":false},{"name":"Transaction Details","url":"https://preview.cruip.com/mosaic/transaction-details.html","active":false},{"name":"Jobs Listing","url":"https://preview.cruip.com/mosaic/job-listing.html","active":false},{"name":"Jobs Post","url":"https://preview.cruip.com/mosaic/job-post.html","active":false},{"name":"Company Profile","url":"https://preview.cruip.com/mosaic/company-profile.html","active":false},{"name":"Kanban","url":"https://preview.cruip.com/mosaic/tasks-kanban.html","active":false},{"name":"Tasks List","url":"https://preview.cruip.com/mosaic/tasks-list.html","active":false},{"name":"Messages","url":"https://preview.cruip.com/mosaic/messages.html","active":false},{"name":"Inbox","url":"https://preview.cruip.com/mosaic/inbox.html","active":false},{"name":"Calendar","url":"https://preview.cruip.com/mosaic/calendar.html","active":false},{"name":"Applications","url":"https://preview.cruip.com/mosaic/applications.html","active":false},{"name":"My Account","url":"https://preview.cruip.com/mosaic/settings.html","active":false},{"name":"My Notifications","url":"https://preview.cruip.com/mosaic/notifications.html","active":false},{"name":"Connected Apps","url":"https://preview.cruip.com/mosaic/connected-apps.html","active":false},{"name":"Plans","url":"https://preview.cruip.com/mosaic/plans.html","active":false},{"name":"Billing & Invoices","url":"https://preview.cruip.com/mosaic/billing.html","active":false},{"name":"Give Feedback","url":"https://preview.cruip.com/mosaic/feedback.html","active":false},{"name":"Changelog","url":"https://preview.cruip.com/mosaic/changelog.html","active":false},{"name":"Roadmap","url":"https://preview.cruip.com/mosaic/roadmap.html","active":false},{"name":"FAQs","url":"https://preview.cruip.com/mosaic/faqs.html","active":false},{"name":"Empty State","url":"https://preview.cruip.com/mosaic/empty-state.html","active":false},{"name":"Page Not Found","url":"https://preview.cruip.com/mosaic/404.html","active":false},{"name":"Knowledge Base","url":"https://preview.cruip.com/mosaic/knowledge-base.html","active":false},{"name":"Sign in","url":"https://preview.cruip.com/mosaic/signin.html","active":false},{"name":"Sign up","url":"https://preview.cruip.com/mosaic/signup.html","active":false},{"name":"Reset password","url":"https://preview.cruip.com/mosaic/reset-password.html","active":false},{"name":"Onboarding 1","url":"https://preview.cruip.com/mosaic/onboarding-01.html","active":false},{"name":"Onboarding 2","url":"https://preview.cruip.com/mosaic/onboarding-02.html","active":false},{"name":"Onboarding 3","url":"https://preview.cruip.com/mosaic/onboarding-03.html","active":false},{"name":"Onboarding 4","url":"https://preview.cruip.com/mosaic/onboarding-04.html","active":false},{"name":"Button","url":"https://preview.cruip.com/mosaic/component-button.html","active":false},{"name":"Input Form","url":"https://preview.cruip.com/mosaic/component-form.html","active":false},{"name":"Dropdown","url":"https://preview.cruip.com/mosaic/component-dropdown.html","active":false},{"name":"Alert & Banner","url":"https://preview.cruip.com/mosaic/component-alert.html","active":false},{"name":"Modal","url":"https://preview.cruip.com/mosaic/component-modal.html","active":false},{"name":"Pagination","url":"https://preview.cruip.com/mosaic/component-pagination.html","active":false},{"name":"Tabs","url":"https://preview.cruip.com/mosaic/component-tabs.html","active":false},{"name":"Breadcrumb","url":"https://preview.cruip.com/mosaic/component-breadcrumb.html","active":false},{"name":"Badge","url":"https://preview.cruip.com/mosaic/component-badge.html","active":false},{"name":"Avatar","url":"https://preview.cruip.com/mosaic/component-avatar.html","active":false},{"name":"Tooltip","url":"https://preview.cruip.com/mosaic/component-tooltip.html","active":false},{"name":"Accordion","url":"https://preview.cruip.com/mosaic/component-accordion.html","active":false},{"name":"Icons","url":"https://preview.cruip.com/mosaic/component-icons.html","active":false}];if(window != top){window.parent.postMessage(pagesList, "https://cruip.com")};</script></body></html>
