import { imask } from './include/imask';
/*import {tooltip} from './include/tooltip';*/
import {hamburger} from "./include/site/hamburger";
import {yandex_map_object} from "./include/site/yandex_map";
import {swiper} from "./include/site/swiper";
import {mobileMenuComponent} from "./include/site/mobile/mobile-menu-component";
import {removeErrors} from "./include/fancybox/form/removeErrors";
// import {select} from "./include/select/select";
import {flash_message} from "./include/flash_message/flash_message";
import {uploadAvatar} from "./include/cabinet/uploadAvatar";
import {datepicker_accountant_ticket_date, datepicker_date_birthday} from "./include/datepicker/datepicker";
import {blind} from "./include/blind";
import {add_sum} from './include/cart/add_sum';



document.addEventListener('DOMContentLoaded', function () {


    imask() // маска на поле input input[name="phone"]
   /* tooltip() // tooltip */
    hamburger() // открытие и закрытие верхнего меню
    yandex_map_object('43db27ba-be61-4e84-b139-ff37ad4802b8') // карта в объект
    swiper()
    mobileMenuComponent() // мобильное меню
    removeErrors() // убрать ошибки с input`s
    //  select() // select, для axios модальных форм подключается отдельно
    flash_message() // закрытие модального окна
    uploadAvatar() // отправляем аватар пользователя
    blind()
    add_sum() // добавить количество людей и пересчитать сумму

});
