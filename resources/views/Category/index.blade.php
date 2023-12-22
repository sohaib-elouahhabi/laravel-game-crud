<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">Titre</div>
        <div class="card-body">
            <table class="table table-bordered table-striped chihaja" >
                <tr>
                    <th>Category</th>
                    <th colspan="2">
                       <center>
                           <a class="btn btn-info" href="{{route('createCategory')}}">Ajouter</a>
                       </center>
                    </th>
                </tr>
                @foreach( $categories as $items)
                <tr>
                    <td >{{$items->category_name}}</td>
                    <td>
                     <form action="{{route('deleteCategory', ['id' => $items->id] )}}" method="post">
                         @csrf
                         <center>
                             @method('delete')
                             <button type="submit"  class="btn btn-outline-danger" >Supprimer</button>
                         </center>
                     </form>
                    </td>
                    <td>
                        <center>
                            <a class="btn btn-outline-warning" href="{{route('editCategory',['id' => $items->id])}}">Modifier</a>
                        </center>
                    </td>
                    <td>
                        <center>
                            <a class="btn btn-outline-primary" href="{{route('listOfGamesByCategory',['id' => $items->id])}}">Games</a>
                        </center>
                    </td>
                </tr>
                @endforeach
                {{ $categories->links('pagination::simple-bootstrap-4') }}
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous">
</script>
</body>
</html>
