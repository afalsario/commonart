@extends('layouts.master')

@section('topscript')
       
        <script src="/dropzone/downloads/dropzone.js"></script>

        <style type="text/css">
        #my-awesome-dropzone {
            display: none;
        }
        </style>
@stop
@section('content')
        {{ Form::open(array('action'=>'ImageController@store', 'class' => 'dropzone', 'id' => 'my-awesome-dropzone')) }}
        {{ Form::close() }}
  <div class="container" id="container">
    <h1>Upload Images</h1>
    <br>

    <br>
    <div id="actions" class="row">

      <div class="col-lg-7">
        <!-- The fileinput-button span is used to style the file input field as button -->
        <span class="btn btn-success fileinput-button">
            <i class="glyphicon glyphicon-plus"></i>
            <span>Add files...</span>
        </span>
        <button type="submit" class="btn btn-primary start">
            <i class="glyphicon glyphicon-upload"></i>
            <span>Start upload</span>
        </button>
        <button type="reset" class="btn btn-warning cancel">
            <i class="glyphicon glyphicon-ban-circle"></i>
            <span>Cancel upload</span>
        </button>
      </div>

      <div class="col-lg-5">
        <!-- The global file processing state -->
        <span class="fileupload-process">
          <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
            <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
          </div>
        </span>
      </div>

    </div>

    <div class="table table-striped" class="files" id="previews">

      <div id="template" class="file-row">
        <!-- This is used as the file preview template -->
        <div>
            <span class="preview"><img data-dz-thumbnail /></span>
        </div>
        <div>
            <p class="name" data-dz-name></p>
            <strong class="error text-danger" data-dz-errormessage></strong>
        </div>
        <div>
            <p class="size" data-dz-size></p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
              <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
            </div>
        </div>
        <div>
          <button class="btn btn-primary start">
              <i class="glyphicon glyphicon-upload"></i>
              <span>Start</span>
          </button>
          <button data-dz-remove class="btn btn-warning cancel">
              <i class="glyphicon glyphicon-ban-circle"></i>
              <span>Cancel</span>
          </button>
          <button data-dz-remove class="btn btn-danger delete">
            <i class="glyphicon glyphicon-trash"></i>
            <span>Delete</span>
          </button>
          <br>
        </div>
        <br>
      </div>
      <br>
    </div>
</div>
<br>
    <script>
    // Get the template HTML and remove it from the doument
    var previewNode = document.querySelector("#template");
    previewNode.id = "";
    var previewTemplate = previewNode.parentNode.innerHTML;
    previewNode.parentNode.removeChild(previewNode);

    Dropzone.options.myAwesomeDropzone = { // Make the whole body a dropzone
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
        previewTemplate: previewTemplate,
        autoQueue: false, // Make sure the files aren't queued until manually added
        previewsContainer: "#previews", // Define the container to display the previews
        clickable: ".fileinput-button", // Define the element that should be used as click trigger to select files.
        init: function() {
            this.on("addedfile", function(file) {
                // Hookup the start button
                file.previewElement.querySelector(".start").onclick = function() {
                    document.querySelector("#my-awesome-dropzone").dropzone.enqueueFile(file);
                };
            });

            this.on("totaluploadprogress", function(progress) {
                document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
            });

            this.on("sending", function(file) {
                // Show the total progress bar when upload starts
                document.querySelector("#total-progress").style.opacity = "1";
                // And disable the start button
                file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
            });

            // Hide the total progress bar when nothing's uploading anymore
            this.on("queuecomplete", function(progress) {
                document.querySelector("#total-progress").style.opacity = "0";
            });

            this.on("complete", function(file) {
                console.log('success');
                alert('Successful Upload!');
                file.previewElement.querySelector(".progress").style.opacity = "0";
            });
        }
    };

      // Update the total progress bar

      // Setup the buttons for all transfers
      // The "add files" button doesn't need to be setup because the config
      // `clickable` has already been specified.
      document.querySelector("#actions .start").onclick = function() {
        document.querySelector("#my-awesome-dropzone").dropzone.enqueueFiles(document.querySelector("#my-awesome-dropzone").dropzone.getFilesWithStatus(Dropzone.ADDED));
      };
      document.querySelector("#actions .cancel").onclick = function() {
        document.querySelector("#my-awesome-dropzone").dropzone.removeAllFiles(true);
      };
    </script>
    <hr>
    <div class="container">
    After all your images are uploaded, let's go back to your profile and edit the descriptions!
    <br>
    <a href="{{action('UsersController@show', array(Auth::user()->username))}}" class="btn btn-primary"><i class="icon-white icon-heart"></i> Edit </a>
    </div>
@stop







