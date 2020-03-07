<?php 
ob_start();
    
    
     include("database/Formet.php");
      $fm=new Format();
     include_once 'database/Connection.php'; 
        $ob=new Database();
         include_once 'database/Session2.php';
     Session::checkSession();
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>Mbstu Admission Test 2019-20</title>
 
	  <link rel="icon"  href="img/mbstu2.png">
    <meta name="description" content="Mbstu Admission Test">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  

<link rel="stylesheet" type="text/css" href="boot/css/bootstrap.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


<link rel="stylesheet" type="text/css" href="style.css">


<script src="boot/js/jquery.js"></script>
<script type="text/javascript" src="boot/js/bootstrap.js"></script>
 
<script type="text/javascript" src="boot/js/main.js"></script>
</head>
	
<body >
 <script type="text/javascript">
  
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});

</script>
<div class="container-fluid ">
<div class="jumbotron slideanim" >
   
<?php  if(isset($_GET['action']) && $_GET['action']=='logout')
                               Session::destroy();
?>

  <div class="row slide">
  	<div class="col-md-12">
     <img src="img/mbstu2.png" class="img-rounded" alt="MBSTU" >
  	</div>
  </div>

  <div class="row slide">
  	<div class="col-md-12">
     <h2>MAWLANA BHASHANI SCIENCE AND TECHNOLOGY UNIVERSITY</h2>
      
  	</div>
  </div>

  	 
</div>
</div>
<div class="container slideanim">
	<div class=" panel slide">
	<h2>ADMISSION TEST</h2>
	<h3>SESSION 2019-20</h3>
</div>
</div>
<div class="container slideanim">
	<div class=" well slide" >
		
      <div class="row" style="margin-bottom: 10px;">
        <div class="col-md-3 lap" >
              <a href="seat-plan.php" class="btn btn-danger" style="padding: 10px 49px">Seat Plan</a>
        </div>
         <div class="col-md-3 lap" >
              <a href="result.php" class="btn btn-primary" style="padding: 10px 55px">Result</a>
        </div>
         <div class="col-md-3 lap" >
              <a href="Viva.php" class="btn btn-primary" style="padding: 10px 40px;background-color: #20b968;border-color:#20b968;" >Viva Result</a>
        </div>
        
        
         <div class="col-md-3 lap">       
              <a href="LAPA.php" class="btn btn-success">Live Admission</a>
        </div>
        
         
      </div>
       

	
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
        
        <marquee  behavior="alternate" direction="left"
           onmouseover="this.stop();"
           onmouseout="this.start(); " scrollamount="4">
<div class="marquee" style="display:inline-block;">
  <img src="img/a.jpg" class="img-responsive">
</div>
<div class="marquee" style="display:inline-block;">
  <img src="img/b.jpg" class="img-responsive">
</div>
<div class="marquee" style="display:inline-block;">
  <img src="img/c.jpg" class="img-responsive">
</div>
<div class="marquee" style="display:inline-block;">
  <img src="img/d.jpg" class="img-responsive">
</div>
<div class="marquee" style="display:inline-block;">
  <img src="img/e.jpg" class="img-responsive">
</div>
<div class="marquee" style="display:inline-block;">
  <img src="img/f.jpg" class="img-responsive">
</div>
<div class="marquee" style="display:inline-block;height:200px">
  <img src="img/g.jpg" class="img-responsive">
</div>
<div class="marquee" style="display:inline-block;">
  <img src="img/h.jpg" class="img-responsive">
</div>
<div class="marquee" style="display:inline-block;">
  <img src="img/i.jpg" class="img-responsive">
</div>
<div class="marquee" style="display:inline-block;">
  <img src="img/a.jpg" class="img-responsive">
</div>
<div class="marquee" style="display:inline-block;">
  <img src="img/b.jpg" class="img-responsive">
</div>
<div class="marquee" style="display:inline-block;">
  <img src="img/c.jpg" class="img-responsive">
</div>
<div class="marquee" style="display:inline-block;">
  <img src="img/d.jpg" class="img-responsive">
</div>
<div class="marquee" style="display:inline-block;">
  <img src="img/e.jpg" class="img-responsive">
</div>
<div class="marquee" style="display:inline-block;">
  <img src="img/f.jpg" class="img-responsive">
</div>
<div class="marquee" style="display:inline-block;height:200px">
  <img src="img/g.jpg" class="img-responsive">
</div>
<div class="marquee" style="display:inline-block;">
  <img src="img/h.jpg" class="img-responsive">
</div>
<div class="marquee" style="display:inline-block;">
  <img src="img/h.jpg" class="img-responsive">
</div>
</marquee>  
    
    </div>
  </div>
</div>

<div class="container helpline slideanim" style="font-family: 'Acme';text-align: center;text-shadow: 1px 1px 2px #897b7b;color: #27483e;">

  <h3 class="homeheading slide mydev">মাওলানা ভাসানী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ে আগত ২০১৯-২০ সেশনে ছাএছাএীদের আন্তরিক অভিনন্দন।তোমাদের সার্বিক সহযোগিতার জন্য আমাদের এই হেল্প লাইন</h3>
      <div class="well"  style="background:#a5bfda;box-shadow: 3px 2px 2px 6px #c9c5c5;">
      <h3 style="text-align: center;font-family: 'Acme';text-align: center;text-shadow: 1px 1px 2px #897b7b;color: #27483e;">বিভিন্ন জেলা থেকে আগত ভর্তি ইচ্ছুক ছাএছাএীরা তোমরা স্ব স্ব জেলার বড়ভাইদের সাথে যোগাযোগ করতে পারো যেকোন প্রয়োজনে</h3>



      <div class="row slideanim">
         <div class="col-md-3 slide">
             <h3>  সিলেট</h3>
               <table class="table table-striped">
              <thead>
             <tr>
   

 
       <th>নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
           <tr>
           <td>আরিফ  </td>
          <td>০১৭৮৯২২৭২৮৮ </td>
         
         </tr>
            <tr>
           <td>সাজু </td>
          <td>০১৭০৯২৩৭৫৮৮</td>
         
         </tr>
         <tr>
          <td>দেলোয়ার </td>
          <td>০১৭৯৩৬৪৩৭৮৬ </td>

         </tr>
         
       </tbody>
     </table>
      

      </div>
         
              <div class="col-md-3 slide">
             <h3> ঢাকা</h3>
               <table class="table table-striped">
              <thead>
             <tr>
            <th>নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
          <tr>
           <td> Naim </td>
          <td>01686816695</td>
         
         </tr>
            <tr>
           <td>Abu Bakar Jobair  </td>
          <td>01521259435</td>
         
         </tr>
          <tr>
           <td> সিজান  </td>
          <td>০১৭৩৩৮০০৭৯৪</td>
         
         </tr>
       </tbody>
     </table>
      

          </div>
           <div class="col-md-3 slide">
             <h3> জামালপুর</h3>
               <table class="table table-striped">
              <thead>
             <tr>
            <th>নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
          
            <tr>
           <td>Ovi</td>
          <td>01717909193</td>
         
         </tr>
          <tr>
           <td>Siam Hasan </td>
          <td>০১৭২৮৭৩৯০৫০</td>
         
         </tr>
         <tr>
           <td>Mamun</td>
           <td>০১৭৪৬৩৬৫৪৪৮</td>
         </tr>
       </tbody>
     </table>
      

      </div>
          <div class="col-md-3 slide">
             <h3> রংপুর</h3>
               <table class="table table-striped">
              <thead>
             <tr>
            <th>নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
          <tr>
           <td>মুরসালিন</td>
          <td>01792968153</td>
         
         </tr>
            <tr>
           <td>তানজিম সিনেট</td>
          <td>01521463332 </td>
         
         </tr>
          <tr>
           <td> রাকিব </td>
          <td>০১৭০৬৭১৬৯১৭</td>
         
         </tr>
       </tbody>
     </table>
      

      </div>

</div>
         
          <div class="row">
          <div class="col-md-3">
             <h3>কিশোরগঞ্জ </h3>
               <table class="table table-striped">
              <thead>
            <tr>
            <th>নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
          <tr>
           <td>Arif</td>
          <td>01828791169</td>
         
         </tr>
            <tr>
           <td>Saidul Islam  </td>
          <td>01955379706</td>
         
         </tr>
         <tr>
           <td>Kamrul Hasan </td>
           <td>01710531792</td>
         </tr>
         
            
       </tbody>
     </table>
      

          </div>
              <div class="col-md-3">
             <h3>চট্রগ্রাম</h3>
               <table class="table table-striped">
              <thead>
             <tr>
            <th>নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
          <tr>
           <td>Mamun </td>
          <td>01814818219</td>
         
         </tr>
            <tr>
           <td>ওয়ালিদ </td>
          <td>০১৫২১৪০৭২৪৩</td>
         
         </tr>
          <tr>
           <td>রাহুল  </td>
          <td>০১৮৫৮০১৭৩১৭</td>
         
         </tr>
       </tbody>
     </table>
      

          </div>
           <div class="col-md-3">
             <h3>চাঁপাইনবাবগঞ্জ</h3>
               <table class="table table-striped">
              <thead>
             <tr>
            <th>নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
           <tr>
           <td>Shahabuddin Sohag </td>
          <td>01521477187</td>
         
         </tr>
            <tr>
           <td>MD Kamrul Hasan </td>
          <td>01776894985</td>
         
         </tr>
          <tr>
           <td>সোহাগ </td>
          <td>০১৫২১৪৭৭১৮৭</td>
         
         </tr>
       </tbody>
     </table>
      

      </div>
          
          <div class="col-md-3">
             <h3> ময়মনসিংহ</h3>
               <table class="table table-striped">
              <thead>
             <tr>
            <th>নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
          
          <tr>
           <td>জয়  </td>
          <td>০১৭১৬০৩০০২৫</td>
         
         </tr>
           <tr>
           <td>সৌমিক </td>
          <td>01516076964</td>
         
         </tr>
           <tr>
           <td>পূর্ণ  </td>
          <td>01777332208</td>
         
         </tr>
       </tbody>
     </table>
      

      </div>
      <div class="row">
         <div class="col-md-3">
             <h3>  জয়পুরহাট</h3>
     

      <table class="table table-striped">
              <thead>
             <tr>
            <th>নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
           <tr>
           <td>তৌহিদুল ইসলাম</td>
          <td>০১৭০৪৬৪৩২৬২</td>
         
         </tr>
            <tr>
           <td>শরিফুল </td>
          <td> ০১৭৬৭১৮০৪৫৮</td>
         
         </tr>
          <tr>
           <td>হাসান   </td>
          <td>০১৯৫৪৭৪৫৯৯১ </td>
         
         </tr>
       </tbody>
     </table>
      

      </div>
        <div class="col-md-3">
             <h3> গাজীপুর</h3>
               <table class="table table-striped">
              <thead>
             <tr>
            <th>নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
           <tr>
           <td>Md Shajahan Islam   </td>
          <td> 01931765516</td>
         
         </tr>
            <tr>
           <td>তানজির রিমন  </td>
          <td>01633044603</td>
         
         </tr>
          <tr>
           <td>Al-amin  </td>
          <td>01935318080</td>
         
         </tr>
       </tbody>
     </table>
      

      </div>
        <div class="col-md-3">
             <h3> মানিকগঞ্জ</h3>
               <table class="table table-striped">
              <thead>
             <tr>
            <th>নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
           <tr>
           <td> নাদিম </td>
          <td>০১৭৩১১৫১৫০৩ </td>
         
         </tr>
            <tr>
           <td>অনিক </td>
          <td>০১৫২১২১৯৭৫৭</td>
         
         </tr>
          <tr>
           <td>পলাশ  </td>
          <td>০১৫২১৪৩৮০৫৯</td>
         
         </tr>
       </tbody>
     </table>
      

      </div>
        <div class="col-md-3">
             <h3>টাঙ্গাইল</h3>
               <table class="table table-striped">
              <thead>
             <tr>
            <th>নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
           <tr>
           <td>প্রদিপ </td>
          <td>01961766924 </td>
         
         
           <tr>
           <td>উৎস -</td>
          <td>01709183445 </td>
         
         </tr>
          <tr>
           <td>শিহাব -</td>
          <td>01533706750 </td>
         
         </tr>
          <tr>
           <td>রাকিব -</td>
          <td>01771904567 </td>
         
         </tr>
       </tbody>
     </table>
      

      </div>

    </div>



      

              <div class="row">
                
        <div class="col-md-3">
             <h3> খুলনা </h3>
               <table class="table table-striped">
              <thead>
             <tr>
            <th>নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
           <tr>
           <td> শুভ  </td>
          <td>০১৭৬৩১৬০৮৭৮ </td>
         
         </tr>
            <tr>
           <td>হাসনাত</td>
          <td>০১৭৩১০৯৯৬৯১</td>
         
         </tr>
          <tr>
           <td>সজল   </td>
          <td>০১৯৫০৬২৭০৯০</td>
         
         </tr>
       </tbody>
     </table>
      

      </div>
        <div class="col-md-3">
             <h3> বরিশাল </h3>
               <table class="table table-striped">
              <thead>
             <tr>
            <th>নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
           <tr>
           <td>রাহাত </td>
          <td>০১৯৮২৯৫২৪০০ </td>
         
         </tr>
            <tr>
           <td>সজীব</td>
          <td>০১৫২১৪৬৭৮৬৬</td>
         
         </tr>
          <tr>
           <td>তামিম হাসান  </td>
          <td>০১৮১৮৮৮১০৬৭</td>
         
         </tr>
       </tbody>
     </table>
      

      </div>
       <div class="col-md-3">
             <h3> দিনাজপুর</h3>
               <table class="table table-striped">
              <thead>
             <tr>
            <th>নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
           <tr>
           <td>Jahid Hasan </td>
          <td>01793821893</td>
         
         </tr>
            <tr>
           <td>Pranto </td>
          <td>01783074708</td>
         
         </tr>
         
       </tbody>
     </table>
      

      </div>
        
        <div class="col-md-3">
             <h3> ঠাকুরগাঁও</h3>
               <table class="table table-striped">
              <thead>
             <tr>
            <th>নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
           <tr>
           <td>Prodip Kumar   </td>
          <td>01796630762</td>
         
         </tr>
            <tr>
           <td>Omar Faruk Rasel
</td>
          <td>01765937571</td>
         
         </tr>
         
       </tbody>
     </table>
      

      </div>

    </div>

      

    <div class="row">
            <div class="col-md-6">
             <h3>কুমিল্লা</h3>
               <table class="table table-striped">
              <thead>
            <tr>
            <th style="text-align:center;">নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
          <tr>
           <td>রাসেল</td>
          <td>01521259077</td>
         
         </tr>
            <tr>
           <td>Mahmudul Hasan(চাঁদপুর) </td>
          <td>01793127524</td>
         
         </tr>
          <tr>
           <td>Towfiqul Islam(ব্রাহ্মনবাড়ীয়া)</td>
          <td> 01795245303</td>
         
         </tr>
            
       </tbody>
     </table>
      

          </div>
      
        <div class="col-md-6">
             <h3> কুষ্টিয়া,মেহেরপুর,চুয়াডাঙ্গা</h3>
               <table class="table table-striped">
              <thead>
             <tr>
   

 
        <th style="text-align:center;">নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
           <tr>
           <td>রোকন (চুয়াডাঙ্গা)   </td>
          <td> 01985-807828 </td>
         
         </tr>
            <tr>
           <td>সোহেল(কুষ্টিয়া) </td>
          <td>- 01775634373</td>
         
         </tr>
         <tr>
          <td>তিনাফ(কুষ্টিয়া)</td>
          <td> 01790423378 </td>

         </tr>
         <tr>
          <td>ফাহিম ভাই(চুয়াডাঙ্গা)</td>
          <td> -01964469688 </td>

         </tr>
          <tr>
          <td>আশিক(মেহেরপুর) </td>
          <td>01736400827 </td>

         </tr>
         
       </tbody>
     </table>
      

      </div>
       
    </div>

    <div class="row">
            <div class="col-md-6">
             <h4>নোয়াখালী,সাতক্ষীরা,নাটোর,নরসিংদী</h4>
               <table class="table table-striped">
              <thead>
            <tr>
            <th style="text-align:center;">নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
          <tr>
           <td>রুবায়েত(নোয়াখালী ) </td>
          <td>০১৬৮০৬১৩৫১৭</td>
         
         </tr>
            <tr>
           <td> প্রান্ত (সাতক্ষীরা) </td>
          <td>০১৭৮৩৩৭৮৮৩২</td>
         
         </tr>
          <tr>
           <td>নাটোর (ইকরামুল)</td>
          <td> -০১৭৯৩৮১০৬৫৩</td>
         
         </tr>
         <tr>
           <td>মনির-(নরসিংদী)</td>
           <td>০১৮৪৩৮৯৩৪৬৭</td>
         </tr>
            
       </tbody>
     </table>
      

          </div>
      
        <div class="col-md-6">
              <h4>গাইবান্ধা,বগুড়া</h4>
               <table class="table table-striped">
              <thead>
             <tr>
   

 
       <th>নাম</th>
            <th>মোবাইল নাম্বার  </th>
            </tr>
            </thead>
           <tbody>
           <tr>
           <td>রাকিব (গাইবান্ধা)  </td>
          <td> ০১৭০৬৭১৬৯১৭ </td>
         
         </tr>
            <tr>
           <td>জিয়া (গাইবান্ধা)</td>
          <td>- ০১৭৭৪৬৫৩২৩৪</td>
         
         </tr>
         <tr>
           <td>Shawon Sarkar(বগুড়া)  </td>
          <td>01791812071 </td>
         
         </tr>
            <tr>
           <td>Md Ratul(বগুড়া) </td>
          <td>01706336254</td>
         
         </tr>
         
       </tbody>
     </table>
      

  
    </div>
    <div class="container"  style="text-align:left">
      <div class="row" >
        <div class="col-md-3">
 ১.রাসেল(কুমিল্লা)--01521259077  <br>
 ২.সৌমিক (ময়মনসিংহ)-01516076964
 ৩.পূর্ণ (ময়মনসিংহ)--01777332208
 ৪.রিফাত(রাজবাড়ী) --01781389258
 ৫.    জয়(নওগাঁ) --01792233327   
 ৬.স্বাধীন (নওগাঁ) --01796950007
 ৬.রিজন(পঞ্চগড়) --01757850732
 ৭.উৎস (টাংগাইল)--01709183445
 ৮.শিহাব(টাংগাইল)--01533706750
 ৯.রাকিব(টাংগাইল)--01771904567
 ১০.তারেক(টাংগাইল)--01792097531

        </div>
         <div class="col-md-3">
 ১১.তাওহীদ (টাংগাইল)--01792096212
১২.আনোয়ার (টাংগাইল)--01631929777
১৩.আলভী (টাংগাইল)-- 01720944741
১৪.আকাশ (টাংগাইল)--01763050913
১৫.সজীব(টাংগাইল)--01700528022
১৬.মাহবুব(টাংগাইল)--01984-270080
১৭.প্রদিপ(টাংগাইল)--01961766924
১৮.মোমেন(টাংগাইল)--01767616067
১৯.ইমরান(রাজশাহী) --01521119701
২০.সৌরভ(নেত্রকোনা)--01724669767

        </div>
         <div class="col-md-3">
 ২১.রাসেল (নেত্রকোনা) --01631-524154
২২. নয়ন(গাজীপুর) --01954086697
২৩.মেহেদী (গাজীপুর) --01871497433
২৪.তানভীর (জয়পুরহাট) --01766431536
২৫.অরচনা(কুড়িগ্রাম) --01796176045
২৬.কায়েস(চট্টগ্রাম)--01306723518
২৭.সৌরভ(ঢাকা)--01724669767
২৮.রাসেল(ঢাকা)01521259077
২৯.হাসিব (ঢাকা)-- 01521432859
৩০.তাজুল(সাভার,ঢাকা)--01849575621

        </div>
         <div class="col-md-3">
৩১.যূথী (ঠাকুরগাঁও) -- 01737846824
৩২.সৈকত(জামালপুর) --01997441302
৩৩.জীম(পিরোজপুর) -- 01521560296
৩৪. মোনায়েম(চাপাইনবাবগঞ্জ) --01751000208
৩৫.রকি(গাইবান্ধা) --01796827158
৩৬.নয়ন(মাদারীপুর) --01739696008
৩৭.সৌরভ(শরীয়তপুর)--01766168018
৩৮.সালাউদ্দিন (মানিকগঞ্জ) --01626033640
৩৯.মুরসালিন (রংপুর) --01792968153
৪০.সিরাত (বগুড়া) --01797717823
৪১.রিফাত(নীলফামারী) --01786735607<br><br>
        </div>
    
      </div>
      <div class="row">
      <div class="col-md-12">
     <strong> ময়মনসিংহ সদর উপজেলা</strong>
শান্ত ০১৭৩৯০৭৩৭৩৫
দীপ ০১৬৭৩৩৭৪৭৪৬
শীবলু  ০১৭৮৯৬৪১৯৯৪
তানভীর ০১৭৩৯২৬০৬৫৭

<strong>গৌরিপুর উপজেলা</strong>
মামুন  ০১৯২৩৫৩০৭৯৮
মুবাশ্বির ০১৯৫২৮০৩৬৭৮

<strong>তারাকান্দা উপজেলা</strong>
আসাদ ০১৫১৫৬৮৩৯০০
আসিফ ০১৬৪৬৩৮৮০৬৮
এনামুল ০১৭০০৯৯৫৬৫৪

<strong>ফুলপুর উপজেলা</strong>
পুলক ০১৮৪৬৪৯২৩৬৯
জয় ০১৬৮৬৬৩১৪৯০
নাসিম ০১৬১২৪৫৭৫৪৭

<strong>হালুয়াঘাট উপজেলা</strong>
ডেবিট ০১৯৫৭১২৩৭৮০
সজিব ০১৯২১৯৯০৯২৬

<strong>নান্দাইল উপজেলা</strong>
রাজীব ০১৭৮৭৩৮৫৯৮৯
হিমু ০১৭৬৩৯৫১৭২২
আশিক ০১৭০৩৪১০৮২২

<strong>ঈশ্বরগঞ্জ উপজেলা</strong>
জয় ০১৭১৬০৩০০২৫
লিয়ন ০১৭৮৪২৬১০৩০

<strong>গফরগাঁও উপজেলা</strong>
মুরাদ ০১৬৮৫২২২১৫৮
বুলবুল ০১৬৮৯০৮৮৩৩৫
আশরাফুল ০১৭২১৭৯২৮৯১

<strong>মুক্তাগাছা উপজেলা</strong>
আসাদ ০১৫২১৪১৫৩৪৭
মীম ০১৮৫৯৪৩৫৪৩৫
রাশেদ ০১৭৪২৯৪৪৮১১

<strong>ফুলবাড়ীয়া উপজেলা</strong>
এমদাদ ০১৭৭১১৯১০৭৩
শিবলী ০১৬৪৪৯৬৪৮৪৪
রনি ০১৬৮২৩৪৯৮৯২

<strong>ত্রিশাল উপজেলা</strong>
সোহেল ০১৫৫৮৯৯৩০০০
শাকিল ০১৫১৫৬০৭০১৪
মুশফিক ০১৭৯০০৩৮৭৩৫
হামিদুর ০১৬৩১৯৪১৯৩৬

<strong>ভালুকা উপজেলা </strong>
দিপু  ০১৬২১০২৭৮৫৫
নাঈম ০১৫২১৩৩৬২৭১
সৈকত ০১৬৮৮৫৫৫৪৬১
      </div>
      </div>

       <div class="row">
      <div class="col-md-12">
  <h4 style="text-align:center">নেত্রকোণাস্টুডেন্ট 'এসােসিয়েশন</h4>
  দেলােয়ার পূর্বধলা | ০১৭২৫৯৫০০৯১ | বিবিএ ---রাজিব কেন্দুয়া ০১৭৯৯১০১৭১৯ পরিসংখ্যান ---হানিফ আটপাড়া ০১৭২৩৩৩০৩০৬ | টেক্সটাইল ---টুম্পা সদর। | | ০১৭১৫৭০৩৬৫৯ বিএমবি ---সাব্বির মােহনগঞ্জ ০১৭১০১৪১৪০৭| টেক্সটাইল। --সুমিত। | খালিয়াজুরি ০১৭৮১৯১৬৬৪৬। পরিসংখ্যান। ----রুবেল দূর্গাপুর ০১৯৪৮৫১২৩৬৪ সিপিএস ---পাঞ্জলি সদর ০১৩০৮৮১২৩২৪| পরিসংখ্যান।

      </div>
      </div>
      </div>



    </div>




</div>


     </div>



     
          <div class="helpline-thakerbebbostha">
               <h2>থাকার ব্যবস্থা</h2>
               <p>এখন যেহেতু শীতের মৌসুম তাই তোমরা যারা বিভিন্ন জেলা থেকে আসবে কষ্ট হলেও শীতের কাপড় চোপড় সঙ্গে করে নিয়ে আসবে তোমাদের সুবিধার্থে|উপরে দেওয়া জেলা ভিওিক কন্টাক্ট নাম্বার গুলোতে যোগাযোগ করলে  তোমরা সব সরকমের সহযোগিতা পাবে তারপরও বিকল্প থাকার ব্যবস্থা থাকবে</p>
                   <table class="table table-striped">
                
         <tbody>
        <tr>
          <td>ইউনিভার্সিটি সেন্ট্রাল মসজিদ  </td>
         <td>সন্তোষ</td>
        
          </tr>
          <tr>
          <td>মার্কাস মসজিদ </td>
         <td>নিরালা মোড় সংলগ্ন, পার্কের বাজার রোড</td>
        
          </tr>

           <tr>
          <td>hotel sefat</td>
         <td>old bus stand, 01616533566</td>
        
          </tr>

          <tr>
          <td>hotel silicon</td>
         <td>Main road, 01911105020</td>
        
          </tr>

          <tr>
          <td>hotel purobi</td>
         <td>Victoria road, 01868889999</td>
        
          </tr>

          <tr>
          <td>hotel prince</td>
         <td>Victoria road, 01719629488</td>
        
          </tr>

        </tbody>
      </table>

          </div>
          <div class="well" style="overflow:scroll;height: 600px;">
    <h3 style="text-align: center;padding-bottom: 10px;">বিভিন্ন জেলা থেকে টাঙ্গাইল আসার প্রক্রিয়া</h3>
     <div class="row">
         <div class="col-md-4"><h4>ঢাকা-</h4></div>
          <div class="col-md-8"><p style="text-align:justify;">কল্যানপুর অথবা গাবতলী থেকে "সোনিয়া" অথবা " সকাল সন্ধ্যা" নামক বাস আছে যেগুলো সরাসরি টাঙ্গাইল আসে।
অথবা এসি বাসে না আসলে, 
প্রথমে "চন্দ্রা" আসবেন তারপর চন্দ্রা থেকে "বিনিময়/দ্রুতগামী/নিরালা সুপার" বাসে উঠে টাঙ্গাইল পুরাতন বাস স্ট্যান্ডে নামবেন।
২) মহাখালী থেকে "নিরালা সুপার/দ্রুতগামী/বিনিময়" নামক বাস পাবেন, যেগুলো সরাসরি টাঙ্গাইল আসে এবং টাঙ্গাইল পুরাতন বাস স্ট্যান্ডে নামবেন।
পুরাতন বাস স্ট্যান্ড থেকে ক্যাম্পাসে আসার জন্য অটো পাবেন।




</br>
3.কমলাপুর অথবা এয়ারপোর্টে থেকে সরাসরি টাংগাইল আসা যাবে,নামতে হবে টাংগাইল ঘারিন্দা স্টেশন... সেখান থেকে অটো করে ইউনির্ভাসিটি(সন্তোষ)। ট্রেন সিডিউল নিচে দেওয়া হলো:
<br>
 <table class="table table-striped">
  <caption>ঢাকা -টাংগাইল ট্রেনের সময়সূচি</caption>
              <thead>
             <tr>
            <th>ট্রেনের নাম </th>
            <th>ঢাকা(কমলাপুর
) হতে ছাড়ে </th>
<th>টাংগাইল(ঘারিন্দা) হতে ছাড়ে</th>
 <th>বন্ধের দিন </th>
            </tr>
            </thead>
           <tbody>
           <tr>
           <td> ধুমকেতু </td>
          <td> সকাল ৬টা </td>
          <td></td>
           <td> শনিবার</td>
         
         </tr>
            <tr>
           <td>সুন্দরবন</td>
          <td>সকাল ৬:২০টা </td>
          <td>ভোর ০৩ঃ৩০ মিনিট</td>
           <td>বুধবার </td>
         
         </tr>
          <tr>
           <td>নীলসাগর </td>
          <td>সকাল ৮টা</td>
          <td>ভোর ০৪ঃ৫২ মিনিট</td>
           <td>সোমবার</td>
         
         </tr>
          <tr>
           <td>একতা </td>
          <td>সকাল ১০টা</td>
          <td>ভোর ০৫ঃ৪২ মিনিট</td>
          <td>মঙ্গলবার</td>
         
         </tr>
          <tr>
           <td>রাজশাহী লোকাল </td>
          <td>দুপুর ১২:২০টা</td>
          <td>সকাল ০৮ঃ৪২ মিনিট</td>
           <td></td>
         
         </tr>
          <tr>
           <td>সিল্কসিটি </td>
          <td> দুপুর ২:৪০ </td>
          <td>সকাল ১১ঃ০৮ মিনিট</td>
            <td> রবিবার </td>
         
         </tr>
          <tr>
           <td>সিরাজগঞ্জ- </td>
          <td>বিকেল ৫টা</td>
          <td>সকাল ৭ঃ৫৮ মিনিট</td>
           <td> শনিবার</td>


         </tr>
          <tr>
           <td>টাংগাইল কমিউটার </td>
          <td>সন্ধ্যা ৬ঃ২০ মিনিট</td>
          <td>সকাল ০৭ঃ০৫ মিনিট</td>
          <td>শুক্রবার</td>
         
         </tr>
          <tr>
           <td>চিত্রা</td>
          <td>রাত ৭টা</td>
          <td>বিকাল ০৩ঃ২০ মিনিট</td>
            <td>সোমবার</td>
         
         </tr>
          <tr>
           <td> দ্রুতযান </td>
          <td> রাত ৮টা</td>
          <td>বিকাল ০৪ঃ০৮ মিনিট</td>
          <td>বুধবার</td>
         
         </tr>
          <tr>
           <td> লালমনি </td>
          <td>রাত ১০টা</td>
          <td>সন্ধ্যা ০৬ঃ৪৭ মিনিট</td>
           <td>শনিবার</td>
         </tr>
          <tr>
           <td>  পদ্মা</td>
          <td>রাত ১০:৪৫টা </td>
          <td>সন্ধ্যা ০৭ঃ৩০ মিনিট</td>
           <td>মঙ্গলবার </td>
         </tr>
       </tbody>
     </table>
   <h4 style="text-align:center">  ঢাকা হতে টাংগাইল এর উদ্দেশ্য ছেড়ে আসা বাসের সময়সূচিঃ-</h4>
<h5 style="text-align:left">#নন_এসি
<strong>মহাখালী_থেকেঃ-</strong>

১. নিরালা সুপার সার্ভিস (নন স্টপ)
ফোনঃ- ০১৭৩৬৮৩৬৬১০(মহাখালী)
প্রতি ২০ মিনিট পর পর নিরালা সুপার সার্ভিস এর বাস ছাড়ে।

ভাড়াঃ- ১৬০৳

২.দ্রুতগামী (লোকাল)
৩.ধলেশ্বরী (লোকাল)
৪.বিনিময় (লোকাল)

২,৩,৪ নং বাস প্রতি ৩০ মিনিট পর পর মহাখালী থেকে ছাড়ে।

ভাড়াঃ- ১০০ থেকে ১৫০ এর মধ্যে।
#এসিঃ-
<strong>কল্যাপুর_থেকে:-</strong>

১. সকাল-সন্ধা
ফোনঃ-
কল্যানপুর কাউন্টার ঃ
০১৯৯১৯১৭৩৮১
০১৭০০৯৯৪৭৫২
সাভার কাউন্টার ঃ-
০১৯৯১৯১৭৩৮২
ভাড়াঃ- ৩০০
বাস ছাড়েঃ সকাল-৬,১০ ও১২ দুপুর -২,৩ এবং সন্ধা ৬,৮

#সোনিয়া_পরিবহন
ফোনঃ-01724592058; 01704811006 (ঢাকা)
বাস ছাড়েঃ- সকাল ৭,৯ ও১১ দুপুর ১,৩ এবং ৫,৭
ভাড়া ঃ- ৩০০
</h5>

</p></div>
           

     </div>
     <div class="row">
         <div class="col-md-4"><h4>কুমিল্লা -</h4></div>
          <div class="col-md-8"><p style="text-align:justify;">শাসনগাছা অথবা ক্যান্টনমেন্ট থেকে এশিয়া অথবা তিশা বাসে (আরো অনেক বাস আছে ঢাকায় আসে সেগুলো দিয়েও আসা যাবে(চান্দিনা ও দাউদকান্দি থেকেও একই বাসে ঢাকায় আসতে পারবেন)) ঢাকা সায়েদাবাদ আসতে হবে (ভাড়া ২০০ টাকা)সেখান থেকে ট্রেনে করে টাংগাইল আসতে চাইলে কমলাপুর যেতে হবে (ভাড়া বাসে ৫ টাকা আর রিকশায় ৩০ টাকা)।আর বাসে  করে আসতে চাইলে মহাখালী যেতে হবে(ভাড়া৩৫/৪০ টাকা)।তারপর(নিরালা বাসে) করে টাংগাইল নতুন অথবা পুরাতন বাস স্ট্যান্ড আসতে হবে(ভাড়া ১৬০ টাকা) আর ট্রেনে কমলাপুর থেকে টাংগাইল ঘারিন্দা ষ্টেশন (ভাড়া ১৪০ টাকা)তারপর অটোকরো ইউনিভার্সিটি</p></div>
           

     </div>
      <div class="row">
         <div class="col-md-4"><h4>কিশোরগঞ্জ-</h4></div>
          <div class="col-md-8"><p style="text-align:justify;">কিশোরগঞ্জের যেখানেই থাকেন প্রথমে গাইটাল বাসস্ট্যান্ড আসতে হবে। বাসস্ট্যান্ডে কিশোরগঞ্জ টু টাংগাইল এর জন্য ঈশা বাস থাকে,যা ১২.২০মিনিট ,১.২০মিনিট ,২.২০মিনিট ,৩.২০মিনিট..... এই চার টাইমে ছাড়ে। আর যদি কারো শখ থাকে সকালে আসার তাহলে ৬.৩০ মিনিট ও ৭.০০ মিনিট এ দুইটা বাস গৌরাংগ বাজার থেকে ছাড়ে।বাস টাংগাইল নতুন বাসস্ট্যান্ড এ থামবে নির্ধারিত সময়ের ৪.৩০-৫.০০ ঘন্টার মধ্যে, তারপর অটোতে করে সন্তোষ যেতে হবে</p></div>
           

     </div>
     <div class="row">
         <div class="col-md-4"><h4>চট্টগ্রাম -</h4></div>
          <div class="col-md-8"><p style="text-align:justify;"> চট্টগ্রাম থেকে টাংগাইলে নিয়মিত যাতায়াতের জন্য রয়েছে ইউনিক , সৌদিয়া ,শ্যামলী, হানিফ, সোনিয়া , বিপুল বাস সার্ভিস ।

ইউনিক , সৌদিয়া ,হানিফ , শ্যামলী আর বিপুল বাসের টিকেট দামপাড়া কাউন্টার পাওয়া যাবে । ভাড়া ৬৫০ টাকা ।

সোনিয়া বাস সার্ভিসের টিকিট অলংকার , এ.কে খান , সিনেমা প্যালেস পাওয়া যায় । ভাড়া ৫৫০/৬০০ টাকা ।

দামপাড়ায় বিপুল , সোনিয়া বাসের টিকেট পাওয়া যায় রয়েল কোচ বাস কাউন্টারে ।

সৌদিয়া বাস ছাড়ে সন্ধ্যা ৭ টায় ,শ্যামলী ,হানিফ ৭:৩০ টায় এবং ইউনিক বাস ৮:৪৫ টায় চট্টগ্রাম থেকে রওনা দেয় । টাংগাইলগামী ইউনিক , সৌদিয়া ,হানিফ ,শ্যামলী হলো সিরাজগঞ্জ রুটের বাস । যাত্রাপথে টাংগাইলে আশিকপুর অথবা রাবনা বাইপাসে তারা টাংগাইলের যাত্রী নামিয়ে দেয় ।

অন্যদিকে , সোনিয়া , বিপুল বাস সার্ভিস সরাসরি টাংগাইল আসে । বিপুল বাস ছাড়ে রাত ৯:৩০ টায় ।
সোনিয়া বাস সন্ধ্যা ৭:০০ টায় ছাড়ে অলংকার থেকে । এসব বাস টাঙ্গাইলের নতুন বাস স্ট্যান্ড যাত্রী নামিয়ে দেয় । </p></div>
           

     </div>
<div class="row">
         <div class="col-md-4"><h4>কক্সবাজার  -</h4></div>
          <div class="col-md-8"><p style="text-align:justify;">  কক্সবাজার থেকে S.I Enterprise, শ্যামলী বাস সার্ভিস রয়েছে । বাসের টিকিট পাওয়া যাবে ডলফিন মোড় , কলাতলী বিচ । বাস ছাড়ে বিকাল ৪ টায় । ভাড়া ১০০০ টাকা ।

বাস নামিয়ে দিবে আশিকপুর অথবা রাবনা বাইপাস ।

মাঝরাতে টাংগাইল পৌঁছে গেলে বাস থেকে রাবনা বাইপাসে নামলে ভাল । তাছাড়া , এডমিশন টাইমে বাস সরাসরি টাঙ্গাইলের ভিতর দিয়ে যায়। তখন পুরাতন বাস স্ট্যান্ড নামলে হবে । </p></div>
           

     </div>

     <div class="row">
         <div class="col-md-4"><h4>ময়মনসিংহ </h4></div>
          <div class="col-md-8"><p style="text-align:justify;">
টাংগাইল বাসস্ট্যাণ্ড গিয়ে প্রান্তিক এ উঠে যান, প্রায় ৪ ঘণ্টা পর টাংগাইল পৌঁছে যাবেন। আর দ্রুত যেতে চাইলে টাউনহল মোড় চলে যান, এখান থেকে কিশোরগঞ্জ এর বাস পাবেন (সাড়ে সাতটা থেকে সাড়ে ৮ টার মধ্যে)। তাছাড়া উত্তর বংগের গাড়িগুলোতেও যেতে পারবেন, সেক্ষেত্রে এলেংগা নামতে হবে এবং সেখান থেকে CNG বা অন্য কোন লোকাল পরিবনে টাংগাইল পৌঁছে যেতে পারবেন ।</p></div>
           

     </div>
     <div class="row">
         <div class="col-md-4"><h4>ব্রাহ্মনবাড়ীয়া</h4></div>
          <div class="col-md-8"><p style="text-align:justify;">যারা ট্রেনে আসবে তারা সদর রেলওয়ে স্টেশন থেকে ঢাকা বিমানবন্দর  স্টেশন  এ আসতে হবে আর সেখান থেকে সরাসরি ট্রেনে করে টাংগাইল রেলওয়ে স্টেশন(ঘারিন্দা) আসতে  হবে।তারপর সেখান থেকে অটো করে ইউনির্ভাসিটি আসা যাবে|
            যারা বাসে আসবে পৈরতলা বাসস্ট্যান্ড থেকে যে বাসগুলো(উত্তরা পরিবহন, তিতাস পরিবহন, ইকোনো পরিবহন)  মহাখালি, আব্দুল্লাহপুর যায়, ঐ বাসে করে করে আব্দুল্লাহপুর নেমে, আব্দুল্লাহপুর বাস স্ট্যান্ড থেকে টাঙ্গাইলের নিরালা বাস পাওয়া যায়।
          </p></div>
           

     </div>
      <div class="row">
         <div class="col-md-4"><h4>নরসিংদী</h4></div>
          <div class="col-md-8"><p style="text-align:justify;">নরসিংদী বাসস্ট্যান্ড বা ভেলানগর বাসস্ট্যান্ড থেকে মহাখালীগামী যেকোন বাসে করে আব্দুল্লাহপুর আসা লাগবে। সেখান থেকে টাংগাইল বা জামালপুর গামী যেকোন বাসে করে টাংগাইল আসা যায়!
নরসিংদী থেকে আব্দুল্লাহপুর আসার বাস : পিপিএল, বাদশাহ, উত্তরা, তিতাস, চলনবিল পরিবহন।
আব্দুল্লাহপুর থেকে টাঙাইল আসার বাস: নিরালা, ধলেশ্বরী, দ্রুতগামী, বিনিময় ইত্যাদি!
ট্রেনেও আসা যায় শিডিউল অনুযায়ী</p></div>
           

     </div>

       <div class="row">
         <div class="col-md-4"><h4>সিলেট </h4></div>
          <div class="col-md-8"><p style="text-align:justify;">কদমতলী থেকে Apollo,Shajalal,Shaymoli আরও অনেক বাস থাকতে পারে।তবে apollo & shajalal বাস দুইটা ডিরেক্ট টাঙ্গাইল এ আসে।টিকেটের দাম নিবে শ্যামলীতে ৭০০ টাকা(রাত ৭/৮টা),এপ্যালো(রাত ১০টা) ৬০০ টাকা,শাহজালাল (রাত১০টা)৫০০ টাকা ।আগে আগে টিকেট কেটে রাখবে তা না হলে পরে পাবে না।এছাড়া শায়েস্তাগঞ্জে ও এগুলার কাউন্টার আছে। বাসে আসলে তোমাকে শহরে নামিয়ে দেবে যেখান থেকে অটোর মাধ্যমে ভার্সেটিতে আসতে পারবে ভাড়া লাগবে ২০/২৫ টাকা।
ট্রেনে আসতে হলে তোমাকে প্রথমে ঢাকা আসতে হবে,উদয়ন,কালনী,পারাবত,জয়ন্তীকা,সুরমা ট্রেন আছে।ট্রেনে করে,এরপর ঢাকা থেকে টাঙ্গাইল। বাসেও আসতে পারবা।
👉বাসে আসলে ভালো হবে নাকি ট্রেন আসলে ভালো হবে?
----আমার মতে ট্রেনের চাইতে বাসে আসাটাই ভালো।কারণ তুমি ট্রেনে আসলে ঢাকা নেমে ট্রেনের জন্য অপেক্ষা করতে হবে।তাই তুমি ডিরেক্ট বাসে করে আসলে ভালো হয়।রাস্তায় জ্যাম না পড়লে ১০ ঘণ্টার মধ্যেই পৌঁছে যাবে।</p></div>
           

     </div>
      <div class="row">
         <div class="col-md-4"><h4>কুড়িগ্রাম -</h4></div>
          <div class="col-md-8"><p style="text-align:justify;">(১)কুড়িগ্রাম শহর থেকে প্রতিদিন সকাল ও রাতে অনেক ঢাকাগামী বাস আসে,সেগুলাতে এসে টাংগাইল রাবনা বাইপাস এ নামতে হবে, তবে ঢাকার ভাড়াটাই দিতে হবে (৫০০/৫৫০)। একটু সাশ্রয়ী হতে চাইলে ২য় অপশন👇
(২) কুড়িগ্রাম মেইল বাসস্ট্যান্ড থেকে রংপুর পার্কের মোড়ে নামতে হবে,ভাড়া ৮০ টাকা, তারপর ৫ টাকা অটো ভাড়া দিয়ে মডার্ন মোড়, এখান থেকে ঢাকাগামী যেকোন বাসে টাংগাইল এ আসা যাবে,ভাড়া ২৫০/৩০০ টাকা।
রাবনা বাইপাসে নেমে অটোতে করে সন্তোষ,আর সন্তোষ মানেই ভার্সিটি।ভাড়া ৩০ টাকা।</p></div>
           

     </div>
      <div class="row">
         <div class="col-md-4"><h4>রাজবাড়ী/বৃহত্তর ফরিদপুর-</h4></div>
          <div class="col-md-8"><p style="text-align:justify;">সরাসরি দৌলতদিয়া ঘাট পাড় হয়ে পাটুরিয়া আসবেন। ঢাকার লোকাল বাসে উঠে ২০ টাকা ভাড়া দিয়ে বরংগাইল নামবেন।
ওইখান থেকে সিএনজি তে ৮০ টাকা ভাড়া দিয়ে নাগরপুর আসবেন।নাগরপুর থেকে টাংগাইলের সিএনজিতে ৬০ টাকা ভাড়া দিয়ে কাগমারি মোড়।এইখান থেকে অটোতে ৩ মিনিটের পথ মাওলানা ভাসানী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়।
</p></div>
           

     </div>
  <div class="row">
         <div class="col-md-4"><h4>জামালপুর-</h4></div>
          <div class="col-md-8"><p style="text-align:justify;">যারা মেলান্দহ,ইসলামপুর,বকশীগঞ্জ থেকে আসবেন নিজ উপজেলায় ঢাকাগামী যেকোনো বাস এ করে রাবনা বাইপাস
তারপর অটো করে ক্যাম্পাস।
যদি বাস না থাকে তবে জামালপুর সদর এ টাঙ্গাইল বাসস্ট্যান্ড এ এসে তারপর ঢাকার বাসে করে রাবনা বাইপাস এ নামতে হবে।
মাদারগঞ্জ, সরিষাবাড়ি ঢাকাগামী বাস আছে এটা দিয়ে আসতে পারবেন।
বাস এ আসলে রাবনা বাইপাস এই নামতে হয় অধিকাংশ বাস থেকে।

এখানে ট্রেনেও আসা যাবে।
লোকাল ট্রেন।
ময়মনসিংহ হতে ছেড়ে আসে।
নামতে হয় বঙ্গবন্ধু সেতুপূর্ব তে।
তারপর লেগুনা করে পুরাতন/নতুন বাসস্ট্যান্ড এ তারওর অটো করে ক্যাম্পাস এ আসা যাবে। </p></div>
           

     </div>

     <div class="row">
         <div class="col-md-4"><h4>রংপুর</h4></div>
          <div class="col-md-8"><p style="text-align:justify;">কামার পাড়া বাস স্ট্যান্ড থেকে ঢাকাগামী যেকোনো বাসে টাংগাইল এর টিকেট করতে হবে। তবে শীততাপনিয়ন্ত্রক বাসগুলোতে আসতে চাইলে ঢাকার ভাড়া দিতে হয়।
👉🏼ঢাকাগামী বাসগুলো সাধারনত টাংগাইল শহরের ভেতর দিয়ে যায় না। এক্ষেত্রে টাংগাইল রাবনা বাইপাস এ নেমে যেতে হবে।
👉🏼রাবনা বাইপাস থেকে অটো নিয়ে সরাসরি ভার্সিটি চলে আসতে হবে। </p></div>
           

     </div>
     
      <div class="row">
         <div class="col-md-4"><h4>ভোলা</h4></div>
          <div class="col-md-8"><p style="text-align:justify;">যেকোন লঞ্চে  এ ঢাকা সদরঘাট আসতে হবে।বাসে আসতে চাইলে সদরঘাট থেকে মহাখালী যাইতে হবে সেখান থেকে নিরালা বাসে করে টাংগাইল পুরাতন বাস।  সেখান থেকে অটো করে ভার্সিটি
আর ট্রেনে  আসতে চাইলে সদরঘাট থেকে কমলাপুর যাইতে হবে সেখান থেকে টাংগাইল ঘারিন্দা  স্টেশনে নামতে হবে।তারপর অটো করে ভার্সিটি </p></div>
           

     </div>
     <div class="row">
         <div class="col-md-4"><h4>নাটোর-</h4></div>
          <div class="col-md-8"><p style="text-align:justify;">
যারা বাসে সিংড়া, নাটোর এবং নলডাঙ্গা থেকে বাসে আসবা তারা প্রথমে নাটোর বাস টার্মিনালে (যেইটা হরিশপুর বাইপাসের কাছাকাছি) আসবা সেখান থেকে যেগুলা ঢাকা কোচ (দেশ, ন্যাশনাল, গ্রামীন, তুহিন) আছে সেগুলাতে উঠে রাবনা বাইপাস (টাঙ্গাইল বাইপাস ও বলে) নামতে হবে, ভাড়া ৩৫০ টাকা। আর কিছু লোকাল আছে গাজীপুর আর ঢাকা আসে। সেগুলাতে উঠলে ১০০-১৫০ টাকা ভাড়া নিবে। আর রাবনা বাইপাস (টাঙ্গাইল বাইপাস ও বলে) নামতে হবে। এরপর রাবনা বাইপাস থেকে অটোতে ভার্সিটি (সন্তোষ) ৩০ টাকা ভাড়া নিবে। আর যারা লালপুর, বনপাড়া, গুরুদাসপুর,বাগাতিপাড়া, বড়াইগ্রাম থেকে আসবা তারা বনপাড়া বা বড়াইগ্রাম বা কাচিকাটা থেকে এইগুলা বাস পাবা। বাসে আসতে মোটামুটি ৩ ঘন্টা লাগে (লোকাল)। ঢাকা কোচগুলোতে কম লাগে একটু।
আর যারা ট্রেনে আসবা তারা নাটোর ষ্টেশন থেকে টাঙ্গাইল ২৩৫ টাকা ভাড়া নেয়। নীলসাগর, একতা, দ্রুতযান, লালমনি এই চারটা ট্রেন আসে। ট্রেনে আসলে যারা আব্দুল্পুর থেকে উঠতে চাও তারা যেনে নিবা কোন ট্রেনের স্টপেজ বা ক্রসিং আছে কারন আব্দুল্পুর সাধারণত থামায় না। তারপর টাঙ্গাইল ষ্টেশনে নেমে অটোতে করে কলেজ গেট আসবা ১৫ টাকা লাগবে। তারপর কলেজ গেট থেকে ভার্সিটিতে(সন্তোষ) অটো ২০ টাকা নিবে।</p></div>
           

     </div>
</div>


<h3 style="padding-bottom:10px;font-family: 'Acme';text-align: center;text-shadow: 1px 1px 2px #897b7b;color: #27483e;">টাঙ্গাইল শহরের বিভিন্ন জায়গা থেকে বিশ্ববিদ্যালয়ে আসার যাতায়াত খরচ </h3>
<div class="container" style="height: 350px; overflow:scroll;font-family: 'Acme';text-shadow: 1px 1px 2px #897b7b;color: #27483e;">
	
	
     <table class="table table-hover" style="text-align: left;">
    <thead>
      <tr>
        <th>উৎস</th>
        <th>গন্তব্য  </th>
        <th>ভাড়া</th>
      </tr>
    </thead>
    <tbody>
       <tr>
        <td>নতুন বাসস্ট্যান্ড  হতে  </td>
        <td>ভার্সিটি  /সন্তোষ </td>
        <td>২৫ টাকা</td>
      </tr>
       <tr>
        <td>ঘারিন্দা রেল স্টেশন  </td>
        <td>ভার্সিটি /সন্তোষ </td>
        <td>৩৫ টাকা</td>
      </tr>
      <tr>
        <td>নিরাল মোড় হতে  </td>
        <td>ভার্সিটি /সন্তোষ </td>
        <td>১৫ টাকা</td>
      </tr>
       <tr>
        <td>নিরাল মোড় হতে  </td>
        <td>শান্তিকুঞ্জ মোড় </td>
        <td>০৫ টাকা</td>
      </tr>
      <tr>
        <td>শান্তিকুঞ্জ মোড় হতে  </td>
        <td>ভার্সিটি /সন্তোষ </td>
        <td>১০টাকা</td>
      </tr>
      
      <tr>
        <td>রাবনা বাইপাস  হতে  </td>
        <td>পুরাতন বাসস্ট্যান্ড</td>
        <td>১০ টাকা</td>
      </tr>
       <tr>
        <td>ঘারিন্দা রেল স্টেশন  হইতে  </td>
        <td>কুমুদিনী কলেজ গেইট </td>
        <td>১৫ টাকা</td>
      </tr>
     
     
       <tr>
        <td>পুরাতন বাসস্ট্যান্ড হতে  </td>
        <td>বেবীস্ট্যান্ড </td>
        <td>১০ টাকা </td>
      </tr>
      <tr>
        <td>নতুন বাসস্ট্যান্ড  হতে </td>
        <td>পুরাতন বাসস্ট্যান্ড</td>
        <td>০৫ টাকা</td>
      </tr>
       <tr>
        <td>কাগমারী কলেজ মোড়  হতে  </td>
        <td>ভার্সিটি /সন্তোষ </td>
        <td>০৫ টাকা</td>
      </tr>
      
    </tbody>
  </table>
  <h3>নতুন জায়গায় আসলে হয়তো অনেকই ভাড়ার বিড়ম্বনায় পড়তে পারো। তাই তোমাদের সুবিধার্থে ভাড়া লোকেশন </h3>
   <ul style="text-align:center"><li>যাদের সিট ভার্সিটিতে পড়ছে তারা রেল ষ্টেশন থেকে ৩৫ টাকা আর নতুন বাস স্ট্যান্ড থেকে ২৫ টাকা আর পুরাতন বাস স্ট্যান্ড থেকে ২০ টাকা নিবে।নিরাল থেকে ১৫ টাকা নিবে।</li>

<li>#Kumudini_Govt_College_College_Gate, Tangailনতুন বাস /পুরাতন বাস স্ট্যান্ড থেকে ৫ টাকা অটো ভাড়া , রিকশা ভাড়া ২০-৩০ টাকা নিবেআর রেল স্টেশন থেকে ১৫ টাকা অটো ভাড়া নিবে</li>

<li>#Zahnavi_High_School_Santosh_Tangail এটা ভার্সিটি যাওয়ার পথেই পরে পুরাতন বাস স্ট্যান্ড থেকে ২০ টাকা অটো ভাড়া নিবে আর নতুন বাস স্ট্যান্ড থেকে ২৫ টাকা নিবে ।</li>

<li>#Govt_Sheikh_Fazilatunnesa_MuzibMohilaCollege_AkurTakurPara_Tangail যাদের সিট এখানে পড়ছে তারা নতুন বাস স্ট্যান্ড থেকে ১৫-২৫ টাকা রিকশা ভাড়া নিবেআর পুরাতন বাস স্ট্যান্ড থেকে ১৫-২০ টাকা নিবে।</li>

<li>#Govt_M_M_Ali_College_Kagmari_Tangail এটা ভার্সিটি যাওয়ার পথেই পরে পুরাতন বাস স্ট্যান্ড থেকে ১৫ টাকা অটো ভাড়া নিবে আর নতুন বাস স্ট্যান্ড থেকে ২০ টাকা নিবে । আর ভার্সিটি আসতে থেকে ৫ টাকা নিবে</li>

<li>#Major_General_Mahmudul_Hasan_AdarshaCollege_ShahidJogloRoad_Tangail নতুন বাস স্ট্যান্ড থেকে ২৫-৩৫ টাকা , আর পুরাতন বাস স্ট্যান্ড থেকে ১০ টাকা নিবে</li>

<li>#Bindhubashini_Govt_Boys_High_School_NiralaMor_Tangail নতুন বাস স্ট্যান্ড থেকে ২০-২৫ টাকা রিকশা ভাড়া ,আর পুরাতন বাস স্ট্যান্ড থেকে ৫ টাকা রিকশা ভাড়া নিবে রেল স্টেশন থেকে আসতে হলে প্রথমে ২৫ টাকা দিয়ে অটোতে করে নিরালা মোড় আসতে হবে নিরালা মোড়ের একটু সামনেই এই স্কুল টা</li>

<li>#Bindhubashini_Govt_Girls_HighSchool_RegistryPara_Tangail নতুন বাস স্ট্যান্ড থেকে ২০-২৫ টাকা রিকশা ভাড়া ,আর পুরাতন বাস স্ট্যান্ড থেকে ১৫ টাকা রিকশা ভাড়া নিবে</li>

<li>#Police_Lines_High_School_District_HeadQuarter_Tangail নতুন বাস স্ট্যান্ড থেকে ২০-২৫ টাকা রিকশা ভাড়া, পুরাতন বাস স্ট্যান্ড থেকে ২০-৩০টাকা রিকশা ভাড়া নিবে</li>

<li>#Vivekananda_HighSchool_and_College_BotTola_Tangail নতুন বাস স্ট্যান্ড থেকে অটো তে করে আসতে হলে ৫-১০ টাকা নিবে রিক্সায় ১৫-২০ টাকা,পুরাতন বাস স্ট্যান্ড থেকে রিক্সায় ২০ টাকা নিবে ।</li>

<li>#Tangail_Polytechnic_Institute_Near_New_Bus_Stand_Tangail নতুন বাস স্ট্যান্ড থেকে অটো তে করে আসতে হলে ৫-১০ টাকা নিবে রিক্সায় ১৫-২০ টাকা,পুরাতন বাস স্ট্যান্ড থেকে রিক্সায় ২০ টাকা নিবে । আর রেল স্টেশন থেকে অটো তে করে আসলে ১৫ টাকা নিবে</li>

<li>#Tangail_DarulUlum_Aliya_Madrasha_AliyaMadrasha_Thana_Road_Tangail নতুন বাস স্ট্যান্ড থেকে অটো তে করে আসতে হলে ২০ টাকা নিবে রিক্সায় ২৫-৩৫ টাকা,পুরাতন বাস স্ট্যান্ড থেকে অটোতে ১০ টাকা রিক্সায় ২০ টাকা নিবে । আর রেল স্টেশন থেকে আসতে হলে অটো তে করে আসলে ২০ টাকা নিবে</li>

<li>#Hazi_Abul_Hossain_Institute_of_Technology_HABHIT_Mosjid_Road_Tangail নতুন বাস স্ট্যান্ড থেকে ২০-২৫ টাকা রিকশা ভাড়া ,আর পুরাতন বাস স্ট্যান্ড থেকে ১৫ টাকা রিকশা ভাড়া নিবে</li>

<li>#Tangail_Girls_High_School_Choyani_PukurPara_Tangail নতুন বাস স্ট্যান্ড থেকে ২৫-৩৫ টাকা রিকশা ভাড়া ,আর পুরাতন বাস স্ট্যান্ড থেকে ১৫-২৫ টাকা রিকশা ভাড়া নিবে</li>

<li>#Shibnath_High_School_Near_Old_Bus_Stand_Tangail নতুন বাস স্ট্যান্ড থেকে ১৫-২৫ টাকা রিকশা ভাড়া ।</li>

<li>#Zilla_Sadar_Girls_High_School_District_HeadQuarter_Tangail নতুন বাস স্ট্যান্ড থেকে ১০-১৫ টাকা রিকশা ভাড়া ,আর পুরাতন বাস স্ট্যান্ড থেকে ১৫-২০ টাকা রিকশা ভাড়া নিবে ।</li>

<li>#Tangail_Medical_College_and_MATS_Mymensing_Road_Tangail নতুন বাস স্ট্যান্ড থেকে হেতেই যেতে পারবা আর পুরাতন বাস স্ট্যান্ড থেকে ৫ টাকা অটো ভাড়া নিবে</li>

<li>#Hazi_Abul_Hossain_Adarsha_High_School_Chachoya_Dangga_Tangail নতুন/পুরাতন বাস স্ট্যান্ড থেকে প্রথমে অটো তে করে বেবী স্ট্যান্ড আসতে হবে ২০-২৫ টাকা নিবে তারপর ঐ খান থেকে ১৫ -২০ টাকা রিক্সা ভাড়া নিবে</li>

<li>#Govt_Saadat_College_Karotia_Tangail এই খানে যাদের সিট পড়ছে তাদের বলতে গেলে দুর্ভাগ্য ই কারন এইটা শহরের বাইরে পড়ছে।নতুন /পুরাতন বাস স্ট্যান্ড থেকে সি এন জি /লোকাল বাসে করে যেতে হবে সিএন জি ভাড়া নিবে জন প্রতি ১৫-২০ টাকা।</li>

<li>#H_M_Institute_Korotia_Tangail এটা করোটিয়া সাদত কলেজের পাশেই, না চিনলে ওখান থেকে রিক্সা দিয়েও যেতে পার,, ভাড়া ১০ টাকা</li>

<li>#Abida_Khanam_Girls_High_School এই খানে যাদের সিট পড়ছে তাদের বলতে গেলে দূর্ভাগ্যবই,এইটা শহরের বাইরে পড়ছে।নতুন /পুরাতন বাস স্ট্যান্ড থেকে সি এন জি /লোকাল বাসে করে যেতে হবে সিএন জি ভাড়া নিবে জন প্রতি ১৫-২০ টাকা।</li>

<li>#Rokeya_Fazil_Madrasha এই খানে যাদের সিট পড়ছে তাদের বলতে গেলে দুর্ভাগ্য ই কারন এইটা শহরের বাইরে পড়ছে।নতুন /পুরাতন বাস স্ট্যান্ড থেকে সি এন জি /লোকাল বাসে করে যেতে হবে সিএন জি ভাড়া নিবে জন প্রতি ১৫-২০ টাকা।</li>

<li>#Tangail_collectorate_girls_high_school_and_college :- নতুন বাসস্ট্যান্ড অথবা পুরাতন বাস স্ট্যান্ড থেকে অটো করে ডিস্ট্রিক্ট গেট ।ভাড়া -৫টাকা। তারপর হেটে অথবা রিক্সায়।</li>

<li>#Textile_Institute_Bajitpur শান্তিকুন্জ মোড় হতে ১০ টাকা ভাড়া, পুরাতন বাসস্ট্যান্ড হতে ২০ টাকা রিক্সা ভাড়া নিবে</li></ul></h4>
</div>
<div class="container " style="background: #CDCFD7">
  <h3 style=" padding-top: 10px; margin-bottom: 20px;font-family: 'Acme';text-align: center;text-shadow: 1px 1px 2px #897b7b;color: #27483e;"> মা.ভা.বি.প্র.বি এর ভর্তি পরীক্ষার  প্রশ্নের ধারনা নিতে ২০১৮-১৯ সেশনের প্রশ্ন  নিচে দেওয়া হলো যাদের প্রয়োজন ডাউনলোড করে নিতে পারো</h3>
  <div class="row" style="margin-bottom:10px;">
      <div class="col-md-3 abcd">
        <div style="margin-bottom:10px;">
   <a  href="A.pdf" ><i class="fa fa-download"></i>A Unit</a>
 </div>
      </div>
        <div class="col-md-3 abcd">
          <div  style="margin-bottom:10px;">
   <a  href="B.pdf"  ><i class="fa fa-download"></i>B Unit</a>
 </div>
      </div>
        <div class="col-md-3 abcd">
          <div  style="margin-bottom:10px;">
   <a  href="Cunit.pdf" ><i class="fa fa-download"></i>C Unit</a>
 </div>
      </div>
        <div class="col-md-3 abcd">
   <a  href="Dunit.pdf"  ><i class="fa fa-download"></i>D Unit</a>
      </div>

     
    
  </div>

</div>
      <div class="panel" style="margin-top: 20px;text-align:justify;">
            <h3 style="text-align: center;margin-bottom: 15px;">২০১৮-১৯ সেশনের ভর্তি পরীক্ষার রেজাল্ট </h3>
            <div class="row">
              <div class="col-md-3" style="background:#DAD3D3;">
                <h4>Faculty Of Engineering</h4>
                <p >A Unit এ সব্বোর্চ্চ  স্কোর ছিল  ১৭৯.২৫(১ম স্থান)এবং সব্বোর্নিম্ন স্কোর ছিল ১৫৩.৫০( ৯০০ তম)|সর্বশেষ ভর্তি হওয়ার সুযোগ পেয়েছে 
২৯৬ তম (স্কোর ১৫৫.২৫)<br> <strong>সিট সংখ্যা</strong> 
             
              <ul>
               
                 <li>ICT 55</li>
                  <li>CSE 55</li>
                  <li>TE 60</li>
              </ul>

 </p></div>
               <div class="col-md-3" style="background:#DAD3D3;">
                 <h4>Faculty Of Life Science</h4>
                 <p>B Unit এ সব্বোর্চ্চ  স্কোর ছিল  ১৮৫.৭৫(১ম স্থান) 
এবং সব্বোর্নিম্ন স্কোর ছিল ১৬৮.৭১( ৯০৫ তম) |সর্বশেষ ভর্তি হওয়ার সুযোগ পেয়েছে ৬৯৮ তম(স্কোর ১৭০.০০)
 </p>
    <strong>সিট সংখ্যা</strong> 
             
              <ul>
               
                 <li>ESRM 55</li>
                  <li>CPS 60</li>
                   <li>FTNS 55</li>
                    <li>BGE 55</li>
                     <li>Pharmacy 35</li>
                  <li>BMB 35</li>
              </ul>

               </div>
                <div class="col-md-3" style="background:#DAD3D3;">
                   <h4>Faculty Of Science</h4>
                  
  <p>C Unit এ সব্বোর্চ্চ  স্কোর ছিল  ১৭৮.৫(১ম স্থান) 
এবং সব্বোর্নিম্ন স্কোর ছিল ১৫২.৪৫( ৭৫০তম)|সর্বশেষ ভর্তি হওয়ার সুযোগ পেয়েছে ৫৪৫ তম(স্কোর ১৫৪.৭৫) 
 </p>
   <strong>সিট সংখ্যা</strong> 
             
              <ul>
               
                 <li>Chemistry  55</li>
                  <li>Mathematics 60</li>
                   <li>Physics 55</li>
                    <li>Statistics 60</li>
                    
              </ul>

                </div>
                 <div class="col-md-3" style="background:#DAD3D3;">
                   <h4>Faculty Of Business Studies & Social Science</h4>
                   
 <p>D Unit এ বিজ্ঞান শাখা থেকে সব্বোর্চচ স্কোর ছিল ১৭৭.৫০(১ম) এবং সব্বোর্নিম্ন  ছিল ১৫৬.৭১(১১২তম)|ব্যবসা শাখা থেকে সব্বোর্চ্চ  স্কোর ছিল ১৬৯.৬৮  (১ম স্থান) এবং সব্বোর্নিম্ন স্কোর ছিল ১৪৫.৪১(১৬১তম) <br>মানবিক শাখা থেকে সব্বোর্চ্চ  স্কোর ছিল ১৬৬.০০ (১ম স্থান) এবং সব্বোর্নিম্ন স্কোর ছিল ১৪৪.৫৯(৯০তম)

  </p>
  <strong>সিট সংখ্যা</strong> 
             
              <ul>
                BBA(60)
                 <li>Acounting(Commerce-19;Science-08;Humanity-3)30</li>
                 <li>Management(Commerce-19;Science-08;Humanity-3)</li>
                 
                    
              </ul>
               <ul>
                Social Science(60)
                
                  <li>Economies(Commerce-16;science-22;Humanity-22)60</li>
                 
                    
              </ul>

                 </div>
            
  

          </div>

          <div class="container">
              <div class="well">
                   <h3>ভর্তিযুদ্ধে(২০১৯-২০ শিক্ষাবর্ষ) প্রতিযোগিতা </h3>
                   <ul>
                     <li style="list-style-type: none;">
                      # ৮১৫ টি আসনের বিপরীতে প্রতিযোগী ৬৫০৩৫ জন।-প্রতি আসনে প্রতিযোগী প্রায় ৮০  জন। </li>
                     <li>A ইউনিটে মোট ১৭০টি আসনের বিপরীতে লড়বে ২১৫৯২ জন।-প্রতি আসনের লড়বে ১২৭ জন।
                     </li>
                     <li>B ইউনিটে মোট ২৯৫ টি আসনের বিপরীতে লড়বে ২৫৯৪৩ জন।-প্রতি আসনে লড়বে ৮৮  জন।</li>
                      <li>C ইউনিটে মোট ২৩০টি আসনের বিপরীতে লড়বে ১০৬৩২  জন।-প্রতি আসনে লড়বে ৪৭  জন। </li>
                      <li>D ইউনিটে মোট ১২০টি আসনের বিপরীতে লড়বে ৬৮৬৮  জন।-প্রতি আসনে লড়বে ৫৮  জন।</li>
                   </ul>
              </div>
          </div>


           <div class="container">
              <div class="well">
                   <h3>ভর্তি পরীক্ষার সময়সূচি </h3>
                   <h4>১০০ নম্বরের প্রশ্নের উওরের জন্য সময় ১ ঘন্টা। পরীক্ষা শুরু হওয়ার ৩০ মিনিট আগে পরীক্ষা হলে প্রবেশ করতে হবে|</h4>

     <table class="table table-hover" style="text-align: left;">
    <thead>
      <tr>
        <th>তারিখ ও বার</th>
        <th>সময় </th>
        <th>ইউনিট</th>
      </tr>
    </thead>
    <tbody>
       <tr>
        <td>০৬ ডিসেম্বর ২০১৯, শুক্রবার  </td>
        <td>সকাল ১০ঃ৩০ হতে দুপুর ১২ঃ০০ পর্যন্ত</td>
        <td>A</td>
      </tr>
      <tr>
        <td>০৬ ডিসেম্বর ২০১৯, শুক্রবার  </td>
        <td> বিকাল ০৩:০০ হতে ০৪:৩০ পর্যন্ত</td>
        <td>B</td>
      </tr>
      <tr>
        <td> ০৭ ডিসেম্বর ২০১৯, শনিবার </td>
        <td>সকাল ১০ঃ৩০ হতে দুপুর ১২ঃ০০ পর্যন্ত</td>
        <td>C</td>
      </tr>
      <tr>
        <td>০৭ ডিসেম্বর ২০১৯, শনিবার  </td>
        <td> বিকাল ০৩:০০ হতে ০৪:৩০ পর্যন্ত</td>
        <td>D</td>
      </tr>
                  </tbody>
                  </table>
                   
              </div>
          </div>
        </div>
      </div>

          <div class="container manbonton1">
            <div class="row">
            <div class="col-sm-12">
             
              <h3>নম্বর বন্টন</h3>
              <h5 style="line-height:25px;">ভর্তি পরীক্ষা MCQ (Multiple Choice Questions) পদ্ধতিতে অনুষ্ঠিত হবে। প্রতিটি ইউনিটে ২০০ নম্বরের মধ্যে মেধাক্রম নির্ধারণ করা হবে। তন্মধ্যে ১০০ নম্বরের MCQ (১০০ টি প্রশ্ন থাকবে) পদ্ধতিতে পরীক্ষা হবে এবং অবশিষ্ট ১০০ নম্বরের মধ্যে এসএসসি/সমমান পরীক্ষায় প্রাপ্ত জিপিএ হতে ৪০% (চতুর্থ বিষয়সহ) ও এইচএসসি/সমমান পরীক্ষায় প্রাপ্ত জিপিএ হতে ৬০% (চতুর্থ বিষয়সহ) গণনা করা হবে। প্রতিটি ভুল উত্তরের জন্য ০.২৫ (শূন্য দশমিক দুই পাঁচ) নম্বর মােট প্রাপ্ত নম্বর থেকে কর্তন করা হবে। উল্লেখ্য, ভর্তি পরীক্ষার প্রশ্নপত্র উচ্চ মাধ্যমিক পর্যায়ের সর্বশেষ পাঠ্যসূচি অনুযায়ী হবে।</h5>
              <h4 class="abcdunitmanbontan"><strong>A,B,C ও D ইউনিটভিওিক ভর্তি পরীক্ষার মান বন্টন</strong></h4>
               <div class="manbonton">
              <table class="table table-striped">
                <tr>
                  <th>Unit</th>
                   <th>ইংরেজি</th>
                   <th>রসায়ন</th>
                  <th>পদার্থবিজ্ঞান</th>
                  <th>গনিত</th>
                  <th>মোট</th>

                  
                </tr>
                <tr>
                  <td>A</td>
                  <td>১০ </td>
                  <td>২০ </td>
                  <td>৩৫ </td>
                  <td>৩৫</td>
                  <td>=১০০</td>
                </tr>
                <tr>
                  <th>Unit</th>
                   <th>ইংরেজি</th>
                   <th>রসায়ন</th>
                  <th>পদার্থবিজ্ঞান</th>
                  <th>জীববিজ্ঞান</th>
                  <th>মোট</th>

                  
                </tr>
                  <tr>
                  <td>B</td>
                  <td>১০ </td>
                  <td>৩৫ </td>
                  <td>২০ </td>
               
                  <td>৩৫</td>
                  <td>=১০০</td>
                </tr>
                 <tr>
                  <th>Unit</th>
                   <th>ইংরেজি</th>
                   <th>রসায়ন</th>
                  <th>পদার্থবিজ্ঞান</th>
                  <th>গনিত</th>
                  <th>মোট</th>

                  
                </tr>
                <tr>
                  <td>C</td>
                  <td>১০ </td>
                  <td>৩০ </td>
                  <td>৩০ </td>
                  <td>৩০</td>
                  <td>=১০০</td>
                </tr>
                 

              </table>
              <table class="table table-striped">
                <h5>বানিজ্য শাখা হতে উওীর্নদের জন্য</h5>
                <tr>
                  <th>Unit</th>
                   <th>ইংরেজি</th>
                   <th>ব্যবসায় সংগঠন ও ব্যবস্থাপনা</th>
                  <th>হিসাববিজ্ঞান</th>
                  
                  <th>মোট</th>

                  
                </tr>
                <tr>
                  <td>D</td>
                  <td>৪০ </td>
                  <td>৩০ </td>
                  <td>৩০ </td>
                  
                  <td>=১০০</td>
                </tr>
                 

              </table>
                <table class="table table-striped">
                <h5>বিজ্ঞান শাখা হতে উওীর্নদের জন্য(রসায়ন,পদার্থবিজ্ঞান,গনিত,বিষয়ের যেকোন ০২ টি বিষয় উওর দিতে হবে)</h5>
                <tr>
                   <th>Unit</th>
                   <th>ইংরেজি</th>
                   <th>রসায়ন</th>
                  <th>পদার্থবিজ্ঞান</th>
                  <th>গনিত</th>
                  <th>মোট</th>


                  
                </tr>
                <tr>
                  <td>D</td>
                  <td>৪০ </td>
                  <td>৩০ </td>
                  <td>৩০ </td>
                   <td>৩০ </td>
                  
                  <td>=১০০</td>
                </tr>
                 

              </table>
              <table class="table table-striped">
                <h5>মানবিক শাখা হতে উওীর্নদের জন্য(অর্থনীতি,পৌরনীতি বিষয়ের যেকোন ০১ টি বিষয় উওর দিতে হবে)</h5>
                <tr>
                   <th>Unit</th>
                   <th>ইংরেজি</th>
                   <th>বাংলা</th>
                  <th>অর্থনীতি</th>
                  <th>পৌরনীতি</th>
                  <th>মোট</th>


                  
                </tr>
                <tr>
                  <td>D</td>
                  <td>৪০ </td>
                  <td>৩০ </td>
                  <td>৩০ </td>
                   <td>৩০ </td>
                  
                  <td>=১০০</td>
                </tr>
                 

              </table>
            </div>
            </div>
          </div>
          </div>

 



  <div class="container">
 <div class="row admissionrelated">
  <div class="col-sm-12">
    <h4>পরীক্ষার দিন পরীক্ষার্থীর করণীয়</h4>
    <ul style="list-style-type:none;">
      <li>১।পরীক্ষার হলে পরীক্ষার্থীকে অবশ্যই দুই কপি (রঙিন) প্রবেশপত্র নিয়ে আসতে হবে </li>
      <li>২। বৃত্ত ভরাটের ক্ষেত্রে অবশ্যই কালাে কালির বলপয়েন্ট কলম ব্যবহার করতে হবে।</li>
      <li>৩। পরীক্ষার হলে মােবাইল ফোন, ক্যালকুলেটর, ঘড়ি বা অন্য কোনাে ধরনের ইলেকট্রনিক কমিউনিকেশন ডিভাইস আনা সম্পূর্ণ নিষিদ্ধ।</li>
      <li>৪। পরীক্ষায় অংশগ্রহণকারী সকল পরীক্ষার্থীকে সঠিকভাবে শনাক্ত করার জন্য তাদের কানসহ মুখমন্ডল প্রয়ােজন সাপেক্ষে অনাবৃত করতে হবে।</li>
      <li>৫।প্রতিবন্ধী পরীক্ষার্থীর ক্ষেত্রে সংশ্লিষ্ট ইউনিট প্রধানকে (কো-অর্ডিনেটর) পরীক্ষার ১ সপ্তাহ আগে অবহিত করতে হবে।
</li>
     
    </ul>
  </div>
 </div>
  </div>

  

<div class="container-fluid" >

 <div id="mySidenav" class="sidenav">
  <a href="about.php" id="about" >About</a>
  <a href="http://mbstu.ac.bd/index.html" id="blog" style="font-size:14px;">Mbstu Website</a>
 <a href="?action=logout " id="logout">Logout </a>
</div>  
<div class="container">

<h4 style="text-align:center">আগামী ৬ ও ৭ ডিসেম্বর টাঙ্গাইলের মাওলানা ভাসানী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ের ভর্তি পরীক্ষা। ভর্তি পরীক্ষা উপলক্ষে টাঙ্গাইল পৌরসভার উদ্যোগে জেলার সকল সামাজিক,স্বেচ্ছাসেবী ও শ্রমিক সংগঠনের সমন্বয়ে কিছু সিদ্ধান্ত নেয়া হয়েছে </h4>
<ul>
<li>১। ভর্তি পরীক্ষার্থীদের যাতায়াতের সুবিধার্থে সি এন জি ও অটোরিকশায় কোন ভাড়া নেয়া হবে না।</li>
<li>২। আবাসিক হোটেল ও খাবার হোটেলে নির্ধারিত মূল্যে সেবা প্রদান করা হবে।</li>
<li>৩। জেলার সকল মসজিদ,মন্দির,মিলনায়তন শিক্ষার্থীদের থাকার জন্য উন্মুক্ত করে দেয়া হবে।</li>
<li>৪। শহরের বিভিন্ন স্থানে শিক্ষার্থীদের মোবাইল,ব্যাগ অন্যান্য জিনিসপত্র রাখার জন্য বিনামূল্যে বুথ থাকবে।</li>
<li>৫। প্রত্যেক সংগঠন নিজ নিজ সাধ্য অনুযায়ী শিক্ষার্থীদের থাকার ব্যবস্থা করবে।</li>
<li>৬। শিক্ষার্থীদের জন্য পাঁচ শতাধিক সেবক নিয়োজিত থাকবে।</li>
<li>৭। জরুরি প্রয়োজন ছাড়া নাগরিকদের বাইরে বের না হতে অনুরোধ করা হয়েছে।</li>
<li>৮। শিক্ষার্থীদের জন্য মেডিকেল টিম প্রস্তুত থাকবে।</li>
<li>৯। স্কাউট টিম প্রস্তুত থাকবে জানজট নিরসনে।</li>
<li>১০। যেসব জায়গায় ভর্তি পরীক্ষার সিট পড়বে সেসব স্থানে সেবক নিয়োজিত থাকবে।</li>
<li>
১২। শীত মোকাবিলায় কম্বল বিতরণ করা হবে।</li>
<li>
১৩। বাস ভাড়া পূর্ব নির্ধারিত মূল্য থাকবে।</li>
<li>১৪। শহরের সকল পাবলিক টয়লেট বিনামূল্যে ব্যবহার করা যাবে।</li>
<li>
১৫। শিক্ষার্থীদের শীত বস্ত্র সঙ্গে আনার জন্য অনুরোধ করা হচ্ছে।</li>
<li>১৬। শহরের গুরুত্বপূর্ণ স্থানে দিক নির্দেশনামূলক ব্যানার থাকবে।</li>
যে কোন সমস্যার সমাধানে টিম প্রস্তুত থাকবে।

আমন্ত্রণ টাঙ্গাইলে। ভর্তি পরীক্ষার্থীদের সেবা দিতে প্রস্তুত টাঙ্গাইলবাসী।

</ul>

</div>
<!-- Modal off topic -->
  <script type="text/javascript">
                      $(document).ready(function(){
                          $("#tab").click(function(){
                                $("#myModal").modal();
                          });
                      });
                    </script>
 <div class="container">
        <div class="row">
            <div class="col-md-12">
              
               <button id="tab" class="btn btn-success pull-right" style="margin-bottom: 5px;">অফ টপিক</button>
                            
                             <div class="modal fade" id="myModal" role="dialog">
                         <div class="modal-dialog">
    
                <!-- Modal content-->
                     <div class="modal-content" style="background-color: #e7e0e2;">
                     
        
                     <div class="modal-body">

                      <p id="show" style="margin: 0 0 10px;font-size: 19px;line-height: 27px;color: #21213c;font-family: Times;">কত পাইলে চান্স হবে বা কত পাইতে হবে  নির্ভর করে প্রশ্নের উপর ঐসব চিন্তা মাথা থেকে ঝেড়ে ফেলে দাও।নিজের প্রতি আত্মবিশ্বাস রাখ তুমি পারবে,তোমার দ্বারাই হবে। মনে রাখবে একটা কথা হারার আগেই হেরে যেও না,লড়াই করে যাও,দেখবে বিজয় আসবেই |দেখা হবে বিজয়ের পথে <h2 style="color:#EBC666;font-size:40px;" >✌</h2>
<b style="color: #FF4520;margin: 0 auto;margin-bottom: 0px;display: block;margin-bottom: 10px;text-align: center;">সবার জন্য শুভকামনা</b>
বি:দ্র:১.অবশ্যই পরীক্ষার হলে দুই কপি এডমিট কার্ড আনতে হবে।
২.পরীক্ষার হলে ক্যালকুলেটর,মোবাইল, ঘড়ি অন্য কোন ধরনের ইলেকট্রনিক ডিভাইস নিষিদ্ধ।
</p>

                    
                         </div>
                        <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                              </div>
                            </div>
                          </div>
      
                               
                                  </div>
  



            </div>
        </div>
   </div>
   <!-- Modal off topic end -->
  
	<div class="footer" style="height:200px;">
		<h3> ©2019,DEVELOPED BY DEPT. OF ICT(MBSTU)</h3>
   
	</div>
</div>


<?php 
    $query="SELECT*FROM admin";
    $count=$ob->select($query);
    while($row=$count->fetch_assoc()){
       $count1=$row['count1'];
       $new=$count1+1;
       $query="UPDATE admin SET count1='$new'";
       $result=$ob->update( $query);
      
    }

    

  ?>




</body>
</html>