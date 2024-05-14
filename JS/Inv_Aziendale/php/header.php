<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Inventario Aziendale</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                        Add Product
                    </button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-outline-light" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                        Money Converter
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- MODAL 1 -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Aggiunta prodotto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="add_product.php" method="post">
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                        <input type="text" class="form-control" name="name" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Quantity</span>
                        <input type="text" class="form-control" name="quantity" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="amount"
                            aria-label="Dollar amount (with dot and two decimal places)" required>
                        <span class="input-group-text">.00</span>
                        <span class="input-group-text">€</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button name="add" type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- OFFCANVAS MENU -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Money Converter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="input-group mb-3">
            <select class="form-select" aria-label="Default select example" onchange="setCurrency(this.value)">
                <option selected>Start Value</option>
                <option value="EUR">€</option>
                <option value="USD">$</option>
                <option value="GBP">£</option>
            </select>
        </div>
        <input type="number" id="amount" class="form-control mb-3" placeholder="Put here the value">
        <div class="input-group mb-3">
            <select class="form-select" aria-label="Default select example" onchange="setTargetCurrency(this.value)">
                <option selected>Convert to</option>
                <option value="EUR">€</option>
                <option value="USD">$</option>
                <option value="GBP">£</option>
            </select>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="button" onclick="convertCurrency()">Send</button>
        </div>
        <input type="text" id="amountRes" class="form-control mt-3" placeholder="Result">
    </div>
</div>