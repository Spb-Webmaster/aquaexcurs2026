export function blind() {

    const blind = document.querySelector('.specialButton')
    const footer = document.querySelector('footer')
    const blindBody = document.querySelector('body')

    blind.addEventListener('click', blindPanel)

    function blindPanel() {
        const specialButtonTrue = document.querySelector('.blindPanel')
        if (!specialButtonTrue) {

            blindBody.classList.add('bind')
            const specialButton = document.createElement('div');
            specialButton.innerHTML = '<div class="block"><div class="blindPanel_flex"><div class="blindPanel_left">Версия для слабовидящих </div><div class="blindPanel_right"><div class="blindPanel_reset">Вернуть стандартные настройки</div></div></div>';
            specialButton.classList.add('blindPanel');
            footer.classList.add('footer_blindPanel');
            const reset = specialButton.querySelector('.blindPanel_reset');
            reset.onclick = toggleSettingsPanel;


            document.body.appendChild(specialButton);
        }

    }

    function toggleSettingsPanel() {
        const specialButton = document.querySelector('.blindPanel')
        footer.classList.remove('footer_blindPanel')
        specialButton.remove()
        blindBody.classList.remove('bind')

    }
}
