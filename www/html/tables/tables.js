$(document).ready(function (){

    // Search -----------------------------------

    $('#inventorySearch').keyup(function() {
        tableInventory.search($(this).val()).draw()
    })

    $('#maintenanceSearch').keyup(function() {
        tableMaintenance.search($(this).val()).draw()
    })

    $('#roomsSearch').keyup(function() {
        tableRooms.search($(this).val()).draw()
    })

    $('#userSearch').keyup(function() {
        tableUsers.search($(this).val()).draw()
    })

    $('#detailSearch').keyup(function() {
        tableAssets.search($(this).val()).draw()
        tableService.search($(this).val()).draw()
        tableNotes.search($(this).val()).draw()
    })

    // Inventory Table --------------------------
    var tableInventory = $("#tableInventory").DataTable( {
        "dom": "<'row'<'col-sm-6'l><'col-sm-6'B>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons : [
            'excel',
            'csv',
            'print',
        ],
        "info" : true,
        "responsive" : true,
        "ajax" : {
            "url" : "/tables/ajax-inventory.php",
            "type": "GET",
        },
        "deferRender" : true,
        "lengthMenu" : [[10,50,100,-1], [10,50,100,"All"]],
        "bAutoWidth" : false
    }, 100)

    // User Table -------------------------------
    var tableUsers = $("#tableUsers").DataTable( {
        "dom": "<'row'<'col-sm-6'l><'col-sm-6'B>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons : [
        ],
        "info" : true,
        "responsive" : true,
        "ajax" : {
            "url" : "/tables/ajax-users.php",
            "type": "GET",
        },
        "deferRender" : true,
        "lengthMenu" : [[10,50,100,-1], [10,50,100,"All"]],
        "bAutoWidth" : false
    }, 100)

    

    // Room Table -------------------------------
    var tableRooms = $("#tableRooms").DataTable( {
        "dom": "<'row'<'col-sm-6'l><'col-sm-6'B>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons : [
            'excel',
            'csv',
            'print',
        ],
        "info" : true,
        "responsive" : true,
        "ajax" : {
            "url" : "/tables/ajax-rooms.php",
            "type": "GET",
        },
        "deferRender" : true,
        "lengthMenu" : [[10,50,100,-1], [10,50,100,"All"]],
        "bAutoWidth" : false
    }, 100)

     // Maintenance Table --------------------------
     var tableMaintenance = $("#tableMaintenance").DataTable( {
        "dom": "<'row'<'col-sm-6'l><'col-sm-6'B>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons : [
            'excel',
            'csv',
            'print',
        ],
        "info" : true,
        "responsive" : true,
        "ajax" : {
            "url" : "/tables/ajax-maintenance.php",
            "type": "GET",
        },
        "deferRender" : true,
        "lengthMenu" : [[10,50,100,-1], [10,50,100,"All"]],
        "bAutoWidth" : false
    }, 100)

     // Room Detail Assets Table --------------------
     var tableAssets = $("#assetsTable").DataTable( {
        "dom": "<'row'<'col-sm-6'l><'col-sm-6'B>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons : [
            'excel',
            'csv',
            'print',
        ],
        "info" : true,
        "responsive" : true,
        "ajax" : {
            "url" : "/tables/ajax-assets.php",
            "type": "GET",
        },
        "deferRender" : true,
        "lengthMenu" : [[10,50,100,-1], [10,50,100,"All"]],
        "bAutoWidth" : false
    }, 100)

    // Room Detail Service Items Table ---------------
    var tableService = $("#serviceTable").DataTable( {
        "dom": "<'row'<'col-sm-6'l><'col-sm-6'B>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons : [
            'excel',
            'csv',
            'print',
        ],
        "info" : true,
        "responsive" : true,
        "ajax" : {
            "url" : "/tables/ajax-service.php",
            "type": "GET",
        },
        "deferRender" : true,
        "lengthMenu" : [[10,50,100,-1], [10,50,100,"All"]],
        "bAutoWidth" : false
    }, 100)

    // Room Detail Notes Table ---------------
    var tableNotes = $("#notesTable").DataTable( {
        "dom": "<'row'<'col-sm-6'l><'col-sm-6'B>>" + "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons : [
            'excel',
            'csv',
            'print',
        ],
        "info" : true,
        "responsive" : true,
        "ajax" : {
            "url" : "/tables/ajax-notes.php",
            "type": "GET",
        },
        "deferRender" : true,
        "lengthMenu" : [[10,50,100,-1], [10,50,100,"All"]],
        "bAutoWidth" : false
    }, 100)
})