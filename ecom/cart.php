<?php
require('vendor/autoload.php');

$objCart = new \Eshop\Cart(1);
$cartData = $objCart->getCartData();
//echo "<pre>"; print_r($cartData); echo "</pre>";
?>
<style>
    span {
        cursor: pointer;
    }

    .popup {
        width: 300px;
        /*height: 300px;*/
        flex-direction: column;
        justify-content: space-between;
        align-content: center;
        padding: 30px;
        display: none;

    }

    .order {
        width: 300px;
        background-color: greenyellow;
        flex-direction: column;
        justify-content: space-between;
        align-content: center;
        padding: 30px;

    }

    .order input {
        padding: 5px;
        margin: 10px;
    }
</style>
<table>
    <thead>
        <tr>
            <th>Название</th>
            <th>Кол-во</th>
            <th>Цена</th>
            <th>Удалить</th>
        </tr>
    </thead>
    <tbody>

        <? foreach ($cartData['products'] as $item): ?>
        <tr data-recordId="<?= $item['rid'] ?>">
            <td><?= $item['name'] ?></td>
            <td>
                <span class="decrease-quantity">-</span>
                <span class="quantity"><?= $item['quantity'] ?></span>
                <span class="increase-quantity">+</span>
            </td>
            <td><?= $item['price'] ?></td>
            <td><button class="delete-record">Удалить</button></td>
        </tr>
        <? endforeach; ?>
    </tbody>

</table>
<div style="font-size: 18px">
    Итоговая цена: <span class="total-data"><?= $cartData['total_price'] ?></span>
</div>


<form id="order" class="order">
    <input type="text" name="userId" placeholder="User id">
    <input type="text" name="address" placeholder="Адрес"> <br>
    <input type="submit" class="new-order" value="Оформить"> <br>
    <input type="submit" value="Оплатить">


</form>

</div>
<script>
    let deleteButtons = document.querySelectorAll('.delete-record');
    deleteButtons.forEach(function(elemButton) {
        elemButton.addEventListener('click', function(e) {
            let parentTr = this.closest('tr');
            let recordId = parentTr.dataset.recordid;
            console.log(recordId);
            let params = {
                id: recordId,
                method: 'deleteCartProduct'
            };
            let response = fetch('/handle.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json;charset=utf-8'
                    },
                    body: JSON.stringify(params)
                })
                .then((response) => {
                    return response.json();
                })
                .then((data) => {
                    console.log(data)
                    let totalData = document.querySelector('.total-data').innerHTML = data.totalPrice;
                    parentTr.remove();
                });

        });
    });

    let increaseButton = document.querySelectorAll(".increase-quantity");
    increaseButton.forEach(function(elemButton) {
        elemButton.addEventListener('click', function(e) {
            let parentTr = this.closest('tr');
            let recordId = parentTr.dataset.recordid;
            console.log(recordId);
            let params = {
                id: recordId,
                method: 'increaseQuantity'
            }
            let response = fetch('/handle.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json;charset=utf-8'
                    },
                    body: JSON.stringify(params)
                })
                .then((response) => {
                    return response.json();
                })
                .then((data) => {
                    console.log(data)
                    let totalData = document.querySelector('.total-data').innerHTML = data.totalPrice;
                });
        })

    })

    let decreaseButton = document.querySelectorAll(".decrease-quantity");
    decreaseButton.forEach(function(elemButton) {
        elemButton.addEventListener('submit', function(e) {
            e.preventDefault();
            let parentTr = this.closest('tr');
            let recordId = parentTr.dataset.recordid;
            console.log(recordId);
            let params = {
                id: recordId,
                method: 'decreaseQuantity'
            }
            let response = fetch('/handle.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json;charset=utf-8'
                    },
                    body: JSON.stringify(params)
                })
                .then((response) => {
                    return response.json();
                })
                .then((data) => {
                    console.log(data)
                    let totalData = document.querySelector('.total-data').innerHTML = data.totalPrice;

                });
        })

    })
    const formAddOrder = decument.querySelectorAll('#order');
    formAddOrder.addEventListener("submit", function(e) {
        let params = {
            method: 'addOrder',
            user: this.querySelector("input[name=userId]").value,
            address: this.querySelector("input[name=address]").value,
            card: 2,
        }
        let response = fetch('/handle.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify(params)
            })
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                console.log(data)
                let totalData = document.querySelector('.total-data').innerHTML = data.totalPrice;

            });
    })
</script>