<div class="container-fluid row">
    <div class="col-md-9">
        <div class="row">
            <h2 class="page-head text-white col-md-3">Room XXXX</h2>
            <div class="col-md-6" style="margin-top:65px;">
                <span onclick="document.getElementById('addModal').style.display='block'" class="btn btn-default">Add Asset</span>
                <span onclick="document.getElementById('editModal').style.display='block'" class="btn btn-default">Edit Asset</span>
                <span class="btn btn-default">Generate Report</span>
            </div>
            <input class="col-md-3" style="margin-top:65px;" type="text" placeholder="Search" id="detailSearch">
        </div>
        <div class="w3-row w3-white w3-card-4">
            <a href="javascript:void(0)" onclick="openTab(event, 'Assets');">
                <div class="w3-third w3-border-blue tablink w3-bottombar w3-hover-light-grey w3-padding">
                    <h6>Assets</h6>
                </div>
            </a>
            <a href="javascript:void(0)" onclick="openTab(event, 'ServiceItems');">
                <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">
                    <h6>Service Items</h6>
                </div>
            </a>
            <a href="javascript:void(0)" onclick="openTab(event, 'Notes');">
                <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">
                    <h6>Notes</h6>
                </div>
            </a>
        </div>

                <div id="Assets" class="w3-containter detailItem w3-card-4 bg-white" style="display:block; padding:10px;">
                   <?php include_once('tables/table-assets.php'); ?>
                </div>

                <div id="ServiceItems" class="w3-containter detailItem w3-card-4 bg-white" style="display:none; padding:10px;">
                    <?php include_once('tables/table-service.php'); ?>
                </div>

                <div id="Notes" class="w3-containter detailItem w3-card-4 bg-white" style="display:none; padding:10px;">
                    <?php include_once('tables/table-notes.php'); ?>
                </div>
    </div>


    <div class="col-md-3" style="margin-top:65px;">
        <div class="w3-card-4 w3-white w3-padding" style="">
            <h3 class="">Rooms Stats</h3>
            <span>Dimensions: 20' x 20'</span><br>
            <span>Sq. Ft.: 400</span><br>
            <span>...</span><br>
            <span>...</span><br>
            <span>...</span><br>
            <span>...</span><br>
            <span>...</span><br>
        </div>
    </div>
</div>

<div id="addModal" class="w3-modal">
                    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                        <div class="w3-center"><br>
                            <span onclick="document.getElementById('addModal').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright"
                                title="Close">&times;</span>
                            <h3>Add New Asset</h3>
                        </div>
                        <form class="w3-container">
                            <div class="w3-section">
                                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Asset Name" required>
                                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Asset ID#" required>
                                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Asset Cost" required>
                                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Asset Note (optional)">
                                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Asset Condition" required>
                                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Asset Replace Date" required>
                                <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Add Asset</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div id="editModal" class="w3-modal">
                        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                            <div class="w3-center"><br>
                                <span onclick="document.getElementById('editModal').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright"
                                    title="Close">&times;</span>
                                <h3>Edit Existing Asset</h3>
                            </div>
                            <form class="w3-container">
                                <div class="w3-section">
                                        <select class="w3-select w3-border w3-margin-bottom" name="option" required>
                                                <option value="" disabled selected>Choose Asset to Edit</option>
                                                <option value="1">Chair - 800111</option>
                                                <option value="2">Table - 800112</option>
                                                <option value="3">Paint - 800113</option>
                                              </select>
                                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Current Asset Name">
                                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Current Asset ID#">
                                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Current Asset Cost">
                                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Current Asset Note">
                                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Current Asset Condition">
                                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Current Asset Replace Date">
                                    <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Submit Changes</button>
                                </div>
                            </form>
                        </div>
                </div>