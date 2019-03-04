
<div class="container-fluid">
            <div class="container col-sm-9">
                <h2 class="page-head text-white">Manage Rooms</h2>
            </div>
            <div class="container col-sm-3">
                <input class="pull-right" style="width:200px; margin-top:65px;" type="text" placeholder="Search" id="roomsSearch">
            </div>
</div>
<div class="container-fluid w3-card-4 bg-white table-responsive" style="padding:10px;">
            <?php include_once('tables/table-rooms.php'); ?>
</div>
            <br>
            <div class="w3-display-container">
                <span onclick="document.getElementById('addModal').style.display='block'" class="w3-button w3-white w3-card-4 w3-display-middle w3-margin-top"
                    style="width:20%;">+ Add New Room</span>
            </div>
        </div>

        <div id="editModal" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('editModal').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright"
                        title="Close">&times;</span>
                    <h3>Edit Existing Room</h3>
                </div>
                <form class="w3-container">
                    <div class="w3-section">
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Current Room Number">
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Current Dimensions">
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Current Sq. Ft.">
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="etc...">
                        <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Update Room</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="addModal" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('addModal').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright"
                        title="Close">&times;</span>
                    <h3>Add New Room</h3>
                </div>
                <form class="w3-container">
                    <div class="w3-section">
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Room Number">
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Dimensions">
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Sq. Ft.">
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="etc...">
                        <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Add Room</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="confirmModal" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('confirmModal').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright"
                        title="Close">&times;</span>
                    <h3>Are you sure you want to archive this room?</h3>
                </div>
                <form class="w3-container">
                    <div class="w3-section">
                        <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Yes, archive
                            the room.</button>
                        <button class="w3-button w3-block w3-red w3-section w3-padding" type="submit">No, keep this
                            room.</button>
                    </div>
            </div>
        </div>