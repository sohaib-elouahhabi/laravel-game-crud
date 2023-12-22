<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-5 " >
    <div class="card">
        <div class="card-header">Add Category </div>
        <div class="card-body">
            <center>
                <form method="post" action="{{route('addGames')}}">
                    @csrf
                    <table class="mt-5">
                        <tr>
                            <!-- Hidden input for the id -->
                            <td><input type="hidden" name="categoryId" value="{{$categoryId }}"></td>
                            <td class="form-label lead" >Game Name :</td>
                            <td><input type=text class="form-control" name="gameName" value=""></td>
                            <td class="form-label lead" >Release Date :</td>
                            <td><input type=date class="form-control" name="releaseDate" value=""></td>
                        </tr>
                        <tr>
                            <td>
                                <center>
                                    <button  type="reset" class="btn btn-danger mt-3">Annuler</button>
                                </center>
                            </td>
                            <td>
                                <center>
                                    <input type=submit class="btn btn-info mt-3" value="Save">
                                </center>
                            </td>
                        </tr>
                    </table>
                </form>

            </center>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
