
<!DOCTYPE <html>
<html lang="en">

<head>
<link rel="icon" type="image/png" href="../img/favicon.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Oprasional LMI</title>
  <link href="test/datepicker.less" rel="stylesheet">

</head>

<body>

                <form method="post" action="" class="form" enctype="multipart/form-data">
              
           
<style>
#tmpd{
	display:none;
}
    .form-controlx
      {
  display:none;
 width:80%;
 height:24px;
 
 }
 .form-controlx:focus{
	 border-color:green;
	 outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
	 box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px #fff
	 }
 .form-controlx::-moz-placeholder{
	 color:#999;opacity:1
	 }
 .form-controlx:-ms-input-placeholder{
	 color:#999
	 }
 
 
    </style>
			<script type="text/javascript">
			document.getElementById("tmpd").style.display="none";
			 function show(){
        var select = document.getElementById("tmp");
        var hideninp= document.getElementsByClassName("form-controlx");
        
        for(var i=1;i != hideninp.length;i++)
            {
                if(select.value =="View Dari s/d Sampai")
                    hideninp[i].style.display = 'inline';
					document.getElementById("tmp").style.display="none";
                    document.getElementById("tmpd").style.display="inline";
            
			}
			 }
			 
			  function hide(){
        var select = document.getElementById("tmpd");
        var hideninp= document.getElementsByClassName("form-controlx");
        
        for(var i=1;i != hideninp.length;i++)
            {
                if(select.value =="batal"){
                    hideninp[i].style.display = 'none';
					document.getElementById("tmpd").style.display="none";
                    document.getElementById("tmp").style.display="inline";
                }
                    
            
    }
			 }
			</script>	
				<div class="form-controlx">
				 <label >View Laporan</label>
				 
				 </div>
				   <div class="form-controlx">
               
                  <label>View Laporan</label>
                </div><br>
                
				
                <div class="form-controlx">
                
                  <label>Dari : </label>
                   <input type="date" name="dr" required value="yyyy-mm-dd" id="tanggalp" date-format="yyyy-mm-dd">
                
                </div>
                 <div class="form-controlx">
                  <label for="keterangan_komplain">Sampai : </label>
                  <input type="date" class="form-control" name="sampai" required id="tanggalp" data-date-format="yyyy-mm-dd">
                
                </div>
				
				
				
   
				
				<div class="form-group">             
              <input type=button onclick="show()" value="View Dari s/d Sampai" class="btn btn-primary" id="tmp" ></input>
               <input type=button onclick="hide()" value="batal" class="btn btn-primary" id="tmpd" ></input>
               <button type="submit" class="btn btn-primary">Submit</button>
               </form>		
			
           

</body>

</html>
