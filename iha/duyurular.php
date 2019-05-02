<?php include 'header.php';  ?>

  <section class="notice">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"> DUYURULAR </h1>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="images/ekip.jpg" alt="Card image cap">
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><h5 class="card-title">Card title</h5></li>
                <li class="list-group-item">
                  <p class="card-text">Some quick example text to buhe card's content.</p>
                  <button type="button" style="float:right;" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                    Devamını Gör
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <a data-fancybox="gallery3" href="images/ekip.jpg"><img src="images/ekip.jpg"></a>
            </div>
            <div class="col-md-12">
              <p>Some quick example text to buhe card's content.
                Some quick example text to buhe card's content.
                Some quick example text to buhe card's content.
                Some quick example text to buhe card's content.Some quick example text to buhe card's content.
                Some quick example text to buhe card's content.Some quick example text to buhe card's content.
                Some quick example text to buhe card's content.Some quick example text to buhe card's content.
                Some quick example text to buhe card's content.
              </p>
            </div>
          </div>
        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<?php include 'footer.php';  ?>
