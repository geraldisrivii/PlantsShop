@php
    $amount = 0;
@endphp
<section class="Good-basket-section-2">
    <x-order-box>
        @foreach ($basketItems as $item)
            @php
                if ($item->good->sale != null) {
                    $amount += $item->good->sale->new_price * $item->amount;
                } else {
                    $amount += $item->good->price * $item->amount;
                }
            @endphp
            <x-order-item :basketItem="$item"></x-order-item>
        @endforeach
    </x-order-box>
    <div class="Good-basket-section-2-info-container">
        <div class="Good-basket-section-2-info-box">
            <div class="Good-basket-section-2-info-box__item">
                <p class="Good-basket-section-2-info-box__text">Итоговая сумма:</p>
                <p class="Good-basket-section-2-info-box__price Good-basket-section-2-info-box__price_not-sale">
                    {{ $amount }} руб</p>
            </div>
            <div class="Good-basket-section-2-info-box__item">
                <p class="Good-basket-section-2-info-box__text">Со скидкой по <span>карте</span>:</p>
                <p class="Good-basket-section-2-info-box__price Good-basket-section-2-info-box__price_sale">
                    {{ round(($amount / 105) * 100, 2) }} руб</p>
            </div>
            <x-form-template method="{{ session('user') == null ? 'GET' : 'POST' }}"
                action="{{ session('user') == null ? route('users.create') : route('orders.store') }}"
                class="Good-basket-section-2-info-box-actions">
                <x-button link href="!#" modifier="target" class="Good-basket-section-2-info-box-actions__button">
                    Оформить карту
                </x-button>
                @if (session('user') != null)
                    <input type="hidden" name="amount" value="{{ $amount }}">

                    <input type="hidden" name="user_id" value="{{ session('user')->id }}">

                    <input type="hidden" name="status" value="1">
                @else
                    <input type="hidden" name="redirect" value="basket.index">
                @endif
                <x-button type="submit" class="Good-basket-section-2-info-box-actions__button">Оформить заказ
                </x-button>
            </x-form-template>
        </div>
        <div class="Good-basket-section-2-info-box_2"></div>
    </div>
</section>

<script>
    let BasketItems = @json($basketItems);
    console.log(BasketItems)

    let amountItem = document.querySelector('.Good-basket-section-2-info-box__price_not-sale');
    let amountItemSale = document.querySelector('.Good-basket-section-2-info-box__price_sale');


    let addBtns = document.querySelectorAll('.add-btn');
    for (const addBtn of addBtns) {
        addBtn.addEventListener('click', async () => {
            let data = await fetch(`http://localhost:150/api/basket/inc/${addBtn.id}`, {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    'amount': 1
                })
            }).then(response => response.json())
            if (data.status == 'ok') {
                console.log(data)
                document.querySelector('[for="' + addBtn.id + '"]').textContent = data.object.amount +
                    ' шт'
                let amountValue = amountItem.textContent;
                let amountValueWithoutPostfix = Number(amountValue.slice(0, -4))
                let BasketItem = null;
                for (const item of BasketItems) {
                    if (item.id == addBtn.id) {
                        BasketItem = item
                    }
                }
                amountItem.textContent = Math.round(amountValueWithoutPostfix + BasketItem.good.price) +
                    ' руб';

                amountItemSale.textContent = Math.round((amountValueWithoutPostfix + BasketItem.good
                    .price) / 105 * 100) + ' руб';
            }
        })
    }

    let deleteBtns = document.querySelectorAll('.delete-btn');
    for (const deleteBtn of deleteBtns) {
        deleteBtn.addEventListener('click', async () => {
            let data = await fetch(`http://localhost:150/api/basket/dec/${deleteBtn.id}`, {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    'amount': 1
                })
            }).then(response => response.json())
            if (data.status == 'ok') {
                console.log(data)
                if (data.object.amount < 1) {
                    let dataDelete = await fetch(`http://localhost:150/api/basket/${deleteBtn.id}`, {
                        method: 'DELETE',
                    }).then(response => response.json())
                    if (dataDelete.status == 'ok') {
                        console.log('deleted')
                        let orderItem = document.getElementById('order-item-' + deleteBtn.id)
                        console.log(orderItem)
                        orderItem.remove()
                    }
                } else {
                    document.querySelector('[for="' + deleteBtn.id + '"]').textContent = data.object
                        .amount + ' шт'

                    let amountValue = amountItem.textContent;
                    let amountValueWithoutPostfix = Number(amountValue.slice(0, -4))
                    console.log(deleteBtn.id)
                    let BasketItem = null;
                    for (const item of BasketItems) {
                        if (item.id == deleteBtn.id) {
                            BasketItem = item
                        }
                    }
                    amountItem.textContent = Math.round(amountValueWithoutPostfix - BasketItem.good.price) +
                        ' руб';

                    amountItemSale.textContent = Math.round((amountValueWithoutPostfix - BasketItem.good
                        .price) / 105 * 100) + ' руб';
                }
            }
        })
    }
</script>
