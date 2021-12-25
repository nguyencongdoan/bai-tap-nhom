<header id="header" class="module header w-full top-0 left-0 fixed z-200 down_lg:overflow-hidden">
    <div class="header-container mx-16 px-8 3xl:max-w-[1856px]">
        <nav class="row navbar items-center h-[113px] text-xl xl:justify-between down_xl:justify-around ">
            <div class="col w-2/3 down_lg:flex down_xl:w-[70%] flex-shrink header-mobile relative items-center">
                <div class="lg:w-full flex flex-row items-center relative">
                    <a id="header-logo" class="navbar-brand header-logo py-5 inline-block align-middle"
                        href="{!! App::getLogo()['href'] !!}">
                        <img src="@asset('images/logo.png')" alt="" class="xl:w-50 sm:w-35 down_lg:w-[70%]">
                    </a>
                    <div class="col w-full navbar-collapse main-menu flex down_lg:absolute down_lg:top-[84px] down_lg:left-[-30px]" id="main-menu" data-module="menu">
                        <ul class="main-menu-ul navbar-nav list-none flex mb-0 p-0 flex-col text-inherit
                                lg:flex-row text-black sm:text-sm 2xl:text-xl down_sm:text-sm">
                            <li class="menu-item mb-0 ">
                                <a class="block py-9 xl:p-9 p-7 " href="#">Trang chủ</a>
                            </li>
                            <li class="menu-item mb-0">
                                <a class="block py-9 xl:p-9 p-7 " href="#">Sản phẩm</a>
                            </li>
                            <li class="menu-item mb-0">
                                <a class="block py-9 xl:p-9 p-7 " href="#">Tìm cửa hàng</a>
                            </li>

                            <li class="active menu-item mb-0">
                                <a class="block py-9 xl:p-9 p-7 " href="#">Thông tin</a>
                            </li>             
                        </ul>
                    </div>
                </div>
            </div>

            <div class="block lg:hidden">
                <button class="navbar-toggler hamburger-menu p-4 mt-0 cursor-pointer" type="button"
                    data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar block bg-white relative ml-auto w-16 h-2"></span>
                    <span class="icon-bar block bg-white relative ml-auto w-16 h-2 mt-3"></span>
                    <span class="icon-bar block bg-white relative ml-auto w-16 h-2 mt-3"></span>
                    <span class="sr-only">Open Menu</span>
                </button>
            </div>
            <div class="col flex-shrink down_lg:hidden down_xl:text-sm down_xl:w-[30%] sm:text-sm 2xl:text-xl flex items-center">
                <input type="text" class="w-75 h-16 hidden duration-250 ease-in-out rounded border-solid border-red-500 border-2 focus:border-red-500" id="input-search">
                <button type="button" class="icomoon-btn">
                    <span class="icomoon icon-icon-search"></span>
                </button>
                <a href="#" class="btn">Đăng nhập</a>
                <a href="#" class="font-medium hover:text-red-600 active:text-red-600">Đăng ký</a>
            </div>
        </nav>
    </div>
</header>
