
        <div class="container-fluid">
            <div class="container col-sm-9">
            <h2 class="page-head text-white">Inventory</h2>
            </div>
            <div class="container col-sm-3">
                <input class="pull-right" style="width:200px; margin-top:65px;" type="text" placeholder="Search" id="inventorySearch">
            </div>
        </div>
        <div class="container-fluid w3-card-4 bg-white table-responsive" style="padding:10px;">
            <?php include_once("tables/table-inventory.php"); ?>          
        </div>
