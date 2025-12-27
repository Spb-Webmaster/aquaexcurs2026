<header>
    <div class="block_header block">
        <div class="block_header__flex">
            <div class="block_header__left">
                <div class="header_logo">
                    <x-logo.logo-component :route-name="route_name()" />
                </div>
            </div>
            <div class="block_header__center">
                <div class="header_menu">
                    <x-menu.header-menu-component />
                </div>
            </div>
            <div class="block_header__right">
                <div class="header_phone_email_blind">
                    <div class="header_phone_email">
                        <div class="header_phone"><a href="tel:+{{config2('moonshine.setting.phone')}}">{{ format_phone(config2('moonshine.setting.phone')) }}</a></div>
                        <div class="header_email">{{ config2('moonshine.setting.email') }}</div>
                    </div>
                    <x-blind.blind />

                </div>
            </div>

        </div>
    </div>
    <div class="d12__flex">
        <div class="d12"></div>
        <div class="d13"></div>
    </div>
</header>
