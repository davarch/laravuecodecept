<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <aside class="sidebar">

        <div class="sidebar__header">
            <div class="sidebar__header-logo">
                <svg width="38" height="27" viewBox="0 0 38 27" fill="none" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="38" height="27" fill="url(#pattern0)"/>
                    <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0" transform="scale(0.0128205 0.0181818)"/>
                        </pattern>
                        <image id="image0" width="78" height="55"
                               xlink:href="data:image/png;base64,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"/>
                    </defs>
                </svg>
            </div>
            <div class="sidebar__header-title">
                Vuesax
            </div>
            <div class="sidebar__header-round">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M11 20C15.9706 20 20 15.9706 20 11C20 6.02944 15.9706 2 11 2C6.02944 2 2 6.02944 2 11C2 15.9706 6.02944 20 11 20Z"
                          stroke="#7E72F2" stroke-width="3"/>
                </svg>
            </div>
        </div>

        <nav class="sidebar__menu">
            <div class="sidebar__menu-list">
                <a href="/admin/dashboard" class="sidebar__menu-item">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z"
                              stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__menu-item-name">Dashboard</span>
                </a>
                <a href="/admin/news" class="sidebar__menu-item">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z"
                              stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__menu-item-name">News</span>
                </a>
                <a href="/admin/blog" class="sidebar__menu-item">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M6 11C8.76142 11 11 8.76142 11 6C11 3.23858 8.76142 1 6 1C3.23858 1 1 3.23858 1 6C1 8.76142 3.23858 11 6 11Z"
                              stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__menu-item-name">Blog</span>
                </a>
            </div>
        </nav>

        <nav class="sidebar__menu">
            <div class="sidebar__menu-title">Apps</div>
            <div class="sidebar__menu-list">
                <a href="/admin/todos" class="sidebar__menu-item">
                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M2.6 1.22797H15.4C16.28 1.22797 17 1.9517 17 2.83626V12.486C17 13.3706 16.28 14.0943 15.4 14.0943H2.6C1.72 14.0943 1 13.3706 1 12.486V2.83626C1 1.9517 1.72 1.22797 2.6 1.22797Z"
                              stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17 2.83624L9 7.30372L1 2.83624" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__menu-item-name">Email</span>
                </a>
                <a href="/admin/todos" class="sidebar__menu-item">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M17 12.1468C17 13.1337 16.2041 13.9338 15.2222 13.9338H4.55556L1 17.5078V3.21185C1 2.22493 1.79594 1.42487 2.77778 1.42487H15.2222C16.2041 1.42487 17 2.22493 17 3.21185V12.1468Z"
                              stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__menu-item-name">Chat</span>
                </a>
                <a href="/admin/todos" class="sidebar__menu-item">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.05261 8.40911L8.57893 10.9485L17 2.48383" stroke="white" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <path
                            d="M16.1579 9.25555V15.1808C16.1579 16.1158 15.4038 16.8738 14.4737 16.8738H2.68421C1.75405 16.8738 1 16.1158 1 15.1808V3.33027C1 2.39528 1.75405 1.63733 2.68421 1.63733H11.9474"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__menu-item-name">Todo</span>
                </a>
                <a href="/admin/todos" class="sidebar__menu-item">
                    <svg width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="3.85492" width="16" height="16.0829" rx="2" stroke="white" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12.5 1.84454V5.86527" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M5.5 1.84454V5.86527" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M1 9.38339H17" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__menu-item-name">Calendar</span>
                </a>
            </div>
        </nav>

        <nav class="sidebar__menu">
            <div class="sidebar__menu-title">UI elements</div>
            <div class="sidebar__menu-list">
                <a href="/admin/todos" class="sidebar__menu-item">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="1.17871" width="16" height="16.0681" rx="2" stroke="white" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1 6.53475H17" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M6.33336 17.2468V6.53473" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__menu-item-name">Grid</span>
                </a>
                <a href="/admin/todos" class="sidebar__menu-item">
                    <svg width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M8.52938 1.0174L13.8564 6.43081C16.0109 8.61872 16.656 11.9101 15.4908 14.7699C14.3257 17.6297 11.5799 19.4945 8.53409 19.4945C5.48828 19.4945 2.74247 17.6297 1.57735 14.7699C0.412226 11.9101 1.05732 8.61872 3.21174 6.43081L8.52938 1.0174Z"
                              stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__menu-item-name">Colors</span>
                </a>
                <a href="/admin/todos" class="sidebar__menu-item">
                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="1.54895" width="16" height="12.0511" rx="2" stroke="white" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1 6.06809H17" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__menu-item-name">Card</span>
                </a>
                <a href="/admin/todos" class="sidebar__menu-item">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="1.71063" width="6.22222" height="6.2487" stroke="white" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <rect x="10.7778" y="1.71063" width="6.22222" height="6.2487" stroke="white" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <rect x="10.7778" y="11.53" width="6.22222" height="6.2487" stroke="white" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <rect x="1" y="11.53" width="6.22222" height="6.2487" stroke="white" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__menu-item-name">Table</span>
                </a>
                <a href="/admin/todos" class="sidebar__menu-item">
                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5454 5.51581V14.9446H2.45453V5.51581" stroke="white" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <rect x="1" y="1.88934" width="16" height="3.62648" stroke="white" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.54547 8.417H10.4546" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__menu-item-name">Components</span>
                </a>
            </div>
        </nav>

        <nav class="sidebar__menu">
            <div class="sidebar__menu-title">Forms</div>
            <div class="sidebar__menu-list">
                <a href="/admin/todos" class="sidebar__menu-item">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="6.59998" y="6.85181" width="10.4" height="10.4539" rx="2" stroke="white"
                              stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path
                            d="M3.4 11.6767H2.6C1.71634 11.6767 1 10.9566 1 10.0684V2.83108C1 1.94285 1.71634 1.22279 2.6 1.22279H9.8C10.6837 1.22279 11.4 1.94285 11.4 2.83108V3.63523"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__menu-item-name">Forms Elements</span>
                </a>
                <a href="/admin/todos" class="sidebar__menu-item">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="1.43005" width="16" height="16.0829" rx="2" stroke="white" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.33336 1.43005V17.513" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__menu-item-name">Form Layouts</span>
                </a>
                <a href="/admin/todos" class="sidebar__menu-item">
                    <svg width="16" height="21" viewBox="0 0 16 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M9.75 1.6373H2.75C1.7835 1.6373 1 2.42486 1 3.39637V17.4689C1 18.4404 1.7835 19.228 2.75 19.228H13.25C14.2165 19.228 15 18.4404 15 17.4689V6.9145L9.75 1.6373Z"
                              stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9.75 1.6373V6.9145H15" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M11.5 11.3122H4.5" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M11.5 14.8303H4.5" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M6.25 7.79403H5.375H4.5" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__menu-item-name">Form Wizard</span>
                </a>
                <a href="/admin/todos" class="sidebar__menu-item">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17 8.95553V9.69534C16.998 13.2567 14.6658 16.3924 11.2683 17.4022C7.87071 18.4119 4.2171 17.0551 2.28875 14.0675C0.360397 11.0799 0.616675 7.17326 2.9186 4.46605C5.22053 1.75884 9.01975 0.896007 12.256 2.34546"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17 3.26218L8.99998 11.3117L6.59998 8.89924" stroke="white" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__menu-item-name">Form Validation</span>
                </a>
            </div>
        </nav>

        <nav class="sidebar__menu">
            <div class="sidebar__menu-title">Pages</div>
            <div class="sidebar__menu-list">
                <a href="/admin/todos" class="sidebar__menu-item">
                    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="9.12312" width="16" height="9.80235" rx="2" stroke="white" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <path
                            d="M4.55554 9.12312V5.55863C4.55554 3.09786 6.54539 1.10302 8.99999 1.10302C11.4546 1.10302 13.4444 3.09786 13.4444 5.55863V9.12312"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__menu-item-name">Authentication</span>
                </a>
                <a href="/admin/todos" class="sidebar__menu-item">
                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M9 17.2513C13.4183 17.2513 17 13.6605 17 9.23115C17 4.80177 13.4183 1.21105 9 1.21105C4.58172 1.21105 1 4.80177 1 9.23115C1 13.6605 4.58172 17.2513 9 17.2513Z"
                              stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 4.41909V9.23115L12.2 10.8352" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__menu-item-name">Coming Soon</span>
                </a>
                <a href="/admin/todos" class="sidebar__menu-item">
                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M7.35492 2.01601L1.19492 12.3255C0.93648 12.7742 0.934937 13.3266 1.19087 13.7768C1.4468 14.2269 1.92177 14.5071 2.43856 14.5128H14.7586C15.2754 14.5071 15.7503 14.2269 16.0062 13.7768C16.2622 13.3266 16.2606 12.7742 16.0022 12.3255L9.8422 2.01601C9.57851 1.58021 9.10699 1.31407 8.59856 1.31407C8.09013 1.31407 7.61861 1.58021 7.35492 2.01601Z"
                              stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.99999 6.41777V9.33417" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <span class="sidebar__menu-item-name">Error</span>
                </a>
            </div>
        </nav>
    </aside>

    <header class="header">
        <div class="header__menu">
            <div class="header__menu-list">
                <div class="header__menu-item">
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 9L10 12L20 2" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path
                            d="M19 10V17C19 18.1046 18.1046 19 17 19H3C1.89543 19 1 18.1046 1 17V3C1 1.89543 1.89543 1 3 1H14"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="header__menu-item">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M19 13C19 14.1046 18.1046 15 17 15H5L1 19V3C1 1.89543 1.89543 1 3 1H17C18.1046 1 19 1.89543 19 3V13Z"
                              stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="header__menu-item">
                    <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M3 1H19C20.1 1 21 1.9 21 3V15C21 16.1 20.1 17 19 17H3C1.9 17 1 16.1 1 15V3C1 1.9 1.9 1 3 1Z"
                              stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21 3L11 10L1 3" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="header__menu-item">
                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1" y="3" width="18" height="18" rx="2" stroke="white" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14 1V5" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M6 1V5" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                        <path d="M1 9H19" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="header__menu-item">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M11 1L14.09 7.26L21 8.27L16 13.14L17.18 20.02L11 16.77L4.82 20.02L6 13.14L1 8.27L7.91 7.26L11 1V1Z"
                              stroke="#FFA84C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="header__language">English</div>
        <div class="header__notification">
            <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16 7C16 3.68629 13.3137 1 10 1C6.68629 1 4 3.68629 4 7C4 14 1 16 1 16H19C19 16 16 14 16 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M11.73 20C11.3722 20.6168 10.7131 20.9965 10 20.9965C9.28695 20.9965 8.62782 20.6168 8.27002 20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="header__search">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M19 19L14.65 14.65" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <div class="header__username">Tim Davarch</div>
        <div class="header__user">
            <img src="{{ asset('img/avatar.png') }}" alt="">
        </div>
    </header>

    <main class="content">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="footer__copyright">COPYRIGHT @ 2019 Pixinvent, All rights Reserved</div>
    </footer>
</div>
</body>
</html>
