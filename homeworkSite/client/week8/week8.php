<?php include($_SERVER["DOCUMENT_ROOT"]."/php/header.php"); ?>
  <div class="panel panel-default">
    <div class="panel-body">
      <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a data-toggle="tab" href="#1"><button type="button" class="btn btn-primary">1</button></a></li>
        <li role="presentation"><a data-toggle="tab" href="#2"><button type="button" class="btn btn-primary">2</button></a></li>
        <li role="presentation"><a data-toggle="tab" href="#3"><button type="button" class="btn btn-primary">3</button></a></li>
        <li role="presentation"><a data-toggle="tab" href="#4"><button type="button" class="btn btn-primary">4</button></a></li>
        <li role="presentation"><a data-toggle="tab" href="#5"><button type="button" class="btn btn-primary">5</button></a></li>
      </ul>
      <div class="tab-content clearfix">
        <div class="tab-pane active" id="1">
          <?php include("./week8.1.php"); ?>
        </div>
        <div class="tab-pane" id="2">
          <?php include("./week8.2.php"); ?>
        </div>
        <div class="tab-pane" id="3">
          <?php include("./week8.3.php"); ?>
        </div>
        <div class="tab-pane" id="4">
          <?php include("./week8.4.php"); ?>
        </div>
        <div class="tab-pane" id="5">
          <?php include("./week8.5.php"); ?>
        </div>
      </div>
    </div>
  </div>
<?php include($_SERVER["DOCUMENT_ROOT"]."/php/footer.php"); ?>
