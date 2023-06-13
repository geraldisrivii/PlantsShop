<section class="Good-index-section-2 container">
    <x-filter-box class="Good-index-section-2-filter-box">
        <div class="Good-index-section-2-filter-box-input-list-box">
            <x-input-list class="Good-index-section-2-filter-box__input-list"></x-input-list>
            <x-input-list class="Good-index-section-2-filter-box__input-list"></x-input-list>
        </div>
        <x-input-search class="Good-index-section-2-filter-box__input-search"></x-input-search>
    </x-filter-box>
</section>
<script>
    let inputs = document.querySelectorAll('.input-list')
    let options = null;
    for (const input of inputs) {
        input.addEventListener('click', function () {
            let optionsAll = document.querySelectorAll(`.input-list-box-options`);
            
            for (const optionsOne of optionsAll) {
                if(optionsOne.getAttribute('for') == input.getAttribute('id')) {
                    options = optionsOne
                    break;
                }
            }
            options.classList.toggle('input-list-box-options_active');
            for (const element of options.children) {
                buttons = element.querySelectorAll('.input-list-box-options__button');
                for (const button of buttons) {
                    button.addEventListener('click', function () {
                        console.log(input)
                        input.value = button.value
                        console.log(input)
                        options.classList.toggle('input-list-box-options_active');
                    })
                }
            }
        })
    }
</script>

<script>
    let listButtons = document.querySelectorAll('.input-list-box-options-list__button');
    for (const button of listButtons) {
        button.addEventListener('mouseover', function () {
            let list = document.getElementById(button.getAttribute('for'))
            list.style.left = button.clientWidth + 'px';
            list.classList.toggle('input-list-box-options-list-options_active');
        });
    }
</script>