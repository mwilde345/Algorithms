<?php include($_SERVER["DOCUMENT_ROOT"]."/php/header.php"); ?>
  <div class="panel panel-default">
    <div class="panel-body">
      <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a data-toggle="tab" href="#1"><button type="button" class="btn btn-primary">1</button></a></li>
        <li role="presentation"><a data-toggle="tab" href="#2"><button type="button" class="btn btn-primary">2</button></a></li>
        <li role="presentation"><a data-toggle="tab" href="#3"><button type="button" class="btn btn-primary">3</button></a></li>
        <li role="presentation"><a data-toggle="tab" href="#4"><button type="button" class="btn btn-primary">4</button></a></li>
        <li role="presentation"><a data-toggle="tab" href="#5"><button type="button" class="btn btn-primary">5</button></a></li>
        <li role="presentation"><a data-toggle="tab" href="#6"><button type="button" class="btn btn-primary">6</button></a></li>
        <li role="presentation"><a data-toggle="tab" href="#7"><button type="button" class="btn btn-primary">7</button></a></li>
        <li role="presentation"><a data-toggle="tab" href="#8"><button type="button" class="btn btn-primary">8</button></a></li>
        <li role="presentation"><a data-toggle="tab" href="#9"><button type="button" class="btn btn-primary">9</button></a></li>
        <li role="presentation"><a data-toggle="tab" href="#10"><button type="button" class="btn btn-primary">10</button></a></li>
      </ul>
      <div class="tab-content clearfix">
        <div class="tab-pane active" id="1">
          <?php include("./week3.1.php"); ?>
        </div>
        <div class="tab-pane" id="2">
          <?php include("./week3.2.php"); ?>
        </div>
        <div class="tab-pane" id="3">
          <?php include("./week3.3.php"); ?>
        </div>
        <div class="tab-pane" id="4">
          <?php include("./week3.4.php"); ?>
        </div>
        <div class="tab-pane" id="5">
          <?php include("./week3.5.php"); ?>
        </div>
        <div class="tab-pane" id="6">
          <?php include("./week3.6.php"); ?>
        </div>
        <div class="tab-pane" id="7">
          <?php include("./week3.7.php"); ?>
        </div>
        <div class="tab-pane" id="8">
          <?php include("./week3.8.php"); ?>
        </div>
        <div class="tab-pane" id="9">
          <?php include("./week3.9.php"); ?>
        </div>
        <div class="tab-pane" id="10">
          <?php include("./week3.10.php"); ?>
        </div>
      </div>
    </div>
  </div>
<?php include($_SERVER["DOCUMENT_ROOT"]."/php/footer.php"); ?>
