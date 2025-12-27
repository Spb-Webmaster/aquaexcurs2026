<footer>
    <div class="image_footer"></div>
    <div class="blue_footer">
        <div class="block">

            <x-menu.footer-menu-component/>

        </div>
        <div class="footer">
        <div class="block">
            <div class="footer__flex">
                <div class="footer__left">
                    <x-logo.logo-footer-component route_name="{{ route_name() }}"/>
                </div>
                <div class="footer__right">

                    <div class="footer_address">
                        {!! config2('moonshine.setting.address') !!}
                    </div>

                    <div class="footer_contacts">
                           <div class="footer_email">
                               {{ config2('moonshine.setting.email') }}
                           </div>
                            <div class="footer_phone">
                                {{ format_phone(config2('moonshine.setting.phone')) }}
                            </div>

                    </div>

                    <div class="footer_vk">
                        <a href="{{ config2('moonshine.setting.vk') }}"><img width="34" height="21" loading="lazy" alt="vk.com" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzUiIGhlaWdodD0iMjEiIHZpZXdCb3g9IjAgMCAzNSAyMSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0zMy4zNDEzIDEuMzkwNUMzMi44NjY3IDMuNTkxIDI4LjMyIDEwLjA3OTEgMjguMzIgMTAuMDc5MUMyNy45MjI3IDEwLjcxOSAyNy43NjUzIDExLjA0MDMgMjguMzIgMTEuNzYxMkMyOC43MTQ3IDEyLjMyMjggMzAuMDE4NyAxMy40NDMzIDMwLjg5MDcgMTQuNDg1NUMzMi40OTMzIDE2LjMxMDcgMzMuNzAxMyAxNy44NTI0IDM0LjA0IDE4LjkxMzVDMzQuMzQ2NyAxOS45OCAzMy44MTMzIDIwLjUyIDMyLjc0NjcgMjAuNTJIMjkuMDEzM0MyNy41ODkzIDIwLjUyIDI3LjE3MzMgMTkuMzY5OCAyNC42NCAxNi44MDc1QzIyLjQyNjcgMTQuNjQ0OCAyMS40NzczIDE0LjM2NCAyMC45MjI3IDE0LjM2NEMyMC4xNzA3IDE0LjM2NCAxOS45NDY3IDE0LjU4IDE5Ljk0NjcgMTUuNjZWMTkuMDUxMkMxOS45NDY3IDE5Ljk4IDE5LjY1MzMgMjAuNTIgMTcuMjggMjAuNTJDMTMuMzI1MyAyMC41MiA4Ljk3ODY3IDE4LjA5IDUuODkzMzMgMTMuNjAyNkMxLjI2NjY3IDcuMDM2MiAwIDIuMDcwOSAwIDEuMDY5MkMwIDAuNTA3NiAwLjIxMzMzMyAwIDEuMjggMEg1LjAxMzMzQzUuOTY4IDAgNi4zMjUzMyAwLjQyMzkgNi42ODUzMyAxLjQ2ODhDOC41MDkzMyA2Ljg1NTMgMTEuNTg5MyAxMS41NjE0IDEyLjg1MzMgMTEuNTYxNEMxMy4zMjggMTEuNTYxNCAxMy41NDY3IDExLjM0IDEzLjU0NjcgMTAuMTE5NlY0LjU1MjJDMTMuNDA4IDEuOTg5OSAxMi4wNjQgMS43NzkzIDEyLjA2NCAwLjg2OTRDMTIuMDY0IDAuNDQ1NSAxMi40MjEzIDAgMTMuMDEzMyAwSDE4Ljg4QzE5LjY3MiAwIDE5Ljk0NjcgMC40MjkzIDE5Ljk0NjcgMS4zOTA1VjguODc3NkMxOS45NDY3IDkuNjc5NSAyMC4yOTA3IDkuOTYwMyAyMC41MjggOS45NjAzQzIxLjAwMjcgOS45NjAzIDIxLjM5NzMgOS42Nzk1IDIyLjI2NjcgOC43OTkzQzI0Ljk1NzMgNS43NTM3IDI2Ljg1NiAxLjA2OTIgMjYuODU2IDEuMDY5MkMyNy4wOTMzIDAuNTA3NiAyNy41MzA3IDAgMjguNDggMEgzMi4yMTMzQzMzLjM0MTMgMCAzMy41Nzg3IDAuNTg4NiAzMy4zNDEzIDEuMzkwNVoiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo=">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</footer>
