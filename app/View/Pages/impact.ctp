<script src="/dfcusa-web/app/webroot/js/pdf/pdf.js"></script>

<section class="inner-hero inside get-started one-line" style="background-image: url('/dfcusa-web/app/webroot/img/img_hedr_teachers.png'); background-size: 100%; margin: 0px">
  <div class="container">
    <h4 class="one-line"><span>Our impact.</span></h4>
  </div>
</section>

<section class="page-content" style="padding: 0px; margin: 0px; text-align: center;">
  <div id="the-canvas" style="margin-left: auto; margin-right: auto; width: 100%; height: 2800px;">
    
  </div>
</section>

<script>
  function renderPDF(url, canvasContainer, options) {
    var options = options || { scale: 2 };
        
    function renderPage(page) {
      var viewport = page.getViewport(options.scale);
      var canvas = document.createElement('canvas');
      var ctx = canvas.getContext('2d');
      var renderContext = {
        canvasContext: ctx,
        viewport: viewport
      };
      
      canvas.height = viewport.height;
      canvas.width = viewport.width;

      canvasContainer.appendChild(canvas);
      
      page.render(renderContext);
    }
    
    function renderPages(pdfDoc) {
      for(var num = 1; num <= pdfDoc.numPages; num++)
        pdfDoc.getPage(num).then(renderPage);
    }

    var PDFJS = window['pdfjs-dist/build/pdf'];
    PDFJS.GlobalWorkerOptions.workerSrc = '/dfcusa-web/app/webroot/js/pdf/pdf.worker.js';

    PDFJS.disableWorker = true;
    PDFJS.getDocument(url).then(renderPages);
  }

  renderPDF('/dfcusa-web/app/webroot/files/Design for Change USA - Impact Analysis (for web).pdf', document.getElementById('the-canvas'));
</script>