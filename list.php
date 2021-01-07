<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="./style/styles.scss">
    <link rel="stylesheet" href="./style/style1.scss">
    <script type="text/javascript" src="fun.js"></script>
    <title>Document</title>
</head>
<body>
  <?php
  include('header.php');
  ?>
   <!-- <img src="./image/logo1.png" alt="" width="10%"  type = "image/x-icon"> 
    <img src="./image/logo1.png" class="img-responsive" style="padding: 2px;" width="45px" height="45px"> -->
                                      <!-- heading -->
    <h1> To-Do List</h1>
                                      <!-- insert task title-->
    <div class="enter"> 
          <input type="text" placeholder="description"/ >
    </div>
                                       <!-- insert task description-->
    <div class="enter1"> 
          <input type="text" placeholder="title"/ >
    </div>
                                      <!-- add button-->
     <div class="container1">
         <div class="cube">
           <div class="plus">
             <div class="plus-horizontal"></div>
             <div class="plus-vertical"></div>
           </div>
           <div class="quadrant">
             <div class="quadrant__item">
               <div class="quadrant__item__content">
       <svg enable-background="new 0 0 32 32" height="26px" id="Layer_1" version="1.0" viewBox="0 0 32 32" width="26px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="arrow-up"><path d="M31.993,6.077C30.816,6.6,29.552,6.953,28.223,7.11c1.355-0.812,2.396-2.098,2.887-3.63  c-1.269,0.751-2.673,1.299-4.168,1.592C25.744,3.797,24.038,3,22.149,3c-3.625,0-6.562,2.938-6.562,6.563  c0,0.514,0.057,1.016,0.169,1.496C10.301,10.785,5.465,8.172,2.227,4.201c-0.564,0.97-0.888,2.097-0.888,3.3  c0,2.278,1.159,4.286,2.919,5.464c-1.075-0.035-2.087-0.329-2.972-0.821c-0.001,0.027-0.001,0.056-0.001,0.082  c0,3.181,2.262,5.834,5.265,6.437c-0.55,0.149-1.13,0.23-1.729,0.23c-0.424,0-0.834-0.041-1.234-0.117  c0.834,2.606,3.259,4.504,6.13,4.558c-2.245,1.76-5.075,2.811-8.15,2.811c-0.53,0-1.053-0.031-1.566-0.092  C2.905,27.913,6.355,29,10.062,29c12.072,0,18.675-10.001,18.675-18.675c0-0.284-0.008-0.568-0.02-0.85  C30,8.55,31.112,7.395,31.993,6.077z" fill="#973928"/><g/><g/><g/><g/><g/><g/></svg>
               </div>
             </div>
             <div class="quadrant__item">
               <div class="quadrant__item__content">
       <svg enable-background="new 0 0 32 32" height="28px" id="Layer_1" version="1.0" viewBox="0 0 32 32" width="28px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="arrow-right"><path d="M15.996,0.007C7.162,0.007,0,7.168,0,16.004c0,6.551,3.938,12.177,9.575,14.65  c-0.045-1.118-0.008-2.459,0.278-3.672c0.308-1.301,2.058-8.719,2.058-8.719s-0.512-1.021-0.512-2.529  c0-2.369,1.376-4.14,3.087-4.14c1.454,0,2.157,1.091,2.157,2.4c0,1.462-0.934,3.65-1.412,5.676c-0.401,1.696,0.852,3.08,2.522,3.08  c3.031,0,5.072-3.891,5.072-8.504c0-3.505-2.361-6.128-6.655-6.128c-4.852,0-7.874,3.617-7.874,7.659  c0,1.394,0.411,2.377,1.054,3.138c0.297,0.35,0.338,0.489,0.229,0.891c-0.074,0.296-0.25,1.003-0.324,1.283  c-0.107,0.407-0.434,0.551-0.801,0.4c-2.235-0.91-3.275-3.358-3.275-6.11c0-4.543,3.831-9.993,11.433-9.993  c6.106,0,10.128,4.42,10.128,9.164c0,6.275-3.491,10.963-8.633,10.963c-1.728,0-3.353-0.934-3.907-1.992c0,0-0.93,3.686-1.125,4.396  c-0.34,1.231-1.004,2.466-1.61,3.427C12.901,31.769,14.421,32,15.996,32c8.834,0,15.995-7.16,15.995-15.996  S24.83,0.007,15.996,0.007z" fill="#973928"/></svg>
               </div>
             </div>
             <div class="quadrant__item">
               <div class="quadrant__item__content">
       <svg height="30px" id="Layer_1" style="enable-background:new 0 0 56.693 56.693;" version="1.1" viewBox="0 0 56.693 56.693" width="30px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="arrow-left"><path d="M28.6601,51.6829c-0.1281,0-0.2539-0.0037-0.3798-0.0096h-0.0003c-0.0802,0.0062-0.1641,0.0096-0.248,0.0096  c-2.9442,0-4.834-1.3358-6.6613-2.6278c-1.2618-0.8916-2.4524-1.7332-3.8554-1.9669c-0.6846-0.1133-1.366-0.1709-2.0245-0.1709  c-1.1863,0-2.1222,0.1831-2.8054,0.3167c-0.4152,0.0813-0.7734,0.1511-1.0456,0.1511c-0.2844,0-0.5926-0.0615-0.7265-0.5191  c-0.1164-0.3965-0.2006-0.7804-0.2816-1.1519c-0.2087-0.956-0.3569-1.5439-0.7575-1.6054  c-4.6697-0.7213-6.0062-1.7048-6.3042-2.4027c-0.0422-0.0998-0.0662-0.1998-0.0719-0.2988  c-0.0151-0.2681,0.1748-0.5048,0.4397-0.5481c7.1784-1.1821,10.3974-8.5188,10.531-8.8304  c0.0036-0.0086,0.0076-0.0169,0.0115-0.0255c0.4394-0.8903,0.5254-1.6632,0.2566-2.2967c-0.4926-1.161-2.0992-1.6712-3.1628-2.0086  c-0.2602-0.0823-0.5069-0.1602-0.7015-0.237c-2.1222-0.839-2.2988-1.7002-2.2154-2.1391c0.1422-0.7479,1.1417-1.2691,1.95-1.2691  c0.2217,0,0.4168,0.0393,0.5809,0.1159c0.9547,0.4472,1.815,0.6739,2.5574,0.6739c1.0258,0,1.4735-0.4311,1.5283-0.4876  c-0.0261-0.4858-0.0584-0.9933-0.0914-1.5168c-0.2138-3.3938-0.4787-7.6108,0.595-10.0179  c3.218-7.2154,10.0421-7.7759,12.0569-7.7759c0.0516,0,0.8833-0.0088,0.8833-0.0088l0.1193-0.0005  c2.0195,0,8.8585,0.5616,12.0783,7.7809c1.074,2.4084,0.8083,6.629,0.5941,10.0202l-0.0089,0.1474  c-0.0297,0.4723-0.0583,0.9312-0.0823,1.3706c0.0513,0.0524,0.4631,0.4488,1.3931,0.4845h0.001  c0.7067-0.0271,1.5189-0.2524,2.4102-0.6699c0.2613-0.1219,0.5514-0.1477,0.7489-0.1477c0.3016,0,0.6075,0.0584,0.8614,0.1644  l0.0154,0.0063c0.721,0.2555,1.1933,0.7609,1.2034,1.2889c0.0094,0.4972-0.3702,1.2448-2.2323,1.9804  c-0.193,0.0758-0.4397,0.1542-0.7009,0.237c-1.0646,0.3378-2.6707,0.8476-3.163,2.0083c-0.2691,0.6332-0.1829,1.4056,0.2563,2.2964  c0.0039,0.0086,0.0083,0.0169,0.0117,0.0261c0.1336,0.3113,3.3498,7.6459,10.5313,8.8293c0.2652,0.0437,0.4545,0.2802,0.4399,0.5486  c-0.006,0.1006-0.0305,0.2019-0.0734,0.3004c-0.2962,0.6929-1.6317,1.6751-6.3029,2.3969  c-0.3816,0.0586-0.5295,0.5559-0.7572,1.5986c-0.0828,0.3795-0.1667,0.7523-0.2821,1.1443  c-0.0995,0.3402-0.3115,0.4994-0.6681,0.4994h-0.0581c-0.2475,0-0.5994-0.0443-1.0453-0.1318  c-0.7908-0.1547-1.6775-0.2972-2.8056-0.2972c-0.6588,0-1.3404,0.0576-2.0255,0.1709c-1.4014,0.2337-2.5913,1.0737-3.8507,1.964  C33.4947,50.3471,31.6052,51.6829,28.6601,51.6829z" fill="#973928"/></svg>
               </div>
             </div>
             <div class="quadrant__item">
               <div class="quadrant__item__content">
       <svg baseProfile="tiny" height="42px" id="Layer_1" version="1.2" viewBox="0 0 24 24" width="42px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="arrow-down"><g><path d="M13,10h3v3h-3v7h-3v-7H7v-3h3V8.745c0-1.189,0.374-2.691,1.118-3.512C11.862,4.41,12.791,4,13.904,4H16v3h-2.1   C13.402,7,13,7.402,13,7.899V10z" fill="#973928"/></g></svg>
               </div>
             </div>
           </div>
         </div>
       </div>
                                                  <!-- title -->
  <div class="tasks">
  <!-- task 1 -->
  <input id='label-1' type='checkbox' checked/>
  <label for='label-1'>
    <h2>title1
      <span>description</span>
    </h2>   
  </label>
  <!-- task 2 -->
  <input id='label-2' type='checkbox' checked/>
  <label for='label-2'>
    <h2>title1
      <span>art&amp;&amp;code, personal</span>
    </h2>   
  </label>
  <!-- task 3 -->
  <input id='label-3' type='checkbox'/>
  <label for='label-3'>
    <h2>title3
      <span>out of my mind</span>
    </h2>   
  </label>
  <!-- task 4 -->
  <input id='label-4' type='checkbox'/>
  <label for='label-4'>
    <h2>title4
      <span>hit f12 &amp; let's get wasted</span>
    </h2>   
  </label>
  <!-- task 5 -->
  <input id='label-5' type='checkbox'/>
  <label for='label-5'>
    <h2>title5
      <span>Ruby on Rails, yeah!</span>
    </h2>   
  </label>
   </div>
</body>
</html>