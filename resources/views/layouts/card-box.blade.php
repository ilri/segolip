<div class="card-num">
    <div>
        <div class="numbers">8</div>
        <div class="cardName">Services</div>
    </div>
    <div class="iconBox">
        <ion-icon name="folder-open-outline"></ion-icon>
    </div>
</div>
<div class="card-num">
    <div>
        <div class="numbers">{{ \App\User::all()->count() }}</div>
        <div class="cardName">Users</div>
    </div>
    <div class="iconBox">
        <ion-icon name="people-outline"></ion-icon>
    </div>
</div>
<div class="card-num">
    <div>
        <div class="numbers">{{ \App\Order::all()->count() }}</div>
        <div class="cardName">Orders</div>
    </div>
    <div class="iconBox">
        <ion-icon name="cart-outline"></ion-icon>
    </div>
</div>
<div class="card-num">
    <div>
        <div class="numbers">$600</div>
        <div class="cardName">Earnings</div>
    </div>
    <div class="iconBox">
        <ion-icon name="bag-handle-outline"></ion-icon>
    </div>
</div>
