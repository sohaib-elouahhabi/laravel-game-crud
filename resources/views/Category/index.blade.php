<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
</body>
</html>
