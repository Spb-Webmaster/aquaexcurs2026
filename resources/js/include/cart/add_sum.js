export function add_sum() {

    /** кнопка добавить **/
    const addHumans = Array.from(document.querySelectorAll('.app_add-human'))
    /** родитель блока с кнопкой  **/
    const appResult = document.querySelector('.app_cart_cart-result');
    /** scroll  **/
    const scrollCart = document.getElementById('scroll-cart');
    /** итог **/
    const total = document.querySelector('.app-cart-total');
    /** предупреждение о покупки только детского билета **/
    const typeTicket = document.querySelector('.app-type_ticket');
    /** финальная кнопка **/
    const buttonToBasket = document.querySelector('.app_send_to_basket');
    /** список всех компонентов с ценой и счетчиком количества **/
    const carts = Array.from(document.querySelectorAll('.app_cart-cart'))


    for (let addHuman of addHumans) {

        addHuman.addEventListener('click', add);

        function add(e) {

            appResult.classList.add('active')
            e.target.classList.add('active')

            const price = Number(e.target.dataset.price);
            const human = e.target.dataset.human;
            const key = e.target.dataset.key;
            let humanCount = 0;
            let sum = 0;
            const desiredParent = e.target.closest('.app_parent_cart');


            /** количество на счетчике **/
            if (desiredParent) {
                /**  заменитель parents **/
                humanCount = Number(desiredParent.querySelector('.digit-container').textContent)
                // console.log(humanCount)
            }

            /**  scroll **/
            if (!document.querySelector('.new-block-result-cart')) {
                /**  если не было еще - то скролим **/
                scrollCart.scrollIntoView({behavior: 'smooth'});

            }

            /**  умножим **/
            if (humanCount > 0) {
                sum = humanCount * price
                /** откроем общий итог**/
                total.classList.add('active')


            }


            /** Проверяем, существует ли уже элемент с таким ключом **/
            const isKeyExists = Array.from(appResult.children).some(child => child.dataset.key === key);
            if (!isKeyExists) {

                const newDiv = document.createElement("div");
                newDiv.className = "new-block-result-cart";
                newDiv.setAttribute("data-key", key); // устанавливаем атрибут data-key="key"
                const content = document.querySelector('.app_temp_cart')
                // Внутри контейнера ищем элемент с классом app_set_price
                const priceElement = content.querySelector('.app_set_price');
                // Меняем текст внутри элемента
                priceElement.textContent = price;
                // Внутри контейнера ищем элемент с классом app_set_human
                const humanElement = content.querySelector('.app_set_human');
                // Меняем текст внутри элемента
                humanElement.textContent = human;
                // Внутри контейнера ищем элемент с классом app_set_count
                const countElement = content.querySelector('.app_set_count');
                // Меняем текст внутри элемента
                countElement.textContent = humanCount;
                // Внутри контейнера ищем элемент с классом app_set_count
                const sumElement = content.querySelector('.app_set_sum');
                // Меняем текст внутри элемента
                sumElement.textContent = sum;

                newDiv.innerHTML = content.innerHTML;
                appResult.appendChild(newDiv);

                /** сложение всех данных **/
                allSum()


            }
            /** проверка билетов - 2 это детский **/
            checkTypeTicket(2)


            /** кнопка удалить - писать можно только здесь, так как кнопка удалить появилась только что **/
            const deleteHumans = Array.from(document.querySelectorAll('.app_cart_item_del'))

            for (let deleteHuman of deleteHumans) {

                deleteHuman.addEventListener('click', del);

                function del(e) {

                    /** удаляем блок **/
                    const desiredParent = e.target.closest('.new-block-result-cart');
                    const desiredParentKey = e.target.closest('.new-block-result-cart').dataset.key;
                    desiredParent.remove();

                    /** проверяем основной массив с humans что бы удалить значение счетчика и перекрасить кнопку **/
                    for (let cart of carts) {

                        if (cart.dataset.key === desiredParentKey) {

                            let addH = cart.querySelector('.app_add-human')
                            addH.classList.remove('active')

                            let digit = cart.querySelector('.digit-container')
                            digit.textContent = 1;

                            allSum()

                        }
                    }

                    const newBlocksLength = Array.from(document.querySelectorAll('.new-block-result-cart')).length

                    if (!newBlocksLength) {
                        total.classList.remove('active')
                    }

                    /** проверка билетов - 2 это детский **/
                    checkTypeTicket(2)


                }


            }

        }


    }


    /** Счетчик **/
    /**  Нажатие на плюс-минус **/
    let counters = Array.from(document.querySelectorAll('.aqua_counter'))

    for (let counter of counters) {


        // image.addEventListener('click', imageClicked)

        const minusButton = counter.querySelector('.aqua_minus');
        const plusButton = counter.querySelector('.aqua_plus');
        const digitContainer = counter.querySelector('.digit-container');


        let currentNumber = 1;
        let cNewPrice = 1;
        let cKey;
        let cIsKeyExists;
        let cResult;

        /** Обработчики событий **/
        minusButton.addEventListener('click', (e) => {
            if (currentNumber > 1) {
                updateDigit(currentNumber - 1);
            }

            cNewPrice = newSum(currentNumber, e)
            /** новая сумма **/
            cKey = getKey(e)  /** ключ для результата **/

            cIsKeyExists = Array.from(appResult.children).some(child => child.dataset.key === cKey);
            if (cIsKeyExists) {
                newSumResult(cKey, cNewPrice, currentNumber, e) /** посчитали и записали в результат на экран **/
            }

            //new-block-result-cart
            /** сложение всех данных **/
            allSum()

        });

        plusButton.addEventListener('click', (e) => {
            if (currentNumber < 50) {
                updateDigit(currentNumber + 1);
            }

            cNewPrice = newSum(currentNumber, e)
            /** новая сумма **/
            cKey = getKey(e) /** ключ для результата **/

            cIsKeyExists = Array.from(appResult.children).some(child => child.dataset.key === cKey);
            if (cIsKeyExists) {
                newSumResult(cKey, cNewPrice, currentNumber, e) /** посчитали и записали в результат на экран **/

            }
            /** сложение всех данных **/
            allSum()


        });


        /** Функция обновления значения **/
        function updateDigit(newNumber) {

            const newSpan = document.createElement('span'); // Создаем новую цифру
            newSpan.textContent = newNumber.toString();

            digitContainer.appendChild(newSpan); // добавляем новую цифру
            digitContainer.removeChild(digitContainer.firstChild); // Удаляем первую цифру

            currentNumber = newNumber;
        }

        /** Результат умножение на новое количество человек**/
        function newSum(cNumber, e) {
            const desiredParent = e.target.closest('.app_parent_cart');
            let cPrice = desiredParent.querySelector('.app_add-human').dataset.price;
            return cPrice * cNumber;
        }

        /** умножение на новое количество человек**/
        function getKey(e) {
            const desiredParent = e.target.closest('.app_parent_cart');
            return desiredParent.querySelector('.app_add-human').dataset.key;

        }

        /** Отфильтруем и запишем новые данные о человеке **/
        function newSumResult(key, sum, cNumber, e) {

            /** найдем новый созданный блок **/
            const newBlocks = Array.from(document.querySelectorAll('.new-block-result-cart'))

            /** отфильтруем его и внесем новые данные **/
            newBlocks.filter(block => {
                if (block.getAttribute('data-key') === key) {
                    block.querySelector('.app_set_sum').innerHTML = sum;
                    block.querySelector('.app_set_count').innerHTML = cNumber;
                }
            })


        }


    }


    /** сумма всех humans  **/
    function allSum() {
        /** сложим  **/
        const arrayNewBlocks = Array.from(document.querySelectorAll('.new-block-result-cart'))
        // Переменная для хранения итоговой суммы
        let totalSum = 0;

        for (let arrayNewBlock of arrayNewBlocks) {
            let valueText = arrayNewBlock.querySelector('.app_set_sum').textContent.trim();
            let numericValue = parseFloat(valueText); // Парсим строку в число

            if (!isNaN(numericValue)) { // Проверяем, является ли значение числом
                totalSum += numericValue;
            }
        }

        total.querySelector('.app-cart-sum').textContent = formatPrice(totalSum);

    }

    /** проверим. Нельзя покупать только детям   **/
    function checkTypeTicket(k) {
        const newBlocks = Array.from(document.querySelectorAll('.new-block-result-cart'))
        if(newBlocks.length === 1) {
            newBlocks.filter(block => {
                if (block.dataset.key === String(k)) {
                    typeTicket.classList.add('active')
                    buttonToBasket.classList.add('deactivate')
                }
            })
        } else {
            typeTicket.classList.remove('active')
            buttonToBasket.classList.remove('deactivate')
        }
    }

    function formatPrice(price) {

        // Формируем локализованное число с разделителем
        return Number(price).toLocaleString('ru-RU', {
            /*      style: 'currency',
                  currency: 'RUB',*/
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        });

        // Выводим результат в абзац
        // document.getElementById("formattedPrice").innerHTML = formattedPrice + '';
    }
}
