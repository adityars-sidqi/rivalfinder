$(document).ready(function(){

  $('#club').DataTable( {
      "iDisplayLength": 5,
      "bLengthChange": false,
      "columns": [
          null,
          null,
          null,
          null,
          null,
          { "width": "15%" },
          { "width": "15%" }
        ]
      }
    );

  $('#turnament').DataTable( {
      "iDisplayLength": 5,
      "bLengthChange": false,
      "columns": [
          null,
          null,
          null,
          null,
          { "width": "15%" }
        ]
      }
    );

    $('#challenge-history-incoming').DataTable( {
        "iDisplayLength": 5,
        "bLengthChange": false,
        "columns": [
            null,
            null,
            null,
            null,
            null,
            { "width": "20%" }
          ]
        }
      );

      $('#challenge-history-outgoing').DataTable( {
          "iDisplayLength": 5,
          "bLengthChange": false,
          "columns": [
              null,
              null,
              null,
              null,
              null,
              { "width": "20%" }
            ]
          }
        );

});
