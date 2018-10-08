<!DOCTYPE html>
<html>
<head>
 <title>goWeb</title>
 <?php include('include/head.php'); ?>
</head>
<body>
 <?php include('include/header.php'); ?>
 <?php include('include/sidebar.php'); ?>
 <div class="main-container">
  <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
   <div class="min-height-200px">
	<div class="page-header">
	 <div class="row">
	  <div class="col-md-6 col-sm-12">
       <nav aria-label="breadcrumb" role="navigation">
		<ol class="breadcrumb">
		 <li class="breadcrumb-item"><a href="index.php">Home</a></li>
		 <li class="breadcrumb-item active" aria-current="page">Go Web</li>
		</ol>
       </nav>
      </div>
	 </div>
	</div>
	<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">   
 	 <div class="clearfix">
	  <div class="pull-left">
	   <h4 class="text-blue">Replication / Cache Flush</h4>
       <p class="mb-30 font-14">All Cache flushes and/or WCD content replication exection</p>
	  </div>
	 </div>
     <?php
      $start1 = '14:00:00';
      $end1 = '14:30:00';    
      $start2 = '08:30:00';
      $end2 = '09:00:00';    
      if(str_replace(':','',$start1) < date('His') && str_replace(':','',$end1) > date('His') || str_replace(':','',$start2) < date('His') && str_replace(':','',$end2) > date('His'))    {
     ?>
     <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="icon-copy fa fa-info-circle" aria-hidden="true"></i><strong> Regular Window!</strong> Please proceed to perform required replication / cache flush.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     </div>
     <?php
      }
      else    {
     ?>
     <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="icon-copy fa fa-info-circle" aria-hidden="true"></i><strong> Emergency Window!</strong> Please proceed to perform required replication / cache flush.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     </div>
     <?php
      }
     ?><hr>
     <form>
	  <div class="row">
	   <div class="col-md-4 col-sm-6">
		<div class="form-group">
		 <label>Brands</label>
 		 <select class="custom-select2 form-control" multiple="multiple" style="width: 100%;">
          <optgroup label="CA">
           <option value="HI">CaBr</option>
           <option value="HI">CaGa</option>
           <option value="HI">CaOn</option>
          </optgroup>
          <optgroup label="EU">
           <option value="HI">EuBr</option>
           <option value="HI">EuGa</option>
          </optgroup>
          <optgroup label="JP">
           <option value="HI">JpBr</option>
           <option value="HI">JpGa</option>
          </optgroup> 
          <optgroup label="UK">
           <option value="HI">UkBr</option>
           <option value="HI">UkGa</option>
          </optgroup>
          <optgroup label="US">
		   <option value="AK">UsAt</option>
           <option value="HI">UsBr</option>
           <option value="HI">UsBf</option>
           <option value="HI">UsGa</option>
           <option value="HI">UsGf</option>
           <option value="HI">UsHc</option>
           <option value="HI">UsOn</option>
          </optgroup>
         </select>
         <br>
         <label>Markets</label>
 		 <select class="custom-select2 form-control" multiple="multiple" style="width: 100%;">
           <option value="HI">Ca</option>
           <option value="HI">Eu</option>
           <option value="HI">Uk</option>
           <option value="HI">Jp</option>
           <option value="HI">Us</option>
         </select>
		</div>
       </div>
       <div class="col-md-2 col-sm-6">
		<div class="form-group">
		 <label>Choose</label>
         <select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;">
		  <option value="AK">Websites</option>
		  <option value="HI">URLs</option>
		 </select>
        </div>
       </div>
       <div class="col-md-6 col-sm-12">
		<div class="form-group">
		 <label>URLs to flush</label>
		 <textarea class="form-control"></textarea>
        </div>
       </div>
      </div>
     </form>						
    </div>
    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
	 <div class="clearfix">
      <div class="row">
       <div class="col-md-12 col-sm-12">
        <label>Replication / Cache Flushes</label>
        <select class="custom-select2 form-control" multiple="multiple" style="width: 100%;">
         <option value="HI">Ca</option>
         <option value="HI">Eu</option>
         <option value="HI">Uk</option>
         <option value="HI">Jp</option>
         <option value="HI">Us</option>
        </select>
       </div>
      </div>
      <hr>
      <div class="row">
       <div class="col-md-5 col-sm-4"></div>
       <div class="col-md-1 col-sm-2">
        <button type="button" class="btn btn-info btn-lg">Submit</button>
       </div>
       <div class="col-md-1 col-sm-2">
        <button type="button" class="btn btn-secondary btn-lg">Reset</button>
       </div>
       <div class="col-md-5 col-sm-4"></div>
      </div>
     </div>
    </div>
   </div>
   <?php include('include/footer.php'); ?>
  </div>
 </div>
 <?php include('include/script.php'); ?>
</body>
</html>