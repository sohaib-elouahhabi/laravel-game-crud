<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container mt-5 " >
    <div class="card">
        <div class="card-header">Edit Category </div>
        <div class="card-body">
            <center>
                <form method="post" action="{{ route('updateCategory', ['id' => $updateditem->id]) }}">
                    @csrf
                    @method('PUT')
                    <table class="mt-5">
                        <tr>
                            <td class="form-label lead" >Category Name :</td>
                            <td><input type=text class="form-control" name="UpdatedCatName" value="{{$updateditem->category_name}}"></td>
                        </tr>
                        <tr>
                            <td><center><button  type="reset" class="btn btn-danger mt-3">Annuler</button></center></td>
                            <td><center><input type=submit class="btn btn-info mt-3" value="Save"></center></td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>
    </div>
</div>
</body>
</html>

</body>
</html>
