<?php include('../php/header.php'); ?>
<div id="wufoo-za3fslm1ucp6jy">
Fill out my <a href="https://miraclebob.wufoo.com/forms/za3fslm1ucp6jy">online form</a>.
</div>
<script type="text/javascript">
  function submitFeedback(){
    jQuery.post('../php/feedbackSubmit.php',{Message:jQuery("#Field3").val(),Week:jQuery("#Field1 :selected").val()},function(data){
      alert("Thank you for your feedback!");
    });
  }
  jQuery(document).ready(function(){
    console.log(jQuery("#saveForm"));
    //jQuery("#saveForm").attr('onmousedown','submitFeedback()');
    jQuery("#saveForm").after("<p>Hello</p>");
  });
  function doThis(){
    console.log(jQuery("#saveForm"));
    jQuery("#saveForm").attr('onmousedown','submitFeedback()');
  }
</script>
<script type="text/javascript">
var za3fslm1ucp6jy;

(function(d, t) {
var s = d.createElement(t), options = {
'userName':'miraclebob',
'formHash':'za3fslm1ucp6jy',
'autoResize':true,
'height':'454',
'async':true,
'host':'wufoo.com',
'header':'show',
'ssl':true};
s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
s.onload = s.onreadystatechange = function() {
    var rs = this.readyState;
    if (rs) if (rs != 'complete') if (rs != 'loaded') return;
    try {
      za3fslm1ucp6jy = new WufooForm();
      za3fslm1ucp6jy.initialize(options);
      za3fslm1ucp6jy.display();
    } catch (e) {}
    };
var scr = d.getElementsByTagName(t)[0], par = scr.parentNode;
par.insertBefore(s, scr);
})(document, 'script');
doThis();
</script>

<?php include('../php/footer.php'); ?>
