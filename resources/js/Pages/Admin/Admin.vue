<template>

    <main>
        <h1>Dashboard</h1>

        <div class="date">
            <input type="date" />
        </div>

        <div class="insights">
            <!-- SALES -->
            <div class="sales">
                <span class="material-icons"> analytics </span>
                <div class="middle">
                    <div class="left">
                        <h3>Total Sales</h3>
                        <h1>$25,024</h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="number">
                            <p>81%</p>
                        </div>
                    </div>
                </div>
                <small class="text-muted"> Last 24 hours </small>
            </div>

            <!-- EXPENSES -->
            <div class="expenses">
                <span class="material-icons"> bar_chart </span>
                <div class="middle">
                    <div class="left">
                        <h3>Total Expenses</h3>
                        <h1>$14,160</h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="number">
                            <p>62%</p>
                        </div>
                    </div>
                </div>
                <small class="text-muted"> Last 24 hours </small>
            </div>

            <!-- INCOME -->
            <div class="income">
                <span class="material-icons"> stacked_line_chart </span>
                <div class="middle">
                    <div class="left">
                        <h3>Total Income</h3>
                        <h1>$10,864</h1>
                    </div>
                    <div class="progress">
                        <svg>
                            <circle cx="38" cy="38" r="36"></circle>
                        </svg>
                        <div class="number">
                            <p>44%</p>
                        </div>
                    </div>
                </div>
                <small class="text-muted"> Last 24 hours </small>
            </div>
        </div>

        <div class="recent-orders">
            <h2>Recent Orders</h2>
            <table id="recent-orders--table">
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Short Description</th>
                    <th></th>
                </tr>

                </thead>
               <tbody>
               <tr v-for="product in $page.props.products">
                   <td>{{product.name}}</td>
                   <td>{{product.price}}</td>
                   <td>{{product.quantity}}</td>
                   <td>{{product.short_description}}</td>
                   <td></td>
               </tr>
               </tbody>
            </table>
            <a href="#">Show All</a>
        </div>
    </main>


</template>


<style setup>

main {
    margin-top: 2rem;
    padding-top:50px;
}

/* START DATE INPUT */
main .date {
    display: inline-block;
    background: var(--color-light);
    border-radius: var(--border-radius-1);
    margin-top: 1rem;
    padding: 0.5rem 1.6rem;
}
main .date input[type="date"] {
    background: transparent;
    color: var(--color-dark);
}
/* END DATE INPUT */

/* START INSIGHTS */
main .insights {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.6rem;
}
main .insights > div {
    background: var(--color-white);
    padding: var(--card-padding);
    border-radius: var(--card-border-radius);
    margin-top: 1rem;
    box-shadow: var(--box-shadow);
    transition: all 300ms ease;
}
main .insights > div:hover {
    cursor: pointer;
    box-shadow: none;
}
main .insights > div span {
    background: var(--color-primary);
    padding: 0.5rem;
    border-radius: 50%;
    color: var(--color-white);
    font-size: 2rem;
}
main .insights > div.expenses span {
    background: var(--color-danger);
}
main .insights > div.income span {
    background: var(--color-success);
}
main .insights > div .middle {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
main .insights h3 {
    margin: 1rem 0 0.6rem;
    font-size: 1rem;
}
main .insights .progress {
    position: relative;
    width: 92px;
    height: 92px;
    border-radius: 50%;
}
main .insights svg {
    width: 7rem;
    height: 7rem;
}
main .insights svg circle {
    fill: none;
    stroke: var(--color-primary);
    stroke-width: 14;
    stroke-linecap: round;
    transform: translate(5px, 5px);
    stroke-dasharray: 110;
    stroke-dashoffset: 92;
}
main .insights .sales svg circle {
    stroke-dashoffset: -30;
    stroke-dasharray: 200;
}
main .insights .expenses svg circle {
    stroke-dashoffset: 20;
    stroke-dasharray: 80;
}
main .insights .income svg circle {
    stroke-dashoffset: 35;
}
main .insights .progress .number {
    position: absolute;
    top: -2px;
    left: -2px;
    height: 100%;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
main .insights small {
    margin-top: 1.6rem;
    display: block;
}
/* END INSIGHTS */

/* START RECENT ORDERS */
main .recent-orders {
    margin-top: 2rem;
}
main .recent-orders h2 {
    margin-bottom: 0.8rem;
}
main .recent-orders table {
    background: var(--color-white);
    width: 100%;
    border-radius: var(--card-border-radius);
    padding: var(--card-padding);
    text-align: center;
    box-shadow: var(--box-shadow);
    transition: all 300ms ease;
}
main .recent-orders table:hover {
    cursor: pointer;
    box-shadow: none;
}
main table tbody td {
    height: 2.8rem;
    border-bottom: 1px solid var(--color-light);
    color: var(--color-dark-variant);
}
main table tbody tr:last-child td {
    border: none;
}
main .recent-orders a {
    text-align: center;
    display: block;
    margin: 1rem auto;
    color: var(--color-primary);
}
/* END RECENT ORDERS */

/* START MEDIA QUERIES */
/* TABLETS AND SMALL LAPTOPS */
@media screen and (max-width: 1200px) {
    .container {
        width: 94%;
        grid-template-columns: 7rem auto 23rem;
    }
    aside .logo h2 {
        display: none;
    }
    aside .sidebar h3 {
        display: none;
    }
    aside .sidebar a {
        width: 5.6rem;
    }
    aside .sidebar a:last-child {
        position: relative;
        margin-top: 1.8rem;
    }
    main .insights {
        grid-template-columns: 1fr;
        gap: 0;
    }
    main .recent-orders {
        width: 94%;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        margin: 2rem 0 0 8.8rem;
    }
    main .recent-orders table {
        width: 83vw;
    }
    main .recent-orders table thead tr th:first-child,
    main .recent-orders table thead tr th:last-child {
        display: none;
    }
    main .recent-orders table tbody tr td:first-child,
    main .recent-orders table tbody tr td:last-child {
        display: none;
    }
}


</style>
