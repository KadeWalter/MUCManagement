
        <div class="container-fluid">
            <div class="container col-sm-9">
            <h2 class="page-head text-white">Manage Users</h2>
            </div>
            <div class="container col-sm-3">
                <input class="pull-right" style="width:200px; margin-top:65px;" type="text" placeholder="Search" id="userSearch">
            </div>
        </div>
        <div class="container-fluid w3-card-4 bg-white table-responsive" style="padding:10px;">
            <?php include_once("tables/table-users.php"); ?>
        </div>
            <br>
            <div class="w3-display-container">
                <span onclick="document.getElementById('addModal').style.display='block'" class="w3-button w3-white w3-card-4 w3-display-middle w3-margin-top"
                    style="width:20%;">+ Add
                    User</span>
            </div>
        </div>

        <div id="editModal" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('editModal').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright"
                        title="Close">&times;</span>
                    <h3>Edit Existing User</h3>
                </div>
                <form class="w3-container">
                    <div class="w3-section">
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Current Name">
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Current Username">
                        <select class="w3-select w3-border w3-margin-bottom" name="option">
                            <option value="" disabled selected>Privilege Level</option>
                            <option value="1">Admin</option>
                            <option value="2">Manager</option>
                            <option value="3">User</option>
                        </select>
                        <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Update User</button>
                        <button class="w3-button w3-block w3-red w3-section w3-padding" type="submit">Renove User</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="addModal" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('addModal').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright"
                        title="Close">&times;</span>
                    <h3>Add New User</h3>
                </div>
                <form class="w3-container">
                    <div class="w3-section">
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Name" required>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Username" required>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Password" required>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Confirm Password" required>
                        <select class="w3-select w3-border w3-margin-bottom" name="option" required>
                            <option value="" disabled selected>Privilege Level</option>
                            <option value="1">Admin</option>
                            <option value="2">Manager</option>
                            <option value="3">User</option>
                        </select>
                        <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Add User</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="resetModal" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
                <div class="w3-center"><br>
                    <span onclick="document.getElementById('resetModal').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright"
                        title="Close">&times;</span>
                    <h3>Reset Password</h3>
                </div>
                <form class="w3-container">
                    <div class="w3-section">
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="New Password"
                            required>
                        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Confirm New Password"
                            required>
                        <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Update Password</button>
                    </div>
                </form>
            </div>
        </div>

    </main>