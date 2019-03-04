<div class="container-fluid row">
    <div class="col-sm-2">
        <h2 class="page-head text-white">Maintenance</h2>
    </div>
    <div class="col-sm-8" style="margin-top:65px;">
        <span onclick="" class="btn btn-default">Mark Selected as Complete</span>
        <span onclick="" class="btn btn-default">Send Alert for Selected</span>
        <span onclick="document.getElementById('scheduleModal').style.display='block'" class="btn btn-default">Schedule New Maintenance</span>
        <span onclick="document.getElementById('alertModal').style.display='block'" class="btn btn-default">Send Custom Alert</span>
    </div>
    <div class="col-sm-2">
        <input class="pull-right" style="width:200px; margin-top:65px;" type="text" placeholder="Search" id="maintenanceSearch">
    </div>
</div>
    <div id="scheduleModal" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('scheduleModal').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close">&times;</span>
                    <h3>Schedule New Maintenance Reminder</h3>
            </div>
            <form class="w3-container">
                <div class="w3-section">
                    <select class="w3-select w3-border w3-margin-bottom" name="option" required>
                        <option value="" disabled selected>Choose Room</option>
                        <option value="1">1001</option>
                        <option value="2">1002</option>
                        <option value="3">1003</option>
                    </select>
                    <select class="w3-select w3-border w3-margin-bottom" name="option" required>
                        <option value="" disabled selected>Choose Asset</option>
                        <option value="1">Chair - 800111</option>
                        <option value="2">Table - 800112</option>
                        <option value="3">Paint - 800113</option>
                    </select>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Asset Cost" required>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Asset Note (optional)">
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Asset Condition" required>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Asset Replace Date" required>
                    <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Add</button>
                </div>
            </form>
        </div>
    </div>
                    
    <div id="alertModal" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('alertModal').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close">&times;</span>
                <h3>Send Custom Maintenance Alert</h3>
            </div>
            <form class="w3-container">
                <div class="w3-section">
                    <select class="w3-select w3-border w3-margin-bottom" name="option" required>
                        <option value="" disabled selected>Choose Room</option>
                        <option value="1">1001</option>
                        <option value="2">1002</option>
                        <option value="3">1003</option>
                    </select>
                    <select class="w3-select w3-border w3-margin-bottom" name="option" required>
                        <option value="" disabled selected>Choose Asset</option>
                        <option value="1">Chair - 800111</option>
                        <option value="2">Table - 800112</option>
                        <option value="3">Paint - 800113</option>
                    </select>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Action Needed:" required>
                    <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>

<div class="container-fluid w3-card-4 bg-white table-responsive" style="padding:10px;">
        <?php include_once('tables/table-maintenance.php'); ?>
</div>