import {Datepicker} from 'vanillajs-datepicker';
import ru from 'vanillajs-datepicker/locales/ru';

Object.assign(Datepicker.locales, ru);

export function topPositionLabel(elem) {
    // Обработчик события изменения даты
    elem.addEventListener('changeDate', function (event) {
        console.log(elem)
        const parentEl = elem.closest('.input-date-picker')
        const label = parentEl.querySelector('label')
        label.classList.add('position_top')

    });
}

export function datepicker_excursion_date() {


    const elem = document.querySelector('input[name="excursion_date"]');

    if(elem) {
        const today = new Date(); // Получаем сегодняшнюю дату
        const datepicker = new Datepicker(elem, {
            title:'Дата экскурсии',
            language: 'ru',
            format: 'dd.mm.yyyy',
            minDate:  today.toLocaleDateString(),
            maxDate: '01.10.2026',
            autohide: true
        });
        topPositionLabel(elem)
    }
}



export function datepicker_accountant_ticket_date() {

        const elem = document.querySelector('input[name="accountant_ticket_date"]');
        if (elem) {
            const today = new Date(); // Получаем сегодняшнюю дату
            const datepicker = new Datepicker(elem, {
                title: 'Дата выдачи сертификата',
                language: 'ru',
                format: 'dd.mm.yyyy',
                minDate: '01.01.1950',
                maxDate: today.toLocaleDateString(),

            });
            topPositionLabel(elem)

        }
}
