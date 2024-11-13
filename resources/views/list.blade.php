<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.5.0/css/rowReorder.dataTables.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.3/css/responsive.bootstrap5.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



</head>

<body >

    <div class=" m-5 p-3 border"
>

  @if (Session::has('success'))
  <div class="p-2 text-success">
    {{Session::get('success')  }}
  </div>

  @endif


  <div class="table-responsive">


        <table id="myTable"  class="table nowrap" width="100%">
            <thead>
                <tr>
                    <th>#Id</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Marks</th>
                    <th class="  text-end">Create</th>
                    <th>Update</th>
                    <th class="  text-end">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->class }}</td>
                        <td class="px-5">{{ $student->marks }}</td>
                        <td class="  text-end">{{\Carbon\Carbon::parse($student->created_at)->format('d M, y') }}</td>
                        <td>{{ $student->updated_at }}</td>
                        <td class="  text-end">
                            <form method="POST" action="{{ route('student.destroy', $student->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" onclick="return confirm('are you sure?')">Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.5.0/js/dataTables.rowReorder.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.5.0/js/rowReorder.dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.3/js/responsive.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>





    <script>
       new DataTable('#myTable', {
    responsive: true,
    rowReorder: {
        selector: 'td:nth-child(2)'
    }
});
    </script>
</body>

</html>
