<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">Titre</div>
        <div class="card-body">
            <table class="table table-bordered table-striped " >
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
                                     <button type="submit"  class="btn btn-danger" >Supprimer</button>
                                 </center>
                             </form>


                                        </td>
                                        <td>
                                            <center>
                                                <a class="btn btn-warning" href="{{route('editCategory',['id' => $items->id])}}">Modifier</a>
                                            </center>
                                        </td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
