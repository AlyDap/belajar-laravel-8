<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Downloads</title>
 <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
</head>

<body>
 <h1>List of Downloads</h1>
 <table id="example">
  <thead>
   <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>File</th>
    <th>Action</th>
   </tr>
  </thead>
  <tbody>
   @foreach ($downloads as $download)
    <tr>
     <td>{{ $download->id }}</td>
     <td>{{ $download->name }}</td>
     <td>{{ $download->desc }}</td>
     <td>{{ $download->file }}</td>
     <td>
      <a href="{{ route('download.pdf', $download->id) }}" class="btn btn-primary">Download PDF</a>
     </td>
    </tr>
   @endforeach
  </tbody>
 </table>
 <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
 <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
 <script>
  new DataTable('#example');
  // $('#example').DataTable();
 </script>
 {{-- <script>
  $(document).ready(function() {
   $('#example').DataTable();
  });
 </script> --}}
</body>

</html>
