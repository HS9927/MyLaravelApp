<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>

     <div style="display: flex; justify-content: center">
          <a href="{{ route("pdt.store") }}">Insert Data</a>
     </div>

     <hr>

     <table id="tbl">
          <thead>
               <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
               </tr>
          </thead>
          <tbody>
               <tr>
                    <td>0</td>
                    <td>Me</td>
                    <td>Male</td>
                    <td>dd@dd.com</td>
                    <td>093 231 4233</td>
                    <td>Phnom Penh</td>
               </tr>
          </tbody>
     </table>

     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

     <script>
          $(document).ready(function() {
               $('#tbl').DataTable( {
                    // "processing": true,
                    // "serverSide": true,
                    // "ajax": "../server_side/scripts/server_processing.php"
               } );
          } );
     </script>
</body>
</html>