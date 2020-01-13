<script src="/dfcusa-web/app/webroot/js/pdf/pdf.js"></script>

<section class="inner-hero inside get-started one-line" style="background-image: url('/dfcusa-web/app/webroot/img/img_hedr_teachers.png'); background-size: 100%; margin: 0px">
  <div class="container">
    <h4 class="one-line"><span>Our impact.</span></h4>
  </div>
</section>

<section class="page-content" style="padding: 0px; margin: 0px; text-align: center;">
  <canvas id="the-canvas" style="margin-left: auto; margin-right: auto; width: 50%;"></canvas>
</section>

<script>
  var url = '/dfcusa-web/app/webroot/files/Design%20for%20Change%20-%20Infographic%20-%202019.pdf';
  var pdfjsLib = window['pdfjs-dist/build/pdf'];
  pdfjsLib.GlobalWorkerOptions.workerSrc = '/dfcusa-web/app/webroot/js/pdf/pdf.worker.js';

  var loadingTask = pdfjsLib.getDocument(url);
  loadingTask.promise.then(function(pdf) {
    console.log('PDF loaded');
    
    // Fetch the first page
    var pageNumber = 1;
    pdf.getPage(pageNumber).then(function(page) {
      console.log('Page loaded');
      
      var scale = 0.5;
      var viewport = page.getViewport({scale: scale});

      // Prepare canvas using PDF page dimensions
      var canvas = document.getElementById('the-canvas');
      var context = canvas.getContext('2d');
      canvas.height = viewport.height;
      canvas.width = viewport.width;

      // Render PDF page into canvas context
      var renderContext = {
        canvasContext: context,
        viewport: viewport
      };
      var renderTask = page.render(renderContext);
      renderTask.promise.then(function () {
        console.log('Page rendered');
      });
    });
  }, function (reason) {
    // PDF loading error
    console.error(reason);
  });
</script>

<?php echo $this->element('newsletter'); ?>