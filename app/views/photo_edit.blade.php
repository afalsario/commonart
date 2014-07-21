<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="ttw" content="dt7xvsr" />

        <title>Dropzone.js</title>

        <link rel="stylesheet" href="/dropzone/downloads/css/dropzone.css">
        <script src="/assets/plugins/jquery-1.11.1.min.js"></script>
        <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="/dropzone/downloads/dropzone.js"></script>

    </head>
    <body>
        {{ Form::open(array('action'=>'ImageController@store', 'class' => 'dropzone', 'id' => 'my-awesome-dropzone')) }}
    </body>
</html>






