<?php include("include/header.php"); ?>
<style>
    header {
        display: none;
    }

    footer {
        display: none;
    }

    .mt-100 {
        margin-top: -39px;
    }
</style>
<section class="full-height relative no-top no-bottom vertical-center " data-bgimage="url(images/background/6.jpg) top" data-stellar-background-ratio=".5">
    <div class="overlay-gradient t50">
        <div class="center-y relative">
            <div class="container">
                <div class="row align-items-center  ">

                    <div class="col-lg-5 mx-auto wow fadeIn mt-3 bg-color" data-wow-delay=".5s">

                        <div class="box-rounded padding40 ">



                            <div class="text-center">
                                <span href="" class="set-cls">Complete Profile</span>
                                <p>Amet minim mollit non deserunt ullamco est <br> sit aliqua dolor do amet sint Velit </p>
                            </div>



                            <form id="file-upload-form" class="uploader d-flex justify-content-center uploader">
                                <input id="file-upload" type="file" name="fileUpload" accept="image/*" />

                                <label for="file-upload" id="file-drag">
                                    <img id="file-image" src="#" alt="Preview" class="hidden">
                                    <div id="start">
                                        <img src="img/upload.png" class="img-fluid ">
                                       
                                        <div id="notimage" class="hidden">Please select an image</div>
                                        <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                                    </div>
                                    <div id="response" class="hidden">
                                        <div id="messages"></div>

                                    </div>
                                </label>
                            </form>


                            <div class="mt-5">
                                <form name="contactForm" id='contact_form' class="form-border" method="post" action=''>

                                    <div class="field-set">
                                        <label for="username">Username</label>
                                        <input type='text' name='email' id='username' class="form-control coustom_input1" placeholder="Samsmith67">
                                    </div>

                                    <div class="field-set">
                                        <label for="bio">Bio</label>
                                        <input type='text' name='bio' id='bio' class="form-control coustom_input1" placeholder="Lorem ipsum dolor sit">
                                    </div>


                                </form>
                            </div>
                            <a href="" class="">
                                <div class="field-set">
                                    <input type='' id='send_message' value='Get Started' class="btn position_fixed_btn btn-main btn-fullwidth color-2 py-3 rounded-3">
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- <div class="text-center mt-3">
                            <a><span class="skip_text">Skip</span></a>
                        </div> -->
                </div>

            </div>
        </div>
    </div>
</section>
<script>
    function ekUpload() {
        function Init() {

            console.log("Upload Initialised");

            var fileSelect = document.getElementById('file-upload'),
                fileDrag = document.getElementById('file-drag'),
                submitButton = document.getElementById('submit-button');

            fileSelect.addEventListener('change', fileSelectHandler, false);

            // Is XHR2 available?
            var xhr = new XMLHttpRequest();
            if (xhr.upload) {
                // File Drop
                fileDrag.addEventListener('dragover', fileDragHover, false);
                fileDrag.addEventListener('dragleave', fileDragHover, false);
                fileDrag.addEventListener('drop', fileSelectHandler, false);
            }
        }

        function fileDragHover(e) {
            var fileDrag = document.getElementById('file-drag');

            e.stopPropagation();
            e.preventDefault();

            fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
        }

        function fileSelectHandler(e) {
            // Fetch FileList object
            var files = e.target.files || e.dataTransfer.files;

            // Cancel event and hover styling
            fileDragHover(e);

            // Process all File objects
            for (var i = 0, f; f = files[i]; i++) {
                parseFile(f);
                uploadFile(f);
            }
        }

        // Output
        function output(msg) {
            // Response
            var m = document.getElementById('messages');
            m.innerHTML = msg;
        }

        function parseFile(file) {

            console.log(file.name);
            output(
                '<strong>' + encodeURI(file.name) + '</strong>'
            );

            // var fileType = file.type;
            // console.log(fileType);
            var imageName = file.name;

            var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
            if (isGood) {
                document.getElementById('start').classList.add("hidden");
                document.getElementById('response').classList.remove("hidden");
                document.getElementById('notimage').classList.add("hidden");
                // Thumbnail Preview
                document.getElementById('file-image').classList.remove("hidden");
                document.getElementById('file-image').src = URL.createObjectURL(file);
            } else {
                document.getElementById('file-image').classList.add("hidden");
                document.getElementById('notimage').classList.remove("hidden");
                document.getElementById('start').classList.remove("hidden");
                document.getElementById('response').classList.add("hidden");
                document.getElementById("file-upload-form").reset();
            }
        }

        function setProgressMaxValue(e) {
            var pBar = document.getElementById('file-progress');

            if (e.lengthComputable) {
                pBar.max = e.total;
            }
        }

        function updateFileProgress(e) {
            var pBar = document.getElementById('file-progress');

            if (e.lengthComputable) {
                pBar.value = e.loaded;
            }
        }

        function uploadFile(file) {

            var xhr = new XMLHttpRequest(),
                fileInput = document.getElementById('class-roster-file'),
                pBar = document.getElementById('file-progress'),
                fileSizeLimit = 1024;
            if (xhr.upload) {

                if (file.size <= fileSizeLimit * 1024 * 1024) {
                    r
                    pBar.style.display = 'inline';
                    xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
                    xhr.upload.addEventListener('progress', updateFileProgress, false);

                    xhr.onreadystatechange = function(e) {
                        if (xhr.readyState == 4) {

                        }
                    };


                    xhr.open('POST', document.getElementById('file-upload-form').action, true);
                    xhr.setRequestHeader('X-File-Name', file.name);
                    xhr.setRequestHeader('X-File-Size', file.size);
                    xhr.setRequestHeader('Content-Type', 'multipart/form-data');
                    xhr.send(file);
                } else {
                    output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
                }
            }
        }

        // Check for the various File API support.
        if (window.File && window.FileList && window.FileReader) {
            Init();
        } else {
            document.getElementById('file-drag').style.display = 'none';
        }
    }
    ekUpload();
</script>
<?php include("include/footer.php"); ?>