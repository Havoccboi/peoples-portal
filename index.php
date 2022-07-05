<html>

<head>
    <title>Drag and Drop File Upload using DropzoneJS, PHP & MySQL</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="css/dropzone.min.css" />
</head>

<body>

    <div class="container" style="margin-top:50px;">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">Drag and Drop File Upload using DropzoneJS, PHP & MySQL</div>
                <div class="panel-body">
                    <div class="image_upload_div">
                        <form action="upload.php" class="dropzone" enctype="multipart/form-data">
                            <div class="dz-message">
                                Drop files here or click to upload.<br>
                                <span class="note">(This is for demo purpose. Selected files are not actually uploaded.)</span>
                            </div>

                        </form>
                        <button id="startUpload" class="btn btn-success">UPLOAD</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/dropzone.min.js"></script>
    <script>
        //Disabling autoDiscover
        Dropzone.autoDiscover = false;

        $(function() {
            //Dropzone class
            var myDropzone = new Dropzone(".dropzone", {
                url: "upload.php",
                paramName: "file",
                maxFilesize: 2,
                maxFiles: 10,
                acceptedFiles: "image/*,application/pdf",
                autoProcessQueue: false
            });

            $('#startUpload').click(function() {
                myDropzone.processQueue();
            });
        });
    </script>
    </div>
</body>

</html>
      