<!DOCTYPE html>
<html>
    <head>
        <title>Search Users - Twitter</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="css/app.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <h2>Informe o usuário</h2>
                <form method="GET" action="/timeline">
                    <div class="search">
                        <input type="text" class="form-control" name="name" onkeyup="userSearch(this.value)"  />
                        <button type="submit" class="btn btn-primary btn-sm">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
