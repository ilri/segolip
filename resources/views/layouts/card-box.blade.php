<div class="card-num">
    <div>
        <div class="numbers">{{ \App\Service::all()->count() }}</div>
        <div class="cardName">All Services</div>
    </div>
    <div class="iconBox">
        <ion-icon name="folder-open-outline"></ion-icon>
    </div>
</div>
<div class="card-num">
    <div>
        <div class="numbers">{{ \App\User::all()->count() }}</div>
        <div class="cardName">All Users</div>
    </div>
    <div class="iconBox">
        <ion-icon name="people-outline"></ion-icon>
    </div>
</div>
<div class="card-num">
    <div>
        <div class="numbers">{{ \App\Order::all()->count() }}</div>
        <div class="cardName">All Orders</div>
    </div>
    <div class="iconBox">
        <ion-icon name="cart-outline"></ion-icon>
    </div>
</div>
<div class="card-num">
    <div>
        <div class="numbers">${{ \App\Order::all()->sum('order_total') }}</div>
        <div class="cardName">All Earnings</div>
    </div>
    <div class="iconBox">
        <ion-icon name="bag-handle-outline"></ion-icon>
    </div>
</div>
