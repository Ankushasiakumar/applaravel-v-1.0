
  <footer class="main-footer">
    <strong>Copyright &copy; {{ date('Y') }} <a href="#">example.com</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ URL::asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ URL::asset('backend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ URL::asset('backend/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ URL::asset('backend/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ URL::asset('backend/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ URL::asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ URL::asset('backend/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ URL::asset('backend/plugins/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('backend/plugins/daterangepicker/daterangepicker.js') }}"></script>

<script src="{{ URL::asset('backend/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ URL::asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ URL::asset('backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ URL::asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('backend/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('backend/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('backend/dist/js/pages/dashboard.js') }}"></script>

<script src="{{ URL::asset('backend/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>

<script src="{{ URL::asset('backend/plugins/dropzone/min/dropzone.min.js') }}"></script>

<script>
  $(function () {
    // Summernote

    $('.my-colorpicker1').colorpicker()
    $('#summernote').summernote()
    $('#summernote1').summernote()
    $('#summernote2').summernote()
    $('#summernote3').summernote()
    $('#summernote4').summernote()
    $('#summernote5').summernote()
    $('#summernote6').summernote()
  })


  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>
</body>
</html>