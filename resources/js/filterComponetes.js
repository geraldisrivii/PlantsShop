let inputs = document.querySelectorAll('.input-list')
let options = null;
for (const input of inputs) {
    input.addEventListener('click', function () {
        let optionsAll = document.querySelectorAll(`.input-list-box-options`);

        for (const optionsOne of optionsAll) {
            if (optionsOne.getAttribute('for') == input.getAttribute('id')) {
                options = optionsOne
                break;
            }
        }
        options.classList.toggle('input-list-box-options_active');
        for (const element of options.children) {
            buttons = element.querySelectorAll('.input-list-box-options__button');
            for (const button of buttons) {
                button.addEventListener('click', function () {
                    input.value = button.innerText;
                    document.querySelector(`[for="${input.getAttribute('id')}"]`).textContent = button.innerText;
                    input.value = button.id;
                    console.log(button.id)
                    console.log(input.value)
                    options.classList.toggle('input-list-box-options_active');
                })
            }
        }
    })
}
let listButtons = document.querySelectorAll('.input-list-box-options-list__button');
for (const button of listButtons) {
    button.addEventListener('mouseover', function () {
        let list = document.getElementById(button.getAttribute('for'))
        list.style.left = button.clientWidth + 'px';
        list.classList.toggle('input-list-box-options-list-options_active');
    });
}
